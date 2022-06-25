<!--ce fichier servira de page f'acceuil-->

<!-- récupère le header -->
<?php get_header()?>

Ici bientôt un slider de ouf!

<!-- 

Début de la boucle pour récupérer tous les articles
Est-ce qu'il y a des articles 

-->
<?php if (have_posts()): ?>
    <ul>
<!-- Tans qu'il y a des articles-->
<!-- the_post() récupére ce contenu de ce post -->
    <?php while (have_posts()): the_post();?>
        <!-- La fonction the_title() récupère le titre de l'article -->
        <li><?php the_title() ?>-<?php the_author() ?>/'ID<?php the_ID()?></li>
    <?php endwhile ?>
    </ul>
<!-- S'il n'y a pas d'articles -->
<?php else: ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>


<!-- récupère le footer -->
<?php get_footer()?>