@extends('layouts.app')
@section('content')

<section class="container">
    @foreach ($projects as $project )
    <div class="row">
        <div class="col-12">
            <div class="card">
                <img src="{{ $project->image }}" class="card-img-top img-fluid" alt="{{ $project->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text">{{ $project->content }}</p>
                </div>
            </div>

        </div>
    </div>
        
    @endforeach
</section>

@endsection