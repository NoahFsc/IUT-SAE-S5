@extends('layout')

@section('titre', 'Accueil')

@section('contenu')

<div class="mx-8 md:w-2/3 md:mx-auto">
  <!-- Bienvenue -->
  <div class="mx-auto md:mb-16">
    <h1 class="text-4xl font-medium md:text-6xl">Votre nouvelle voiture, sans intermédiaire.</h1>
    <p class="mt-4 text-lg md:text-xl md:w-1/2 opacity-70">
      Explorez des centaines d'offres de particuliers à particuliers, et trouvez le véhicule qui vous correspond, en toute simplicité.
    </p>
  </div>

  <!-- Barre de recherche -->
  <livewire:home-search />

  <!-- Statistiques -->
  <section class="flex flex-col items-center gap-4 py-8 mx-auto stats md:flex-row md:gap-4 md:mt-32">
    <div class="flex flex-col items-center md:flex-row md:w-1/3">
      <h2 class="mr-4 text-3xl font-bold md:text-4xl">5.000+</h2>
      <p class="text-lg opacity-50 md:text-2xl">Véhicules mis en vente tous les mois</p>
    </div>
    <div class="flex flex-col items-center md:flex-row md:w-1/3">
      <h2 class="mr-4 text-3xl font-bold md:text-4xl">98%</h2>
      <p class="text-lg opacity-50 md:text-2xl">Satisfaction de nos clients</p>
    </div>
    <div class="flex flex-col items-center md:flex-row md:w-1/3">
      <h2 class="mr-4 text-3xl font-bold md:text-4xl">4.3</h2>
      <p class="text-lg opacity-50 md:text-2xl">Note moyenne sur 5 de nos services</p>
    </div>
  </section>

  <!-- Catégories populaires -->
  <section class="py-8 mx-auto md:mt-32">
    <div class="flex justify-between">
      <h2 class="mb-4 text-2xl font-bold">Catégories populaires</h2>
      <a href="{{ route('acheter.index') }}" class="hidden md:block">Voir tout</a>
    </div>
    <div class="grid gap-4 grid-cols-auto-fit-card">
      @foreach ($sells->take(8) as $car)
      @livewire('selling-card', ['car' => $car])
      @endforeach
    </div>
    @if (count($sells) == 0)
    <p class="opacity-50">Aucune vente pour le moment.</p>
    @endif
  </section>

  <!-- Enchères en cours -->
  <section class="py-8 mx-auto md:mt-16">
    <div class="flex justify-between">
      <h2 class="mb-4 text-2xl font-bold">Enchères en cours</h2>
      <a href="{{ route('home') }}" class="hidden md:block">Voir tout</a>
    </div>
    <div class="grid gap-4 grid-cols-auto-fit-card">
      @foreach ($auctions->take(4) as $car)
      @livewire('auction-card', ['car' => $car])
      @endforeach
    </div>
    @if (count($auctions) == 0)
    <p class="opacity-50">Aucune enchère en cours pour le moment.</p>
    @endif
  </section>

  <!-- Avis -->
  <section class="py-8 mx-auto md:mt-16">
    <h2 class="mb-4 text-2xl font-bold">Ce que nos clients disent de nous...</h2>
    <div class="grid gap-6 grid-cols-auto-fit-card">
      @foreach ($reviews->take(4) as $review)
      @livewire('review-card', ['review' => $review])
      @endforeach
    </div>
    @if (count($reviews) == 0)
    <p class="opacity-50">Aucun avis pour le moment.</p>
    @endif
  </section>
</div>
</div>

@endsection