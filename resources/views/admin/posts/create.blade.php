<x-admin-master>
    @section('content')
        <h1>Create Post</h1>

        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input
                    type="text"
                    class="form-control"
                    name="title"
                    id="title"
                    aria-describedby=""
                    placeholder="Enter Title...">
            </div>

            <div class="form-group">
                <label for="post_image">Image</label>
                <input
                    type="file"
                    id="post_image"
                    class="form-control-file"
                    name="post_image">
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea
                    name="body"
                    class="form-control"
                    id="body"
                    placeholder="Body..."
                    cols="30"
                    rows="10"></textarea>
            </div>

            <button type="sumit" class="btn btn-outline-primary">Create!</button>
        </form>
    @endsection
</x-admin-master>
