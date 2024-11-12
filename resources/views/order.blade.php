<x-app-layout>

@foreach($userdetails as $user)
    <div class="card mb-5 shadow-lg" style="border-radius: 15px; overflow: hidden;">
        <!-- Card Header -->
        <div class="card-header bg-primary text-white text-center" style="font-size: 1.25rem; font-weight: 600;">
            Featured
        </div>

        <!-- Card Body -->
        <div class="card-body">
            <!-- Title -->
            <h5 class="card-title mb-4 text-center" style="font-size: 1.5rem; font-weight: bold; color: #e70a60;">
                {{ $user->name }}
            </h5>

            <!-- User Details -->
            <p class="card-text" style="font-size: 1.1rem;">
                <strong>Name: </strong>{{ $user->name }}<br>
                <strong>Rate: </strong>{{ $user->rate }}<br>
                <strong>Colors: </strong>{{ $user->colors }}<br>
                <strong>Size: </strong>{{ $user->size }}<br>
                <strong>iD: </strong>{{ $user->id }}<br>

                @if($user->image)
                    <!-- Image Display -->
                    <div class="mb-3 text-center">
                        <strong>Image:</strong><br>
                        <img src="{{ asset($user->image) }}" alt="Product Image" class="img-fluid rounded shadow-sm mt-2"
                             style="max-width: 250px; max-height: 150px;">
                    </div>
                @else
                    <!-- No Image Placeholder -->
                    <p class="text-muted text-center">No image uploaded.</p>
                @endif
            </p>

            <!-- Action Buttons -->
            <div class="text-center">
            <a href="{{ route('order.add',$user->id) }}" class="btn btn-warning" style="padding: 10px 30px; font-size: 1.1rem;">
    <i class="bi bi-trash"></i> BUY
</a>
          <!-- Modify the "Wishlist" button link -->
          <a href="{{ route('wishlist.add', $user->id) }}" class="btn btn-warning" style="padding: 10px 30px; font-size: 1.1rem;">
    <i class="bi bi-heart"></i> WISHLIST
</a>


            </div>
        </div>
    </div>
@endforeach

</x-app-layout>