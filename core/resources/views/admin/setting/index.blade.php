@extends('admin.master') @section('title') Update General Setting  @endsection @section('css')
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
        <h3 class="page-title uppercase bold"> Update General Setting Info

        </h3>
        <hr>
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-plus"></i> Update General Setting Info
                    </div>
                    <div class="panel-body">
                        <form action="{{route('admin.general-setting.update')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field()}}
                            <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="website_name">
                                                <strong style="text-transform:uppercase"> Title </strong>
                                            </label>
                                            <input type="text" class="form-control input-lg" id="website_name" value="{{$settings->website_name}}" name="website_name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="website_title">
                                                <strong style="text-transform:uppercase"> Subtitle </strong>
                                            </label>
                                            <input type="text" class="form-control  input-lg" id="website_title" value="{{$settings->website_title}}" name="website_title">
                                        </div>
                                    </div>
                            </div>
                           <div class="row">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="menu_download_link">
                                            <strong style="text-transform:uppercase"> Menu Bar Download Link </strong>
                                        </label>
                                        <input type="url" class="form-control" id="menu_download_link" value="{{$settings->menu_download_link}}" name="menu_download_link">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="base_color">
                                            <strong style="text-transform:uppercase"> Website Gradiant  Color 1 </strong>
                                        </label>
                                        <input type="color" class="form-control" id="base_color" name="base_color"  style="background: #{{$settings->base_color}}"
                                        value="#{{$settings->base_color}}"  >
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="sub_color">
                                            <strong style="text-transform:uppercase">  Website Gradiant  Color 2 </strong>
                                        </label>
                                        <input type="color" class="form-control" id="sub_color" name="sub_color"style="background: #{{$settings->sub_color}}"
                                        value="#{{$settings->sub_color}}" >
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


@endsection 