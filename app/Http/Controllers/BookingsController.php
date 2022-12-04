<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookings;
use App\Models\User;
use App\Models\PlantsGallery;
use App\Models\Veterinarian;
use DateTime;
use DateInterval;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $month=now()->month;

        $data=Veterinarian::all();

        $veterinarians='';
        $veterinarians.='<option>Select Doctor</option>';
        $first_veterinarian=0;
        $i=0;

        if($i=0){
            $first_veterinarian=$data['veterinarian_id'];
        }

        $date="2022-10-26";
        $data2=Bookings::where('date',$date)
                ->where('veterinarian_id',$first_veterinarian)
                ->get();

        return view('bookings',compact('first_veterinarian','data','month','data2'));


    }

    public static function checkSlots($date,$first_veterinarian){

        $totalbookings=Bookings::where('date',$date)
                ->where('veterinarian_id',$first_veterinarian)
                ->get();
        $totalbookings=count($totalbookings);
        // $totalbookings=1;

        return $totalbookings;
    }





    public function dateBook($date,$first_veterinarian){

        $bookings1=array();

        //Need work
        $bookings1[]=Bookings::where('date',$date)
                ->where('veterinarian_id',$first_veterinarian)
                ->get();


        $duration=60;
        $cleanup = 0;
        $start="09:00";
        $end="17:00";

        $start=new DateTime($start);
        $end=new DateTime($end);
        $interval=new DateInterval("PT".$duration."M");
        $cleanupInterval=new DateInterval("PT".$cleanup."M");
        $slots=array();

        for($intStart=$start;$intStart<$end;$intStart -> add($interval) ->add($cleanupInterval)){
            $endPeriod =clone $intStart;
            $endPeriod->add($interval);
            if($endPeriod>$end){
                break;
            }
            $slots[]=$intStart->format("H:iA")."-".$endPeriod->format("H:iA");
        }

        return view('book',compact('date','first_veterinarian','bookings1','duration','cleanup','start','end','slots'));
    }


    public function timeSlot(Request $request){

        $bookConfirm=new Bookings();
        $bookConfirm->timeslot=$request->timeslot;
        $bookConfirm->date=$request->date;
        $bookConfirm->name=$request->name;
        $bookConfirm->email=$request->email;
        $bookConfirm->phone=$request->phone;
        $bookConfirm->veterinarian_id=$request->first_veterinarian;
        $bookConfirm->reason=$request->reason;
        $bookConfirm->save();

        return redirect('/bookings');
    }

    public function bookingDisplay(){
        $duration=60;
        $cleanup = 0;
        $start="09:00";
        $end="17:00";

        $start=new DateTime($start);
        $end=new DateTime($end);
        $interval=new DateInterval("PT".$duration."M");
        $cleanupInterval=new DateInterval("PT".$cleanup."M");
        $slot=array();

        for($intStart=$start;$intStart<$end;$intStart -> add($interval) ->add($cleanupInterval)){
            $endPeriod =clone $intStart;
            $endPeriod->add($interval);
            if($endPeriod>$end){
                break;
            }
            $slot[]=$intStart->format("H:iA")."-".$endPeriod->format("H:iA");
        }

        return view('handleDoctor',compact('slot','duration'));
    }

    public function appointments($veterinarian_id){

        $appointments=Bookings::where('veterinarian_id',$veterinarian_id)
                    ->orderBy('date','ASC')
                    ->orderBy('timeslot','ASC')
                    ->get();
        return $appointments;
    }

    public function bookOff(Request $request){
        $bookConfirm=new Bookings();

        $bookConfirm->timeslot=$request->timeslot;
        $bookConfirm->date=$request->date;
        $bookConfirm->name=$request->name;
        $bookConfirm->email=$request->email;
        $bookConfirm->phone=$request->phone;
        $bookConfirm->veterinarian_id=$request->veterinarian_id;
        $bookConfirm->reason=$request->reason;

        $bookConfirm->save();

        $duration=60;
        $cleanup = 0;
        $start="09:00";
        $end="17:00";

        $start=new DateTime($start);
        $end=new DateTime($end);
        $interval=new DateInterval("PT".$duration."M");
        $cleanupInterval=new DateInterval("PT".$cleanup."M");
        $slot=array();

        for($intStart=$start;$intStart<$end;$intStart -> add($interval) ->add($cleanupInterval)){
            $endPeriod =clone $intStart;
            $endPeriod->add($interval);
            if($endPeriod>$end){
                break;
            }
            $slot[]=$intStart->format("H:iA")."-".$endPeriod->format("H:iA");
        }

        return view('handleDoctor',compact('slot','duration'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addAnimals(Request $req)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
