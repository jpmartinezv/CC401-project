<?php
    foreach($Locales as $local ){
		echo "Local:  ".$local->nombre."<br>";
		echo "Distrito: ".$local->distrito."<br>";
		echo "Direccion: ".$local->direccion."<br>";
		echo "Telefono: ".$local->telefono."<br>";
		echo "<br>";
	}
?>
