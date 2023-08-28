<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud_model;
use Session;

class CrudController extends Controller
{
    public function showData(){
        // $showData = Crud_model::all();
        // $showData = Crud_model::paginate(5);
        $showData = Crud_model::simplePaginate(5);

        return view('show_data', compact('showData'));
    }

    public function addData(){
        return view('add_data');
    }

    public function storeData(Request $request){
        $rules=[
            'name'=>'required|max:20',
            'email'=>'required|email'
        ];
        $this->validate($request, $rules);

        $crud = new Crud_model();
        $crud-> name = $request->name;
        $crud-> email = $request->email;
        $crud-> save();
        Session::flash('msg','Data sucessfully Added');
        return redirect('/');
    }

    public function editData($id=null){
        $editData = Crud_model::find($id);
        return view('edit_data', compact('editData'));
    }

    public function updateData(Request $request, $id){
        $rules=[
            'name'=>'required|max:20',
            'email'=>'required|email'
        ];
        $this->validate($request, $rules);

        $crud = Crud_model::find($id);
        $crud-> name = $request->name;
        $crud-> email = $request->email;
        $crud-> save();
        Session::flash('msg','Data sucessfully Updated');
        return redirect('/');
    }

    public function deleteData($id=null){
        $deleteData = Crud_model::find($id);
        $deleteData->delete();
        Session::flash('msg','Data sucessfully Deleted');
        return redirect('/');
    }
}
