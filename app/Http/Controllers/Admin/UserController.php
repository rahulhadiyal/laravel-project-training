<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use App\Models\Admin;
use DataTables;

class UserController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Admin::select();
            return Datatables::of($data)   
                    ->addIndexColumn()
                    ->addColumn('image', function ($row) {
                                return '<img src="'.asset('images/'.$row->image).'" style=" width:200px; height:200px; " class="img-rounded" align="center" />';
                    })
                    ->addColumn('is_admin', function($row){
                            $btn = $row->is_admin == 1 ? '<a href="#" class="badge badge-success btn-sm mt-5">Admin</a>':'<a href="#" class="badge badge-secondary btn-sm">User</a>';
                            return $btn;
                    })
                    ->addColumn('action', function ($row) {
                            $x = '<div class="row">
                            <div class="col-md-6"><a href="'. route('admin.user.edit', $row->id) .'" class="mt-5 btn btn-primary"><i class="fas fa-cog"></i></a></div>
                            <div class="col-md-6"><form action="'. route('admin.user.destroy', $row->id) .'" method="POST">
                                    '.csrf_field().'
                                    '.method_field("DELETE").'
                                    <button type="submit" class="mt-5 btn btn-danger" onclick="return confirm(\'Are You Sure Want to Delete?\')"><i class="fas fa-trash"></i></a>
                                </form>
                            </div>
                            </div>';
                            return $x;
                    })

                    ->rawColumns(['image','is_admin','action'])
                    ->make(true);
        }

        return view('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->validate([
                    'name' => 'required|string',
                    'email' => 'required|email|unique:admins',
                    'image' => 'required|mimes:jpeg,png,bmp,gif|max: 50000',
                    'is_admin' => 'required'
                ]);
        $uploadImage = $request->file('image');
        $imageNameWithExt = $uploadImage->getClientOriginalName(); 
        $imageName =pathinfo($imageNameWithExt, PATHINFO_FILENAME);
        $imageExt=$uploadImage->getClientOriginalExtension();
        $storeImage=$imageName . "." . $imageExt;
        if(file_exists(public_path('images/'.$storeImage)))
        {
            return back();
        }
        $request->image->move(public_path('images'), $storeImage);
        Admin::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'image' => $storeImage,
                'is_admin' => $input['is_admin']]);
        return redirect()->route('admin.user.index');
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
        $destroy = Admin::find($id);
        if(file_exists(public_path('images/'.$destroy->image)))
        {
            \File::delete(public_path('images/'.$destroy->image));
        }
        $destroy->delete();
        return view('admin.user.index');
    }
}
