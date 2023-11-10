<!-- resources/views/admin/course-form-pin/index.blade.php -->

@extends('layouts.app') {{-- or your desired layout --}}

@section('title', 'Course Form Pins')

@section('content')
    <table>
        <thead>
        <tr>
            <th>Pin Number</th>
            <th>Status</th>
            <th>Created Admin</th>
            <th>Date Created</th>
            <th>Time Created</th>
            <th>Student Used</th>
            <th>Date Used</th>
            <th>Time Used</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pins as $pin)
            <tr>
                <td>{{ $pin->pin_num }}</td>
                <td>
                    @if($pin->is_used == 1)
                        Pin Used
                    @elseif($pin->is_used == 2)
                        Not Used
                    @else
                        Error in Pin
                    @endif
                </td>
                <td>
                    @if($pin->is_used == 1 && $pin->createdAdmin)
                        {{ $pin->createdAdmin->first_name }} {{ $pin->createdAdmin->last_name }}
                    @else
                        Error: User not found
                    @endif
                </td>
                <td>{{ $pin->date_created }}</td>
                <td>{{ $pin->time_created }}</td>
                <td>
                    @if($pin->is_used == 1 && $pin->studentUsed)
                        {{ $pin->studentUsed->first_name }} {{ $pin->studentUsed->last_name }}
                    @elseif($pin->is_used == 2)
                        Not Used
                    @else
                        Error: Student not found
                    @endif
                </td>
                <td>{{ $pin->date_used }}</td>
                <td>{{ $pin->time_used }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
