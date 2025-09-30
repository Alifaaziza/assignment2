<?php

use Illuminate\Support\Facades\Route;

// ✅ ROUTE GROUP untuk semua pages
Route::prefix('pages')->group(function () {
    
    // ✅ Home page
    Route::get('/home', function () {
        return "<h1>Home Page</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>";
    });
    
    // ✅ About page dengan PARAMETER - FIXED! TANPA CONTROLLER
    Route::get('/about/{id?}', function ($id = null) {
        if ($id) {
            return "<h1>About Page - Section $id</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>";
        }
        return "<h1>About Page</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>";
    });
    
    // ✅ Program page - FIXED! TANPA CONTROLLER
    Route::get('/program', function () {
        return "<h1>Program Page</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>";
    });
    
    // ✅ Our Team page  
    Route::get('/our-team', function () {
        return "<h1>Our Team Page</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>";
    });
    
    // ✅ Contact Us page
    Route::get('/contact-us', function () {
        return "<h1>Contact Us Page</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>";
    });
});

// ✅ REDIRECT dari root ke home
Route::redirect('/', '/pages/home');

// ✅ FALLBACK route
Route::fallback(function () {
    return "<h1>404 - Page Not Found</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>";
});