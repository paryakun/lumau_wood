
@extends('admin.master') @section('title') Updatae Member Info  @endsection @section('css')

<style>
    .file {
        visibility: hidden;
        position: absolute;
    }
</style>
@endsection @section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title uppercase bold">Updatae Member Info 

        </h3>
        <hr>
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-plus"></i>Updatae Member Info 
                    </div>
                    <div class="panel-body">
                        <form action="{{route('admin.member.update')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field()}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        <strong style="text-transform:uppercase"> name </strong>
                                    </label>
                                    <input type="text" class="form-control" id="name"  name="name" value="{{$member->name}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="position">
                                        <strong style="text-transform:uppercase"> position </strong>
                                    </label>
                                    <input type="text" class="form-control" id="position"  name="position" value="{{$member->position}}">
                                    <input type="hidden" name="id" value="{{$member->id}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="link">
                                        <strong style="text-transform:uppercase"> Current Image</strong>
                                    </label>
                                    <img src="{{asset($member->image)}}" class="img-thumbnail" style="height: 120px;">
                                </div>
                            </div>
                                <div class="col-md-6" style="align-items: center;
                                justify-content: center;">
                                    <div class="form-group">
                                        <label>
                                            <strong style="text-transform:uppercase">Change Image</strong>
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
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lnk_one">
                                                    <strong style="text-transform:uppercase"> facebook link </strong>
                                                </label>
                                                <input type="url" class="form-control" id="lnk_one"  name="lnk_one" value="{{$member->lnk_one}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lnk_two">
                                                    <strong style="text-transform:uppercase"> twitter link </strong>
                                                </label>
                                                <input type="url" class="form-control" id="lnk_two"  name="lnk_two" value="{{$member->lnk_two}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lnk_three">
                                                    <strong style="text-transform:uppercase"> linkedin link </strong>
                                                </label>
                                                <input type="url" class="form-control" id="lnk_three"  name="lnk_three" value="{{$member->lnk_three}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lnk_four">
                                                    <strong style="text-transform:uppercase"> Instagram link </strong>
                                                </label>
                                                <input type="url" class="form-control" id="lnk_four"  name="lnk_four" value="{{$member->lnk_four}}">
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
