@extends('admin.master') @section('title') Update Contact Info  @endsection @section('css')

@endsection @section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title uppercase bold"> Update Contact Info

        </h3>
        <hr>
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-plus"></i> Update Contact Info
                    </div>
                    <div class="panel-body">
                        <form action="{{route('admin.contact.update')}}" method="post" >
                            {{ csrf_field()}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">
                                                <strong style="text-transform:uppercase"> Email </strong>
                                            </label>
                                            <input type="email" class="form-control" id="email" value="{{$contact->email}}" name="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="phone">
                                                <strong style="text-transform:uppercase"> Phone </strong>
                                            </label>
                                            <input type="text" class="form-control" id="phone" value="{{$contact->phone}}" name="phone">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group table-responsive">
                                    <label>
                                        <strong style="text-transform:uppercase"> Address</strong>
                                    </label>
                                    <textarea name="address" class="form-control " rows="10" id="area2" style="width: 100%;">{{$contact->address}}</textarea>
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