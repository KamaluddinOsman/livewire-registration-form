<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $passwordConfirmation;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        'passwordConfirmation' => 'required|min:6|same:password'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function register(){
        if ($this->validate()){
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);
            return redirect('/');
        }
    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}
