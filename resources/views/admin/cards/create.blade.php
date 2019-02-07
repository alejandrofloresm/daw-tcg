@extends ('admin.layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Crear una nueva carta
    </h1>
</section>
<!-- Main content -->
<section class="content container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form method="POST" action="{{ route('admin.cards.store') }}">
                @csrf
                <div class="box">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input name="card[name]" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Ataque</label>
                            <input name="card[attack]" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Defensa</label>
                            <input name="card[defense]" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Categoría</label>
                            <select name="card[category_id]" class="form-control">
                            @foreach ($data['categories'] as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Crear carta</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection
