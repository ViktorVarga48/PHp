<style>
	* {
		font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	}
</style>
<?php
$text1 = $_POST['text1']; //váha
$text2 = $_POST['text2']/100; //výška
$vypocet = round($text1/($text2*$text2),2);

if($vypocet<=18.5) {
	echo "Tvoje BMI:".'<p>'.$vypocet; '</p>';
	echo '<p>podvýživa</p>';
}

if($vypocet>18.5 and $vypocet<=30){
	echo "Tvoje BMI:".'<p>'.$vypocet; '</p>';
	echo '<p>ideálna a zdravá váha.</p>';
}

if($vypocet>=31){
	echo "Tvoje BMI:".'<p>'.$vypocet; '</p>';
	echo '<p>nadváha</p>';
}


?>