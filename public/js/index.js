// Navbar scroll
const nav = document.getElementById('landingNav');
window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 60);
});

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
        e.preventDefault();
        const el = document.querySelector(a.getAttribute('href'));
        if (el) el.scrollIntoView({ behavior: 'smooth' });

        // close mobile menu
        const collapse = document.getElementById('navbarContent');
        const bsCollapse = bootstrap.Collapse.getInstance(collapse);
        if (bsCollapse) bsCollapse.hide();
    });
});

// Contact form
document.getElementById('contactForm').addEventListener('submit', e => {
    e.preventDefault();
    const btn = document.getElementById('btnSubmitContact');
    const orig = btn.innerHTML;
    btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Mengirim...';
    btn.disabled = true;

    setTimeout(() => {
        btn.innerHTML = orig;
        btn.disabled = false;
        e.target.reset();
        const toast = new bootstrap.Toast(document.getElementById('successToast'));
        toast.show();
    }, 1200);
});