  @extends('admin.layouts.master')
<!-- begin #page-loader -->
  <!-- <div id="page-loader" class="fade show">
    <div class="material-loader">
      <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
      </svg>
      <div class="message">Loading...</div>
    </div>
  </div> -->
<!-- end #page-loader -->
@section('content')
<!-- begin #content -->
<!-- <div id="content" class="content"> -->
  <!-- begin breadcrumb -->
  <ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
    <li class="breadcrumb-item active">Contact</li>
  </ol>
  <!-- end breadcrumb -->

  <!-- begin page-header -->
  <h4 class="bold content-header"> Contact Management<small> </small></h4>
  <div id="footer" class="footer" style="margin-left: 0px"></div>
  <div class="row m-b-10">
    <div class="col-lg-12">
      <!-- <div>
        <a class="btn btn-primary" href="{{ route('contacts.create') }}"><i class="fa fa-plus"></i> Create New Contact</a>            
      </div> -->
    </div>
  </div
   
  <!-- end page-header -->
  <!-- begin row -->
  <div class="row">
    <!-- begin col-12-->
    <div class="col-xl-12">
      <!-- begin panel -->
      <div class="panel panel-inverse">
        <!-- begin panel-heading -->
        <div class="panel-heading">
          <h4 class="panel-title"><!-- contact Opportunity Managements --></h4>
          <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
          </div>
        </div>
        <!-- end panel-heading -->

        <!-- begin panel-body -->
        <div class="panel-body">
          <table id="data-table-responsive" class="table table-striped table-bordered table-td-valign-middle">
            <thead>
              <tr>
                <th width="1%">No.</th>
                <th class="text-nowrap">Title</th>
                <th class="text-nowrap">Fax</th>
                <th class="text-nowrap">Phone</th>
                <th class="text-nowrap">Email</th>
                <th class="text-nowrap">Website</th>
                <th class="text-nowrap" width="12%;">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $key => $contact)
              <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $contact->title ?? '-' }}</td>
                <td>{{ $contact->fax ?? ''}}</td>
                <td>{{ $contact->phone ?? '-' }}</td>
                <td>{{ $contact->email ?? '-' }}</td>
                <td>{{ $contact->website ?? ''}}</td>
                <td>
                  <a class="btn btn-success btn-icon btn-circle" href="{{ route('contacts.show',$contact->id) }}"><i class="fas fa-eye"></i></a>
                  <a class="btn btn-warning btn-icon btn-circle" href="{{ route('contacts.edit',$contact->id) }}"> <i class="fa fa-edit"></i></a>
                  <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Are you sure to Delete?');" style="display: inline-block;">
                      <input type="hidden" name="_method" value="DELETE">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <button type="submit" class="btn btn-danger btn-icon btn-circle" data-toggle="tooltip" data-placement="top" title="Delete">
                          <i class='fas fa-times'></i>
                      </button>
                  </form>
                </td>
              </tr>
              @endforeach                         
            </tbody>
          </table>
        </div>
        <!-- end panel-body -->
      </div>
    <!-- end panel -->
    </div>
    <!-- end col-10 -->
  </div>
  <!-- end row -->
  <!--   </div> -->
  <!-- end #content -->
  <!-- begin scroll to top btn -->
  <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
  <!-- end scroll to top btn -->
</div>
  <!-- end page container -->
@endsection