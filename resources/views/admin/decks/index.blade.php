@extends ('admin.layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Decks
    </h1>
</section>
<!-- Main content -->
<section class="content container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Índice de decks</h3>
                    <div class="pull-right box-tools">
                        <a class="btn btn-info btn-sm" href="{{ route('admin.decks.create') }}">
                            Crear nuevo deck
                        </a>
                    </div>
                </div>
                <div class="box-body">
                    @if (!$data['decks']->isEmpty())
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Creado el</th>
                                    <th>Accioness</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($data['decks'] as $deck)
                            <tr>
                                <td>{{ $deck->id }}</td>
                                <td>{{ $deck->name }}</td>
                                <td>{{ $deck->created_at }}</td>
                                <td>
                                    <a
                                        href="{{ route('admin.decks.show', ['deck' => $deck]) }}"
                                        class="btn btn-sm btn-default">
                                        <i class="fa fa-eye"></i>
                                        Ver deck
                                    </a>
                                    <a
                                        href="{{ route('admin.decks.cards.create', ['deck' => $deck]) }}"
                                        class="btn btn-sm btn-success">
                                        <i class="fa fa-cubes"></i>
                                        Agregar cartas
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No existen decks: <a href="{{ route('admin.decks.create') }}">crea uno aquí</a></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection
