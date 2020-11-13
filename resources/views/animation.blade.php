@extends('layouts.app')

@section('content')
    <div id="box-animation" class="box">a box :)</div>
@endsection

@push('css')
    <style>
        body {
            padding: 0;
            margin: 0;
        }

        .box {
            display: inline-block;
            padding: 0.5em 1em;
            font-family: Arial;
            font-weight: 600;
            font-size: 2rem;
            border-radius: 1rem 1rem;
            text-align: center;
            box-shadow: -3px 5px 20px -3px #AAA;
            border: solid 10px #fff;
            color: #fff;
        }

        #box-animation {
            position: relative; /* change to fixed or absolute */
            left: 0;
            top: 0;
            background: #c70039;
            animation: 4s ease-in-out infinite alternate topLeftBottomRight;
        }

        @keyframes topLeftBottomRight {
            from {
                transform: translateX(0) translateY(0);
            }
            to {
                transform: translateX(calc(100vw - 100%)) translateY(calc(100vh - 100%));
            }
        }
    </style>
@endpush
