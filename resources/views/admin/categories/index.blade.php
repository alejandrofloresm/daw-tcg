@extends ('admin.layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Categorías
    </h1>
</section>
<!-- Main content -->
<section class="content container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Índice de categorías</h3>
                    <div class="pull-right box-tools">
                        <a class="btn btn-info btn-sm" href="{{ route('admin.categories.create') }}">
                            Crear nueva categoría
                        </a>
                    </div>
                </div>
                <div class="box-body">
                    @if (!$data['categories']->isEmpty())
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Color</th>
                                    <th>Creado</th>
                                    <th># Cartas</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($data['categories'] as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <span style="color: {{ $category->hex_color }}">
                                        {{ $category->hex_color }}
                                    </span>
                                </td>
                                <td>{{ $category->created_at }}</td>
                                <td>{{ $category->cards->count() }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No existe ninguna categoría: <a href="{{ route('admin.categories.create') }}">crea una aquí</a></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection
