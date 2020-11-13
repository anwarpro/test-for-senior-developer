@extends('layouts.app')

@section('content')
    <section id="second-buyer-elo">
        <code>
            <pre>
                &lt;script&gt;
                    //sort array alphabetically
                    var fruits = ["Banana", "Orange", "Apple", "Mango"];
                    fruits.sort();        // Sorts the elements of fruits asc
                    console.log(fruits); // output: ["Apple","Banana", "Orange", "Mango"]

                    // we can use reverse() after sort() for sorting desc
                    fruits.reverse();
                    console.log(fruits); //output: ["Mango","Orange","Banana","Apple"]

                    //sort numbers array
                    var numbers = [50,10,100,40,800,200];
                    numbers.sort(function(a, b){
                        return a - b; // b - a will sort desc order or we can use reverse after sort() method
                    });
                    console.log(numbers);

                &lt;/script&gt;
            </pre>
        </code>
    </section>
@endsection

@push('js')
    <script>
        //sort array alphabetically
        var fruits = ["Banana", "Orange", "Apple", "Mango"];
        fruits.sort();        // Sorts the elements of fruits asc
        console.log(fruits); // output: ["Apple","Banana", "Orange", "Mango"]

        // we can use reverse() after sort() for sorting desc
        fruits.reverse();
        console.log(fruits); //output: ["Mango","Orange","Banana","Apple"]

        //sort numbers array
        var numbers = [50, 10, 100, 40, 800, 200];
        numbers.sort(function (a, b) {
            return a - b; // b - a will sort desc order or we can use reverse after sort() method
        });
        console.log(numbers); //output: [10, 40, 50, 100, 200, 800]
    </script>
@endpush
