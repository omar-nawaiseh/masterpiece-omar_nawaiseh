<x-guest-layout>
    


    <div class="container" id="container">
            <div class="form-container sign-in-container">

            <x-jet-validation-errors class="mb-4" />
             <form method="POST" action="{{ route('password.email') }}">
              @csrf

              <h2>

                  @if (session('status'))
                  <div class="mb-4 font-medium text-sm text-green-600">
                  {{ session('status') }}
                  </div>
                  @endif

                  </h2>
                    <h2>
                         {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </h2>
                    
                    <div class="mt-4">
                        <x-jet-input id="email"  for="email" placeholder="Email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
                    <!--  Email   -->
                    <button>{{ __('Reset Password Link') }}</button>
             </form>
            </div>
            
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-right">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <a  href="{{ route('login') }}">
                        <button class="ghost" >Sign In</button>
                        </a>
                    </div>
                   
                </div>
            </div>
        </div>

</x-guest-layout>
