@extends('layouts.app')

@section('content')
<div class="col-md-9 pull-left">
    <div class="well well-lg">
      <div class="text-center">
        <h1>{{$project->name}}</h1>      
        <p><h5>{{$project->description}}</h5></p>
      </div>
    </div>

@include('partials.comments')
<div class="row">
  <div class="col-md-9">
 <form method="post" action="{{ route('comments.store')}}">
      {{ csrf_field()}}

      <input type="hidden" name="commentable_type" value="App\project">
      <input type="hidden" name="commentable_id" value="{{$project->id}}">

      <div class="form-group">
        <label for="comment-content">Comment</label>
        <textarea placeholder="Enter comment" style="resize: vertical;" id="comment-content" required name="body" row="3" spellcheck="false" class="form-control autosize-target text-left"></textarea>
      </div>

      <div class="form-group">
        <label for="comment-content">insert url</label>

        <textarea placeholder="Enter url " style="resize: vertical;" id="comment-content" required name="url" row="1" spellcheck="false" class="form-control autosize-target text-left"></textarea>
      </div>

      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Submit">
      </div>

    </form>
    </div>
</div>


     
      
     
      
        
</div>


<div class="col-md-3 pull-right">
  <div class="sidebar-module sidebar-module-inset">
    <h4>Action</h4>
    <ul class="list-unstyled">
      <li><a href="/projects/{{$project->id}}/edit">Edit</a></li>
      <li><a href="/project/create">Create new project</a></li>
      <li><a href="/projects">List my projects</a></li> 
      @if($project->user_id == Auth::user()->id)
      <li>
        <a href="#" onclick="
        var result = confirm('Are you sure you wish to delete this Project?');
        if(result){
          event.preventDefault();
          document.getElementById('delete-form').submit();
        }

        ">Delete</a>

        <form id="delete-form" action="{{ route('projects.adduser', [$project->id])}}" method="POST"
         style="display: none;">
          <input type="hidden" name="_method" value="delete">
          {{ csrf_field() }}
        </form>
      </li>
      @endif
   <!--    <li><a href="">Add new member</a></li> -->
    </ul>

    <hr>
    <h4>Add members</h4>
    <div class="row">
      <div class="col-md-12">
         <form id="add-user" action="{{ route('projects.adduser')}}" method="POST">
          {{ csrf_field() }}
        <div class="input-group">
           <input type="hidden" name="project_id" value="{{$project->id}}" class="form-control">
          <input type="text" name="email" class="form-control" placeholder="Email">
          <span class="input-group-btn">
            <button class="btn btn-primary" type="submit">Add!</button>
          </span>
        </div>
      </form>
      </div>
    </div>
  </div>

<br>

  <h4>Team members</h4>
  <ol class="list-unstyled">
    @foreach($project->users as $user)
    <li><a href="">{{$user->email}}</a></li>
    @endforeach
  </ol>

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