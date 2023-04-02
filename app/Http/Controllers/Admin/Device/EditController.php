<?php

namespace App\Http\Controllers\Admin\Device;

use App\Models\Category;
use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EditController extends Controller
{
  public function __invoke(Device $device)
  {
    $categories = Category::all();

    return view('admin.devices.edit', compact('device', 'categories'));
  }
}