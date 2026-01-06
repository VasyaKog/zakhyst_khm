@props(['cards' => []])

<div class="relative w-full" style="perspective: 1000px;">
    <div class="service-cards-container relative w-full" style="overflow: visible;">
        {{ $slot }}
    </div>
</div>

<style>
    /* Mobile Styles (Default) */
    .service-cards-container {
        position: relative;
        width: 100%;
        height: auto;
        display: flex;
        flex-direction: column;
        gap: 40px;
    }

    .service-card-wrapper {
        position: relative;
        width: 100%;
        height: auto;
    }

    /* Desktop Styles */
    @media (min-width: 1024px) {
        .service-cards-container {
            display: block;
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
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const container = document.querySelector('.service-cards-container');
        if (!container) return;

        let isDesktop = window.innerWidth >= 1024;
        let wrappers = container.querySelectorAll('.service-card-wrapper');
        const cardCount = wrappers.length;
        const cardWidth = 695;
        let cardOrder = Array.from({ length: cardCount }, (_, i) => i);
        let positions = [];

        function initDesktop() {
            if (!isDesktop) return;
            positions = calculatePositions();
            updatePositions();

            wrappers.forEach((wrapper, index) => {
                wrapper.style.position = 'absolute';
            });
        }

        function resetMobile() {
            if (isDesktop) return;
            wrappers.forEach(wrapper => {
                wrapper.style.left = '';
                wrapper.style.transform = '';
                wrapper.style.zIndex = '';
                wrapper.style.position = '';
            });
        }

        // Calculate spacing to fill available width
        function calculatePositions() {
            const containerWidth = container.offsetWidth;
            const spacing = (containerWidth - cardWidth) / (cardCount - 1);
            return Array.from({ length: cardCount }, (_, i) => i * spacing);
        }

        wrappers.forEach((wrapper, index) => {
            wrapper.addEventListener('click', function (e) {
                if (!isDesktop) return;

                const posInOrder = cardOrder.indexOf(index);
                if (posInOrder === 0) return;

                // Move clicked card to front
                cardOrder = [index, ...cardOrder.filter(i => i !== index)];

                // Update z-index
                wrappers.forEach((w, idx) => {
                    const newPos = cardOrder.indexOf(idx);
                    const zIndex = 40 - (newPos * 10);
                    w.style.zIndex = zIndex;
                });

                // Animate
                updatePositions(true);
                setTimeout(() => updatePositions(false), 250);
            });
        });

        function updatePositions(isAnimating) {
            if (!isDesktop) return;

            cardOrder.forEach((cardIdx, position) => {
                const wrapper = wrappers[cardIdx];
                const leftValue = positions[position];
                const isMoving = position === 0 && isAnimating;
                const lift = isMoving ? '-30px' : '0px';

                wrapper.style.left = `${leftValue}px`;
                wrapper.style.transform = `translateY(${lift})`;
            });
        }

        // Init
        if (isDesktop) initDesktop();

        // Resize Handler
        window.addEventListener('resize', function () {
            const newIsDesktop = window.innerWidth >= 1024;

            if (newIsDesktop !== isDesktop) {
                isDesktop = newIsDesktop;
                if (isDesktop) {
                    initDesktop();
                } else {
                    resetMobile();
                }
            } else if (isDesktop) {
                // Just update positions if resizing within desktop
                positions = calculatePositions();
                updatePositions();
            }
        });
    });
</script>