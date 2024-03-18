<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddNormalSystemAdminLivewire extends Component
{
    use WithFileUploads;

    public $password_confirmation, $password, $email, $name, $role_id = 1, $profile_image;

    public function render()
    {
        return view('livewire.add-normal-system-admin-livewire');
    }

    public function addAdmin()
    {

        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
            'profile_image' => 'required',
            'password_confirmation' => 'required',

        ]);

        $SuperAdmin = new User();

        $SuperAdmin->role_id = $this->role_id;

        $SuperAdmin->name = $this->name;

        $SuperAdmin->email = $this->email;

        $SuperAdmin->password = Hash::make($this->password);

        $profile_image = $this->profile_image->store('public/profile_images');

        $profile_image = explode('/', $profile_image);
        $profile_image = $profile_image[2];
        $SuperAdmin->profile_image = $profile_image;

        $SuperAdmin->save();

        $this->reset(['email', 'profile_image', 'name', 'password']);

        session()->flash('addAnAdmin', 'An admin is added successfully.');
    }
}
