@extends('master')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-5">
                <div class="p-3">
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
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    @endif

                    @if (session('deleteSuccess'))
                        <div class="alert-message">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ session('deleteSuccess') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
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

                    <form action="{{ route('post#create') }}" method="post">
                        @csrf
                        <div class="text-group mb-3">
                            <label for="">Post Title</label>
                            <input type="text" name="postTitle" value="{{ old('postTitle') }}"
                                class="form-control @error('postTitle') is-invalid @enderror"
                                placeholder="Enter Post Title...">
                            @error('postTitle')
                                <div class="invalid-feedback">
                                    Post Title is required.
                                </div>
                            @enderror
                        </div>
                        <div class="text-group mb-3">
                            <label for="">Post Description</label><br>
                            <textarea name="postDescription" cols="54" rows="10" class="@error('postDescription') is-invalid @enderror"
                                placeholder="Enter Post Description...">{{ old('postDescription') }}</textarea>
                            @error('postDescription')
                                <div class="invalid-feedback">
                                    Post Description is required.
                                </div>
                            @enderror
                        </div>
                        <input type="submit" value="Create" class="btn btn-danger">
                    </form>
                </div>
            </div>
            <div class="col-7">
                <h3 class="mb-3">Total - {{ $posts->total() }}</h3>
                <div class="data-container">
                    @foreach ($posts as $item)
                        <div class="post p-3 shadow-sm mb-4">
                            <h5>{{ $item['title'] }}</h5>
                            {{-- php pone san nae words ko phyat tr --}}
                            {{-- <p class="text-group">{{ substr($item['description'], 0, 10) }}</p> --}}
                            {{-- laravel pone san nae words ko phyat tr --}}
                            <p class="text-group">{{ Str::words($item['description'], 10, '...') }}</p>
                            <div class="text-end">
                                <a href="{{ route('post#delete', $item['id']) }}">
                                    <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash">ဖျက်ရန်</i></button>
                                </a>
                                {{-- <form action="{{ route('post#delete', $item['id']) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </form> --}}
                                <a href="{{ route('post#updatePage', $item['id']) }}">
                                    <button class="btn btn-sm btn-primary"><i
                                            class="fa-solid fa-file-lines">အပြည့်အစုံဖတ်ရန်</i></button></a>
                            </div>
                        </div>
                    @endforeach
                    {{-- @for ($i = 0; $i < count($posts); $i++)
                        <div class="post p-3 shadow-sm mb-4">
                            <h5>{{ $posts[$i]['title'] }}</h5>
                            <p class="text-group">{{ $posts[$i]['description'] }}</p>
                            <div class="text-end">
                                <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                <button class="btn btn-sm btn-primary"><i class="fa-solid fa-file-lines"></i></button>
                            </div>
                        </div>
                    @endfor --}}
                </div>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
