<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div style="display:block;
    width:50%;
    margin:5% auto;">
        <form action="{{url('/update/'.$student->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="fname">First name</label>
                <input type="text" class="form-control" value="{{$student->first_name}}" name="fname" id="fname" aria-describedby="emailHelp" placeholder="Enter first name">
            </div>
            <div class="form-group">
                <label for="lname">Last name</label>
                <input type="text" class="form-control" value="{{$student->last_name}}" name="lname" id="lname" aria-describedby="emailHelp" placeholder="Enter last name">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" value="{{$student->email}}" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="fileToUpload">Upload your image</label>
                <input type="file" class="form-control-file" value="{{$student->image}}" name="fileToUpload" id="fileToUpload">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" value="{{$student->password}}" name="passsword" id="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>