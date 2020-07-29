@extends('layouts.app')

@section('content')
<div class="col-md-9 pull-left">
    <form method="post" action="{{ route('projects.update', [$project->id])}}">
      {{ csrf_field()}}
     <!--  <input type="hidden" name="_method" value="put">
 -->
 {{ method_field('PATCH')}}
      <div class="form-group">
        <label for="company-name">Name<span class="required">*</span></label>
        <input type="text" placeholder="Enter name" id="company-name" required="required" name="name" spellcheck="false" class="form-control" value="{{$project->name}}"/>
      </div>

      <div class="form-group">
        <label for="company-content">Description</label>
        <textarea placeholder="Enter description" style="resize: vertical;" id="company-content" required name="description" row="5" spellcheck="false" class="form-control autosize-target text-left" value="{{$project->description}}">{{$project->description}}</textarea>
      </div>

      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Submit">
      </div>

    </form>
       

</div>


<div class="col-md-3 pull-right">
  <div class="sidebar-module sidebar-module-inset">
    <h4>Action</h4>
    <ul class="list-unstyled">
      <li><a href="/companies/{{$project->id}}">View companies</a></li>
      <li><a href="/companies">all companies</a></li>

    </ul>
  </div>



@endsection