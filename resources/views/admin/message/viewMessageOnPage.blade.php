@extends('admin.master')

@section('content')
    <h4 class="header-title mb-4">{{ $message->first_name.' '.$message->last_name }}</h4>
    <p>{{ $message->message }}</p>
    <a class="btn btn-primary" href="{{ route('allMessage') }}">All message</a> 
    <a class="btn btn-success" href="{{ route('markUnread', $message->id) }}">Mark as unread</a> 
    <a class="btn btn-danger" href="{{ route('messageDelete', $message->id) }}">Delete this message</a> 
@endsection