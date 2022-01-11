@extends('admin.layouts.master')

@section('content')

<!-- begin #content -->
<!-- <div id="content" class="content"> -->
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Events</a></li>
    <li class="breadcrumb-item active">Create Events</li>
</ol>
<!-- end breadcrumb -->

<!-- begin page-header -->
<h4 class="page-header">Create Events</h4>
<!-- end page-header -->
            
<!-- begin row -->
<div class="row">
    <!-- begin col-6 -->
    <div class="col-xl-12">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <h4 class="panel-title"><!-- Create New Job Opportunity --></h4>
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
            <form name="jobForm" id="jobForm" method="POST" action="{{ route('news_events.store') }}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group m-b-15">
                            <strong>Event Title<span class="text-danger">*</span>:</strong>
                            <input type="text" name="event_title" id="event_title" class="form-control" value="{{old('event_title')}}" placeholder="Event Title">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group m-b-15">
                            <strong>Event Date:</strong>
                            {{-- 
                            <input type="text" name="event_date" id="event_date" class="form-control" value="{{old('event_date')}}" placeholder="Event Date">
                            --}}
                            <div class="input-group date" id="datepicker-disabled-past" data-date-format="yyyy-mm-dd" data-date-start-date="Date.default">
                                <input type="text" class="form-control event_date datepicker" placeholder="Select Date" name="event_date"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group m-b-15">
                            <strong>Event Time:</strong>
                            {{--
                            <input type="text" name="event_time" id="event_time" class="form-control" value="{{old('event_time')}}" placeholder="Event Time">
                            --}}
                            <input name="event_time" id="event_time" class="timepicker form-control" type="text" placeholder="Event Time">
                        </div>
                    </div>                    
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group m-b-15">
                            <strong>Created By:</strong>
                            <input type="text" name="created_by" id="created_by" class="form-control" value="{{old('created_by')}}" placeholder="Created By">
                        </div>
                    </div> 
                </div>
                <div class="row">
                    {{-- 
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group m-b-15">
                            <strong>Event Year:</strong>
                            <input type="text" name="event_year" id="event_year" class="form-control" value="{{old('event_year')}}" placeholder="Event Year">
                        </div>
                    </div> 
                    --}}           
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Descriptions :</strong>
                            <textarea id="description" name="description" class="form-control ckeditor"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Events Image</strong><br/>
                            <input type="file" name="event_image" class="dropify" id="event_image" accept="image/*;capture=camera,.png,.jpg,.jpeg" data-allowed-file-extensions="jpg jpeg png svg"/>
                            <img class="col-sm-6" id="preview"  src="">
                            <!-- <p class="small">Minimum Dimension (825px * 214px) ~ Maximum Dimensions (1280px * 332px)</p> -->
                        </div>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-warning" href="{{ route('news_events.index') }}">Back to Listing</a>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- end panel-body -->
    </div>
</div>

@endsection

@push('css')
<style>
  .note-editor.note-airframe, .note-editor.note-frame{
    border: 1px solid rgba(0,0,0,.2) !important;
  }
  .event_date{
    border-radius: 4px !important;
  }
</style>
@endpush

<!-- add new js file -->
@push('scripts')
<!-- summernote -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<!-- summernote -->
<script>
    $("#description").summernote({
        height: 200,
        tabsize: 4
    });
    $(document).ready(function() {

    });  
//End Document Ready
</script>
<script>
    $('.timepicker').datetimepicker({
        format: 'HH:mm:ss'
    }); 
</script>
@endpush