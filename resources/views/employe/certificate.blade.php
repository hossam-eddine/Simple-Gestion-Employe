@extends("adminlte::page")
@section("title")
Work CerificateRequest
@endsection()
@section("content")
<div class="container">
    <div class=" row my-5">
        
        <div class="col-md-8 mx-auto">
            <div class="card my-5  p-5">
                <div class="card-header row  ">
                    <h3 class="col-md-6 ">Cerificate Request</h3>
                    <h3 class="col-md-4 ml-5   border border-primary  bg-gradient-gray-dark "><b class="text-blue mr-2 ">LHAJ</b>||Society</h3>
                </div>

            <div class="card-body">
                <p class="lead">
                    This is to certify that <b>{{$employe->fullname}}</b> is presently employed with me in the following :
                </p>
                <p class="lead">
                    <b>{{$employe->depart}}</b> departement.
                </p>
                <p class="lead">
                    Their employment began on <b>{{$employe->Hire_date}}</b>
                </p>
                <p class="lead">
                    This Certification is being issued upon the request of <b>{{$employe->fullname}}</b> for whatever legal purpose it may serve.
                </p>
                <p class="lead">
                    Issued on <b>{{\Carbon\Carbon::today()->toDateString()}}</b> at <b>{{\Carbon\Carbon::now()->toTimeString()}}</b>
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
