<?=$this->element('slider')?>

<section class="content" style="padding-bottom: 0px;">
	<section class="main">
		<article class="intro">
            <?=$page->content?>

            <?php
            echo $this->Html->link(
                '<button type="button">Conheça Nossos Serviços</button>',
                ['controller' => 'site', 'action' => 'servicos'],
                ['escape' => false, 'title' => 'Link']
            );
            ?>
		</article>
        <section class="columns">
		 	<h2><span>Nossa Equipe</span></h2>
		 	<article class="col3 team">
                <div class="img-border"><img src="img/team/01s.jpg" alt=""></div>
                <h3 style="margin-bottom: 5px;">Michael Brown</h3>
                <p class="position">CEO/Founder</p>
            </article><article class="col3 team">
                <div class="img-border"><img src="img/team/02s.jpg" alt=""></div>
                <h3 style="margin-bottom: 5px;">Michael Brown</h3>
                <p class="position">CEO/Founder</p>
            </article><article class="col3 team">
                <div class="img-border"><img src="img/team/03s.jpg" alt=""></div>
                <h3 style="margin-bottom: 5px;">Michael Brown</h3>
                <p class="position">CEO/Founder</p>
            </article>
		 </section>
	</section>
	<aside>
        <?=$this->element('examples/cotacoes')?>
        <?=$this->element('examples/cambio')?>
	</aside>
	<a href="#top" class="go-top">Topo</a>
</section>

<section class="content">
    <section class="latest">
        <article class="content-slider hp-our-clients">
            <h2 style="margin-top: 0px;"><span>Clientes / Parceiros</span></h2>
            <ul class="next-prev"><li class="prev"><a href="javascript:;">previous</a></li><li class="next"><a href="javascript:;">next</a></li></ul><div class="slider-box">
                <ul style="width: 1120px;">
                    <li><a href="javascript:;"><img src="img/temp/logo1.png" alt="" class="logo"></a></li>
                    <li><a href="javascript:;"><img src="img/temp/logo2.png" alt="" class="logo"></a></li>
                    <li><a href="javascript:;"><img src="img/temp/logo3.png" alt="" class="logo"></a></li>
                    <li><a href="javascript:;"><img src="img/temp/logo2.png" alt="" class="logo"></a></li>
                    <li><a href="javascript:;"><img src="img/temp/logo1.png" alt="" class="logo"></a></li>
                    <li><a href="javascript:;"><img src="img/temp/logo1.png" alt="" class="logo"></a></li>
                    <li><a href="javascript:;"><img src="img/temp/logo3.png" alt="" class="logo"></a></li>
                </ul>
            </div>
        </article>
    </section>

    <section class="latest">
        <h2 style="margin-bottom: 0px !important"><span>Últimas Notícias</span></h2>
        <?=$this->element('examples/new')?>
        <?=$this->element('examples/new')?>
        <?=$this->element('examples/new')?>
        <article class="post">
            <p class="more">
                <?=$this->Html->link('Mais Notícias', ['controller' => 'site', 'action' => 'noticias']);?>
            </p>
        </article>
    </section>
</section>

<!--
<section class="content">
    <section class="columns" style="margin-bottom:0px">
        <div class="col latest">
            <h2><span>A GE-AGRO</span></h2>
            <article class="post">
                <p>MultiPurpose's goal is to help you build unique and modern websites fast, easy and with the lowest cost possible. With MultiPurpose you can create many unique style websites for differend needs.MultiPurpose's goal is to help you build unique and modern websites fast, easy and with the lowest cost possible. With MultiPurpose you can create many unique style websites for differend needs.</p>
                <p>With MultiPurpose you can create many unique style websites for differend needs. MultiPurpose's goal is to help you build unique and modern websites fast, easy and with the lowest cost possible</p>
                <p class="more">
                <?php
echo $this->Html->link(
    'Saiba Mais',
    ['controller' => 'site', 'action' => 'empresa'],
    ['escape' => false, 'title' => 'Saiba Mais']
);
?>
                </p>
            </article>
        </div>
    </section>

    <section class="columns" style="text-align: center; margin-top:0px">
        <article class="col hp-intro">
            <p class="cta">
                <?php
echo $this->Html->link(
    'Conheça Nossos Serviços',
    ['controller' => 'site', 'action' => 'servicos'],
    ['escape' => false, 'class' => 'button', 'title' => 'Conheça Nossos Serviços']
);
?>
            </p>
        </article>
    </section>

    <section class="columns">
        <h2><span>Nossa Equipe</span></h2>
        <article class="col4">
            <p class="img"><a href="#"><img src="img/articles/01s.jpg" alt="" width="220" height="160"></a></p>
            <h3><a href="#">Unlimited Colors</a></h3>
            <p>Build your website using the custom color you want or choose one of the the predefinied color skin. It's up to you now. You decide.</p>
        </article><article class="col4">
            <p class="img"><a href="#"><img src="img/articles/02s.jpg" alt="" width="220" height="160"></a></p>
            <h3><a href="#">SEO Friendly</a></h3>
            <p>MultiPurpose is using ultra light and optimized, super valid SEO friendly HTML5 structure, CSS3 file is also optimized for page speed.</p>
        </article><article class="col4">
            <p class="img"><a href="#"><img src="img/articles/03s.jpg" alt="" width="220" height="160"></a></p>
            <h3><a href="#">Modern Menus</a></h3>
            <p>You can choose one of 14 modern premium menus to customize your template. Your website can be more personal from now.</p>
        </article><article class="col4">
            <p class="img"><a href="#"><img src="img/articles/04s.jpg" alt="" width="220" height="160"></a></p>
            <h3><a href="#">Premium Sliders</a></h3>
            <p>It's a great deal to buy MultiPurpose now, because you get also 14 ThemeMotive's sliders for different needs and purposes.</p>
        </article>
    </section>

    <section class="columns">
        <article class="col3">

        </article><article class="col3">

        </article><article class="col3">
            <?=$this->element('examples/cotacoes')?>
        </article>
    </section>

    <a href="#top" class="go-top">Go to top of page</a>
</section>
-->
