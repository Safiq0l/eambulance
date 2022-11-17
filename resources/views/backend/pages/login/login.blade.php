@extends('backend.adminpanel')

@section('contents')


<h1>user List</h1>


@if(session()->has('message'))
        <p class="alert alert-success">{{session()->get('message')}}</p>
      @endif

    @if(session()->has('error'))
        <p class="alert alert-danger">{{session()->get('error')}}</p>
    @endif


        <a href="{{route('loginform')}}" class="btn btn-primary">
        Create New User
    </a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">name</th>
            <th scope="col">Email_address</th>
            <th scope="col">status</th>
            <th scope="col">image</th>
            <th scope="col">password </th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        
        @foreach($login_list as $data)

            <tr>
            <th scope="row">{{$data->id}} </th>
            <td>{{$data->name}}</td>
            <td>{{$data->Email_address}}</td>
            <td>{{$data->status}}</td>
            <td>
                <img width="50px" style="border-radius: 15px" src="{{url('/uploads/'.$data->image)}}" alt="Image">
            </td>
            <td>{{$data->password}}</td>

            <td>
                <a href="" class="btn btn-outline-primary">Update</a>
                <a href="{{route('admin.user.delete',$data->id)}}" class="btn btn-outline-danger">Delete</a>
                <a href="{{route('admin.user.view',$data->id)}}" class="btn btn-outline-success">View</a>
            </td>





            </tr>  






        @endforeach



        </tbody>
    </table>
    {{$login_list->links()}}

@endsection()