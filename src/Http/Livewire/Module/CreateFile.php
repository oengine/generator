<?php

namespace OEngine\Generator\Http\Livewire\Module;

use Illuminate\Support\Facades\Artisan;
use OEngine\Core\Livewire\Modal;

class CreateFile extends Modal
{
    public $module_name = '';
    public $file_name = '';
    public $file_type = 'command';
    public $file_option = '';
    public $array_type = [
        "command",
        "action",
        "table",
        "option",
        'livewire',
        "component",
        "component-view",
        "migration",
        "middleware",
        "model",
        "controller",
        "seed",
        "event",
        "factory",
        "job",
        "listener",
        "mail",
        "notification",
        "policy",
        "provider",
        "request",
        "resource",
        "provider",
        "rule"
    ];
    public function mount($module)
    {
        $this->module_name = $module;
        $this->setTitle('Create New Module:' . $module);
        $this->modal_size = Modal::ExtraLarge;
    }
    public function DoWork()
    {
        if (!$this->file_name) {
            $this->showMessage('Bạn chưa nhập tên file');
            return;
        }
        Artisan::call('module:make-' . $this->file_type . ' ' . $this->file_name . ' ' . $this->module_name . ' ' . $this->file_option);
        $this->refreshData(['module' => 'module']);
        $this->hideModal();
        $this->showMessage('Tạo file thành công');
    }
    public function render()
    {
        return $this->viewModal('generator::module.create-file');
    }
}
