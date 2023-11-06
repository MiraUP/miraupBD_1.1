<?php global $current_user; ?>
<div class="offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="offcanvasProfile" aria-labelledby="offcanvasProfileLabel">
  <div class="offcanvas-header">
    <h2 class="offcanvas-title h4 fw-semibold" id="offcanvasProfileLabel">Perfil</h2>
    <button type="button" class="button-close icon-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    
    <div class="profile text-center">
      <a href="#" class="avatar avatar-circle smille-03">

        <?php
          function is_user_online($user_id) {
            // get the online users list
            $logged_in_users = get_transient('users_online');

            // online, if (s)he is in the list and last activity was less than 15 minutes ago
            return isset($logged_in_users[$user_id]) && ($logged_in_users[$user_id] > (current_time('timestamp') - (15 * 60)));
          }

          $passthis_id = $current_user->ID;
          if(is_user_online($passthis_id)){ 
        ?>

          <span
            class="status status-online status-semicircle"
            data-bs-toggle="tooltip"
            data-bs-placement="top"
            data-bs-custom-class="custom-tooltip"
            title="Online">
          </span>

        <?php  } else { ?>

          <span
            class="status status-offline status-semicircle"
            data-bs-toggle="tooltip"
            data-bs-placement="top"
            data-bs-custom-class="custom-tooltip"
            title="Offline">
          </span>

        <?php } ?>
        
        <i>
          <?php 
            if ( is_user_logged_in() ):
              wp_get_current_user();     
              echo get_avatar( $current_user->ID, 64 );
            endif;
          ?>
          <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/1_1630599912156.png" alt="Foto de perfil"> -->
        </i>
      </a>

      <h3 class="h4 fw-semibold">
        <?php
          $current_user = wp_get_current_user();
          printf( __( '%s', 'textdomain' ), esc_html( $current_user->user_firstname ) );
          printf( __( ' %s', 'textdomain' ), esc_html( $current_user->user_lastname ) );
        ?>
      </h3>
      <p>
        <a class="link fw-light" href="wp-admin/"><?php printf( __( '%s', 'textdomain' ), esc_html( $current_user->user_email ) ); ?>  <i class="icon icon-edit"></i></a>
      </p>
    </div>

    <div class="dates">
      <div class="uploads fw-light">
        <p>
          <span class="value h4 fw-semibold">75k</span>
          Itens enviados
        </p>
      </div>

      <div class="registration fw-light">
        <p>
          <span class="value h4 fw-semibold">15k</span>
          Cadastrados
        </p>
      </div>

      <div class="downloads fw-light">
        <p>
          <span class="value h4 fw-semibold">29k</span>
          Downloads
        </p>
      </div>
    </div>

    <div class="chart">
      <h3 class="h4 fw-semibold"> Itens enviados </h3>
      <p> 75k / 100k </p>

      <figure class="pie" style="--p:75;--c:var(--cyan);--b:10px">
        <span>75%</span>
      </figure>
    </div>

    <ul class="list-registration list-group list-group-flush">
      <li class="list-group-item animated-icon d-flex justify-content-between align-items-center">
        <div class="col me-auto">
          <lord-icon
            src="https://cdn.lordicon.com/hbkyydsg.json"
            trigger="hover"
            colors="primary:#f0f1f5,secondary:#f0f1f5"
            stroke="80"
            style="width:100%;height:60px">

            <span class="itens">
              <h4 class="fw-bold h5">P.I.V</h4>
              15k enviados
            </span>
          </lord-icon>
        </div>
        <div class="col-auto">
          <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">
            Ver todos
          </button>
        </div>
      </li>

      <li class="list-group-item animated-icon d-flex justify-content-between align-items-center">
        <div class="col me-auto">
          <lord-icon
            src="https://cdn.lordicon.com/mnvyyxlr.json"
            trigger="hover"
            colors="primary:#f0f1f5,secondary:#f0f1f5"
            stroke="80"
            style="width:100%;height:60px">

            <span class="itens">
              <h4 class="fw-bold h5">Ilustrações</h4>
              15k enviados
            </span>
          </lord-icon>
        </div>
        <div class="col-auto">
          <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">
            Ver todos
          </button>
        </div>
      </li>

      <li class="list-group-item animated-icon d-flex justify-content-between align-items-center">
        <div class="col me-auto">
          <lord-icon
            src="https://cdn.lordicon.com/cpbmxdpb.json"
            trigger="hover"
            colors="primary:#f0f1f5,secondary:#f0f1f5"
            stroke="80"
            style="width:100%;height:60px">

            <span class="itens">
              <h4 class="fw-bold h5">Ícones</h4>
              15k enviados
            </span>
          </lord-icon>
        </div>
        <div class="col-auto">
          <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">
            Ver todos
          </button>
        </div>
      </li>

      <li class="list-group-item animated-icon d-flex justify-content-between align-items-center">
        <div class="col me-auto">
          <lord-icon
            src="https://cdn.lordicon.com/homgucvg.json"
            trigger="hover"
            colors="primary:#f0f1f5,secondary:#f0f1f5"
            stroke="80"
            style="width:100%;height:60px">

            <span class="itens">
              <h4 class="fw-bold h5">Códigos</h4>
              15k enviados
            </span>
          </lord-icon>
        </div>
        <div class="col-auto">
          <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">
            Ver todos
          </button>
        </div>
      </li>

      <li class="list-group-item animated-icon d-flex justify-content-between align-items-center">
        <div class="col me-auto">
          <lord-icon
            src="https://cdn.lordicon.com/xqfngtiz.json"
            trigger="hover"
            colors="primary:#f0f1f5,secondary:#f0f1f5"
            stroke="80"
            style="width:100%;height:60px">

            <span class="itens">
              <h4 class="fw-bold h5">Ui Kit</h4>
              15k enviados
            </span>
          </lord-icon>
        </div>
        <div class="col-auto">
          <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">
            Ver todos
          </button>
        </div>
      </li>

      <li class="list-group-item animated-icon d-flex justify-content-between align-items-center">
        <div class="col me-auto">
          <lord-icon
            src="https://cdn.lordicon.com/bkhzcebe.json"
            trigger="hover"
            colors="primary:#f0f1f5,secondary:#f0f1f5"
            stroke="80"
            style="width:100%;height:60px">

            <span class="itens">
              <h4 class="fw-bold h5">Social Media</h4>
              15k enviados
            </span>
          </lord-icon>
        </div>
        <div class="col-auto">
          <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">
            Ver todos
          </button>
        </div>
      </li>

      <li class="list-group-item animated-icon d-flex justify-content-between align-items-center">
        <div class="col me-auto">
          <lord-icon
            src="https://cdn.lordicon.com/kktslayi.json"
            trigger="hover"
            colors="primary:#f0f1f5,secondary:#f0f1f5"
            stroke="80"
            style="width:100%;height:60px">

            <span class="itens">
              <h4 class="fw-bold h5">Mockups</h4>
              15k enviados
            </span>
          </lord-icon>
        </div>
        <div class="col-auto">
          <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">
            Ver todos
          </button>
        </div>
      </li>

      <li class="list-group-item animated-icon d-flex justify-content-between align-items-center">
        <div class="col me-auto">
          <lord-icon
            src="https://cdn.lordicon.com/zxdhnzre.json"
            trigger="hover"
            colors="primary:#f0f1f5,secondary:#f0f1f5"
            stroke="80"
            style="width:100%;height:60px">

            <span class="itens">
              <h4 class="fw-bold h5">Apresentação</h4>
              15k enviados
            </span>
          </lord-icon>
        </div>
        <div class="col-auto">
          <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">
            Ver todos
          </button>
        </div>
      </li>
    </ul>
  </div>

  <div class="offcanvas-footer">
    <a href="/wp-admin/profile.php" class="btn btn-primary waves-effect waves-light"><i class="icon icon-edit"></i> Editar perfil</button>
    <a href="<?php echo wp_logout_url(); ?>" class="btn btn-secondary waves-effect waves-light"><i class="icon icon-out"></i> Fazer logout</a>
  </div>
</div>