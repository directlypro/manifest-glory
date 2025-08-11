<?php

namespace App\Livewire;

use Livewire\Component;

class Giving extends Component
{
    public $firstName = '';
    public $lastName = '';
    public $email = '';
    public $phone = '';
    public $address = '';
    public $city = '';
    public $postalCode = '';

    // Debit Order Details
    public $accountHolder = '';
    public $bankName = '';
    public $accountNumber = '';
    public $accountType = 'savings';
    public $branchCode = '';
    public $debitOrderDate = '1';

    // Partnership Tier
    public $selectedTier = '';
    public $customAmount = '';

    public $showThankYou = false;

    protected $rules = [
        'firstName' => 'required|min:2',
        'lastName' => 'required|min:2',
        'email' => 'required|email',
        'phone' => 'required',
        'address' => 'required',
        'city' => 'required',
        'postalCode' => 'required',
        'accountHolder' => 'required',
        'bankName' => 'required',
        'accountNumber' => 'required|numeric',
        'accountType' => 'required',
        'branchCode' => 'required',
        'debitOrderDate' => 'required',
        'selectedTier' => 'required',
    ];

    protected $messages = [
        'firstName.required' => 'Please enter your first name.',
        'lastName.required' => 'Please enter your last name.',
        'email.required' => 'Please enter your email address.',
        'email.email' => 'Please enter a valid email address.',
        'selectedTier.required' => 'Please select a partnership tier.',
    ];

    public function selectTier($tier)
    {
        $this->selectedTier = $tier;
        if ($tier !== 'custom') {
            $this->customAmount = '';
        }
    }

    public function submitPartnership()
    {
        
    }

    public function render()
    {
        return view('livewire.giving');
    }
}
