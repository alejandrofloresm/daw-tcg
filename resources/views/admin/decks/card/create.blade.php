@extends ('admin.layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Agregar cartas al deck
    </h1>
</section>
<!-- Main content -->
<section class="content container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="box">
                <div class="box-body">
                    <div class="form-group">
                        <label for="">Nombre del deck</label>
                        <input type="text" class="form-control" value="{{ $data['deck']->name }}" disabled>
                    </div>
                </div>
            </div>

            <form method="POST" action="{{ route('admin.decks.cards.store', ['deck' => $data['deck']]) }}">
                @csrf
                <div class="box">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Tarjeta a agregar</label>
                            <select name="card_deck[card_id]" class="form-control">
                                <option value="">Selecciona una tarjeta</option>
                                @foreach ($data['cards'] as $card)
                                    <option value="{{ $card->id }}">{{ $card->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Agregar tarjeta</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection
