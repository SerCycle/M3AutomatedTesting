@extends('layouts.app')

@section('content')
@auth
<div class="con">
    <div class=" mx-4 ">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title }}
        </h2>
    </div>

    <div class="py-12">
        <div class="col">
            <div class="card bg-secondary mx-4 ">
                <div class="card">
                    <p class="mx-3 font-base mb-3 mt-3">{{$post->description}}</p>
                    <p class="mx-3 mt-2">{{ $post->created_at->diffForHumans() }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endauth

@endsection