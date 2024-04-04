const navLinks = document.querySelectorAll('nav ul li a');

        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navLinks.forEach(otherLink => otherLink.classList.remove('active'));
                this.classList.add('active');
            });
        });