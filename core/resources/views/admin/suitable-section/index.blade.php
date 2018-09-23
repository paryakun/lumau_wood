@extends('admin.master') @section('title') Update suitable section  @endsection @section('css')
<style>
    .file {
        visibility: hidden;
        position: absolute;
    }
</style>
@endsection @section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title uppercase bold"> Update suitable section Info

        </h3>
        <hr>
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-plus"></i> Update suitable section Info
                    </div>
                    <div class="panel-body">
                        <form action="{{route('admin.suitable-section.update')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field()}}
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="suitable_title">
                                        <strong style="text-transform:uppercase"> title </strong>
                                    </label>
                                    <input type="text" class="form-control" id="suitable_title" value="{{$suitableInfo->suitable_title}}" name="suitable_title">
                                </div>
                            </div>
                         
                            <div class="col-md-12">
                                <div class="form-group table-responsive">
                                    <label>
                                        <strong style="text-transform:uppercase"> description</strong>
                                    </label>
                                    <textarea name="suitable_description" class="form-control " rows="10" id="area2" style="width: 100%;">{{$suitableInfo->suitable_description}}</textarea>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-sm-12">
                                            <label>
                                                    <strong style="text-transform:uppercase">Current Background Image</strong>
                                                </label>
                                                <div class="form-group">
                                                    <img src="{{asset('assets/frontend/img/suitable-section-bg-img.png')}}"  style="height: 120px;" class="img-thumnail">
                                                </div>
                                    </div>
                                    <div class="col-sm-12">
                                            <div class="form-group">
                                                    <input type="file" name="suitable_section_bg_img" accept="image/*" class="file">
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
                                                    @if($errors->has('suitable_section_bg_img'))
                                                    <span style="color: red">
                                                        <strong>{{$errors->first('suitable_section_bg_img')}}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="col-sm-12">
                                            <label>
                                                    <strong style="text-transform:uppercase">Current Side Image</strong>
                                                </label>
                                                <div class="form-group">
                                                    <img src="{{asset('assets/frontend/img/suitable-section-img.png')}}"  style="height: 120px;" class="img-thumnail">
                                                </div>
                                    </div>
                                    <div class="col-sm-12">
                                            <div class="form-group">
                                           
                                                    <input type="file" name="suitable_section_img" accept="image/*" class="file">
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
                                                    @if($errors->has('suitable_section_img'))
                                                    <span style="color: red">
                                                        <strong>{{$errors->first('suitable_section_img')}}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="col-sm-12">
                                       <h2> 
                                           <strong>
                                                Download Button
                                           </strong>
                                       </h2>
                                    </div>
                                    <div class="col-sm-12">
                                            <div class="form-group">
                                                    <label for="suitable_link">
                                                            <strong style="text-transform:uppercase">  Link </strong>
                                                        </label>
                                                    <input type="url" class="form-control" id="suitable_link" value="{{$suitableInfo->suitable_link}}" name="suitable_link">
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