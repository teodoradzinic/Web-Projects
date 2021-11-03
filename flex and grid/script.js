const hamburger = document.querySelector('button[aria-expanded]');

        function klappNav() {
            console.log(this);
            const expanded = this.getAttribute('aria-expanded') === 'true' || false;
            hamburger.setAttribute('aria-expanded', !expanded);
        }
        hamburger.addEventListener('click', klappNav);