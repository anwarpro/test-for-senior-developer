@extends('layouts.app')

@section('content')
    <section id="second-buyer-elo">
        <code>
            <pre>
                &lt;script&gt;
                    //foreach of array iterate all items and take a callback
                    var fruits = ["Banana", "Orange", "Apple", "Mango"];
                    fruits.forEach(function(item,index){
                        console.log(item,index);
                    });

                    //output will be
                    /*
                    Banana 0
                    Orange 1
                    Apple 2
                    Mango 3
                    */

                &lt;/script&gt;
            </pre>
        </code>
    </section>
@endsection

@push('js')
    <script>
        //sort array alphabetically
        var fruits = ["Banana", "Orange", "Apple", "Mango"];
        fruits.forEach(function (item, index) {
            console.log(item, index);
        });
        //output
        /*
        Banana 0
        Orange 1
        Apple 2
        Mango 3
        */
    </script>
@endpush
