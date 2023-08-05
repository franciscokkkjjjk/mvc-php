<?php $render('header'); ?>
    <hr>
    <a href="<?= $base;?>/">Voltar</a><br>
    <form action="<?= $base;?>/usuario/<?=$usuario['id']?>/editar" method="post">
        <input type="text" placeholder="Nome" value="<?= $usuario['nome'];?>" name='nome'>
        <input type="email" placeholder="Email" value="<?= $usuario['email']; ?>" name='email'>
        <button type="submit">Enviar</button>
    </form>
    <hr>
<?php 
$render('footer');
?>