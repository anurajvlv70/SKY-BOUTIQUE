<x-guest-layout>
    <!-- Full-screen background with overlay -->
    <h1 class="text-center text-2xl font-semibold text-gray-700 mb-6">SKY BOUTIQUE</h1>
    <div class="max-h-screen flex items-center justify-center" style="background-image: url({{ asset('trip2.jpg') }}); background-size: cover; background-position: center;">
        <div class="bg-white bg-opacity-90 p-8 rounded-lg shadow-lg w-full max-w-md">
            <h1 class="text-center text-2xl font-semibold text-gray-700 mb-6">Payment Information</h1>
            
            <form method="POST" action="{{ route('payment') }}" class="space-y-6">
                @csrf
                
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <div class="relative">
                        <i class="fas fa-user absolute left-3 top-3 text-gray-400"></i>
                        <x-text-input id="name" class="block mt-1 w-full pl-10" type="text" name="name" :value="old('name')" required autofocus />
                    </div>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                
                <!-- Address -->
                <div>
                    <x-input-label for="address" :value="__('Address')" />
                    <div class="relative">
                        <i class="fas fa-home absolute left-3 top-3 text-gray-400"></i>
                        <x-text-input id="address" class="block mt-1 w-full pl-10" type="text" name="address" :value="old('address')" required />
                    </div>
                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                </div>

                <!-- Pin Code -->
                <div>
                    <x-input-label for="pin_code" :value="__('Pin Code')" />
                    <div class="relative">
                        <i class="fas fa-map-pin absolute left-3 top-3 text-gray-400"></i>
                        <x-text-input id="pin_code" class="block mt-1 w-full pl-10" type="text" name="pin_code" :value="old('pin_code')" required />
                    </div>
                    <x-input-error :messages="$errors->get('pin_code')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <div class="relative">
                        <i class="fas fa-envelope absolute left-3 top-3 text-gray-400"></i>
                        <x-text-input id="email" class="block mt-1 w-full pl-10" type="email" name="email" :value="old('email')" required />
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Phone Number -->
                <div>
                    <x-input-label for="phone" :value="__('Phone Number')" />
                    <div class="relative">
                        <i class="fas fa-phone absolute left-3 top-3 text-gray-400"></i>
                        <x-text-input id="phone" class="block mt-1 w-full pl-10" type="text" name="phone" :value="old('phone')" required />
                    </div>
                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                </div>

                <!-- Payment Type -->
                <div>
                    <x-input-label for="payment_type" :value="__('Payment Type')" />
                    <div class="space-y-2 mt-2">
                        <div>
                            <input type="checkbox" id="card" name="payment_type[]" value="card">
                            <label for="card" class="text-gray-700 ml-2">Card</label>
                        </div>
                        <div>
                            <input type="checkbox" id="online_payment" name="payment_type[]" value="online_payment">
                            <label for="online_payment" class="text-gray-700 ml-2">Online Payment</label>
                        </div>
                        <div>
                            <input type="checkbox" id="cod" name="payment_type[]" value="cod">
                            <label for="cod" class="text-gray-700 ml-2">Cash on Delivery (COD)</label>
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('payment_type')" class="mt-2" />
                </div>

                <!-- Submit Payment Button -->
                <a href="{{ route('order.add',$productId) }}" class="btn btn-warning" style="padding: 10px 30px; font-size: 1.1rem;">
    <i class="bi bi-heart"></i> SUBMIT
</a>
            </form>
        </div>
    </div>
</x-guest-layout>
