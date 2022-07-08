@extends('layouts.app')

@section('content')
    <section class="hero is-small is-primary">
        <div class="hero-body">
            <div class="container">
                <h2 class="title is-2">Recipes</h2>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-full">
                    <table class="table is-fullwidth is-striped">
                        <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody id="recipeList">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script src="/js/indexRecipes.js"></script>
@endsection



