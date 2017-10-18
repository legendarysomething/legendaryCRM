<section class="panel timeline-post-to">
    <div class="panel-body">
        <form method="POST" action="" id="test_submission_form">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">

            <h3>Comments</h3>
            <br>
            <textarea class="form-control" name="comment" placeholder="Add a comment" style="{{$errors->has('submission') ? 'border-color: #e25d5d;' : ''}}"></textarea>
            <div class="row">
                <div class="col-sm-12 text-right">
                    <button type="submit" class="btn btn-success">Post</span>
                </div>
            </div>
        </form>
    </div>
</section>

<section class="panel timeline-post">
    <div class="panel-body">
        @if($user->comments->first())
        <ul>
            @foreach($user->comments as $comment)
            <li>
                <div class="date">
                    <img class="img-circle profile-image animated bounceIn" src="{{asset('img/profile.jpg')}}" alt="profile">
                </div>
                <h4>
                    {{$comment->user_owner->username}} - <small>{{$comment->created_at->toDayDateTimeString()}}</small>
                </h4>
                <br>

                <p>{{$comment->comment}}</p>
                
            </li>
            @endforeach
        </ul>
        @else
        <h4>No Comments Yet</h4>
        @endif
    </div>
</section>