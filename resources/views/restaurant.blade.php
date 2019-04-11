@extends('layout')

@section('content')

    <div class="header">
        <h1>Le Chat Noir Bistro</h1>
    </div>

    <div class="row">
        <div class="leftcolumn">
            <div class="card container">
                <h2>Details</h2>
                <img class="miniImg" src="img/Binx.jpg" alt="Yawing cat named Binx">
                <br>
                <h4 class="centered"><strong>Location</strong></h4>
                <p class="centered">348 E. Main St, <br>
                    Lexington, KY</p>
                <br>
                <h4 class="centered"><strong>Hours</strong></h4>
                <p class="centered">Wednesday through Saturday</p>
                <p class="centered">Dinner Only: 5pm - 10pm</p>
                <p class="centered">Sunday Brunch and Dinner</p>
                <p class="centered">11am - 8pm</p>
            </div>
            <special-card :specialH2="'Le plat du jour'"></special-card>
        </div>

        <div class="rightcolumn">
            <div class="card container">
                <h2>Opening Soon</h2>
                <p>Il y a un film d'Elvis sur le panneau de sélection,
                    Nous avons tous vu au moins trois fois
                    Tout le monde est fauché, Bobby a un dollar
                    Mettez un dollar d'essence dans sa camionnette
                    Nous allons '90 milles à l'heure dans une impasse
                    Qu'est-ce qui est pressé, mon fils, où vas-tu aller?
                    On va hurler à la lune, tirer la lumière
                    C'est une petite ville samedi soir
                    C'est une petite ville samedi soir</p>
            </div>
            <accordion></accordion>
        </div>
    </div>
@endsection