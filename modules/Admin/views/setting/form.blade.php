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
    <label class="control-label col-md-3"> Payment Status
        <span class="required"> *  </span>
    </label>
    <div class="col-md-6">
    <select name="payment_status" class="form-control">
    	<option>Change payment Status</option>
       <option value="enable" {{ (isset($setting->payment_status) && $setting->payment_status=="enable")?"selected":'' }}>
			Enable
		        </option>
        <option value="disable" {{ (isset($setting->payment_status) && $setting->payment_status=="disable")?"selected":'' }} >
		Disable
        </option>
          
    </select>
    </div>
</div>
 
        <div class="form-group {{ $errors->first('website_title', ' has-error') }}">
            <label class="control-label col-md-3">Website Title <span class="required"> * </span></label>
            <div class="col-md-6"> 
                {!! Form::text('website_title',null, ['class' => 'form-control','data-required'=>1])  !!} 
                
                <span class="help-block">{{ $errors->first('website_title', ':message') }}</span> 

            </div>
        </div> 

        <div class="form-group {{ $errors->first('website_url', ' has-error') }}">
            <label class="control-label col-md-3">Website Url <span class="required"> * </span></label>
            <div class="col-md-6"> 
                {!! Form::text('website_url',($website_url->field_value)?$website_url->field_value:null, ['class' => 'form-control','data-required'=>1])  !!} 
                
                <span class="help-block">{{ $errors->first('website_url', ':message') }}</span>
            </div>
        </div>

        <div class="form-group {{ $errors->first('phone', ' has-error') }}">
            <label class="control-label col-md-3">Phone <span class="required"> * </span></label>
            <div class="col-md-6"> 
                {!! Form::text('phone',null, ['class' => 'form-control','data-required'=>1])  !!} 
                <span class="help-block">{{ $errors->first('phone', ':message') }}</span>
            </div>
        </div>

         <div class="form-group {{ $errors->first('mobile', ' has-error') }}">
            <label class="control-label col-md-3">Mobile <span class="required"> * </span></label>
            <div class="col-md-6">
                {!! Form::text('mobile',null, ['class' => 'form-control','data-required'=>1])  !!} 
                <span class="help-block">{{ $errors->first('mobile', ':message') }}</span>
            </div>
        </div>

        <div class="form-group {{ $errors->first('website_url', ' has-error') }}">
            <label class="control-label col-md-3">Website Email <span class="required"> * </span></label>
            <div class="col-md-6"> 
                {!! Form::text('website_email',null, ['class' => 'form-control','data-required'=>1])  !!} 
                
                <span class="help-block">{{ $errors->first('website_email', ':message') }}</span>
            </div>
        </div>

        <div class="form-group {{ $errors->first('meta_title', ' has-error') }}">
            <label class="control-label col-md-3">Meta Title <span class="required"> * </span></label>
            <div class="col-md-6"> 
                {!! Form::text('meta_title',null, ['class' => 'form-control','data-required'=>1])  !!} 
                
                <span class="help-block">{{ $errors->first('meta_title', ':message') }}</span>
            </div>
        </div>

        <div class="form-group {{ $errors->first('meta_key', ' has-error') }}">
            <label class="control-label col-md-3">Meta Key  </label>
            <div class="col-md-6"> 
                {!! Form::text('meta_key',null, ['class' => 'form-control','data-required'=>1])  !!} 
                
                <span class="help-block">{{ $errors->first('meta_key', ':message') }}</span>
            </div>
        </div>

        <div class="form-group {{ $errors->first('meta_description', ' has-error') }}">
            <label class="control-label col-md-3">Meta Description  </label>
            <div class="col-md-6"> 
                {!! Form::text('meta_description',null, ['class' => 'form-control','data-required'=>1])  !!} 
                
                <span class="help-block">{{ $errors->first('meta_description', ':message') }}</span>
            </div>
        </div> 

        <div class="form-group {{ $errors->first('currency', ' has-error') }}">
            <label class="control-label col-md-3">Currency  </label>
            <div class="col-md-6"> 
                {!! Form::text('currency',null, ['class' => 'form-control','data-required'=>1])  !!} 
                
                <span class="help-block">{{ $errors->first('currency', ':message') }}</span>
            </div>
        </div>

         <div class="form-group {{ $errors->first('website_logo', ' has-error') }}">
            <label class="control-label col-md-3">Website Logo  </label>
            <div class="col-md-6"> 
                
                  <div class="row fileupload-buttonbar">
                     <div class="col-lg-12">
                       <span class="btn btn-success fileinput-button"> 
                                            
                        <input type="file" name="website_logo" multiple=""> </span>
                     </div>
                  </div> 
             <br>
              @if(isset($setting->website_logo))
              <img src="{!! Url::to('storage/uploads/img/'.$setting->website_logo) !!}" width="150px">
              @endif                                   
            <span class="label label-danger">{{ $errors->first('website_logo', ':message') }}</span>
            
            </div>
        </div> 

      <div class="form-group{{ $errors->first('company_address', ' has-error') }}">
        <label class="control-label col-md-3">Company Address</label>
        <div class="col-md-6">
            {!! Form::textarea('company_address',null, ['class' => 'form-control' ,'data-provide'=>"markdown"])  !!}
            <span class="label label-danger">{{ $errors->first('company_address', ':message') }}</span>
            
        </div>
      </div>
 

      <div class="form-group{{ $errors->first('website_description', ' has-error') }}">
        <label class="control-label col-md-3">Website Description</label>
        <div class="col-md-6"> 
          
            {!! Form::textarea('website_description',null, ['class' => 'form-control' ,'data-provide'=>"markdown"])  !!}
            <span class="label label-danger">{{ $errors->first('website_description', ':message') }}</span>
             
             
        </div>
      </div> 
 


         <div class="form-group {{ $errors->first('facebook_url', 'has-error') }}">
            <label class="control-label col-md-3">Facebook Url  </label>
            <div class="col-md-6"> 
                {!! Form::text('facebook_url',isset($setting->facebook_url)?$setting->facebook_url:'https://www.facebook.com/1marketresearch/', ['class' => 'form-control'])  !!} 
                
                <span class="help-block">{{ $errors->first('facebook_url', ':message') }}</span>
            </div>
        </div> 



         <div class="form-group {{ $errors->first('linkedin_url', 'has-error') }}">
            <label class="control-label col-md-3">Linkedin Url  </label>
            <div class="col-md-6"> 
                {!! Form::text('linkedin_url',isset($setting->linkedin_url)?$setting->linkedin_url:'https://www.linkedin.com/company/1marketresearch.com/', ['class' => 'form-control'])  !!} 
                
                <span class="help-block">{{ $errors->first('linkedin_url', ':message') }}</span>
            </div>
        </div> 

        <div class="form-group {{ $errors->first('twitter_url', 'has-error') }}">
            <label class="control-label col-md-3">Twitter Url  </label>
            <div class="col-md-6"> 
                {!! Form::text('twitter_url',isset($setting->twitter_url)?$setting->twitter_url:'https://twitter.com/1marketresearc1', ['class' => 'form-control'])  !!} 
                
                <span class="help-block">{{ $errors->first('twitter_url', ':message') }}</span>
            </div>
        </div>  
        <div class="form-group {{ $errors->first('youtube_url', 'has-error') }}">
            <label class="control-label col-md-3">Youtube Url  </label>
            <div class="col-md-6"> 
                {!! Form::text('youtube_url',isset($setting->youtube_url)?$setting->youtube_url:'https://twitter.com/1marketresearc1', ['class' => 'form-control'])  !!} 
                
                <span class="help-block">{{ $errors->first('youtube_url', ':message') }}</span>
            </div>
        </div> 
        <div class="form-group {{ $errors->first('instagram_url', 'has-error') }}">
            <label class="control-label col-md-3">Instagram  Url  </label>
            <div class="col-md-6"> 
                {!! Form::text('instagram_url',isset($setting->instagram_url)?$setting->instagram_url:'https://twitter.com/1marketresearc1', ['class' => 'form-control'])  !!} 
                
                <span class="help-block">{{ $errors->first('instagram_url', ':message') }}</span>
            </div>
        </div> 

        <div class="form-group {{ $errors->first('playstore_url', 'has-error') }}">
            <label class="control-label col-md-3">Playstore  Url  </label>
            <div class="col-md-6"> 
                {!! Form::text('playstore_url',isset($setting->playstore_url)?$setting->playstore_url:'https://twitter.com/1marketresearc1', ['class' => 'form-control'])  !!} 
                
                <span class="help-block">{{ $errors->first('playstore_url', ':message') }}</span>
            </div>
        </div> 
        <div class="form-group {{ $errors->first('about_short', 'has-error') }}">
            <label class="control-label col-md-3">About Short </label>
            <div class="col-md-6"> 
                {!! Form::textarea('about_short',isset($setting->about_short)?$setting->about_short:'', ['class' => 'form-control'])  !!} 
                
                <span class="help-block">{{ $errors->first('about_short', ':message') }}</span>
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

 
