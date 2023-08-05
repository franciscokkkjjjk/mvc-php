<?php $render('header'); 
?>
    <hr>
    <a href="<?= $base;?>/novo">Novo Usuario</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th colspan="2">ACTIONS</th>
        </tr>
        <?php foreach($nome as $item) {?>
            <tr>
                <td style="text-align: center;"> <?= $item['id']; ?> </td>
                <td> <?= $item['nome']; ?> </td>
                <td> <?= $item['email']; ?> </td>
                <td><a href="<?= $base;?>/edit/<?=$item['id']?>">[EDITAR]</td>
                <td><a href="<?= $base;?>/delete/<?=$item['id']?>">[EXCLUIR]</td>
            </tr>
        <?php } ?>
    </table>
    <hr>
<?php 
$render('footer');
?>