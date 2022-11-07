@extends('layouts.app')

@section('content')
    @if (count($results) > 0)
    @for ($i = 0; $i < count($results); $i++)
        <div class="my-card-body">
            <h1 class="title">
                {{$results[$i]->title}}
            </h1>
            <p style="color: gray">Description</p>
            <h3 class="content">
                {{$results[$i]->content}}
            </h3>
            <div class="passed">
                @if ($results[$i]->passed == 1)
                    <p style="color: green;">PASSED</p>
                @else
                    <p style="color: red;">FAILED</p>
                @endif
            </div>
        </div>
        @endfor
    @else
        <h1 style="color: red; text-align: center; margin-top: 40px;">No results yet.</h1>
    @endif
@endsection
