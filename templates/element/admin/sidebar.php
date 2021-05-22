<div class="sidebar">
    <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

    <!--- Sidebar navigation -->
    <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
    <ul id="nav">
        <li class="<?=$controller=="Dashboard" ? "open" : ""?>">
            <?php
            echo $this->Html->link(
                '<i class="fa fa-home"></i> Dashboard',
                ['controller' => 'dashboard', 'action' => 'index'],
                ['escape' => false, 'title' => 'Dashboard']
            );
            ?>
        </li>
        <li class="<?=$controller=="Pages" ? "open" : ""?>">
            <?php
            echo $this->Html->link(
                '<i class="fa fa-list-alt"></i> Páginas',
                ['controller' => 'pages', 'action' => 'index'],
                ['escape' => false, 'title' => 'Páginas']
            );
            ?>
        </li>
        <li class="">
            <?php
            /*
            echo $this->Html->link(
                '<i class="fa fa-list-alt"></i> Sub-Páginas',
                ['controller' => 'subpages', 'action' => 'index'],
                ['escape' => false, 'title' => 'Páginas']
            );
            */
            ?>
        </li>
    </ul>
</div>
