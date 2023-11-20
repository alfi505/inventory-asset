<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//admin
Route::get('/login', function () {
    return view('main.auth.auth-login');
});

// navbar dashboard
Route::get('/dashboard-admin', function () {
    return view('main.home.dashboard-admin', ['type_menu' => 'dashboard']);
});
Route::get('/inventory-asset', function () {
    return view('main.home.inventory-asset', ['type_menu' => 'dashboard']);
});
Route::get('/pic', function () {
    return view('main.home.pic', ['type_menu' => 'dashboard']);
});

// inventory
Route::get('/inventory-cpu', function () {
    return view('main.inventory.inventory-cpu', ['type_menu'=> 'inventory']);
});
Route::get('/detail-cpu', function () {
    return view('main.inventory.detail-cpu', ['type_menu'=> 'inventory']);
});
Route::get('/tambah-cpu', function () {
    return view('main.inventory.tambah-cpu', ['type_menu'=> 'inventory']);
});
Route::get('/inventory-monitor', function () {
    return view('main.inventory.inventory-monitor', ['type_menu'=> 'inventory']);
});
Route::get('/tambah-monitor', function () {
    return view('main.inventory.tambah-monitor', ['type_menu'=> 'inventory']);
});
Route::get('/detail-monitor', function () {
    return view('main.inventory.detail-monitor', ['type_menu'=> 'inventory']);
});
Route::get('/inventory-keyboard', function () {
    return view('main.inventory.inventory-keyboard', ['type_menu'=> 'inventory']);
});
Route::get('/inventory-mouse', function () {
    return view('main.inventory.inventory-mouse', ['type_menu'=> 'inventory']);
});
Route::get('/inventory-printer', function () {
    return view('main.inventory.inventory-printer', ['type_menu'=> 'inventory']);
});
Route::get('/inventory-speaker', function () {
    return view('main.inventory.inventory-speaker', ['type_menu'=> 'inventory']);
});
Route::get('/inventory-network', function () {
    return view('main.inventory.inventory-network', ['type_menu'=> 'inventory']);
});

// pic
Route::get('/data-pic', function () {
    return view('main.pic.data-pic', ['type_menu' => 'pic']);
});
Route::get('/tambah-pic', function () {
    return view('main.pic.tambah-pic', ['type_menu' => 'pic']);
});
Route::get('/detail-pic', function () {
    return view('main.pic.detail-pic', ['type_menu' => 'pic']);
});
Route::get('/data-ip', function () {
    return view('main.pic.data-ip', ['type_menu' => 'pic']);
});
Route::get('/tambah-ip', function () {
    return view('main.pic.tambah-ip', ['type_menu' => 'pic']);
});

// utilities
Route::get('/utilities-dir', function () {
    return view('main.utilities.utilities-dir', ['type_menu' => 'utilities']);
});
Route::get('/tambah-dir', function () {
    return view('main.utilities.tambah-dir', ['type_menu' => 'utilities']);
});
Route::get('/utilities-div', function () {
    return view('main.utilities.utilities-div', ['type_menu' => 'utilities']);
});
Route::get('/tambah-div', function () {
    return view('main.utilities.tambah-div', ['type_menu' => 'utilities']);
});
Route::get('/utilities-unit', function () {
    return view('main.utilities.utilities-unit', ['type_menu' => 'utilities']);
});
Route::get('/tambah-unit', function () {
    return view('main.utilities.tambah-unit', ['type_menu' => 'utilities']);
});
Route::get('/utilities-vendor', function () {
    return view('main.utilities.utilities-vendor', ['type_menu' => 'utilities']);
});
Route::get('/tambah-vendor', function () {
    return view('main.utilities.tambah-vendor', ['type_menu' => 'utilities']);
});
Route::get('/utilities-merk', function () {
    return view('main.utilities.utilities-merk', ['type_menu' => 'utilities']);
});
Route::get('/tambah-merk', function () {
    return view('main.utilities.tambah-merk', ['type_menu' => 'utilities']);
});
Route::get('/utilities-jenisperangkat', function () {
    return view('main.utilities.utilities-jenisperangkat', ['type_menu' => 'utilities']);
});
Route::get('/tambah-jenisperangkat', function () {
    return view('main.utilities.tambah-jenisperangkat', ['type_menu' => 'utilities']);
});

// user
// navbar dashboard
Route::get('/dashboard-user', function () {
    return view('user.home.dashboard-user', ['type_menu' => 'dashboard']);
});
Route::get('/inventory-asset-user', function () {
    return view('user.home.inventory-asset-user', ['type_menu' => 'dashboard']);
});
Route::get('/pic-user', function () {
    return view('user.home.pic-user', ['type_menu' => 'dashboard']);
});

// inventory
Route::get('/inventory-cpu-user', function () {
    return view('user.inventory.inventory-cpu-user', ['type_menu'=> 'inventory']);
});
Route::get('/detail-cpu-user', function () {
    return view('user.inventory.detail-cpu-user', ['type_menu'=> 'inventory']);
});
Route::get('/inventory-monitor-user', function () {
    return view('user.inventory.inventory-monitor-user', ['type_menu'=> 'inventory']);
});
Route::get('/inventory-keyboard-user', function () {
    return view('user.inventory.inventory-keyboard-user', ['type_menu'=> 'inventory']);
});
Route::get('/inventory-mouse-user', function () {
    return view('user.inventory.inventory-mouse-user', ['type_menu'=> 'inventory']);
});
Route::get('/inventory-printer-user', function () {
    return view('main.inventory.inventory-printer-user', ['type_menu'=> 'inventory']);
});
Route::get('/inventory-speaker-user', function () {
    return view('user.inventory.inventory-speaker-user', ['type_menu'=> 'inventory']);
});
Route::get('/inventory-network-user', function () {
    return view('main.inventory.inventory-network-user', ['type_menu'=> 'inventory']);
});

// pic
Route::get('/data-pic-user', function () {
    return view('user.pic.data-pic-user', ['type_menu' => 'pic']);
});

// Route::redirect('/', '/dashboard-general-dashboard');

// // Dashboard
// Route::get('/dashboard-general-dashboard', function () {
//     return view('pages.dashboard-general-dashboard', ['type_menu' => 'dashboard']);
// });
// Route::get('/dashboard-ecommerce-dashboard', function () {
//     return view('pages.dashboard-ecommerce-dashboard', ['type_menu' => 'dashboard']);
// });


// // Layout
// Route::get('/layout-default-layout', function () {
//     return view('pages.layout-default-layout', ['type_menu' => 'layout']);
// });

// // Blank Page
// Route::get('/blank-page', function () {
//     return view('pages.blank-page', ['type_menu' => '']);
// });

// // Bootstrap
// Route::get('/bootstrap-alert', function () {
//     return view('pages.bootstrap-alert', ['type_menu' => 'bootstrap']);
// });
// Route::get('/bootstrap-badge', function () {
//     return view('pages.bootstrap-badge', ['type_menu' => 'bootstrap']);
// });
// Route::get('/bootstrap-breadcrumb', function () {
//     return view('pages.bootstrap-breadcrumb', ['type_menu' => 'bootstrap']);
// });
// Route::get('/bootstrap-buttons', function () {
//     return view('pages.bootstrap-buttons', ['type_menu' => 'bootstrap']);
// });
// Route::get('/bootstrap-card', function () {
//     return view('pages.bootstrap-card', ['type_menu' => 'bootstrap']);
// });
// Route::get('/bootstrap-carousel', function () {
//     return view('pages.bootstrap-carousel', ['type_menu' => 'bootstrap']);
// });
// Route::get('/bootstrap-collapse', function () {
//     return view('pages.bootstrap-collapse', ['type_menu' => 'bootstrap']);
// });
// Route::get('/bootstrap-dropdown', function () {
//     return view('pages.bootstrap-dropdown', ['type_menu' => 'bootstrap']);
// });
// Route::get('/bootstrap-form', function () {
//     return view('pages.bootstrap-form', ['type_menu' => 'bootstrap']);
// });
// Route::get('/bootstrap-list-group', function () {
//     return view('pages.bootstrap-list-group', ['type_menu' => 'bootstrap']);
// });
// Route::get('/bootstrap-media-object', function () {
//     return view('pages.bootstrap-media-object', ['type_menu' => 'bootstrap']);
// });
// Route::get('/bootstrap-modal', function () {
//     return view('pages.bootstrap-modal', ['type_menu' => 'bootstrap']);
// });
// Route::get('/bootstrap-nav', function () {
//     return view('pages.bootstrap-nav', ['type_menu' => 'bootstrap']);
// });
// Route::get('/bootstrap-navbar', function () {
//     return view('pages.bootstrap-navbar', ['type_menu' => 'bootstrap']);
// });
// Route::get('/bootstrap-pagination', function () {
//     return view('pages.bootstrap-pagination', ['type_menu' => 'bootstrap']);
// });
// Route::get('/bootstrap-popover', function () {
//     return view('pages.bootstrap-popover', ['type_menu' => 'bootstrap']);
// });
// Route::get('/bootstrap-progress', function () {
//     return view('pages.bootstrap-progress', ['type_menu' => 'bootstrap']);
// });
// Route::get('/bootstrap-table', function () {
//     return view('pages.bootstrap-table', ['type_menu' => 'bootstrap']);
// });
// Route::get('/bootstrap-tooltip', function () {
//     return view('pages.bootstrap-tooltip', ['type_menu' => 'bootstrap']);
// });
// Route::get('/bootstrap-typography', function () {
//     return view('pages.bootstrap-typography', ['type_menu' => 'bootstrap']);
// });


// // components
// Route::get('/components-article', function () {
//     return view('pages.components-article', ['type_menu' => 'components']);
// });
// Route::get('/components-avatar', function () {
//     return view('pages.components-avatar', ['type_menu' => 'components']);
// });
// Route::get('/components-chat-box', function () {
//     return view('pages.components-chat-box', ['type_menu' => 'components']);
// });
// Route::get('/components-empty-state', function () {
//     return view('pages.components-empty-state', ['type_menu' => 'components']);
// });
// Route::get('/components-gallery', function () {
//     return view('pages.components-gallery', ['type_menu' => 'components']);
// });
// Route::get('/components-hero', function () {
//     return view('pages.components-hero', ['type_menu' => 'components']);
// });
// Route::get('/components-multiple-upload', function () {
//     return view('pages.components-multiple-upload', ['type_menu' => 'components']);
// });
// Route::get('/components-pricing', function () {
//     return view('pages.components-pricing', ['type_menu' => 'components']);
// });
// Route::get('/components-statistic', function () {
//     return view('pages.components-statistic', ['type_menu' => 'components']);
// });
// Route::get('/components-tab', function () {
//     return view('pages.components-tab', ['type_menu' => 'components']);
// });
// Route::get('/components-table', function () {
//     return view('pages.components-table', ['type_menu' => 'components']);
// });
// Route::get('/components-user', function () {
//     return view('pages.components-user', ['type_menu' => 'components']);
// });
// Route::get('/components-wizard', function () {
//     return view('pages.components-wizard', ['type_menu' => 'components']);
// });

// // forms
// Route::get('/forms-advanced-form', function () {
//     return view('pages.forms-advanced-form', ['type_menu' => 'forms']);
// });
// Route::get('/forms-editor', function () {
//     return view('pages.forms-editor', ['type_menu' => 'forms']);
// });
// Route::get('/forms-validation', function () {
//     return view('pages.forms-validation', ['type_menu' => 'forms']);
// });

// // google maps
// // belum tersedia

// // modules
// Route::get('/modules-calendar', function () {
//     return view('pages.modules-calendar', ['type_menu' => 'modules']);
// });
// Route::get('/modules-chartjs', function () {
//     return view('pages.modules-chartjs', ['type_menu' => 'modules']);
// });
// Route::get('/modules-datatables', function () {
//     return view('pages.modules-datatables', ['type_menu' => 'modules']);
// });
// Route::get('/modules-flag', function () {
//     return view('pages.modules-flag', ['type_menu' => 'modules']);
// });
// Route::get('/modules-font-awesome', function () {
//     return view('pages.modules-font-awesome', ['type_menu' => 'modules']);
// });
// Route::get('/modules-ion-icons', function () {
//     return view('pages.modules-ion-icons', ['type_menu' => 'modules']);
// });
// Route::get('/modules-owl-carousel', function () {
//     return view('pages.modules-owl-carousel', ['type_menu' => 'modules']);
// });
// Route::get('/modules-sparkline', function () {
//     return view('pages.modules-sparkline', ['type_menu' => 'modules']);
// });
// Route::get('/modules-sweet-alert', function () {
//     return view('pages.modules-sweet-alert', ['type_menu' => 'modules']);
// });
// Route::get('/modules-toastr', function () {
//     return view('pages.modules-toastr', ['type_menu' => 'modules']);
// });
// Route::get('/modules-vector-map', function () {
//     return view('pages.modules-vector-map', ['type_menu' => 'modules']);
// });
// Route::get('/modules-weather-icon', function () {
//     return view('pages.modules-weather-icon', ['type_menu' => 'modules']);
// });

// // auth
// Route::get('/auth-forgot-password', function () {
//     return view('pages.auth-forgot-password', ['type_menu' => 'auth']);
// });
// Route::get('/auth-login', function () {
//     return view('pages.auth-login', ['type_menu' => 'auth']);
// });
//     Route::get('/auth-login2', function () {
//     return view('pages.auth-login2', ['type_menu' => 'auth']);
// });
// Route::get('/auth-register', function () {
//     return view('pages.auth-register', ['type_menu' => 'auth']);
// });
// Route::get('/auth-reset-password', function () {
//     return view('pages.auth-reset-password', ['type_menu' => 'auth']);
// });

// // error
// Route::get('/error-403', function () {
//     return view('pages.error-403', ['type_menu' => 'error']);
// });
// Route::get('/error-404', function () {
//     return view('pages.error-404', ['type_menu' => 'error']);
// });
// Route::get('/error-500', function () {
//     return view('pages.error-500', ['type_menu' => 'error']);
// });
// Route::get('/error-503', function () {
//     return view('pages.error-503', ['type_menu' => 'error']);
// });

// // features
// Route::get('/features-activities', function () {
//     return view('pages.features-activities', ['type_menu' => 'features']);
// });
// Route::get('/features-post-create', function () {
//     return view('pages.features-post-create', ['type_menu' => 'features']);
// });
// Route::get('/features-post', function () {
//     return view('pages.features-post', ['type_menu' => 'features']);
// });
// Route::get('/features-profile', function () {
//     return view('pages.features-profile', ['type_menu' => 'features']);
// });
// Route::get('/features-settings', function () {
//     return view('pages.features-settings', ['type_menu' => 'features']);
// });
// Route::get('/features-setting-detail', function () {
//     return view('pages.features-setting-detail', ['type_menu' => 'features']);
// });
// Route::get('/features-tickets', function () {
//     return view('pages.features-tickets', ['type_menu' => 'features']);
// });

// // utilities
// Route::get('/utilities-contact', function () {
//     return view('pages.utilities-contact', ['type_menu' => 'utilities']);
// });
// Route::get('/utilities-invoice', function () {
//     return view('pages.utilities-invoice', ['type_menu' => 'utilities']);
// });
// Route::get('/utilities-subscribe', function () {
//     return view('pages.utilities-subscribe', ['type_menu' => 'utilities']);
// });

// // credits
// Route::get('/credits', function () {
//     return view('pages.credits', ['type_menu' => '']);
// });