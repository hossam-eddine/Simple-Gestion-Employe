@extends("adminlte::page")
@section('plugins.Datatables',true)
@section("title")
Laravel|employee-app
@endsection
@section("content_header")
  <h1>List of Employee</h1>
  
@endsection
@section("content")
<div class="container ">
    <div class="row  ">
        <div class="col-md-10 mx-auto">
            <div class="card my-5">
                <div class="card-header">
                    <div class="text-center font-weight-bold text-uppercase">
                        Employee
                    </div>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>FullName</th>
                                <th>Departement</th>
                                <th>Hired</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employee as $key => $emp )
                                
                           
                            <tr>
                                <td>{{$key+=1}}</td>
                                <td>{{$emp->fullname}}</td>
                                <td>{{$emp->depart}}</td>
                                <td>{{$emp->Hire_date}}</td>
                                <td class="d-flex  justify-content-center align-items-center"><a href="{{ route('employee.show',$emp->registration_number) }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-eye"></i>
                                </a>
                           
                            <a href="{{ route('employee.edit',$emp->registration_number) }}" class="btn btn-sm btn-outline-success mx-2">
                                <i class="fas fa-edit"></i>
                                </a>
                                <form id="{{$emp->registration_number}}" action="{{route("employee.destroy",$emp->registration_number)}}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    
                                </form>
                                <button type="submit" class="btn btn-sm btn-danger" onclick="deleteEm({{$emp->registration_number}})">
                                    <i class="fas fa-trash"></i>
                                </button>
                               
                            </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        
        </div>
    </div>
</div>
    
@endsection

@section("js")
<script>
    $(document).ready(function(){
        $('#myTable').DataTable({
            dom:'Bfrtip',
            buttons:[
                'copy','excel','csv','pdf','print'
            ]
        })
    });
    ////////
    function deleteEm(id){
        Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
      document.getElementById(id).submit();
   
  }
})

    }
    
</script>
@if (session()->has("success"))
    <script>
        Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: '{{session()->get("success")}}',
  showConfirmButton: false,
  timer: 1500
});



    </script>
@endif
    
@endsection