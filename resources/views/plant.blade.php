<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Plant</title>
        <style>
            .page{
                margin-left: 20%;
            }
            .section{
                text-align: left;
                margin-left: 20%;
            }
            .commentSection{
                text-align: left;

            }
        </style>


    </head>
    @extends('main')
    @section('content')
    <body >

        <header>
        </header>
        <main>
            <h1 class="text-center font-weight-bold display-2 text-success" >{{$id->name}}</h1>

         <br><br><br>

        <div class="container text-center">
            <div class="row page">
                <div class="col">
                    <img src="{{$id->image}}" alt="image of crop" class="rounded float-left img-thumbnail bg-success" style="width:50%;height:200px;">
                </div>
                <div class="col">
                    <div class="section">
                        <h4>Season & Planting</h4>
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg> &nbsp;&nbsp;&nbsp;{{$id->season}}</p>
                    </div>
                    <div class="section">
                        <h4>Preparation of field</h4>
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg> &nbsp;&nbsp;&nbsp;{{$id->preparation}}</p>
                    </div>
                    <div class="section">
                        <h4>Irrigation</h4>
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg> &nbsp;&nbsp;&nbsp;{{$id->irrigation}}</p>
                    </div>
                </div>
            </div>
            <div class="row page">
                <div class="col">
                    <div class="section">
                        <h4>Harvest</h4>
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg> &nbsp;&nbsp;&nbsp;{{$id->harvest}}</p>
                    </div>
                    <div class="section">
                        <h4>Yield</h4>
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg> &nbsp;&nbsp;&nbsp;{{$id->yield}}</p>
                    </div>
                </div>
                <div class="col">
                    <div class="section">
                        <h4>After Cultivation</h4>
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg> &nbsp;&nbsp;&nbsp;{{$id->cultivation}}</p>
                    </div>
                    <div class="section">
                        <h4>Pest Management</h4>
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg> &nbsp;&nbsp;&nbsp;{{$id->pestManagement}}</p>
                    </div>
                </div>
            </div>
            <div class="row page">
            <h4>Comments</h3>
            @if(count($commentData)==0)
                <form action="{{url('submitComments')}}/">
                    <input type="text" class="w-100" placeholder="Leave your comments...." name="comment" id="comment" >
                    <input type="hidden" name="plant_id" id="plant_id" value="{{$id->id}}">
                    <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="flag" id="flag" value="1"><br/><br/>
                    <button type="submit">+ Add your suggestions/thoughts</button>
                </form>
            @endif
            @foreach($commentData as $c)
                <input type="text" placeholder="Leave your comments...." name="comments" id="comments" value="{{$c['comment']}}"><br><br>
                <button type="submit">+ Add your suggestions/thoughts</button>
            @endforeach<br><br>
            @foreach($totalComment as $t)
                <p class="commentSection"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                </svg>&nbsp;&nbsp;{{$t['comment']}}</p>
            @endforeach
            </div>
        </div>
        </main>
        <footer>
        </footer>
    </body>
</html>
@endsection('content')
