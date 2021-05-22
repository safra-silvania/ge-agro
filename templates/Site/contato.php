<?=$this->element('breadcrumb')?>

<section class="content contact">
    <article class="main">
        <h1><?=$title?></h1>
        <?=$page->content?>

        <?= $this->Flash->render() ?>

        <?php $this->Form->setTemplates(['inputContainer' => '{{content}}','inputContainerError' => '{{content}} <strong>{{error}}</strong>']);?>

        <?= $this->Form->create(null, ['class' => 'contact-form']) ?>
            <p class="half">
                <label>Nome</label>
                <?= $this->Form->control('name', ['empty' => false, 'required' => false, 'class' => '', 'label' => false]) ?>
            </p>
            <p class="half">
                <label>E-Mail</label>
                <?= $this->Form->control('email', ['empty' => false, 'required' => false, 'class' => '', 'label' => false]) ?>
            </p>
            <p>
                <label>Mensagem</label>
                <?= $this->Form->textarea('message', ['empty' => false, 'required' => false, 'class' => '', 'label' => false]) ?>
            </p>

            <div class="row">
                <div class="col-sm-12 text-right">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        <?= $this->Form->end() ?>
    </article>
    <aside>
        <section>
            <!-- <div class='gmap' id="map">3 Abbey Rd, London, Greater London NW8 9AY</div> -->
            <div class="gmap" id="map"></div>
        </section><section>
            <h3><span>Contact details</span></h3>
            <p>Company Name Ltd. 3300 Super High<br>Green Village, London, AA22 B45</p>
            <p>Phone: +44 345 345 3456<br>E-mail: <a href="mailto:contact@company.com">contact@company.com</a></p>
        </section><section class="social">
            <h3><span>Get social</span></h3>
            <ul>
                <li><a href="#" class="facebook">Facebook</a></li>
                <li><a href="#" class="twitter">Twitter</a></li>
                <li><a href="#" class="pinterest">Pinterest</a></li>
                <li><a href="#" class="rss">RSS</a></li>
                <li><a href="#" class="linkedin">LinkedIn</a></li>
                <li><a href="#" class="flickr">Flickr</a></li>
                <li><a href="#" class="vimeo">Vimeo</a></li>
                <li><a href="#" class="blogger">Blogger</a></li>
            </ul>
        </section>
    </aside>
</section>

<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKkWyscQoa3E_hTmdD4JAvgIi5bJOfP10&callback=initMap&libraries=&v=weekly"></script> -->
