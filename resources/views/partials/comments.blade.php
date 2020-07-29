<div class="row">
  <div class="col-md-9">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">
          <span class="glyhicon glyhicon-comment">Recent Comments</span>
        </h3>
      </div>

      <div class="panel-body">
        <ul class="media-list">

           @foreach($comments  as $comment)
          <li class="media">
            <div class="media-left">
              <img src="" alt="cic" class="img-circle">
            </div>
            <div class="media-body">
              <h4 class="media-heading">
                
                <small>
                  {{$comment->user->email}}
                <br>
                  commented on {{$comment->created_at}}
                </small>
              </h4>
              <p>{{$comment->body}}</p>
              link:
              <p>{{$comment->url}}</p>
            </div>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>