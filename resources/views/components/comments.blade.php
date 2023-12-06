@foreach ($post->comments as $comment)
    <div>
        <p>{{ $comment->body }}</p>
        <p>{{ $comment->created_at->diffForHumans() }}</p>
    </div>
    
    @endforeach