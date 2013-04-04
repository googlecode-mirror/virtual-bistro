<div class='Conteudo'>
    <table>
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Ações</th>
        </tr>

        <?php foreach ($employees as $employee): ?>
        <tr>
            <td>
                <?php echo $employee['Employee']['name']; ?>
            </td>
            <td><?php echo $employee['Employee']['cpf']; ?></td>
            
            <td class='actions'>
                <?php echo $this->Html->link(
                        $this->Html->image("view.png", array('alt' => 'Ver')),
                        array('action' => 'view', $employee['Employee']['id']),
                        array('escape'=>false, 'class'=>'link'))?>

                        <?php echo $this->Html->link($this->Html->image("edit.png",array('alt' => 'Editar')),
                        array('action' => 'edit', $employee['Employee']['id']),
                        array('escape'=>false, 'class'=>'link'));
                        ?>

                        <?php echo $this->Html->link($this->Html->image("del.png",array('alt' => 'Remover')),
                        array('action' => 'delete', $employee['Employee']['id']),
                        array('escape'=>false, 'class'=>'link'),
                        "Você tem certeza que deseja remover o ". $employee['Employee']['name'] . "?");
                        ?>
                
            </td>
        </tr>
        <?php endforeach; ?>

    </table>
</div>