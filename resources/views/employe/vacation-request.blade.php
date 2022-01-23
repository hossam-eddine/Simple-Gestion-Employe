@extends("adminlte::page")
@section("title")
VacationRequest
@endsection()
@section("content")
<div class="container">
    <div class=" row my-5">
        
        <div class="col-md-8 mx-auto">
            <div class="card my-5  p-5">
                <div class="card-header row ">
                    <h3 class="col-md-6 ">Vacation Request</h3>
                    <h3 class="col-md-4 ml-5   border border-primary  bg-gradient-gray-dark "><b class="text-blue mr-2 ">LHAJ</b>||Society</h3>
                </div>

            <div class="card-body">
                <p class="lead "><b>{{$employe->fullname}}</b>is presently employed with me in the following :</p>
                <p class="lead">{{$employe->depart}}</br>departement.</p>
                <p class="lead">
                    He is requesting a vacation starting from <b>________________</b>
                </p>
                <p class="lead">
                    And ends on <b>______________</b>
                </p>
    
                <p class="m-5">
                    ___________
                    ___________
                </p>
                <div class="mt-5">
                    <a href="" class="btn btn-sm btn-dark" onclick="this.style.display='none'; window.print()">
                    <i class="fas fa-print"></i>
                    </a>
                </div>
                
            </div>
           
        </div>
        
        </div>
    </div>
</div>
@endsection()
