@extends('layouts.app')

@section('content')
    <section id="second-buyer-elo">

    </section>
@endsection

@push('js')
    <script>

        function checkAge(data, callback) {
            callback(data);
        }

        var data = {email: 'trump@gmail.com', age: 17}
        checkAge(data, function (email) {
            console.log(email.age < 18 ? 'Email is not valid' : 'Email is valid') //If data.age < 18 it'll log as not valid
        })
    </script>
@endpush
