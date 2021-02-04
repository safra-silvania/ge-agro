<!-- Page heading -->
<div class="page-head">
    <h2 class="pull-left"><?= isset($pageHead) ? $pageHead : "" ?></h2>
    
    <div class="bread-crumb pull-right">
        <a>
            <i class="fa fa-home"></i>&nbsp;
            <?php
            echo $this->Html->link('Dashboard', [
                'controller' => 'dashboard',
                'action' => 'index'
            ]);
            ?>
        </a>
        <?php
        
        if (isset($arrayBreadCrumb)) {
            
            $showSeparator = false;
            if (count($arrayBreadCrumb) > 0)
                $showSeparator = true;
            
            $last = array_pop($arrayBreadCrumb);
            
            foreach ($arrayBreadCrumb as $breadCrumb) {
                $label = $breadCrumb['label'];
                $controller = isset($breadCrumb['link']['controller']) ? $breadCrumb['link']['controller'] : 'site';
                $action     = isset($breadCrumb['link']['action']) ? $breadCrumb['link']['action'] : 'home';
                $params     = isset($breadCrumb['link']['params']) ? implode('/', $breadCrumb['link']['params']) : '';
                
                echo '&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;';
                if (is_array($action)) {
                    echo $this->Html->link($label, [
                        'controller' => $controller,
                        'action' => $action, $params
                    ]);
                } else {
                    echo "<a href='javascript:;'>{$label}</a>";
                }
            }
            
            if ($showSeparator)
                echo '&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;';

            echo $last['label'];
        }
        ?>
    </div>

    <div class="clearfix"></div>
</div>
<!-- Page heading ends -->