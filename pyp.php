<!-- Begin pico y placa -->
<p><span class="picoyplaca"></span>
	<span><strong>&nbsp;NUEVO&nbsp;</strong>&nbsp;
<?php $nDia=date("d"); // día en #
$dia=date("D"); // día en nombre ej. Mon, Tue...
if ($dia=="Sat"||$dia=="Sun") { //sin pyp sábados y domingos
	$pyp=false;
} else {
	$pyp=true;
}
function esImpar($nDia) {
	return $nDia&1; // 0 = es par, 1 = es impar
}
if ($pyp==true) { // hay o no pyp
	if (esImpar($nDia)) { // Impar o par
		echo "1, 3, 5, 7, 9";
	} else {
		echo "0, 2, 4, 6, 8 ";
	}
} else {
		echo "sin pico y placa"; //sin pyp sábados y domingos
	}
?>
	&nbsp; 6:00 am - 8:30 am y 3:00 pm - 7:30 pm</span></p>

	<?php //echo "<p>PyP: ".$pyp."</br>nDia: ".$nDia."</br>dia: ".$dia."</p>" // control?>
<!--End Pico y Placa-->