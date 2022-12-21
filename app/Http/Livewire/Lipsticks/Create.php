<?php

namespace App\Http\Livewire\Lipsticks;

use Livewire\Component;
use App\Models\Lipstick;
use App\Events\UserLog;

class Create extends Component
{
    public $brand_name, $type, $price, $shades;

    public function addLipstick() {
        $this->validate([
            'brand_name'             =>          ['required', 'string', 'max:255'],
            'type'            =>          ['required', 'string', 'max:255'],
            'price'                =>          ['required', 'string', 'max:255'],
            'shades'                =>          ['required', 'string', 'max:255'],
        ]);

        Lipstick::create([
            'brand_name'             =>      $this->brand_name,
            'type'            =>      $this->type,
            'price'                =>      $this->price,
            'shades'                =>      $this->shades,
        ]);

        $log_entry = 'Added Lipstick: "' .$this->brand_name;
        event(new UserLog($log_entry));

        return redirect('/lipstick')->with('message', $this->brand_name . 'Added Successfully');
    }

   


    public function render()
    {
        return view('livewire.lipsticks.create');
    }
}
