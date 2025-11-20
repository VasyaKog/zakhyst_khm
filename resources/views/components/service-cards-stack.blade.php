@props(['cards' => []])

<div class="relative w-full" style="perspective: 1000px;">
    <div class="service-cards-container relative w-full" style="height: 695px; overflow: visible;">
        {{ $slot }}
    </div>
</div>

<style>
    .service-cards-container {
        position: relative;
        width: 100%;
        height: 695px;
    }

    .service-card-wrapper {
        position: absolute;
        width: 695px;
        height: 100%;
        transition: left 0.25s cubic-bezier(0.34, 1.56, 0.64, 1), transform 0.25s cubic-bezier(0.34, 1.56, 0.64, 1);
        cursor: pointer;
    }

    .service-card-wrapper:nth-child(1) {
        z-index: 40;
    }

    .service-card-wrapper:nth-child(2) {
        z-index: 30;
    }

    .service-card-wrapper:nth-child(3) {
        z-index: 20;
    }

    .service-card-wrapper:nth-child(4) {
        z-index: 10;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const container = document.querySelector('.service-cards-container');
        if (!container) return;

        const wrappers = container.querySelectorAll('.service-card-wrapper');
        const cardCount = wrappers.length;
        const cardWidth = 695;
        let cardOrder = Array.from({length: cardCount}, (_, i) => i);

        // Calculate spacing to fill available width
        function calculatePositions() {
            const containerWidth = container.offsetWidth;
            const spacing = (containerWidth - cardWidth) / (cardCount - 1);
            const positions = Array.from({length: cardCount}, (_, i) => i * spacing);
            return positions;
        }

        let positions = calculatePositions();

        wrappers.forEach((wrapper, index) => {
            wrapper.addEventListener('click', function(e) {
                const posInOrder = cardOrder.indexOf(index);
                if (posInOrder === 0) return; // Already at front

                // Move clicked card to front
                cardOrder = [index, ...cardOrder.filter(i => i !== index)];

                // Update z-index instantly
                wrappers.forEach((w, idx) => {
                    const newPos = cardOrder.indexOf(idx);
                    const zIndex = 40 - (newPos * 10);
                    w.style.zIndex = zIndex;
                });

                // Animate position and lift
                updatePositions(true);

                // Remove lift after animation completes
                setTimeout(() => {
                    updatePositions(false);
                }, 250);
            });
        });

        function updatePositions(isAnimating) {
            cardOrder.forEach((cardIdx, position) => {
                const wrapper = wrappers[cardIdx];
                const leftValue = positions[position];
                const isMoving = position === 0 && isAnimating;
                const lift = isMoving ? '-30px' : '0px';

                wrapper.style.left = `${leftValue}px`;
                wrapper.style.transform = `translateY(${lift})`;
            });
        }

        // Initial positioning
        updatePositions();

        // Recalculate on window resize
        window.addEventListener('resize', function() {
            positions = calculatePositions();
            updatePositions();
        });
    });
</script>
