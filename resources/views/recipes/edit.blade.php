@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12"> {{-- These divs are needed for proper layout --}}
                    <form method="POST" action="{{ route('recipes.update', $recipe) }}">
                        @csrf
                        @method('PUT')
                        <div class="card"> {{-- The form is placed inside a Bulma Card component --}}
                            <header class="card-header">
                                <p class="card-header-title"> {{-- The Card header content --}}
                                    Edit the recipe {{$recipe->title}}
                                </p>
                            </header>

                            <div class="card-content">
                                <div class="content">

                                    {{-- Here are all the form fields --}}
                                    <div class="mb-3">
                                        <label for="title">Title</label>
                                        <div>
                                            <input name="title" class="form-control @error('title') is-danger @enderror"
                                                   type="text" value="{{$recipe->title}}">
                                        </div>
                                        @error('title')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="description">Description</label>
                                        <div>
                                            <textarea name="description"
                                                      class="form-control @error('description') is-danger @enderror"
                                                      type="text">{{$recipe->description}}</textarea>
                                        </div>
                                        @error('description')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="time">Approximated time</label>
                                        <div>
                                            <label>
                                                <input name="time" class="form-control @error('time') is-danger @enderror"
                                                       type="number" min="1" value="{{$recipe->time}}">
                                            </label>
                                        </div>
                                        @error('time')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>
                                <div class="field is-grouped">
                                    {{-- Here are the form buttons: save, reset and cancel --}}
                                    <div class="control">
                                        <button type="submit" class="btn btn-info btn-lg btn-block">Save</button>
                                    </div>
                                    <div class="control">
                                        <button type="reset" class="button is-warning">Reset</button>
                                    </div>
                                    <div class="control">
                                        <a type="button" href="{{ route('recipes.show', $recipe) }}" class="button is-light">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form method="POST" action="{{route('recipes.destroy', $recipe)}}">
                        @csrf
                        @method('DELETE')
                        <button  class="btn btn-warning btn-lg btn-block" type="submit">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

