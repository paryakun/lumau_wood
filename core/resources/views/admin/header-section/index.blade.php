@extends('admin.master') @section('title') Header Section @endsection @section('css')
<style>
        .file {
      visibility: hidden;
      position: absolute;
    }
    </style>
@endsection @section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title uppercase bold"> Header Section Info
        </h3>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-plus"></i> Update Header Section Info
                    </div>
                    <div class="panel-body">
                        <form action="{{route('admin.header.update')}}" enctype="multipart/form-data" method="post">
                            {{ csrf_field()}}
                            <div class="col-md-12">

                                <div class="form-group">
                                    <label>
                                        <strong style="text-transform:uppercase"> Title </strong>
                                    </label>
                                    <input type="text" class="form-control"  name="header_title" value="{{$header->header_title}}" >
                                </div>
                            </div>
                            <div class="col-md-12 ">

                                <div class="form-group">
                                    <label>
                                        <strong style="text-transform:uppercase"> Short Text  </strong>
                                    </label>
                                    <textarea  class="form-control" name="header_text" id="area2" rows="10" >{{$header->header_text}}</textarea>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="col-sm-12">
                                            <div class="form-group">
                                                    <label>
                                                        <strong style="text-transform:uppercase">Current Background Image </strong>
                                                    </label>
                                                        <img src="{{asset('assets/frontend/img/background-image.png')}}" style=" height: 150px;" class="img-thumbnail img-fluid" >
                                                </div>
                                    </div>
                                    <div class="col-sm-12">
                                            <div class="form-group">
                                                   
                                                    <input type="file" name="background_image" accept="image/*" class="file">
                                                    <div class="input-group col-xs-12">
                                                      <span class="input-group-addon"><i class="fa fa-image"></i></span>
                                                      <input type="text" class="form-control " disabled placeholder="Change Image">
                                                      <span class="input-group-btn">
                                                        <button class="browse btn btn-primary " type="button"><i class="fa fa-image"></i> Browse</button>
                                                      </span>
                                                    </div>
                                                    @if($errors->has('background_image'))
                                                    <span style="color: red">
                                                        <strong>{{$errors->first('background_image')}}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="col-sm-12">
                                            <div class="form-group">
                                                    <label>
                                                        <strong style="text-transform:uppercase">Current Advertise Image </strong>
                                                    </label>
                                                        <img src="{{asset('assets/frontend/img/advertise-image.png')}}" style=" height: 150px;" class="img-thumbnail">
                                                </div>
                                    </div>
                                    <div class="col-sm-12">
                                            <div class="form-group">
                                                    <input type="file" name="advertise_image" accept="image/*" class="file">
                                                    <div class="input-group col-xs-12">
                                                      <span class="input-group-addon"><i class="fa fa-image"></i></span>
                                                      <input type="text" class="form-control " disabled placeholder="Change Image">
                                                      <span class="input-group-btn">
                                                        <button class="browse btn btn-primary " type="button"><i class="fa fa-image"></i> Browse</button>
                                                      </span>
                                                    </div>
                                                    @if($errors->has('advertise_image'))
                                                    <span style="color: red">
                                                        <strong>{{$errors->first('advertise_image')}}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="col-sm-12">
                                            <div class="form-group">
                                                    <label>
                                                        <strong style="text-transform:uppercase">Current App link  Image </strong><span style="color:red"><em>(One)</em></span>
                                                    </label>
                                                        <img src="{{asset('assets/frontend/img/link-one-image.png')}}" style=" height: 150px;" class="img-thumbnail">
                                                </div>
                                    </div>
                                    <div class="col-sm-12">
                                            <div class="form-group">
                                                   
                                                    <input type="file" name="link_one_image" accept="image/*" class="file">
                                                    <div class="input-group col-xs-12">
                                                      <span class="input-group-addon"><i class="fa fa-image"></i></span>
                                                      <input type="text" class="form-control " disabled placeholder="Change Image">
                                                      <span class="input-group-btn">
                                                        <button class="browse btn btn-primary " type="button"><i class="fa fa-image"></i> Browse</button>
                                                      </span>
                                                    </div>
                                                    @if($errors->has('link_one_image'))
                                                    <span style="color: red">
                                                        <strong>{{$errors->first('link_one_image')}}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                    </div>
                                   
                                </div>


                                <div class="col-md-3">
                                    <div class="col-sm-12">
                                            <div class="form-group">
                                                    <label>
                                                        <strong style="text-transform:uppercase">Current App link  Image </strong><span style="color:red"><em>(Two)</em></span>
                                                    </label>
                                                        <img src="{{asset('assets/frontend/img/link-two-image.png')}}" style=" height: 150px;" class="img-thumbnail">
                                                </div>
                                    </div>
                                    <div class="col-sm-12">
                                            <div class="form-group">
                                                    <input type="file" name="link_two_image" accept="image/*" class="file">
                                                    <div class="input-group col-xs-12">
                                                      <span class="input-group-addon"><i class="fa fa-image"></i></span>
                                                      <input type="text" class="form-control " disabled placeholder="Change Image">
                                                      <span class="input-group-btn">
                                                        <button class="browse btn btn-primary " type="button"><i class="fa fa-image"></i> Browse</button>
                                                      </span>
                                                    </div>
                                                    @if($errors->has('link_two_image'))
                                                    <span style="color: red">
                                                        <strong>{{$errors->first('link_two_image')}}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                    </div>
                                   
                                </div> 
                                
                            </div>
                           <div class="row">
                                <div class="col-md-12">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>
                                                    <strong style="text-transform:uppercase">Image  link</strong> <span style="color:red"><em>(One)</em></span>
                                                </label>
                                                    <input type="url"  name="link_one"  value="{{$header->link_one}}" class="form-control">
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                        <label>
                                                        <strong style="text-transform:uppercase">Image  link</strong>  <span style="color:red"><em>(Two)</em></span>
                                                    </label>
                                                        <input type="url"  name="link_two"  value="{{$header->link_two}}" class="form-control">
                                                    </div>
                                        </div>
                                </div>
                           </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn blue btn-block ">UPDATE </button>
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
 @section('js')
<script src="{{asset('assets/admin/js/bootstrap-toggle.min.js')}}"></script>
<script src="{{asset('assets/admin/js/nicEdit.js')}}" ></script>
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