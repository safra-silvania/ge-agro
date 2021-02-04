<div class="row">
    <div class="col-md-12">
        <?php
        echo $this->Html->link(
            '<button type="button" class="btn btn-primary pull-right"><i class="fa fa-plus"></i>&nbsp;Incluir</button>',
            ['action' => 'add'],
            ['escape' => false, 'title' => 'Incluir']
        );
        ?>
    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <div class="widget">

            <div class="widget-head">
                <div class="pull-left"><?= __('Banner Images') ?></div>
                <div class="widget-icons pull-right">
                <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?= $this->Paginator->sort('id') ?></th>
                                <th><?= $this->Paginator->sort('banner_id') ?></th>
                                <th><?= $this->Paginator->sort('title') ?></th>
                                <th><?= $this->Paginator->sort('description') ?></th>
                                <th><?= $this->Paginator->sort('link') ?></th>
                                <th><?= $this->Paginator->sort('file_name') ?></th>
                                <th><?= $this->Paginator->sort('hash') ?></th>
                                <th><?= $this->Paginator->sort('created') ?></th>
                                <th><?= $this->Paginator->sort('modified') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($bannerImages as $bannerImage): ?>
                            <tr>
                                <td><?= $this->Number->format($bannerImage->id) ?></td>
                                <td><?= $bannerImage->has('banner') ? $this->Html->link($bannerImage->banner->name, ['controller' => 'Banners', 'action' => 'view', $bannerImage->banner->id]) : '' ?></td>
                                <td><?= h($bannerImage->title) ?></td>
                                <td><?= h($bannerImage->description) ?></td>
                                <td><?= h($bannerImage->link) ?></td>
                                <td><?= h($bannerImage->file_name) ?></td>
                                <td><?= h($bannerImage->hash) ?></td>
                                <td><?= h($bannerImage->created) ?></td>
                                <td><?= h($bannerImage->modified) ?></td>
                                <td class="actions">
                                    <?php
                                    echo $this->Html->link(
                                        '<button type="button" class="btn btn-xs btn-info"><i class="fa fa-search"></i></button>',
                                        ['action' => 'view', $bannerImage->id],
                                        ['escape' => false, 'title' => 'Visualizar']
                                    );
                                    echo "&nbsp;";

                                    echo $this->Html->link(
                                        '<button type="button" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></button>',
                                        ['action' => 'edit', $bannerImage->id],
                                        ['escape' => false, 'title' => 'Editar']
                                    );
                                    echo "&nbsp;";
                                    
                                    echo $this->Form->postLink(
                                        '<button type="button" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button>',
                                        ['action' => 'delete', $bannerImage->id],
                                        ['escape' => false, 'title' => 'Excluir', 'confirm' => 'Confirma a exclusão deste registro?']
                                    );
                                    ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div class="widget-foot">
                    <ul class="pagination pagination-sm pull-right">
                        <?= $this->Paginator->first('<< ' . __('first')) ?>
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                        <?= $this->Paginator->last(__('last') . ' >>') ?>
                    </ul>
                    <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
