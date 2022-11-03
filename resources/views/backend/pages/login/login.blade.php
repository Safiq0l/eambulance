@extends('backend.adminpanel')

@section('contents')


<h1>user List</h1>

        <a href="{{url('/login/loginform')}}" class="btn btn-primary">
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
                <img src="{{$data->image}}" alt="Image">
            </td>
            <td>{{$data->password}}</td>

            <td>
                <a href="" class="btn btn-outline-primary">Update</a>
                <a href="" class="btn btn-outline-danger">Delete</a>
                <a href="" class="btn btn-outline-success">View</a>
            </td>





            </tr>  






        @endforeach



        </tbody>
    </table>


@endsection()