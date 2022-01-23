@extends("adminlte::page")

@section("title")
Update Employee|employee-app
@endsection
@section("content_header")
  <h1>Show Employee</h1>
@endsection
@section("content")
<div class="container ">
    
    <div class="row  ">
        <div class="col-md-10 mx-auto">
            <div class="card my-5">
                <div class="card-header">
                    <div class="text-center font-weight-bold text-uppercase">
                       {{$employe->fullname}}
                    </div>
                    <div class="text-center font-weight-bold text-uppercase">
                        <a href="{{ route('vacation.request', $employe->registration_number) }}" class="btn btn-outline-danger mr-3">Vaccation Request</a>
                        <a href="{{ route('certificate.request', $employe->registration_number) }}" class="btn btn-outline-success">Work Certificat</a>

                     </div>
                   
                </div>
                <div class="card-body">
                    
                        @csrf
                    <div class="row">
                    <div class="form-group col-md-4">
                        <label for="fullname" >FullName</label>
                        <input type="text" class="form-control" placeholder="FullName" name="fullname" value="{{$employe->fullname}}" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="registration_number" >Registration_number</label>
                        <input type="text" class="form-control" placeholder="Registration_number" name="registration_number" value="{{$employe->registration_number}}" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="departement" >Departement</label>
                        <input type="text" class="form-control" placeholder="Departement" name="depart" value="{{$employe->depart}}"" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="Hire_date" >Hire Date</label>
                        <input type="date" class="form-control" placeholder="Hire_date" name="Hire_date" value="{{$employe->Hire_date}} " disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="phone" >Phone</label>
                        <input type="tel" class="form-control" placeholder="phone" name="phone" value="{{$employe->phone}}" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="adress" >Adress</label>
                        <input type="text" class="form-control" placeholder="adress" name="adress" value="{{$employe->adress}}" disabled>
                    </div>
                </div>
                    <div class="form-group col-md-6">
                        <label for="city" >City</label>
                        <input type="text" class="form-control" placeholder="city" name="city" value="{{$employe->city}}" disabled>
                    </div>
                    
                    
                    
                </div>
                
            </div>
        
        </div>
    </div>
</div>
    
@endsection

