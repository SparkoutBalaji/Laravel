@extends('admin.adminpanel')
@section('admin-content')
<style>
    table, tr, th, td {
        border: 1px solid black;
        text-align: center;
    }
    h1 {
        text-align: center;
    }
</style>
    <h1>Questions List</h1>

    <table>
        <tr>
            <th>S.NO</th>
            <th>Question</th>
            <th>Option 1</th>
            <th>Option 2</th>
            <th>Option 3</th>
            <th>Answer</th>
            <th>ACTION</th>
        </tr>
        @foreach ( as )

        @endforeach
    </table>
@endsection
