@props(['cards' => []])

<div class="relative w-full perspective-1000">
    <div class="service-cards-container relative w-full overflow-visible">
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
            position: relative;
            height: 695px;
            /* Default, will be overridden by JS if needed */
        }

        .service-card-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            width: 695px;
            height: 695px;
            /* Default, will be overridden by JS if needed */
            min-height: 695px;

            transition: transform 0.25s cubic-bezier(0.34, 1.56, 0.64, 1);
            cursor: pointer;
        }

        /* Z-Index Layering */
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
        const baseHeight = 695; // Minimum height at 100% text zoom
        let cardOrder = Array.from({ length: cardCount }, (_, i) => i);
        let positions = [];

        // Equalize card heights: measure content, use max(695px, tallest)
        function equalizeHeights() {
            if (!isDesktop) {
                // Reset mobile styles
                wrappers.forEach(w => {
                    w.style.height = '';
                    const card = w.querySelector('.js-service-card');
                    if (card) card.style.height = '';
                });
                container.style.height = '';
                return;
            }

            // Step 1: Reset heights to auto and temporarily show overflow to measure true content
            wrappers.forEach(w => {
                w.style.height = 'auto';
                const card = w.querySelector('.js-service-card');
                if (card) {
                    card.style.height = 'auto';
                    // Find the content container (relative div with z-20)
                    const contentDiv = card.querySelector('.relative.z-20');
                    if (contentDiv) {
                        contentDiv.style.overflow = 'visible';
                    }
                }
            });
            container.style.height = 'auto';

            // Step 2: Measure the tallest card's natural content height
            let maxHeight = baseHeight; // 695px minimum
            wrappers.forEach(w => {
                const card = w.querySelector('.js-service-card');
                if (card) {
                    // Measure the card's scrollHeight (includes all content)
                    const cardHeight = card.scrollHeight;
                    if (cardHeight > maxHeight) {
                        maxHeight = cardHeight;
                    }
                }
            });

            // Step 3: Apply the calculated height and restore overflow-hidden
            wrappers.forEach(w => {
                w.style.height = `${maxHeight}px`;
                const card = w.querySelector('.js-service-card');
                if (card) {
                    card.style.height = `${maxHeight}px`;
                    // Restore overflow-hidden on content container
                    const contentDiv = card.querySelector('.relative.z-20');
                    if (contentDiv) {
                        contentDiv.style.overflow = '';
                    }
                }
            });
            container.style.height = `${maxHeight}px`;
        }

        function initDesktop() {
            if (!isDesktop) return;
            positions = calculatePositions();
            updatePositions();
            equalizeHeights();
        }

        function resetMobile() {
            if (isDesktop) return;
            wrappers.forEach(wrapper => {
                wrapper.style.transform = '';
                wrapper.style.zIndex = '';
                wrapper.style.left = '';
                wrapper.style.position = '';
                wrapper.style.top = '';
                wrapper.style.height = '';
            });
            container.style.height = '';
        }

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

                cardOrder = [index, ...cardOrder.filter(i => i !== index)];

                wrappers.forEach((w, idx) => {
                    const newPos = cardOrder.indexOf(idx);
                    const zIndex = 40 - (newPos * 10);
                    w.style.zIndex = zIndex;
                });

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
                const lift = isMoving ? -30 : 0;
                wrapper.style.transform = `translate(${leftValue}px, ${lift}px)`;
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
            }

            if (isDesktop) {
                positions = calculatePositions();
                updatePositions(false);
                equalizeHeights();
            }
        });

        // Window Load - ensure fonts/images are loaded before measuring
        window.addEventListener('load', function () {
            if (isDesktop) {
                positions = calculatePositions();
                updatePositions(false);
                equalizeHeights();
            }
        });

        // Font Size Polling - detect accessibility text zoom changes
        // Poll the root font size every 500ms and re-equalize if it changed
        let lastFontSize = parseFloat(getComputedStyle(document.documentElement).fontSize);

        setInterval(() => {
            if (!isDesktop) return;

            const currentFontSize = parseFloat(getComputedStyle(document.documentElement).fontSize);
            if (currentFontSize !== lastFontSize) {
                lastFontSize = currentFontSize;
                equalizeHeights();
            }
        }, 500);
    });
</script>