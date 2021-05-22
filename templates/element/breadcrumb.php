<?php
// dd(isset($crumbs));
    if (isset($crumbs)) {
        ?>
        <section class="breadcrumb p07">
            <p>
                <?php
                for ($i = 0; $i < count($crumbs); $i++) {
                    $isLast = $i + 1 == count($crumbs);
                    if ($isLast)
                        echo $crumbs[$i];
                    else
                        echo "<a href=''>".$crumbs[$i]."</a>";
                }
                ?>
            </p>
        </section>
        <?php
    }
?>