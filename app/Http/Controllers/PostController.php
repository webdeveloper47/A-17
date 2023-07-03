<?php

use App\Models\Post;

class PostController extends Controller
{
    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/posts')->with('success', 'Post deleted successfully.');
    }
}
