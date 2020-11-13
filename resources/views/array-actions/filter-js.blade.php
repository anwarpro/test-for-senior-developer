@extends('layouts.app')

@section('content')
    <section id="second-buyer-elo">
        <code>
            <pre>
                &lt;script&gt;
                    var words = ['spray', 'limit', 'elite', 'exuberant', 'destruction', 'present'];

                    //filter basically iterate all array items and if return true, that item will be added in result array
                    //so if we want words array of a sub array which only have 6 or more letters word then we can use bellow condition
                    var result = words.filter(word => word.length >= 6);

                    console.log(result);
                    // expected output: Array ["exuberant", "destruction", "present"]

                &lt;/script&gt;
            </pre>
        </code>
    </section>
@endsection

@push('js')
    <script>

        var words = ['spray', 'limit', 'elite', 'exuberant', 'destruction', 'present'];

        //so if we want words array of a sub array which only have 6 or more letters word then we can use bellow condition
        var result = words.filter(word => word.length >= 6);

        console.log(result);
        // expected output: Array ["exuberant", "destruction", "present"]
    </script>
@endpush
