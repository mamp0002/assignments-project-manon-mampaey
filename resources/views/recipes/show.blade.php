@extends('layouts.app')

@section('content')
    <section class="hero  is-medium  is-bold is-primary"  style="background: no-repeat center center; background-size: cover;" >
        <div class="hero-body">
            <div class="container">
                <p class="title is-2"></p>
                <p class="subtitle is-3"></p>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">

                <div class="column is-12">

                    <div class="content" id="recipe">
                    </div>
                    <div class="control">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="/js/showRecipe.js"></script>
@endsection

