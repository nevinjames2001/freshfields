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
<form action="{{url('addPlants')}}/"  >
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="harvest" class="form-label">Harvest</label>
        <input type="text" class="form-control" id="harvest" name="harvest" required>
    </div>
    <div class="mb-3">
        <label for="Yield" class="form-label">Yield</label>
        <input type="text" class="form-control" id="yield" name="yield" required>
    </div>
    <div class="mb-3">
        <label for="irrigation" class="form-label">Irrigation</label>
        <input type="text" class="form-control" id="irrigation" name="irrigation" required>
    </div>
    <div class="mb-3">
        <label for="season" class="form-label">Season</label>
        <input type="text" class="form-control" id="season" name="season" required>
    </div>
    <div class="mb-3">
        <label for="preparation" class="form-label">Preparation: </label>
        <input type="text" class="form-control" id="preparation" name="preparation" required>
    </div>
    <div class="mb-3">
        <label for="cultivation" class="form-label">Cultivation: </label>
        <input type="text" class="form-control" id="cultivation" name="cultivation" required>
    </div>
    <div class="mb-3">
        <label for="pestManagement" class="form-label">Pest Management: </label>
        <input type="text" class="form-control" id="pestManagement" name="pestManagement" required>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Add Image:</label>
        <input type="text" class="form-control" id="image" name="image" required>
    </div>
    <button type="submit">Add Booking</button>
</form>
</div>
    </body>
    @endsection('content')
</html>

