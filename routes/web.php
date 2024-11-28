<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/nav', function () {
    return view('layouts.nav-dash');
});

Route::middleware(['auth', 'user','verified'])->group(function () {

    // Route::get('/dashboard', [HomeController::class, 'userDash']);

    Route::get('/dashboard', function () {
        return view('layouts.dash-nav-user');
    })->name('dashboard');

    // Route::get('/dashboard', function () {
    //     return view('user-dashboard.dashboard');
    // })->name('dashboard');

    // FOR TESTING ONLY
    Route::get('/testing', function () {
        return view('user.test');
    })->name('testing');

    // DASHBOARD'S ROUTES
    Route::get('/dashboard/daily-tasks', function () {
        return view('user-dashboard.daily-tasks');
    })->name('user-daily-tasks');
    Route::get('/dashboard/earnings', function () {
        return view('user-dashboard.earnings');
    })->name('user-earnings');
    Route::get('/dashboard/withdraw-history', function () {
        return view('user-dashboard.withdraw-history');
    })->name('user-withdraw-history');
    Route::get('/dashboard/broadcast', function () {
        return view('user-dashboard.broadcast');
    })->name('user-broadcast');
    Route::get('/dashboard/packages', function () {
        return view('user-dashboard.packages');
    })->name('user-packages');
    Route::get('/dashboard/invite', function () {
        return view('user-dashboard.invite');
    })->name('user-invite');
    Route::get('/dashboard/ask', function () {
        return view('user-dashboard.ask');
    })->name('user-ask');
    Route::get('/dashboard/promo', function () {
        return view('user-dashboard.promo');
    })->name('user-promo');
    Route::get('/dashboard/shop', function () {
        return view('user-dashboard.shop');
    })->name('user-shop');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index']);

    // DASHBOARD'S ROUTES
    Route::get('/dashboard/daily-tasks', function () {
        return view('dashboard.daily-tasks');
    });
    Route::get('/dashboard/earnings', function () {
        return view('dashboard.earnings');
    });
    Route::get('/dashboard/withdraw-history', function () {
        return view('dashboard.withdraw-history');
    });
    Route::get('/dashboard/broadcast', function () {
        return view('dashboard.broadcast');
    });
    Route::get('/dashboard/packages', function () {
        return view('dashboard.packages');
    });
    Route::get('/dashboard/invite', function () {
        return view('dashboard.invite');
    });
    Route::get('/dashboard/ask', function () {
        return view('dashboard.ask');
    });
    Route::get('/dashboard/promo', function () {
        return view('dashboard.promo');
    });
    Route::get('/dashboard/shop', function () {
        return view('dashboard.shop');
    });
});
