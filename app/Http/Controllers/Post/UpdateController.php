<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class UpdateController extends Controller
{
	public function __invoke(Post $post)
	{
		$data = request()->validate([
			'title' => 'required|string',
			'content' => 'required|string',
			'img' => 'string',
			'category_id' => 'numeric',
			'tags' => 'array'
		]);

		$tagsId = $data['tags'];
		unset($data['tags']);

		$post->update($data);
		$post->tags()->sync($tagsId);

		return redirect()->route('posts.show', $post->id);
	}
}