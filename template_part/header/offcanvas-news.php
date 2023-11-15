<?php global $current_user; ?>
<div class="offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="offcanvasNews" aria-labelledby="offcanvasNewsLabel">
  
  <div class="offcanvas-header">
    <h2 class="offcanvas-title h4 fw-semibold" id="offcanvasNewsLabel">Novidades</h2>
    <button type="button" class="button-close icon-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>

  <div class="offcanvas-body">
    <div class="dates">
      <div class="uploads fw-light">
        <p>
          <span class="value h4 fw-semibold">75k</span>
          Não Lidas
        </p>
      </div>

      <div class="registration fw-light">
        <p>
          <span class="value h4 fw-semibold">15k</span>
          Pessoais
        </p>
      </div>

      <div class="downloads fw-light">
        <p>
          <span class="value h4 fw-semibold">29k</span>
          Sistema
        </p>
      </div>
    </div>

    <ul class="list-registration list-group list-group-flush">

      <li class="list-group-item animated-icon d-flex justify-content-between align-items-center notread">
        <div class="col me-auto">
          <lord-icon
            src="https://cdn.lordicon.com/mnvyyxlr.json"
            trigger="hover"
            colors="primary:#f0f1f5,secondary:#f0f1f5"
            stroke="80"
            style="width:100%;height:60px">

            <span class="itens">
              <h4 class="fw-bold h5">Ilustração</h4>
              <small>3D Character Pack Sport Illustration & 3D Elements object</small>
            </span>
          </lord-icon>
        </div>
        <div class="col-auto">
          <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">
            Ver mais
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
              <small>3D icons business pack</small>
            </span>
          </lord-icon>
        </div>
        <div class="col-auto">
          <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">
            <i class="icon icon-check" data-size="small"></i> Lido 
          </button>
        </div>
      </li>

    </ul>
  </div>
</div>