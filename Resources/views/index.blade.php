@extends('dashboard::layouts.master')

@section('content')

<div class="row">
    <div class="col-md-3">
      <div class="card-counter primary">
        <i class="fas fa-users"></i>
        <span class="count-numbers">12</span>
        <span class="count-name">Members</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter danger">
        <i class="fas fa-user-graduate"></i>
        <span class="count-numbers">599</span>
        <span class="count-name">Instructors</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success">
        <i class="fas fa-cart-plus"></i>
        <span class="count-numbers">6875</span>
        <span class="count-name">Product</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
        <i class="fas fa-book"></i>
        <span class="count-numbers">35</span>
        <span class="count-name">Categories</span>
      </div>
    </div>
  </div>


<div class="row">
  <div class="col-md-12">
    <div class="update-nag">
      <div class="update-split"><i class="far fa-sync"></i></div>
      <div class="update-text">Cms v0.2.5 is available! <a href="#">Update Now</a> </div>
    </div>
  </div>

  <div class="col-md-12">
    <div class="update-nag">
      <div class="update-split update-info"><i class="fal fa-folder-open"></i></div>
      <div class="update-text">Plugin <a href="#">Donatirino</a> v0.2 is available! <a href="#">Update Now</a> </div>
    </div>
  </div>

  <div class="col-md-12">
    <div class="update-nag">
      <div class="update-split update-success"><i class="far fa-leaf"></i></div>
      <div class="update-text">Theme <a href="#">WooStyliz</a> v1.4 is available! <a href="#">Update Now</a> </div>
    </div>
  </div>

  <div class="col-md-12">
    <div class="update-nag">
      <div class="update-split update-danger"><i class="far fa-exclamation-triangle"></i></div>
      <div class="update-text"> <strong>Warning</strong> Some type of problem, fix it! </div>
    </div>
  </div>

</div>

@stop
