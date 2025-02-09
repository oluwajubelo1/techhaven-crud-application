@extends('layouts.app')

@section('content')
<h1>Contacts</h1>

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Address</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($allContacts as $contact)
    <tr>
        <td>{{ $contact->id }}</td>
        <td>{{ $contact->name }}</td>
        <td>{{ $contact->email }}</td>
        <td>{{$contact->address}}</td>
        <td>{{ $contact->message }}</td>
        <td>
            <a href="#" class="btn btn-primary">View</a>
            <a href="#" class="btn btn-warning">Edit</a>
            <form action="#" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

<a href="#" class="btn btn-success">Create Contact</a>
@endsection
