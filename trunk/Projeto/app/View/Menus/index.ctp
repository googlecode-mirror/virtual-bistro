<h1>Cardápio</h1>
<table>
    <?php echo $this->Html->link('Adicionar Item', array('controller' => 'menus', 'action' => 'add')); ?>
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
        <td><?php echo $this->Html->link('Visualizar', array('action' => 'view', $menu['Menu']['id']));?>
            <?php echo $this->Html->link('Editar', array('action' => 'edit', $menu['Menu']['id']));?>
            <?php echo $this->Form->postLink('Apagar', array('action' => 'delete', $menu['Menu']['id']), array('confirm' => 'Você tem certeza?'))?>
            
        </td>
    </tr>
    <?php endforeach; ?>

</table>