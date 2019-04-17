@extends('layouts.main')
@section('content')
    <div class="tile is-ancestor">
        <div class="tile is-parent">
            <div class="tile box is-child">
                <div class="content">
                    <p class="title">{{ $data['attack_total'] }}</p>
                    <p class="subtitle">Ataque total</p>
                </div>
            </div>
        </div>
        <div class="tile is-parent">
            <div class="tile box">
                <div class="content">
                    <p class="title">{{ $data['defense_total'] }}</p>
                    <p class="subtitle">Defensa total</p>
                </div>
            </div>
        </div>
    </div>
    <div class="column">
        <h1 class="title">Gráfica</h1>
        <canvas id="report-graph-1"></canvas>
    </div>
@endsection

@push('layout_end_body')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
<script>
var ctx = 'report-graph-1';
var data = {
    datasets: [{
        data: [{{ $data['attack_total'] }}, {{ $data['defense_total'] }}],
        backgroundColor: [
            'rgba(255, 99, 132)',
            'rgba(54, 162, 235)',
        ],
    }],
    labels: [
        'Ataque',
        'Defensa',
    ]
};
var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: data
});
</script>
@endpush
