@extends('layouts.admin')

@section('contents')

<h1>{{  $project->title }}</h1>
<p>{{  $project->description }}</p>
<h2>{{  $project->repository }}</h2>

@endsection