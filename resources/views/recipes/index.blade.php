@extends('layouts.app')

@section('content')
    <section class="hero is-small is-primary">
        <div class="hero-body">
            <div class="container">
                <h2 class="title is-2">Recipes!</h2>
                <p class="subtitle is-3">Collection of Recipes</p>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-full">
                    <div class="has-text-right">
                        <a href="{{route('recipes.create')}}" class="button is-primary">Add a new recipe...</a>
                    </div>
                    <table class="table is-fullwidth is-striped">
                        <thead>
                        <tr>
                            <th>Recipe title</th>
                            <th>Description</th>
                            <th>Time</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($recipes as $recipe)
                                <td>{{ $recipe->title }}</td>
                                <td>{{ $recipe->description }}</td>
                                <td>{{ $recipe->time }}</td>
                                <td><a class="panel-block" href="{{ route('recipes.show', $recipe) }}">Show</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div id="recipeList"></div>
            </div>
        </div>
    </section>
@endsection
<script src="/js/indexRecipes.js"></script>


