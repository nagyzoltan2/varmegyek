@extends('layouts.app')

@section('content')
    <h1>Vármegye szerkesztése</h1>

    <form action="{{ route('varmegyek.update', $varmegy->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nev">Név:</label>
            <input type="text" name="nev" id="nev" class="form-control" value="{{ $varmegy->nev }}">
        </div>
        <button type="submit" class="btn btn-primary">Mentés</button>
        <a href="{{ route('varmegyek.index') }}" class="btn btn-secondary">Mégse</a>
    </form>
@endsection
