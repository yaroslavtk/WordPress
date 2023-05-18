<div class="container">
        <footer>
                <div class="page-footer">
                        <p>Footer</p>

                        <?php wp_nav_menu(
                                array(
                                        'theme_location' => 'menu-3',
                                        'container_class' => 'navigation-contacts',
                                        'menu_class' => 'navigation-contacts-list',
                                )
                        ) ?>

                </div>
        </footer>
</div>


<?php wp_footer(); ?>