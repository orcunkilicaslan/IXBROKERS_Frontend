<?php

namespace App\Console\Commands;

use App\Market;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Weidner\Goutte\GoutteFacade;

class pricepull extends Command
{
    protected $signature = 'price:pull';
    protected $description = 'Loads latest market prices';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $markets = Market::where('status', 1)->get();
        foreach ($markets as $market){
            switch ($market->type){
                case 1:
                case 2:
                    $price_data = $this->getOpenClosePrice($market->fetch_url);
                    if($price_data){
                        $market->open = $price_data['open'];
                        $market->previous_close = $price_data['close'];
                        $market->current_price = $price_data['current'];
                        $market->save();
                    }
                    break;
                case 3:
                    $price_data = $this->getBidAskVolumePrice($market->fetch_url);
                    if($price_data){
                        $market->volume = $price_data['volume'];
                        $market->bid = $price_data['bid'];
                        $market->ask = $price_data['ask'];
                        $market->current_price = $price_data['current'];
                        $market->save();
                    }
                    break;
                case 4:
                    $price_data = $this->getCloseBidAskPrice($market->fetch_url);
                    if($price_data){
                        $market->previous_close = $price_data['close'];
                        $market->bid = $price_data['bid'];
                        $market->ask = $price_data['ask'];
                        $market->current_price = $price_data['current'];
                        $market->save();
                    }
                    break;
                default:
                    echo "Undefined market type";
                    break;
            }
        }

        Cache::forget('marketprices');
    }




    private function getOpenClosePrice($url){
        try {
            $crawler = GoutteFacade::request('GET', $url);
            $closePrice = $this->formatPrice($crawler->filter('#quotes_summary_secondary_data')->filter('li')->eq(0)->children('span')->last()->text());
            $openPrice = $this->formatPrice($crawler->filter('#quotes_summary_secondary_data')->filter('li')->eq(1)->children('span')->last()->text());
            $currentPrice = $this->formatPrice($crawler->filter('#quotes_summary_current_data')->filter('span#last_last')->text());

            return array(
                'open' => $openPrice,
                'close' => $closePrice,
                'current' => $currentPrice
            );
        } catch (\Exception $e) {
            print_r($e);
            return null;
        }
    }


    private function getBidAskVolumePrice($url){
        try {
            $crawler = GoutteFacade::request('GET', $url);
            $volume = $this->formatPrice($crawler->filter('#quotes_summary_secondary_data')->filter('li')->eq(0)->children('span')->last()->text());
            $bid = $this->formatPrice($crawler->filter('#quotes_summary_secondary_data')->filter('li')->eq(1)->children('span')->children('span')->first()->text());
            $ask = $this->formatPrice($crawler->filter('#quotes_summary_secondary_data')->filter('li')->eq(1)->children('span')->children('span')->last()->text());
            $currentPrice = $this->formatPrice($crawler->filter('#quotes_summary_current_data')->filter('span#last_last')->text());

            return array(
                'volume' => $volume,
                'bid' => $bid,
                'ask' => $ask,
                'current' => $currentPrice
            );
        } catch (\Exception $e) {
            print_r($e);
            return null;
        }
    }

    private function getCloseBidAskPrice($url){
        try {
            $crawler = GoutteFacade::request('GET', $url);
            $close = $this->formatPrice($crawler->filter('#quotes_summary_secondary_data')->filter('li')->eq(0)->children('span')->last()->text());
            $bid = $this->formatPrice($crawler->filter('#quotes_summary_secondary_data')->filter('li')->eq(1)->children('span')->children('span')->first()->text());
            $ask = $this->formatPrice($crawler->filter('#quotes_summary_secondary_data')->filter('li')->eq(1)->children('span')->children('span')->last()->text());
            $currentPrice = $this->formatPrice($crawler->filter('#quotes_summary_current_data')->filter('span#last_last')->text());

            return array(
                'close' => $close,
                'bid' => $bid,
                'ask' => $ask,
                'current' => $currentPrice
            );
        } catch (\Exception $e) {
            print_r($e);
            return null;
        }
    }

    private function formatPrice($price){
        $price = str_replace(',','', $price);
        return floatval($price);
    }
}
