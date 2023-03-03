<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public $products, $category_id, $categories, $name, $price;
    public function render()
    {
        $this->categories = Category::pluck('name', 'id')->all();
        $this->products = Product::get();

        return view('livewire.products')->extends('layouts.app');
    }

    public function store()
    {
        $validatedDate = $this->validate(
            [
                'name' => 'required',
                'category_id' => 'required|numeric',
                'price' => 'required|numeric',
            ]
        );

        $payload = [
            'name' => $this->name,
            'price' => $this->price,
            'category_id' => $this->category_id
        ];

        Product::create($payload);

        $this->resetInputFields();

        session()->flash('message', 'Product has been created successfully.');
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->price = '';
        $this->category_id = '';
    }
}
