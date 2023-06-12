<?php

namespace App\Http\Livewire;

use App\Models\Document;
use Livewire\Component;
use Livewire\WithPagination;


class Documentsearch extends Component
{
    use WithPagination;

    public $search = '';
    protected $paginationTheme = 'bootstrap';
    protected $documents;
    public $count = 0;

    public function mount()
    {
        $this->documents =  Document::orderBy('created_at', 'desc')->paginate(15);
    }
    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        if ($this->search)
            $this->documents = Document::Search($this->search);
        else
            $this->documents =  Document::orderBy('created_at', 'desc')->paginate(3);
        return view('livewire.documentsearch', [
            'documents' => $this->documents
        ]);
    }
}
