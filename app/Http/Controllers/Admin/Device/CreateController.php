<?php

namespace App\Http\Controllers\Admin\Device;

use App\Models\Category;
use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CreateController extends Controller
{
  public function __invoke()
  {
    $categories = Category::all();

    return view('admin.devices.create', compact('categories'));
  }
}