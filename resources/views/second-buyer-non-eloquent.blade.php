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
                <td>{{$secondTopBuyer->diaryTaken}}</td>
                <td>{{$secondTopBuyer->penTaken}}</td>
                <td>{{$secondTopBuyer->eraserTaken}}</td>
                <td>{{$secondTopBuyer->totalItems}}</td>
            </tr>
            </tbody>
        </table>
    </section>
@endsection
