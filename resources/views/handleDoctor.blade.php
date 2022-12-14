@extends('main')
@section('content')

<?php
$name= Auth::user()->name;
$veterinarian_id=Auth::user()->veterinarian_id;

?>

<?php $appointments=App\Http\Controllers\BookingsController::appointments($veterinarian_id); ?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <title>Book Appointment</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .main{
            margin-left:10%;
            margin-right:10%;
        }
        .bookOff{
            margin-top:30px;
            background-color: #C5E1A5;
            padding: 10px;
        }
    </style>
</head>
<body>
<div class="main">
<table class="table" style="background-color: #DCEDC8;">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email ID</th>
                    <th scope="col">Date</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Reason</th>
                    <th scope="col">Timeslot</th>
                </tr>
            </thead>

        @foreach($appointments as $appoint)
            <tr>
                <td>{{$appoint['name']}}</td>
                <td>{{$appoint['email']}}</td>
                <td>{{$appoint['date']}}</td>
                <td>{{$appoint['phone']}}</td>
                <td>{{$appoint['reason']}}</td>
                <td>{{$appoint['timeslot']}}</td>

            </tr>
        @endforeach
</table>

<div class="bookOff">
    <form action="{{url('bookOff')}}/">
        <h4>Time to Book off:</h4><br>
        <div class="form-group">
            <label for="date" >Date: <label>
            <input type="date" class="form-control" id="date" name="date">
        </div><br>
        <div class="form-group">
            <label for="timeslot" >Time: <label>
            <select id="timeslot" name="timeslot">

                @foreach($slot as $s)
                    <option value="{{$s}}">{{$s}}</option>
                @endforeach
            </select>
        </div><br>
        <input type="hidden" name="name" value="{{ Auth::user()->name}}">
        <input type="hidden" name="email" value="{{ Auth::user()->email}}">
        <input type="hidden" name="phone" value="{{ Auth::user()->phone}}">
        <input type="hidden" name="phone" value="2896983628">
        <input type="hidden" name="veterinarian_id" value="{{ Auth::user()->veterinarian_id}}">
        <input type="hidden" name="reason" value="Book Off">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<body>
</div>
</html>




@endsection
