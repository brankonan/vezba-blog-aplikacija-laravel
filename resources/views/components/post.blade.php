<div class="col">
    <div class="card shadow-sm">
        <img src="{{ $post->image_url }}">
        <div class="card-body">
        <p class="card-text">{{ $post->title }}</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <a href="/posts/{{ $post->title}}" class="btn btn-sm btn-outline-secondary">View</a>
          </div>
          <small class="text-body-secondary">{{ $post->created_at->diffForHumans() }}</small>
        </div>
      </div>
    </div>
  </div>