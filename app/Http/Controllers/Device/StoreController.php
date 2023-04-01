<?php

namespace App\Http\Controllers\Device;

use App\Http\Requests\Device\StoreRequest;
use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class StoreController extends Controller
{
	public function __invoke(StoreRequest $request)
	{
		$data = $request->validated();

		Device::create($data);

		return to_route('devices.index');
	}
}