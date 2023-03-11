<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Filiere;
use App\Models\Ecole;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){
        $filiere=Filiere::all();
        $ecole=Ecole::paginate(3);
        return view('home.userpage', compact('filiere', 'ecole'));
    }
    
    public function userpage(){
        $filiere=Filiere::all();
        $ecole=Ecole::paginate(3);
        return view('home.userpage', compact('filiere', 'ecole'));
    }
    
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if ($usertype== 1) {
            return view('admin.home');
        }else {
            $filiere=Filiere::all();
            $ecole=Ecole::paginate(3);
            return view('home.userpage', compact('filiere', 'ecole'));
        }
    }

    public function about()
    {
        $total_ecoles = ecole::all()->count();
        $total_filieres = filiere::all()->count();
        $total_users = user::all()->count();
        return view('home.about', compact('total_ecoles', 'total_filieres', 'total_users'));
    }

    public function dossier()
    {
        return view('home.dossier');
    }

    public function filiere()
    {
        $filiere=Filiere::all();
        $ecole=Ecole::all();
        return view('home.filiere', compact('filiere', 'ecole'));
    }

    public function filiere_single($id)
    {
        $filiere=Filiere::find($id);
        $ecole=Ecole::find($id);
        return view('home.filiere-single', compact('filiere', 'ecole'));
    }

    public function ecoles()
    {
        $filiere=Filiere::all();
        $ecole=Ecole::paginate(3);
        return view('home.ecoles', compact('filiere', 'ecole'));
    }

    public function ecoles_single($id)
    {
        $filiere=Filiere::find($id);
        $ecole=Ecole::find($id);
        $ecoles=Ecole::all();
        $filieres=Filiere::all();
        return view('home.ecoles-single', compact('filiere', 'ecole', 'ecoles', 'filieres'));
    }

    public function search_all(Request $request)
    {
        $search_Text=$request->search;
        $ecole=ecole::where('nom','LIKE',"%$search_Text%")->get();
        $filiere=filiere::where('nom','LIKE',"%$search_Text%")->get();

        return view('home.userpage', compact('ecole', 'filiere'));
    }



    public function create()
    {
        if(Auth::id()){
            return view('home.email');
        }else{
            return redirect('login');
        }
        
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'email' => 'required|email',
          'subject' => 'required',
          'name' => 'required',
          'content' => 'required',
        ]);

        $data = [
          'subject' => $request->subject,
          'name' => $request->name,
          'email' => $request->email,
          'content' => $request->content
        ];

        $files = [
            public_path('attachement/nbm.zip')
        ];

        Mail::send('home.email-template', $data, function($message) use ($data, $files) {
          $message->to($data['email'])
          ->subject($data['subject']);
          foreach ($files as $file) {
            $message->attach($file);
          }
        });

        return back()->with(['message' => 'Email successfully sent!']);
    }
}
