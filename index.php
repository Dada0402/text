<!DOCTYPE html>
<html>
<body>
	<?php
		include 'header.php';
		$da ="hometow chachacha";
		echo " go to $da for what?</br>" ;
		function myhome(){ 
			echo "go home</br>";

		}

		myhome();
		
		myhome();

		myhome();
		

		
		function cong3so($x, $y, $z){
			echo $x+$y+$z;


		}
		   cong3so(1,4,5);


$x = 5; // global scope
 
function myTest() {

echo "<p>Variable x inside function is: $x</p>";
} 
myTest();
	echo "<p>Variable x outside function is: $x</p>";



// local scope
 
function mylocal() {
	$y=8;

echo "<p>Variable y inside function is: $y</p>";


} 

mylocal();
	echo "<p>Variable y outside function is: $y</p>";



	?>


	
</body>
</html>