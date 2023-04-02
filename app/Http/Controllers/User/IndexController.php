<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Filters\UserFilter;
use App\Http\Requests\User\FilterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  public function __invoke(FilterRequest $request)
  {
    $data = $request->validated();

    $filter = app()->make(UserFilter::class, ['queryParams' => $data]);

    $users = User::filter($filter)->paginate(10);

    return view('users.index', compact('users'));
  }
}