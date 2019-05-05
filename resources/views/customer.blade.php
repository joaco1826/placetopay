@extends("layout.app")
@section('title', 'PlacetoPay - Datos de cliente')
@section('content')
    <h3>Por favor diligencie el siguiente formulario para poder procesar su solicitud de compra</h3>
    <form action="{{ url("/save-customer") }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="InputName">Nombre completo *</label>
            <input type="text" class="form-control" id="InputName" name="customer_name" required minlength="3" maxlength="80">
        </div>
        <div class="form-group">
            <label for="InputEmail">Correo electrónico *</label>
            <input type="email" class="form-control" id="InputEmail" name="customer_email" required>
        </div>
        <div class="form-group">
            <label for="InputMobile">Celular *</label>
            <input type="text" class="form-control" id="InputMobile" name="customer_mobile" required minlength="7" maxlength="40">
        </div>
        <button type="submit" class="btn btn-primary">Guardar y continuar</button>
    </form>
@endsection