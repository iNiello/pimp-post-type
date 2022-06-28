<!--ce fichier servira de page desing unique pour afficher-->

<!-- récupère le header -->
<?php get_header() ?>

Ici bientôt un slider de ouf!

<!-- 

Début de la boucle pour récupérer tous les articles
Est-ce qu'il y a des articles 

-->
<?php if (have_posts()) : ?>
    <!-- Tans qu'il y a des articles-->
    <div class="row">
        <!-- the_post() récupére ce contenu de ce post -->
        <?php while (have_posts()) : the_post(); ?>
            <div class="col-3">
                <!-- 
                La fonction the_post_thumbnail_url récupère l'url de l'image en une de l'articleet 
            donne plus de flexibilité pour la mise en forme 
            -->
                <img src="<?php the_post_thumbnail_url() ?>" alt="avatard de profile" class="mx-auto d-block rounded-circle img-fluid">
            </div>
            <div class="col-3">

                <!-- the_title() récupére ce titre de ce post -->
                <h1><?php the_title() ?></h1>

                <!-- the_content() récupére le contenu de ce post -->
                <?php the_content() ?></p>
            </div>
            <div class="col-3">
                <!-- the_tags() récupére les étiquettes  de ce post -->
                <p><?php the_tags(); ?></p>
            </div>
            <!-- the_ID() récupére l'ID' de ce post -->
            <h6>ID <?php the_ID() ?></h6>

            <!-- the_category() récupére les catégories attribuées à ce post -->
            <h2><?php the_category() ?></h2>
        <?php endwhile ?>
    </div>

<?php else : ?>
    <!-- S'il n'y a pas d'articles -->
<?php endif; ?>

<!-- récupère le footer -->
<?php get_footer() ?>