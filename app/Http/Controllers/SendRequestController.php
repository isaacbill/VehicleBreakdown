<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SendRequest;
use DB;
class SendRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = SendRequest::latest()->paginate(5);
        return view('index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('request');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'pickup_location' => 'required',
            'pickup_date' => 'required|after:today',
            'pickup_time' => 'required'
        ]);

        
        $form_data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'pickup_location' => $request->pickup_location,
            'pickup_date' => $request->pickup_date,
            'pickup_time' => $request->pickup_time
        );

       SendRequest::create($form_data);

        return redirect('home')->with('success', 'Your vehicle breakdown assistance has been booked successfully!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $data = SendRequest::findOrFail($id);
        return view('view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $data = SendRequest::findOrFail($id);
        return view('edit', compact('data'));
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
         $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'pickup_location' => 'required',
            'pickup_date' => 'required',
            'pickup_time' => 'required'
                
            ]);

        $form_data = array(
             'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'pickup_location' => $request->pickup_location,
            'pickup_date' => $request->pickup_date,
            'pickup_time' => $request->pickup_time
            
        );
  
        SendRequest::whereId($id)->update($form_data);

        return redirect('SendRequest')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $data = SendRequest::findOrFail($id);
        $data->delete();

        return redirect('SendRequest')->with('success', 'Data is successfully deleted');
    }

   // public function getMechanics()
   // {
    //$mechanics = DB::table('mechanics')->pluck("name","id"); 
   // return view('index',compact('mechanics'));

   // }
}
