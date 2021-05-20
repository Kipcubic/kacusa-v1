<x-guest-layout>
   
      <!-- Begin page -->
      <div class="accountbg"></div>
      <div class="wrapper-page">
          <div class="ex-page-content text-center">
            <div class="text-center m-t-20 m-b-30">
                <a href="index.html" class="logo logo-admin"><img src="{{ asset('assets/images/kacusa-logo.png')}}" alt="" height="34"></a>
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
