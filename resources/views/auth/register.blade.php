<x-guest-layout>
   
      <div class="accountbg"></div>
        <div class="wrapper-page">
            <div class="card card-pages">

                <div class="card-body">
                    <div class="text-center m-t-20 m-b-30">
                            <a href="index.html" class="logo logo-admin"><img src="assets/images/kacusa-logo.png" alt="" height="34"></a>
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
