<?php
namespace Modules\Admin\Http\Controllers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Illuminate\Http\Request;
use Modules\Admin\Models\User; 
use Input;
use Validator;
use Auth;
use Paginate;
use Grids;
use HTML;
use Form;
use Hash;
use View;
use URL;
use Lang;
use Session; 
use Route;
use Crypt; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Dispatcher; 
use App\Helpers\Helper;
use Modules\Admin\Models\Program;
use Response; 
use Modules\Admin\Http\Requests\ProgramRequest;
use Modules\Admin\Models\Position;

/**
 * Class AdminController
 */
class PositionController extends Controller {
    /**
     * @var  Repository
     */

    /**
     * Displays all admin.
     *
     * @return \Illuminate\View\View
     */
    public function __construct(Position $position) { 
        $this->middleware('admin');
        View::share('viewPage', 'Position');
        View::share('sub_page_title', 'position');
        View::share('helper',new Helper);
        View::share('heading','position');
        View::share('route_url',route('position')); 
        $this->record_per_page = Config::get('app.record_per_page'); 
    }
   
    /*
     * Dashboard
     * */

    public function index(Position $position, Request $request) 
    { 
        $page_title = 'Position';
        $sub_page_title = 'View Position';
        $page_action = 'View Position'; 

        if ($request->ajax()) {
            $id = $request->get('id'); 
            $market_name = Position::find($id); 
            $market_name->status = $s;
            $market_name->save();
            echo $s;
            exit();
        }

        // Search by name ,email and group
        $search = Input::get('search');
        $status = Input::get('status');
        if ((isset($search) && !empty($search))) {

            $search = isset($search) ? Input::get('search') : '';
               
            $position = Position::with('user')->where(function($query) use($search,$status) {
                        if (!empty($search)) {
                            $query->Where('market_name', 'LIKE', "%$search%");
                        }
                        
                    })->Paginate($this->record_per_page);
        } else {
            $position = Position::with('user')->get();//Paginate($this->record_per_page);
        }
        
         
        return view('packages::position.index', compact('position','page_title', 'page_action','sub_page_title'));
    }

    /*
     * create Group method
     * */

    public function create(Position $position) 
    {
        $page_title     = 'Position';
        $page_action    = 'Create Position';
        $status         = [ 0=>'Select Reward Type',
                            1=>'Fixed',
                            2=>'Percentage'
                        ];

        $users = User::pluck('first_name','id');
        
        return view('packages::position.create', compact( 'position','status','page_title', 'page_action','users'));
    }

    

    /*
     * Save Group method
     * */

    public function store(Request $request, Position $position) 
    {   

        $start_date = $request->date_time;
        
        $timestamp_sd  = strtotime($start_date);

        $request->merge(['date_time'   =>  date('Y-m-d', $timestamp_sd)]); 
        
        $position->fill(Input::all()); 

        $position->save();   
         
        return Redirect::to(route('position'))
                            ->with('flash_alert_notice', 'New Position  successfully Added!');
    }

    /*
     * Edit Group method
     * @param 
     * object : $category
     * */

    public function edit($id) {
        
        $position = Position::find($id);
        $page_title     = 'Position';
        $page_action    = 'Edit Position'; 

         $status         = [ 0=>'Select Reward Type',
                            1=>'Fixed',
                            2=>'Percentage'
                        ];
        $users = User::pluck('first_name','id');

        return view('packages::position.edit', compact('position','status', 'page_title', 'page_action','users'));
    }

    public function update(Request $request, $id) {
        $position = Position::find($id);
        
        $date_time = $request->date_time;
        
        $timestamp_sd  = strtotime($date_time);

        $request->merge(['date_time'   =>  date('Y-m-d', $timestamp_sd)]); 
       
        $position->fill(Input::all()); 
        $position->save();  
       
        return Redirect::to(route('position'))
                        ->with('flash_alert_notice', 'Position  successfully updated.');
    }
    /*
     *Delete User
     * @param ID
     * 
     */
    public function destroy($program) { 
        
        Program::where('id',$program)->delete();
        return Redirect::to(route('program'))
                        ->with('flash_alert_notice', 'Campaign  successfully deleted.');
    }

    public function show($id) {
        $program = Program::find($id);
        $page_title     = 'Campaign';
        $page_action    = 'Show Campaign'; 
        $result = $program;

        $trigger_condition = '(
                        CASE 
                        WHEN trigger_condition = 1 THEN "Sign up" 
                        WHEN trigger_condition = 2 THEN "First Transaction"
                        ELSE
                        "Sign up" end) as trigger_condition';

         $reward_type = '(
                        CASE
                        WHEN reward_type = 1 THEN "Fixed" 
                        WHEN reward_type = 2 THEN "Percentage" 
                        ELSE
                        "Fixed" end) as reward_type';
        $promotion_type = '(
                        CASE
                        WHEN promotion_type = 1 THEN "Referral" 
                        WHEN promotion_type = 2 THEN "Bonus" 
                        ELSE
                        "Bonus" end) as promotion_type';

        $status = '(
                        CASE
                        WHEN status = 1 THEN "Active" 
                        WHEN status = 2 THEN "Planned"
                        WHEN status = 3 THEN "Draft" 
                        ELSE
                        "Active" end) as status';
        $customer_type = '(
                        CASE
                        WHEN customer_type = 1 THEN "Public" 
                        WHEN customer_type = 2 THEN "Custom"
                        ELSE
                        "Public" end) as customer_type';

        $program = Program::where('id',$program->id)
                    ->select('*',
                        \DB::raw($customer_type),
                        \DB::raw($trigger_condition),
                        \DB::raw($reward_type),
                        \DB::raw($promotion_type),
                        \DB::raw($status))
                    ->first()
                    ->toArray();  

        return view('packages::program.show', compact( 'result','program','page_title', 'page_action'));

    }

}