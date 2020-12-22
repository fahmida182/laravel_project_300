@extends('layout')
@section('content')

<div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">All Student</h2>
                  @php
                    $student=DB::table('student_tbl')
                       ->count('student_id');

                  @endphp
                  <p style="font-family:cursive; font-size:30px; font-weight:bold text-align:center;">{{$student}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-1" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">All Teacher</h2>
                  @php
                    $teacher=DB::table('teachers_tbl')
                       ->count('teachers_id');

                  @endphp
                  <p style="font-family:cursive; font-size:30px; font-weight:bold text-align:center;">{{$teacher}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-2" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Tution Fee</h2>
                  <p style="font-family:cursive; font-size:17px; font-weight:bold text-align:center;">Monthly:3000tk</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-3" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Courses</h2>
                  <p style="font-family:cursive; font-size:30px; font-weight:bold text-align:center;">{{$student}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-4" class="card-float-chart"></div>
                </div>
          </div>
          </div>
          </div>

             <div class="row">
              <div class="col-md-4 grid-margin d-flex align-items-stretch">
               <div class="row">
                <div class="col-12 grid-margin d-flex align-items-stretch">
                  <div class="row">
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-facebook"><p class="mb-0">CSE</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-twitter"><p class="mb-0">BBA</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-google"><p class="mb-0">EEE</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-linkedin"><p class="mb-0">LLB</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-linkedin"><p class="mb-0">MBA</p></div>
                    </div>
                    
                  </div>
                </div>
               
              </div>
            </div>
            <div class="col-md-4 grid-margin d-flex align-items-stretch">
              <div class="card task-list w-100">
                <div class="card-body">
                  <h2 class="card-title">Student List</h2>
                  <div class="task-cards selected">
                    <div class="wrapper d-flex flex-row align-items-center">
                      <div class="wrapper">
                        <p class="title">Total Students</p>

                      </div>
                      <p class="ticket-number ml-auto">1698</p>
                    </div>
                    <hr>
                    <div class="wrapper d-flex flex-row align-items-end justify-content-between">
                      <div class="amount d-flex flex-column">
                        <small>CSE</small>
                        <small class="value">459</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>BBA</small>
                        <small class="value">323</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>EEE</small>
                        <small class="value">123</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>LLB</small>
                        <small class="value">100</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>MBA</small>
                        <small class="value">80</small>
                      </div>
                      
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
         
@endsection 