@extends('layouts.app')

@section('content')
<div class="col-md-9 pull-left">
    <div class="jumbotron">
      <div class="text-center">
        <h1>{{$company->name}}</h1>      
        <p><h5>{{$company->description}}</h5></p>
      </div>
    </div>

       
      
         @foreach($company->projects as $project)
        <div class="col-sm-4">
          <div class="panel panel-primary">
            <div class="panel-heading">{{$project->name}}</div>
            <div class="panel-body" style="background-color: #474e5d; color:#fff;" >{{$project->description}}</div>
            <div class="panel-footer"><a  class="btn btn-success" href="/projects/{{$project->id}}"> progress</a></div>
          </div>
        </div>
        @endforeach
      
        
</div>


<div class="col-md-3 pull-right">
  <div class="sidebar-module sidebar-module-inset">
    <h4>Action</h4>
    <ul class="list-unstyled">
      <li><a href="/companies/{{$company->id}}/edit">Edit</a></li>
      <li><a href="/projects/create/{{$company->id}}">Add project</a></li>
      <li><a href="/companies">My companies</a></li> 
      <li><a href="/company/create">Create new company</a></li>
      <li>
        <a href="#" onclick="
        var result = confirm('Are you sure you wish to delete this Project?');
        if(result){
          event.preventDefault();
          document.getElementById('delete-form').submit();
        }

        ">Delete</a>

        <form id="delete-form" action="{{ route('companies.destroy', [$company->id])}}" method="POST"
         style="display: none;">
          <input type="hidden" name="_method" value="delete">
          {{ csrf_field() }}
        </form>
      </li>
   <!--    <li><a href="">Add new member</a></li> -->
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