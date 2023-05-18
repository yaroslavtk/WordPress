<?php

if (!is_active_sidebar('medoslavsidebar')) {
    return;
}

?>

<aside id="secondary" class="widget-area">
    <?php dynamic_sidebar('medoslavsidebar'); ?>
</aside><!-- #secondary -->