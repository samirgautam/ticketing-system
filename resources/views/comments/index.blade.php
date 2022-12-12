@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-8">
     <div class="row mb-1">
      <div class="card card-body shadow">
        <p class="mb-0">Ticket Title</p>
        <hr>
        <p>Status</p>
      </div>
     </div>
     <div class="row mb-1">
      <div class="card card-body shadow">
        <div class="d-flex justify-content-between mb-0">
        <p>Reply By: Samir Gautam</p>
          <p class="mb-0">Replied at Time</p>
        </div>
        <hr>
        <div>
          <p>Status</p>
        </div>
      </div>
     </div> 
    <div class="row">
      
      <div class="card card-body shadow">
        <div>
          <form action="">
          <label>Comment</label>
          <textarea class="ckeditor form-control" name="description"></textarea>
          <div class="text-center">
            <button class="mt-2" type="submit">Post Comment</button>
          </div>
          </form>
        </div>
       
        </div>
       
    </div>
      

    </div>

    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <ul class="list-group">
            <li class="list-group-item">UserName</li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Status</span>
              <span class="badge rounded-pill bg-danger">Closed</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Department</span>
              <span class="badge rounded-pill bg-primary">Department</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Created By</span>
              <span class="badge rounded-pill bg-primary">Customer Care</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Updated By</span>
              <span class="badge rounded-pill bg-primary">Customer Care</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Created</span>
              <span>2022-12-12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
            <span>Updated</span>
            <span>2022-12-12</span>
            </li>
          </ul>
        </div>

        <div class="card-body">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active text-center" aria-current="true" >
              Reopen Ticket
            </a>
          </div>
        </div>
        
      </div>
    
    </div>

  </div>
 
</div>

  <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>

@endsection