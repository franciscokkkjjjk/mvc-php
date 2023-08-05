<h1><?php $render('header'); ?></h1>
<h2>Ola <?= (isset($nome) && isset($au)) ? $nome . ' '. $au : "Visitante"?></h2>