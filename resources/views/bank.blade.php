<x-guest-layout>
    <!-- Full-screen background with overlay -->
    <div class="relative min-h-screen flex items-center justify-center" style="background-image: url({{ asset('trip2.jpg') }}); background-size: cover; background-position: center;">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black opacity-50"></div>
        
        <!-- Form Container -->
        <div class="relative bg-white bg-opacity-90 p-8 rounded-lg shadow-lg w-full max-w-md">
            <!-- Optional SVG Icon -->
            <div class="flex justify-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-bank text-indigo-600" viewBox="0 0 16 16">
                    <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.5.5 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89zM3.777 3h8.447L8 1zM2 6v7h1V6zm2 0v7h2.5V6zm3.5 0v7h1V6zm2 0v7H12V6zM13 6v7h1V6zm2-1V4H1v1zm-.39 9H1.39l-.25 1h13.72z"/>
                </svg>
            </div>

            <h1 class="text-center text-2xl font-semibold text-gray-700 mb-6">ADD BANK DETAILS</h1>
            
            <form method="POST" action="{{ route('bank-store') }}" class="space-y-6">
                @csrf
                
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <div class="relative">
                        <i class="fas fa-user absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        <x-text-input id="name" class="block mt-1 w-full pl-10" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Enter your full name"/>
                    </div>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                
                <!-- Email Address -->
              

                <!-- Account Number -->
                <div>
                    <x-input-label for="accno" :value="__('Account Number')" />
                    <div class="relative">
                        <i class="fas fa-credit-card absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        <x-text-input id="accno" class="block mt-1 w-full pl-10" type="text" name="accno" :value="old('accno')" required autocomplete="account-number" placeholder="Enter your account number" pattern="\d{10,20}" title="Account number should be between 10 to 20 digits"/>
                    </div>
                    <x-input-error :messages="$errors->get('accno')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="card" :value="__('Card Number')" />
                    <div class="relative">
                        <i class="fas fa-lock absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        <x-text-input id="card" class="block mt-1 w-full pl-10" type="password" name="card" :value="old('card')" required autocomplete="off" placeholder="Enter card number" pattern="\d{10}" title="number should be 10 digits"/>
                    </div>
                    <x-input-error :messages="$errors->get('card')" class="mt-2" />
                </div>

                <!-- CVV Code -->
                <div>
                    <x-input-label for="cvv" :value="__('CVV Code')" />
                    <div class="relative">
                        <i class="fas fa-lock absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        <x-text-input id="cvv" class="block mt-1 w-full pl-10" type="password" name="cvv" :value="old('cvv')" required autocomplete="off" placeholder="Enter CVV" pattern="\d{3,4}" title="CVV should be 3 or 4 digits"/>
                    </div>
                    <x-input-error :messages="$errors->get('cvv')" class="mt-2" />
                </div>

                <!-- Expiry Date -->
                <div>
                    <x-input-label for="expiry_date" :value="__('Expiry Date')" />
                    <div class="relative">
                        <i class="fas fa-calendar-alt absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        <x-text-input id="date" class="block mt-1 w-full pl-10" type="month" name="date" :value="old('date')" required autocomplete="date" />
                    </div>
                    <x-input-error :messages="$errors->get('expiry_date')" class="mt-2" />
                </div>

                <!-- Submit Button and Link -->
                <div class="flex items-center justify-between mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <div class="text-center">
                    <a class="btn btn-danger me-2" href="{{ route('submit') }}" style="padding: 10px 30px; font-size: 1.1rem;">
                    <i class="bi bi-pencil"></i> SUBMIT
                </a>
            </div>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Font Awesome for Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</x-guest-layout>
