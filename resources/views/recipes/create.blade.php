@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12"> {{-- These divs are needed for proper layout --}}
                    <form method="POST" action="{{ route('recipes.store') }}">
                        @csrf
                        <div class="card"> {{-- The form is placed inside a Bulma Card component --}}
                            <header class="card-header">
                                <p class="card-header-title"> {{-- The Card header content --}}
                                    Add a new recipe
                                </p>
                            </header>

                            <div class="card-content">
                                <div class="content">

                                    {{-- Here are all the form fields --}}
                                    <div class="mb-3">
                                        <label for="title">Title</label>
                                        <div>
                                            <input class="form-control" name="title"
                                                   type="text" placeholder="Title of recipe" value="{{old('title')}}"
                                                   required>
                                        </div>
                                        @error('title')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="description">Description</label>
                                        <div>
                            <textarea type="text" class="form-control @error('description') is-invalid @enderror"
                                      name="description"
                                      placeholder="The manual for the recipe." rows="5" required
                            >{{old('description')}}</textarea>
                                        </div>
                                        @error('description')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="time">Approximated time</label>
                                        <div>
                                            <label>
                                                <input type="number" min="1"
                                                       class="form-control is-invalid @error('time') is-invalid @enderror"
                                                       name="time"
                                                       placeholder="time to make the recipe in minutes"
                                                       value="{{old('time')}}" required>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

