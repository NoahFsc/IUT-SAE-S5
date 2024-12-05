<div class="flex flex-col transition-transform transform cursor-pointer hover:scale-105">
    <img src="{{ $car->imageDocument->document_content }}" alt="Image" class="object-cover rounded-lg"
        style="width: 330px; height: 200px;">
    <div class="flex flex-col">
        <p class="font-medium">{{ $car->carModel->brand->brand_name . ' ' . $car->carModel->model_name }}</p>
        <div class="flex justify-between w-full" style="max-width: 330px;">
            <div class="flex items-center gap-1">
                <i class="text-gray-500 fa-regular fa-badge-check"></i>
                <p class="text-sm text-gray-500">{{ $car->user->first_name . ' ' . $car->user->last_name }}</p>
            </div>
            <p class="font-semibold">{{ number_format($car->selling_price, 2) }}€</p>
        </div>
    </div>
</div>