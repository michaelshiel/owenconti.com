<?php

namespace App\View\Components;

use App\Models\Page;
use Illuminate\View\Component;

class ArticleMetadata extends Component
{
    public $article;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Page $article)
    {
        $this->article = $article;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.article-metadata');
    }
}
