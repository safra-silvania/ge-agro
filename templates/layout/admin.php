<?php
$description = 'Ge-Agro';
?>
<!DOCTYPE html>
<html class="<?= $collapsedSidebar ? 'fixed sidebar-left-collapsed' : '' ?>">

<head>
    <?= $this->Html->charset() ?>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta content="True" name="HandheldFriendly">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>
    <?= $description ?>:
        <?= isset($title) ? $title : __($this->fetch('title')) ?>
    </title>

    <?= $this->Html->meta('favicon.ico', '/img/favicon.png', ['type' => 'icon']) ?>

    <?= $this->Html->css("/theme/admin/css/bootstrap.css") ?>
    <?= $this->Html->css("/theme/admin/css/font-awesome.min.css") ?>
    <?= $this->Html->css("/theme/admin/css/style.css") ?>

    <script src="https://cdn.tiny.cloud/1/tj5ynpwqws277rthnupyvl68i6eqnk52puv7pv7dd4xwn5bv/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <?= $this->Html->script("/dist/admin.js") ?>
    <?= $this->Html->script("/src/admin/util.js") ?>
</head>

<body>
    <?= $this->element('admin/header') ?>

    <!-- Main content starts -->
    <div class="content">

        <?= $this->element('admin/sidebar') ?>

        <!-- Main bar -->
  	    <div class="mainbar">
        
            <?= $this->element('admin/page-head') ?>

            <!-- Matter -->
            <div class="matter">
                <div class="container">
                    <?= $this->Flash->render() ?>
                    <?= $this->fetch('content') ?>
                </div>
            </div>
            <!-- Matter ends -->
        </div>
        <!-- Mainbar ends -->

        <div class="clearfix"></div>
    </div>
    <!-- Content ends -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Copyright info -->
                    <p class="copy">Copyright &copy; <?=date('Y')?> |
                    <?php
                    echo $this->Html->link(
                        'Ge-Agro',
                        ['controller' => 'site', 'action' => 'home'],
                        ['escape' => false, 'title' => 'Ge-Agro']
                    );
                    ?>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to top -->
    <span class="totop" style="display:none"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 

    <?= $this->Html->script("/src/admin/util.js") ?>

</body>

</html>