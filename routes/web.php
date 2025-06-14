<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DocumentTypeController;
use App\Http\Controllers\MemberControllers;
use App\Http\Controllers\DocumentsController;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');



Route::middleware(['auth','verified'])->group(function(){
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');



    Route::get('/testing',function(){
        return Inertia::render('Testing');
    })->name('testing');

    Route::get('learning',function(){
        // sleep(2);
        $user = Auth::user();
        return Inertia::render('Index',[
            'frameworks' => ['Laravel','Vue','Inertia'],
            // human readable time
            'time' => \Carbon\Carbon::now()->timezone('Asia/Manila')->format('F j, Y g:i A'),
        ]);
    })->name('learning');

    Route::post('testing_logout',function(){
        dd(request()->all());
    })->name('testing_logout');

    Route::get('members',[MemberControllers::class,'index'])->name('members');

    Route::get('/documents',[DocumentsController::class,'index'])->name('documents');

    Route::get('/document_type',[DocumentTypeController::class,'index'])->name('document_type');
    Route::get('/create_document_type',[DocumentTypeController::class,'create'])->name('create_document_type');
    Route::post('/store_document_type',[DocumentTypeController::class,'store'])->name('store_document_type');
    
    Route::get('/view_member/{user}',[MemberControllers::class,'viewMember'])->name('view_member');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
