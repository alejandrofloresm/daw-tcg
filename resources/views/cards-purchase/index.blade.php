@extends('layouts.main')
@section('content')
<h1 class="title">Compra de la tarjeta</h1>
<table class="table">
    <tr>
        <th>Nombre</th>
        <td>{{ $data['card']->name }}</td>
    </tr>
    <tr>
        <th>Ataque</th>
        <td>{{ $data['card']->attack }}</td>
    </tr>
    <tr>
        <th>Defensa</th>
        <td>{{ $data['card']->price }}</td>
    </tr>
    <tr>
        <td colspan="2">
            <div id="paypal-button-container"></div>
        </td>
    </tr>
</table>
@endsection

@push('layout_end_body')
<script
    src="https://www.paypal.com/sdk/js?client-id=SUSTITUYE_POR_TU_CLIENT_ID&currency=MXN">
</script>
<script>
    paypal.Buttons({
    createOrder: function(data, actions) {
        // Set up the transaction
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: '{{ $data['card']->price }}'
                }
            }]
        });
        },
            onApprove: function(data, actions) {
                // Capture the funds from the transaction
                return actions.order.capture().then(function(details) {
                    // Call your server to save the transaction
                    return fetch('{{ route('cards.purchase.transaction', ['card' => $data['card']])}}', {
                        method: 'post',
                        headers: {
                            'content-type': 'application/json'
                        },
                        body: JSON.stringify({
                            orderID: data.orderID
                        })
                    })
                    .then(function(response) {
                        if (response.ok) {
                            window.location = '{{ route('cards.purchase.transaction.success', ['card' => $data['card']]) }}';
                        } else {
                            console.log(response);
                        }
                    });
                });
            }
    }).render('#paypal-button-container');
</script>
@endpush
