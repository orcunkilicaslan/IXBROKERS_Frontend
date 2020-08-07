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

Route::get('/analysis/{symbols}', 'SiteController@analysis');
//Route::get('/analysis/daily-journals', 'SiteController@analysis_dailyjournals');
//Route::get('/analysis/instruments', 'SiteController@analysis_instruments');
//Route::get('/analysis/tools', 'SiteController@analysis_tools');
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


Route::post('/account/open-demo-account', 'SiteController@handle_demo_form');
Route::post('/account/open-live-account', 'SiteController@handle_real_form');
Route::post('/partnership/become-introducing-broker', 'SiteController@handle_broker_application');


Auth::routes(['register' => false]);
// Admin Routes
Route::get('/moneytalks',                           'AdminController@index')->name('moneytalks');
Route::get('/moneytalks/logout',                    'AdminController@logout');
Route::post('/moneytalks/media/upload',             'AdminController@media_upload');
// Campaigns
Route::get('/moneytalks/campaigns',                 'AdminController@campaign_list');
Route::get('/moneytalks/campaigns/new',             'AdminController@campaign_new');
Route::get('/moneytalks/campaigns/edit/{id}',       'AdminController@campaign_edit');
Route::get('/moneytalks/campaigns/hide/{id}',       'AdminController@campaign_hide');
Route::get('/moneytalks/campaigns/show/{id}',       'AdminController@campaign_show');
Route::post('/moneytalks/campaigns/save',           'AdminController@campaign_save');
Route::post('/moneytalks/campaigns/save/{id}',      'AdminController@campaign_update');
// Journals
Route::get('/moneytalks/journals',                  'AdminController@journals_list');
Route::get('/moneytalks/journals/new',              'AdminController@journals_new');

Route::get('/moneytalks/journals/hide/{id}',        'AdminController@journal_hide');
Route::get('/moneytalks/journals/show/{id}',        'AdminController@journal_show');
Route::get('/moneytalks/journals/edit/{id}',        'AdminController@journals_edit');
Route::post('/moneytalks/journals/save',            'AdminController@journal_save');
Route::post('/moneytalks/journals/save/{id}',       'AdminController@journal_update');

Route::get('/moneytalks/updates',                   'AdminController@updates_list');
Route::get('/moneytalks/updates/new',               'AdminController@updates_new');
Route::get('/moneytalks/updates/hide/{id}',         'AdminController@update_hide');
Route::get('/moneytalks/updates/show/{id}',         'AdminController@update_show');
Route::get('/moneytalks/updates/edit/{id}',         'AdminController@update_edit');
Route::post('/moneytalks/updates/save',             'AdminController@updates_save');
Route::post('/moneytalks/updates/save/{id}',        'AdminController@updates_update');

//Signals
Route::get('/moneytalks/signals',                   'AdminController@signals');
Route::post('/moneytalks/signals/save',              'AdminController@signals_save');
Route::get('/convert_currency',                     'MainController@convert_currency');
