<div class="states form">
<?php echo $this->Form->create('State');?>
	<fieldset>
		<legend><?php __('Admin Edit State'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('country_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('State.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('State.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List States', true), array('action' => 'index'));?></li>
	</ul>
</div>