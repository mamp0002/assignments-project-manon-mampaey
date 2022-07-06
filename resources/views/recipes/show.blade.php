@extends('layouts.app')

@section('content')
    <section class="hero  is-medium  is-bold is-primary"  style="background: no-repeat center center; background-size: cover;" >
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">{{$recipe->title}}</p>
                <p class="subtitle is-3"></p>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">

                <div class="column is-12">

                    <div class="content">
                        <p>hello</p>
                    </div>
                    <div class="control">
{{--                        <button class="button is-primary"--}}
{{--                                onclick=window.location.href="{{route('recipes.edit', $recipe)}}">--}}
{{--                            Edit recipe--}}
{{--                        </button>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

