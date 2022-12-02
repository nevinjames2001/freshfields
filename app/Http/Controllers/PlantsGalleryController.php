<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\PlantsGallery;
use App\Models\Comment;

class PlantsGalleryController extends Controller
{
    public function index()
    {
        $plants=PlantsGallery::all();

        return view('plants',['rows'=>$plants]);

    }
    public function addPlants(Request $req){

        $plantsAdd=new PlantsGallery;

        $plantsAdd->name=$req->name;
        $plantsAdd->harvest=$req->harvest;
        $plantsAdd->yield=$req->yield;
        $plantsAdd->irrigation=$req->irrigation;
        $plantsAdd->image=$req->image;
        $plantsAdd->season=$req->season;
        $plantsAdd->preparation=$req->preparation;
        $plantsAdd->cultivation=$req->cultivation;
        $plantsAdd->pestManagement=$req->pestManagement;


        $plantsAdd->save();
        return redirect('plants');

      }

      public function deletePlants($id){
        $data=PlantsGallery::find($id);
        $data->delete();
        return redirect('plants');
    }

    public function show($plant_id,$user_id){
        $id=PlantsGallery::find($plant_id);
        $commentData=Comment::where('plant_id',$plant_id)
                    ->where('user_id',$user_id)
                    ->get();
        $totalComment=Comment::where('plant_id',$plant_id)
                        ->get();
        // $commentData=$id;

        return view('plant',compact('id','commentData','totalComment'));
    }

    public function submitComment(Request $req){
        $addComment=new Comment();
        $addComment->plant_id = $req->plant_id;
        $addComment->user_id = $req->user_id;
        $addComment->comment = $req->comment;
        $addComment->flag = $req->flag;
        $addComment->save();
        return redirect('plants');
    }

    public function search(){
        $search_text = $_GET['query'];

        $plants = PlantsGallery::where('name','LIKE','%'.$search_text.'%')->get();
        return view('plants',['rows'=>$plants]);
    }


}
