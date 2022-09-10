 

<div class="form-body col-md-6">
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button> Please fill the required field! 
    </div> 
 
        <div class="form-group {{ $errors->first('market_name', ' has-error') }}">
                <label class="control-label col-md-4">Market Name <span class="required"> * </span></label>
                <div class="col-md-7"> 
                    {!! Form::text('market_name',null, ['class' => 'form-control','data-required'=>1,'required'])  !!} 
                    
                    <span class="help-block">{{ $errors->first('market_name', ':message') }}</span>
                </div>
        </div>  

        <div class="form-group {{ $errors->first('user_name', ' has-error') }}">
            <label class="control-label col-md-4">Customer Name </label>
            <div class="col-md-7"> 
                {{ Form::select('user_name', $users,$position->user_name,['class' => 'form-control']) }}
                <span class="help-block">{{ $errors->first('user_name', ':message') }}</span> 
            </div>
        </div> 
       
        <input type="hidden" name="currency" value="{{$setting->currency}}">
        
        <div class="form-group {{ $errors->first('bid_amount', ' has-error') }}">
            <label class="control-label col-md-4">Bid amount(@if($setting->currency=="INR")
                                                    ₹ 
                                                    @else 
                                                    $ 
                                                    @endif) <span class="required"> * </span></label>
            <div class="col-md-7"> 
                {!! Form::text('bid_amount',null, ['class' => 'form-control','data-required'=>1,'onkeypress'=>'return isNumberKey(event)','required'])  !!} 
                 
                <span class="help-block">{{ $errors->first('bid_amount', ':message') }}</span>
            </div>
        </div>

        <div class="form-group {{ $errors->first('p_l_amount', ' has-error') }}">
            <label class="control-label col-md-4">P_L_amount(@if($setting->currency=="INR")
                                                    ₹ 
                                                    @else 
                                                    $ 
                                                    @endif)
                                                    <span class="required"> * </span></label>
            <div class="col-md-7"> 
                {!! Form::text('p_l_amount',null, ['class' => 'form-control','data-required'=>1,'onkeypress'=>'return isNumberKey(event)','required'])  !!} 
                 
                <span class="help-block">{{ $errors->first('p_l_amount', ':message') }}</span>
            </div>
        </div>

        <!--
        <div class="form-group {{ $errors->first('date_time', ' has-error') }}  @if(session('field_errors')) {{ 'has-group' }} @endif">
            <label class="col-md-4 control-label">Position Date 
                <span class="required"> * </span>
            </label>
            <div class="col-md-7"> 

                  {!! Form::text('date_time',null, ['id'=>'startdate','class' => 'form-control ','data-required'=>1,"size"=>"16","data-date-format"=>"dd-mm-yyyy","data-date-start-date"=>"+0d",'required' ])  !!} 
                
                <span class="help-block">{{ $errors->first('date_time', ':message') }}</span>
            </div> 
        </div>

-->


        


</div>
<div class="form-actions">
    <div class="row">
        <div class="col-md-offset-3 col-md-12">
          {!! Form::submit(' Save Position ', ['class'=>'btn  btn-primary text-white','id'=>'saveBtn']) !!}


           <a href="{{route('position')}}">
{!! Form::button('Cancel', ['class'=>'btn btn-warning text-white']) !!} </a>
        </div>
    </div>
</div>




<div class="form-body">

  <script type="text/javascript">
       <!--
       function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
       //-->
    </script>



</div> 

