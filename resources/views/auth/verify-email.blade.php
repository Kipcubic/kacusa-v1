<x-guest-layout>
    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('Resend Verification Email') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Logout') }}
                </button>
            </form>
        </div>
    </x-jet-authentication-card> --}}

      <!-- Begin page -->
      <div class="accountbg"></div>
      <div class="wrapper-page">
          <div class="ex-page-content text-center">
            <div class="text-center m-t-20 m-b-30">
                <a href="index.html" class="logo logo-admin"><img src="{{ asset('assets/images/logo-dark.png')}}" alt="" height="34"></a>
        </div>
              <h3 class="text-white">Verify Email</h3>
              <h4 class="text-white">Thanks for your registration! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.</h4><br>
              <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <button type="submit"  class="btn btn-primary waves-effect waves-light">
                        {{ __('Resend Verification Email') }}
                    </button>
                </div>
            </form>
            <hr>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="btn-sm btn-danger">
                    {{ __('Logout') }}
                </button>
            </form>
              {{-- <a class="btn btn-primary waves-effect waves-light" href="index.html">Back to Dashboard</a> --}}
          </div>
      </div>

</x-guest-layout>
