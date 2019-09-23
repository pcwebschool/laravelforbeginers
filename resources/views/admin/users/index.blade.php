@extends('layouts.dashboard')

@section('content')

<h2>This is user Views</h2>


<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
       users List</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Dtae Created</th>
                    <th>Date Updated</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Dtae Created</th>
                    <th>Date Updated</th>
                </tr>
                </tfoot>
                <tbody>
                    @foreach ($users as $user)
                    <tr>                    
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->create_at}}</td>
                        <td>{{$user->updated_at}}</td>
                    </tr>                    
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
</div>

@endsection