<div class="row">
    <div class="col-md-12">
        <?php
        echo $this->Html->link(
            '<button type="button" class="btn btn-default pull-right"><i class="fa fa-arrow-left"></i>&nbsp;Voltar</button>',
            ['action' => 'index'],
            ['escape' => false, 'title' => 'Voltar']
        );
        ?>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="widget wgreen">

            <div class="widget-head">
                <div class="pull-left"><?= __("Page Status") ?></div>
                <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="widget-content">
                <div class="padd">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th class="col-lg-3"><?= __('Name') ?></th>
                                <td class="col-lg-9"><?= h($pageStatus->name) ?></td>
                            </tr>
                            <tr>
                                <th class="col-lg-3"><?= __('Id') ?></th>
                                <td class="col-lg-9"><?= $this->Number->format($pageStatus->id) ?></td>
                            </tr>
                            <tr>
                                <th class="col-lg-3"><?= __('Created') ?></th>
                                <td class="col-lg-9"><?= h($pageStatus->created) ?></td>
                            </tr>
                            <tr>
                                <th class="col-lg-3"><?= __('Modified') ?></th>
                                <td class="col-lg-9"><?= h($pageStatus->modified) ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

