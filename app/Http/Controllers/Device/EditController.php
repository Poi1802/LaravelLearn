<?php

namespace App\Http\Controllers\Device;

use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EditController extends Controller
{
	public function __invoke(Device $device)
	{
		return view('devices.edit', compact('device'));
	}
}