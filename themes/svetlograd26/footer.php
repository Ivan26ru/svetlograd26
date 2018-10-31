    <footer class="dn">
      <div class="container">
        <div class="row">
          <div class="col-6 col-md-3">
            <h3 class="footer_headers">Информация</h3>
                  <?php include (TEMPLATEPATH . '/moduls/menu/menu-footer-1.php'); ?>

              <div class="counter">
              <img class="counter_img" src="<?php echo get_template_directory_uri();  ?>/images/counter.png" alt="">
              <p class="number_of_views">ПРОСМОТРОВ ЗА СЕГОДНЯ</p>
            </div>
          </div>
          <!-- /.col-6 col-md-3 -->
          <div class="col-6 col-md-3">
            <h3 class="footer_headers">Обратная связь</h3>
                  <?php include (TEMPLATEPATH . '/moduls/menu/menu-footer-2.php'); ?>
            <div id="add_advert_footer" href="#">
              <span>добавить объявление</span>
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
          <!-- /.col-6 col-md-3 -->
          <div class="col-6 col-md-3">
            <h3 class="footer_headers">Дополнительно</h3>
                  <?php include (TEMPLATEPATH . '/moduls/menu/menu-footer-3.php'); ?>
            <div href="#" id="entrance_footer">ВХОД/РЕГИСТРАЦИЯ</div>
          </div>
          <!-- /.col-6 col-md-3 -->
          <div class="col-6 col-md-3">
            <h3 class="footer_headers">Внимание!</h3>
            <p class="copy">Копирование и использование материалов сайта в любом виде без согласования с администрацией запрещено. Незаконное использование влечет административную или уголовную ответственность</p>
            <div class="social_networks_footer">
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
            </div>
            <div class="all_rights_reserved">
              &copy;
              <script>
                var year = new Date();
                year = year.getYear();
                if (year < 1900) year += 1900;
                document.write(year);
              </script> - Все права защищены
            </div>
          </div>
          <!-- /.col-6 col-md-3 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
      <div class="making">Сайт изготовлен студией <a href="#" target="_blank">8bit-studio</a></div>
    </footer>
    </div>
    <!-- .wrapper -->
<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
</body>
</html>