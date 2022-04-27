@extends('layouts.boot')
@section('content') 

    <div class="container"> 
        <div class="row"> 
            <div class="col-12 text-center pt-5"> 
                <h1 class="display-one mt-5">{{ config('app.name') }}</h1> 
                <h3 class="display-one mt-5">Portail Étudiant</h3>
                <br>
                <p>Pour voir la liste des étudiants , cliquez sur le bouton ci - dessous </p> 
                <br> <a href="{{ route('index') }}" class="btn btn-info">Afficher les Etudiant</a> 
            </div> 
        </div> 
    </div>

    

@endsection