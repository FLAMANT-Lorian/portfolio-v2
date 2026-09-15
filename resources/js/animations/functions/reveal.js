import gsap from 'gsap';
import {ScrollTrigger} from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

export function hideRevealItems(items) {
    items.forEach(item => {
        const dir = item.dataset.dir;

        if (dir === 'top') {
            gsap.set(item, { opacity: 0, y: '30px' });
        } else if (dir === 'left') {
            gsap.set(item, { opacity: 0, x: '30px' });
        } else if (dir === 'right') {
            gsap.set(item, { opacity: 0, x: '-30px' });
        }
    });
}

export function reveal(items, params) {

    if (items.length === 0) return;

    items.forEach(item => {

        const dir = item.dataset.dir;
        const delay = item.dataset.delay ?? 0;
        const tl = gsap.timeline({paused: true});

        if (dir === 'top') {
            tl.to(item, {
                opacity: 1,
                y: '0%',
                duration: params.duration ?? 1.2,
                ease: params.ease ?? 'power2.out',
                delay: delay
            });
        } else if (dir === 'left' || dir === 'right') {
            tl.to(item, {
                opacity: 1,
                x: '0%',
                duration: params.duration ?? 1.2,
                ease: params.ease ?? 'power2.out',
                delay: delay
            });
        }

        const st = ScrollTrigger.create({
            trigger: item,
            start: 'top 75%',
            onEnter: () => tl.play(),
        })

        if (st.progress > 0 && !st.isActive) {
            tl.progress(1);
            st.disable();
        }
    });
}
