@extends('admin.master') 
@section('title')
 Update Video  
 @endsection 
 @section('css')
<link href="{{asset('assets/admin/css/bootstrap-toggle.min.css')}}" rel="stylesheet" type="text/css" />
<style>
    .file {
        visibility: hidden;
        position: absolute;
    }
</style>
@endsection @section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title uppercase bold"> Update Video Info

        </h3>
        <hr>
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-plus"></i> Update Video Info
                    </div>
                    <div class="panel-body">
                        <form action="{{route('admin.video.update')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field()}}
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="video_title">
                                        <strong style="text-transform:uppercase"> title </strong>
                                    </label>
                                    <input type="text" class="form-control" id="video_title" value="{{$video->video_title}}" name="video_title">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="video_link">
                                        <strong style="text-transform:uppercase"> link </strong>
                                    </label>
                                    <input type="url" class="form-control" id="video_link" value="{{$video->video_link}}" name="video_link">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="video_link">
                                                <strong style="text-transform:uppercase"> Current Background Image </strong>
                                            </label>
                                            <img src="{{asset('assets/frontend/img/video-section-bg-img.png')}}" class="img-responsive" style="height: 120px;" alt="Video Section Bg Image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                            <label for="video_link">
                                                    <strong style="text-transform:uppercase"> Change Image </strong>
                                                </label>
                                        <div class="form-group">
                                            <input type="file" name="video_section_bg_img" accept="image/*" class="file">
                                            <div class="input-group col-xs-12">
                                              <span class="input-group-addon"><i class="fa fa-image"></i></span>
                                              <input type="text" class="form-control " disabled placeholder="Change  Image">
                                              <span class="input-group-btn">
                                                <button class="browse btn btn-primary " type="button"><i class="fa fa-image"></i> Browse</button>
                                              </span>
                                            </div>
                                            @if($errors->has('video_section_bg_img'))
                                                    <span style="color: red">
                                                        <strong>{{$errors->first('video_section_bg_img')}}</strong>
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