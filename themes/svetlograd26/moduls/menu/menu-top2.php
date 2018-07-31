<div class="bottom_menu">
  <div id="categories_container" class="bottom_menu_items" >
    <a id="categories" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span id="selected_category">категории&nbsp;</span>
      <i class="fa fa-angle-down" aria-hidden="true"></i>
    </a>
    <div id="categories_select" class="dropdown-menu" aria-labelledby="categories">
      <a class="dropdown-item" href="#">Категория 1</a>
      <a class="dropdown-item" href="#">Категория 2</a>
      <a class="dropdown-item" href="#">Категория 3</a>
      <a class="dropdown-item" href="#">Категория 4</a>
      <a class="dropdown-item" href="#">Категория 5</a>
      <a class="dropdown-item" href="#">Категория 6</a>
      <a class="dropdown-item" href="#">Категория 7</a>
      <a class="dropdown-item" href="#">Категория 8</a>
    </div>
  </div>
  <!-- если добавить subcategories_active к данному элементу с class="bottom_menu_items" кнопка визуально будет активна-->
  <div id="subcategories_container" class="bottom_menu_items">
    <a class="subcategories" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span id="selected_subcategory">подкатегории&nbsp;</span>
      <i class="fa fa-angle-down" aria-hidden="true"></i>
    </a>
    <div id="subcategories_select" class="dropdown-menu" aria-labelledby="subcategories_active">
      <a class="dropdown-item" href="#">Подкатегория 1</a>
      <a class="dropdown-item" href="#">Подкатегория 2</a>
      <a class="dropdown-item" href="#">Подкатегория 3</a>
      <a class="dropdown-item" href="#">Подкатегория 4</a>
      <a class="dropdown-item" href="#">Подкатегория 5</a>
      <a class="dropdown-item" href="#">Подкатегория 6</a>
      <a class="dropdown-item" href="#">Подкатегория 7</a>
      <a class="dropdown-item" href="#">Подкатегория 8</a>
    </div>
  </div>
  <div class="bottom_menu_items">
    <form id="search" class="search" method="get" role="search" action="/">
      <input id="search_field" type="text" name="s" placeholder="Поиск, например &laquo;Ночной клуб&raquo;">
      <input class="cross" type="reset" value="">
      <!-- <i class="fa fa-times" aria-hidden="true"></i> -->
      <a class="small_sliders" href="#"></a>
      <input class="searching" type="submit" value="">
      <!-- <i class="fa fa-search" aria-hidden="true"></i> -->
    </form>
  </div>
  <div class="bottom_menu_items">
    <div id="add_advert" href="#">
      <span>добавить объявление</span>
      <i class="fa fa-plus-circle" aria-hidden="true"></i>
    </div>
  </div>
</div>