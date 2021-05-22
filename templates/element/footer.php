<footer>
    <section class="widgets">
        <article>
            <h3><span>Contato</span></h3>
            <p>Praça do Rosário, n° 320<br>Piso Superior, Centro<br>Silvânia-GO <br>CEP: 75.180-000<br>Telefone: +55 (62) 99837-7093<br>E-mail: <a href="mailto:comercial@ge-agro.com">comercial@ge-agro.com</a></p>
        </article><article class="widget_links">
            <h3><span>Services</span></h3>
            <?php
            if (isset($siteMenu)) {
                echo "<ul>";
                foreach ($siteMenu as $menu) {
                    $label = $menu['label'];
                    $url = $menu['url'] ?? [];
                    echo "<li>";
                    echo $this->Html->link($label, isset($url) ? $url : []);
                    echo "</li>";
                }
                echo "</ul>";
            }
            ?>
        </article><article class="widget_photos">
            <h3><span>Work</span></h3>
            <ul>
                <li><a href="#"><?=$this->Html->image("/theme/images/temp/01.jpg", ["url" => []])?></a></li>
                <li><a href="#"><?=$this->Html->image("/theme/images/temp/02.jpg", ["url" => []])?></a></li>
                <li><a href="#"><?=$this->Html->image("/theme/images/temp/03.jpg", ["url" => []])?></a></li>
                <li><a href="#"><?=$this->Html->image("/theme/images/temp/04.jpg", ["url" => []])?></a></li>
                <li><a href="#"><?=$this->Html->image("/theme/images/temp/05.jpg", ["url" => []])?></a></li>
                <li><a href="#"><?=$this->Html->image("/theme/images/temp/06.jpg", ["url" => []])?></a></li>
            </ul>
        </article><article class="widget_newsletter">
            <h3><span>Sign Up For Newsletter</span></h3>
            <p>Put your e-mail and click on the envelope button.</p>
            <form action="newsletter-signup.php" method="post" class="newsletter-subscribe-form">
                <p><input name="MAIL" id="news_email" placeholder="Your e-mail"><button type="submit" name="subscribe" id="subscribe" value="1"><?=$this->Html->image("/theme/images/mail.png", ["url" => []])?></button></p>
            </form>
        </article>
    </section>
    <section class="bottom">
        <p>
            <?=$this->Html->link('Ge-Agro', ['controller' => 'site', 'action' => 'home']);?>
            <?=date('Y')?> | Todos os direitos reservados
        </p>
        <nav class="social">
            <ul>
                <li><a href="#" class="facebook">Facebook</a></li>
                <li><a href="#" class="twitter">Twitter</a></li>
                <li><a href="#" class="googleplus">Google+</a></li>
                <li><a href="#" class="rss">RSS</a></li>
            </ul>
        </nav>
    </section>
</footer>