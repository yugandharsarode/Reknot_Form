<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <title>Info</title>
</head>
<body>
   <div class="container">
      <h1 class = "text-center text-white bg-dark">
         Data of the Students who had Applied for Internship
      </h1><br>
      <div class="table-responsive">
      <table class="table table-bordered table-hover">
         
         <thead>
            <th>Name</th>
            <th>College</th>
            <th>Email</th>
            <th>Phone</th>
            <th>College Id</th>
            <th>Id Pic</th>
            <th>Percentage</th>
            <th>PC</th>
            <th>Address</th>
            <th>Edit </th>
            <th>Delete </th>

         <tbody>
            @foreach($interns as $intern)
                
            <tr>
                <td>{{$intern->name}}</td>
                <td>{{$intern->college}}</td>
                <td>{{$intern->email}}</td>
                <td>{{$intern->phone}}</td>
                <td>{{$intern->college_id}}</td>
                <td>
                     <img src="{{ asset('uploads/'.$intern->id_pic) }}" width="80px" >
                </td>
                <td>{{$intern->percentage}}</td>
                <td>{{$intern->pc}}</td>
                <td>{{$intern->address}}</td>
                <td> <a href="{{url('/edit_data/edit')}}/{{$intern->id}}"><button class="btn btn-primary">Edit</button></a></td>
                <td> <a href="{{url('/index/delete')}}/{{$intern->id}}"><button class="btn btn-danger">Delete</button></a></td>

            </tr>
            @endforeach
         </tbody>

      </table>
      </div>
   </div>
  
</body>
</html>





