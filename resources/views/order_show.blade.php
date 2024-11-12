<!-- resources/views/product/show.blade.php -->
<x-app-layout>
    <div class="card mb-5 shadow-lg" style="border-radius: 15px; overflow: hidden;">
        <div class="card-header bg-primary text-white text-center" style="font-size: 1.25rem; font-weight: 600;">
            Product Details
        </div>

        <div class="card-body">
            <h5 class="card-title mb-4 text-center" style="font-size: 1.5rem; font-weight: bold; color: #e70a60;">
                {{ $user->name }}
            </h5>

            <p class="card-text" style="font-size: 1.1rem;">
                <strong>Name: </strong>{{ $user->name }}<br>
                <strong>Rate: </strong>{{ $user->rate }}<br>
                <strong>Colors: </strong>{{ $user->colors }}<br>
                <strong>Size: </strong>{{ $user->size }}<br>
            </p>

            @if($user->image)
                <div class="mb-3 text-center">
                    <strong>Image:</strong><br>
                    <img src="{{ asset($user->image) }}" alt="Product Image" class="img-fluid rounded shadow-sm mt-2"
                         style="max-width: 250px; max-height: 150px;">
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
