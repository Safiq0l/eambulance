@extends('backend.adminpanel')

@section('contents')




<form action="{{route('ambulances.ambulanceform.store')}}" method="post">
  Ambulance_List

@csrf

<div class="form-group">
    <label for="name">Enter Registration number</label>
    <input type="text" class="form-control" id="name" name="number" placeholder="Reg number">
</div>
<div>
<label for="name">Enter Ambulance types</label>
<select class="form-select" aria-label="Default select example" name="choose">
  <option selected>choose your Ambulance</option>
  <option value="Isolation Ambulance">Isolation Ambulance</option>
  <option value="Advanced Life Support Ambulance"> Advanced Life Support Ambulance</option>
  <option value="Basic Life Support Ambulance">Basic Life Support Ambulance</option>
   
</select>

</div>





  
<button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection()