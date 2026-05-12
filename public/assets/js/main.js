
// ===== NAVBAR SCROLL =====
const nav = document.getElementById('mainNav');
window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 40);
    // back to top
    document.getElementById('backToTop').classList.toggle('show', window.scrollY > 400);
});

// ===== BACK TO TOP =====
document.getElementById('backToTop').addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

// ===== DARK MODE =====
const toggleBtns = document.querySelectorAll('#darkToggle');
let dark = false;
toggleBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        dark = !dark;
        document.body.classList.toggle('dark-mode', dark);
        toggleBtns.forEach(b => b.querySelector('i').className = dark ? 'bi bi-sun' : 'bi bi-moon-stars');
    });
});

// ===== SCROLL ANIMATIONS =====
const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
        if (e.isIntersecting) {
            e.target.classList.add('visible');
            // trigger counters when stats come into view
            e.target.querySelectorAll('[data-target]').forEach(animateCounter);
        }
    });
}, { threshold: 0.12 });
document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));

// Also observe counter sections independently
const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(e => {
        if (e.isIntersecting) {
            e.target.querySelectorAll('[data-target]').forEach(animateCounter);
            counterObserver.unobserve(e.target);
        }
    });
}, { threshold: 0.3 });
document.querySelectorAll('#testimonials .row.g-0, #hero .hero-card').forEach(el => counterObserver.observe(el));

// ===== COUNTER ANIMATION =====
const animated = new Set();
function animateCounter(el) {
    if (animated.has(el)) return;
    animated.add(el);
    const target = +el.dataset.target;
    const suffix = el.dataset.suffix || '';
    const duration = 1800;
    const step = target / (duration / 16);
    let current = 0;
    const timer = setInterval(() => {
        current = Math.min(current + step, target);
        el.textContent = Math.floor(current) + (suffix || (target === 100 ? '' : ''));
        if (current >= target) {
            clearInterval(timer);
            el.textContent = target + suffix;
        }
    }, 16);
}

// ===== TESTIMONIAL SLIDER =====
const testimonials = [
    { stars: '★★★★★', text: '"Switching to Cain & Co was the best business decision we made last year. Our books are always up to date, VAT is handled seamlessly, and I finally sleep at night knowing our finances are in expert hands."', init: 'JM', name: 'James Mitchell', role: 'Director, Meridian Group · Canary Wharf' },
    { stars: '★★★★★', text: '"As a restaurant owner, I was drowning in receipts and payroll chaos. Cain & Co sorted everything within a week. Fixed fees mean I can plan my cash flow properly. Absolutely transformed my business."', init: 'SR', name: 'Sarah Rahman', role: 'Owner, The Spice Room · Shoreditch' },
    { stars: '★★★★★', text: '"The proactive support is what sets them apart. My accountant at Cain & Co spotted a cashflow issue three months before it became a problem. That kind of foresight is genuinely priceless for a small business."', init: 'AT', name: 'Alex Thompson', role: 'MD, BuildRight Construction · South London' },
    { stars: '★★★★★', text: '"After years of unpredictable accounting bills, Cain & Co\'s fixed fee model was a revelation. Our accounts are always current, HMRC has never contacted us about an issue, and the team is always one call away."', init: 'LC', name: 'Linda Chen', role: 'Founder, Nova Tech Ltd · Shoreditch' },
    { stars: '★★★★★', text: '"We refer every business owner we know to Cain & Co. The payroll management alone has saved us 15 hours a month. And yes, we did receive our champagne — a very nice touch!"', init: 'RB', name: 'Robert Barnes', role: 'Partner, Thames Ventures · Canary Wharf' },
];

let testiIdx = 0;
function renderTestimonials() {
    const visible = window.innerWidth < 768 ? 1 : window.innerWidth < 992 ? 2 : 3;
    const items = document.querySelectorAll('.testi-item');
    items.forEach((el, i) => {
        const t = testimonials[(testiIdx + i) % testimonials.length];
        el.querySelector('.testi-stars').textContent = t.stars;
        el.querySelector('.testi-text').textContent = t.text;
        el.querySelector('.testi-avatar').textContent = t.init;
        el.querySelector('.testi-name').textContent = t.name;
        el.querySelector('.testi-role').textContent = t.role;
    });
}
document.getElementById('testiNext').addEventListener('click', () => { testiIdx = (testiIdx + 1) % testimonials.length; renderTestimonials(); });
document.getElementById('testiPrev').addEventListener('click', () => { testiIdx = (testiIdx - 1 + testimonials.length) % testimonials.length; renderTestimonials(); });
// Auto advance
setInterval(() => { testiIdx = (testiIdx + 1) % testimonials.length; renderTestimonials(); }, 5000);

// ===== ACTIVE NAV ON SCROLL =====
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.navbar-nav .nav-link:not(.dropdown-toggle)');
window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(sec => {
        if (window.scrollY >= sec.offsetTop - 120) current = sec.getAttribute('id');
    });
    navLinks.forEach(link => {
        link.classList.toggle('active', link.getAttribute('href') === '#' + current);
    });
});