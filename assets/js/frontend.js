/**
 * ============================================================
 * 3DPrintHub Frontend
 * File: assets/js/frontend.js
 * Version: 1.0
 * ============================================================
 */

(function () {

    'use strict';

    /**
     * DOM Ready
     */
    document.addEventListener('DOMContentLoaded', function () {

        initSmoothScroll();
        initListingCards();
        initNotices();

    });

    /**
     * Smooth scroll
     */
    function initSmoothScroll() {

        const anchors = document.querySelectorAll('a[href^="#"]');

        anchors.forEach(function (anchor) {

            anchor.addEventListener('click', function (e) {

                const target = document.querySelector(
                    this.getAttribute('href')
                );

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

    }

    /**
     * Hover effect
     */
    function initListingCards() {

        const cards = document.querySelectorAll('.hp-listing');

        cards.forEach(function (card) {

            card.addEventListener('mouseenter', function () {

                this.classList.add('is-hover');

            });

            card.addEventListener('mouseleave', function () {

                this.classList.remove('is-hover');

            });

        });

    }

    /**
     * Hide notices
     */
    function initNotices() {

        setTimeout(function () {

            document
                .querySelectorAll('.tdph-notice')
                .forEach(function (notice) {

                    notice.classList.add('is-hidden');

                });

        }, 5000);

    }

    /**
     * Scroll to top
     */
    window.tdphScrollTop = function () {

        window.scrollTo({

            top: 0,
            behavior: 'smooth'

        });

    };

    /**
     * Simple debounce helper
     */
    window.tdphDebounce = function (callback, delay) {

        let timer;

        return function () {

            const context = this;
            const args = arguments;

            clearTimeout(timer);

            timer = setTimeout(function () {

                callback.apply(context, args);

            }, delay);

        };

    };

})();