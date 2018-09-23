@extends('admin.master') @section('title') Update Footer Info  @endsection @section('css')

<style>
    .file {
        visibility: hidden;
        position: absolute;
    }
</style>
@endsection @section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title uppercase bold"> Update Footer Background Image

        </h3>
        <hr>
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-plus"></i> Update Footer Background Image 
                    </div>
                    <div class="panel-body">
                        <form action="{{route('admin.footer-image.update')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field()}}
                            <div class="col-md-6" >
                                    <label>
                                        <strong style="text-transform:uppercase">Current Footer Background Image</strong>
                                    </label>
                                    <div class="form-group">
                                        <img src="{{asset('assets/frontend/img/footer-image.png')}}" style="height: 120px;" class="img-thumbnail">
                                    </div>
                                </div>
                                <div class="col-md-6" style="align-items: center;
                                justify-content: center;">
                                    <div class="form-group">
                                        <label>
                                            <strong style="text-transform:uppercase">Change Image</strong>
                                        </label>
                                        <input type="file" name="footer_image" accept="image/*" class="file">
                                        <div class="input-group col-xs-12">
                                            <span class="input-group-addon">
                                                <i class="fa fa-image"></i>
                                            </span>
                                            <input type="text" class="form-control " disabled placeholder="Change Image">
                                            <span class="input-group-btn">
                                                <button class="browse btn btn-primary " type="button">
                                                    <i class="fa fa-image"></i> Upload </button>
                                            </span>
                                        </div>
                                        @if($errors->has('footer_image'))
                                        <span style="color: red">
                                            <strong>{{$errors->first('footer_image')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                           
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">UPDATE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection @section('js')
<script src="{{asset('assets/admin/js/bootstrap-toggle.min.js')}}"></script>
<script src="{{asset('assets/admin/js/nicEdit.js')}}"></script>
<script>
    $(document).on('click', '.browse', function () {
        var file = $(this).parent().parent().parent().find('.file');
        file.trigger('click');
    });
    $(document).on('change', '.file', function () {
        $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
    });


</script>
@endsection