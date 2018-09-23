@extends('admin.master') @section('title') Logo & Icon @endsection 
@section('css')
<style>
        .file {
      visibility: hidden;
      position: absolute;
    }
    </style>
@endsection
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title uppercase bold"> Logo & Icon </h3>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-file-image-o"></i> Upadte Logo & Icon
                    </div>
                    <div class="panel-body">
                        <form action="{{route('admin.logo-icon.update')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field()}}

                            <div class="form-group ">
                                    <input type="file" name="logo" accept="image/*" class="file">
                                    <div class="input-group col-xs-12">
                                      <span class="input-group-addon"><i class="fa fa-image"></i></span>
                                      <input type="text" class="form-control " disabled placeholder="Change  Logo">
                                      <span class="input-group-btn">
                                        <button class="browse btn btn-primary " type="button"><i class="fa fa-image"></i> Browse</button>
                                      </span>
                                    </div>
                                    @if($errors->has('logo'))
                                    <span style="color: red">
                                        <strong>{{$errors->first('logo')}}</strong>
                                    </span>
                                    @endif
                            </div>
                            <div class="form-group">
                                    <input type="file" name="icon" accept="image/*" class="file">
                                    <div class="input-group col-xs-12">
                                      <span class="input-group-addon"><i class="fa fa-image"></i></span>
                                      <input type="text" class="form-control " disabled placeholder="Change  Icon">
                                      <span class="input-group-btn">
                                        <button class="browse btn btn-primary " type="button"><i class="fa fa-image"></i> Browse</button>
                                      </span>
                                    </div>
                                    @if($errors->has('icon'))
                                    <span style="color: red">
                                        <strong>{{$errors->first('icon')}}</strong>
                                    </span>
                                    @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn blue btn-block ">UPDATE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-file-image-o"></i> Logo 
                    </div>
                    <div class="panel-body" >
                        <div class="row text-center">
                            <div class="col-md-12" style="background-color:#{{$data->base_color}}">
                                <div class="text-center">
                                        <img src="{{asset('assets/frontend/img/logo.png')}}" class="img-responsive" alt="logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-file-image-o"></i>  Icon
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 text-center" style="background-color:#{{$data->base_color}}">
                                <img src="{{asset('assets/frontend/img/icon.png')}}" class="img-responsive" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection @section('js')
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