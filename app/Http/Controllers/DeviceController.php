<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
	public function index()
	{
		$devices = Device::all();

		return view('devices.index', compact('devices'));
	}
	public function show(Device $device)
	{
		return view('devices.show', compact('device'));
	}
	public function create()
	{
		return view('devices.create');
	}

	public function store()
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

	public function edit(Device $device)
	{
		return view('devices.edit', compact('device'));
	}

	public function update(Device $device)
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

	public function destroy(Device $device)
	{
		$device->delete();
		return to_route('devices.index');
	}
}