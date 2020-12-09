@extends('subview.master')

@section('title', 'E-book List')

@section('content')
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid grey;
            text-align: center;
            padding: 10px;
        }

        tr:nth-child(even) {
            background-color: beige;
        }
    </style>
    <h1>E-book List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>ISBN</th>
            <th>Genre</th>
            <th>No. of Pages</th>
        </tr>
        @foreach($ebookList as $list)
            <tr>
                <td>{{ $list[0] }}</td>
                <td>{{ $list[1] }}</td>
                <td>{{ $list[2] }}</td>
                <td>{{ $list[3] }}</td>
            </tr>
        @endforeach
    </table>
    
@endsection