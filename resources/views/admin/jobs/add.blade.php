@extends('admin.layouts.master')
@section('page-title')
    Create Jobs
@endsection
@section('mainContent')
  <!-- content -->
  <div id="content" class="app-content box-shadow-z0" role="main">
    <div ui-view class="app-body" id="view">
      <div class="p-a white lt box-shadow generalsetting_admin">
        <div class="row">
          <div class="col-sm-6">
            <h4 class="mb-0 _300">Welcome to MLS</h4>
          </div>
          <div class="col-sm-6 text-sm-right"></div>
        </div>
      </div>
      <div class="padding">
        <div class="box">
          <div class="box-divider m-0"></div>
            <div class="box-body">
              <h3>Create Jobs</h3>
              <ul class="nav nav-pills nav-sm">
                <li class="nav-item active">
                  <a class="nav-link generalsetting_admin" style="margin-right: 5px" href data-toggle="tab" data-target="#tab_1">EN</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link generalsetting_admin" href data-toggle="tab" data-target="#tab_2">AR</a>
                </li>
              </ul><hr>
              <div class="tab-content">      
                {{-- English Form Start --}}
                <div class="tab-pane p-v-sm" id="tab_1">
                  <form role="form" method="post" action="{{route('jobs.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="title" required="" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" name="email" required="" placeholder="Enter EMail">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Location</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="location" required="" placeholder="Enter Location">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Position</label>
                      <input type="number" class="form-control" id="exampleInputEmail1" name="position" required="" placeholder="Enter Job Position">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="status" value="ACTIVE" hidden="">
                      <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="en" hidden="">
                      <textarea name="description" required="" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                    
                    <a href="{{ route('jobs.index') }}" class="btn white m-b generalsetting_admin">Cancel</a>
                    <button type="submit" class="btn white m-b generalsetting_admin">Submit</button>
                  </form>
                </div>
                <div class="tab-pane p-v-sm" id="tab_2" dir="rtl">
                  <form role="form" method="post" action="{{route('jobs.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">لقب</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="title" required="" placeholder="أدخل العنوان">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">بريد إلكتروني</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" name="email" required="" placeholder="أدخل البريد الإلكتروني">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">موقع</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="location" required="" placeholder="إدخال الدولة">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">موضع</label>
                      <input type="number" class="form-control" id="exampleInputEmail1" name="position" required="" placeholder="أدخل الوظيفة" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">وصف</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="status" value="ACTIVE" hidden="">
                      <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="ar" hidden="">
                      <textarea name="description" required="" class="form-control" id="" cols="10" rows="10"></textarea>
                    </div>
                    
                    <button type="submit" class="btn white m-b generalsetting_admin">إرسال</button>
                    <a href="{{ route('jobs.index') }}" class="btn white m-b generalsetting_admin">إلغاء</a>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection