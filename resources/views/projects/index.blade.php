@extends('layouts.app')

@section('content')
    <section class="hero is-small is-primary">
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">Projects</p>
                <p class="subtitle is-3">Collection of Projects</p>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-full">
                    <div class="has-text-right">
                        <a href="{{route('projects.create')}}" class="button is-primary">Add a new project...</a>
                    </div>
                    <table class="table is-fullwidth is-striped">
                        <thead>
                        <tr>
                            <th>Project title</th>
                            <th>Description</th>
                            <th>Budget</th>
                            <th>Type</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($projects as $project)
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->description }}</td>
                                <td>€ {{ $project->budget }}</td>
                                <td class='{{$project->type==='expensive' ? 'has-background-danger':'has-background-success'}}'>{{ $project->type }}</td>
                                <td><a class="panel-block" href="{{ route('projects.show', $project) }}">Show</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        {{$projects->links()}}
    </section>
@endsection

