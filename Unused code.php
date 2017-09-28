<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
    <?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
        <?php endif; ?>

            <!-- Before title-bar-left -->
            <div class="title-bar-right">
                <button class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
            </div>