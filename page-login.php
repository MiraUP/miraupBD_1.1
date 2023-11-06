<?php get_header(); ?>  
  <div class="container">
    <div class="row align-items-center text-center">
      <div class="col-lg-6 col-12 brand justify-content-center position-relative ">
        <div class="parallax">
          <div class="parallax-inner graphic graphic-01"></div>
          <div class="parallax-inner graphic graphic-02"></div>
          <div class="parallax-inner graphic graphic-03"></div>
        </div>
        <a href="/" class="icon icon-arrow-left"></a>
        <img 
          src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-010202.svg"
          alt="<?php bloginfo( 'name' ); ?>"
          class="logo-extend-white svg-inline" />
      </div>

      <div class="col-lg-6 col-12 form text-left justify-content-center">
        <form action="/wp-login.php" name="loginform" id="loginform" method="post">
          <div class="content-blue">
            <h1 class="text-center h2 title">
              Login
              <span></span>
            </h1>
            <span class="form-floating w-100">
              <input type="text" name="log" class="form-control" id="user_login" placeholder="Usuário ou e-mail" autocapitalize="off" autocomplete="username">
              <label for="user">
                <i class="icon icon-user"></i>
                Usuário ou e-mail
              </label>
            </span> 
            <hr class="hr-gradient-right">
            <span class="form-floating w-100">
              <input type="password" name="pwd" class="form-control" id="user_pass" placeholder="Senha" autocomplete="current-password">
              <label for="pass">
                <i class="icon icon-lock"></i>
                Senha
              </label>
            </span> 
            <hr class="hr-gradient-right">
            <label class="form-check w-100" style="--markBGChecked: var(--green);" for="rememberme">
              <input class="form-check-input me-1" type="checkbox" id="rememberme" name="rememberme" value="forever" aria-label="rememberme">
              <span class="mark"></span>
              Lembre-se de mim
            </label>
            <hr class="hr-gradient-center" style="margin-bottom:0;">
            <input type="submit" name="wp-submit" id="wp-submit" class="btn w-100 text-white" value="Acessar">
          </div>
          <p class="text-start lost-pass">
            <a href="/wp-login.php?action=lostpassword" class="link">
              <i class="icon icon-question"></i>
              Esqueci minha senha
            </a>
          </p>
        </form>
      <div>
    </div>
  </div>
</div>
<?php get_footer(); ?>