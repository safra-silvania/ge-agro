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
                <div class="pull-left"><?= __("User") ?></div>
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
                                <th class="col-lg-3"><?= __('Role') ?></th>
                                <td class="col-lg-9"><?= $user->role->name ?></td>
                            </tr>
                            <tr>
                                <th class="col-lg-3"><?= __('User Status') ?></th>
                                <td class="col-lg-9"><?= $user->user_status->name ?></td>
                            </tr>
                            <tr>
                                <th class="col-lg-3"><?= __('Name') ?></th>
                                <td class="col-lg-9"><?= h($user->name) ?></td>
                            </tr>
                            <tr>
                                <th class="col-lg-3"><?= __('Email') ?></th>
                                <td class="col-lg-9"><?= h($user->email) ?></td>
                            </tr>
                            <tr>
                                <th class="col-lg-3"><?= __('Password') ?></th>
                                <td class="col-lg-9"><?= h($user->password) ?></td>
                            </tr>
                            <tr>
                                <th class="col-lg-3"><?= __('Id') ?></th>
                                <td class="col-lg-9"><?= $this->Number->format($user->id) ?></td>
                            </tr>
                            <tr>
                                <th class="col-lg-3"><?= __('Tenant Id') ?></th>
                                <td class="col-lg-9"><?= $this->Number->format($user->tenant_id) ?></td>
                            </tr>
                            <tr>
                                <th class="col-lg-3"><?= __('Created') ?></th>
                                <td class="col-lg-9"><?= h($user->created) ?></td>
                            </tr>
                            <tr>
                                <th class="col-lg-3"><?= __('Modified') ?></th>
                                <td class="col-lg-9"><?= h($user->modified) ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

