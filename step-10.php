<?php
$age = 20;

function checkAge($age){
	return $age>=21;
}

	if(checkAge($age)){
		echo 'you are welcome';

	}else{
		echo 'you are not welcome';
	}

?>