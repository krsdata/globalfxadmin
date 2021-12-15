<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;
use Modules\Admin\Models\User; 
use Input, Validator, Auth, Paginate, Grids, HTML;
use Form, Hash, View, URL, Lang, Session, DB;
use Route, Crypt, Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Dispatcher; 
use App\Helpers\Helper;
use Modules\Admin\Models\Roles; 
use Modules\Admin\Models\Leaderboard; 


class LeaderboardController extends Controller
{
    


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function __construct() { 
        $this->middleware('admin');
        View::share('viewPage', 'leaderboard');
        View::share('sub_page_title', 'Create');
        View::share('helper',new Helper);
        View::share('heading','Create');
        View::share('route_url',route('leaderboard.create'));

        $this->record_per_page = Config::get('app.record_per_page');
    }
    public function index(Leaderboard $leaderboard, Request $request)
    {
       $page_title = 'leaderboard';
        $page_action = 'View leaderboard'; 
 
        $url = '';//dd($banner);
          if ($request->ajax()) {
            $id = $request->get('id'); 
            $banner = Leaderboard::find($id); 
            $banner->status = $s;
            $banner->save(); 
            exit();
        }

        // Search by name ,email and group
        $search = Input::get('search');

        if ((isset($search) && !empty($search))) {

            $search = isset($search) ? Input::get('search') : '';
               
            $leaderboard = Leaderboard::where(function($query) use($search) {
                        if (!empty($search)) {
                            $query->Where('series_name', 'LIKE', "%$search%");
                        }
                        
                    })->Paginate($this->record_per_page);
  
        } else {
            $leaderboard = Leaderboard::Paginate($this->record_per_page);
    }
    return view('packages::leaderboard.home', compact( 'page_title','leaderboard','page_action','url'));
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Leaderboard $leaderboard)
    {
        //dd('hhhhh');
         $page_title = 'leaderboard';
        $page_action = 'Create Leaderboard';
        $url ="";

       return view('packages::leaderboard.create', compact( 'page_title','leaderboard','page_action','url'));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Leaderboard $leaderboard)
    {
        $leaderboard = new Leaderboard;
      
       $leaderboard->cid            =  $request->get('cid');
       $leaderboard->league_duration  =  $request->get('league_duration');
       $leaderboard->status  =  $request->get('status');
       
       $leaderboard->series_name  =  $request->get('series_name');
        $leaderboard->priority  =  $request->get('priority');
      

        $leaderboard->save();

        return redirect('leaderboard')
                            ->with('flash_alert_notice', 'New Leaderboard  successfully created !');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       dd('hhhhh');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Leaderboard $leaderboard)
    {
       $page_title = 'leaderboard';
        $page_action = 'Edit Leaderboard';
        $url ="";

        $leaderboard_data = Leaderboard::where('id',$id)->first();
       
       return view('packages::leaderboard.edit', compact( 'page_title','leaderboard','leaderboard_data','page_action','url'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $id= $request->id;
        $leaderboard = Leaderboard::find($id);

       $leaderboard->cid            =  $request->get('cid');
       $leaderboard->league_duration  =  $request->get('league_duration');
       $leaderboard->status  =  $request->get('status');
       
       $leaderboard->series_name  =  $request->get('series_name');
        $leaderboard->priority  =  $request->get('priority');
      

        $leaderboard->save();

        return Redirect::to(url('leaderboard'))
                        ->with('flash_alert_notice', ' Leaderboard Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       DB::table('leaderboard_matches')->where('id',$id)->delete(); 
        return Redirect::to(url('leaderboard'))
                        ->with('flash_alert_notice', ' leaderboard  successfully deleted.');
    }
}
