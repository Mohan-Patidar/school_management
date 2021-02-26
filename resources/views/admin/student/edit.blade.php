@extends('layouts.adminlayout')

@section('content')
<div class="page-inner ad-inr">
    @if(Session::has('message'))
    <div class="alert alert-success alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <p>{{ Session::get('message') }}</p>
    </div>
    @endif
    <section class="main-wrapper">
        <div class="page-color">
            <div class="page-header">
                <div class="page-title">
                    Edit <span> Student</span>
                </div>
                <div class="page-btn">
                        <a href="{{url('/students')}}" class="add-btn">
                            <span>
                                    <img src="{{url('/')}}/assets/image/Icon-arrow-back.svg" class="btn-arrow-show" alt="">
                                    <img src="{{url('/')}}/assets/image/Icon-arrow-back-2.svg" class="btn-arrow-hide" alt="">
                                </span>
                            <span>Back</span>
                        </a>
                    </div>
            </div>
            <div class="page-table">
                <div class="profile-box container-fluid">
                    <form class="add-student-form" method="Post" action="{{route('students.update',$students->id)}}">
                    <input type="hidden" name="_method" value="PUT">
                        @csrf
                        <!-- <div class="profile-title">
                                Personal Information
                            </div> -->
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <input type="hidden" name="id" value="{{$students->id}}" />
                                    <label>Student Id</label>
                                    <input type="text" name="student_id" id="student_id" value="{{$students->student_id}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Scholar No.</label>
                                    <input type="text" name="scholar_no" id="scholar_no" value="{{$students->scholar_no}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" id="name" value="{{$students->name}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Father name</label>
                                    <input type="text" name="father_name" id="" value="{{$students->father_name}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mother name</label>
                                    <input type="text" name="mother_name" id="" value="{{$students->mother_name}}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" id="" value="{{$students->address}}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Aadhar No.</label>
                                    <input type="text" name="aadhar_no" id="" value="{{$students->aadhar_no}}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Samagra Id</label>
                                    <input type="text" name="samarg_id" id="" value="{{$students->samarg_id}}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" name="dob" id="" value="{{$students->dob}}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Class</label>
                                    <select name="gbs_id" id="gbs_id">
                                   
                                    @foreach($tests as $test)
                                    <option value="{{$test->id}}" <?php
                                    if($test->id == $students->gbs_id){ 
                                    echo 'selected="selected"'; }?> >
                                        {{$test->class_name}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Mobile No. 1</label>
                                    <input type="text" name="mobile_no" id="" value="{{$students->mobile_no}}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Mobile No. 2</label>
                                    <input type="text" name="mobile_no2" id="" value="{{$students->mobile_no2}}">
                                </div>
                            </div>
                            <div class="col-6 last-input-margin">
                                <div class="form-group">
                                    <label>Add Session</label>
                                    <select name="add_session">
                                        <option>2018-2019</option>
                                        <option>2019-2020</option>
                                        <option>2020-2021</option>
                                        <option>2021-2022</option>
                                        <option>2022-2023</option>
                                        <option>2023-2024</option>
                                        <option>2024-2025</option>
                                        <option>2025-2026</option>
                                        <option>2026-2027</option>
                                        <option>2027-2028</option>
                                        <option>2028-2029</option>
                                        <option>2029-2030</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 last-input-margin">
                                <div class="form-group">
                                    <label>Bank Account No.</label>
                                    <input type="text" name="account_no" id="account_no" value="{{$students->account_no}}">
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <input type="submit" name="save" class="login-btn" id="save" value="Update Student Information">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @endsection
    @section('additionalscripts')


    @endsection