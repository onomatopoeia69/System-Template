<?php

namespace App\Livewire\User;

use App\Models\ChildProfile;
use App\Models\NfcScan;
use App\Models\NfcTag;
use Livewire\Attributes\On;
use Livewire\Component;

class ChildDashboard extends Component
{
   
    public int $totalChildren = 0;
    public int $activeTags = 0;
    public int $lostChildren = 0;
    public int $totalScans = 0;

    #[On('child-added')]
    #[On('child-deleted')]
    #[On('lost-mode-updated')]
    public function refreshDashboard()
    {
        $this->loadStats();
    }

    public function mount()
    {
        $this->loadStats();
    }

    private function loadStats()
    {
        $this->totalChildren = ChildProfile::count();

        $this->activeTags = NfcTag::where('status', true)->count();

        $this->lostChildren = ChildProfile::where(
            'lost_mode',
            true
        )->count();

        $this->totalScans = NfcScan::count();

         $this->dispatch('init-lucide');
    }

    public function render()
    {
        return view('livewire.user.child-dashboard');
    }
}
