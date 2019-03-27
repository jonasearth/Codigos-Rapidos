<?php
require_once "session.php";
require_once "config.php";

$game = new Forca();

$game->getgamecontent();

$quant = strlen($game->nome);

$letras = str_split($game->nome);

$i = 0;

echo '<div id="ss"><img src="gif/forca.gif" alt="Forca" border="0" name="status" style="float: left;" width="100" height="150"></div><br><br><br><br><br>';

while($quant > $i){

	echo '<input value="-" id="'.$i.'" disabled="" type="text" style="width: 30px; height: 30px;font-size: xx-large;text-align: center;">';

	$i++;

}

$alfabeto = "a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z";

$alf = explode(",", $alfabeto);

$o = 0;

echo "<br><br><br><center><input type='submit' class='btn btn-success' value='".$game->categoria."' disabled></center><br><br> <div id='letras'>";

while ($o < count($alf)) {

		echo "<input type='submit' id='".$alf[$o]."' value='".$alf[$o]."' onclick='sendalp(this.value)' style='width: 30px; height: 30px;font-size: large;text-align: center;'>";

	$o++;

}
echo "</div>";
