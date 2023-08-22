<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Mechanic;
class MechanicsController extends Controller
{
    public function _construct()
    {
      $this->middleware('auth'); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $data = Mechanic::latest()->paginate(5);
        return view('admin.mechanics.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mechanics.create');
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
            'name'               =>  'required',
            'phone_number'       =>  'required',
            'email'              =>  'required',
            'speciality'        =>  'required',
            'location'           =>  'required',
            'image'         =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'name'                =>   $request->name,
            'phone_number'        =>   $request->phone_number,
            'email'                 =>   $request->email,
            'speciality'             =>   $request->speciality,
            'location'              =>   $request->location,
            'image'                  =>   $new_name
        );

        Mechanic::create($form_data);

        return redirect('Mechanic')->with('success', 'Data Added successfully.');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $data = Mechanic::findOrFail($id);
        return view('admin.mechanics.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Mechanic::findOrFail($id);
        return view('admin.mechanics.edit', compact('data'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'name'           =>  'required',
                'phone_number'   =>  'required',
                'email'          =>  'required',
                'speciality'     =>  'required',
                'location'       =>  'required',
                'image'          =>  'image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'name'           =>  'required',
                'phone_number'   =>  'required',
                'email'          =>  'required',
                'speciality'     =>  'required',
                'location'       =>  'required',
            ]);
            }

        $form_data = array(
            'name'                =>   $request->name,
            'phone_number'        =>   $request->phone_number,
            'email'                 =>   $request->email,
            'speciality'             =>   $request->speciality,
            'location'              =>   $request->location,
            'image'                  =>   $image_name
        );
  
        Mechanic::whereId($id)->update($form_data);

        return redirect('Mechanic')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $data = Mechanic::findOrFail($id);
        $data->delete();

        return redirect('Mechanic')->with('success', 'Data is successfully deleted');
    }
}
