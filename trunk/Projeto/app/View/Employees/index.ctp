<h1>Posts do Blog</h1>
<table>
    <?php echo $this->Html->link('Adicionar Funcionário', array('controller' => 'employees', 'action' => 'add')); ?>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($employees as $employee): ?>
    <tr>
        <td><?php echo $employee['Employee']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($employee['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $employee['Employee']['id'])); ?>
        </td>
        <td><?php echo $employee['Employee']['cpf']; ?></td>
        <td><?php echo $this->Form->postLink(
                'Apagar',
                array('action' => 'delete', $employee['Employee']['id']),
                array('confirm' => 'Você tem certeza?')
            )?>
            <?php echo $this->Html->link('Editar', array('action' => 'edit', $employee['Employee']['id']));?></td>
    </tr>
    <?php endforeach; ?>

</table>