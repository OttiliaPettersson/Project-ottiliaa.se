let lastScrolledAt = new Date().getTime();

function logScrollDepth() {
    let currentScrollTime = new Date().getTime();
    let diff = currentScrollTime - lastScrolledAt;

    if (diff > 1000) {
        lastScrolledAt = currentScrollTime;
        let scrollDepth = window.scrollY || document.documentElement.scrollTop;

        console.log('Scrolldjup:', scrollDepth);
    }
}

window.addEventListener('scroll', logScrollDepth);
