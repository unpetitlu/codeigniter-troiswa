Hello <?= $firstname; ?>
<br>
<?php foreach($articles as $article) : ?>
        <?= $article->titre; ?>
        <?= $article->description; ?>
<?php endforeach; ?>

<?= anchor('main', 'Click Here');?>
<?= site_url("main"); ?>
<br>
<?= sayHello('Ludo (with helper)'); ?>