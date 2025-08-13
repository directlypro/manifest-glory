<div class="min-h-screen bg-gradient-to-r from-amber-100 to-red-100 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                Become a Partnership Partner
            </h1>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                Join us in making a difference through your faithful partnership. Your contribution helps us spread the Gospel and serve our community.
            </p>
        </div>

        @if($showThankYou)
        <div class="bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-lg mb-8">
            <p class="font-bold text-lg">Thank You!</p>
            <p>Your partnership registration has been received. We will contact you shortly to confirm your details.</p>
        </div>
        @endif

        <!-- Partnership Tiers Section -->
        <div class="mb-12">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">Select Your Partnership Level</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Platinum Tier -->
                <div wire:click="selectTier('platinum')"
                     class="cursor-pointer transform transition-all duration-300 hover:scale-105 {{ $selectedTier === 'platinum' ? 'ring-4 ring-amber-500' : '' }}">
                    <div class="bg-white rounded-xl shadow-lg p-6 h-full flex flex-col">
                        <div class="bg-gradient-to-r from-gray-700 to-gray-900 text-white rounded-lg p-4 mb-4">
                            <h3 class="text-2xl font-bold">PLATINUM</h3>
                            <p class="text-lg mt-1">Partner</p>
                        </div>
                        <p class="text-3xl font-bold text-gray-800 mb-2">R10,000+</p>
                        <p class="text-gray-600">per month</p>
                        <div class="mt-auto pt-4">
                            <div class="flex items-center text-amber-500">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <span class="font-semibold">Premium Partner</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Diamond Tier -->
                <div wire:click="selectTier('diamond')"
                     class="cursor-pointer transform transition-all duration-300 hover:scale-105 {{ $selectedTier === 'diamond' ? 'ring-4 ring-amber-500' : '' }}">
                    <div class="bg-white rounded-xl shadow-lg p-6 h-full flex flex-col">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-lg p-4 mb-4">
                            <h3 class="text-2xl font-bold">DIAMOND</h3>
                            <p class="text-lg mt-1">Partner</p>
                        </div>
                        <p class="text-3xl font-bold text-gray-800 mb-2">R5,000 - R10,000</p>
                        <p class="text-gray-600">per month</p>
                        <div class="mt-auto pt-4">
                            <div class="flex items-center text-amber-500">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <span class="font-semibold">Elite Partner</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gold Tier -->
                <div wire:click="selectTier('gold')"
                     class="cursor-pointer transform transition-all duration-300 hover:scale-105 {{ $selectedTier === 'gold' ? 'ring-4 ring-amber-500' : '' }}">
                    <div class="bg-white rounded-xl shadow-lg p-6 h-full flex flex-col">
                        <div class="bg-gradient-to-r from-amber-500 to-yellow-500 text-white rounded-lg p-4 mb-4">
                            <h3 class="text-2xl font-bold">GOLD</h3>
                            <p class="text-lg mt-1">Partner</p>
                        </div>
                        <p class="text-3xl font-bold text-gray-800 mb-2">R2,500 - R5,000</p>
                        <p class="text-gray-600">per month</p>
                        <div class="mt-auto pt-4">
                            <div class="flex items-center text-amber-500">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <span class="font-semibold">Committed Partner</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Silver Tier -->
                <div wire:click="selectTier('silver')"
                     class="cursor-pointer transform transition-all duration-300 hover:scale-105 {{ $selectedTier === 'silver' ? 'ring-4 ring-amber-500' : '' }}">
                    <div class="bg-white rounded-xl shadow-lg p-6 h-full flex flex-col">
                        <div class="bg-gradient-to-r from-gray-400 to-gray-600 text-white rounded-lg p-4 mb-4">
                            <h3 class="text-2xl font-bold">SILVER</h3>
                            <p class="text-lg mt-1">Partner</p>
                        </div>
                        <p class="text-3xl font-bold text-gray-800 mb-2">R1,000</p>
                        <p class="text-gray-600">per month</p>
                        <div class="mt-auto pt-4">
                            <div class="flex items-center text-amber-500">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <span class="font-semibold">Faithful Partner</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bronze Tier -->
                <div wire:click="selectTier('bronze')"
                     class="cursor-pointer transform transition-all duration-300 hover:scale-105 {{ $selectedTier === 'bronze' ? 'ring-4 ring-amber-500' : '' }}">
                    <div class="bg-white rounded-xl shadow-lg p-6 h-full flex flex-col">
                        <div class="bg-gradient-to-r from-orange-600 to-orange-800 text-white rounded-lg p-4 mb-4">
                            <h3 class="text-2xl font-bold">BRONZE</h3>
                            <p class="text-lg mt-1">Partner</p>
                        </div>
                        <p class="text-3xl font-bold text-gray-800 mb-2">R500</p>
                        <p class="text-gray-600">per month</p>
                        <div class="mt-auto pt-4">
                            <div class="flex items-center text-amber-500">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <span class="font-semibold">Supporting Partner</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Custom Amount -->
                <div wire:click="selectTier('custom')"
                     class="cursor-pointer transform transition-all duration-300 hover:scale-105 {{ $selectedTier === 'custom' ? 'ring-4 ring-amber-500' : '' }}">
                    <div class="bg-white rounded-xl shadow-lg p-6 h-full flex flex-col">
                        <div class="bg-gradient-to-r from-amber-500 to-red-500 text-white rounded-lg p-4 mb-4">
                            <h3 class="text-2xl font-bold">CUSTOM</h3>
                            <p class="text-lg mt-1">Amount</p>
                        </div>
                        <p class="text-2xl font-bold text-gray-800 mb-2">Any Amount</p>
                        <p class="text-gray-600">per month</p>
                        @if($selectedTier === 'custom')
                        <div class="mt-4">
                            <input type="number"
                                   wire:model="customAmount"
                                   placeholder="Enter amount"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500">
                            @error('customAmount') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        @endif
                        <div class="mt-auto pt-4">
                            <div class="flex items-center text-amber-500">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <span class="font-semibold">Partner</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Partnership Form -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Partnership Registration Form</h2>

            <form wire:submit.prevent="submitPartnership">
                <!-- Personal Details Section -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                        <span class="bg-gradient-to-r from-amber-500 to-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3">1</span>
                        Personal Details
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">First Name *</label>
                            <input type="text"
                                   wire:model="firstName"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500">
                            @error('firstName') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Last Name *</label>
                            <input type="text"
                                   wire:model="lastName"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500">
                            @error('lastName') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Email Address *</label>
                            <input type="email"
                                   wire:model="email"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500">
                            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Phone Number *</label>
                            <input type="tel"
                                   wire:model="phone"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500">
                            @error('phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-gray-700 font-medium mb-2">Street Address *</label>
                            <input type="text"
                                   wire:model="address"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500">
                            @error('address') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-gray-700 font-medium mb-2">City *</label>
                            <input type="text"
                                   wire:model="city"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500">
                            @error('city') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Postal Code *</label>
                            <input type="text"
                                   wire:model="postalCode"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500">
                            @error('postalCode') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <!-- Debit Order Instructions Section -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                        <span class="bg-gradient-to-r from-amber-500 to-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3">2</span>
                        Debit Order Instructions
                    </h3>

                    <div class="bg-amber-50 border border-amber-200 rounded-lg p-4 mb-6">
                        <p class="text-sm text-gray-700">
                            By providing your banking details below, you authorize us to debit your account monthly for your selected partnership amount.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Account Holder Name *</label>
                            <input type="text"
                                   wire:model="accountHolder"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500">
                            @error('accountHolder') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Bank Name *</label>
                            <input type="text"
                                   wire:model="bankName"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500">
                            @error('bankName') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Account Number *</label>
                            <input type="text"
                                   wire:model="accountNumber"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500">
                            @error('accountNumber') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Account Type *</label>
                            <select wire:model="accountType"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500">
                                <option value="savings">Savings</option>
                                <option value="current">Current/Cheque</option>
                                <option value="transmission">Transmission</option>
                            </select>
                            @error('accountType') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Branch Code *</label>
                            <input type="text"
                                   wire:model="branchCode"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500">
                            @error('branchCode') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Debit Order Date *</label>
                            <select wire:model="debitOrderDate"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500">
                                @for ($i = 1; $i <= 31; $i++)
                                    <option value="{{ $i }}">{{ $i }}{{ $i == 1 ? 'st' : ($i == 2 ? 'nd' : ($i == 3 ? 'rd' : 'th')) }} of each month</option>
                                @endfor
                            </select>
                            @error('debitOrderDate') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-center">
                    <button type="submit"
                            class="bg-gradient-to-r from-amber-500 to-red-500 text-white font-bold px-8 py-3 rounded-lg hover:shadow-lg transform transition-all duration-300 hover:scale-105">
                        Submit Partnership Registration
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
