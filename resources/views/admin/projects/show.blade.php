@extends('layouts.app')

@section('page-title', '$project->title')

@section('main-content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center text-success">
                    {{ $project->title }}
                </h1>

                <h2>
                   {{-- Tipologia di progetto: {{ $project->type->title }} --}}
                </h2>
                    <div>
                        Technologies:
                        @forelse ($project->technologies as $technology)
                            <a href="{{ route('admin.technologies.show', ['technology' => $technology->slug]) }}"
                                class="badge rounded-pill text-bg-primary">
                                {{ $technology->title }}
                            </a>
                        @empty
                            -
                        @endforelse
                    </div>

                    @if ($project->cover_img != null)
                        <div class="my-3">
                            <img src="{{ asset('storage/'.$project->cover_img) }}" style="max-width: 400px;">
                        </div>
                    @endif


                <h2>
                    Slug: {{ $project->slug }}
                </h2>

                <p>
                    {{ $project->content }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
