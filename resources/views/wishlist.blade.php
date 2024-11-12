<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Your Wishlist') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h3 class="text-center font-bold text-lg mb-4">Wishlist Items</h3>

                @if($wishlistItems->isEmpty())
                    <p class="text-center text-muted">Your wishlist is empty.</p>
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Rate</th>
                                <th>Size</th>
                                <th>Colors</th>
                                <th>Actions</th> <!-- New column for buttons -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($wishlistItems as $item)
                                <tr>
                                    <td>{{ $item->product->name }}</td>
                                    <td>{{ $item->product->rate }}</td>
                                    <td>{{ $item->product->size }}</td>
                                    <td>{{ $item->product->colors }}</td>
                                    <td>
                                        <!-- View Product Button -->
                                        <a href="{{ route('order') }}" class="btn btn-warning" style="padding: 10px 30px; font-size: 1.1rem;">
    <i class="bi bi-trash"></i> VIEW
</a>

                                        <!-- Buy Button -->
                                        <a href="{{ route('buy') }}" class="btn btn-danger" style="padding: 10px 30px; font-size: 1.1rem;">
    <i class="bi bi-trash"></i> BUY
</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>

