<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class StoreController extends Controller
{
	public function __invoke()
	{
		$data = request()->validate([
			'title' => 'required|string',
			'content' => 'required|string',
			'img' => 'string',
			'category_id' => 'numeric',
			'user_id' => 'numeric',
			'tags' => 'array'
		]);

		$tagsId = $data['tags'];
		unset($data['tags']);

		$post = Post::create($data);

		$post->tags()->attach($tagsId);

		return redirect()->route('posts.index');
	}
}