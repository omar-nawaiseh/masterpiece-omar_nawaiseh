<x-guest-layout>
    
        

        <x-jet-validation-errors class="mb-4" />
        
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <div class="container" id="container">
           
           <div class="form-container sign-in-container">
               <form method="POST" action="{{ route('login') }}">
               @csrf
                   <h1>Sign in</h1>
                   <div class="social-container">
                       <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                       <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                   </div>
                   <span>or use your account</span>
                   <div>
                   <x-jet-input id="email" placeholder="Email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                   </div>
                   <div class="mt-4">
                   <x-jet-input id="password" placeholder="Password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                   </div>
                   <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                    </div>
                   @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                   @endif
                   <button> {{ __('Log in') }}</button>
               </form>
           </div>
           <div class="overlay-container">
               <div class="overlay">
                   <div class="overlay-panel overlay-panel overlay-right">
                   
                       <h1>Hello, Friend!</h1>
                       <p>Enter your personal details and start journey with us</p>
                       <a  href="{{ route('register') }}">
                       <button class="ghost" >Sign Up</button>
                        </a>
                       
                   </div>
               </div>
           </div>
       </div>
     
</x-guest-layout>
