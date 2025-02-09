@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@endpush
@section('content')
<div class="container">
    <table id="usersTable" class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        $(function() {
            $('#usersTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('users.data') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });
        });
    });
</script>
@endsection