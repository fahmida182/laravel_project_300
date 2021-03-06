@extends('layout')
@section('content')
  


          
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
              <p class="alert-success">
                              <?php
                              $exception = Session::get('exception');
                              if ($exception) {
                                 echo $exception;
                                 Session::put('exception',null);
                                    }
                                       ?>
                            </p>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>st_sID</th>
                          <th>st_Name</th>
                          <th>Phone</th>
                          <th>image</th>
                          <th>Address</th>
                          <th>Dept.</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($all_student_info as $v_student)
                      <tr>
                          <td>{{$v_student->student_studentid}}</td>
                          <td>{{$v_student->student_name}}</td>
                          <td>{{$v_student->student_phone}}</td>
                          <td><img src="{{URL::to($v_student->student_image)}}" height="80" width="100" style="border-radius: 50%;>"</td>
                          <td>{{$v_student->student_address}}</td>
                          <td>
                               @if ($v_student->student_department==1)
                                <span class="label label-sucess"> {{'CSE'}}</span>
                               @elseif ($v_student->student_department==2)
                                <span class="label label-primary"> {{'BBA'}}</span>
                                 @elseif ($v_student->student_department==3)
                                <span class="label label-warning"> {{'EEE'}}</span>
                                 @elseif ($v_student->student_department==4)
                                <span class="label label-info"> {{'LLB'}}</span>
                                   @elseif ($v_student->student_department==5)
                                <span class="label label-sucess"> {{'MBA'}}</span>
                                @elseif ($v_student->student_department==6)
                                <span class="label label-sucess"> {{'MBA'}}</span>

                                   @else 
                                <span class="label label-danger"> {{'Not defiend'}}</span
                                @endif
                            </td>
                          
                          <td>
                            <a href="{{URL::to('/student_view/'.$v_student->student_id)}}"><button class="btn btn-outline-primary">View</button></a>
                            <a href="{{URL::to('/student_edit/'.$v_student->student_id)}}"><button class="btn btn-outline-warning">Edit</button></a>
                            <a href="{{URL::to('/student_delete/'.$v_student->student_id)}}" id="delete"<button class="btn btn-outline-danger">Delete</button></a>
                          </td>
                      </tr>
                      @endforeach 
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        

@endsection