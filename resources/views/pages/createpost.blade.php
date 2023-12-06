@extends("layout.default");

@section('content')

<form method="POST" action="{{ url('createpost') }}">

 @csrf

    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" name="title" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Body</label>
        <textarea class="form-control" name="body" cols="30" rows= "10"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Category</label>
        <input type="text" class="form-control" name="category" required>
    </div>
        <div class="mb-3">
        <label class="form-label">Image URL</label>
        <input type="text" class="form-control" name="image_url" required>
    </div>
        <button type="submit" class="btn btn-primary">Create POST</button>
</form>

@include('components.errors')

@include('components.status')

@endsection