
 
  
                                        <div class="form-body">
                                            <div class="alert alert-danger display-hide">
                                                <button class="close" data-close="alert"></button> Please fill the required field! </div>
                                          <!--   <div class="alert alert-success display-hide">
                                                <button class="close" data-close="alert"></button> Your form validation is successful! </div> -->
                                            <div class="form-group {{ $errors->first('title', ' has-error') }}  @if(session('field_errors')) {{ 'has-error' }} @endif">
                                                <label class="control-label col-md-3">  C ID  <span class="required"> * </span></label>
                                                <div class="col-md-4"> 
                                                    <!-- {!! Form::text('cid',null, ['class' => 'form-control','data-required'=>1])  !!}  -->

                                                    <input type="text" class="form-control" name="cid" @if(isset($leaderboard_data)) value="{{$leaderboard_data->cid}}" @endif required>
                                                    
                                                    <span class="help-block" style="color:red">{{ $errors->first('cid', ':message') }} @if(session('field_errors')) {{ 'The  cid name already been taken!' }} @endif</span>
                                                </div>
                                            </div> 
                                             <div class="form-group {{ $errors->first('title', ' has-error') }}  @if(session('field_errors')) {{ 'has-error' }} @endif">
                                                <label class="control-label col-md-3">  league_duration  <span class="required"> * </span></label>
                                                <div class="col-md-4"> 
                                                   <!--  {!! Form::number('league_duration',null, ['class' => 'form-control','data-required'=>1])  !!}  -->
                                                    
                                                    <input type="text" class="form-control" name="league_duration" @if(isset($leaderboard_data)) value="{{$leaderboard_data->league_duration}}" @endif required>

                                                    <span class="help-block" style="color:red">{{ $errors->first('league_duration', ':message') }} @if(session('field_errors')) {{ 'The  league_duration name already been taken!' }} @endif</span>
                                                </div>
                                            </div> 
                                              <div class="form-group ">
                                             <label class="control-label col-md-3">  Status <span class="required"> * </span></label> <div class="col-md-4">
                                             <select class="form-control" name="status">
                                                  <option value="3">3</option>
                                                 <option value="2">2</option>
                                               
                                             </select>
                                         </div>
                                     </div> 
                                             <div class="form-group {{ $errors->first('title', ' has-error') }}  @if(session('field_errors')) {{ 'has-error' }} @endif">
                                                <label class="control-label col-md-3">  series_name  <span class="required"> * </span></label>
                                                <div class="col-md-4"> 
                                                    <!-- {!! Form::number('series_name',null, ['class' => 'form-control','data-required'=>1])  !!} --> 
                                                    <input type="text" class="form-control" name="series_name" @if(isset($leaderboard_data)) value="{{$leaderboard_data->series_name}}" @endif required> 
                                                    
                                                    <span class="help-block" style="color:red">{{ $errors->first('series_name', ':message') }} @if(session('field_errors')) {{ 'The  series_name name already been taken!' }} @endif</span>
                                                </div>
                                            </div> 
                                             <div class="form-group {{ $errors->first('title', ' has-error') }}  @if(session('field_errors')) {{ 'has-error' }} @endif">
                                                <label class="control-label col-md-3">  priority  <span class="required"> * </span></label>
                                                <div class="col-md-4"> 
                                                   <!--  {!! Form::number('priority',null, ['class' => 'form-control','data-required'=>1])  !!}  -->
                                                     <input type="number" class="form-control" name="priority" @if(isset($leaderboard_data)) value="{{$leaderboard_data->priority}}" @endif required>
                                                    
                                                    <span class="help-block" style="color:red">{{ $errors->first('priority', ':message') }} @if(session('field_errors')) {{ 'The  Coupan name already been taken!' }} @endif</span>
                                                </div>
                                            </div> 


                                        
                                
                                            
    
                                     
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                  {!! Form::submit(' Save ', ['class'=>'btn  btn-primary text-white','id'=>'saveBtn']) !!}


                                                   <a href="{{route('leaderboard.store')}}">
            {!! Form::button('Back', ['class'=>'btn btn-warning text-white']) !!} </a>
                                                </div>
                                            </div>
                                        </div>




    <div class="form-body">

 



</div> 

