
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<?php
 
 /*
    Podemos usar esta linea para redireccionar a ventas/venta en vez de esta pagina

    <meta http-equiv="refresh" content="0; ventas/venta" />

*/
 ?>