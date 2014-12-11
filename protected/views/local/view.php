<?php
/* @var $this LocalController */
/* @var $model Local */

$this->menu=array(
	array('label'=>'Actualizar información', 'url'=>array('update', 'id'=>$model->idLocal)),
	array('label'=>'Eliminar publicación', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idLocal),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<?php $local = $model;?>
<h1><?=$local["nombre"]?></h1>

<div class="col-md-12 portfolio-item">
    <a href="/campos/index.php?r=local/view&id=<?=$local['idLocal']?>">
        <img  style="width: 700px; height: 400px;" class="img-responsive" src="img/local<?=$local['idLocal']?>.jpg" alt="">
    </a>
    <h3>
    	Distrito: <?=$local['distrito']?>
    </h3>
    <h3>
    	Dirección: <?=$local['direccion']?>
    </h3>
    <h3>
    	Teléfonos: <?=$local['telefono']?>
    </h3>
	<h3>
    	Estado: <?=$local['estado']?>
    </h3>
</div>
