<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [NoteController::class, 'index'])->name('note.index');
    Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
    Route::post('/note', [NoteController::class, 'store'])->name('note.store');
    Route::get('/note/{id}', [NoteController::class, 'show'])->name('note.show');
    Route::get('/note/{id}/edit', [NoteController::class, 'edit'])->name('note.edit');
    Route::put('/note/{id}', [NoteController::class, 'update'])->name('note.update');
    Route::delete('/note/{id}', [NoteController::class, 'destroy'])->name('note.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    // Route::get('/', function () {
    //     return view('home');
    // });

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    Route::get('/jobs', function () {
        return view('jobs', [
            'jobs' => [
                [
                    'id' => 1,
                    'title' => 'Director',
                    'salary' => '$50,000'
                ],
                [
                    'id' => 2,
                    'title' => 'Programmer',
                    'salary' => '$10,000'
                ],
                [
                    'id' => 3,
                    'title' => 'Teacher',
                    'salary' => '$40,000'
                ]
            ]
        ]);
    })->name('jobs');

    Route::get('/jobs/{id}', function ($id) {
        $jobs = [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$10,000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$40,000'
            ]
        ];

        $job = Arr::first($jobs, fn ($job) => $job['id'] == $id);

        return view('job', ['job' => $job]);
    })->name('job');
});

// Include auth routes from auth.php
require __DIR__ . '/auth.php';
