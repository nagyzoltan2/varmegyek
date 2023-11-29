@extends('layouts.app')

@section('content')
    <h1>Új Vármegye létrehozásaaaaaa</h1>

    <form action="{{ route('varmegyek.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nev">Név:</label>
            <input type="text" name="nev" id="nev" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Mentés</button>
        <a href="{{ route('varmegyek.index') }}" class="btn btn-secondary">Mégse</a>
    </form>
@endsection
