@extends('layouts.dashboard')

@section('content')

<h2>This is Post Views</h2>


<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
       Posts List</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Created</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Created By</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>id</th>
                    <th>Created</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Created By</th>
                </tr>
                </tfoot>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>                    
                        <td>{{$post->id}}</td>
                        <td>{{$post->created_at}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->content}}</td>
                        <td>{{$post->image_url}}</td>
                        <td>{{$post->userId}}</td>
                    </tr>                    
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
</div>

@endsection