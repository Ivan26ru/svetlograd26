<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Oswald:400,500|Stalinist+One" rel="stylesheet">
<title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <!--[if lt IE 9]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body <?php body_class(); // все классы для body ?>>
  <div class="wrapper">
    <header>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-3 col-xl-2">
            <!-- Выбор языка -->
<!--             <div class="dropdown show">
              <div class="language" href="#" role="button" id="language" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-globe" aria-hidden="true"></i>
                <span id="selected_language">РУССКИЙ</span>
              </div>
              <div class="dropdown-menu" id="language_select" aria-labelledby="language">
                <a class="dropdown-item" href="#">РУССКИЙ</a>
                <a class="dropdown-item" href="#">ENGLISH</a>
              </div>
            </div> -->
            <!-- Выбор города -->
<!--             <div class="dropdown show">
              <div class="your_town" href="#" role="button" id="your_town" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span id="town">ВАШ ГОРОД</span>
              </div>
              <div class="dropdown-menu" id="town_select" aria-labelledby="your_town">
                <a class="dropdown-item" href="#">Балыкчы</a>
                <a class="dropdown-item" href="#">Бишкек</a>
                <a class="dropdown-item" href="#">Джалал-Абад</a>
                <a class="dropdown-item" href="#">Каракол</a>
                <a class="dropdown-item" href="#">Кант</a>
                <a class="dropdown-item" href="#">Кара-Балта</a>
                <a class="dropdown-item" href="#">Нарын</a>
                <a class="dropdown-item" href="#">Ош</a>
              </div>
            </div> -->
          </div>
          <div class="col-12 col-md-6 col-xl-8">
            <a class="logo" href="#">
              <!-- <img src="<?php echo get_template_directory_uri();  ?>/images/logo.png" alt=""> -->
            </a>
          </div>
          <div class="col-12 col-md-3 col-xl-2">
          <?php //include (TEMPLATEPATH . '/moduls/menu/menu-social.php'); ?>
            <!-- <div class="social_networks">
              <a href="#">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="#">
                <i class="fa fa-skype" aria-hidden="true"></i>
              </a>
            </div> -->
            <!-- <div href="#" id="entrance">ВХОД/РЕГИСТРАЦИЯ</div> -->
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </header>
    <section class="nav">
      <?php include (TEMPLATEPATH . '/moduls/menu/menu-top.php'); ?>
      <?php //include (TEMPLATEPATH . '/moduls/menu/menu-top2.php'); ?>
    </section>
    <!-- /.nav -->
      <?php //include (TEMPLATEPATH . '/moduls/carausel/carausel-top.php'); ?>