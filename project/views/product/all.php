<h1><?= $header ?></h1>
<?php foreach ($goods as $good){ ?>
     <h2><?=$good['name'] ?> </h2>
     <p>Категория <?=$good['category'] ?></p>
     <p>Цена <?=$good['price'] ?>р.</p>
<?}?>