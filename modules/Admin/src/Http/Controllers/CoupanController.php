<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\BannerRequest;
use Modules\Admin\Models\User; 
use Input, Validator, Auth, Paginate, Grids, HTML;
use Form, Hash, View, URL, Lang, Session, DB;
use Route, Crypt, Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Dispatcher; 
use App\Helpers\Helper;
use Modules\Admin\Models\Roles; 
use Modules\Admin\Models\Coupan; 

class CoupanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() { 
        $this->middleware('admin');
        View::share('viewPage', 'coupon');
        View::share('sub_page_title', 'Create');
        View::share('helper',new Helper);
        View::share('heading','Create');
        View::share('route_url',route('coupon.create'));

        $this->record_per_page = Config::get('app.record_per_page');
    }
    public function index(Coupan $coupan, Request $request)
    {
        $page_title = 'coupan';
        $page_action = 'View coupon'; 
 
        $url = '';//dd($banner);
          if ($request->ajax()) {
            $id = $request->get('id'); 
            $banner = Coupan::find($id); 
            $banner->status = $s;
            $banner->save(); 
            exit();
        }

        // Search by name ,email and group
        $search = Input::get('search');

        if ((isset($search) && !empty($search))) {

            $search = isset($search) ? Input::get('search') : '';
               
            $coupan = Coupan::where(function($query) use($search) {
                        if (!empty($search)) {
                            $query->Where('code', 'LIKE', "%$search%");
                        }
                        
                    })->Paginate($this->record_per_page);
  
        } else {
            $coupan = Coupan::Paginate($this->record_per_page);
            
        }
         

       

        return view('packages::coupan.home', compact( 'page_title','coupan','page_action','url'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Coupan $coupan)
    {
       $page_title = 'coupan';
        $page_action = 'Create Coupan';
        $url ="";

       return view('packages::coupan.create', compact( 'page_title','coupan','page_action','url'));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Coupan $coupan)
    {
        $coupan = new Coupan;
      
       $coupan->code        =  $request->get('code');
       $coupan->amount  =  $request->get('amount');
        $coupan->description  =  $request->get('description');
       $coupan->bonus  =  $request->get('bonus');
        $coupan->extra_cash  =  $request->get('extra_cash');
       $coupan->amount_type  =  $request->get('amount_type');
        $coupan->discount_type  =  $request->get('discount_type');
       $coupan->valid_from  =  $request->get('valid_from');
        $coupan->valid_to  =  $request->get('valid_to');

        $coupan->save();

        return redirect('coupon')
                            ->with('flash_alert_notice', 'New coupon  successfully created !');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Coupan $coupan)
    {
 
        $page_title = 'coupan';
        $page_action = 'Edit Coupan';
        $url ="";

        $coupon_data = Coupan::where('id',$id)->first();
        //dd($coupon_data);
       return view('packages::coupan.edit', compact( 'page_title','coupan','coupon_data','page_action','url'));
   
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
        $coupan = Coupan::find($id);

        $coupan->code        =  $request->get('code');
        $coupan->amount  =  $request->get('amount');
        $coupan->description  =  $request->get('description');
        $coupan->bonus  =  $request->get('bonus');
        $coupan->extra_cash  =  $request->get('extra_cash');
        $coupan->amount_type  =  $request->get('amount_type');
        $coupan->discount_type  =  $request->get('discount_type');
        $coupan->valid_from  =  $request->get('valid_from');
        $coupan->valid_to  =  $request->get('valid_to');

        $coupan->save();

        return Redirect::to(url('coupon'))
                        ->with('flash_alert_notice', ' Coupan Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      DB::table('coupon')->where('id',$id)->delete(); 
        return Redirect::to(url('coupon'))
                        ->with('flash_alert_notice', ' Coupan  successfully deleted.');
    }
}

