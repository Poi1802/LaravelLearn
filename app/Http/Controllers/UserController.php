<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function index()
	{
		$users = User::all();

		return view('users.index', compact('users'));
	}
	public function show(User $user)
	{
		return view('users.show', compact('user'));
	}
	public function create()
	{
		return view('users.create');
	}
	public function store()
	{
		$data = request()->validate([
			'name' => 'string',
			'last_name' => 'string',
			'email' => 'string',
			'password' => 'string',
		]);

		User::create($data);

		return redirect()->route('users.index');
	}

	public function edit(User $user)
	{
		return view('users.edit', compact('user'));
	}

	public function update(User $user)
	{
		$data = request()->validate([
			'name' => 'string',
			'last_name' => 'string',
			'email' => 'string',
			'password' => 'string',
		]);

		$user->update($data);

		return redirect()->route('users.show', $user->id);
	}

	public function destroy(User $user)
	{
		$user->delete();
		return redirect()->route('users.index');
	}
}