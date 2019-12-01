@extends('days_layout')

@section('title', 'Day 1')

@section('day')
    <p>Answer of the day: <span class="bold">{{ $fuel }}</span></p>
@endsection
