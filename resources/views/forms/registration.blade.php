@extends('layouts.master')

@section('pagetitle')
@endsection

@section('content')
    <div id="box2">
        <h1>Fill In</h1>
        @if ($errors->any())
        <h2 class="error-message">There were some errors, please try again later</h2>
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
        <h2 class="error-message"><li class="errors">{{ $error }}</li></h2>
        @endforeach
        </ul>
    </div>
        @endif
 <form action="{{ route('registration.form.handle') }}" method="POST">
    @csrf

    <div class="row">
    <div class="col-5">
    <div class="form-group">
        <label for="">First Name:</label><br>
        <input type="text" name="firstname" class="form-control"
        value="{{ old('firstname') }}"/>
    </div>
    </div>

    <br>
    <div class="col-2">
    <div class="form-group">
        <label for="">Middle Name:</label><br>
        <input type="text" name="middlename" class="form-control"
        value="{{ old('middlename') }}"/>
    </div>
    </div>

    <br>
    <div class="col-5">
    <div class="form-group">
        <label for="">Last Name:</label><br>
        <input type="text" name="lastname" class="form-control"
    value="{{ old('lastname') }}"/>
    </div>
    </div>

    <br>
    </div>
    <div class="form-group">
        <label for="">Phone Number:</label><br>
        <input type="text" name="phonenumber" class="form-control" value="{{ old('phonenumber') }}"/>
    </div>

    <br>
    <div class="form-group">
        <label for="">How Many Persons?:</label><br>
        <input type="text" name="numberofpersons" class="form-control"
        value="{{ old('birthdate') }}"/>
    </div>

    <br>
    <div class="form-group">
    <label for="">What date?:</label><br>
    <input type="date" name="time" class="form-control" value="{{ old('time') }}"/>
    </div>

    <br>
    <br>

    <p>
    <button type="submit" class="btn btn-primary">Confirm</button><br>
    </p>
 </form>
 <br>
</div>
@endsection