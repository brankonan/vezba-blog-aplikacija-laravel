<table class="table">
    <thead>
      <tr>

        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category }}</td>
            <td><a href="/deletepost/{{ $post->id }}">Delete</a></td>
          </tr>
        @endforeach
     
      
    </tbody>
  </table>