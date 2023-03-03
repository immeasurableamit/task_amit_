<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Discount;
use Livewire\Component;

class Categories extends Component
{
    public $category, $name, $start, $end, $percentage;

    public $inputs = [];
    public $i = 1;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs, $i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->start = '';
        $this->end = '';
        $this->percentage = '';

    }


    public function render()
    {
        $this->category = Category::with('discount')->get();
        return view('livewire.categories')->extends('layouts.app');
    }


    public function store()
    {
        $validatedDate = $this->validate(
            [
                'name' => 'required',
                'start.0' => 'required|numeric',
                'end.0' => 'required|numeric',
                'percentage.0' => 'required|numeric',
                'start.*' => 'required|numeric',
                'end.*' => 'required|numeric',
                'percentage.*' => 'required|numeric',
            ]
        );

        $category = Category::create(['name' => $this->name]);

        $payload = [];
        foreach ($this->start as $key => $value) {
            Discount::create([
                'start' => $this->start[$key],
                'end' => $this->end[$key],
                'percentage' => $this->percentage[$key],
                'category_id' => $category->id
            ]);
        }

        $this->inputs = [];

        $this->resetInputFields();

        session()->flash('message', 'Category has been created successfully.');
    }
}
