<x-guest-layout>
   
    <div class="accountbg"></div>
    <div class="wrapper-page">
        <div class="card card-pages">

            <div class="card-body">
               
                <div class="text-center m-t-20 m-b-30">
                        <a href="/" class="logo logo-admin"><img src="{{ asset('assets/images/kacusa-logo.png')}}" alt="" height="90"></a>
                </div>
                <h4 class="text-muted text-center m-t-0"><b>Sign In</b></h4>
                <x-jet-validation-errors class="mb-4" />

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <div class="col-12">
                            <input class="form-control" type="email" name="email" :value="old('email')" required autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-12">
                            <input class="form-control" type="password" name="password" required autocomplete="current-password" >
                        </div>
                    </div>

                    

                    <div class="form-group">
                        <div class="col-12">
                            <div class="checkbox checkbox-primary">
                                <input id="remember_me" type="checkbox" name="remember" >
                                <label for="remember_me">
                                    Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row  m-b-0">
                        <div class="col-sm-7">
                            <a href="" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                        </div>
                     
                    </div>

                    <div class="form-group text-center m-t-40">
                        <div class="col-12">
                            <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>
                    <div class="form-group row  m-b-0">
                        <div class="col-sm-8">
                            <a href=" {{route('register')}} " class="text-muted"><i class="fas fa-user-plus"></i> <small>New? Click here to register</small></a>
                        </div>
                     
                    </div>

                 
                </form>
            </div>

        </div>
    </div>

</x-guest-layout>
