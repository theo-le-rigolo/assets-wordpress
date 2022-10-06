<?php 
define('IG_VERSION', '1.0.0'); // Définition de la variable de n° de version
define('DISALLOW_FILE_EDIT',true); // Désactivation editeur admin

/****************************************/
/* Chargement des scripts et CSS FRONTEND */	
/****************************************/
function ig_scripts() {	
	// Chargement des styles
	// Pr CSS : Param3 : dependances, Param4 : n° version, Param5 : media concerné
	// Pour gérer les priorités d'appel CSS, ajouter l'ID dans les dépendances de l'appel du CSS principal

	// Bootstrap CSS
	wp_enqueue_style( 'ig_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), IG_VERSION, 'all');

	// <link rel="stylesheet" type="text/css" href="css/theme-vendors.min.css">
	wp_enqueue_style( 'ig_themevendorthemecss', get_template_directory_uri().'/css/theme-vendors.min.css', array(), IG_VERSION, 'all');

	// <link rel="stylesheet" type="text/css" href="css/style-theme.css" />
	wp_enqueue_style( 'ig_stylethemecss', get_template_directory_uri().'/css/style-theme.css', array(), IG_VERSION, 'all');

	// <link rel="stylesheet" type="text/css" href="css/responsive.css" />
	wp_enqueue_style( 'ig_responsivethemecss', get_template_directory_uri().'/css/responsive.css', array(), IG_VERSION, 'all');

	/* Feuille de styles personnalisée */
	wp_enqueue_style( 'ig_customstyles', get_template_directory_uri().'/style.css', array(), IG_VERSION, 'all');

	// Font Awesome JS
	wp_enqueue_script( 'ig_fontawesomejs', 'https://kit.fontawesome.com/cb8f0e6916.js', array(), IG_VERSION, true );
	
	// jQuery
	// wp_enqueue_script('jquery');

	// Bootstrap JS
	wp_enqueue_script( 'ig_bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), IG_VERSION, true );

	// <script type="text/javascript" src="js/jquery.min.js"></script>
	wp_enqueue_script( 'ig_jquerrytheme', get_template_directory_uri().'/js/jquery.min.js', array(), IG_VERSION, true );

	// <script type="text/javascript" src="js/theme-vendors.min.js"></script>
	wp_enqueue_script( 'ig_themevendorthemejs', get_template_directory_uri().'/js/theme-vendors.min.js', array(), IG_VERSION, true );

	// <script type="text/javascript" src="js/main.js"></script>
	wp_enqueue_script( 'ig_mainthemejs', get_template_directory_uri().'/js/main.js', array(), IG_VERSION, true );
	
}
add_action('wp_enqueue_scripts', 'ig_scripts');


/****************************/
/* Chargement des utilitaires */
/****************************/
function ig_setup(){
	
	add_theme_support( 'custom-logo' ); // Ajout du logo
	add_theme_support( 'custom-logo' , array( // Définition de la taille du logo
        'height'      => 80,
        'width'       => 400,
        // 'flex-height' => true,
        'flex-width'  => true,
    ));
    
	add_theme_support('post-thumbnails'); // Ajout image mise en avant
	add_theme_support('title-tag'); // Ajout titre du site
	remove_action('wp_head', 'wp_generator'); // Supprime info wp
	remove_filter('the_content', 'wptexturize'); // Supprime guillemets à la FR dans article complet
	
	register_nav_menus( array( // Création des emplacements de menu
		'menu-header' => 'Menu header',
		'menu-footer' => 'Menu footer',
	) );
	require_once('includes/class-wp-bootstrap-navwalker.php'); // Appel le fichier qui permet de communiquer entre BootStrap et menu
	
}
add_action('after_setup_theme', 'ig_setup');

?>
