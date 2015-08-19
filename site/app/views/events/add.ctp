<div class="events form">
<?php echo $this->Form->create('Event');?>
	<fieldset>
		<legend><?php __('Add Event'); ?></legend>
	<?php
		echo $this->Form->input('date');
		echo $this->Form->input('time', array('type' => 'text'));
		echo $this->Form->input('title', array('type' => 'text'));
		echo $this->Form->input('description');
		echo $this->Form->input('url_youtube', array('type' => 'text'));
		echo $this->Form->input('url_myspace', array('type' => 'text'));
		echo $this->Form->input('url_website', array('type' => 'text'));
		echo $this->Form->input('show');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Events', true), array('action' => 'index'));?></li>
	</ul>
</div>