<nav class="container gallery-bar">
  <div class="row">
    <div class="col-md-auto me-auto col-sm-12">
      <div class="btn-group btn-tabs" role="group" aria-label="Basic radio toggle button group">
        <input type="radio" class="btn-check" name="galleryView" id="allFilterPosts" autocomplete="off" value="allFilter" checked>
        <label class="btn btn-transparent-group filter-button" for="allFilterPosts">
          Mostrar tudo
        </label>

        <input type="radio" class="btn-check" name="galleryView" id="newPosts" autocomplete="off" value="new-post">
        <label class="btn btn-transparent-group filter-button" for="newPosts">
          Novidades
        </label>

        <input type="radio" class="btn-check" name="galleryView" id="favoritePost" autocomplete="off" value="favorite">
        <label class="btn btn-transparent-group filter-button" for="favoritePost">
          Favoritos
        </label>
      </div>
    </div>
    
    <div class="col-md-auto col-sm-12">
      <div class="dropdown dropdown-menu-end">
        <a class="btn btn-transparent dropdown-toggle no-arrow btn-filter" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Filtrar
          <i class="icon icon-filter"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
          <li>
            <h3 class="h5 fw-bold title">Organizar por:</h3>
          </li>
          <!-- <li><a class="dropdown-item">
            <i class="icon icon-grid"></i>
            Todos
          </a></li>
          <li><a class="dropdown-item">
            <i class="icon icon-star"></i>
            Popular
            <i class="icon icon-arrow-down"></i>
          </a></li> -->
          <li><a class="dropdown-item orderby-filter" data-orderby="title" data-order="DESC">
            <i class="icon icon-text"></i>
            Nome
            <i class="icon icon-arrow-down"></i>
          </a></li>
          <li><a class="dropdown-item orderby-filter" data-orderby="post_date" data-order="DESC">
            <i class="icon icon-calendar"></i>
            Data
            <i class="icon icon-arrow-down float-end"></i>
          </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>