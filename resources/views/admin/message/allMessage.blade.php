@extends('admin.master')

@section('content')
    <h4>All messages</h4>
    <p style="font-weight:bold; color:">Unread messages ({{ $count }})</p>
    @if (session('msg'))
        <p style="font-weight: bold; color:red">{{ session('msg') }}</p>
    @endif
    <table class="table table-light table-bordered">
        <tbody style="text-align: center ;aligh-item:center">
            <tr style="font-weight: bold">
                <td>Sl.</td>
                <td>Name</td>
                <td>Email</td>
                <td>Message</td>
                <td>Time</td>
                <td colspan="10">Actions</td>
            </tr>
          @forelse ($message as $key => $item)
                <tr @if($item->status == 0 ) style="background:#cbcfd2" @endif>
                    <td>{{ $message->firstItem()+$key }}</td>
                    <td>{{ $item->first_name.' '.$item->last_name ?? "User not available" }}</td>
                    <td style="max-width: 300px">{{ $item->email ?? "User not available" }}</td>
                    <td style="max-width: 300px">{{ $item->message ?? "User not available" }}</td>
                    <td>{{ $item->created_at }}</td>
                    @if ($count > 0)    
                    <td>
                        @if ($item->status != 0)
                        <a href="{{ route('markUnread', $item->id) }}" class="btn btn-success">Mark as unread</a>
                        @endif
                    </td>
                    @endif
                    <td><a href="{{ route('viewMessageOnPage', $item->id) }}" class="btn btn-primary">View</a></td>
                    <td><a href="{{ route('messageDelete', $item->id) }}" class="btn btn-danger">Delete</a></td>
                </tr>
                @empty
                    <td colspan="50">No message available</td>
                
            @endforelse 
        </tbody>
    </table>
    {{ $message->links() }}

@endsection