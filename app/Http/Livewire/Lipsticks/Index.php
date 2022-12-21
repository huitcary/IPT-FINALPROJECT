<?php

namespace App\Http\Livewire\Lipsticks;

use Livewire\Component;
use App\Models\Lipstick;
use Livewire\WithPagination;

class Index extends Component
{
    public $search, $shades='all';
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $lipstickId;
    public $brand_name;

    public function loadLipsticks() {
        $query = Lipstick::orderBy('brand_name')
                ->search($this->search);

        if($this->shades != 'all'){
            $query->where('shades', $this->shades);
        }

        $lipsticks= $query->paginate(4);

        return compact('lipsticks');
    }

    public function render()
    {
        return view('livewire.lipsticks.index', $this->loadLipsticks());
    }
}
