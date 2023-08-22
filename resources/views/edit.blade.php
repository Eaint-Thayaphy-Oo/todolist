@extends('master')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 offset-3">
                <div class="my-3">
                    <a href="{{ route('post#updatePage', $post[0]['id']) }}" class="text-decoration-none text-black"><i
                            class="fa-solid fa-arrow-left"></i>back</a>
                </div>
                <form action="{{ route('post#update') }}" method="post">
                    @csrf
                    <label>Post Title</label>
                    <input type="hidden" name="postId" value="{{ $post[0]['id'] }}">
                    <input type="text" name="postTitle" class="form-control my-3" value="{{ $post[0]['title'] }}"
                        placeholder="Enter post title..." required>
                        <label>Post Description</label>
                    <textarea name="postDescription" cols="30" rows="10" class="form-control my-3"
                        placeholder="Enter post description..." required>{{ $post[0]['description'] }}</textarea>
                    <input type="submit" value="Update" class="btn bg-dark text-white my-3 float-end">
                </form>
            </div>
        </div>
    </div>
@endsection
