<?php
/* @var $this LocalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Locals',
);

$this->menu=array(
	array('label'=>'Registrar Campo', 'url'=>array('create')),
);
?>

<h1>Canchas</h1>

<?php
    foreach($Canchas as $local ){
		echo "Nombre:  ".$local->nombre."<br>";
		echo "Tarifa Dia: ".$local->tarifaD."<br>";
		echo "Tarifa Noche: ".$local->tarifaN."<br>";
		echo "Local: ".$local->idLocal."<br>";
		echo "<br>";
	}
?>
