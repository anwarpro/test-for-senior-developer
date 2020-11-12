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
            <tr>
                <td>{{$secondTopBuyer->id}}</td>
                <td>{{$secondTopBuyer->name}}</td>
                <td>{{$secondTopBuyer->diaryTaken()->sum('amount')}}</td>
                <td>{{$secondTopBuyer->penTaken()->sum('amount')}}</td>
                <td>{{$secondTopBuyer->eraserTaken()->sum('amount')}}</td>
                <td>{{$secondTopBuyer->total_items}}</td>
            </tr>
            </tbody>
        </table>
    </section>
@endsection
