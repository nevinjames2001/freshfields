@extends('main')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Comment</th>
                            <th>Plant id</th>
                            <th>Flag</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                @foreach ($allComments as $a)
                    <tr>
                        <td>{{$a['id']}}</td>
                        <td>{{$a['comment']}}</td>
                        <td>{{$a['plant_id']}}</td>
                        <td>{{$a['flag']=="1" ? 'Yes' : 'No'}}</td>
                        <td><a href="{{url('deleteComment')}}/{{$a['id']}}">D</a></td>
                    </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
