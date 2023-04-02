<?php

namespace App\Http\Controllers\Device;

use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{
  public function __invoke()
  {
    $devices = Device::paginate(10);

    return view('devices.index', compact('devices'));
  }
}