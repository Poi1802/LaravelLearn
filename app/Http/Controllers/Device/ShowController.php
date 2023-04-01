<?php

namespace App\Http\Controllers\Device;

use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ShowController extends Controller
{
	public function __invoke(Device $device)
	{
		return view('devices.show', compact('device'));
	}
}