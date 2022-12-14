@extends('layouts.app')

<link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-11">
                <div class="card card-body shadow mt-3">
                  <h4 class="card-heading mb-3">Create Tickets</h4>
                    <form class="row g-3" action="{{ route('tickets.store') }}" method="POST">
                      @csrf
                        <div class="col-md-4">
                            <label for="admin_staff" class="form-label">Admin/ Reseller/ Staff/ Users</label>
                          <select id="admin_staff" class="form-select" name="admin_staff">
                            <option selected>Choose...</option>
                            <option>...</option>
                          </select>
                        </div>
                        <div class="col-md-4">
                            <label for="department" class="form-label">Department</label>
                            <select id="department" class="form-select" name="department">
                              <option selected>Technical</option>
                              <option>fhfhf</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="priority" class="form-label">Priority</label>
                            <select id="priority" class="form-select" name="priority">
                              <option selected>Low</option>
                              <option>Medium</option>
                              <option>High</option>
                            </select>
                        </div>
                        <div class="col-12">
                          <label for="subject" class="form-label">Subject</label>
                          <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                              <label for="description">Description</label>
                                <textarea class="ckeditor form-control" name="description" placeholder="Write something here....."></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-between align-items-center">
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="send_sms">
                            <label class="form-check-label" for="send_sms">Send SMS</label>
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-success">Create Now</button>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.7.0/ckeditor.js" integrity="sha512-jg3ii+bW+/deIK/IieHmUiK8ReF0nh3grLkS4Zb4S6HdEke9fQNG/uiaAIp4nCvaACkZnBohAoHJ5uOf9spQfQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>
       
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>

@endsection