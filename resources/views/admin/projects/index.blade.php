@extends('layouts.app')

@section('content')
    <section class="container">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Date</th>
                    <th scope="col">
                      <a href="{{ route('admin.projects.create') }}" class="btn btn-secondary">Create new project</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->author }}</td>
                        <td>{{ $project->date }}</td>
                        <td>
                          <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-primary">Show</a>
                          <a href="" class="btn btn-success">Edit</a>
                          <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </section>
@endsection
