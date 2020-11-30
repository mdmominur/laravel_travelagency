@extends('admin.master')

@section('content')
@if (session('msg'))
    
<p class="text-success">
    {{ session('msg') }}
</p>
@endif

    <h4 class="header-title mb-4">Send Message to all subscriber</h4>
    <form action="{{ route('sendNewsLetter') }}">
        <textarea class="form-control" name="message" id="" cols="30" rows="10" placeholder="Enter your message"></textarea>
        <br>
        <button type="submit" class=" btn btn-primary">Send</button>
    </form>
<br>
<br>
<br>
    <h4 class="header-title mb-4">All subscriber</h4>

    @if (session('deleteMsg'))
        
    <p class="text-danger">
        {{ session('deleteMsg') }}
    </p>
    @endif
    <table class="table table-light table-bordered">
        <tbody style="text-align: center ;aligh-item:center">
            <tr style="font-weight: bold">
                <td>Sl.</td>
                <td>Email</td>
                <td colspan="10">Actions</td>
            </tr>
          @forelse ($subscriber as $key => $item)
                <tr>
                    <td>{{ $subscriber->firstItem()+$key }}</td>
                    <td>{{ $item->email ?? "User not available" }}</td>
                    <td><a href="{{ route('subscriberDelete', $item->id) }}" class="btn btn-danger">Delete</a></td>
                </tr>
                @empty
                    <td colspan="50">No Data available</td>
                
            @endforelse 
        </tbody>
    </table>
    {{ $subscriber->links() }}

@endsection




