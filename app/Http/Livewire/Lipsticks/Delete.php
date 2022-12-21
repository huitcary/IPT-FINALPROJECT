<?php

namespace App\Http\Livewire\Lipsticks;

use App\Events\UserLog;
use Livewire\Component;
use App\Models\Lipstick;
class Delete extends Component
{

    public $lipstickId;
    public function getLipstickProperty() {
        return Lipstick::select('id', 'brand_name', 'type', 'price', 'shades')
            ->find($this->lipstickId);
    }

    public function delete() {
        $this->lipstick->delete();

        $log_entry = 'Delete Lipstick: "' .$this->lipstick->brand_name . '"with an ID: ' . $this->lipstick->id;
        event(new UserLog($log_entry));

        return redirect('/lipstick')->with('message', 'Deleted Successfully');
    }

    public function back() {
        return redirect('/lipstick');
    }
    public function render()
    {
        return view('livewire.lipsticks.delete');
    }
}
