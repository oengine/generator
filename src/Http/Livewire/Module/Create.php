<?php

namespace OEngine\Generator\Http\Livewire\Module;

use Illuminate\Support\Facades\Artisan;
use OEngine\Core\Livewire\Modal;

class Create extends Modal
{
    public $module_name='';
    public function mount()
    {
        $this->setTitle(__("generator::module.title"));
        $this->modal_size = Modal::Small;
    }
    public function DoWork(){
        $this->hideModal();
        Artisan::call('module:make ' . $this->module_name);
        $this->refreshData(['module'=>'module']);
    }
    public function render()
    {
        return $this->viewModal('generator::module.create');
    }
}
