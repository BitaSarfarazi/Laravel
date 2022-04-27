@extends('layouts.boot')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Liste des Étudiants!</h1>
                        <!--<p>Liste des Étudiants</p>-->
                    </div>
                </div>
                <ul>
                    @forelse($posts as $post)
                        <li><a href="./show/{{ $post->id }}">{{$post->nom}}</a></li>
                    @empty
                        <li>Aucun article</li>
                    @endforelse
                </ul>
                <div class="col-4">
                        <p>Saisir un nouvel Etudiant</p>
                        <a href="{{ route('index.create') }}" class="btn btn-primary btn-sm">Ajouter</a>
                </div>
            </div>
        </div>
    </div>
@endsection