<!--ce fichier servira de page f'acceuil-->

<!-- récupère le header -->
<?php get_header() ?>

Ici bientôt un slider de ouf!

<!-- 

Début de la boucle pour récupérer tous les articles
Est-ce qu'il y a des articles 

-->
<?php if (have_posts()) : ?>
    <!-- Tans qu'il y a des articles-->

    <div class="row row-cols-1 row-cols-md-2 g-4">
        <!-- the_post() récupére ce contenu de ce post -->
        <?php while (have_posts()) : the_post(); ?>
            <!-- La fonction the_permalink() est le liens vers l'article -->
            <div class="col">

                <div class="card h-100 text-center" style=" border-radius: 15px;">
                <?php the_post_thumbnail('post-thumbnail', ['classe'=> ' bd-placeholder-img rounded-circle img-fluid card-img-top', 'alt' => 'avatard de profile']); ?>
                    <div class="card-body">
                        <h5 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?></h6>
                        <p class="card-text">
                            <?php the_content() ?>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- <a href="<?php the_permalink() ?>">Card link</a>
                                <a href="#" class="card-link">Another link</a> -->
                        -<?php the_author() ?>/'ID<?php the_ID() ?></li>
                    </div>
                </div>

            </div>

        <?php endwhile ?>
    </div>
    <!-- S'il n'y a pas d'articles -->
<?php else : ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>


<!-- récupère le footer -->
<?php get_footer() ?>