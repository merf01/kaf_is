@extends('layout')
@section('header')
<div class="page-header">
        <h1>Projects / Show #{{$project->id}}</h1>
        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('projects.edit', $project->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static"></p>
                </div>
                <div class="form-group">
                     <label for="title">TITLE</label>
                     <p class="form-control-static">{{$project->title}}</p>
                </div>
                    <div class="form-group">
                     <label for="description">DESCRIPTION</label>
                     <p class="form-control-static">{{$project->description}}</p>
                </div>
                    <div class="form-group">
                     <label for="status">STATUS</label>
                     <p class="form-control-static">{{$project->status}}</p>
                </div>
                    <div class="form-group">
                     <label for="video">VIDEO</label>
                     <p class="form-control-static">{{$project->video}}</p>
                </div>
                    <div class="form-group">
                     <label for="img1">IMG1</label>
                     <p class="form-control-static">{{$project->img1}}</p>
                </div>
                    <div class="form-group">
                     <label for="img2">IMG2</label>
                     <p class="form-control-static">{{$project->img2}}</p>
                </div>
                    <div class="form-group">
                     <label for="img3">IMG3</label>
                     <p class="form-control-static">{{$project->img3}}</p>
                </div>
                    <div class="form-group">
                     <label for="project_id">PROJECT_ID</label>
                     <p class="form-control-static">{{$project->project_id}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('projects.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection