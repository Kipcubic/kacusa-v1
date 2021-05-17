<x-app-layout>
    <x-slot name="title">
        Dashboard
    </x-slot>
    <div class="row">
        <div class="col-sm-6 col-xl-4">
            <div class="small-box bg-success" style="border-radius: 5px" >
                <div class="inner p-2">
                  <h3 style="color: white"> {{$usersToday}} </h3>

  
                  <p style="color: white">{{\Str::plural('Member',$usersToday)}} Registered today</p>
                </div>
               
                <a href="#" class="small-box-footer" style="    background-color: rgba(0,0,0,.1);
                color: rgba(255,255,255,.8);
                display: block;
                padding: 3px 0;
                position: relative;
                text-align: center;
                text-decoration: none;
                z-index: 10;">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
        </div>

        <div class="col-sm-6 col-xl-4">
            <div class="small-box bg-info" style="border-radius: 5px" >
                <div class="inner p-2">
                  <h3> {{$usersThisMonth}} </h3>
  
                  <p>{{\Str::plural('Member',2)}} this month </p>
                </div>
               
                <a href=" # " class="small-box-footer" style="    background-color: rgba(0,0,0,.1);
                color: rgba(255,255,255,.8);
                display: block;
                padding: 3px 0;
                position: relative;
                text-align: center;
                text-decoration: none;
                z-index: 10;">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
        </div>

        <div class="col-sm-6 col-xl-4">
            <div class="small-box bg-info" style="border-radius: 5px" >
                <div class="inner p-2">
                  <h3> {{$users->count()}} </h3>
  
                  <p>Total {{\Str::plural('Member',3)}}</p>
                </div>
               
                <a href="  " class="small-box-footer" style="    background-color: rgba(0,0,0,.1);
                color: rgba(255,255,255,.8);
                display: block;
                padding: 3px 0;
                position: relative;
                text-align: center;
                text-decoration: none;
                z-index: 10;">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
        </div>
{{-- 
        <div class="col-sm-6 col-xl-3">
            <div class="small-box bg-info" style="border-radius: 5px" >
                <div class="inner p-2">
                  <h3> {{0}} </h3>
  
                  <p>Total Contacts</p>
                </div>
               
                <a href=" # " class="small-box-footer" style="    background-color: rgba(0,0,0,.1);
                color: rgba(255,255,255,.8);
                display: block;
                padding: 3px 0;
                position: relative;
                text-align: center;
                text-decoration: none;
                z-index: 10;">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
        </div> --}}

     
    </div>

    {{-- Recent Emails Sent --}}
    <div class="row mt-2">

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="m-b-30 m-t-0">Recent Members Registered</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Verified On</th>
                                        <th scope="col">Registered</th>
                                      </tr>
                                    </thead>
                                    <tbody>

                                      @forelse ($recentusers->sortByDesc('created_at')->take(10) as $user)
                                      <tr>
                                        <th scope="row"> {{$loop->iteration}} </th>
                                        <td> {{$user->full_name}} </td>
                                        <td> <small>{{$user->email}}</small> </td>
                                        <td> {{$user->created_at->diffForHumans()}} </td>
                                      </tr>
                                      @empty
                                          <tr>
                                            <td colspan="4" class="text-center">No Recent</td>
                                          </tr>
                                      @endforelse
                                                                                                          
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="m-b-30 m-t-0">List of Recent Members verified</h4>

                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                
                                    <th scope="col">Name</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>

                                    @foreach ($recentusers as $user)
                                    <tr>
                                        <th scope="row"> {{$loop->iteration}} </th>
                                    
                                        <td> {{$user->fname}} {{$user->lname}} </td>
                                        <td ><a href=" {{route('user.show',$user->id)}} "> <i class="fas fa-arrow-circle-right ml-4 fa-lg"></i></a> </td>
                                      </tr>
                                    @endforeach
                               
                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    </div>
    <!-- end row -->

   

     
        <!-- end row -->

    {{-- </div> --}}
</x-app-layout>
