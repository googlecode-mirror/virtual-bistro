<h1>Posts do Blog</h1>
<table>
    <?php echo $this->Html->link('Adicionar Funcionário', array('controller' => 'employees', 'action' => 'add')); ?>
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
        <td><?php echo $this->Html->link('Visualizar', array('action' => 'view', $employee['Employee']['id']));?>
            <?php echo $this->Html->link('Editar', array('action' => 'edit', $employee['Employee']['id']));?>
            <?php echo $this->Form->postLink('Apagar', array('action' => 'delete', $employee['Employee']['id']), array('confirm' => 'Você tem certeza?'))?>
            
        </td>
    </tr>
    <?php endforeach; ?>

</table>