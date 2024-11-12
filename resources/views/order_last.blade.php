<!-- resources/views/order-success.blade.php -->
<x-app-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-lg text-center">
            <h1 class="text-3xl font-semibold text-green-600 mb-4">Order Successful!</h1>
            <p class="text-gray-700 mb-6">Thank you for your order. Your order ID is:</p>
            <p class="text-2xl font-semibold text-indigo-700">{{ session('orderID') }}</p>

            <div class="text-center">
            <a href="{{ route('details2', ['id' => $user->id]) }}" class="btn btn-warning" style="padding: 10px 30px; font-size: 1.1rem;">
    <i class="bi bi-trash"></i> details
</a>

            </div>



            <div class="mt-8">
                <a href="{{ route('user-home') }}" class="text-indigo-600 hover:text-indigo-700 underline">
                    Return to Homepage
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
