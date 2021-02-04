<?=$this->element('breadcrumb')?>

<section class="content">
    
    <section class="columns">
        <div class="col1">
            <blockquote class="restrict">
                <h3>Área Restrita</h3>

                <?= $this->Flash->render() ?>

                <?= $this->Form->create(null, ['class' => 'form1']) ?>
                    <div class="form-group mb-lg">
                        <label>E-mail</label>
                        <?= $this->Form->control('email', ['empty' => false, 'required' => true, 'class' => 'form-control input-lg', 'label' => false]) ?>
                    </div>

                    <div class="form-group mb-lg">
                        <div class="clearfix">
                            <label class="pull-left">Senha</label>
                            <?= $this->Form->control('password', ['empty' => false, 'required' => true, 'class' => 'form-control input-lg', 'label' => false]) ?>
                        </div>
                    </div>
                    <br />

                    <div class="row">
                        <div class="col-sm-12 text-right">
                            <button type="submit" class="btn btn-primary"><?=__('Login')?></button>
                        </div>
                    </div>
                <?= $this->Form->end() ?>
            </blockquote>
        </div>
    </section>

</section>
