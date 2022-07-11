<?php
// hook qui ajoute/étend les possibilités de WP_head

function meintheme_mon_titre_de_page_article()
{
    
    // récupére le titre de la page ou de l'article et l'ajoute au theme
    add_theme_support('title-tag');
    // donne la possibilité de mettre/ajoute au theme une limage en Une de la page ou de l'article
    add_theme_support( 'post-thumbnails' );
    // ajoute le menu "menu" dans l'interface du back office, pour fire que notre theme supporte la fonction "menu"
    add_theme_support( 'menus' );
    // ajoute les option de choix de menu dans l'interface de l'onglet "menu" 
    // ce register_nav_menu prend un  id de localisasion ($location) et une description $descition (nom afficher en back office)
    register_nav_menu('header','En tête du menu');
    // ce register_nav_menu prend un  id de localisasion ($location) et une description $descition (nom afficher en back office)
    register_nav_menu('footer', 'Pied de page');
}

// Mettre le cdn de bootstrap de manière propre
function meintheme_bootstrap_css_js(){
    // 1) Définir le style
    // Définir le nom de la feuille CSS (doit être unique) et le lien URL de la feuille CSS
    wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    // (...) []= dépendance, false = pas de version, true = pour charger le js à la fin du body (aka dasn le footer),
    wp_register_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js',[],false, true);
    
    // 2) Utiliser le style
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

// ajoute au menu le classes nav-item de bootstrap [tableau de classe]
function meintheme_menu_class(array $classes): array
{
    $classes[] = 'nav-item';
    return $classes;
}

// ajoute aux liens menu des attribu la classe nav-link de bootstrap
function meintheme_menu_link_class($attrs)
{
    $attrs['class'] = 'nav-link';
    return $attrs;
}


// lorsque cette action 'after_setup_theme' est appelée, je veux que tu me joue la fonction meintheme_mon_titre_de_page_article
add_action('after_setup_theme','meintheme_mon_titre_de_page_article');

// lorsque cette action 'wp_enqueue_scripts' est appelée, je veux que tu me joue la fonction meintheme_bootstrap_css
// NE PAS OUBLIER LE "S" DE SCRIPTS
add_action('wp_enqueue_scripts', 'meintheme_bootstrap_css_js');
//ce walker nav menu pert d'ajouter des classes qui au menu qui sont dif. des celles générées par wp
add_filter('nav_menu_css_class', 'meintheme_menu_class');
//ce walker nav menu pert d'ajouter des classes dif. sur les liens qui sont dans le menu des celles générées par wp
add_filter('nav_menu_link_attributes', 'meintheme_menu_link_class');
