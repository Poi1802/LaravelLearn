<?php

namespace App\Http\Controllers\Admin\Device;

use App\Http\Requests\Device\UpdateRequest;
use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UpdateController extends Controller
{
  public function __invoke(Device $device, UpdateRequest $request)
  {
    $data = $request->validated();

    $device->update($data);

    return to_route('admin.devices.show', $device->id);
  }
}