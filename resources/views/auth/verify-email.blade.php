<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <!--Header start-->
             
            <header>
                <nav class="navbar p-3 navbar-expand-lg">
                    <a class="navbar-brand" href="{{'/'}}">
                        <img src="../img/headLogo.png" class="img-fluid">
                    </a>
                </nav>
            </header>
    <!--Header start-->

          
        </x-slot>
        @include('user.css')
    <div class="mb-4 text-sm text-gray-600">
             
        <!--Main start-->
        <main class="mt-4">
             
                <form action="verifyMobile.html" class="ms-auto px-md-3 text-center text-md-start px-lg-0 ps-lg-4">
                    <center> 
                    <h2>
                        Verified Your
                        <p>Email Address</p>
                    </h2>
                    </center>
        
                    <!-- <p>verify your email address</p> -->
        
                    
                </form>
            
        </main>
     
    <!--Main end-->
    </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between"  >
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                

                <div>
                    <x-jet-button type="submit">
                        {{ __('Resend Verification Email') }}
                    </x-jet-button>
                </div>
                 

                <p class="d-inline-block py-2">
                            Already have an account? 
                            <a class="text-decoration-none" href="{{ route('login') }}">Sign in</a>
                        </p>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
         
        @include('user.script')
    </x-jet-authentication-card>
</x-guest-layout>
