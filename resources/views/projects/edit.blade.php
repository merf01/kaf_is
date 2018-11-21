@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Projects / Edit #{{$project->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('projects.update', $project->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('title')) has-error @endif">
                       <label for="title-field">Title</label>
                    <input type="text" id="title-field" name="title" class="form-control" value="{{ is_null(old("title")) ? $project->title : old("title") }}"/>
                       @if($errors->has("title"))
                        <span class="help-block">{{ $errors->first("title") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('description')) has-error @endif">
                       <label for="description-field">Description</label>
                    <textarea class="form-control" id="description-field" rows="3" name="description">{{ is_null(old("description")) ? $project->description : old("description") }}</textarea>
                       @if($errors->has("description"))
                        <span class="help-block">{{ $errors->first("description") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('status')) has-error @endif">
                       <label for="status-field">Status</label>
                    <input type="text" id="status-field" name="status" class="form-control" value="{{ is_null(old("status")) ? $project->status : old("status") }}"/>
                       @if($errors->has("status"))
                        <span class="help-block">{{ $errors->first("status") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('video')) has-error @endif">
                       <label for="video-field">Video</label>
                    <input type="text" id="video-field" name="video" class="form-control" value="{{ is_null(old("video")) ? $project->video : old("video") }}"/>
                       @if($errors->has("video"))
                        <span class="help-block">{{ $errors->first("video") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('img1')) has-error @endif">
                       <label for="img1-field">Img1</label>
                    <input type="text" id="img1-field" name="img1" class="form-control" value="{{ is_null(old("img1")) ? $project->img1 : old("img1") }}"/>
                       @if($errors->has("img1"))
                        <span class="help-block">{{ $errors->first("img1") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('img2')) has-error @endif">
                       <label for="img2-field">Img2</label>
                    <input type="text" id="img2-field" name="img2" class="form-control" value="{{ is_null(old("img2")) ? $project->img2 : old("img2") }}"/>
                       @if($errors->has("img2"))
                        <span class="help-block">{{ $errors->first("img2") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('img3')) has-error @endif">
                       <label for="img3-field">Img3</label>
                    <input type="text" id="img3-field" name="img3" class="form-control" value="{{ is_null(old("img3")) ? $project->img3 : old("img3") }}"/>
                       @if($errors->has("img3"))
                        <span class="help-block">{{ $errors->first("img3") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('project_id')) has-error @endif">
                       <label for="project_id-field">Project_id</label>
                    <input type="text" id="project_id-field" name="project_id" class="form-control" value="{{ is_null(old("project_id")) ? $project->project_id : old("project_id") }}"/>
                       @if($errors->has("project_id"))
                        <span class="help-block">{{ $errors->first("project_id") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('projects.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
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
