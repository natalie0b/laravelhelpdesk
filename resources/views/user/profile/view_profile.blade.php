@extends('user.user_master')
@section('user')

<div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Top Label Layout</h6>
          <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

 
  <div class="card-body">
  <img src="{{ (!empty($user->profile_photo_path)) ?  url('upload/
  user_image/'.$user->profile_photo_path):url('upload/no_image.jpg') }}" class="img-thumbnail-top"  alt="...">
    <h5 class="card-title">User Name : {{ $user->name }}</h5>
    <p class="card-text"> User Email: {{ $user->email }}</p>
    <a href="{{route('profile.edit')}}" class="btn btn-primary">Edit Profile</a>
  </div>

</div>

@endsection


