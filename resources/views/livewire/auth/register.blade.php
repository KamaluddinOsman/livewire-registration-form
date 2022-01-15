<form wire:submit.prevent="register">
    <div class="bg-grey-lighter min-h-screen flex flex-col">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                <h1 class="mb-8 text-3xl text-center">Sign up</h1>
                
                <input wire:model="name" type="text"
                    class="shadow appearance-none border @error('name') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    name="name" placeholder="Full Name" id="name" />
                @error('name') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                <input wire:model="email" type="text"
                    class="shadow appearance-none border @error('email') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    name="email" placeholder="Email" id="email" />
                @error('email') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                <input wire:model="password" type="password"
                    class="shadow appearance-none border @error('password') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    name="password" placeholder="Password" id="password" />
                @error('password') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                
                <input wire:model="passwordConfirmation" type="password"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    name="passwordConfirmation" placeholder="Confirm Password" id="passwordConfirmation" />
                    @error('passwordConfirmation') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline container">Create Account</button>
    
                {{-- <div class="text-center text-sm text-grey-dark mt-4">
                    By signing up, you agree to the 
                    <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                        Terms of Service
                    </a> and 
                    <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                        Privacy Policy
                    </a>
                </div> --}}
            </div>
    
            <div class="text-grey-dark mt-6">
                Already have an account? 
                <a class="no-underline border-b border-blue text-blue" href="/login">
                    Log in
                </a>.
            </div>
        </div>
    </div>
</form>