@extends('backend.adminpanel')

@section('contents')




<form action="{{route('login.loginform.store')}}" method="post">
@csrf
<div class="form-group">
    <label for="name">Enter your Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
</div>

<div class="form-outline">
  <input type="tel" id="typePhone" class="form-control" name="number" placeholder="number"/>
  <label class="form-label" for="typePhone">Phone number</label>
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
<div class="form-group">
    <label for=""> account status </label>
    <select name="status" id="" class="form-control">
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>
    </select>
</div>

<div class="form-group">
    <label for="image">Upload Image</label>
    <input type="file" class="form-control"name="image" id="image">
</div>

<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
  </div>

  
<button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection()