<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filiere;
use App\Models\Ecole;

class AdminController extends Controller
{
    public function view_filiere()
    {
        $data=filiere::all();
        return view('admin.filiere', compact('data'));
    }

    public function add_filiere(Request $request)
    {
        $data= new filiere;

        $data->nom=$request->nom;
        $data->desc=$request->desc;
        $data->debouche=$request->debouche;
        $data->save();

        return redirect()->back()->with('message','Filiere Added Successfully');

    }

    public function delete_filiere($id)
    {
        $data=filiere::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function view_ecole()
    {
        $filiere=filiere::all();
        return view('admin.ecole', compact('filiere'));
    }

    public function add_ecole(Request $request)
    {
        $ecole= new ecole;

        $ecole->nom=$request->nom;
        $ecole->email=$request->email;
        $ecole->tel=$request->tel;
        $ecole->address=$request->address;
        $ecole->bio=$request->bio;
        
        $ecole->filiere=$request->filiere;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('ecole', $imagename); 
        $ecole->image=$imagename;

        $ecole->save();

        return redirect()->back();

    }
    public function show_ecole()
    {
        $ecole=ecole::all();
        return view('admin.show_ecole', compact('ecole'));
    }
    public function show_filiere()
    {
        $filiere=filiere::all();
        return view('admin.show_filiere', compact('filiere'));
    }

    public function delete_ecole($id)
    {
        $ecole=ecole::find($id);
        $ecole->delete();
        return redirect()->back();
    }

    public function update_ecole($id)
    {
        $ecole=ecole::find($id);
        $filiere=filiere::all();
        return view('admin.update_ecole', compact('ecole', 'filiere'));
    }

    public function update_filiere($id)
    {
        $filiere=filiere::find($id);
        return view('admin.update_filiere', compact('filiere'));
    }

    public function update_ecole_confirm(Request $request, $id)
    {
        $ecole=ecole::find($id);
        $ecole->nom=$request->nom;
        $ecole->email=$request->email;
        $ecole->tel=$request->tel;
        $ecole->address=$request->address;
        $ecole->bio=$request->bio;
        $ecole->filiere=$request->filiere;

        $image=$request->image;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('ecole', $imagename); 
            $ecole->image=$imagename;
        }
        

        $ecole->save();

        return redirect()->back();

    }

    public function update_filiere_confirm(Request $request, $id)
    {
        $filiere=filiere::find($id);
        $filiere->nom=$request->nom;
        $filiere->desc=$request->desc;
        $filiere->debouche=$request->debouche;

        $filiere->save();

        return redirect()->back();

    }

    public function searchdata(Request $request)
    {
        $searchText=$request->search;
        $ecole=ecole::where('nom','LIKE',"%$searchText%")->get();

        return view('admin.show_ecole', compact('ecole'));
    }
}
