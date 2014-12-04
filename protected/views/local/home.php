<?php
/* @var $this LocalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Locals',
);

$this->menu=array(
	array('label'=>'Create Local', 'url'=>array('create')),
	array('label'=>'Manage Local', 'url'=>array('admin')),
);
?>

<h1>Locales</h1>

<?php
    foreach($Locales as $local ){
		echo "Local:  ".$local->nombre."<br>";
		echo "Distrito: ".$local->distrito."<br>";
		echo "Direccion: ".$local->direccion."<br>";
		echo "Telefono: ".$local->telefono."<br>";
		echo "Estado: ".$local->estado."<br>";
		echo "<br>";
	}
?>
