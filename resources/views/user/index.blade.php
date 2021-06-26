@extends('user.user_master')
@section('user')

<div class="sl-pagebody">


<div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 pd-sm-25">
              <div class="d-flex align-items-center">
                <span class="sparkline1">3,4,8,7,4,3,1,2,1,3,5</span>
                <div class="mg-l-15">
                  <p class="tx-uppercase tx-11 tx-spacing-1 tx-medium tx-gray-600 mg-b-8">Open Tickets</p>
                  <h3 class="tx-bold tx-lato tx-center tx-inverse mg-b-0">2</h3>
                </div>
              </div>
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card pd-20 pd-sm-25 bg-primary">
              <div class="d-flex align-items-center">
                <span class="sparkline2">3,4,8,7,4,3,1,2,1</span>
                <div class="mg-l-15">
                  <p class="tx-uppercase tx-11 tx-spacing-1 tx-medium tx-white-5 mg-b-8">Close Tickets</p>
                  <h3 class="tx-bold tx-lato tx-center tx-white mg-b-0">10</h3>
                </div>
              </div>
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 pd-sm-25 bg-info">
              <div class="d-flex align-items-center">
                <span class="sparkline2">3,4,8,7,4,3,1,2,1</span>
                <div class="mg-l-15">
                  <p class="tx-uppercase tx-11 tx-spacing-1 tx-medium tx-white-5 mg-b-8">Tickets per Month</p>
                  <h3 class="tx-bold tx-lato tx-center tx-white mg-b-0">12</h3>
                </div>
              </div>
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 pd-sm-25 bg-sl-primary">
              <div class="d-flex align-items-center">
                <span class="sparkline2">3,4,8,7,4,3,1,2,1</span>
                <div class="mg-l-15">
                  <p class="tx-uppercase tx-11 tx-spacing-1 tx-medium tx-white-5 mg-b-8">Total Tickets Used </p>
                  <h3 class="tx-bold tx-lato tx-center tx-white mg-b-0">20</h3>
                </div>
              </div>
            </div><!-- card -->
          </div><!-- col-3 -->
        </div><!-- row -->


<div class="row row-sm mg-t-20">
  <div class="col-xl-8">
    <div class="card overflow-hidden">
      <div class="card-header bg-transparent pd-y-20 d-sm-flex align-items-center justify-content-between">
        <div class="mg-b-20 mg-sm-b-0">
          <h6 class="card-title mg-b-5 tx-13 tx-uppercase tx-bold tx-spacing-1">Open a Ticket</h6>
          </div>
          </div><!-- card-header -->
      <div class="card-body pd-0 bd-color-gray-lighter">
        <div class="row no-gutters tx-center">
       
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Top Label Layout</h6>
          <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="firstname" value="John Paul" placeholder="Enter firstname">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="lastname" value="McDoe" placeholder="Enter lastname">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="email" value="johnpaul@yourdomain.com" placeholder="Enter email address">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-8">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Mail Address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="address" value="Market St. San Francisco" placeholder="Enter address">
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Country: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose country">
                    <option label="Choose country"></option>
                    <option value="USA">United States of America</option>
                    <option value="UK">United Kingdom</option>
                    <option value="China">China</option>
                    <option value="Japan">Japan</option>
                  </select>
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Submit Form</button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- card -->
        </div><!-- row -->
      </div><!-- card-body -->
      <div class="card-body pd-0">
        
      </div><!-- card-body -->
    </div><!-- card -->

    <div class="card pd-20 pd-sm-25 mg-t-20">
      <h6 class="card-body-title tx-13">Horizontal Bar Chart</h6>
      <p class="mg-b-20 mg-sm-b-30">A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
      <canvas id="chartBar4" height="300"></canvas>
    </div><!-- card -->

  </div><!-- col-8 -->
  <div class="col-xl-4 mg-t-20 mg-xl-t-0">

    <div class="card pd-20 pd-sm-25">
      <h6 class="card-body-title">Live Sessions</h6>
      <div class="btn-group" role="group" aria-label="Basic example">
          <a href="#" class="btn btn-secondary tx-12 active">Live Chat</a>
          <a href="#" class="btn btn-secondary tx-12">Live Video</a>
         </div>
      <p class="mg-b-20 mg-sm-b-30">Labels can be hidden if the slice is less than a given percentage of the pie.</p>
      <div id="flotPie2" class="ht-200 ht-sm-250"></div>
    </div><!-- card -->

    <div class="card widget-messages mg-t-20">
      <div class="card-header">
        <span>Open Job Cards </span>
        <a href=""><i class="icon ion-more"></i></a>
      </div><!-- card-header -->
      <div class="list-group list-group-flush">
        <a href="" class="list-group-item list-group-item-action media">
          <img src="../img/img10.jpg" alt="">
          <div class="media-body">
            <div class="msg-top">
              <span>Mienard B. Lumaad</span>
              <span>4:09am</span>
            </div>
            <p class="msg-summary">Many desktop publishing packages and web page editors now use...</p>
          </div><!-- media-body -->
        </a><!-- list-group-item -->
        <a href="" class="list-group-item list-group-item-action media">
          <img src="../img/img9.jpg" alt="">
          <div class="media-body">
            <div class="msg-top">
              <span>Isidore Dilao</span>
              <span>Yesterday 3:00am</span>
            </div>
            <p class="msg-summary">On the other hand, we denounce with righteous indignation and dislike...</p>
          </div><!-- media-body -->
        </a><!-- list-group-item -->
        <a href="" class="list-group-item list-group-item-action media">
          <img src="../img/img8.jpg" alt="">
          <div class="media-body">
            <div class="msg-top">
              <span>Kirby Avendula</span>
              <span>Yesterday 3:00am</span>
            </div>
            <p class="msg-summary">It is a long established fact that a reader will be distracted by the readable...</p>
          </div><!-- media-body -->
        </a><!-- list-group-item -->
        <a href="" class="list-group-item list-group-item-action media">
          <img src="../img/img7.jpg" alt="">
          <div class="media-body">
            <div class="msg-top">
              <span>Roven Galeon</span>
              <span>Yesterday 3:00am</span>
            </div>
            <p class="msg-summary">Than the fact that climate change may be causing it to rapidly disappear... </p>
          </div><!-- media-body -->
        </a><!-- list-group-item -->
      </div><!-- list-group -->
      <div class="card-footer">
        <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-3"></i> Load more messages</a>
      </div><!-- card-footer -->
    </div><!-- card -->
  </div><!-- col-3 -->
</div><!-- row -->

</div><!-- sl-pagebody -->
@endsection