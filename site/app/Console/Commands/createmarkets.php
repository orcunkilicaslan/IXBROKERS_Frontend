<?php

namespace App\Console\Commands;

use App\Market;
use Illuminate\Console\Command;

class createmarkets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'market:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates markets in database';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $market_data = array(
            // Indices
            array('market_name' => 'DE 30', 'type' => '1', 'fetch_url' => 'https://www.investing.com/indices/germany-30'),
            array('market_name' => 'US 30', 'type' => '1', 'fetch_url' => 'https://www.investing.com/indices/us-30-futures'),
            array('market_name' => 'Nasdaq 100', 'type' => '1', 'fetch_url' => 'https://www.investing.com/indices/nq-100-futures'),
            array('market_name' => 'S&P 500', 'type' => '1', 'fetch_url' => 'https://www.investing.com/indices/us-spx-500-futures'),
            array('market_name' => 'FRA 40', 'type' => '1', 'fetch_url' => 'https://www.investing.com/indices/france-40-futures'),

            // Commodities
            array('market_name' => 'Sugar', 'type' => '2', 'fetch_url' => 'https://www.investing.com/commodities/us-sugar-no11'),
            array('market_name' => 'Oil', 'type' => '2', 'fetch_url' => 'https://www.investing.com/commodities/crude-oil'),
            array('market_name' => 'Brent Oil', 'type' => '2', 'fetch_url' => 'https://www.investing.com/commodities/brent-oil'),
            array('market_name' => 'Wheat', 'type' => '2', 'fetch_url' => 'https://www.investing.com/commodities/us-wheat'),
            array('market_name' => 'XAUUSD', 'type' => '2', 'fetch_url' => 'https://www.investing.com/currencies/xau-usd'),
            array('market_name' => 'XAGUSD', 'type' => '2', 'fetch_url' => 'https://www.investing.com/currencies/xag-usd'),

                // CFDS
            array('market_name' => 'Amazon', 'type' => '3', 'fetch_url' => 'https://www.investing.com/equities/amazon-com-inc'),
            array('market_name' => 'Apple', 'type' => '3', 'fetch_url' => 'https://www.investing.com/equities/apple-computer-inc'),
            array('market_name' => 'BMW', 'type' => '3', 'fetch_url' => 'https://www.investing.com/equities/bayerische-motoren-werke-ag-pk'),
            array('market_name' => 'Facebook', 'type' => '3', 'fetch_url' => 'https://www.investing.com/equities/facebook-inc'),
            array('market_name' => 'Google', 'type' => '3', 'fetch_url' => 'https://www.investing.com/equities/google-inc-c'),
            array('market_name' => 'Tesla', 'type' => '3', 'fetch_url' => 'https://www.investing.com/equities/tesla-motors'),

            //FX MARKETS
            array('market_name' => 'EURUSD', 'type' => '4', 'fetch_url' => 'https://www.investing.com/currencies/eur-usd'),
            array('market_name' => 'GBPUSD', 'type' => '4', 'fetch_url' => 'https://www.investing.com/currencies/gbp-usd'),
            array('market_name' => 'USDJPY', 'type' => '4', 'fetch_url' => 'https://www.investing.com/currencies/usd-jpy'),
            array('market_name' => 'USDCHF', 'type' => '4', 'fetch_url' => 'https://www.investing.com/currencies/usd-chf'),
            array('market_name' => 'AUDUSD', 'type' => '4', 'fetch_url' => 'https://www.investing.com/currencies/aud-usd'),
            array('market_name' => 'NZDUSD', 'type' => '4', 'fetch_url' => 'https://www.investing.com/currencies/nzd-usd'),
            array('market_name' => 'USDTRY', 'type' => '4', 'fetch_url' => 'https://www.investing.com/currencies/usd-try'),
            array('market_name' => 'EURTRY', 'type' => '4', 'fetch_url' => 'https://www.investing.com/currencies/eur-try')
        );

        foreach ($market_data as $m){
            $market = Market::where('market_name', $m["market_name"])->first();
            if(is_null($market)){
                Market::insert($m);
            }
        }
    }
}
