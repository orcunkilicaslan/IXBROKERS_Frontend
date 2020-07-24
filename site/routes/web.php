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

//SITE URLS
Route::get('/', 'SiteController@index');
Route::get('/account/open-demo-account', 'SiteController@account_opendemoaccount');
Route::get('/account/open-live-account', 'SiteController@account_openliveaccount');
Route::get('/account/account-types', 'SiteController@account_accounttypes');
Route::get('/products/forex', 'SiteController@products_forex');
Route::get('/products/commodities', 'SiteController@products_commodities');
Route::get('/products/indices', 'SiteController@products_indices');
Route::get('/products/stocks-cfd', 'SiteController@products_stocks_cfd');
Route::get('/products/crypto-currencies', 'SiteController@products_cryptocurrencies');
Route::get('/platforms/meta-trader-4/desktop', 'SiteController@platforms_mt4_desktop');
Route::get('/platforms/meta-trader-4/web', 'SiteController@platforms_mt4_web');
Route::get('/platforms/meta-trader-4/mobile', 'SiteController@platforms_mt4_mobile');
Route::get('/platforms/meta-trader-5/desktop', 'SiteController@platforms_mt5_desktop');
Route::get('/platforms/meta-trader-5/web', 'SiteController@platforms_mt5_web');
Route::get('/platforms/meta-trader-5/mobile', 'SiteController@platforms_mt5_mobile');
Route::get('/analysis/morning-journals', 'SiteController@analysis_morningjournals');
Route::get('/analysis/daily-journals', 'SiteController@analysis_dailyjournals');
Route::get('/analysis/instruments', 'SiteController@analysis_instruments');
Route::get('/analysis/tools', 'SiteController@analysis_tools');
Route::get('/analysis/news', 'SiteController@analysis_news');
Route::get('/analysis/economic-calendar', 'SiteController@analysis_economiccalendar');
Route::get('/education', 'SiteController@education');
Route::get('/partnership/become-introducing-broker', 'SiteController@partnership_becomeintroducingbroker');
Route::get('/partnership/become-affiliate', 'SiteController@partnership_becomeaffiliate');
Route::get('/company', 'SiteController@company');
Route::get('/legal/terms-and-conditions', 'SiteController@legal_termsandconditions');
Route::get('/legal/privacy-policy', 'SiteController@legal_privacypolicy');
Route::get('/legal/cookie-policy', 'SiteController@legal_cookiepolicy');
Route::get('/investments/pamm', 'SiteController@investments_pamm');


Auth::routes();
//ADNIN URLS
Route::get('/home', 'AdminController@index')->name('home');
