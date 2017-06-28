@extends('backLayout.app')
@section('title')
Post
@stop

@section('content')

    <h1>Posts <a href="{{ url('admin/posts/create') }}" class="btn btn-primary pull-right btn-lg">Add New Post</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbladmin/posts">
            <thead>
                <tr>
                    <th>ID</th><th>Title</th><th>Body</th><th>Photo</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($posts as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/posts', $item->id) }}">{{ $item->title }}</a></td><td>{{ $item->body }}</td><td><img height="50" src="{{$item->photo ? $item->photo->file : 'http://placehold.it/400x400' }} " alt=""></td>
                    <td>
                        <a href="{{ url('admin/posts/' . $item->id . '/edit') }}" class="btn btn-primary btn-lg">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/posts', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-lg']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#tbladmin/posts').DataTable({
            columnDefs: [{
                targets: [0],
                visible: false,
                searchable: false
                },
            ],
            order: [[0, "asc"]],
        });
    });
</script>
@endsection