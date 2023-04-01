<?php

namespace App\Http\Controllers\Device;

use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UpdateController extends Controller
{
	public function __invoke(Device $device)
	{
		$data = request()->validate([
			'name' => 'string',
			'price' => 'numeric',
			'description' => 'string',
			'brand' => 'string',
		]);

		$device->update($data);

		return to_route('devices.show', $device->id);
	}
}