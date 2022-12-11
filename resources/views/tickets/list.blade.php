@extends('layouts.app')


<link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />

@section('content')

<div class = "container">
  <div class = "card" >
    <div class ="card-header" style="height: 2.5rem">
    <p class="mt-0">Dashboard / Tickets / List</p>
    </div>
    
  </div>
  <div class = "card mt-3">
    <div class ="card-body">
      <div class="row">
        <div class="col">
          <p class="mb-0 mt-2"><i class="fa-solid fa-ticket"></i> All Tickets</p>
        </div>
        <div class="col">
          <div class="d-flex justify-content-md-end">
            <button class="btn btn-primary shadow" type="button">Create New</button>
        </div>
      </div>
  </div>
  <hr style="height:2px;border-width:0;color:black;background-color:black">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered" id="myTable">
          <thead>
            <tr>
              <td>S.N</td>
              <td>Subject</td>
              <td>Username</td>
              <td>Priority</td>
              <td>Department</td>
              <td>Status</td>
              <td>Action</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1.</td>
              <td>test</td>
              <td>test</td>
              <td>test</td>
              <td>test</td>
              <form action ="">
                @csrf
                <td>
                  <button type="submit" class="btn btn-primary">open</button>
                </td>
              </form>
              <form method="post" action ="">
                @csrf
                <td>
                  <button type="submit" class="btn btn-success">view</button>
                </td>
              </form>
            </tr>
          </tbody>
        </table>


      </div>
    </div>
  </div>
</div>


@endsection
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>

<script>
  $(document).ready( function () {
  $('#myTable').DataTable(
    { language: {
        searchPlaceholder: "Search records",
        search: "",
      }
    })
} );

</script> 


                      
