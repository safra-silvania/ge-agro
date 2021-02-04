<?php
$content = explode("\n", $content);

foreach ($content as $line) :
    echo '<p> ' . $line . "</p>\n";
endforeach;

echo "<br />";
echo "<br />";
echo $this->Html->image("/img/logo-02.png", [
    "alt" => "Ge-Agro (html helper)", "width"=>"219", "height"=>"35", "class"=> "",
    "url" => ['controller' => 'site', 'action' => 'home']
]);

?>

<img src="/ge-agro/img/logo-02.png" alt="Ge-Agro (img)" class="" width="219" height="35">