@extends('layout')

@section('titre', 'Dashboard')

@section('contenu')

<div class="flex flex-grow gap-16">
    
    <livewire:dashboard-sidebar />

    <div>
        Contenu signalements
    </div>
</div>
    
@endsection