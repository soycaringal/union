@extends('layouts.app')

@section('content')

    <div class="image-container">
        <div class="row">
            @foreach ($files as $file)
                <div class="col-lg-3 col-sm-4 col-xs-6"><span>{{$file->profile->    first_name}}</span><a  href="javascript:void(0)"><img class="thumbnail img-responsive" src="/images/{{$file->filename}}"></a></div>
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