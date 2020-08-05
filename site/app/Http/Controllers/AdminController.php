<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Journal;
use App\JournalCurrency;
use App\DailyUpdate;
use App\DailyUpdateArticle;
use Redirect;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //App::setLocale('tr');
        setlocale(LC_TIME, "tr_TR.UTF8");
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.ü
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manage.index');
    }

    public function campaign_list(){
        $campaigns = Campaign::orderBy('created_at')->paginate(5);
        return view('manage.campaign_list', [
            'campaigns' => $campaigns
        ]);
    }

    public function campaign_new(){
        return view('manage.campaign_form');
    }

    public function campaign_edit($campaign_id, Request $request){
        $campaign = Campaign::where('id', $campaign_id)->first();
        return view('manage.campaign_form', [
            'campaign' => $campaign
        ]);
    }

    public function campaign_save(Request $request){
        $campaign_title = $request->input('c_title');
        $campaign_image = $request->input('c_image_url');
        $campaign_detail = $request->input('c_detail');
        $campaign_summary = $request->input('c_summary');
        $campaign_slug = str_slug($campaign_title, "-");
        $campaign = Campaign::create([
            'title' => $campaign_title,
            'slug' => $campaign_slug,
            'image' => $campaign_image,
            'detail' => $campaign_detail,
            'summary' => $campaign_summary,
        ]);
        return redirect('/moneytalks/campaigns')->with('campaign_saved', $campaign_title);
    }

    public function campaign_update($campaign_id, Request $request){
        $campaign_title = $request->input('c_title');
        $campaign_image = $request->input('c_image_url');
        $campaign_detail = $request->input('c_detail');
        $campaign_summary = $request->input('c_summary');
        $campaign_slug = str_slug($campaign_title, "-");

        $campaign = Campaign::where('id', $campaign_id)->first();
        $campaign->title = $campaign_title;
        $campaign->slug = $campaign_slug;
        $campaign->image = $campaign_image;
        $campaign->detail = $campaign_detail;
        $campaign->summary = $campaign_summary;
        $campaign->save();
        return redirect('/moneytalks/campaigns')->with('campaign_updated', $campaign_title);
    }

    public function campaign_show($campaign_id){
        $campaign = Campaign::where('id', $campaign_id)->first();
        $campaign->status = true;
        $campaign->save();
        return redirect('/moneytalks/campaigns')->with('campaign_updated', $campaign->title);
    }

    public function campaign_hide($campaign_id){
        $campaign = Campaign::where('id', $campaign_id)->first();
        $campaign->status = false;
        $campaign->save();
        return redirect('/moneytalks/campaigns')->with('campaign_updated', $campaign->title);
    }

    public function media_upload(Request $request){
        $image = $request->file('file');
        $imagename = $image->getClientOriginalName();
        $image->move(public_path('uploads'),$imagename);
        return response()->json(['image_url'=>$imagename]);
    }

    public function journals_list(){
        $journals = Journal::orderBy('release_date', 'desc')->paginate(20);

        return view('manage.journal_list', [
            'journals' => $journals
        ]);
    }

    public function journals_new(){
        $currencies = DB::table('currencies')->get();
        return view('manage.journal_form', [
            "currencies" => $currencies
        ]);
    }

    public function journals_edit($journal_id, Request $request){
        $currencies = DB::table('currencies')->get();
        $journal = Journal::where('id', $journal_id)->with('currencies')->first();
        return view('manage.journal_form', [
            'journal' => $journal,
            "currencies" => $currencies
        ]);
    }

    public function journal_save(Request $request){
        $currencies = DB::table('currencies')->get();
        $time = strtotime($request->input('j_date'));
        $release_date = date('Y-m-d',$time) . " 00:00:00";



        $journal = Journal::where('release_date', $release_date)->first();
        if(!is_null($journal)){
            return abort(500, "Duplicate Journal");
        }

        $journal = Journal::create([
            'release_date' => $release_date
        ]);

        foreach ($currencies as $currency) {
            $currencyImage = trim($request->input('ji_' . $currency->symbol));
            $currencyJournal = trim($request->input('jd_' . $currency->symbol));
            $journal_currency = JournalCurrency::create([
                'journal_id' => $journal->id,
                'currency_id' => $currency->id,
                'image_url' => $currencyImage,
                'detail' => $currencyJournal,
                'title' => $request->input('jt_' . $currency->symbol),
                'resistance_c1' => $request->input('jr1_' . $currency->symbol),
                'resistance_c2' => $request->input('jr2_' . $currency->symbol),
                'resistance_c3' => $request->input('jr3_' . $currency->symbol),
                'support_c1' => $request->input('js1_' . $currency->symbol),
                'support_c2' => $request->input('js2_' . $currency->symbol),
                'support_c3' => $request->input('js3_' . $currency->symbol),
            ]);
        }
        return redirect('/moneytalks/journals')->with('journal_added', $release_date);
    }

    public function journal_update($journal_id, Request $request){
        $currencies = DB::table('currencies')->get();
        $time = strtotime($request->input('j_date'));
        $release_date = date('Y-m-d',$time) . " 00:00:00";
        $journal = Journal::where('id', $journal_id)->first();

        $existing_journal = Journal::where('release_date', $release_date)->first();
        if(!is_null($existing_journal) && $existing_journal->id != $journal->id){
            return abort(500, "Duplicate Journal");
        }
        $journal->release_date = $release_date;
        $journal->save();

        foreach ($currencies as $currency) {
            $currencyImage = trim($request->input('ji_' . $currency->symbol));
            $currencyJournal = trim($request->input('jd_' . $currency->symbol));
            $journal_currency = JournalCurrency::where('journal_id', $journal->id)->where('currency_id', $currency->id)->first();
            if(is_null($journal_currency)){
                $journal_currency = JournalCurrency::create([
                    'journal_id' => $journal->id,
                    'currency_id' => $currency->id,
                    'image_url' => $currencyImage,
                    'detail' => $currencyJournal,
                    'title' => $request->input('jt_' . $currency->symbol),
                    'resistance_c1' => $request->input('jr1_' . $currency->symbol),
                    'resistance_c2' => $request->input('jr2_' . $currency->symbol),
                    'resistance_c3' => $request->input('jr3_' . $currency->symbol),
                    'support_c1' => $request->input('js1_' . $currency->symbol),
                    'support_c2' => $request->input('js2_' . $currency->symbol),
                    'support_c3' => $request->input('js3_' . $currency->symbol),
                ]);
            } else {
                $journal_currency->image_url = $currencyImage;
                $journal_currency->detail = $currencyJournal;
                $journal_currency->title =  $request->input('jt_' . $currency->symbol);
                $journal_currency->resistance_c1 =  $request->input('jr1_' . $currency->symbol);
                $journal_currency->resistance_c2 =  $request->input('jr2_' . $currency->symbol);
                $journal_currency->resistance_c3 =  $request->input('jr3_' . $currency->symbol);
                $journal_currency->support_c1 =  $request->input('js1_' . $currency->symbol);
                $journal_currency->support_c2 =  $request->input('js2_' . $currency->symbol);
                $journal_currency->support_c3 =  $request->input('js3_' . $currency->symbol);
                $journal_currency->save();
            }
        }
        return redirect("/moneytalks/journals")->with('journal_updated', $release_date);
    }

    public function updates_list(){
        $updates = DailyUpdate::orderBy('release_date', 'desc')->paginate(20);

        return view('manage.updates_list', [
            'updates' => $updates
        ]);
    }

    public function updates_new(){
        return view('manage.updates_form');
    }

    public function updates_save(Request $request){
        $time = strtotime($request->input('j_date'));
        $release_date = date('Y-m-d',$time) . " 00:00:00";

        $daily_update = DailyUpdate::where('release_date', $release_date)->first();
        if(!is_null($daily_update)){
            return abort(500, "kayıt var");
            exit;
        }

        $daily_update = DailyUpdate::create([
            'release_date' => $release_date,
            'status' => 1
        ]);

        $titles = $request->input('blocktitle');
        $images = $request->input('blockimage');
        $descs = $request->input('blockdesc');

        if(count($titles) != count($images) || count($images) != count($descs)){
            return abort(500, "kayıt var");
            exit;
        }

        for ($i=0; $i < count($titles); $i++) {
            DailyUpdateArticle::create([
                "daily_update_id" => $daily_update->id,
                "title" => $titles[$i],
                "image_url" => $images[$i],
                "desc" => $descs[$i]
            ]);
        }

        return redirect('/moneytalks/updates')->with('updated', $release_date);
    }

    public function update_show($update_id){
        $update = DailyUpdate::where('id', $update_id)->first();
        $update->status = true;
        $update->save();
        return redirect('/moneytalks/updates')->with('updated', $update->release_date);
    }

    public function update_hide($update_id){
        $update = DailyUpdate::where('id', $update_id)->first();
        $update->status = false;
        $update->save();
        return redirect('/moneytalks/updates')->with('updated', $update->release_date);
    }

    public function update_edit($update_id){
        $update = DailyUpdate::where('id', $update_id)->with('articles')->first();
        return view('manage.updates_form', [
            'update' => $update
        ]);
    }

    public function updates_update($update_id, Request $request){

        $time = strtotime($request->input('j_date'));
        $release_date = date('Y-m-d',$time) . " 00:00:00";

        $update = DailyUpdate::where('id', $update_id)->first();
        if(!$update){
            return abort(500, "No update found");
        }

        $update->release_date = $release_date;
        $update->save();

        DailyUpdateArticle::where('daily_update_id', $update->id)->delete();

        $titles = $request->input('blocktitle');
        $images = $request->input('blockimage');
        $descs = $request->input('blockdesc');

        if(count($titles) != count($images) || count($images) != count($descs)){
            return abort(500, "kayıt var");
            exit;
        }

        for ($i=0; $i < count($titles); $i++) {
            DailyUpdateArticle::create([
                "daily_update_id" => $update->id,
                "title" => $titles[$i],
                "image_url" => $images[$i],
                "desc" => $descs[$i]
            ]);
        }

        return redirect('/moneytalks/updates')->with('updated', $update->release_date);
    }

    public function journal_show($journal_id){
        $journal = Journal::where('id', $journal_id)->first();
        $journal->status = true;
        $journal->save();
        return redirect("/moneytalks/journals")->with('journal_updated', $journal->release_date);
    }

    public function journal_hide($journal_id){
        $journal = Journal::where('id', $journal_id)->first();
        $journal->status = false;
        $journal->save();
        return redirect("/moneytalks/journals")->with('journal_updated', $journal->release_date);
    }

    public function signals(){
        $signals = DB::table('storage')->where('key', 'signals')->first();
        return view('manage.signals', [
            'signal_data' => $signals
        ]);
    }

    public function signals_save(Request $request){
        $table_data = $request->input('table_data');
        $response = array();

        $db_signal = DB::table('storage')->where('key', 'signals')->first();

        if(is_null($db_signal) || !isset($db_signal->id)){
            DB::table('storage')->insert(
                ['key' => 'signals', 'value' => $table_data]
            );
            $response["success"] = true;
            return response()->json($response, 200);
        }

        DB::table('storage')->where('key', 'signals')->update(['value' => $table_data]);
        $response["success"] = true;
        return response()->json($response, 200);
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
