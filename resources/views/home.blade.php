@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div><br><br>
            {{ Auth::user()->name }} <br>
            @if (Auth::user()->name == "admin")
            <a href="{{ url('/users') }}">Liste des utilisateurs</a>
            @else 
            <h1>connecter avec les coordonnées d'un admin pour afficher la liste des utilisateurs</h1>
            <br>
            
                <h2>email : admin@gmail.com <br>
            mot de passe : admin1234<h2>

            @endif
        </div>
        
    </div>
</div>



@endsection
