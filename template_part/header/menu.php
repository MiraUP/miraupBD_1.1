<!-- Modal -->
<div class="modal fade" id="main-menu" tabindex="-1" aria-labelledby="mainMenuLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-body">
        
        <div class="container">
          <div class="row head">
            <div class="col me-auto">
              <h2 class="modal-title text-center fw-semibold">Menu</h2>
            </div>
            <div class="col-auto col-btn-close">
              <button class="button-close icon-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="row justify-content-md-center">
              <div class="col col-md-8">
                <i class="hr-rectangle hr-blue"></i>
              </div>
            </div>
          </div>

          <div class="row navegation">
            <div class="col-lg-4 col-md-12 text-center d-none d-lg-block">
              <h3>Navegação</h3>

              <?php wp_nav_menu( array( 'theme_location' => 'miraupbd_menu_nav', 'depth' => 1 )); ?>
              
            </div>

            <div class="col-lg-4 col-md-12 text-center d-none d-lg-block">
              <h3>Categorias</h3>
              
              <?php wp_nav_menu( array( 'theme_location' => 'miraupbd_menu_cat', 'depth' => 1 )); ?>

            </div>

            <div class="col-lg-4 col-md-12 text-center d-none d-lg-block">
              <h3>Bancos</h3>

               <?php wp_nav_menu( array( 'theme_location' => 'miraupbd_menu_db', 'depth' => 1 )); ?>

            </div>

            <div class="col-lg-12 text-center d-block d-lg-none">
              <div class="accordion" id="accordionMenuMobile">
                <div class="accordion-item">
                  <h3 class="accordion-header" id="headingNavegacao">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNavegacao" aria-expanded="true" aria-controls="collapseNavegacao">
                      Navegação
                    </button>
                  </h3>
                  <div id="collapseNavegacao" class="accordion-collapse collapse show" aria-labelledby="headingNavegacao" data-bs-parent="#accordionMenuMobile">
                    <div class="accordion-body">
                      <ul>
                        <li><a href="">Ínicio</a></li>
                        <li><a href="">Processos de criação</a></li>
                        <li><a href="">Templates</a></li>
                        <li><a href="">Referências</a></li>
                        <li><a href="">Favoritos</a></li>
                        <li><a href="">Novidades</a></li>
                        <li><a href="">Downloads</a></li>
                        <li><a href="">Sua conta</a></li>
                        <li><a href="">Site principal</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h3 class="accordion-header" id="headingCategorias">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCategorias" aria-expanded="false" aria-controls="collapseCategorias">
                      Categorias
                    </button>
                  </h3>
                  <div id="collapseCategorias" class="accordion-collapse collapse" aria-labelledby="headingCategorias" data-bs-parent="#accordionMenuMobile">
                    <div class="accordion-body">
                      <ul>
                        <li><a href="">Identidade visual</a></li>
                        <li><a href="">Ilustrações</a></li>
                        <li><a href="">Ícones</a></li>
                        <li><a href="">Fotos</a></li>
                        <li><a href="">Social medias</a></li>
                        <li><a href="">Ui kit</a></li>
                        <li><a href="">Wireframes</a></li>
                        <li><a href="">Códigos</a></li>
                        <li><a href="">Vídeos</a></li>
                        <li><a href="">Apresentações</a></li>
                        <li><a href="">Editorial</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h3 class="accordion-header" id="headingBanco">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBanco" aria-expanded="false" aria-controls="collapseBanco">
                      Bancos
                    </button>
                  </h3>
                  <div id="collapseBanco" class="accordion-collapse collapse" aria-labelledby="headingBanco" data-bs-parent="#accordionMenuMobile">
                    <div class="accordion-body">
                      <ul>
                        <li><a href="">UI 8</a></li>
                        <li><a href="">Lordicon</a></li>
                        <li><a href="">Adobe Stock</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php get_template_part( 'template_part/footer/footer' ); ?>
        </div>
      </div>
    </div>
  </div>
</div>