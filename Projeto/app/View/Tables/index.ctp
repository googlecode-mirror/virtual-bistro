<h1>Nossas Mesas</h1>
<table>
    <?php echo $this->Html->link('Adicionar Mesa', array('controller' => 'tables', 'action' => 'add')); ?>
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
        <td><?php echo $table['Table']['client']; ?></td>
        <td><?php echo $table['Table']['value']; ?></td>
        <td><?php echo $this->Html->link('Visualizar', array('action' => 'view', $table['Table']['id']));?>
            <?php echo $this->Html->link('Editar', array('action' => 'edit', $table['Table']['id']));?>
            <?php echo $this->Form->postLink('Apagar', array('action' => 'delete', $table['Table']['id']), array('confirm' => 'Você tem certeza?'))?>
            
        </td>
    </tr>
    <?php endforeach; ?>

</table>