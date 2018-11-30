@extends('layouts.master')
@section('content')
 @if( session()->has('formData'))
 <div class="well well-sm">
    <h1>Bedankt</h1>
    <p>Hier ziet u de opgestuurde gegevens:</p>
    
    <p>
    <strong>Voornaam:</strong> {{ session('formData.firstname') }}<br/>
    <strong>Tussenvoegsel:</strong>
    {{ session('formData.middlename') }}<br/>
    <strong>Achternaam:</strong> {{ session('formData.lastname') }}<br/>
    <strong>Telefoonnummer:</strong> {{ session('formData.phonenumber') }}<br/>
    <strong>Datum:</strong> {{ session('formData.time')
    }}<br/>
    </p>
    <p>
    <a href="{{ route('registration.form') }}">Terug naar het
    formulier</a>
    </p>
 </div>
 @endif
@endsection