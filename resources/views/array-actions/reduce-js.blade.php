@extends('layouts.app')

@section('content')
    <section id="second-buyer-elo">
        <code>
            <pre>
                &lt;script&gt;
                    //The reduce() method executes given callback function on each element of the array,
                    //resulting in single output value.
                    //suppose we have a marks array and need to calculate total marks we can use reduce for this case

                    var marks = [10, 20, 30, 40];

                    var total = marks.reduce(function (total, mark) {
                        return total + mark;
                    })

                    console.log(total);
                    //expected output: 100

                    //default accumulator value 0
                    // second parameter will be accumulator initial value

                    var total = marks.reduce(function (total, mark) {
                        return total + mark;
                    }, 100)
                    console.log(total);
                    //expected output: 200
                &lt;/script&gt;
            </pre>
        </code>
    </section>
@endsection

@push('js')
    <script>
        //The reduce() method executes given callback function on each element of the array,
        //resulting in single output value.
        //suppose we have a marks array and need to calculate total marks we can use reduce for this case

        var marks = [10, 20, 30, 40];

        var total = marks.reduce(function (total, mark) {
            return total + mark;
        })

        console.log(total);
        //expected output: 100

        //default accumulator value 0
        // second parameter will be accumulator initial value

        var total = marks.reduce(function (total, mark) {
            return total + mark;
        }, 100)
        console.log(total);
        //expected output: 200
    </script>
@endpush
