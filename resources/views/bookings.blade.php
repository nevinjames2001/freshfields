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

        // if(isset($_GET['veterinarian'])){
        //     $veterinarian=$_GET['veterinarian'];
        // }
        // else{
        //     $veterinarian=0;
        // }

        $veterinarian=0;
        // $month=now()->month;
        // $month=now()->month;
        $year=now()->year;
        $month=str_pad($month,2,"0",STR_PAD_LEFT);
        $monthName=$dateComponents['month'];

?>

    <p>
       <?php

       $daysOfWeek=array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
        $firstDayOfMonth=mktime(0,0,0,$month,1,$year);
        $numberDays=date('t',$firstDayOfMonth);
        $dateComponents=getdate($firstDayOfMonth);
        $monthName=$dateComponents['month'];
        $dayOfWeek=$dateComponents['wday'];

        if($dayOfWeek == 0){
            $dayOfWeek=6;
        }
        else{
            $dayOfWeek=$dayOfWeek - 1;
        }

        $datetoday=date('Y-m-d');

        $currentDay=1;

        $month=str_pad($month,2,"0",STR_PAD_LEFT);


        ?>



        <h2 class='text-center' ><?php echo "$monthName $year";?></h2>
        <div class='text-center'>
    <?php
        echo "<a class='btn btn-xs btn-primary' href='?month=".date('m',mktime(0,0,0,$month-1,1,$year))."&year=".date('Y',mktime(0,0,0,$month-1,1,$year))."'>Previous Month</a>";
        echo "<a class='btn btn-xs btn-primary' href='?month=".date('m')."&year=".date('Y')."'>Current Month</a>";
        echo "<a class='btn btn-xs btn-primary' href='?month=".date('m',mktime(0,0,0,$month+1,1,$year))."&year=".date('Y',mktime(0,0,0,$month+1,1,$year))."'>Next Month</a>";
    ?>
    </div>
    <form id='veterinarian_select_form'>
        <div class='row'>
            <div class='col-md-6 col-md-offset-3 form-group'>
                <label>Select Doctor</label>
                <select class='form-control' id='veterinarian_select' name='veterinarian'>
                    <option>Select Doctor</option>
                    @foreach($data as $d)
                        <option value="{{$d['veterinarian_id']}}">{{$d['veterinarian_name']}}</option>

                    @endforeach
                </select>
                <input type='hidden' name='month' value="{{$month}}" />
                <input type='hidden' name='year' value="{{$year}}" />

            </div>
        </div>
    </form>
    <table class='table table-bordered'>
    <?php
        echo "<tr>";
            foreach($daysOfWeek as $day){
                echo "<th class='header'>$day</th>";
            }
        echo "</tr>
        <tr>";
            if($dayOfWeek > 0){
                for($k=0;$k<$dayOfWeek;$k++){
                    echo "<td></td>";
                }
            }

            while($currentDay <= $numberDays){
                if($dayOfWeek == 7){
                    $dayOfWeek=0;
                    echo "</tr><tr>";
                }

                    $currentDayRel = str_pad($currentDay,2,"0",STR_PAD_LEFT);
                    // $date="$year-$month-$currentDayRel";


                    $dayname=strtolower(date("l",strtotime($date)));
                    $eventNum=0;
                    $today=$date==date('Y-m-d')?"today":"";

                    if($dayname == 'saturday' || $dayname == 'sunday'){
                        echo "<td><h4>$currentDay</h4><button class='btn btn-danger btn-xs'>HOLIDAY</button>$date";
                    }
                    elseif($date < date('Y-m-d')){
                        echo "<td><h4>$currentDay</h4><button class='btn btn-danger btn-xs'>N/A</button>";
                    }
                    else{
                        $date="2022-12-08";
                        $year="2022";
                        $totalbookings =App\Http\Controllers\BookingsController::checkSlots($date,$year,$veterinarian);
                        $totalbookings=count($totalbookings);
                        // $totalbookings=checkSlots($mysqli,$date,$year,$first_veterinarian);

                        if($totalbookings==8){
                            echo "<td class='$today'><h4>$currentDay</h4><a href='#' class='btn btn-danger btn-xs'>All Booked</a>";
                        }
                        else{
                            $availabelslots=8-$totalbookings;

                            ?>
                            <td class='$today'><h4>{{$currentDay}}</h4><a href="{{url('book')}}/{{$date}}/{{$veterinarian}}" class='btn btn-success btn-xs'>Book</a><small><i>{{$availabelslots}} slots left</i></small>;
                            <?php
                        }
                    }
                    echo "</td>";
                    $currentDay++;
                    $dayOfWeek++;
                }

                if($dayOfWeek != 7){
                    $remainingDays = 7 -$dayOfWeek;
                    for($i = 0;$i<$remainingDays;$i++){
                        echo "<td></td>";
                    }
                }
                echo "</tr>";
                echo "</table>";



        ?>


        </tr>

    </table>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>
<script>
$('#veterinarian_select').change(function(){
    $('#veterinarian_select_form').submit();
});

$("#veterinarian_select' option[value='<?php echo $veterinarian; ?>']").attr('selected', 'selected');
</script>

</body>
@endsection('content')

</html>
