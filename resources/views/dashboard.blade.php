{{-- resources/views/admin/dashboard.blade.php --}}

@push('css')

@push('js')

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Blog List
                        <a onclick="addForm()" class="btn btn-primary pull-right" style="margin-top:-8px;">Add Blog</a>
                    </h4>
                </div>
                <div class="panel-body">
                    <table id="blogtable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>title</th>
                                <th>description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('form')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script type="text/javascript"> 
       var table = $('#blogtable').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax: '{{ route('api.blog') }}',
                        columns: [
                            {data: 'title', name: 'title'},
                            {data: 'description', name: 'description'},
                            {data: 'action', name: 'action', orderable: false, searchable: false}
                        ]
                    });

        function addForm(){
            save_method="add";
            $('input[name=_method]').val('POST');
            $('#modal-form').modal('show');
            $('#modal-form form')[0].reset();
            $('.modal-title').text('Add Blog');
        }

        function editForm(id){
            save_method='edit';
            $('input[name=_method]').val('PATCH');
            $('#modal-form form')[0].reset();
            $.ajax({
                url: "{{ url('blog/awal') }}" + '/' + id + "/edit",
                type: "GET",
                dataType: "JSON",
                success: function(data){
                    $('#modal-form').modal('show');
                    $('.modal-title').text('Edit Blog');

                    $('#id').val(data.id);
                    $('#title').val(data.title);
                    $('#description').val(data.description);
                },
                error: function(){
                    alert('Nothing Data');
                }
            });
        }
    </script>
@stop