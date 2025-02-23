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
    @foreach ($allContacts as $key => $contact)
<!--    {{$contact}}-->
    <tr>
        <td>{{ $contact->id }}</td>
        <td>{{ $contact->name }}</td>
        <td>{{ $contact->email }}</td>
        <td>{{$contact->address}}</td>
        <td>{{ $contact->message }}</td>
        <td>
            <a href="{{route('contact.show',$contact)}}" class="btn btn-primary">View</a>
            <a href="{{route('contact.edit',$contact)}}" class="btn btn-warning">Edit</a>
            <form action="{{route('contact.destroy',$contact)}}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

<a href="{{route('contact.create')}}" class="btn btn-success">Create Contact</a>
@endsection
