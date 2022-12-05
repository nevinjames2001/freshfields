<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Plants Gallery</title>
    </head>
    @extends('main')
    @section('content')
    <body>

<div style="padding-left: 10%;padding-right:10%;">
<h1 class="text-center text-success">Plants Gallery</h1>
<form style="margin-left:80%;" type='get' action="{{url('/search')}}">
    <input type='search' placeholder='Search Plants' name='query' class='form=control text-right mr-sm-2'>
    <button type="submit">Search</button>
</form><br><br>
<!-- <table class="table table-primary">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Harvest</th>
            <th scope="col">Yield</th>
            <th scope="col">Irrigation</th>
            <th scope="col">Image</th>
        </tr>
    </thead> -->
    <div class="row">
@foreach ($rows as $p)
    <!-- <tr>
        <td>{{$p['name']}}</td>
        <td>{{$p['harvest']}}</td>
        <td>{{$p['yield']}}</td>
        <td>{{$p['irrigation']}}</td>
        <td><img src="{{$p['image']}}" alt="image"></td>
        <td><a href="{{url('deletePlants')}}/{{$p['id']}}">D</a></td>

    </tr>
    </table> -->

    <div class="card col-4 col-md-4 mb-4" style="width: 18rem;margin-top:20px;margin-left:20px;">
        <div class="bg-white rounded shadow-sm"><a href="{{url('viewPlant')}}/{{$p['id']}}/{{Auth::user()->id}}"><img src="{{$p['image']}}" alt="" class="img-fluid card-img-top"></a>
        <div class="p-4">
            <h5> <a href="#" class="text-dark text-center  text-l ">{{$p['name']}}</a></h5>
        </div>
        </div>
    </div>

@endforeach
</div>
<br>

</div>
    </body>
    @endsection('content')
</html>

