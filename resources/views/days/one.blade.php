@extends('days_layout')

@section('title', 'Day 1')

@section('challenge', 'The Tyranny of the Rocket Equation');

@section('day')
    <p>Amount of fuel for modules only: <span class="bold">{{ $fuel_modules }}</span></p>
    <p>Full amount of fuel: <span class="bold">{{ $fuel_total }}</span></p>
@endsection
