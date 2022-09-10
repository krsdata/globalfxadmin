@extends('packages::layouts.master')
@section('title', 'Dashboard')
@section('header')
<h1>Dashboard</h1>
@stop
@section('content') 
@include('packages::partials.navigation')
<!-- Left side column. contains the logo and sidebar -->
@include('packages::partials.sidebar') 

<!-- END SIDEBAR -->
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <!-- BEGIN PAGE HEAD-->
    
    <!-- END PAGE HEAD-->
    <!-- BEGIN PAGE BREADCRUMB -->
     @include('packages::partials.breadcrumb')
    <!-- END PAGE BREADCRUMB -->
    <!-- BEGIN PAGE BASE CONTENT -->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-settings font-red"></i>
                        <span class="caption-subject font-red sbold uppercase">{{$heading ?? ''}}</span>
                    </div>
                     
              

                </div>
                <div class="portlet-body table-responsive">
                    <div class="table-toolbar">
                        <div class="row">
                            <form action="{{route('user')}}" method="get" id="filter_data">
                            <div class="col-md-2">
                                <select name="status" class="form-control" onChange="SortByStatus('filter_data')">
                                    <option value="">Search by Status</option>
                                    <option value="active" @if($status==='active') selected  @endif>Active</option>
                                    <option value="inActive" @if($status==='inActive') selected  @endif>Inactive</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select name="role_type" class="form-control" onChange="SortByStatus('filter_data')">
                                    <option value="">Search by Role</option>
                                    @if($roles)
                                        @foreach($roles as $role)
                                            <option value="{{$role->id}}" @if($role_type==$role->id) selected @endif >{{$role->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-md-2">
                                <input value="{{ (isset($_REQUEST['search']))?$_REQUEST['search']:''}}" placeholder="search by Name/Email" type="text" name="search" id="search" class="form-control" >
                            </div>

                            <div class="col-md-2">
                                <input value="{{ (isset($_REQUEST['mobile_number']))?$_REQUEST['mobile_number']:''}}" placeholder="search by mobile number" type="text" name="mobile_number" id="search" class="form-control" >
                            </div>
                            <div class="col-md-2">
                                <input type="submit" value="Search" class="btn btn-primary form-control">
                            </div>
                           
                        </form>
                         
                       <div class="col-md-2 pull-right">
                            <div style="width: 150px;" class="input-group"> 
                                <a href="{{ route('user.create')}}">
                                    <button class="btn  btn-primary"><i class="fa fa-user-plus"></i> Add User</button> 
                                </a>
                            </div>
                        </div> 
                        </div>
                    </div>

                     @if(Session::has('flash_alert_notice'))
                         <div class="alert alert-success alert-dismissable" style="margin:10px">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                          <i class="icon fa fa-check"></i>  
                         {{ Session::get('flash_alert_notice') }} 
                         </div>
                    @endif
                    @if($users->count()==0)
                   
                     <span class="caption-subject font-red sbold uppercase"> Record not found!</span>
                    @else 
                    <table class="table table-striped table-hover table-bordered" id="">
                        <thead>
                            <tr>
                                 <th> Sno. </th>
                                <th> Full Name </th>
                                <th> Email </th>
                                <th>Wallet Balance </th>
                                <th> Phone no</th>
                                <th> Signup Date </th>
                                <th>Status</th>
                                <th>Action</th> 
                            </tr>
                        </thead>
                        <tbody>

                    
                        @foreach($users as $key => $result)
                            <tr>
                                 <td> {{ (($users->currentpage()-1)*15)+(++$key) }}</td>
                                
                                 <td> {{$result->first_name}}
                                 </td>
                                <td> {{$result->email}} </td>
                                
                                <td class="center"> 
                                @if($setting->currency=='INR')
                                ₹{{$result->wallet_balance*$setting->currency_value}}
                                @else
                                ${{$result->wallet_balance}}
                                @endif
                                
                                    
                                </td>

                                <td> {{$result->mobile_number}} </td>
                                <td>
                                    {!! Carbon\Carbon::parse($result->created_at)->format('d-m-Y'); !!}
                                </td>
                                <td>
                                    <span class="label label-{{ ($result->status==1)?'success':'warning'}} status" id="{{$result->id}}"  data="{{$result->status}}"  onclick="changeStatus({{$result->id}},'user')" >
                                            {{ ($result->status==1)?'Active':'Inactive'}}
                                        </span>
                                </td>
                                <td> 
                                    <a href="{{ route('user.edit',$result->id)}}?role_type={{$result->role_type}}">
                                            <i class="fa fa-fw fa-pencil-square-o" title="edit"></i> 
                                        </a>

                                        {!! Form::open(array('class' => 'form-inline pull-left deletion-form', 'method' => 'DELETE',  'id'=>'deleteForm_'.$result->id, 'route' => array('user.destroy', $result->id))) !!}
                                        <button class='delbtn btn btn-danger btn-xs' type="submit" name="remove_levels" value="delete" id="{{$result->id}}"><i class="fa fa-fw fa-trash" title="Delete"></i></button>
                                        
                                         {!! Form::close() !!}

                                    </td>
                               
                            </tr>
                           @endforeach
                         @endif   
                        </tbody>
                    </table>
                    Showing {{($users->currentpage()-1)*$users->perpage()+1}} to {{$users->currentpage()*$users->perpage()}}
                    of  {{$users->total()}} entries
                     <div class="center" align="center">  {!! $users->appends(['search' => isset($_GET['search'])?$_GET['search']:''])->render() !!}</div>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
    <!-- END PAGE BASE CONTENT -->
</div>
<!-- END CONTENT BODY -->
</div>


<!-- END QUICK SIDEBAR -->
</div>

<div class="modal fade" id="notification" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Notify User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      <div class="modal-body">



   </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>


<script type="text/javascript">

function SortByStatus(filter_data) {
$('#filter_data').submit();
}
</script>

@stop