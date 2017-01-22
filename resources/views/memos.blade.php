@extends('layouts.app')

@section('content')

    {!! Form::open([
        'action' => 'ProfilesController@createMemo',
        'method' => 'post',
        'class' => 'form-horizontal',
        'files' => true]) !!}

    <div class="form-group">
        {!! Form::label('title', 'Memo', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-9">
            {!! Form::file('files[]',['class' => 'form-control', 'multiple' => true]) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-9 pull-right">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
    {{ csrf_field() }}
    {!! Form::close() !!}
    <div class="image-container">
        <div class="row">
            @foreach ($files as $file)
                <div class="col-lg-3 col-sm-4 col-xs-6"><a  href="javascript:void(0)"><img class="thumbnail img-responsive" src="/images/{{$file->filename}}"></a></div>
            @endforeach
        </div>
    </div>

    <div tabindex="-1" class="modal fade in" id="myModal" role="dialog" style=";" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body"><a href="#"><img class="thumbnail img-responsive" src=""></a></div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            $('.thumbnail').click(function(){
                $('.modal-body').empty();
                var title = $(this).parent('a').attr("title");
                $('.modal-title').html(title);
                $($(this).parents('div').html()).appendTo('.modal-body');
                $('#myModal').modal({show:true});
            });
        });
    </script>
@endsection
@yield('footer')