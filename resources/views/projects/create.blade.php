@extends('layouts.app')

@section('content')
<div class="col-md-9 pull-left">
  <h1>create new project</h1>
    <form method="post" action="{{ route('projects.store')}}">
      {{ csrf_field()}}

      <div class="form-group">
        <label for="project-name">Name<span class="required">*</span></label>
        <input type="text" placeholder="Enter name" id="project-name" required="required" name="name" spellcheck="false" class="form-control" />
      </div>
      @if($companies == null)
      <input class="form-control" type="hidden" name="company_id" value="{{$company_id}}">
      @endif



       @if($companies != null)
      <div class="form-group">
        <label for="company-content">Select Company</label>
        <select name="company_id" class="form-control">
          @foreach($companies as $company)
          <option value="{{$company->id}}">{{$company->name}}</option>
          @endforeach
        </select>
      </div>
      @endif

      <div class="form-group">
        <label for="project-content">Description</label>
        <textarea placeholder="Enter description" style="resize: vertical;" id="project-content" required name="description" row="5" spellcheck="false" class="form-control autosize-target text-left"></textarea>
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
       <li><a href="/projects">my projects</a></li>

    </ul>
  </div>

  <!-- <div class="sidebar-module">
    <h4>Action</h4>
    <ul class="list-unstyled">
      <li><a href="">Edit</a></li>
      <li><a href="">Delete</a></li>
      <li><a href="">Add new member</a></li>
    </ul>
  </div> 
</div> --> 

@endsection