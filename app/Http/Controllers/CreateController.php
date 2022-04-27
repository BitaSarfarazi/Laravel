<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Ville;
use Illuminate\Http\Request;


class CreateController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $posts = Etudiant::all();
        return view('profile.index', ['posts'=>$posts]); //tableau avec json
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Ville::all();
        return view('profile.create', ['posts'=>$posts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //stocker la donne
    {
        //return $request;

        $newPost = Etudiant::create([
           'nom' => $request->nom,
           'adresse' => $request->adresse,
           'phone' => $request->phone,
           'email' => $request->email,
           'dateNaissance' => $request->dateNaissance,
           'ville_id' => 831



        ]);

        return redirect('show/'.$newPost->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $show
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $show)
    {
        return view ('profile.show', ['post'=>$show]);
    }












}