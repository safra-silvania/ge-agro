<?php $this->Form->setTemplates(['inputContainer' => '<div class="col-lg-10 {{required}}">{{content}} </div>', 'inputContainerError' => '<div class="col-md-5 alert alert-warning {{required}}">{{content}} <strong>{{error}}</strong> </div>']);?>

<?=$this->Form->create($page, ['class' => 'form-horizontal'])?>

<div class="row">
    <div class="col-md-12">
        <div class="widget wgreen">

            <div class="widget-head">
                <div class="pull-left"><?=__("Page")?></div>
                <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="widget-content">
                <div class="padd">

                    <div class="form-group">
                        <label class="col-lg-2 control-label required-label" for="name"><?=__('Name')?></label>
                        <?=$this->Form->control('name', ['class' => 'form-control', 'label' => false])?>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label required-label" for="page_status_id"><?=__('Page_status_id')?></label>
                        <?=$this->Form->control('page_status_id', ['options' => $pageStatuses, 'class' => 'form-control', 'label' => false])?>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label" for="content"><?=__('Content')?></label>
                        <?=$this->Form->control('content', ['class' => 'form-control ck-editor', 'label' => false])?>
                    </div>
                </div>
            </div>

            <div class="widget-foot text-center">
                <?php echo $this->Form->button('Gravar', ['class' => 'btn btn-primary']); ?>

                <?php
echo $this->Html->link(
    '<button type="button" class="btn btn-default">Cancelar</button>',
    ['action' => 'index'],
    ['escape' => false, 'title' => 'Cancelar']
);
?>
            </div>

        </div>
    </div>
</div>

<?=$this->Form->end()?>