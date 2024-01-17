<?php

use App\Http\Controllers\InventoryAsset;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PicController;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InventoryCpuController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DirektoratController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\InventoryMouseController;
use App\Http\Controllers\JenisPerangkatController;
use App\Http\Controllers\InventoryMonitorController;
use App\Http\Controllers\InventoryNetworkController;
use App\Http\Controllers\InventoryPrinterController;
use App\Http\Controllers\InventorySpeakerController;
use App\Http\Controllers\InventoryKeyboardController;
use App\Http\Controllers\PICS;
use App\Http\Controllers\SoftwareController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\WorkstationController;
use App\Models\Workstation;

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

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth.data'])->group(function () {

// navbar dashboard
Route::get('/searchHeader', [SearchController::class, 'index']);
Route::get('/searchFilter', [SearchController::class, 'searchFilter']);
Route::get('/inventory-{$filter}/detail-{$filter}/{id}', [SearchController::class, 'detail']);

Route::get('/dashboard-admin', [DashboardAdminController::class, 'index'])->middleware('auth');

Route::get('/inventory-asset', [InventoryAsset::class, 'index'])->middleware('auth');

Route::get('/pic', [PICS::class, 'index'])->middleware('auth');

Route::resource('/inventory-cpu',InventoryCpuController::class);
Route::get('/inventory-cpu/detail-cpu/{id}', [InventoryCpuController::class, 'detail']);
Route::get('/inventory-cpu/edit-cpu/{id}', [InventoryCpuController::class, 'edit']);

Route::resource('/inventory-monitor',InventoryMonitorController::class);
Route::get('/inventory-monitor/detail-monitor/{id}', [InventoryMonitorController::class, 'detail']);
Route::get('/inventory-monitor/edit-monitor/{id}', [InventoryMonitorController::class, 'edit']);

Route::resource('/inventory-keyboard', InventoryKeyboardController::class);
Route::get('/inventory-keyboard/detail-keyboard/{id}', [InventoryKeyboardController::class, 'detail']);
Route::get('/inventory-keyboard/edit-keyboard/{id}', [InventoryKeyboardController::class, 'edit']);

Route::resource('/inventory-mouse', InventoryMouseController::class);
Route::get('/inventory-mouse/detail-mouse/{id}', [InventoryMouseController::class, 'detail']);
Route::get('/inventory-mouse/edit-mouse/{id}', [InventoryMouseController::class, 'edit']);

Route::resource('/inventory-printer', InventoryPrinterController::class);
Route::get('/inventory-printer/detail-printer/{id}', [InventoryPrinterController::class, 'detail']);
Route::get('/inventory-printer/edit-printer/{id}', [InventoryPrinterController::class, 'edit']);

Route::resource('/inventory-speaker', InventorySpeakerController::class);
Route::get('/inventory-speaker/detail-speaker/{id}', [InventorySpeakerController::class, 'detail']);
Route::get('/inventory-speaker/edit-speaker/{id}', [InventorySpeakerController::class, 'edit']);

Route::resource('/inventory-network', InventoryNetworkController::class);
Route::get('/inventory-network/detail-network/{id}', [InventoryNetworkController::class, 'detail']);
Route::get('/inventory-network/edit-network/{id}', [InventoryNetworkController::class, 'edit']);

Route::resource('/data-pic', PicController::class);
Route::get('/detail-pic/{id}', [PicController::class, 'detail']);
Route::get('/edit-pic/{id}', [PicController::class, 'edit']);

Route::resource('/workstation', WorkstationController::class);
Route::get('/workstation/detail-workstation/{id}', [WorkstationController::class, 'detail']);
Route::get('/workstation/edit-workstation/{id}', [WorkstationController::class, 'edit']);

// utilities
Route::resource('/utilities-dir', DirektoratController::class);
Route::get('/utilities-dir/edit-dir/{id}', [DirektoratController::class, 'edit']);

Route::resource('/utilities-div', DivisiController::class);
Route::get('/utilities-div/edit-div/{id}', [DivisiController::class, 'edit']);

Route::resource('/utilities-unit', UnitController::class);
Route::get('/utilities-unit/edit-unit/{id}', [UnitController::class, 'edit']);

Route::resource('/utilities-vendor', VendorController::class);
Route::get('/utilities-vendor/edit-vendor/{id}', [VendorController::class, 'edit']);

Route::resource('/utilities-merk', MerkController::class);
Route::get('/utilities-merk/edit-merk/{id}', [MerkController::class, 'edit']);

Route::resource('/utilities-jenisperangkat', JenisPerangkatController::class);
Route::get('/utilities-jenisperangkat/edit-jenisperangkat/{id}', [JenisPerangkatController::class, 'edit']);

Route::resource('/utilities-software', SoftwareController::class);
Route::get('/utilities-software/edit-software/{id}', [SoftwareController::class, 'edit']);

});


// user
// navbar dashboard
Route::get('/dashboard-user', function () {
    return view('user.home.dashboard-user', ['type_menu' => 'dashboard']);
})->middleware('guest');
Route::get('/inventory-asset-user', function () {
    return view('user.home.inventory-asset-user', ['type_menu' => 'dashboard']);
});
Route::get('/pic-user', function () {
    return view('user.home.pic-user', ['type_menu' => 'dashboard']);
});

// inventory
Route::get('/inventory-cpu-user', function () {
    return view('user.inventory.cpu.inventory-cpu-user', ['type_menu'=> 'inventory']);
});
Route::get('/detail-cpu-user', function () {
    return view('user.inventory.cpu.detail-cpu-user', ['type_menu'=> 'inventory']);
});
Route::get('/inventory-monitor-user', function () {
    return view('user.inventory.monitor.inventory-monitor-user', ['type_menu'=> 'inventory']);
});
Route::get('/inventory-keyboard-user', function () {
    return view('user.inventory.keyboard.inventory-keyboard-user', ['type_menu'=> 'inventory']);
});
Route::get('/inventory-mouse-user', function () {
    return view('user.inventory.mouse.inventory-mouse-user', ['type_menu'=> 'inventory']);
});
Route::get('/inventory-printer-user', function () {
    return view('user.inventory.printer.inventory-printer-user', ['type_menu'=> 'inventory']);
});
Route::get('/inventory-speaker-user', function () {
    return view('user.inventory.speaker.inventory-speaker-user', ['type_menu'=> 'inventory']);
});
Route::get('/inventory-network-user', function () {
    return view('user.inventory.network.inventory-network-user', ['type_menu'=> 'inventory']);
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