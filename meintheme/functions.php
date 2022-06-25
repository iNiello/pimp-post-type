<?php
// hook qui ajoute/étend les possibilités de WP_head

function meintheme_mon_titre_de_page_article()
{
    
    // récupére le titre de la page ou de l'article
    add_theme_support('title-tag');
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

// lorsque cette action 'after_setup_theme' est appelée, je veux que tu me joue la fonction meintheme_mon_titre_de_page_article
add_action('after_setup_theme','meintheme_mon_titre_de_page_article');

// lorsque cette action 'wp_enqueue_scripts' est appelée, je veux que tu me joue la fonction meintheme_bootstrap_css
// NE PAS OUBLIER LE "S" DE SCRIPTS
add_action('wp_enqueue_scripts', 'meintheme_bootstrap_css_js');
