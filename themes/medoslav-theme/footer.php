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

                        <!-- <ul class="social-list">
                    <li class="social-logo">
                        <a href="#"><img class="social-ico" alt="Instagram" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/instagram.png" width="30"
                                height="30"></a>
                        <a href="#"><img class="social-ico" alt="Facebook" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/facebook.png" width="30"
                                height="30"></a>
                        <a href="#"><img class="social-ico" alt="Telegram" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/telegram.png" width="30"
                                height="30"></a>
                        <a href="#"><img class="social-ico" alt="Viber" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/viber.png" width="30"
                                height="30"></a>
                        <a href="#"><img class="social-ico" alt="YouTube" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/youtube.png" width="30"
                                height="30"></a>
                    </li>
                </ul> -->
                
                </div>
        </footer>
</div>

<?php wp_footer(); ?>