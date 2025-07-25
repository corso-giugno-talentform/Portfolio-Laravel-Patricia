<?php

use Illuminate\Support\Facades\Route;

//vista home
Route::get('/', function () {
    return view('welcome');
});


//vista resume
Route::get('resume', function () {
    return view('resume');
});

//vista contacts
Route::get('contacts', function () {
    return view('contacts');
});

//vista progetti
Route::get('progetti', function () {
        $progetti = [
        [
            'nome' => 'Ombre di santorini',
            'descrizione' => 'Un viaggio visivo tra le cupole bianche e blu di Santorini, dove l’architettura cicladica incontra la luce mediterranea.',
             'urlview' =>  './ombre',
            'url' => './images/project1.jpg'
        ],
        [
            'nome' => 'Guardiano del Tempo',
            'descrizione' => 'Un faro solitario che sfida il vento e le nuvole: simbolo di resistenza e memoria, catturato in bianco e nero.',
            'urlview' => './faro',
            'url' => './images/project2.jpg'
        ],
        [
            'nome' => 'Silenzio sul Lago',
            'descrizione' => 'Una scena tranquilla tra le canne, il lago e le montagne al tramonto. Un invito alla calma e alla contemplazione.',
            'urlview' => './lago',
            'url' => './images/project3.jpg'
        ],
    ];

    return view(
        'progetti',
        [
            'progetti' => $progetti,
        ]);
});

//vista progetti ombre
Route::get('ombre', function () {
    return view('ombre');
});

//vista progetti faro
Route::get('faro', function () {
    return view('faro');
});

//vista progetti lago
Route::get('lago', function () {
    return view('lago');
});

/*
Route::get('/', function () {
    $dati = ['IU/UX Design', 'Front-End Developer', 'Graphic Design'];
    return view('welcome', ['dati' => $dati]);
});*/

//vista home
Route::get('/', function () {
    $dati = ['IU/UX Design', 'Front-End Developer', 'Graphic Design'];
    $projects = [
        [
            'nome' => 'ecommerce-platform',
            'descrizione' => 'Una piattaforma per vendere prodotti online con pagamento integrato.'
        ],
        [
            'nome' => 'task-app',
            'descrizione' => 'Un’app per organizzare e monitorare le attività giornaliere.'
        ],
        [
            'nome' => 'Software gestionali',
            'descrizione' => 'Strumenti per automatizzare la contabilità e la gestione aziendale.'
        ],
];

    return view(
        'welcome',
        [
            'dati' => $dati,
            'projects' => $projects
        ]);
    }

);


Route::get('/lago', function () {
    $dati = ['UI/UX Design', 'Front-End Developer', 'Graphic Design'];
    

    return view(
        'lago',
        [
            'dati' => $dati,
        ]);
    }

);