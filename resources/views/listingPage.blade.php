<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <table class="table table-striped-columns" style="display:flex;
    width:50%;
    margin:5% auto;
    justify-content:center;">
        <tr>
            <td colspan="3" align="right">
                <h2>Listing Page</h2>
            </td>
            <td colspan="2" align="right">
                <a href="{{url('/')}}"><button type="button" class="btn btn-info btn-sm">+New</button></a>
            </td>

        </tr>
        <tr>
            <th>First_name</th>
            <th>Last_name</th>
            <th>Email</th>
            <th>Image</th>
            <th>Mode</th>
        </tr>
        @foreach ($student as $item)
        <tr>
            <td>{{ $item->first_name }}</td>
            <td>{{ $item->last_name }}</td>
            <td>{{ $item->email }}</td>
            <td><img src="{{url('myImages/'.$item->image)}}" height="50px" width="50px"></td>
            <td style="display: block ruby;">
                <!-- <a href="{{url('/listingPage/'.$item->id)}}"><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModalCenter">View</button></a> -->
                <a href="{{url('/editStudent/'.$item->id)}}"><button type="button" class="btn btn-warning btn-sm">Edit</button></a>
                <a href="{{url('/deleteStudent/'.$item->id)}}"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
            </td>
        </tr>
        @endforeach
    </table>

</body>

</html>