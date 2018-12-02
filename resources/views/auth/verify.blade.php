@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <br>
            <div class="card">
                <div class="card-header">Apstipriniet E-Pasta Adresi</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Apstripināšanas saite ir nosūtīta uz jūsu e-pastu.
                        </div>
                    @endif

                    Pirms turpināt jums jaapstiprina jūsu konts.
                    Ja jūs nesaņēmāt saiti, <a href="{{ route('verification.resend') }}">spiediet šeit</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
