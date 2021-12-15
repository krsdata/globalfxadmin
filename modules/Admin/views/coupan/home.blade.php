
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
                                        <span class="caption-subject font-red sbold uppercase">{{ $heading }}</span>
                                    </div>
                                     <div class="col-md-2 pull-right">
                                            <div style="width: 150px;" class="input-group"> 
                                                <a href="{{url('admin/coupon/create')}}">
                                                    <button class="btn btn-success"><i class="fa fa-plus-circle"></i> Add Coupon</button> 
                                                </a>
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
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <form action="{{url('admin/coupan/search')}}" method="get" id="filter_data">
                                             
                                            <div class="col-md-3">
                                                <input value="{{ (isset($_REQUEST['search']))?$_REQUEST['search']:''}}" placeholder="Search by  name" type="text" name="search" id="search" class="form-control" >
                                            </div>
                                            <div class="col-md-2">
                                                <input type="submit" value="Search" class="btn btn-primary form-control">
                                            </div>
                                           
                                        </form>
                                         <div class="col-md-2">
                                             <a href="">   <input type="submit" value="Reset" class="btn btn-default form-control"> </a>
                                        </div>
                                       
                                        </div>
                                    </div>
                                     
                                    <table class="table table-striped table-hover table-bordered" id="">
                                        <thead>
                                            <tr>
                                                <th>code</th>
                                                <th> amount  </th> 
                                                <th>description</th>
                                                <th>bonus   </th>
                                                <th>extra_cash  </th>
                                                <th>amount_type</th>
                                                <th>discount_type   </th>
                                                <th>valid_from  </th>
                                                <th>valid_to    </th>
                                                <th>Created date</th> 
                                                <th>Action</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($coupan as $key => $result)
                                            <tr>
                                                <td> {{$result->code}} </td>
                                                
                                                <td>{{$result->amount   }}</td>
                                                <td>{{$result->description}}</td>
                                                <td>{{$result->bonus  }}</td>
                                                <td>{{$result->extra_cash   }}</td>
                                                <td>{{$result->amount_type}}</td>
                                                <td>{{$result->discount_type    }}</td>
                                                <td>{{$result->valid_from   }}</td>
                                                <td>{{$result->valid_to }}</td>
                                                
                                                     <td>
                                                        {!! Carbon\Carbon::parse($result->created_at)->format('d-m-Y'); !!}
                                                    </td>
                                                    
                                                    
                                                    <td> 
                                                 <a href="{{ url('coupon/delete/'.$result->id)}}" class='delbtn btn btn-danger btn-xs'>
                                                            <i class="fa fa-fw fa-trash" title="Delete"></i>
                                                        </a>
                                                    <a href="{{ url('coupon/edit/'.$result->id)}}">
                                                            <i class="fa fa-edit" title="edit"></i> 
                                                        </a>

                                                    </td>
                                               
                                            </tr>
                                           @endforeach

                                            
                                        </tbody>
                                    </table>
                                     <div class="center" align="center">  {!! $coupan->appends(['search' => isset($_GET['search'])?$_GET['search']:''])->render() !!}</div>
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
        
@stop