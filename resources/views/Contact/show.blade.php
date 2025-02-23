@extends('layouts.app')

@section('content')
<h1>Contact Details</h1>

<table class="table">
    <tr>
        <th>Name:</th>
        <td>{{ $contact->name }}</td>
    </tr>
    <tr>
        <th>Address:</th>
        <td>{{ $contact->address }}</td>
    </tr>
    <tr>
        <th>Email:</th>
        <td>{{ $contact->email }}</td>
    </tr>
    <tr>
        <th>Message:</th>
        <td>{{ $contact->message }}</td>
    </tr>
</table>

<a href="{{ route('contact.index') }}" class="btn btn-primary">Back to Contacts</a>
@endsection
