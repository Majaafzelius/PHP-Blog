</main>
<footer>
    <p>Tel: 010-xxxxxx<br>Mejl: info@skogab.com</p>
    <?php the_custom_logo(); // logo
    // Widget Area 
    if ( is_active_sidebar( 'new-widget-area' ) ) : ?> 
        <div id="secondary-sidebar" class="new-widget-area">
            <?php dynamic_sidebar( 'new-widget-area' ); ?>
        </div>
    <?php endif; ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>
