<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
	public function __invoke(StoreRequest $request)
	{
		$data = $request->validated();

		User::create($data);

		return to_route('users.index');
	}
}