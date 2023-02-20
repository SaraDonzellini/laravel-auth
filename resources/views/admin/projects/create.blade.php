@extends('layouts.app')

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-12">
              <h1>
                Scritto da: {{Auth::user()->name}}

              </h1>
            </div>
            <div class="col-12">
                <form action="{{ route('admin.projects.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea class="form-control" id="content" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image url</label>
                        <input type="text" class="form-control" id="image" name="image">
                    </div>
                    <button type="submit" class="btn btn-secondary">Create new project</button>
                </form>

            </div>
        </div>
    </section>
@endsection
