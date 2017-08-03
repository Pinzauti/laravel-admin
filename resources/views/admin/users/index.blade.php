@extends('admin.layouts.app')

@section('title', 'Users')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title">View Users</h2>
                </header>
                <div class="panel-body">
                    <table id="users-table" class="table table-bordered table-striped mb-none">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Signup Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </section>
        </div>
    </div>

@endsection


@section('scripts')
    <script type="text/javascript">


        (function($) {

            'use strict';

            var datatableInit = function() {

                var usersTable = $('#users-table').dataTable({
                    processing: true,
                    serverSide: true,

                    ajax: '{!! route('admin.user.data') !!}',
                    columns: [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'name' },
                        { data: 'email', name: 'email' },
                        { data: 'gender', name: 'gender' },
                        { data: 'created_at', name: 'created_at' },
                        { data: 'action', name: 'action', orderable: false, searchable: false }
                    ]
                });

            };

            $(function() {
                datatableInit();
            });

            $(window).bind('resize', function () {
                usersTable.fnAdjustColumnSizing();
            } );

        }).apply(this, [jQuery]);

    </script>
@endsection