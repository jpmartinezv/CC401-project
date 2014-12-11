<?php
/* @var $this LocalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Locals',
);

$this->menu=array();
?>

<?php

$cont = 1;

?>
<?php foreach($Locales as $local){ ?>
   <div class="col-md-6 portfolio-item">
        <a href="/campos/index.php?r=local/view&id=<?=$local['idLocal']?>">
            <img  style="width: 700px; height: 400px;" class="img-responsive" src="img/local<?=$cont++?>.jpg" alt="">
        </a>
        <h3>
			<a href="/campos/index.php?r=local/view&id=<?=$local['idLocal']?>"><?=$local["nombre"]?></a>
        </h3>
        <p><?=$local["direccion"]?></p>
    </div>
<?php } ?>