@extends('layouts.app')

@section('content')
<div class="col-md-9 pull-left">
    <form method="post" action="{{ route('companies.store')}}">
      <h1>create new company</h1>
      {{ csrf_field()}}

      <div class="form-group">
        <label for="company-name">Name<span class="required">*</span></label>
        <input type="text" placeholder="Enter name" id="company-name" required="required" name="name" spellcheck="false" class="form-control" />
      </div>
     

      <div class="form-group">
        <label for="company-content">Description</label>
        <textarea placeholder="Enter description" style="resize: vertical;" id="company-content" required name="description" row="5" spellcheck="false" class="form-control autosize-target text-left"></textarea>
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
       <li><a href="/companies">my companies</a></li>

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