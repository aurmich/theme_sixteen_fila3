<?php

use function Livewire\Volt\{state};

state(['count' => 0]);

$increment = fn () => $this->count++;

?>

<x-layouts.app>
    <h1>
        Counter
    </h1>

    @volt('aaa')
        <div>
            <h1>{{ $count }}</h1>
            <button wire:click="increment">+</button>
        </div>
    @endvolt
</x-layouts.app>
