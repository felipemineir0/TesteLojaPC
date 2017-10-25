<div class="categoriaServicos view">
<h2><?php echo __('Categoria Servico'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoriaServico['CategoriaServico']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($categoriaServico['CategoriaServico']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($categoriaServico['CategoriaServico']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($categoriaServico['CategoriaServico']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($categoriaServico['CategoriaServico']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Categoria Servico'), array('action' => 'edit', $categoriaServico['CategoriaServico']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Categoria Servico'), array('action' => 'delete', $categoriaServico['CategoriaServico']['id']), array(), __('Are you sure you want to delete # %s?', $categoriaServico['CategoriaServico']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categoria Servicos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria Servico'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Servicos'); ?></h3>
	<?php if (!empty($categoriaServico['Servico'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Slug'); ?></th>
		<th><?php echo __('Texto'); ?></th>
		<th><?php echo __('Imagem'); ?></th>
		<th><?php echo __('Ativo'); ?></th>
		<th><?php echo __('Categoria Servico Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($categoriaServico['Servico'] as $servico): ?>
		<tr>
			<td><?php echo $servico['id']; ?></td>
			<td><?php echo $servico['nome']; ?></td>
			<td><?php echo $servico['slug']; ?></td>
			<td><?php echo $servico['texto']; ?></td>
			<td><?php echo $servico['imagem']; ?></td>
			<td><?php echo $servico['ativo']; ?></td>
			<td><?php echo $servico['categoria_servico_id']; ?></td>
			<td><?php echo $servico['created']; ?></td>
			<td><?php echo $servico['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'servicos', 'action' => 'view', $servico['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'servicos', 'action' => 'edit', $servico['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'servicos', 'action' => 'delete', $servico['id']), array(), __('Are you sure you want to delete # %s?', $servico['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
