@extends('layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Add Students</h2>
                                    <p class="alert-success">
                              <?php
                              $exception = Session::get('exception');
                              if ($exception) {
                                 echo $exception;
                                 Session::put('exception',null);
                                    }
                                       ?>
                            </p>

                                   

                          <form class="forms-sample" method="post" action="{{URL::to('/save_student')}}" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <div class="form-group">
                              <label for="exampleInputEmail1">Student Name</label>
                              <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" placeholder="Student Name">
                                  
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student ID</label>
                                  <input type="text" class="form-control p-input" name="student_studentid" placeholder="Student ID">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputPassword1">Student father's Name</label>
                                 <input type="text" class="form-control p-input" name="student_fathersname" placeholder="Student Fathers Name">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputPassword1">Student Mother's Name</label>
                                 <input type="text" class="form-control p-input" name="student_mothersname" placeholder="Student Mothers Name">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputPassword1">Student Email</label>
                                 <input type="email" class="form-control p-input" name="student_email" placeholder="Student Email">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputPassword1">Student Phone</label>
                                 <input type="text" class="form-control p-input" name="student_phone" placeholder="Student Phone">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputPassword1">Student Address</label>
                                 <input type="text" class="form-control p-input" name="student_address" placeholder="Student Address">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Password</label>
                                  <input type="password" class="form-control p-input" name="student_password" placeholder="Student Password">
                              </div>
                        

                              <div class="form-group">
                                  <label>Upload file</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                                      <input type="file" class="form-control-file" name="student_image" id="exampleInputFile2" aria-describedby="fileHelp">
                                      <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                    </div>
                                  </div>
                              </div>

                             <div class="form-group">
                                <label for="exampleInputPassword1"> Admission Year</label>
                                <input type="date" class="form-control p-input" name="student_admissionyear" placeholder="Admission Year">
                             </div>

                             <div class="form-group">
                                <label for="exampleInputPassword1">Student Department</label>
                                 <select class="form-control p-input" name="student_department">
                                    <option value="1">CSE</option>
                                    <option value="2">BBA</option>
                                    <option value="3">EEE</option>
                                    <option value="4">LLB</option>
                                    <option value="5">MBA</option>
                                    <option value="6">English</option>
                 
                                 </select>
                             </div>
                              <button type="submit" class="btn btn-success">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection