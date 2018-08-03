<?php

namespace App\Http\Controllers;

use DB;
use AUth;
use App\HajjRequest;
use App\Batch;
use App\Hajj;
use Illuminate\Http\Request;

class RequestController extends Controller
{

	/**
      * Display a listing of the resource.
      *
      * @return Response
      */


     public function dashboard()
     {
         $requests = HajjRequest::where('status', 'processing')->where('plannedStartTime', '12:00:00')->where('plannedStartDate', '2018-08-03')->get();
         $totalNow = 0;
         foreach ($requests as $key => $request) {
         	$Batch = Batch::where('request_id', $request->id)->get();
         	
         	if(count($Batch) > 0){
         		$batchData = [];
	         	foreach ($Batch as $key => $onebatch) {
	         		$hajj = Hajj::find($onebatch->hajj_id);
	         		$country[$hajj->PASSPORT_ISSUE_PLA][] = 1;
	         		$gender[$hajj->GENDER][]  = 1;
	         		if($hajj->AGE >= 20 && $hajj->AGE < 40){
						$age[20][] = 1;
	         		}elseif ($hajj->AGE >= 40 && $hajj->AGE < 50) {
	         			$age[40][] = 1;
	         		}elseif ($hajj->AGE >= 50 ) {
	         			$age[50][] = 1;
	         		}
	         		$totalNow = $totalNow + 1;
		    	}
         	}
         }
         return view('layouts.portal.dashboard', compact('country', 'totalNow', 'gender', 'age') );
     }


     public function index()
     {
         $requests = HajjRequest::latest('id')->get();
         return view('layouts.portal.requests.index', compact('requests') );
     }

    public function getCreate(){
    	return view('layouts.portal.requests.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function postCreate(Request $request){
        $create_Request = HajjRequest::create($request->all());

        if( $create_Request ){
            return redirect('portal/requests')->with('success', 'تم إدخال طلب بنجاح');
        }
        return redirect('portal/requests/create')->with('error', 'نأسف حدث عطل، من فضلك حاول مره أخرى');
    }

    public function registerToPatch($requestId, $hajjId){
    	$hajj = Hajj::find($hajjId);
    	$request = HajjRequest::find($requestId);
    	$actualNumber = $request->actualNumber + 1;
    	$create = Batch::create(['hajj_id' => $hajjId, 'request_id' => $requestId]);

        if( $create != null){
    		$update = HajjRequest::where('id', $request->id)->update(['actualNumber' => $actualNumber]);
            return redirect('portal/success')->with('success', 'تم إضافة '. $hajj->FIRSTNAME .' للرحلة المتجهة إلي  '. $request->destination .' الساعة '. $request->plannedStartTime);
        }
        return redirect('portal/requests/create')->with('error', 'نأسف حدث عطل، من فضلك حاول مره أخرى');
    }

    public function requestShow($requestId){
    	$request = HajjRequest::find($requestId);
    	$requestData = $request->toArray();
    	$Batch = Batch::where('request_id', $requestId)->get();
    	$batchData = [];
    	foreach ($Batch as $key => $hajj) {
    		$batchData[$hajj->hajj_id] = Hajj::find($hajj->hajj_id);
    	}
        return view('layouts.portal.requests.details', compact('request', 'batchData'));
    }


    public function addcordinator($requestId){
    	$request = HajjRequest::find($requestId);
    	$assigned = DB::table('coordinators')->insert(['number' => $request->actualNumber, 'service_location' => $request->destination, 'request_id' => $request->id, 'status' => 'processing', 'user_id' => Auth::user()->id]);
    	$update = HajjRequest::where('id', $request->id)->update(['status' => 'processing']);
    	if( $assigned ){
    		// $update = HajjRequest::where('id', $request->id)->update(['actualNumber' => $actualNumber]);
            return redirect('portal/success')->with('success', 'تم إستلام الحجاج');
        }
        return view('layouts.portal.requests.show', compact('request'));
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        return view('admin.organizations.dashboard');
    }



}