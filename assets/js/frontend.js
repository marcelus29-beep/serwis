/**
 * 3DPrintHub Frontend
 * assets/js/frontend.js
 */

(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(function (link) {
            link.addEventListener('click', function (e) {
                var target = document.querySelector(this.getAttribute('href'));

                if (!target) {
                    return;
                }

                e.preventDefault();

                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            });
        });

        // Card hover helper
        document.querySelectorAll('.hp-listing').forEach(function (card) {

            card.addEventListener('mouseenter', function () {
                this.classList.add('is-hover');
            });

            card.addEventListener('mouseleave', function () {
                this.classList.remove('is-hover');
            });

        });

        // Auto hide notices
        setTimeout(function () {
            document.querySelectorAll('.tdph-notice').forEach(function (notice) {
                notice.classList.add('is-hidden');
            });
        }, 5000);

    });

})();
