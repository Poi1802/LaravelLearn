<?php

namespace App\Http\Controllers\Device;

use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class StoreController extends Controller
{
	public function __invoke()
	{
		$data = request()->validate([
			'name' => 'string',
			'price' => 'numeric',
			'description' => 'string',
			'brand' => 'string',
		]);

		Device::create($data);

		return to_route('devices.index');
	}
}