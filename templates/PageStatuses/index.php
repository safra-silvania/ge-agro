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
                <div class="pull-left"><?= __('Page Statuses') ?></div>
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
                                <th><?= $this->Paginator->sort('name') ?></th>
                                <th><?= $this->Paginator->sort('created') ?></th>
                                <th><?= $this->Paginator->sort('modified') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pageStatuses as $pageStatus): ?>
                            <tr>
                                <td><?= $this->Number->format($pageStatus->id) ?></td>
                                <td><?= h($pageStatus->name) ?></td>
                                <td><?= h($pageStatus->created) ?></td>
                                <td><?= h($pageStatus->modified) ?></td>
                                <td class="actions">
                                    <?php
                                    echo $this->Html->link(
                                        '<button type="button" class="btn btn-xs btn-info"><i class="fa fa-search"></i></button>',
                                        ['action' => 'view', $pageStatus->id],
                                        ['escape' => false, 'title' => 'Visualizar']
                                    );
                                    echo "&nbsp;";

                                    echo $this->Html->link(
                                        '<button type="button" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></button>',
                                        ['action' => 'edit', $pageStatus->id],
                                        ['escape' => false, 'title' => 'Editar']
                                    );
                                    echo "&nbsp;";
                                    
                                    echo $this->Form->postLink(
                                        '<button type="button" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button>',
                                        ['action' => 'delete', $pageStatus->id],
                                        ['escape' => false, 'title' => 'Excluir', 'confirm' => 'Confirma a exclus??o deste registro?']
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
