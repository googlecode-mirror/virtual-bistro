<div class='Conteudo'>
<table>
    <tr>
        <th>Nome</th>
        <th>Tipo</th>
        <th>Preço</th>
    </tr>

    <?php foreach ($menus as $menu): ?>
    <tr>
        <td>
            <?php echo $menu['Menu']['name']; ?>
        </td>
        <td><?php echo $menu['Menu']['type']; ?></td>
        <td class='actions'>
            <?php echo $this->Html->link(
                        $this->Html->image("view.png", array('alt' => 'Ver')),
                        array('action' => 'view', $menu['Menu']['id']),
                        array('escape'=>false, 'class'=>'link'))?>

                        <?php echo $this->Html->link($this->Html->image("edit.png",array('alt' => 'Editar')),
                        array('action' => 'edit', $menu['Menu']['id']),
                        array('escape'=>false, 'class'=>'link'));
                        ?>

                        <?php echo $this->Html->link($this->Html->image("del.png",array('alt' => 'Remover')),
                        array('action' => 'delete', $menu['Menu']['id']),
                        array('escape'=>false, 'class'=>'link'),
                        "Você tem certeza que deseja remover o ". $menu['Menu']['name'] . "?");
            ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
</div>