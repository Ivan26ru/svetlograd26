<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="navbar-toggler-icon"></span>
	        </button>
	  <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
	    <?php

// $args = array(
//     'theme_location'  => 'top', // область темы
//     'container' => 'ul',
//     'menu_class' => 'navbar-nav mr-auto',
//     'depth' => '1'
// );

$args = array(
	'theme_location' => 'top',
    'container' => '',
	'walker'=> new top_menu() // этот параметр нужно добавить

);

wp_nav_menu( $args );

?>
	  </div>
	</nav>
</div>