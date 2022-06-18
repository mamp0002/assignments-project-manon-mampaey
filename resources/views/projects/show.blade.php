@extends('common.master')

@section('content')
    <section class="hero  is-medium  is-bold is-primary"  style="background: no-repeat center center; background-size: cover;" >
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">{{$project->title}}</p>
                <p class="subtitle is-3"></p>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">

                <div class="column is-12">

                    <div class="content">
                        <h1>{{$project->title}}</h1>
                        <p><i>Budget: € {{$project->budget}} ({{$project->type}})</i></p>
                        <p>{{$project->description}}</p>
                        <p>Groupname: {{$project->group->name}}</p>
                        <p>Semester: {{$project->group->semester }}</p>
                    </div>
                    <div class="control">
                        <button class="button is-primary"
                                onclick=window.location.href="{{route('projects.edit', $project)}}">
                            Edit Project
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

