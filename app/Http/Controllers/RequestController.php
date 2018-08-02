<?php

namespace App\Http\Controllers;

use App\HajjRequest;
use Illuminate\Http\Request;

class RequestController extends Controller
{

	/**
      * Display a listing of the resource.
      *
      * @return Response
      */
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
    public function postCreate(Request $request)
    {
        $create_Request = HajjRequest::create($request->all());

        if( $create_Request ){
            return redirect('portal/requests')->with('success', 'تم إدخال طلب بنجاح');
        }
        return redirect('portal/requests/create')->with('error', 'نأسف حدث عطل، من فضلك حاول مره أخرى');
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