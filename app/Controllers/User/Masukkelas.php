<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Masukkelas extends BaseController
{
	public function indx()
	{
		echo"masuk kelas";
	}
	public function geratis()
	{
		dd("masuk kelas gratis");
	}

	public function berbayar(){
		dd("masuk kelas premium");
	}
}
