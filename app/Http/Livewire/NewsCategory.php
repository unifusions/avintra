<?php

namespace App\Http\Livewire;

use App\Models\NewsCategory as ModelsNewsCategory;
use Livewire\Component;

class NewsCategory extends Component
{
    
    public function render()
    {
        return view('livewire.news-category',[
            'newscategories' => ModelsNewsCategory::paginate(15),
        ]);
    }
}
