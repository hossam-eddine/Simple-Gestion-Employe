@extends("layouts.app")
@section("title")
Laravel|employee-app
@endsection
@section("content")
<div class="container ">
    <div class="row my-5 ">
        <div class="col-md-6 mx-auto">
        <div class="card ">
        <div class="card-header ">
            <h3 class="text-center">Welcom back</h3>
        </div>
        <div class="card-body text-center">
            @guest
            <a href="{{route('login')}}" class="btn btn-outline-primary">login</a>
                
            @endguest
            @auth
                <a href="{{ url('admin/home') }}" class="btn btn-dark">Welcom</a>
            @endauth
            
        </div>
        </div>
        </div>
    </div>
</div>
    
@endsection