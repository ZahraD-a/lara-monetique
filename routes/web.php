<?php

use App\Http\Livewire\Posts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
// use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserbController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BoutiqueController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FacturebController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\Ligne_CommandeController;
use App\Http\Controllers\Auth\ForgotPasswordController;
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

Route::get('/', function () {
    // auth()->user()->assignRole('admin');
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'home'])->name('admin');

Auth::routes();
// // -----------------------------login-----------------------------------------
// Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
// Route::post('/login/ds', [App\Http\Controllers\Auth\LoginController::class, 'authenticate']);
// Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// ------------------------------register---------------------------------------
// Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
// Route::post('/register/ds', [App\Http\Controllers\Auth\RegisterController::class, 'storeUser'])->name('register');

// -----------------------------forget password ------------------------------
// Route::get('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'getEmail'])->name('forget-password');
// Route::post('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'postEmail'])->name('forget-password');

// -----------------------------reset password ------------------------------
// Route::get('reset-password/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'getPassword']);
// Route::post('reset-password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'updatePassword']);
////////////////////////////////////////////

Route::get('admin/home', [App\Http\Controllers\AdminController::class, 'home'])->name('admin/home');
// -----------------------------form-----------------------------------------
Route::get('form/new', [App\Http\Controllers\ProduitController::class, 'index'])->name('form/new');
Route::get('form/create', [App\Http\Controllers\ProduitController::class, 'create'])->name('form/create');
Route::post('form/store', [App\Http\Controllers\ProduitController::class, 'store'])->name('form/store');
Route::get('deleteProduit/destroy/{id}', [App\Http\Controllers\ProduitController::class, 'destroy'])->name('deleteProduit/destroy/{id}');
Route::get('updateProduit/edit/{id}', [App\Http\Controllers\ProduitController::class, 'edit'])->name('updateProduit-edit');
Route::post('form/produit/update/{id}', [App\Http\Controllers\ProduitController::class, 'update'])->name('products.update');


////////////////////////////////////Commandes/////////////////////////////////////////
Route::get('form/view/commande', [App\Http\Controllers\CommandeController::class, 'index'])->name('form/view/commande');
Route::get('form/commande', [App\Http\Controllers\CommandeController::class, 'index'])->name('form/commande');
Route::get('form/commande/{commande}', [App\Http\Controllers\CommandeController::class, 'detail'])->name('form-commande');
/////////////////////////////USERS/////////////////////////////////////////////////////////
Route::post('form/user/store', [App\Http\Controllers\UserbController::class, 'store'])->name('form/user/store');
Route::get('form/users', [App\Http\Controllers\UserbController::class, 'index'])->name('form/users');
Route::get('form/users/create', [App\Http\Controllers\UserbController::class, 'create'])->name('form/users/create');
Route::get('form/destroy/{id}', [App\Http\Controllers\UserbController::class, 'destroy'])->name('form/destroy/{id}');
Route::get('form/edit/{id}', [App\Http\Controllers\UserbController::class, 'edit'])->name('form/edit/{id}');
// Route::put('form/edit/{id}', [App\Http\Controllers\UserbController::class, 'update'])->name('form/edit/{id}');
Route::post('form/update', [App\Http\Controllers\UserbController::class, 'update'])->name('form/update');
////////////////////////////////////PROFILES///////////////////////////////////

Route::post('profile/update', [App\Http\Controllers\BoutiqueController::class, 'update'])->name('profile-update');

Route::post('profileUser/update', [App\Http\Controllers\UserbController::class, 'updateUser'])->name('profileUser/update');

Route::get('user/show', [App\Http\Controllers\UserbController::class, 'show'])->name('user/show');// list of users

Route::get('admin/user', [App\Http\Controllers\AdminController::class, 'show'])->name('admin-users');// list of users


Route::get('admin/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('admin/profile');

Route::put('admin/profile', [App\Http\Controllers\ProfileController::class, 'updateAdmin'])->name('admin/upprofile');

Route::get('user/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('user/profile');

Route::get('/profile/change-password', [App\Http\Controllers\ProfileController::class, 'change_password'])->name('change_password');
Route::post('/profile/update-password', [App\Http\Controllers\ProfileController::class, 'update_password'])->name('update_password');
 ////////////////////BOUTIQUE///////////
 Route::get('/admin/boutique', [App\Http\Controllers\BoutiqueController::class, 'AdminBoutique'])->name('boutiques');
//  Route::get('/detailbooutique', [App\Http\Controllers\BoutiqueController::class, 'DetailBoutique'])->name('detailbooutique');
 Route::get('/Addbooutique', [App\Http\Controllers\BoutiqueController::class, 'createBoutique'])->name('/Addbooutique');
 Route::get('detail/boutique/{boutique}', [App\Http\Controllers\BoutiqueController::class, 'DetailBoutique'])->name('boutiqueDescription');
 Route::get('/BoutiqueUsers/{boutique}', [App\Http\Controllers\UserbController::class, 'UsersBoutique'])->name('BoutiqueUsers');
 Route::post('boutique/store', [App\Http\Controllers\BoutiqueController::class, 'AddBoutique'])->name('boutique/store');


 ///////////////////////Etudiants//////////////////////////
//  Route::resource('etudiants', EtudiantController::class);

Route::get('admin/transa', [App\Http\Controllers\TransactionController::class, 'index'])->name('admin/transa');
Route::get('transaction/detail/{etudiant}', [App\Http\Controllers\TransactionController::class, 'show'])->name('transaction-detail');

 Route::get('/etudiant/list', [App\Http\Controllers\EtudiantController::class, 'index'])->name('etudiant/list');

 Route::get('/transaction/create/{etudiant}', [App\Http\Controllers\TransactionController::class, 'create'])->name('create_transa');
 Route::post('/transaction/store/{etudiant}', [App\Http\Controllers\TransactionController::class, 'store'])->name('tansaction_store');


//  Route::post('/etudiant/{etudiant}/show', [App\Http\Controllers\TransactionController::class, 'store'])->name('tansaction_store');
 Route::get('/etudiant/edit/{id}', [App\Http\Controllers\EtudiantController::class, 'edit'])->name('etudiant_update');
 Route::post('etudiantupdate/update/{id}', [App\Http\Controllers\EtudiantController::class, 'update'])->name('etudiantupdate');
//////////////////////////////////Boutique transaction//////////////////

Route::get('boutique/users/{boutique}', [App\Http\Controllers\BoutiqueController::class, 'boutique_users'])->name('boutique/users');

Route::get('boutique/transaction/{boutique}', [App\Http\Controllers\BoutiqueController::class, 'show'])->name('boutique-transaction');
Route::get('deleteTrans/destroy/{id}', [App\Http\Controllers\BoutiqueController::class, 'destroy'])->name('deleteTrans/destroy/{id}');
//////////////////////FACTURES/////////////////////////
Route::get('boutique/factures', [App\Http\Controllers\FacturebController::class, 'index'])->name('boutique-factures');// list of /boutique-factures

Route::get('boutique/{boutique}/factures', [App\Http\Controllers\FacturebController::class, 'liste'])->name('boutique-factures-liste');// list of /boutique-factures
Route::get('factures/{facture}/detail', [App\Http\Controllers\FacturebController::class, 'show'])->name('detail-factures');// list of /boutique-factures


///////////////////////////COMMANDE//////////////////////////////
Route::get('form/lignecommande', [App\Http\Controllers\Ligne_CommandeController::class, 'show'])->name('form/lignecommande');


Route::get('form/newart', [App\Http\Controllers\formController::class, 'index'])->name('form/newart');
Route::get('/fetchallcom', [CommandeController::class, 'fetchallcom'])->name('fetchallcom');

Route::get('/form/view/report', [PostController::class, 'index'])->name('form/view/report');
Route::post('/store', [PostController::class, 'store'])->name('store');
Route::get('/fetchall', [PostController::class, 'fetchAll'])->name('fetchAll');
Route::delete('/delete', [PostController::class, 'delete'])->name('delete');
Route::get('/edit', [PostController::class, 'edit'])->name('edit');
Route::post('/update', [PostController::class, 'update'])->name('update');
///////////////////////////LOGIN////////////////////
Route::post('/acceuil', [MainController::class, 'checklogin'])->name('/acceuil');
Route::get('/main/successlogin', [MainController::class, 'successlogin'])->name('/main/successlogin');
Route::get('main/logout', [MainController::class, 'logout'])->name('/main/logout');
Route::get('/main', [MainController::class, 'index'])->name('/main');
// Route::post('/main/checklogin', 'App\Http\Controllers\MainController@checklogin');
// Route::get('main/successlogin', 'App\Http\Controllers\MainController@successlogin');
Auth::routes();
