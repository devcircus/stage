<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostsOverview extends Component
{
    use WithPagination;

    /** @var string */
    protected $paginationTheme = 'simple-tailwind';

    /**
     * Render the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $featured = Post::active()->orderBy('published_at', 'desc')->first();
        $posts = Post::active()->where('id', '!=', $featured->id)->orderBy('published_at', 'desc')->paginate(8);

        return view('livewire.posts-overview', [
            'featured' => $featured,
            'posts' => $posts,
            'page' => request()->input('page'),
        ]);
    }
}
