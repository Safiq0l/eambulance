<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('/frontend/css/registration.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    

<section class="vh-100 bg-image"

style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
<div class="mask d-flex align-items-center h-100 gradient-custom-3">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-9 col-lg-7 col-xl-6">
        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-5">
            <h2 class="text-uppercase text-center mb-5">Create an account</h2>

            <form action="{{route('do.registration')}}" method="post">

                @csrf

              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1cg">Your Name</label>
                <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="name" />
              </div>

              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3cg">Your Email</label>
                <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email" />
              </div>

              <div class="form-outline mb-4">
              <label class="form-label" for="form3Example4cg">Password</label>

                <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password" />
              </div>

              <div class="form-outline mb-4">
              <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                <input type="password" id="form3Example4cdg" class="form-control form-control-lg" name="repeatpass" />
            
              </div>

              <div class="form-check d-flex justify-content-center mb-5">

                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                <label class="form-check-label" for="form2Example3g">
                  I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                </label>
              </div>

              <div class="d-flex justify-content-center">
                <button type="submit"
                  class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
              </div>

                 </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
</body>
</html>
