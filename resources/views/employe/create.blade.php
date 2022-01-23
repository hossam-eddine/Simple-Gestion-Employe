@extends("adminlte::page")

@section("title")
Add Employee|employee-app
@endsection
@section("content_header")
  <h1>Add Employee</h1>
@endsection
@section("content")
<div class="container ">
    
    <div class="row  ">
        <div class="col-md-10 mx-auto">
            <div class="card my-5">
                <div class="card-header">
                    <div class="text-center font-weight-bold text-uppercase">
                       Add New  Employee
                    </div>
                    @include("layouts.alert")
                </div>
                <div class="card-body">
                    <form action="{{ route('employee.store') }}"  class=" mt-3" method="POST">
                    @csrf
                    <div class="row">
                    <div class="form-group col-md-4">
                        <label for="fullname" >FullName</label>
                        <input type="text" class="form-control" placeholder="FullName" name="fullname" value="{{old('fullname')}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="registration_number" >Registration_number</label>
                        <input type="text" maxlength="8" class="form-control" placeholder="Registration_number" name="registration_number" value="{{old('registration_number')}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="departement" >Departement</label>
                        <input type="text" class="form-control" placeholder="Departement" name="depart" value="{{old('depart')}}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="Hire_date" >Hire Date</label>
                        <input type="date" class="form-control" placeholder="Hire_date" name="Hire_date" value="{{old('Hire_date')}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="phone" >Phone</label>
                        <input type="tel" class="form-control" placeholder="phone" name="phone" value="{{old('phone')}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="adress" >Adress</label>
                        <input type="text" class="form-control" placeholder="adress" name="adress" value="{{old('adress')}}">
                    </div>
                </div>
                    <div class="form-group col-md-6">
                        <label for="city" >City</label>
                        <input type="text" class="form-control" placeholder="city" name="city" value="{{old('city')}}">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                    
                    </form>
                </div>
                
            </div>
        
        </div>
    </div>
</div>
    
@endsection

