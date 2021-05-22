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
                <div class="pull-left"><?= __("Banner Image") ?></div>
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
                                <th class="col-lg-3"><?= __('Banner') ?></th>
                                <td class="col-lg-9"><?= $bannerImage->banner->name ?></td>
                            </tr>
                            <tr>
                                <th class="col-lg-3"><?= __('Title') ?></th>
                                <td class="col-lg-9"><?= h($bannerImage->title) ?></td>
                            </tr>
                            <tr>
                                <th class="col-lg-3"><?= __('Link') ?></th>
                                <td class="col-lg-9"><?= h($bannerImage->link) ?></td>
                            </tr>
                            <tr>
                                <th class="col-lg-3"><?= __('File Name') ?></th>
                                <td class="col-lg-9"><?= h($bannerImage->file_name) ?></td>
                            </tr>
                            <tr>
                                <th class="col-lg-3"><?= __('Hash') ?></th>
                                <td class="col-lg-9"><?= h($bannerImage->hash) ?></td>
                            </tr>
                            <tr>
                                <th class="col-lg-3"><?= __('Id') ?></th>
                                <td class="col-lg-9"><?= $this->Number->format($bannerImage->id) ?></td>
                            </tr>
                            <tr>
                                <th class="col-lg-3"><?= __('Created') ?></th>
                                <td class="col-lg-9"><?= h($bannerImage->created) ?></td>
                            </tr>
                            <tr>
                                <th class="col-lg-3"><?= __('Modified') ?></th>
                                <td class="col-lg-9"><?= h($bannerImage->modified) ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text">
                        <strong><?= __('Description') ?></strong>
                        <blockquote>
                            <?= $this->Text->autoParagraph(h($bannerImage->description)); ?>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

