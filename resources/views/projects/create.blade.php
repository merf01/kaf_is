@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Projects / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('title')) has-error @endif">
                       <label for="title-field">Title</label>
                    <input type="text" id="title-field" name="title" class="form-control" value="{{ old("title") }}"/>
                       @if($errors->has("title"))
                        <span class="help-block">{{ $errors->first("title") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('description')) has-error @endif">
                       <label for="description-field">Description</label>
                    <textarea class="form-control" id="description-field" rows="3" name="description">{{ old("description") }}</textarea>
                       @if($errors->has("description"))
                        <span class="help-block">{{ $errors->first("description") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('status')) has-error @endif">
                       <label for="status-field">Status</label>
                    <input type="text" id="status-field" name="status" class="form-control" value="{{ old("status") }}"/>
                       @if($errors->has("status"))
                        <span class="help-block">{{ $errors->first("status") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('video')) has-error @endif">
                       <label for="video-field">Video</label>
                    <input type="text" id="video-field" name="video" class="form-control" value="{{ old("video") }}"/>
                       @if($errors->has("video"))
                        <span class="help-block">{{ $errors->first("video") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('img1')) has-error @endif">
                       <label for="img1-field">Img1</label>
                    <input type="file" id="img1-field" name="img1" accept="image/*"class="form-control" value="{{ old("img1") }}"/>
                       @if($errors->has("img1"))
                        <span class="help-block">{{ $errors->first("img1") }}</span>
                       @endif
                    </div>

                    <div class="form-group @if($errors->has('images')) has-error @endif">
                       <label for="images-field">Images</label>
                       <input multiple name="file[]" type="file" id="images-field" accept="image/*" class="form-control" />
                       @if($errors->has("images"))
                        <span class="help-block">{{ $errors->first("images") }}</span>
                       @endif
                    </div>



                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('projects.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection
