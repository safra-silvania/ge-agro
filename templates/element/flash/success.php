<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>

<p class="msg success"><a class="hide" href="#">hide this</a>
    <?= $message ?>
</p>
