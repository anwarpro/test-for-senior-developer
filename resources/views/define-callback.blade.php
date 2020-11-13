@extends('layouts.app')

@section('content')
    <section id="second-buyer-elo">
        <code>
            <pre>
                &lt;script&gt;
                    function checkAge(data, callback) {
                        callback(data);
                    }
                &lt;/script&gt;
            </pre>
        </code>
    </section>
@endsection

@push('js')
    <script>
        function checkAge(data, callback) {
            callback(data);
        }
    </script>
    <script>
        var data = {email: 'trump@gmail.com', age: 79}
        checkAge(data, function (email) {
            console.log(email.age < 18 ? 'Email is not valid' : 'Email is valid') //If data.age < 18 it'll log as not valid
        })
    </script>
@endpush
