
@extends('admin.master') @section('title') Updatae App Info  @endsection @section('css')

<style>
    .file {
        visibility: hidden;
        position: absolute;
    }
</style>
@endsection @section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title uppercase bold">Updatae App Info 

        </h3>
        <hr>
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-plus"></i> Updatae App Info 
                    </div>
                    <form action="{{route('admin.app.update')}}" method="post" enctype="multipart/form-data">

                    <div class="panel-body">
                            {{ csrf_field()}}

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-sm-6 ">
                                            <div class="form-group ">
                                                <label for="link">
                                                    <strong style="text-transform:uppercase"> Current Image</strong>
                                                </label>
                                                <img src="{{asset($app->image)}}" class="img-thumbnail form-control" style="height: 120px;width: 80px;">
                                                <input type="hidden" name="id" value="{{($app->id)}}">
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                    <label for="link">
                                                            <strong style="text-transform:uppercase"> Change Image</strong>
                                                        </label>
                                                <input type="file" name="image" accept="image/*" class="file">
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
                                                @if($errors->has('image'))
                                                <span style="color: red">
                                                    <strong>{{$errors->first('image')}}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
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
<!-- <div class="col-md-6" >
    <label>
        <strong style="text-transform:uppercase">Current Image</strong>
    </label>
    <div class="form-group">
        <img src="{{asset('assets/frontend/img/feature-image.png')}}" style="height: 120px;width:100%;padding:5px; border: 1px solid #286090">
    </div>
</div>
<div class="col-md-6" style="align-items: center;
justify-content: center;">
    <div class="form-group">
        <label>
            <strong style="text-transform:uppercase">Change Image</strong>
        </label>
        <input type="file" name="feature_image" accept="image/*" class="file">
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
    </div>
</div> -->