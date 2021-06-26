@extends('user.user_master')
@section('user')

<div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Top Label Layout</h6>
          <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
          <form method="post" action="" enctype="multipart/form-data">
       @csrf
          <div class="form-layout">
            <div class="row mg-b-25">
                <div class="col-lg-8">
                <div class="form-group">
                  <label class="form-control-label">User Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="name" value="{{$editData->name}}" placeholder="Email Address">
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-8">
                <div class="form-group">
                  <label class="form-control-label">User Email : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="email" value="{{$editData->email}}" placeholder="Email Address">
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-8">
              <div class="form-group mg-b-10-force">
               <label class="custom-file ">
                <input type="file" name="profile_photo_path" id="file2" class="custom-file-input">
                <span class="custom-file-control custom-file-control-primary"></span>
              </label>
            </div><!-- col-8 -->
               </div><!-- row -->
               <div class="col-lg-4">
            
            <img id="showImage" src="{{ (!empty($editData->profile_photo_path))? 
             url('upload/admin_images/'.$editData->profile_photo_path):url('upload/no_image.jpg') }}"
              style = "width: 100px; height: 100px;" >
        </div>
     </div><!---end cold md 6 ---->

            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Update </button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- card -->
        </form>


        

@endsection