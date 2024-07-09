<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Category;

class BlogSingle extends Component
{

    private $maxPopularPosts = 4;
    private $maxCategories = 3;
    public $categories;
    public $post;
    public $popularPosts;
    public $nextPost;
    public $prevPost;




    public function mount($id)
    {

        $this->post =  Post::where("slug", $id)->with(['user', 'category'])->first();

        $this->popularPosts = Post::where('is_published', '=', '1')
            ->whereDate('published_at', '<', now())
            ->orderBy('views', 'desc')
            ->limit($this->maxPopularPosts)
            ->get();


        if ($this->post == null) {
            abort(404);
        }
        $this->categories = Category::withCount(['posts as posts_count'])
            ->orderBy('posts_count', 'desc')
            ->limit($this->maxCategories)
            ->get();


        $this->getNextAndPreviousPost();
    }

    private function getNextAndPreviousPost()
    {
        $this->nextPost = Post::where('id', '>', $this->post->id)
            ->where('is_published', '=', '1')
            ->whereDate('published_at', '<', now())
            ->first();

        $this->prevPost = Post::where('id', '<', $this->post->id)
            ->where('is_published', '=', '1')
            ->whereDate('published_at', '<', now())
            ->latest()
            ->first();
    }



    public function render()
    {

        return view('livewire.blog-single');
    }
}
