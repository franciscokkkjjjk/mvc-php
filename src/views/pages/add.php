<?php $render('header'); ?>
    <hr>
    <a href="<?= $base;?>/">Voltar</a><br>
    <form action="<?= $base;?>/novo" method="post">
        <input type="text" placeholder="Nome" name='nome'>
        <input type="email" placeholder="Email" name='email'>
        <button type="submit">Enviar</button>
    </form>
    <hr>
<?php 
$render('footer');
?>