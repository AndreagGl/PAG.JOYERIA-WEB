function initializeNavbar() {

    const navbar = document.getElementById("navbar");

    const menuToggle = document.getElementById("menu-toggle");

    const mobileMenu = document.getElementById("mobile-menu");


    if (!navbar) {
        return;
    }


    /*
    ==========================================
    NAVBAR AL HACER SCROLL
    ==========================================
    */

    function handleScroll() {

        if (window.scrollY > 50) {

            navbar.classList.add("navbar-scrolled");

        } else {

            navbar.classList.remove("navbar-scrolled");

        }

    }


    window.addEventListener(
        "scroll",
        handleScroll,
        { passive: true }
    );


    handleScroll();


    /*
    ==========================================
    MENÚ MÓVIL
    ==========================================
    */

    if (menuToggle && mobileMenu) {

        menuToggle.addEventListener(
            "click",
            function () {

                const isOpen =
                    mobileMenu.classList.toggle(
                        "mobile-menu-open"
                    );


                menuToggle.classList.toggle(
                    "menu-open",
                    isOpen
                );


                menuToggle.setAttribute(
                    "aria-expanded",
                    isOpen ? "true" : "false"
                );

            }
        );


        /*
        ==========================================
        CERRAR MENÚ AL SELECCIONAR UNA OPCIÓN
        ==========================================
        */

        const mobileLinks =
            mobileMenu.querySelectorAll("a");


        mobileLinks.forEach(function (link) {

            link.addEventListener(
                "click",
                function () {

                    mobileMenu.classList.remove(
                        "mobile-menu-open"
                    );


                    menuToggle.classList.remove(
                        "menu-open"
                    );


                    menuToggle.setAttribute(
                        "aria-expanded",
                        "false"
                    );

                }
            );

        });

    }

}


/*
==========================================
INICIALIZAR NAVBAR
==========================================
*/

document.addEventListener(
    "DOMContentLoaded",
    initializeNavbar
);