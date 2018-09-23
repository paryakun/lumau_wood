@extends('admin.master') @section('title') Update Cpmpany  @endsection @section('css')
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
        <h3 class="page-title uppercase bold"> Update Cpmpany Info

        </h3>
        <hr>
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-plus"></i> Update Cpmpany Info
                    </div>
                    <div class="panel-body">
                        <form action="{{route('admin.about-company.update')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field()}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="company_title">
                                                <strong style="text-transform:uppercase"> Title </strong>
                                            </label>
                                            <input type="text" class="form-control" id="company_title" value="{{$company->company_title}}" name="company_title">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="company_short_title">
                                                <strong style="text-transform:uppercase">Short Title </strong>
                                            </label>
                                            <input type="text" class="form-control" id="company_short_title" value="{{$company->company_short_title}}" name="company_short_title">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group table-responsive">
                                    <label>
                                        <strong style="text-transform:uppercase"> description</strong>
                                    </label>
                                    <textarea name="company_description" class="form-control " rows="10" id="area2" style="width: 100%;">{{$company->company_description}}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                        <div class="col-md-4 col-sm-4">
                                                <label>
                                                    <strong style="text-transform:uppercase">Current Image</strong>
                                                </label>
                                                <div class="form-group">
                                                    <img src="{{asset('assets/frontend/img/about-section-image.png')}}"  style="height: 120px;" class="img-thumnail">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4" style="align-items: center;
                                            justify-content: center;">
                                                <div class="form-group">
                                                    <label>
                                                        <strong style="text-transform:uppercase">Change Image</strong>
                                                    </label>
                                                    <input type="file" name="about_section_img" accept="image/*" class="file">
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
                                                    @if($errors->has('about_section_img'))
                                                    <span style="color: red">
                                                        <strong>{{$errors->first('about_section_img')}}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="company_btn_link">
                                                        <strong style="text-transform:uppercase"> Button Link </strong>
                                                    </label>
                                                    <input type="url" class="form-control" id="company_btn_link" value="{{$company->company_btn_link}}" name="company_btn_link">
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


    bkLib.onDomLoaded(function () {
        new nicEditor({
            iconsPath: '{{asset("assets/admin/img/nicEditorIcons.gif")}}'
        }).panelInstance('area2');
    });
</script>
@endsection