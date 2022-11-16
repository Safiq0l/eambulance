@extends('backend.adminpanel')

@section('contents')


<h1>user List</h1>

        <a href="{{route('ambulanceform')}}" class="btn btn-success">
        Create New User
    </a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Registration_number</th>
            <th scope="col">Ambulance_type</th>
            
        </tr>
        </thead>
        <tbody>
        @foreach($ambulance_list as $data)

          <tr>

          <th scope="row">{{$data->id}} </th>
          <td>{{$data->Registration_number}}</td>
          <td>{{$data->Ambulance_type}}</td>


          <td>
                <a href="" class="btn btn-primary">Update</a>
                <a href="" class="btn btn-danger">Delete</a>
                <a href="" class="btn btn-success">View</a>
            </td>

          </tr>
         
         @endforeach
        </tbody>
    </table>
























@endsection()

