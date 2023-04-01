<?php

namespace App\Http\Controllers\Device;

use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DestroyController extends Controller
{
	public function __invoke(Device $device)
	{
		$device->delete();
		return to_route('devices.index');
	}
}