@extends('layouts.app')

@section('content')
    <section id="second-buyer-elo">
        <table>
            <thead>
            <th>Total Records</th>
            <th>Parsing Time</th>
            <th>Inserting Time</th>
            </thead>
            <tbody>
            <tr>
                <td>{{$totalInserted}}</td>
                <td>{{$parsingTime}} ns</td>
                <td>{{$insertingTime}} ns</td>
            </tr>
            </tbody>
        </table>
    </section>
@endsection
