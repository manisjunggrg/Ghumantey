@extends('layouts.master')


@section('content')
@can('Admin')
    <div class="container">

@php $a = 1 @endphp
        <label for="message">Messages</label>
    <table class="table table-hover">
        <tr>
            <th>SN</th>
           <th>Name</th>
            <th>Email</th>
            <th>Message</th>
        </tr>
       @foreach($message as $m)
        <tr>
            <td>
                {{$a++}}
            </td>
            <td>
                {{$m->name}}
            </td>
            <td>
                {{$m->email}}
            </td>
            <td>
                {{$m->message}}
            </td>
        </tr>
           @endforeach
    </table>
@endcan
    </div>
    @endsection
