@extends('days_layout')

@section('title', 'Day 2')

@section('day')
    <p>Position 0 of restored Gravity Assist Program: <span class="bold">{{ $alarm }}</span></p>
    <p>Noun-verb pair to get <span class="italic">19690720</span>: <span class="bold">{{ $code }}</span></p>
@endsection
