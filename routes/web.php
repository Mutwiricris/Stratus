<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home page
Route::get('/', function () {
    return view('welcome');
})->name('home');

/*
|--------------------------------------------------------------------------
| Main Navigation Pages
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => ''], function () {
    Route::get('/about', function () {
        return view('pages.about');
    })->name('about');

    Route::get('/benefits', function () {
        return view('pages.benefits');
    })->name('benefits');

    Route::get('/platform', function () {
        return view('pages.platform');
    })->name('platform');

    Route::get('/culture', function () {
        return view('pages.culture');
    })->name('culture');

    Route::get('/portfolio', function () {
        return view('pages.portfolio');
    })->name('portfolio');

    Route::get('/insights', function () {
        return view('pages.insights');
    })->name('insights');

    Route::get('/contact', function () {
        return view('pages.contact');
    })->name('contact');

    // Contact form submissions using controller
    Route::post('/contact/message', [ContactController::class, 'submitMessage'])->name('contact.message');

    Route::post('/contact/call', [ContactController::class, 'submitCallRequest'])->name('contact.call');

    Route::post('/contact/form', [ContactController::class, 'submitContactForm'])->name('contact.form');
});

/*
|--------------------------------------------------------------------------
| Services Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'services'], function () {
    // Main services page
    Route::get('/', function () {
        return view('pages.services');
    })->name('services');

    // Individual service pages
    Route::get('/web-applications', function () {
        return view('pages.services.web-applications');
    })->name('services.web-applications');

    Route::get('/mobile-app-development', function () {
        return view('pages.services.mobile-app-development');
    })->name('services.mobile-app-development');

    Route::get('/digital-transformation', function () {
        return view('pages.services.digital-transformation');
    })->name('services.digital-transformation');

    Route::get('/dev-team-as-a-service', function () {
        return view('pages.services.custom-ecommerce-solutions');
    })->name('services.custom-ecommerce-solutions');

    Route::get('/ecommerce-solutions', function () {
        return view('pages.services.ecommerce-solutions');
    })->name('services.ecommerce-solutions');

    Route::get('/enterprise-software', function () {
        return view('pages.services.enterprise-software');
    })->name('services.enterprise-software');
});

/*
|--------------------------------------------------------------------------
| Products/Ventures Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'products'], function () {
    // Main products page
    Route::get('/', function () {
        return view('pages.products');
    })->name('products');

    // Individual product pages
    Route::get('/ascend-spa', function () {
        return view('pages.products.ascend-spa');
    })->name('products.ascend-spa');

    Route::get('/retail-pro', function () {
        return view('pages.products.retail-pro');
    })->name('products.retail-pro');

    Route::get('/pool-billiard', function () {
        return view('pages.products.pool-billiard');
    })->name('products.pool-billiard');

    Route::get('/tours-app', function () {
        return view('pages.products.tours-app');
    })->name('products.tours-app');

    Route::get('/events-pro', function () {
        return view('pages.products.events-pro');
    })->name('products.events-pro');

    Route::get('/agrismart', function () {
        return view('pages.products.agrismart');
    })->name('products.agrismart');

    Route::get('/logiflow', function () {
        return view('pages.products.logiflow');
    })->name('products.logiflow');
});

/*
|--------------------------------------------------------------------------
| Additional Pages
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => ''], function () {
    Route::get('/ventures', function () {
        return view('pages.ventures');
    })->name('ventures');

    Route::get('/careers', function () {
        return view('pages.careers');
    })->name('careers');

    Route::get('/solutions', function () {
        return view('pages.solutions');
    })->name('solutions');

    Route::get('/case-studies', function () {
        return view('pages.case-studies');
    })->name('case-studies');
});

/*
|--------------------------------------------------------------------------
| Blog/Insights Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'insights'], function () {
    // Individual blog post/insight detail page
    Route::get('/{slug}', function ($slug) {
        return view('pages.insights-detail', compact('slug'));
    })->name('insights.detail');
});

/*
|--------------------------------------------------------------------------
| API Routes for Dynamic Content
|--------------------------------------------------------------------------
*/
Route::prefix('api')->name('api.')->group(function () {
    // Ventures data endpoint
    Route::get('/ventures', function () {
        return response()->json([
            'ventures' => [
                ['id' => 1, 'name' => 'LogiFlow', 'sector' => 'Logistics', 'status' => 'Active'],
                ['id' => 2, 'name' => 'FinanceCore', 'sector' => 'FinTech', 'status' => 'Active'],
                ['id' => 3, 'name' => 'AgriSmart', 'sector' => 'AgriTech', 'status' => 'Active'],
                ['id' => 4, 'name' => 'EnergyGrid', 'sector' => 'Energy', 'status' => 'Active'],
            ]
        ]);
    })->name('ventures');

    // Services data endpoint
    Route::get('/services', function () {
        return response()->json([
            'services' => [
                ['id' => 1, 'name' => 'Web Applications', 'slug' => 'web-applications', 'category' => 'Development'],
                ['id' => 2, 'name' => 'Mobile App Development', 'slug' => 'mobile-app-development', 'category' => 'Development'],
                ['id' => 3, 'name' => 'Digital Transformation', 'slug' => 'digital-transformation', 'category' => 'Consulting'],
                ['id' => 4, 'name' => 'Dev Team as a Service', 'slug' => 'dev-team-as-a-service', 'category' => 'Staffing'],
                ['id' => 5, 'name' => 'E-Commerce Solutions', 'slug' => 'ecommerce-solutions', 'category' => 'Development'],
                ['id' => 6, 'name' => 'Enterprise Software', 'slug' => 'enterprise-software', 'category' => 'Enterprise'],
            ]
        ]);
    })->name('services');

    // Company stats endpoint
    Route::get('/stats', function () {
        return response()->json([
            'stats' => [
                ['label' => 'Projects Completed', 'value' => '1500+'],
                ['label' => 'Happy Clients', 'value' => '500+'],
                ['label' => 'Team Members', 'value' => '20+'],
                ['label' => 'Years Experience', 'value' => '3+'],
            ]
        ]);
    })->name('stats');
});

/*
|--------------------------------------------------------------------------
| Utility Routes
|--------------------------------------------------------------------------
*/
// Sitemap route
Route::get('/sitemap', function () {
    return response()->view('sitemap')->header('Content-Type', 'text/xml');
})->name('sitemap');

// Robots.txt route
Route::get('/robots.txt', function () {
    return response("User-agent: *\nDisallow:", 200, ['Content-Type' => 'text/plain']);
})->name('robots');

// Health check route
Route::get('/health', function () {
    return response()->json(['status' => 'ok', 'timestamp' => now()]);
})->name('health');

// Test contact forms route
Route::get('/test-contact', function () {
    return view('test-contact');
})->name('test-contact');

// Diagnostic route for checking admin credentials (REMOVE IN PRODUCTION!)
Route::get('/check-admin', function () {
    $user = \App\Models\User::where('email', 'admin@ascendstratus.com')->first();

    if (!$user) {
        return response()->json([
            'status' => 'error',
            'message' => 'Admin user not found',
        ], 404);
    }

    return response()->json([
        'status' => 'success',
        'user' => [
            'name' => $user->name,
            'email' => $user->email,
            'role' => $user->role,
            'status' => $user->status,
        ],
        'password_check' => \Illuminate\Support\Facades\Hash::check('password', $user->password) ? 'Valid ✅' : 'Invalid ❌',
        'can_access_panel' => $user->canAccessPanel(app('filament')->getPanel('stratus')) ? 'Yes ✅' : 'No ❌',
        'panel_url' => url('/stratus'),
        'login_url' => url('/stratus/login'),
        'instructions' => [
            '1. Visit ' . url('/stratus'),
            '2. Use email: admin@ascendstratus.com',
            '3. Use password: password',
            '4. Clear your browser cache if login fails',
            '5. Try incognito/private mode',
            '6. Check browser console for JavaScript errors',
        ],
        'troubleshooting' => [
            'If you see "403 Forbidden": Your user role is not admin/agent',
            'If password is wrong: Run "php artisan admin:create" to reset',
            'If page won\'t load: Clear cache with "php artisan optimize:clear"',
            'Still having issues: Check storage/logs/laravel.log for errors',
        ],
    ]);
})->name('check-admin');