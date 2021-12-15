
 
  
                                        <div class="form-body">
                                            <div class="alert alert-danger display-hide">
                                                <button class="close" data-close="alert"></button> Please fill the required field! </div>
                                          <!--   <div class="alert alert-success display-hide">
                                                <button class="close" data-close="alert"></button> Your form validation is successful! </div> -->
                                            <div class="form-group {{ $errors->first('title', ' has-error') }}  @if(session('field_errors')) {{ 'has-error' }} @endif">
                                                <label class="control-label col-md-3">  Code  <span class="required"> * </span></label>
                                                <div class="col-md-4"> 
                                                    <!-- {!! Form::text('code',null, ['class' => 'form-control','data-required'=>1])  !!}  -->

                                                    <input type="text" class="form-control" name="code" @if(isset($coupon_data)) value="{{$coupon_data->code}}" @endif required>
                                                    
                                                    <span class="help-block" style="color:red">{{ $errors->first('code', ':message') }} @if(session('field_errors')) {{ 'The  Coupan name already been taken!' }} @endif</span>
                                                </div>
                                            </div> 
                                             <div class="form-group {{ $errors->first('title', ' has-error') }}  @if(session('field_errors')) {{ 'has-error' }} @endif">
                                                <label class="control-label col-md-3">  Amount  <span class="required"> * </span></label>
                                                <div class="col-md-4"> 
                                                   <!--  {!! Form::number('amount',null, ['class' => 'form-control','data-required'=>1])  !!}  -->
                                                    
                                                    <input type="number" class="form-control" name="amount" @if(isset($coupon_data)) value="{{$coupon_data->amount}}" @endif required>



                                                    <span class="help-block" style="color:red">{{ $errors->first('amount', ':message') }} @if(session('field_errors')) {{ 'The  Coupan name already been taken!' }} @endif</span>
                                                </div>
                                            </div> 
                                             <div class="form-group {{ $errors->first('title', ' has-error') }}  @if(session('field_errors')) {{ 'has-error' }} @endif">
                                                <label class="control-label col-md-3">  Description  <span class="required"> * </span></label>
                                                <div class="col-md-4"> 
                                                   <!--  {!! Form::text('description',null, ['class' => 'form-control','data-required'=>1])  !!} -->
                                                    <input type="text" class="form-control" name="description" @if(isset($coupon_data)) value="{{$coupon_data->description}}" @endif required> 
                                                    
                                                    <span class="help-block" style="color:red">{{ $errors->first('description', ':message') }} @if(session('field_errors')) {{ 'The  Coupan name already been taken!' }} @endif</span>
                                                </div>
                                            </div> 
                                             <div class="form-group {{ $errors->first('title', ' has-error') }}  @if(session('field_errors')) {{ 'has-error' }} @endif">
                                                <label class="control-label col-md-3">  bonus  <span class="required"> * </span></label>
                                                <div class="col-md-4"> 
                                                    <!-- {!! Form::number('bonus',null, ['class' => 'form-control','data-required'=>1])  !!} --> 
                                                    <input type="number" class="form-control" name="bonus" @if(isset($coupon_data)) value="{{$coupon_data->bonus}}" @endif required> 
                                                    
                                                    <span class="help-block" style="color:red">{{ $errors->first('bonus', ':message') }} @if(session('field_errors')) {{ 'The  Coupan name already been taken!' }} @endif</span>
                                                </div>
                                            </div> 
                                             <div class="form-group {{ $errors->first('title', ' has-error') }}  @if(session('field_errors')) {{ 'has-error' }} @endif">
                                                <label class="control-label col-md-3">  Extra_cash  <span class="required"> * </span></label>
                                                <div class="col-md-4"> 
                                                   <!--  {!! Form::number('extra_cash',null, ['class' => 'form-control','data-required'=>1])  !!}  -->
                                                     <input type="number" class="form-control" name="extra_cash" @if(isset($coupon_data)) value="{{$coupon_data->extra_cash}}" @endif required>
                                                    
                                                    <span class="help-block" style="color:red">{{ $errors->first('extra_cash', ':message') }} @if(session('field_errors')) {{ 'The  Coupan name already been taken!' }} @endif</span>
                                                </div>
                                            </div> 


                                         <div class="form-group ">
                                             <label class="control-label col-md-3">  Amount_type <span class="required"> * </span></label> <div class="col-md-4">
                                             <select class="form-control" name="amount_type">
                                                 <option value="fixed">fixed</option>
                                                 
                                             </select>
                                         </div>
                                     </div>
                                     <div class="form-group ">
                                             <label class="control-label col-md-3">  Discount_type <span class="required"> * </span></label> <div class="col-md-4">
                                             <select class="form-control" name="discount_type">
                                                 <option value="contest">contest </option>
                                                  <option value="deposit">deposit </option>
                                        
                                             </select>
                                         </div>
                                     </div>
                                <div class="form-group {{ $errors->first('title', ' has-error') }}  @if(session('field_errors')) {{ 'has-error' }} @endif">
                                                <label class="control-label col-md-3">  Valid_from <span class="required"> * </span></label>
                                                <div class="col-md-4"> 
                                                   <!--  {!! Form::text('valid_from',null, ['class' => 'form-control','data-required'=>1])  !!}  -->
                                                     <input type="text" class="form-control" name="valid_from" @if(isset($coupon_data)) value="{{$coupon_data->valid_from}}" @endif required>
                                                    
                                                    <span class="help-block" style="color:red">{{ $errors->first('valid_from', ':message') }} @if(session('field_errors')) {{ 'The  Coupan name already been taken!' }} @endif</span>
                                                </div>
                                            </div> 
                                             <div class="form-group {{ $errors->first('title', ' has-error') }}  @if(session('field_errors')) {{ 'has-error' }} @endif">
                                                <label class="control-label col-md-3">  Valid_to <span class="required"> * </span></label>
                                                <div class="col-md-4"> 
                                                   <!--  {!! Form::text('valid_to',null, ['class' => 'form-control','data-required'=>1])  !!} -->
                                                     <input type="text" class="form-control" name="valid_to" @if(isset($coupon_data)) value="{{$coupon_data->valid_to}}" @endif required> 
                                                    
                                                    <span class="help-block" style="color:red">{{ $errors->first('valid_to', ':message') }} @if(session('field_errors')) {{ 'The  Coupan name already been taken!' }} @endif</span>
                                                </div>
                                            </div> 
    
                                     
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                  {!! Form::submit(' Save ', ['class'=>'btn  btn-primary text-white','id'=>'saveBtn']) !!}


                                                   <a href="{{route('coupon')}}">
            {!! Form::button('Back', ['class'=>'btn btn-warning text-white']) !!} </a>
                                                </div>
                                            </div>
                                        </div>




    <div class="form-body">

 



</div> 

