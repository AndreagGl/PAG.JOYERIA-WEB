<?php
/*
|--------------------------------------------------------------------------
| PÁGINA PRINCIPAL - JOYERÍA
|--------------------------------------------------------------------------
| Ubicación:
| PAG. JOYERIA/frontend/index.php
|--------------------------------------------------------------------------
*/

// ==========================================================
// CONEXIÓN A LA BASE DE DATOS
// ==========================================================

require_once __DIR__ . '/../backend/config/database.php';


// ==========================================================
// COMPONENTES
// ==========================================================

include __DIR__ . '/components/header.php';
include __DIR__ . '/components/navbar.php';

?>

<main class="home">

    <!-- ==========================================================
         HERO PRINCIPAL
         ========================================================== -->

    <section class="hero">

        <div class="hero-overlay"></div>

        <div class="hero-content">

            <span class="hero-subtitle">
                JOYERÍA
            </span>

            <h1>
                Elegancia<br>
                que perdura
            </h1>

            <p>
                Descubre piezas creadas para acompañar
                tus momentos más especiales.
            </p>

            <div class="hero-buttons">

                <a href="catalogo.php" class="btn btn-primary">
                    VER COLECCIÓN
                </a>

                <a href="nosotros.php" class="btn btn-secondary">
                    CONÓCENOS
                </a>

            </div>

        </div>

        <div class="hero-scroll">

            <span>
                DESCUBRE MÁS
            </span>

            <span class="scroll-line"></span>

        </div>

    </section>


    <!-- ==========================================================
         INTRODUCCIÓN
         ========================================================== -->

    <section class="intro">

        <div class="intro-content">

            <span class="section-label">
                NUESTRA ESENCIA
            </span>

            <h2>
                Detalles que hablan<br>
                por ti.
            </h2>

            <p>
                Cada pieza representa una forma de expresar
                tu personalidad, tu estilo y esos momentos
                que merecen ser recordados.
            </p>

            <a href="catalogo.php" class="text-link">
                DESCUBRIR COLECCIÓN
                <span>→</span>
            </a>

        </div>

    </section>


    <!-- ==========================================================
         CATEGORÍAS
         ========================================================== -->

    <section class="categories">

        <div class="section-heading">

            <span class="section-label">
                COLECCIÓN
            </span>

            <h2>
                Encuentra tu pieza
            </h2>

        </div>


        <div class="category-grid">

            <!-- ANILLOS -->

            <a
                href="catalogo.php?categoria=anillos"
                class="category-card"
            >

                <div class="category-image category-ring"></div>

                <div class="category-info">

                    <span>
                        01
                    </span>

                    <h3>
                        Anillos
                    </h3>

                    <p>
                        Descubrir colección →
                    </p>

                </div>

            </a>


            <!-- COLLARES -->

            <a
                href="catalogo.php?categoria=collares"
                class="category-card"
            >

                <div class="category-image category-necklace"></div>

                <div class="category-info">

                    <span>
                        02
                    </span>

                    <h3>
                        Collares
                    </h3>

                    <p>
                        Descubrir colección →
                    </p>

                </div>

            </a>


            <!-- ARETES -->

            <a
                href="catalogo.php?categoria=aretes"
                class="category-card"
            >

                <div class="category-image category-earrings"></div>

                <div class="category-info">

                    <span>
                        03
                    </span>

                    <h3>
                        Aretes
                    </h3>

                    <p>
                        Descubrir colección →
                    </p>

                </div>

            </a>

        </div>

    </section>


    <!-- ==========================================================
         LLAMADA A LA ACCIÓN
         ========================================================== -->

    <section class="collection-banner">

        <div class="collection-banner-content">

            <span class="section-label">
                NUEVA COLECCIÓN
            </span>

            <h2>
                Tu estilo.<br>
                Tu historia.
            </h2>

            <p>
                Explora nuestra selección de piezas
                cuidadosamente elegidas.
            </p>

            <a
                href="catalogo.php"
                class="btn btn-primary"
            >
                EXPLORAR AHORA
            </a>

        </div>

    </section>

</main>


<?php

// ==========================================================
// FOOTER
// ==========================================================

include __DIR__ . '/components/footer.php';

?>