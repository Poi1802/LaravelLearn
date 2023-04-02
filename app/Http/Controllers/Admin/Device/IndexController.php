<?php

namespace App\Http\Controllers\Admin\Device;

use App\Http\Filters\DeviceFilter;
use App\Http\Requests\Device\FilterRequest;
use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{
  public function __invoke(FilterRequest $request)
  {
    $data = $request->validated();

    $filter = app()->make(DeviceFilter::class, ['queryParams' => $data]);

    $devices = Device::filter($filter)->paginate(10);

    return view('admin.devices.index', compact('devices'));
  }
}