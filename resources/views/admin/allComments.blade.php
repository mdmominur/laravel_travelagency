@php
    use App\blog;
@endphp
@extends('admin.master')

@section('content')
    <h4>All Comments</h4>
    <table class="table table-light table-bordered">
        <tbody style="text-align: center ;aligh-item:center">
            <tr style="font-weight: bold">
                <td>Sl.</td>
                <td>Name</td>
                <td>Blog Title</td>
                <td>Comment</td>
                <td colspan="10">Actions</td>
            </tr>
          @forelse ($comments as $key => $item)
                <tr @if($item->status == 0 ) style="background:#cbcfd2" @endif>
                    <td>{{ $comments->firstItem()+$key }}</td>
                    <td>{{ $item->name ?? "User not available" }}</td>
                    <td>
                        @php
                            
                            echo blog::where('slug', $item->blogSlug )->first()->title;
                        @endphp
                    </td>
                    <td style="max-width: 300px">{{ $item->message ?? "User not available" }}</td>
                    <td><a href="{{ route('viewCommentOnPage', $item->id) }}" class="btn btn-success">View</a></td>
                </tr>
                @empty
                    <td colspan="50">No Comment available</td>
                
            @endforelse 
        </tbody>
    </table>
    {{ $comments->links() }}

@endsection