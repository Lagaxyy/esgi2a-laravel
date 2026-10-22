<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projects = [
        [
            'id' => 1,
            'title' => 'Portfolio ESGI',
            'description' => 'Mon site personnel pour présenter mes projets, construit avec Laravel et Tailwind.',
            'status' => 'en_cours',
        ],
        [
            'id' => 2,
            'title' => 'API météo',
            'description' => 'Une API REST qui agrège les prévisions de plusieurs services météo.',
            'status' => 'termine',
        ],
        [
            'id' => 3,
            'title' => 'Todo list',
            'description' => 'Un gestionnaire de tâches simple avec filtres et priorités.',
            'status' => 'termine',
        ],
        [
            'id' => 4,
            'title' => 'Blog de promo',
            'description' => 'Un blog partagé où chaque étudiant de la promo publie ses articles.',
            'status' => 'en_cours',
        ],
    ];

    return view('home', [
        'name' => 'Joffrey Persia',
        'competences' => ['Laravel', 'Blade', 'TailwindCSS'],
        'available' => true,
        'projects' => array_slice($projects, 0, 3),
    ]);
})->name('home');

Route::get('/about', function () {
    $faqs = [
        [
            'question' => 'Pourquoi Laravel ?',
            'answer' => 'Parce qu\'il fournit tout le nécessaire : routes, vues, base de données, sécurité.',
        ],
        [
            'question' => 'Quelles technologies utilisez-vous ?',
            'answer' => 'Laravel pour le back-end, Tailwind CSS pour le style, Alpine.js pour l\'interactivité.',
        ],
        [
            'question' => 'Êtes-vous disponible pour un stage ?',
            'answer' => 'Oui, contactez-moi via la page Contact.',
        ],
    ];

    return view('about', compact('faqs'));
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/projects', function () {
    $projects = [
        [
            'id' => 1,
            'title' => 'Portfolio ESGI',
            'description' => 'Mon site personnel pour présenter mes projets, construit avec Laravel et Tailwind.',
            'status' => 'en_cours',
        ],
        [
            'id' => 2,
            'title' => 'API météo',
            'description' => 'Une API REST qui agrège les prévisions de plusieurs services météo.',
            'status' => 'termine',
        ],
        [
            'id' => 3,
            'title' => 'Todo list',
            'description' => 'Un gestionnaire de tâches simple avec filtres et priorités.',
            'status' => 'termine',
        ],
        [
            'id' => 4,
            'title' => 'Blog de promo',
            'description' => 'Un blog partagé où chaque étudiant de la promo publie ses articles.',
            'status' => 'en_cours',
        ],
    ];

    return view('projects.index', compact('projects'));
})->name('projects.index');

Route::get('/projects/{id}', function (int $id) {
    $projects = [
        [
            'id' => 1,
            'title' => 'Portfolio ESGI',
            'description' => 'Mon site personnel pour présenter mes projets, construit avec Laravel et Tailwind.',
            'status' => 'en_cours',
        ],
        [
            'id' => 2,
            'title' => 'API météo',
            'description' => 'Une API REST qui agrège les prévisions de plusieurs services météo.',
            'status' => 'termine',
        ],
        [
            'id' => 3,
            'title' => 'Todo list',
            'description' => 'Un gestionnaire de tâches simple avec filtres et priorités.',
            'status' => 'termine',
        ],
        [
            'id' => 4,
            'title' => 'Blog de promo',
            'description' => 'Un blog partagé où chaque étudiant de la promo publie ses articles.',
            'status' => 'en_cours',
        ],
    ];

    foreach ($projects as $project) {
        if ($project['id'] === $id) {
            return view('projects.show', compact('project'));
        }
    }

    abort(404);
})->whereNumber('id')->name('projects.show');
