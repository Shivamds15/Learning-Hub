    const navbar = document.querySelector('.header .navbar');
    const header = document.querySelector('.header');

    window.addEventListener('scroll', () => {
        header.classList.toggle('active', window.scrollY > 0);
        if (window.scrollY > 0) navbar.classList.remove('active');
    });

    window.addEventListener('load', () => header.classList.toggle('active', window.scrollY > 0));
