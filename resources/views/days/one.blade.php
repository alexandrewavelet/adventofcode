@extends('days_layout')

@section('title', 'Day 1')

@section('day')
    <p>Amount of fuel for modules only: <span class="bold">{{ $fuel }}</span></p>
    <p>Full amount of fuel: <span class="bold">{{ $full_fuel }}</span></p>
@endsection
