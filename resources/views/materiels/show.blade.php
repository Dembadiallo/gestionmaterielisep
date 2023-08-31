@extends('materiels.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Detail des materiels</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('materiels.index') }}"> Retour</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom:</strong>
                {{ $materiel->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descriptions:</strong>
                {{ $materiel->description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Inventaire:</strong>
                {{ $materiel->inventaire }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Etat:</strong>
                {{ $materiel->etat }}
            </div>
        </div>
    </div>
@endsection
