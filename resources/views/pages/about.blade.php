@extends('app')

@section('title', 'About')

@section('content')
    <h1>About</h1>
    <p>Laravel Blogger has been created to demonstrate the power of the Laravel framework.</p>
    <p>Thank you for watching our presentation.</p>
    @if (count ($teammates))
        <h3>Sincerely,</h3>
        <ul>
            @foreach($teammates as $teammate)
                <li>{{ $teammate }}</li>
            @endforeach
        </ul>
        <em>The Laravel Presentation Team</em>
    @endif
@stop
