@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12"> {{-- These divs are needed for proper layout --}}
                    <form method="POST" action="{{ route('recipes.update', $project) }}">
                        @csrf
                        @method('PUT')
                        <div class="card"> {{-- The form is placed inside a Bulma Card component --}}
                            <header class="card-header">
                                <p class="card-header-title"> {{-- The Card header content --}}
                                    Edit the project {{$project->name}}
                                </p>
                            </header>

                            <div class="card-content">
                                <div class="content">

                                    {{-- Here are all the form fields --}}
                                    <div class="field">
                                        <label class="label">Title</label>
                                        <div class="control">
                                            <input name="title" class="input @error('title') is-danger @enderror"
                                                   type="text" value="{{$project->title}}">
                                        </div>
                                        @error('title')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="field">
                                        <label class="label">Description</label>
                                        <div class="control">
                                            <textarea name="description"
                                                      class="textarea @error('description') is-danger @enderror"
                                                      type="text">{{$project->description}}</textarea>
                                        </div>
                                        @error('description')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="field">
                                        <label class="label">Budget</label>
                                        <div class="control">
                                            <input name="budget" class="input @error('budget') is-danger @enderror"
                                                   type="text" value="{{$project->budget}}">
                                        </div>
                                        @error('budget')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>
                                <div class="field is-grouped">
                                    {{-- Here are the form buttons: save, reset and cancel --}}
                                    <div class="control">
                                        <button type="submit" class="button is-primary">Save</button>
                                    </div>
                                    <div class="control">
                                        <button type="reset" class="button is-warning">Reset</button>
                                    </div>
                                    <div class="control">
                                        <a type="button" href="{{ route('recipes.show', $project) }}" class="button is-light">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form method="POST" action="{{route('recipes.destroy', $project)}}">
                        @csrf
                        @method('DELETE')
                        <button  class="button is-primary" type="submit">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

