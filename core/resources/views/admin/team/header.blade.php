@extends('admin.master') @section('title') Update Team Header Section  @endsection @section('css')

</style>
@endsection @section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title uppercase bold"> Update Team Header Section Info

        </h3>
        <hr>
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-plus"></i> Update Team Header Section Info
                    </div>
                    <div class="panel-body">
                        <form action="{{route('admin.team-header.update')}}" method="post" >
                            {{ csrf_field()}}
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="team_title">
                                        <strong style="text-transform:uppercase"> title </strong>
                                    </label>
                                    <input type="text" class="form-control" id="team_title" value="{{$teamHeader->team_title}}" name="team_title">
                                </div>
                            </div>
                         
                            <div class="col-md-12">
                                <div class="form-group table-responsive">
                                    <label>
                                        <strong style="text-transform:uppercase"> description</strong>
                                    </label>
                                    <textarea name="team_description" class="form-control " rows="10" id="area2" style="width: 100%;">{{$teamHeader->team_description}}</textarea>
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
<script src="{{asset('assets/admin/js/nicEdit.js')}}"></script>
<script>
  bkLib.onDomLoaded(function () {
        new nicEditor({
            iconsPath: '{{asset("assets/admin/img/nicEditorIcons.gif")}}'
        }).panelInstance('area2');
    });
   
</script>
@endsection