<x-guest-layout>
    {{-- <x-slot name="logo">
        <x-jet-authentication-card-logo />
    </x-slot> --}}

   

    {{-- <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <div class="mt-4">
            <x-jet-label for="password" value="{{ __('Password') }}" />
            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="flex items-center">
                <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-jet-button class="ml-4">
                {{ __('Login') }}
            </x-jet-button>
        </div>
    </form> --}}
      <div class="accountbg"></div>
        <div class="wrapper-page">
            <div class="card card-pages">

                <div class="card-body">
                    <div class="text-center m-t-20 m-b-30">
                            <a href="index.html" class="logo logo-admin"><img src="assets/images/logo-dark.png" alt="" height="34"></a>
                    </div>
                    <h4 class="text-muted text-center m-t-0"><b>Registration</b></h4>

                    <form class="form-horizontal m-t-20" action=" {{route('register')}} " method="POST">
                        @csrf

                        <div class="form-group">
                            <div class="col-12">
                                <input class="form-control" type="text" required="" placeholder="First Name" name="fname">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-12">
                                <input class="form-control" type="text" required="" placeholder="Last Name" name="lname" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-12">
                                <input class="form-control" type="email" required="" placeholder="Email" name="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <input class="form-control" type="text" required="" placeholder="Username">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <input class="form-control" type="password" required="" placeholder="Password" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-12">
                                <input class="form-control" type="password" required="" placeholder="Password" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox-signup" type="checkbox" checked="checked">
                                    <label for="checkbox-signup">
                                        I accept <a href="#">Terms and Conditions</a>
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group text-center m-t-40">
                            <div class="col-12">
                                <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Register</button>
                            </div>
                        </div>

                        <div class="form-group m-t-30 m-b-0">
                            <div class="col-sm-12 text-center">
                                <a href="/login" class="text-muted">Already have account?</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
</x-guest-layout>
