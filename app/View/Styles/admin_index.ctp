<style>
	.form_outer{
		margin-bottom:20px;
	}
	table{
		width:100%;
		margin:0px;
	}
	table td.actions{
		width:28% !important;
	}
	.form_outer{
		margin-bottom:20px;
	}
</style>
<div class="page_heading">
	<h2>Style</h2>
</div>
<div class="row">
	<div class="col-sm-7">
		<div class="form_outer">
			<div class="up-img_sec">
				<?php echo $this->Html->link('Add Style', array('action' => 'add'), array('class' => 'btn btn-default')); ?>
			</div>
			<table class="table-striped table-bordered table-condensed table-hover">
				<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('name'); ?></th>
					<th><?php echo $this->Paginator->sort('created'); ?></th>
					<th><?php echo $this->Paginator->sort('modified'); ?></th>
					<th class="actions">Actions</th>
				</tr>
				<?php foreach ($Style as $tag): ?>
				<tr>
					<td><?php echo $tag['Style']['id']; ?></td>
					<td><?php echo $tag['Style']['name']; ?></td>
					<td><?php echo $tag['Style']['created']; ?></td>
					<td><?php echo $tag['Style']['modified']; ?></td>
					<td class="actions">
						<?php echo $this->Html->link('View', array('action' => 'view', $tag['Style']['id']), array('class' => 'btn btn-default btn-xs btn-view')); ?>
						<?php echo $this->Html->link('Edit', array('action' => 'edit', $tag['Style']['id']), array('class' => 'btn btn-default btn-xs btn-edit')); ?>
						<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $tag['Style']['id']), array('class' => 'btn btn-danger btn-xs btn-delet'), __('Are you sure you want to delete # %s?', $tag['Style']['id'])); ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>
<?php echo $this->element('pagination-counter'); ?>
<?php echo $this->element('pagination'); ?>

