@extends('layouts.app')

@section('content')
    <section id="second-buyer-elo">
        <code>
            <pre>
                &lt;script&gt;
                    //The map() method creates a new array populated with the results of calling a provided function
                    // on every element in the calling array
                    var numbers = [1, 4, 9, 16];

                    // pass a function to map
                    const doubleOfEveryNumber = numbers.map(x => x * 2);

                    console.log(doubleOfEveryNumber);
                    // expected output: Array [2, 8, 18, 32]
                &lt;/script&gt;
            </pre>
        </code>
    </section>
@endsection

@push('js')
    <script>
        //The map() method creates a new array populated with the results of calling a provided function
        // on every element in the calling array
        var numbers = [1, 4, 9, 16];

        // pass a function to map
        const doubleOfEveryNumber = numbers.map(x => x * 2);

        console.log(doubleOfEveryNumber);
        // expected output: Array [2, 8, 18, 32]
    </script>
@endpush
