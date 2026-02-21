// Reveal animations
const io = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) entry.target.classList.add('show');
    });
}, { threshold: 0.15 });

document.querySelectorAll('.reveal').forEach(el => io.observe(el));

// Counter animation
function animateCounter(el, target, duration = 1400) {
    const start = 0;
    const startTime = performance.now();
    function tick(now) {
        const p = Math.min(1, (now - startTime) / duration);
        const eased = 1 - Math.pow(1 - p, 3);
        el.textContent = Math.floor(start + (target - start) * eased).toLocaleString();
        if (p < 1) requestAnimationFrame(tick);
    }
    requestAnimationFrame(tick);
}

const counters = document.querySelectorAll('.counter__num');
const counterIO = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        const el = entry.target;
        const target = parseInt(el.getAttribute('data-target'), 10) || 0;
        animateCounter(el, target);
        obs.unobserve(el);
    });
}, { threshold: 0.6 });
counters.forEach(el => counterIO.observe(el));

document.getElementById('year').textContent = new Date().getFullYear();