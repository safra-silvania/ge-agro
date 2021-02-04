<div class="navbar navbar-fixed-top bs-docs-nav" role="banner">

    <div class="conjtainer">
        <!-- Menu button for smallar screens -->
        <div class="navbar-header">
            <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span>Menu</span>
            </button>
            <?php
            echo $this->Html->image("/img/logo-02.png", [
                "alt" => "Safra", "class"=> "navbar-brand hidden-lg",
                'url' => ['controller' => 'Dashboard', 'action' => 'index']
            ]);
            ?>
        </div>

        <!-- Navigation starts -->
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">         

            <ul class="nav navbar-nav">
                <li class="dropdown dropdown-big">
                    <?php
                    echo $this->Html->link(
                        '<i class="fa fa-arrow-left"></i>&nbsp;Voltar para o Site',
                        ['controller' => 'site', 'action' => 'home'],
                        ['escape' => false, 'title' => 'Voltar para o Site']
                    );
                    ?>
                </li>
            </ul>

            <!-- Links -->
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown pull-right">            
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-user"></i> <?=$myself->name?> <b class="caret"></b>              
                    </a>

                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-cogs"></i> Configurações</a></li>
                        <li>
                            <?php
                            echo $this->Html->link(
                                '<i class="fa fa-sign-out"></i> Sair',
                                ['controller' => 'site', 'action' => 'logout'],
                                ['escape' => false, 'title' => 'Sair']
                            );
                            ?>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>

    </div>
</div>


<!-- Header starts -->
<header>
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="logo">
                    <!-- <h1><a href="#">Mac<span class="bold">Admin</span></a></h1>
                    <p class="meta">something goes in meta area</p> -->
                    <?php
                    echo $this->Html->image("/img/logo-02.png", [
                        "alt" => "Ge-Agro", "width"=>"", "height"=>"45", "class"=> "",
                        'url' => ['controller' => 'Dashboard', 'action' => 'index']
                    ]);
                    ?>
                </div>
            </div>

            <!-- Button section -->
            <div class="col-md-4">
                <!-- Buttons -->
                <ul class="nav nav-pills">
                </ul>
            </div>

            <!-- Data section -->
            <div class="col-md-4">
                <div class="header-data">
                </div>
            </div>

        </div>
    </div>
</header>
<!-- Header ends -->
