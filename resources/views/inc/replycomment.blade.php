@if(!Auth::guest())

<div class="container">
<small>reply</small>
<form action="/comments/reply/{{$comment->id}}" method="post">
			@csrf
			<div class="form-group">
				<label for="comment">Comment</label>
				<input type="text" name="body" placeholder="enter comment" class="form-control">
			</div>
			<div class="form-group">
			<button type="submit" class="btn btn-primary">comment</button>
		</div>
		</form>
	</div>

                 
@endif

