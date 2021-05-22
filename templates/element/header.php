<?php
use Cake\Routing\Router;
?>

<header class="h3 sticky-enabled no-topbar">
  <section class="top">
    <div>
      <p>Contato: (62) 99837-7093 | E-mail: comercial@ge-agro.com</p>
      <nav>
          <?php
if (isset($siteTopMenu)) {
    echo "<ul>";
    foreach ($siteTopMenu as $topMenu) {
        $label = $topMenu['label'];
        $submenu = $topMenu['submenu'] ?? [];
        $url = $topMenu['url'] ?? [];
        $options = $topMenu['options'] ?? [];
        $class = isset($topMenu) && $topMenu['active'] ? "current-menu-item" : "";

        if (count($submenu) > 0) {
            echo "<li class='{$class}'> <a href='#'>{$label}</a>";
            echo "<ul>";
            foreach ($submenu as $sub) {
                $class = isset($sub) && $sub['active'] ? "current-menu-item" : "";

                echo "<li class='{$class}'>";
                echo $this->Html->link(
                    $sub['label'],
                    isset($sub['url']) ? $sub['url'] : [],
                    isset($sub['options']) ? $sub['options'] : []
                );
                echo "</li>";
            }
            echo "</ul>";
            echo "</li>";
        } else {
            echo "<li><a href='" . Router::url($url) . "'>{$label}</a></li>";
        }
    }
    echo "</ul>";

    echo '<select id="top-nav" name="sec-nav">';
    foreach ($siteTopMenu as $topMenu) {
        $label = $topMenu['label'];
        $submenu = $topMenu['submenu'] ?? [];
        $url = $topMenu['url'] ?? [];
        $options = $topMenu['options'] ?? [];

        if (count($submenu) > 0) {
            echo "<option value='#'>- {$label}</option>";
            foreach ($submenu as $sub) {
                $selected = isset($sub) && $sub['active'] ? 'selected="selected"' : '';
                echo "<option value='" . Router::url($sub['url']) . "' {$selected}>&nbsp;&nbsp;- " . $sub['label'] . "</option>";
            }
        } else {
            $selected = isset($sub) && $sub['active'] ? 'selected="selected"' : '';
            echo "<option value='" . Router::url($url) . "' {$selected}>- {$label}</option>";
        }
    }
    echo '</select>';
}
?>
      </nav>
    </div>
  </section>

  <section class="main-header">

    <p class="title">
        <?php
        echo $this->Html->image("/img/logo-02.png", [
            "alt" => "Ge-Agro", "width" => "219", "height" => "35", "class" => "",
            "url" => ['controller' => 'site', 'action' => 'home'],
        ]);
        ?>
        <span>Insumos Agrícolas</span>
    </p>

    <nav class="social">
      <ul>
        <li><a href="#" class="facebook">Facebook</a></li>
        <li><a href="#" class="twitter">Twitter</a></li>
        <li><a href="#" class="googleplus">Google+</a></li>
        <li><a href="#" class="pinterest">Pinterest</a></li>
        <li><a href="#" class="rss">RSS</a></li>
      </ul>
    </nav>
    <nav class="mainmenu">
      <?php
if (isset($siteMenu)) {
    echo "<ul>";
    foreach ($siteMenu as $menu) {
        $label = $menu['label'];
        $submenu = $menu['submenu'] ?? [];
        $url = $menu['url'] ?? [];
        $options = $menu['options'] ?? [];
        $class = isset($menu) && $menu['active'] ? "current-menu-item" : "";

        if (count($submenu) > 0) {
            echo "<li class='{$class}'> <a href='#'>{$label}</a>";
            echo "<ul>";
            foreach ($submenu as $sub) {
                $class = isset($sub) && $sub['active'] ? "current-menu-item" : "";

                echo "<li class='{$class}'>";
                echo $this->Html->link(
                    $sub['label'],
                    isset($sub['url']) ? $sub['url'] : [],
                    isset($sub['options']) ? $sub['options'] : []
                );
                echo "</li>";
            }
            echo "</ul>";
            echo "</li>";
        } else {
            echo "<li class='{$class}'><a href='" . Router::url($url) . "'>{$label}</a></li>";
        }

    }
    echo "</ul>";

    echo '<select id="sec-nav" name="sec-nav">';
    foreach ($siteMenu as $menu) {
        $label = $menu['label'];
        $submenu = $menu['submenu'] ?? [];
        $url = $menu['url'] ?? [];
        $options = $menu['options'] ?? [];

        if (count($submenu) > 0) {
            echo "<option value='#'>- {$label}</option>";
            foreach ($submenu as $sub) {
                $selected = isset($sub) && $sub['active'] ? 'selected="selected"' : '';
                echo "<option value='" . Router::url($sub['url']) . "' {$selected}>&nbsp;&nbsp;- " . $sub['label'] . "</option>";
            }
        } else {
            $selected = $menu['active'] ? 'selected="selected"' : '';
            echo "<option value='" . Router::url($url) . "' {$selected}>- {$label}</option>";
        }
    }
    echo '</select>';
}
?>
    </nav>
    <div class="clear"></div>
  </section>
</header>