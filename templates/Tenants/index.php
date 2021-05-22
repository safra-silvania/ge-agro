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
                <div class="pull-left"><?= __('Tenants') ?></div>
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
                                <th><?= $this->Paginator->sort('site') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tenants as $tenant): ?>
                            <tr>
                                <td><?= $this->Number->format($tenant->id) ?></td>
                                <td><?= h($tenant->name) ?></td>
                                <td><?= h($tenant->site) ?></td>
                                <td class="actions">
                                    <?php
                                    echo $this->Html->link(
                                        '<button type="button" class="btn btn-xs btn-info"><i class="fa fa-search"></i></button>',
                                        ['action' => 'view', $tenant->id],
                                        ['escape' => false, 'title' => 'Visualizar']
                                    );
                                    echo "&nbsp;";

                                    echo $this->Html->link(
                                        '<button type="button" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></button>',
                                        ['action' => 'edit', $tenant->id],
                                        ['escape' => false, 'title' => 'Editar']
                                    );
                                    echo "&nbsp;";
                                    
                                    echo $this->Form->postLink(
                                        '<button type="button" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button>',
                                        ['action' => 'delete', $tenant->id],
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
