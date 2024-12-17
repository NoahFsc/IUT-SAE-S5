@extends('layout')

@section('titre', 'Créer une annonce')

@section('contenu')

<div class="mx-8 md:w-2/4 md:mx-auto">
    <div class="flex items-center justify-between mb-6">
        <a href="{{ route('vendre.index') }}" class="text-gray-500 hover:text-gray-700">&larr; Retour à la page
            précédente</a>
    </div>
    <div class="flex justify-center text-3xl font-semibold text-gray-800 mb-10">Poster une annonce</div>
    <div class="mb-6 relative">
        <div class="absolute inset-0 flex items-center">
            <div class="w-full h-1 bg-white mt-8 mr-8 ml-20"></div>
        </div>
        <div class="relative flex items-center justify-between">
            <div class="flex flex-col items-center">
                <div class="text-gray-700 mb-2">Informations Générales</div>
                <div class="w-8 h-8 border-4 bg-white border-info-500 rounded-full"></div>
            </div>
            <div class="flex flex-col items-center">
                <div class="text-gray-500 mb-2">Documents</div>
                <div class="w-8 h-8 bg-white rounded-full"></div>
            </div>
            <div class="flex flex-col items-center">
                <div class="text-gray-500 mb-2">Confirmation</div>
                <div class="w-8 h-8 bg-white rounded-full"></div>
            </div>
        </div>
    </div>
    <form>
        @csrf
        <div class="flex justify-start text-2xl font-semibold text-gray-800 mb-6">Détails du véhicule</div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
            <div>
                <livewire:create-search />
                <label class="block text-gray-500 font-medium mt-4 mb-2">Type de Véhicule</label>
                <select class="w-full border-gray-300 rounded-md focus:ring focus:ring-primary-500 text-gray-500">
                    <option>Sélectionner un type</option>
                </select>

                <label class="block text-gray-500 font-medium mt-4 mb-2">Contrôle Technique</label>
                <select class="w-full border-gray-300 rounded-md focus:ring focus:ring-primary-500 text-gray-500">
                    <option value="" disabled selected>Sélectionner un état</option>
                    <option>À Jour</option>
                    <option>À Faire</option>
                </select>
            </div>
            <div>
                <label class="block text-gray-500 font-medium mb-2">Année</label>
                <input type="number" class="w-full border-gray-300 rounded-md focus:ring focus:ring-primary-500"
                    placeholder="Entrez l'année de mise en circulation">
                <label class="block text-gray-500 font-medium mt-4 mb-2">Provenance</label>
                <input type="text" class="w-full border-gray-300 rounded-md focus:ring focus:ring-primary-500"
                    placeholder="Entrez la provenance">
                <label class="block text-gray-500 font-medium mt-4 mb-2">Kilométrage</label>
                <input type="number" class="w-full border-gray-300 rounded-md focus:ring focus:ring-primary-500"
                    placeholder="Entrez le kilométrage">
                <label class="block text-gray-500 font-medium mt-4 mb-2">Nombres de portes</label>
                <select
                    class="w-full border-gray-300 text-gray-500 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-300">
                    <option value="" disabled selected>Sélectionnez un niveau</option>
                    @foreach ($nbdoors as $nbdoor)
                    <option value="{{ $nbdoor->id }}">{{$nbdoor->nb_doors}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <div class="text-2xl font-semibold text-gray-800 mb-6">Moteur</div>
                <label class="block text-gray-500 font-medium mb-2">Type de carburant</label>
                <select
                    class="w-full border-gray-300 text-gray-500 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-300">
                    <option value="" disabled selected>Sélectionner un type de carburant</option>
                    @foreach ($fueltypes as $fueltype)
                    <option value="{{ $fueltype->id }}">{{$fueltype->nom}}</option>
                    @endforeach
                </select>

                <label class="block text-gray-500 font-medium mt-4 mb-2">Puissance Fiscale</label>
                <input type="number"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-300"
                    placeholder="Entrez la puissance fiscale">

                <label class="block text-gray-500 font-medium mt-4 mb-2">Puissance DIN</label>
                <input type="number"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-300"
                    placeholder="Entrez la puissance DIN">
            </div>
            <div>
                <div class="text-2xl font-semibold text-gray-800 mb-6">Pollution</div>
                <label class="block text-gray-500 font-medium mb-2">Consommation</label>
                <input type="number"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-300"
                    placeholder="Entrez la consommation (/100km)">

                <label class="block text-gray-500 font-medium mt-4 mb-2">Crit'Air</label>
                <select
                    class="w-full border-gray-300 text-gray-500 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-300">
                    <option value="" disabled selected>Sélectionnez un niveau</option>
                    @foreach ($critairs as $critair)
                    <option value="{{ $critair->id }}">{{$critair->nom}}</option>
                    @endforeach
                </select>

                <label class="block text-gray-500 font-medium mt-4 mb-2">Émission de CO2</label>
                <input type="number"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-300"
                    placeholder="Entrez l'émission de CO2">
            </div>
        </div>

        <!-- Equipment -->
        <div class="mt-8">
            <label class="block text-gray-500 font-medium mb-2">Équipement</label>
            <select class="w-full border-gray-300 rounded-md focus:ring focus:ring-primary-500">
                <option>Choisir un équipement</option>
            </select>
        </div>

        <!-- Buttons -->
        <div class="flex justify-center mt-8 gap-4">
            <button type="button"
                class="px-6 py-2 border border-gray-300 text-gray-500 rounded-md hover:bg-gray-100">Étape
                précédente</button>
            <button type="submit" class="px-6 py-2 bg-primary-500 text-white rounded-md hover:bg-primary-400">Étape
                suivante</button>
        </div>
    </form>
</div>

@endsection