@extends('layouts.app')

@section('content')
    <section id="second-buyer-elo">
        <table>
            <thead>
            <th>Buyer id</th>
            <th>Buyer Name</th>
            <th>Total Diary Taken</th>
            <th>Total Pen Taken</th>
            <th>Total Eraser Taken</th>
            <th>Total items Taken</th>
            </thead>
            <tbody>

            @foreach($buyers as $buyer)
                <tr>
                    <td>{{$buyer->id}}</td>
                    <td>{{$buyer->name}}</td>
                    <td>{{$buyer->diaryTaken()->sum('amount')}}</td>
                    <td>{{$buyer->penTaken()->sum('amount')}}</td>
                    <td>{{$buyer->eraserTaken()->sum('amount')}}</td>
                    <td>{{$buyer->total_items}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </section>
@endsection
