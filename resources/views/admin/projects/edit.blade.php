@extends('layouts.app')

@section('content')
    <section class="container">
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-12">
                <h1>
                    Scritto da: {{ Auth::user()->name }}

                </h1>
            </div>
            <div class="col-12">
                <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ old('title', $project->title) }}">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea class="form-control" id="content" rows="10" name="content"
                            >{{ old('content', $project->content) }}</textarea>
                    </div>
                    <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image" value="{{ old('image', $project->image) }}">
                    </div>
                    <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $project->date) }}">
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Author</label>
                        <input type="author" class="form-control" id="author" name="author" value="{{ Auth::user()->name }}">
                    </div>
                    <button type="submit" class="btn btn-secondary">Create new project</button>
                    </form>

                </div>
            </div>
        </section>
@endsection
