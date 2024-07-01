document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.swiper-container', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            type: 'custom',
            renderCustom: function (swiper, current, total) {
                var progress = Math.round((current / total) * 100);
                return '<span class="swiper-pagination-current">' + ('0' + current).slice(-2) + '</span>' +
                    '<div class="swiper-pagination-progress"><div class="swiper-pagination-progress-bar" style="height:' + progress + '%"></div></div>' +
                    '<span class="swiper-pagination-total">' + ('0' + total).slice(-2) + '</span>';
            },
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        speed: 600,
    });
});