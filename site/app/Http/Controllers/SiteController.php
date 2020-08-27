<?php

namespace App\Http\Controllers;

use App\CryptoMarket;
use App\Mail\PartnerApplication;
use App\Market;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->marketPrices = Cache::has('marketprices') ? Cache::get('marketprices') : Cache::remember('marketprices', 60, function() {
            return Market::where('status', 1)->orderBy('type','asc')->orderBy('market_name','asc')->get();
        });

        $this->cryptoPrices = Cache::has('cryptoprices') ? Cache::get('cryptoprices') : Cache::remember('cryptoprices', 60, function() {
            return CryptoMarket::where('status', 1)->select('market_name','price','bid','ask')->orderBy('price', 'desc')->get();
        });
    }
    public function index() {
        return view('site.index', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices
        ]);
    }

    public function account_opendemoaccount() {
        return view('site.account.open_demo_account', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices
        ]);
    }

    public function account_openliveaccount() {
        return view('site.account.open_live_account', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices
        ]);
    }

    public function account_accounttypes() {
        return view('site.account.account_types', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices
        ]);
    }

    public function products_forex() {
        return view('site.products.forex', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices
        ]);
    }

    public function products_commodities() {
        return view('site.products.commodities', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices
        ]);
    }

    public function products_indices() {
        return view('site.products.indices', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices
        ]);
    }

    public function products_stocks_cfd() {
        return view('site.products.stockscfd', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices
        ]);
    }

    public function products_cryptocurrencies() {
        return view('site.products.crypto_currencies', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices
        ]);
    }

    public function platforms_mt4_desktop() {
        return view('site.platforms.mt4_desktop', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices
        ]);
    }

    public function platforms_mt4_web() {
        return view('site.platforms.mt4_web', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices
        ]);
    }

    public function platforms_mt4_mobile() {
        return view('site.platforms.mt4_mobile', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices
        ]);
    }

    public function platforms_mt5_desktop() {
        return view('site.platforms.mt5_desktop', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices
        ]);
    }

    public function platforms_mt5_web() {
        return view('site.platforms.mt5_web', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices
        ]);
    }

    public function platforms_mt5_mobile() {
        return view('site.platforms.mt5_mobile', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices
        ]);
    }

    public function analysis($symbol, Request $request) {
        $cache_key = $symbol . 'analysis';
        $analysisData = Cache::has($cache_key) ? Cache::get($cache_key) : Cache::remember($cache_key, 3600, function() use($symbol) {
            Log::info('Making request for getting analysis');
            $request_url = env('APIURL') . '/analysis/' . $symbol;
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => $request_url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30000,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
            ));
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);

            if ($err) {
                abort(500);
            }
            $responsejson = json_decode($response);
            return $responsejson;
        });
//
//        echo "<pre>";
//        print_r($analysisData);
//        echo "</pre>";
//        exit();
        return view('site.analysis.symbolanalysis', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices,
            'analysisData' => $analysisData,
            'symbol' => $symbol
        ]);
    }

    private function loadNews($type, $count){
        $request_url = env('APIURL') . '/news?type=' . $type . '&count=' . $count;

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $request_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            abort(500);
        }

        $responsejson = json_decode($response);
        return $responsejson->items;
    }

    public function news() {
        $fxnews = Cache::has('fxnews5') ? Cache::get('fxnews5') : Cache::remember('fxnews5', 3600, function() {
            return $this->loadNews('forex_news', 5);
        });

        $econews = Cache::has('econews5') ? Cache::get('econews5') : Cache::remember('econews5', 3600, function() {
            return $this->loadNews('economy_news', 5);
        });

        $ecoind = Cache::has('ecoind5') ? Cache::get('ecoind5') : Cache::remember('ecoind5', 3600, function() {
            return $this->loadNews('economic_indicators', 5);
        });

        return view('site.analysis.news', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices,
            'fxnews' => $fxnews,
            'econews' => $econews,
            'ecoind' => $ecoind
        ]);
    }

    public function news_category($category) {
        $cache_key = $category . '_nc';
        $news = Cache::has($cache_key) ? Cache::get($cache_key) : Cache::remember($cache_key, 3600, function() use($category) {
            return $this->loadNews($category, 10);
        });

        return view('site.analysis.news_category', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices,
            'news' => $news,
            'category' => $category,
            'paginationEnabled' => false
        ]);
    }

    protected function loadNewsDetail($newsid){
        $request_url = env('APIURL') . '/news/'. $newsid;
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $request_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            abort(500);
        }

        $responsejson = json_decode($response);
        return $responsejson;
    }

    public function news_detail($newsid) {
        $cache_key = $newsid . '_nd';
        $news = Cache::has($cache_key) ? Cache::get($cache_key) : Cache::rememberForever($cache_key, function() use($newsid) {
            return $this->loadNewsDetail($newsid);
        });

        return view('site.analysis.news_detail', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices,
            'news' => $news
        ]);
    }

    public function economiccalendar() {
        $request_url = env('APIURL') . '/economic_calendar';

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $request_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            abort(500);
        }

        $responsejson = json_decode($response);

        return view('site.analysis.economic_calendar', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices,
            'calendarEvents' => $responsejson,
            'current_time' => date('H:i')
        ]);
    }

    public function education() {
        return view('site.education.education', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices
        ]);
    }

    public function partnership_becomeintroducingbroker() {
        return view('site.partnership.become_introducing_broker', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices
        ]);
    }

    public function partnership_becomeaffiliate() {
        return view('site.partnership.become_affiliate', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices
        ]);
    }

    public function company() {
        return view('site.company.company', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices
        ]);
    }

    public function legal_termsandconditions() {
        return view('site.legal.terms_and_conditions', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices
        ]);
    }

    public function legal_privacypolicy() {
        return view('site.legal.privacy_policy', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices
        ]);
    }

    public function legal_cookiepolicy() {
        return view('site.legal.cookie_policy', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices
        ]);
    }

    public function investments_pamm() {
        return view('site.investments.pamm', [
            'marketPrices' => $this->marketPrices,
            'cryptoPrices' => $this->cryptoPrices
        ]);
    }

    protected function sendToSCA($account_type, $name, $number, $email, $password, $pass_conf){
        $headers = array(
            'Content-Type: application/x-www-form-urlencoded',
            'Accept: application/json'
        );
        $request_url = 'https://service.ixbrokers.co/auth/register';
        $post_data = 'name=' . $name . '&account_type=' . $account_type . '&number=' . $number . '&email=' . $email . '&password=' . $password . '&password_confirmation=' . $pass_conf;
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $request_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $post_data,
            CURLOPT_HTTPHEADER => $headers,
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            return array( 'success' => false, 'reason' => 'A problem occured while creting your account. Please try again later');
        } else {
            $responsedata = json_decode($response);
            Log::info($response);
            if(isset($responsedata->errors)){
               if(isset($responsedata->errors->email)){
                   return array( 'success' => false, 'reason' => 'Email is in use. Please try another email adress.');
               }
               return array( 'success' => false, 'reason' => 'Unknown error');
            }
            return array( 'success' => true );
        }
    }

    protected function sendToCRM($source_id, $name, $number, $email){
        $headers = array(
            'Content-Type: application/x-www-form-urlencoded',
            'Accept: application/json'
        );
        $request_url = 'http://crm.ixbrokers.co/insertfromlp';
        $post_data = 'source_id=' . $source_id . '&name=' . $name . '&phone=' . $number . '&email=' . $email;
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $request_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $post_data,
            CURLOPT_HTTPHEADER => $headers,
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            return false;
        } else {
            $responsedata = json_decode($response);
            Log::info($response);
//            if($responsedata->errors){
//                return false;
//            }
            return true;
        }
    }

    protected function handle_account_form(Request $request, $account_type, $source_id){
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'pass' => 'required',
            'conf_pass' => 'required',
            //'g-recaptcha-response' => 'required',
        ]);

        if($validator->fails()){
            return [ 'success' => false ];
        }

        $name = $request->input('first_name') . ' ' . $request->input('last_name');
        $phone = preg_replace("/[^0-9]/", "", $request->input('phone'));
        $phone = preg_replace('/\s+/', '', $phone);
        $email = $request->input('email');
        $password = $request->input('pass');
        $password_confirmation = $request->input('conf_pass');

        $sca_result = $this->sendToSCA($account_type, $name, $phone, $email, $password, $password_confirmation);
        if(!$sca_result['success']){
            return $sca_result;
        }

        $crm_success = $this->sendToCRM($source_id, $name, $phone, $email);
        if(!$crm_success){
            return [ 'success' => false ];
        }

        return [ 'success' => true ];

    }

    public function handle_demo_form(Request $request) {
        $result = $this->handle_account_form($request, 'demo', '0153f78bcdb3');
        return response()->json($result);
    }

    public function handle_real_form(Request $request) {
        $result = $this->handle_account_form($request, 'real', '7790e6073163');
        return response()->json($result);
    }

    public function handle_broker_application(Request $request){
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'lotvolume' => 'required',
            'interest' => 'required',
            'expectations' => 'required',
            //'g-recaptcha-response' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([ 'success' => false ]);
        }

        $name = $request->input('first_name') . ' ' . $request->input('last_name');
        $phone = preg_replace("/[^0-9]/", "", $request->input('phone'));
        $phone = preg_replace('/\s+/', '', $phone);
        $email = $request->input('email');
        $lots = $request->input('lotvolume');
        $interest = $request->input('interest');
        $expectations = $request->input('expectations');

        $maillable = new PartnerApplication($name, $email, $phone, $lots, $interest, $expectations);
        Mail::to(env('MAIL_TO_ADDRESS', ''))->send($maillable);
        return response()->json([ 'success' => true ]);
    }
}
