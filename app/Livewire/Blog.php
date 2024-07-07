<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;
use App\Models\Tag;

class Blog extends Component
{

    use WithPagination;

    public $categories;
    public $popularPosts;
    private $postsPerPage = 10;
    private $maxPopularPosts = 4;
    private $maxCategories = 3;
    public $tags;

    public function mount()
    {

        $this->popularPosts = Post::orderBy('views', 'desc')->limit($this->maxPopularPosts)->get();
        $this->categories = Category::withCount(['posts as posts_count'])
            ->orderBy('posts_count', 'desc')
            ->limit($this->maxCategories)
            ->get();
        $this->tags = Tag::all();
    }

    public function render()
    {

        $posts = Post::with(['category', 'user'])
            ->orderBy('published_at', 'desc')
            ->paginate($this->postsPerPage);
        return view('livewire.pages.blog.blog', [
            'posts' => $posts,
        ]);
    }
}
