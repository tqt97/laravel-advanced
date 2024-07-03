<?php

namespace App\Http\View\Composers;

use App\Models\Todo;
use Illuminate\View\View;

class TodoComposer
{
    public function compose(View $view)
    {
        $view->with('todos', Todo::orderBy('title', 'desc')->get());
    }
}
