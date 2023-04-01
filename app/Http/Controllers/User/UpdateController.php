<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
	public function __invoke(User $user, UpdateRequest $request)
	{
		$data = $request->validated();

		$user->update($data);

		return to_route('users.show', $user->id);
	}
}