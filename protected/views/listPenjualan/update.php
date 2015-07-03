<?php
$this->breadcrumbs=array(
	'List Penjualans'=>array('index'),
	$model->id_list_penjualan=>array('view','id'=>$model->id_list_penjualan),
	'Update',
);

	$this->menu=array(
	array('label'=>'List ListPenjualan','url'=>array('index')),
	array('label'=>'Create ListPenjualan','url'=>array('create')),
	array('label'=>'View ListPenjualan','url'=>array('view','id'=>$model->id_list_penjualan)),
	array('label'=>'Manage ListPenjualan','url'=>array('admin')),
	);
	?>

	<h1>Update ListPenjualan <?php echo $model->id_list_penjualan; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>