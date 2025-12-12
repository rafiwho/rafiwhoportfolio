@extends('layouts.app')
@section('title', 'Md. Uodoy Hossan Rafi - Backend Developer & Competitive Programmer')
@section('content')

@include('navigation')

<main id="main-content">
  @include('hero')
  @include('skills')
  @include('projects')
  @include('education')
  @include('achievements')
  @include('statistics')
  @include('contact')
</main>

@include('footer')

@endsection
