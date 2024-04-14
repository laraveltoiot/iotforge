<?php

namespace App\Livewire\Devices;

use App\Models\Device;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;
use Livewire\WithPagination;

class DevicesIndex extends Component
{
    use WithPagination;

    protected $listeners = ['deviceCreated' => 'handleDeviceCreated'];

    public function handleDeviceCreated(): void
    {
        session()->flash('message', 'Device successfully added!');
        $this->render();
    }
    public function render(): Factory|Application|View|\Illuminate\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $devices = Device::with('user')->paginate(10);
        return view('livewire.devices.devices-index', ['devices' => $devices]);
    }
}
