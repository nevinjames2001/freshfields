@extends('main')

@section('content')
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
        .btn{
            margin-top:30px;
        }
    </style>
</head>
<body>
<div class="container">
        <h1 class="text-center">Book for Date:<?php echo date('d/m/Y',strtotime($date)); ?></h1><hr>
        <?php echo isset($msg)?$msg:"";?>
        <div class="row">

        <?php
        $timeArray = [];
        foreach ($bookings1 as $bat) {
            foreach ($bat as $b) {
                array_push($timeArray, $b->timeslot);
            }
            # code...
        }
        ?>
            <?php foreach($slots as $ts){?>


            <div class="col-md-2">
                <div class="form-group">

                    <?php if(in_array($ts,$timeArray)){?>
                        <button class="btn btn-danger"><?php echo $ts; ?><br>Booked</button>
                    <?php }else{ ?>
                        <button class="btn btn-success book" data-timeslot="<?php echo $ts; ?>"><?php echo $ts; ?></button>
                    <?php }?>

                </div>
            </div>

            <?php }?>

        </div>
    </div>
    <div id="myModal" class="modal fade" role="dialog">
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Booking: <span id="slot"></span></h4>
                </div>
                <div class='modal-body'>
                    <div class='row'>
                        <div class="col-md-12">
                            <form action="{{url('timeSlotSubmit')}}" >
                                <div class="form-group">
                                    <label for="">Timeslot</label>
                                    <input type="text" name="timeslot" id="timeslot" class="form-control" readonly required>
                                    <input type="hidden" name="date" id="date" value="<?php echo $date ?>">
                                    <input type="hidden" name="first_veterinarian" id="first_veterinarian" value="<?php echo $first_veterinarian ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="text" class="form-control" name="phone" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Reason for visit</label>
                                    <input type="text" class="form-control" name="reason" required>
                                </div>

                                <button class="btn btn-primary" type="submit" >Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class='modal-footer'>
                    <button type="button" class="close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(".book").click(function(){
            var timeslot= $(this).attr('data-timeslot');
            $("#slot").html(timeslot);
            $("#timeslot").val(timeslot);
            $("#myModal").modal("show");
        })
    </script>

</body>
</html>
@endsection('content')
