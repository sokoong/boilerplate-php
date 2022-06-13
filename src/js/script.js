var ap = {
    init: () => {
        ap.window.init();
        ap.responsive.menu.init();
    },
    window: {
        init: () => {
            if (window.pageYOffset > 10) {
                $("header").addClass("stick");
            }
            $(window).on("scroll", function () {
                window.pageYOffset > 10 ? $("header").addClass("stick") : $("header").removeClass("stick");
            });
        },
    },
    responsive: {
        menu: {
            init: () => {
                $(".sub-menu>a").on("click", function () {
                    $(this).next().toggle();
                });
            },
            toggle: () => {
                $("header").toggleClass("active");
            },
        },
    },
};

$(function () {
    ap.init();
});
