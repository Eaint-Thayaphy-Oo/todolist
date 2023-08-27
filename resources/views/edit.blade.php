@extends('master')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 offset-3">
                <div class="my-3">
                    <a href="{{ route('post#updatePage', $post[0]['id']) }}" class="text-decoration-none text-black"><i
                            class="fa-solid fa-arrow-left"></i>back</a>
                </div>

                @if (session('insertSuccess'))
                    <div class="alert-message">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('insertSuccess') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                @endif
                
                @if (session('updateSuccess'))
                    <div class="alert-message">
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{ session('updateSuccess') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                @endif

                @if (session('deleteSuccess'))
                    <div class="alert-message">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session('deleteSuccess') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('post#update') }}" method="post">
                    @csrf
                    <label>Post Title</label>
                    <input type="hidden" name="postId" value="{{ $post[0]['id'] }}">
                    <input type="text" name="postTitle" class="form-control my-3"
                        value="{{ old('postTitle', $post[0]['title']) }}" placeholder="Enter post title...">
                    <label>Post Description</label>
                    <textarea name="postDescription" cols="30" rows="10" class="form-control my-3"
                        placeholder="Enter post description...">{{ old('postDescription', $post[0]['description']) }}</textarea>
                    <input type="submit" value="Update" class="btn bg-dark text-white my-3 float-end">
                </form>
            </div>
        </div>
    </div>
@endsection
