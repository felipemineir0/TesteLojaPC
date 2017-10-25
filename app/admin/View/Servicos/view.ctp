<div class="servicos view">
<h2><?php echo __('Servico'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Texto'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['texto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagem'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['imagem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ativo'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['ativo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria Servico'); ?></dt>
		<dd>
			<?php echo $this->Html->link($servico['CategoriaServico']['id'], array('controller' => 'categoria_servicos', 'action' => 'view', $servico['CategoriaServico']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Servico'), array('action' => 'edit', $servico['Servico']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Servico'), array('action' => 'delete', $servico['Servico']['id']), array(), __('Are you sure you want to delete # %s?', $servico['Servico']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categoria Servicos'), array('controller' => 'categoria_servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria Servico'), array('controller' => 'categoria_servicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
