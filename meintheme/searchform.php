<!--
    S'il n'y a pas de fichier searchfrom.php dans mon 
    theme, WP va prendre l'html d'un searchform par default pour mettre en page mon input
-->
 <!--
    esc_url échappe les URL et home_URL genère le chemin à partir de la page d'accueil
-->    
<form class="d-flex" action="<?php echo esc_url(home_url('/')) ?>">
    <!--
      la fonction get_search_query() échappe nativement (esc_attr()) des attributs (le texte,terme tapé). 
    -->
    <!-- 
        le champ qui permet de taper la recherche (<input>) doir avoir la classe "name" et la valeur "s" comme attributs
        si non la recherce n'est pas renvoyé à l'utilisateur 
    -->
    <input class="form-control me-2" name="s" type="search" placeholder="Rechercher sur le site" aria-label="Search" value="<?php echo get_search_query();?>">
    <button class="btn btn-light" type="submit">Rechercher</button>
</form>