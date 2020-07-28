<?php
class Bike
{
	function display()
	{
	echo "Bike display";
	}
}
class hero extends Bike
{
	function display()
	{
	echo "Bike display";
	}
}
$a= new hero;
$a->display();
$b= new Bike;
$b->display();

?>