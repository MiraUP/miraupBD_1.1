<div class="col sidebar-right">
  <div class="row gx-0">
    <div class="col">
      
      <div class="row gx-0">
        <div class="col">
          <p class="fw-bold name-icon">Nome do ícone</p>
        </div>
        <div class="col-auto">
          <label class="switch icon-light-mode" title="Light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip">
            <input type="checkbox" name="icon-light-mode">
            <span class="mark"></span>
          </label>
        </div>
      </div>

      <div class="preview-icon text-center">
        <div>
          <i class="icon icon-home"></i> 
        </div>
      </div>

      <?php if (current_user_can('contributor') or current_user_can('administrator') or is_admin()) : ?>
        <div class="container px-4 text-center mt-3">
          <div class="row gx-5 gap-3">
            <a class="col btn btn-sm btn-secondary edit-attachment" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip">
              Editar
            </a>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>

  <div class="row gx-0 gap-2 type-file">
    <div class="col-12">
      <h3 class="h5 title-icons fw-semibold">
        <i class="icon icon-download"></i> Download
      </h3>
    </div>
    <div class="col-12">
      <div class="row gx-0 gap-2 download-btn">
        <a class="col btn btn-success btn-sm text-white">SVG</a>
        <a class="col btn btn-success btn-sm text-white">AI</a>
        <a class="col btn btn-success btn-sm text-white">EPS</a>
        <a class="col btn btn-success btn-sm text-white">JSON</a>
        <a class="col btn btn-success btn-sm text-white">PNG</a>
        <a class="col btn btn-success btn-sm text-white">JPG</a>
        <a class="col btn btn-success btn-sm text-white">GIF</a>
        <a class="col btn btn-success btn-sm text-white">MP4</a>
        <a class="col btn btn-success btn-sm text-white">After Effects</a>
        <a class="col btn btn-success btn-sm text-white">Font Web</a>
      </div>
    </div>
  </div>

  
  <div class="row gx-0 gap-2 tag-file">
    <div class="col-12">
      <h3 class="h5 title-icons fw-semibold">
        <i class="icon icon-bookmark"></i> Tags
      </h3>
    </div>
    <div class="col-12">
      <div class="row gx-0 gap-2 tag-btn">
        <span class="col-auto btn btn-primary btn-sm text-white">tag</span>
      </div>
    </div>
  </div>

</div>