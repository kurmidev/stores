<?php

use yii\widgets\Menu;
use app\components\MenuHelper;

?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="<?= SITE_LOGO ?>" alt="<?=SITE_NAME?>" class="brand-image img-circle elevation-3" style="opacity:1;">
        <span class="brand-text font-weight-light"><?=SITE_NAME?></span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">Short Cuts</li>
            </ul>
            <?= Menu::widget([
                'options' => ['class' => 'nav nav-pills nav-sidebar flex-column', "data-widget" => "treeview", "role" => "menu", "data-accordion" => "false"],
                'items' => MenuHelper::renderMenu(),
                'itemOptions' => ['class' => 'nav-item'],
                'encodeLabels' => false,
                'activateItems' => true,
                'activateParents' => true,
                'activeCssClass' => 'active',
            ]);
            ?>

        </nav>
    </div>
</aside>