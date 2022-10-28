<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Pekerjaans extends Component
{
    use WithPagination;
    public $pekerjaans;
    public $tahun = null;

    public function render()
    {
        return view('livewire.pekerjaans',[
            'pekerjaan'=>Pekerjaan::orderBy('pekerjaan_id','asc')->get(),
            'pekerjaan'=>Pekerjaan::when($this->tahun, function($query){
                $query->where('tanggal', $this->tahun);
            })
        ]);
    }
}
