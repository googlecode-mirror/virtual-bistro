<h1>Clientes</h1>
<table>
    <?php echo $this->Html->link('Adicionar Cliente', array('controller' => 'clients', 'action' => 'add')); ?>
    <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($clients as $client): ?>
    <tr>
        <td>
            <?php echo $client['Clients']['name']; ?>
        </td>
        <td><?php echo $client['Clients']['cpf']; ?></td>
        <td><?php echo $this->Html->link('Visualizar', array('action' => 'view', $client['Client']['id']));?>
            <?php echo $this->Html->link('Editar', array('action' => 'edit', $client['Client']['id']));?>
            <?php echo $this->Form->postLink('Apagar', array('action' => 'delete', $client['Client']['id']), array('confirm' => 'Você tem certeza?'))?>
            
        </td>
    </tr>
    <?php endforeach; ?>

</table>