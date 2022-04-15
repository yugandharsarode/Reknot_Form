<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Form</title>
</head>
<body>
   <div class="container" style="background-color: #e1e1e18f;">
   <marquee behavior=scroll direction="left" scrollamount="17" width="90%"  height="30%">
   <h1><strong>Welcome to Reknot Solutions Pvt. Ltd.</strong> </h1>
</marquee>
      <h2>Enter your Details to Apply for Internship in Reknot Solutions </h2>

       @if(session('status'))
        <h6 class="alert alert-success">{{session('status')}}</h6>
      @endif

       <form action="{{url('/')}}/index" method="post" enctype="multipart/form-data">
       @csrf
       <div class="row">
  <div class="col-md-12">
    <div class="form-group mb-3">
      <label for="">Name</label>
      <input type="text" name="name" class="form-control"  placeholder="Enter your Name" value="{{old('name')}}" >
      <span class="text-danger">
        @error('name')
          {{$message}}
        @enderror
      </span>
    </div>
  </div>

  <div class="col-md-12">
    <div class="form-group mb-3">
      <label for=""> College Name</label>
      <input type="text" name="college" class="form-control"  placeholder="Enter your College Name" value="{{old('college')}}" >
      <span class="text-danger">
        @error('college')
          {{$message}}
        @enderror
      </span>
    </div>
  </div>

  <div class="col-md-12">
    <div class="form-group mb-3">
      <label for=""> Email-Id</label>
      <input type="email" name="email" class="form-control"  placeholder="Enter your Email-Id" value="{{old('email')}}" >
      <span class="text-danger">
        @error('email')
          {{$message}}
        @enderror
      </span>
    </div>
  </div> 

<div class="col-md-6">
<div class="form-group mb-3">
      <label for=""> Phone Number</label>
      <input type="text" name="phone" class="form-control"  placeholder="Enter your Phone Number" value="{{old('phone')}}" >
      <span class="text-danger">
        @error('phone')
          {{$message}}
        @enderror
      </span>
    </div>
  </div>

  <div class="col-md-6">
  <div class="form-group mb-3">
      <label for=""> College Id</label>
      <input type="text" name="college_id" class="form-control"  placeholder="Enter your College Id" value="{{old('college_id')}}" >
      <span class="text-danger">
        @error('college_id')
          {{$message}}
        @enderror
      </span>
    </div>
  </div>

  <div class="col-md-12">
    <label for="">College Id Pic</label>
    <input type="file" name="id_pic" class="form-control" >
    <span class="text-danger">
        @error('id_pic')
          {{$message}}
        @enderror
      </span>
</div>

<div class="col-md-6">
<div class="form-group mb-3">
      <label for=""> Percentage</label>
      <input type="text" name="percentage" class="form-control"  placeholder="Enter your Percentage" value="{{old('percentage')}}" >
      <span class="text-danger">
        @error('percentage')
          {{$message}}
        @enderror
      </span>
    </div>
  </div>

  <div class="col-md-6">
  <div class="form-group mb-3">
      <label for=""> Do you have your Own PC?</label><br>
      <input type="radio" name="pc" value="Yes"> Yes I have
      <input type="radio" name="pc" value="No">No I don't have
      <span class="text-danger">
        @error('pc')
          {{$message}}
        @enderror
      </span>
    </div>
</div>

<div class="col-md-12">
<div class="form-group mb-3">
      <label for=""> Address</label>
      <input type="text" name="address" class="form-control"  placeholder="Enter your Address" value="{{old('address')}}" >
      <span class="text-danger">
        @error('address')
          {{$message}}
        @enderror
      </span>
    </div>
</div>

  <input type="submit" name="save_data" class="btn btn-primary btn-md" value="Submit">

       </form>
   </div>
</body>
</html>