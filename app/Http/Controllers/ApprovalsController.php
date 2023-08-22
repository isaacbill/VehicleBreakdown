<?php

namespace App\Http\Controllers;
use App\Models\Approval;
use Illuminate\Http\Request;
use\DB;
class ApprovalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = Approval::latest()->paginate(5);
        return view('approvals.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('approvals.create');
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
            'mechanicname'    =>  'required',
            'status'     =>  'required',
        ]);

        $form_data = array(
            'mechanicname'       =>   $request->mechanicname,
            'status'        =>   $request->status,
        );

        Approval::create($form_data);

        return redirect('home')->with('success', 'Data Updated successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Approval::findOrFail($id);
        return view('approvals.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data = Approval::findOrFail($id);
        return view('approvals.edit', compact('data'));
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
        $data = Approval::findOrFail($id);
        $data->delete();

        return redirect('Approval')->with('success', 'Data is successfully deleted');
    }
    public function getMechanics()
   {
    $mechanics = DB::table('mechanics')->pluck("name","id"); 
    return view('Approval.create',compact('mechanics'));
}
}
