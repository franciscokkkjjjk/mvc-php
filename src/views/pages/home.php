<?php $render('header'); ?>
    <hr>
    <a href="<?= $base;?>/novo">Novo Usuario</a>
    <table border="2">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th colspan="2">ACTIONS</th>
        </tr>
        <?php foreach($usuarios as $item): ?>
            <tr>
                <td style="text-align: center;"> <?= $item['id']; ?> </td>
                <td> <?= $item['nome']; ?> </td>
                <td> <?= $item['email']; ?> </td>
                <td><a href="<?= $base;?>/usuario/<?=$item['id']?>/editar">[EDITAR]</td>
                <td><a href="<?= $base;?>/usuario/<?=$item['id']?>/excluir">[EXCLUIR]</td>
            </tr>
        <?php endforeach; ?>
    </table>
    <hr>
<?php 
$render('footer');
?>