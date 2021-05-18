<x-app-layout>

    <x-slot name="title">
        Add Leadership <i class="fas fa-book-reader"></i><br>
        <small>Create the current leadership</small>
    </x-slot>
    <x-jet-validation-errors class="mb-4" />
   
    <x-alert></x-alert>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body" style="background-color:white">

                    <form class="form-horizontal" action=" {{route('leadership.store')}} " method="POST">
                        @csrf
                      
                        
                        <div class="form-group row mb-0">
                            <div class="col-sm-4">
                                Leader

                                <div id="emailHelp" class="form-text" style="font-size:12px"> Search for the leader
                                </div>
                            </div>
                            <div class="col-sm-8">

                                <label class="control-label">Users</label>

                                <select class="selectpicker form-control" data-live-search="true" 
                                    name="user">
                                    @foreach ($users as $user)
                                    <option value=" {{$user->id}} "> {{$user->full_name}} </option>
                                    @endforeach
                                </select>


                            </div>
                        </div>
                        <hr>

                        {{-- <div class="form-group row">
                            <div class="col-sm-4">
                                Date & Time
                                <div id="emailHelp" class="form-text" style="font-size:12px"> Here you can set the date
                                    the schedule should start, the dispatch date must be a date after tomorrow
                                </div>

                            </div>
                            <div class="col-sm-8">
                                <label class="control-label" for="example-text-input">Dispatch Date</label>

                                <input type="date" class="form-control" name="dispatch_date" id="example-text-input"
                                    min=" {{now()->format('Y-m-d')}} " value=" {{old('dispatch_date')}} ">
                            </div>
                        </div> --}}


                        <div class="form-group row">
                            <div class="col-sm-4">

                            </div>
                            <div class="col-sm-8">
                                <label class="control-label" for="example-password-input">Role</label>

                                <select class="selectpicker form-control" name="role" required>
                                    @foreach ($roles as $role)
                                    <option value=" {{$role->id}} " > {{$role->name}} </option>

                                    @endforeach
                                  
                                </select>
                            </div>
                        </div>

                        <hr>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                Description
                                <div id="emailHelp" class="form-text" style="font-size:12px">
                                    Here you can add a description or leave it blank.

                                </div>
                            </div>
                            <div class="col-sm-8">
                                <label class="control-label" for="example-textarea-input">Description</label>

                                <textarea class="form-control" rows="4" id="example-textarea-input"
                                    name="desc"></textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col-sm-4">

                            </div>
                            <div class="col-md-8 float-end">
                                <button type="submit" class="btn btn-success">Create <i
                                        class="ion ion-md-save"></i></button>

                            </div>
                        </div>





                    </form>
                </div> <!-- card-body -->
            </div> <!-- card -->
        </div> <!-- col -->
    </div> <!-- End row -->

</x-app-layout>