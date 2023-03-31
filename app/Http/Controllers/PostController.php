<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
	public function index()
	{
		$posts = Post::all();

		return view('posts.index', compact('posts'));
	}
	public function show(Post $post)
	{
		$category = Category::find($post->category_id);

		return view('posts.show', compact('post', 'category'));
	}

	public function create()
	{
		$categories = Category::all();
		$tags = Tag::all();

		return view('posts.create', compact('categories', 'tags'));
	}

	public function store()
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
	public function edit(Post $post)
	{
		$categories = Category::all();
		$tags = Tag::all();

		return view('posts.edit', compact('post', 'categories', 'tags'));
	}

	public function update(Post $post)
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

	public function destroy(Post $post)
	{
		$post->delete();
		return redirect()->route('posts.index');
	}
}