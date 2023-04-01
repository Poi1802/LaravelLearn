<?php

namespace App\Http\Controllers\Device;

use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CreateController extends Controller
{
	public function __invoke()
	{
		return view('devices.create');
	}
}