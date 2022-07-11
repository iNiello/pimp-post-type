    </div>
    <footer>
    <?php wp_nav_menu([
        //divers arguments comme le nom du menu (theme_location)
        'theme_location'=> 'footer',
       //ne pas vouloir le container autour du <ul> de Bootstrap (caontainer false) 
        'container' => false,
        // ajouter les classes que l'on souhaite pour ici changer  de celles l'<ul>  de WP
        'menu_class' => 'navbar-nav mr-auto'
        ]) ?>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>