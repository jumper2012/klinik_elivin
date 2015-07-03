<?php
$this->breadcrumbs=array(
	'Laporans'=>array('index'),
	$model->id_laporan=>array('view','id'=>$model->id_laporan),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Laporan','url'=>array('index')),
	array('label'=>'Create Laporan','url'=>array('create')),
	array('label'=>'View Laporan','url'=>array('view','id'=>$model->id_laporan)),
	array('label'=>'Manage Laporan','url'=>array('admin')),
	);
	?>

	<h1>Update Laporan <?php echo $model->id_laporan; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>