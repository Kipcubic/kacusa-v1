<x-app-layout>
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
    <x-slot name="title">
        Your Membership Information <br>

   
        

    </x-slot>
    @if (!auth()->user()->profile_complete)
    <div class="alert alert-danger" role="alert">
        Please complete filling your details to proceed to other parts of the application
      </div>  
    @endif
    <div class="bd-callout bd-callout-info">
        Please ensure the information below about you is accurate, when opportunities arises it will be easy to refer the correct member </a>.
        </div>

 
   <div class="shadow p-3 mb-5 bg-body rounded" style="background-color: white">
    
    <x-alert></x-alert>
    <form action=" {{route('details.save')}}  " method="POST">
    @csrf
        <p class="h6">Personal Information</p>
        <hr>
        <div class="row g-3">
          <div class="col-sm-6">
            <label for="firstName" class="form-label">First name</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value=" {{auth()->user()->fname}} " name="fname" required>
          
          </div>

          <div class="col-sm-6">
            <label for="lastName" class="form-label">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value=" {{auth()->user()->lname}} " name="lname" required>
          
          </div>
        </div>
        <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Mobile Number</label>
              <input type="text" class="form-control" id="firstName" placeholder="0722xxxxx" name="phone_number" value=" {{auth()->user()->phone_number}} " required>
           
            </div>
  
            <div class="col-sm-6">
              <label for="lastName" class="form-label">Village</label>
              <input type="text" class="form-control" id="lastName" placeholder="" name="village" value=" {{auth()->user()->village }} "  required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">ID Number</label>
              <input type="text" class="form-control" id="firstName" placeholder="" name="id_number" value=" {{auth()->user()->id_number }} " required>
            
            </div>
          </div>

          <div class="col-12">
            <label for="username" class="form-label">Email</label>
            <div class="input-group has-validation">
              <input type="text" class="form-control" id="username" placeholder="Email" required value=" {{auth()->user()->email}} " disabled>
          
            </div>
          </div>
          <br>
          <p class="h6">Current Education Details</p>
          <hr>

          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Course</label>
              <input type="text" class="form-control" id="firstName" placeholder="" name="course" value=" {{auth()->user()->course }} " required>
            
            </div>
          </div>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Institution</label>
              <input type="text" class="form-control" id="firstName" placeholder="" name="current_institution" value=" {{auth()->user()->current_institution }} " required>
            
            </div>
          
  
            <div class="col-sm-6">
              <label for="lastName" class="form-label">Admission Number</label>
              <input type="text" class="form-control" id="lastName" placeholder="Eg. CT8998-2016" name="admission_number" value=" {{auth()->user()->admission_number}} " required>
             
            </div>
          </div>
          <div class="row g-3">
              <div class="col-sm-6">
                <label for="firstName" class="form-label">Year of Study</label>
                <input type="text" class="form-control" id="firstName" placeholder="Eg Year 1" name="year_of_study" value=" {{auth()->user()->year_of_study }} " required>
            
              </div>
    
              <div class="col-sm-6">
                <label for="lastName" class="form-label">Campus Location</label>
                <input type="text" class="form-control" id="lastName" name="campus" placeholder="Eg. Eldoret" value=" {{auth()->user()->campus}} "required>
             
              </div>
            </div>

        
  
            

          <div class="col-12 text-right">
              <div class="form-group mt-2">
                <button class="btn btn-success" type="submit">Update</button>

              </div>
              
          </div>

       
        </form>

    </div>

   
   

</x-app-layout>