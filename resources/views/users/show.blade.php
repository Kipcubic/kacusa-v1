<x-app-layout>
    <x-slot name="title">
        Member: {{ $user->full_name }}
    </x-slot>
    <div class="col-lg-12">
       
            <style>
                .bd-callout {
          padding: 1.25rem;
          margin-top: 1.25rem;
          margin-bottom: 1.25rem;
          border: 1px solid #e9ecef;
          border-left-width: 0.25rem;
          border-radius: 0.25rem;
        }
        .bd-callout-info {
          border-left-color: #5bc0de;
        }
            </style>
          
           
            <div class="bd-callout bd-callout-info">
                Please confirm the details and if not accurate, delete </a>.
                </div>
             
           <div class="shadow p-3 mb-5 bg-body rounded" style="background-color: white">
            
            <x-alert></x-alert>
            <form action=" {{route('user.destroy',$user->id)}}  " method="POST">
            @csrf
            @method('DELETE')
                <p class="h6">Personal Information</p>
                <hr>
                <div class="row g-3">
                  <div class="col-sm-6">
                    <label for="firstName" class="form-label">First name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" value=" {{$user->fname}} " name="fname" required disabled>
                  
                  </div>
        
                  <div class="col-sm-6">
                    <label for="lastName" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="" value=" {{$user->lname}} " name="lname" required disabled>
                  
                  </div>
                </div>
                <div class="row g-3">
                    <div class="col-sm-6">
                      <label for="firstName" class="form-label">Mobile Number</label>
                      <input type="text" class="form-control" id="firstName" placeholder="0722xxxxx" name="phone_number" value=" {{$user->phone_number}} " required disabled>
                   
                    </div>
          
                    <div class="col-sm-6">
                      <label for="lastName" class="form-label">Village</label>
                      <input type="text" class="form-control" id="lastName" placeholder="" name="village" value=" {{$user->village }} "  required disabled>
                      <div class="invalid-feedback">
                        Valid last name is required.
                      </div>
                    </div>
                  </div>
                  <div class="row g-3">
                    <div class="col-sm-6">
                      <label for="firstName" class="form-label">ID Number</label>
                      <input type="text" class="form-control" id="firstName" placeholder="" name="id_number" value=" {{$user->id_number }} " required disabled>
                    
                    </div>
                  </div>
        
                  <div class="col-12">
                    <label for="username" class="form-label">Email</label>
                    <div class="input-group has-validation">
                      <input type="text" class="form-control" id="username" placeholder="Email" required value=" {{$user->email}} " disabled>
                  
                    </div>
                  </div>
                  <br>
                  <p class="h6">Current Education Details</p>
                  <hr>
        
                  <div class="row g-3">
                    <div class="col-sm-6">
                      <label for="firstName" class="form-label">Course</label>
                      <input type="text" class="form-control" id="firstName" placeholder="" name="course" value=" {{$user->course }} " required disabled>
                    
                    </div>
                  </div>
                  <div class="row g-3">
                    <div class="col-sm-6">
                      <label for="firstName" class="form-label">Institution</label>
                      <input type="text" class="form-control" id="firstName" placeholder="" name="current_institution" value=" {{$user->current_institution }} " required disabled>
                    
                    </div>
                  
          
                    <div class="col-sm-6">
                      <label for="lastName" class="form-label">Admission Number</label>
                      <input type="text" class="form-control" id="lastName" placeholder="Eg. CT8998-2016" name="admission_number" value=" {{$user->admission_number}} " required disabled>
                     
                    </div>
                  </div>
                  <div class="row g-3">
                      <div class="col-sm-6">
                        <label for="firstName" class="form-label">Year of Study</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Eg Year 1" name="year_of_study" value=" {{$user->year_of_study }} " required disabled>
                    
                      </div>
            
                      <div class="col-sm-6">
                        <label for="lastName" class="form-label">Campus Location</label>
                        <input type="text" class="form-control" id="lastName" name="campus" placeholder="Eg. Eldoret" value=" {{$user->campus}} "required disabled>
                     
                      </div>
                    </div>
        
                
          
            
                  <div class="col-12 text-right">
                      <div class="form-group mt-2">
                        <button class="btn btn-danger" type="submit"> <span><i class="fas fa-trash-alt"></i></span> &nbsp;Delete this user</button>
                      </div>
                      
                  </div>
        
               
                </form>
        
            </div>
        
           
           
        
</x-app-layout>