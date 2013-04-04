<div class='Conteudo'>
<table>
    <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($clients as $client): ?>
    <tr>
        <td>
            <?php echo $client['Client']['name']; ?>
        </td>
        <td><?php echo $client['Client']['cpf']; ?></td>
        <td class='actions'>
            <?php echo $this->Html->link(
                        $this->Html->image("view.png", array('alt' => 'Ver')),
                        array('action' => 'view', $client['Client']['id']),
                        array('escape'=>false, 'class'=>'link'))?>

                        <?php echo $this->Html->link($this->Html->image("edit.png",array('alt' => 'Editar')),
                        array('action' => 'edit', $client['Client']['id']),
                        array('escape'=>false, 'class'=>'link'));
                        ?>

                        <?php echo $this->Html->link($this->Html->image("del.png",array('alt' => 'Remover')),
                        array('action' => 'delete', $client['Client']['id']),
                        array('escape'=>false, 'class'=>'link'),
                        "Você tem certeza que deseja remover o ". $client['Client']['name'] . "?");
                        ?>
            
        </td>
    </tr>
    <?php endforeach; ?>

</table>
</div>