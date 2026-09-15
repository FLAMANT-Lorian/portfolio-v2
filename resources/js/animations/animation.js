import {hideRevealItems, reveal} from "./functions/reveal.js";
import {ScrollTrigger} from "gsap/ScrollTrigger";

(function () {
    const animation = {
        init() {
            const items = document.querySelectorAll('[data-reveal]');
            reveal(items, {
                'duration': 0.6,
                'ease': 'power1.out'
            });
        },
    };

    function hideItemsNow() {
        const items = document.querySelectorAll('[data-reveal]');
        hideRevealItems(items);
    }

    addEventListener('DOMContentLoaded', () => {
        if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            hideItemsNow();
            animation.init();
        }
    });

    addEventListener('livewire:navigated', () => {
        if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            hideItemsNow();
            window.scrollTo(0, 0);

            requestAnimationFrame(() => {
                animation.init();
                ScrollTrigger.refresh(true);
            });
        }
    });
})();
