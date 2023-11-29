@extends('layouts.app')

@section('content')
    <h1>Vármegyék</h1>

    <a href="{{ route('varmegyek.create') }}" class="btn btn-success btn-primary">Új vármegye hozzáadása</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Név</th>
                <th>Műveletek</th>
            </tr>
        </thead>
        <tbody>
            @foreach($varmegyek as $varmegye)
                <tr>
                <td>{{ $varmegye->id }}</td>
                <td><a href="{{ route('varmegyek.edit', $varmegye->id) }}">{{ $varmegye->nev }}</a></td>
                    <td>
                        <form action="{{ route('varmegyek.destroy', $varmegye->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primray btn-danger">Törlés</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
