<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'formClose' => 'formCloseHandler',
        'productStored' => 'productStoredHandler',
        'productUpdated' => 'productUpdatedHandler'
    ];

    // Properti
    public $search = '';
    public $paginate = 10;
    public $formVisible;
    public $formUpdate = false;

    public function render()
    {

        return view('livewire.product.index', [
            'products' => Product::orderBy('id', 'desc')->where('title', 'LIKE', '%' . $this->search . '%')->paginate($this->paginate)
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function formCloseHandler()
    {
        $this->formVisible = false;
        $this->formUpdate = false;
    }

    public function productStoredHandler()
    {
        $this->formVisible = false;
        session()->flash('message', 'Your product was stored');
    }

    public function editProduct($productId)
    {
        $this->formUpdate = true;
        $this->formVisible = true;
        $product = Product::find($productId);
        $this->emit('editProduct', $product);
    }
}
