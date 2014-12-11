<?php
/* @var $this CanchaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Canchas',
);

$this->menu=array(
	array('label'=>'Create Cancha', 'url'=>array('create')),
	array('label'=>'Manage Cancha', 'url'=>array('admin')),
);
$cont = 1;
?>

<h1>Canchas</h1>

<?php foreach($Canchas as $cancha){ ?>
   <div class="col-md-6 portfolio-item">
        <a href="/campos/index.php?r=cancha/view&id=<?=$cancha['idCancha']?>">
            <img  style="width: 700px; height: 400px;" class="img-responsive" src="img/local<?=$cancha['idCancha']?>.jpg" alt="">
        </a>
        <h3>
			<a href="/campos/index.php?r=cancha/view&id=<?=$cancha['idCancha']?>"><?=$cancha["nombre"]?></a>
        </h3>
        <p><?=$cancha["tarifaD"]?></p>
    </div>
<?php } ?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
