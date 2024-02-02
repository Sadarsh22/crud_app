<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="display" style="margin:10% auto;
    width:50%;
    text-align :left">
       
        <h3>First_name : {{$student->first_name}}</li></h3>
           <h3> <li class="list-group-item">Last_name : {{$student->last_name}}</li></h3>
           <h3><li class="list-group-item">Email_id : {{$student->email}}</li></h3>
           <h3><li class="list-group-item">Profile picture : <img width="100px" height="100px" src={{url('myImages/'.$student->image)}}></li></h3>
    </div>
</body>

</html>