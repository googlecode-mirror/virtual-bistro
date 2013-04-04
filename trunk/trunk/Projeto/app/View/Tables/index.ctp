<div class='Conteudo'>
<table>
    <tr>
        <th>Numero</th>
        <th>Status</th>
        <th>ID Cliente</th>
        <th>Valor</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($tables as $table): ?>
    <tr>
        <td>
            <?php echo $table['Table']['id']; ?>
        </td>
        <td><?php echo $table['Table']['stats']; ?></td>
        <td><?php echo $table['Table']['client_id']; ?></td>
        <td><?php echo $table['Table']['value']; ?></td>
        <td class='actions'>
            <?php echo $this->Html->link(
                        $this->Html->image("view.png", array('alt' => 'Ver')),
                        array('action' => 'view', $table['Table']['id']),
                        array('escape'=>false, 'class'=>'link'))?>

                        <?php echo $this->Html->link($this->Html->image("edit.png",array('alt' => 'Editar')),
                        array('action' => 'edit', $table['Table']['id']),
                        array('escape'=>false, 'class'=>'link'));
                        ?>

                        <?php echo $this->Html->link($this->Html->image("del.png",array('alt' => 'Remover')),
                        array('action' => 'delete', $table['Table']['id']),
                        array('escape'=>false, 'class'=>'link'),
                        "Você tem certeza que deseja remover a mesa ". $table['Table']['id'] . "?");
            ?>
            
            
        </td>
    </tr>
    <?php endforeach; ?>

</table>
</div>