<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class StoreController extends Controller
{
	public function __invoke()
	{
		$data = request()->validate([
			'name' => 'required|string',
			'last_name' => 'required|string',
			'email' => 'required|string',
			'password' => 'required|string',
		]);

		User::create($data);

		return to_route('users.index');
	}
}