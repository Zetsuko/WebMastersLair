<?php
    $activo ="nosotros";
    require 'includes/funciones.php';
    incluirTemplate('header', $activo);?>

    <main class="contenedor">
        <h1>Nosotros</h1>
        <div class="contenedor__nosotros">
            <div class="nosotros">
                <div class="nosotros__contenido">   
                <p> Somos una empresa comprometida en brindar los mejores servicios y algo no sé la verdad esta empresa no existe
                    solo somos un invento del gobierno o de la imaginación del programador como sea compra algo
                </p>
                <p>Ya ni sé porque sigues leyendo pero bueno tú pierdes tu tiempo
                </p>
                </div>
            <img  class="nosotros__imagen" src="img/logoProvisional.png" alt="Logo">
            </div>
        </div>

        <h1>Porqué comprar con nosotros</h1> <!--AQUÍ EMPIEZA LA SEGUNDA PARTE-->
        <div class="porque">
        <section class="porque__razon">
            <DIv class="porque__razon--iconos">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-coin" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#017687" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <circle cx="12" cy="12" r="9" />
                <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 0 0 0 4h2a2 2 0 0 1 0 4h-2a2 2 0 0 1 -1.8 -1" />
                <path d="M12 6v2m0 8v2" />
              </svg>
            </DIv>
              <h3>compra insegura</h3>
              <p>nosotros te estafaremos porque es lo que mejor hacemos</p>
        </section>

        <section class="porque__razon">
            <DIv class="porque__razon--iconos">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alien" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#017687" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M11 17a2.5 2.5 0 0 0 2 0" />
                <path d="M12 3c-4.664 0 -7.396 2.331 -7.862 5.595a11.816 11.816 0 0 0 2 8.592a10.777 10.777 0 0 0 3.199 3.064c1.666 1 3.664 1 5.33 0a10.777 10.777 0 0 0 3.199 -3.064a11.89 11.89 0 0 0 2 -8.592c-.466 -3.265 -3.198 -5.595 -7.862 -5.595z" />
                <line x1="8" y1="11" x2="10" y2="13" />
                <line x1="16" y1="11" x2="14" y2="13" />
              </svg>
            </DIv>
              <h3>Para raritos como tú</h3>
              <p>comprame algo rarito que no tengo dinero</p>
        </section>

        <section class="porque__razon">
            <DIv class="porque__razon--iconos">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-truck-delivery" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#017687" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <circle cx="7" cy="17" r="2" />
                <circle cx="17" cy="17" r="2" />
                <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                <line x1="3" y1="9" x2="7" y2="9" />
              </svg>
            </DIv>
              <h3>Estos productos son robados</h3>
              <p>De un camión que se cayó por eso están más caros, asesiné al conductor para traerte estos productos por favor compra todo que me quedé sin casa porque la policía me está buscando</p>
        </section>

        <section class="porque__razon">
            <DIv class="porque__razon--iconos">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shield-check" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#017687" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M9 12l2 2l4 -4" />
                <path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3" />
              </svg>
            </DIv>
              <h3>Compra insegura</h3>
              <p>Ten por seguro que no te llegarán ninguno de nuestros productos</p>
        </section>

        </div>
    </main>
<?php
    incluirTemplate("footer", $active="");
    ?>