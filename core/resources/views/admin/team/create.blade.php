
@extends('admin.master') @section('title') Add Team Member Info  @endsection @section('css')

<style>
    .file {
        visibility: hidden;
        position: absolute;
    }
</style>
@endsection @section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title uppercase bold">Add Team Member Info 

        </h3>
        <hr>
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-plus"></i>Add Team Member Info 
                    </div>
                    <div class="panel-body">
                        <form action="{{route('admin.member.store')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field()}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        <strong style="text-transform:uppercase"> name </strong>
                                    </label>
                                    <input type="text" class="form-control" id="name"  name="name">
                                    @if($errors->has('name'))
                                    <span style="color: red">
                                        <strong>{{$errors->first('name')}}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="position">
                                        <strong style="text-transform:uppercase"> position </strong>
                                    </label>
                                    <input type="text" class="form-control" id="position"  name="position">
                                    @if($errors->has('position'))
                                    <span style="color: red">
                                        <strong>{{$errors->first('position')}}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                                <div class="col-md-12" style="align-items: center;
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lnk_one">
                                            <strong style="text-transform:uppercase"> facebook link </strong>
                                        </label>
                                        <input type="url" class="form-control" id="lnk_one"  name="lnk_one">
                                        @if($errors->has('lnk_one'))
                                        <span style="color: red">
                                            <strong>{{$errors->first('lnk_one')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lnk_two">
                                            <strong style="text-transform:uppercase"> twitter link </strong>
                                        </label>
                                        <input type="url" class="form-control" id="lnk_two"  name="lnk_two">
                                        @if($errors->has('lnk_two'))
                                        <span style="color: red">
                                            <strong>{{$errors->first('lnk_two')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lnk_three">
                                            <strong style="text-transform:uppercase"> linkedin link </strong>
                                        </label>
                                        <input type="url" class="form-control" id="lnk_three"  name="lnk_three">
                                        @if($errors->has('lnk_three'))
                                        <span style="color: red">
                                            <strong>{{$errors->first('lnk_three')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lnk_four">
                                            <strong style="text-transform:uppercase"> Instagram link </strong>
                                        </label>
                                        <input type="url" class="form-control" id="lnk_four"  name="lnk_four">
                                        @if($errors->has('lnk_four'))
                                        <span style="color: red">
                                            <strong>{{$errors->first('lnk_four')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                           
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">CREATE</button>
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
