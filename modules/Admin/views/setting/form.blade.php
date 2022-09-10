<style type="text/css">
 li.multiselect-all,li.multiselect-item {
    margin-left: 25px;
  }
  ul.multiselect-container > li{
     margin-left: 25px;
  }
</style> 

<div class="form-body">
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button> Please fill the required field! </div>
  <!--   <div class="alert alert-success display-hide">
        <button class="close" data-close="alert"></button> Your form validation is successful! </div>
-->
         @if(Session::has('flash_alert_notice'))
             <div class="alert alert-success alert-dismissable" style="margin:10px">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
              <i class="icon fa fa-check"></i>  
             {{ Session::get('flash_alert_notice') }} 
             </div>
        @endif

	
                <div class="form-group {{ $errors->first('payment_status', ' has-error') }}">
                    <label class="control-label col-md-3"> Set Default currency
                        <span class="required"> *  </span>
                    </label>
                    <div class="col-md-6">
                    <select name="currency" class="form-control"> 
                    <option value="USD" {{ (isset($setting->currency) && $setting->currency=="USD")?"selected":'' }}>
                            USD($)
                                </option>
                        <option value="INR" {{ (isset($setting->currency) && $setting->currency=="INR")?"selected":'' }} >
                        INR(₹)
                        </option>
                        
                    </select>
                    </div>
                </div> 
 

        

        <div class="form-group {{ $errors->first('currency_value', ' has-error') }}">
            <label class="control-label col-md-3">Set Doller Price(1 USD=)  </label>
            <div class="col-md-6"> 
                {!! Form::text('currency_value',null, ['class' => 'form-control','data-required'=>1])  !!} 
                
                <span class="help-block">{{ $errors->first('currency_value', ':message') }}</span>
            </div>
        </div>
 

 

         


    
</div>
<div class="form-actions">
    <div class="row">
        <div class="col-md-offset-3 col-md-9">
         <!--  {!! Form::button(' Save ', ['class'=>'btn save  btn-primary text-white','id'=>'saveBtn']) !!} -->
          {!! Form::submit('Save Settings', ['class'=>'btn save btn-primary text-white','id'=>'saveBtn']) !!}
        </div>
    </div>
</div>

 
