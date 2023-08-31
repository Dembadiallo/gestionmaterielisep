@extends('materiels.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
                <h2><center>Systeme De Gestion Des Materiels De L'Isep</center></h2>
            </div>

        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Inventaire</th>
            <th>Etat</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($materiels as $materiel)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $materiel->nom }}</td>
            <td>{{ $materiel->description }}</td>
            <td>{{ $materiel->inventaire }}</td>
            <td>{{ $materiel->etat }}</td>
            <td>
                <form action="{{ route('materiels.destroy',$materiel->id) }}" method="POST">

                    <a class="btn btn-info btn-sm" href="{{ route('materiels.show',$materiel->id) }}">Detail</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('materiels.edit',$materiel->id) }}">Modifier</a>

                    @csrf
                    @method('DELETE')
                    <input onclick="return confirm('Êtes-vous sûr ?')" class="btn btn-danger btn-sm"
                     type="submit" value="Supprimer">


                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $materiels->links() !!}

@endsection
