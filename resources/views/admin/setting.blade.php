@extends('layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Update Your Profile</h2>
                                    <p class="alert-success">
                              <?php
                              $exception = Session::get('exception');
                              if ($exception) {
                                 echo $exception;
                                 Session::put('exception',null);
                                    }
                                       ?>
                            </p>

                                   

                          <form class="forms-sample" method="post" action="{{URL::to('/admin_update_profile')}}">
                              {{ csrf_field() }}
                              
                              <div class="form-group">
                                 <label for="exampleInputPassword1">Student Phone</label>
                                 <input type="text" class="form-control p-input" name="teachers_phone" value="{{($admin_description_view->teachers_phone)}}">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputPassword1">Student Email</label>
                                 <input type="text" class="form-control p-input" name="teachers_email" value="{{($admin_description_view->teachers_email)}}">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputPassword1">Student Address</label>
                                 <input type="text" class="form-control p-input" name="teachers_address" value="{{($admin_description_view->teachers_address)}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Password</label>
                                  <input type="password" class="form-control p-input" name="teachers_password" value="{{($admin_description_view->teachers_password)}}">
                              </div>

                            
                             
                            
                              <button type="submit" class="btn btn-success">Update</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection