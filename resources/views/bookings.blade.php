@extends('main')


<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <title>Book Appointment</title>
    <style>
        table{
            table-layout: fixed;
        }
        td{
            width: 33%;
        }
        .today{
            background: yellow;
        }
    </style>
</head>
<body>
@section('content')
<?php
        $dateComponents=getdate();
        if(isset($_GET['month']) && isset($_GET['year'])){
            $month=$_GET['month'];
            $year=$_GET['year'];
        }
        else{
            $month=$dateComponents['mon'];
            $year=$dateComponents['year'];
        }

        if(isset($_GET['veterinarian'])){
            $veterinarian=$_GET['veterinarian'];
        }
        else{
            $veterinarian=0;
        }
        // $month=now()->month;
        // $month=now()->month;
        $year=now()->year;
        $month=str_pad($month,2,"0",STR_PAD_LEFT);
        $monthName=$dateComponents['month'];

?>



</body>
@endsection('content')

</html>
