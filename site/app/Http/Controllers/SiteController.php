<?php

namespace App\Http\Controllers;

use App\CryptoMarket;
use App\Market;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){}
    public function index() {
        $marketPrices = Market::where('status', 1)->orderBy('type','asc')->orderBy('market_name','asc')->get();
        $cryptoPrices = CryptoMarket::where('status', 1)->select('market_name','price','bid','ask')->orderBy('price', 'desc')->get();
        return view('site.index', [
            'marketPrices' => $marketPrices,
            'cryptoPrices' => $cryptoPrices
        ]);
    }
    public function account_opendemoaccount() { return view('site.account.open_demo_account'); }
    public function account_openliveaccount() { return view('site.account.open_live_account'); }
    public function account_accounttypes() { return view('site.account.account_types'); }
    public function products_forex() { return view('site.products.forex'); }
    public function products_commodities() { return view('site.products.commodities'); }
    public function products_indices() { return view('site.products.indices'); }
    public function products_stocks_cfd() { return view('site.products.stockscfd'); }
    public function products_cryptocurrencies() { return view('site.products.crypto_currencies'); }
    public function platforms_mt4_desktop() { return view('site.platforms.mt4_desktop'); }
    public function platforms_mt4_web() { return view('site.platforms.mt4_web'); }
    public function platforms_mt4_mobile() { return view('site.platforms.mt4_mobile'); }
    public function platforms_mt5_desktop() { return view('site.platforms.mt5_desktop'); }
    public function platforms_mt5_web() { return view('site.platforms.mt5_web'); }
    public function platforms_mt5_mobile() { return view('site.platforms.mt5_mobile'); }
    public function analysis_morningjournals() { return view('site.analysis.morning_journals'); }
    public function analysis_dailyjournals() { return view('site.analysis.daily_journals'); }
    public function analysis_instruments() { return view('site.analysis.instruments'); }
    public function analysis_tools() { return view('site.analysis.tools'); }
    public function analysis_news() { return view('site.analysis.news'); }
    public function analysis_economiccalendar() { return view('site.analysis.economic_calendar'); }
    public function education() { return view('site.education.education'); }
    public function partnership_becomeintroducingbroker() { return view('site.partnership.become_introducing_broker'); }
    public function partnership_becomeaffiliate() { return view('site.partnership.become_affiliate'); }
    public function company() { return view('site.company.company'); }
    public function legal_termsandconditions() { return view('site.legal.terms_and_conditions'); }
    public function legal_privacypolicy() { return view('site.legal.privacy_policy'); }
    public function legal_cookiepolicy() { return view('site.legal.cookie_policy'); }
    public function investments_pamm() { return view('site.investments.pamm'); }
}
