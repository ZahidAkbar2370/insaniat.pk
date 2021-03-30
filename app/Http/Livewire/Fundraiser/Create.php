<?php

namespace App\Http\Livewire\Fundraiser;

use App\Models\Fundraiser;
use Livewire\Component;

class Create extends Component
{
    public string $title;

    public string $description;

    public string $required_amount;

    public string $remaining_amount;

    public string $phone;

    public string $whatsapp;

    public bool $verified;

    protected $rules = [
        'title' => 'required|min:8',
        'description' => 'required|min:100',
        'required_amount' => 'nullable|integer|present',
        'remaining_amount' => 'nullable|integer|present',
        'phone' => 'required|integer',
        'whatsapp' => 'nullable|integer|present',
        'verified' => 'boolean|present'
    ];

    public function submit()
    {
       // $validatedData =  $this->validate();

       // Fundraiser::create($validatedData);

        
    }
    
    public function render()
    {
        return view('livewire.fundraiser.create');
    }
}
