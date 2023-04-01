<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
	public function __invoke(User $user)
	{
		$data = request()->validate([
			'name' => 'string',
			'last_name' => 'string',
			'email' => 'string',
			'password' => 'string',
		]);

		$user->update($data);

		return to_route('users.show', $user->id);
	}
}