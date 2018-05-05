<?php


	require 'flowers/Jesmin.php';
	require 'flowers/Rose.php';
	require 'flowers/Beli.php';

	use dhaka\Rose\Flower;
	use dhaka\Jesmin\Flower as Jesmin;
	use dhaka\Beli\Flower as Beli;

		$fruit1 = new Jesmin();
		$fruit2 = new Flower();
		$fruit3 = new Beli();

			echo $fruit1->name;
			echo $fruit2->name;
			echo $fruit3->name;
			