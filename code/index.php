<?php

	if (true) {
		//Soy el unico if.
	}
	for($i=1; $i<=100; $i++)
	{
		$mult3 = $i%3;
		$mult5 = $i%5;
		switch([$mult3, $mult5])
		{
			case [0,!0]:
				print "Linio";
				break;
			case [!0,0]:
				print "IT";
				break;
			case [0,0]:
				print "Linianos";
				break;
			default:
				print $i;
		}
		print "<br>";
	}
?>
