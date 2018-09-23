@extends('admin.master') @section('title') Update Subscriber Header Info @endsection @section('css')

@endsection @section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title uppercase bold"> Update Subscriber Header Info

        </h3>
        <hr>
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-plus"></i> Update Subscriber Header Info
                    </div>
                    <div class="panel-body">
                        <form action="{{route('admin.subscriber-header.update')}}" method="post" >
                            {{ csrf_field()}}
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="subscriber_title">
                                        <strong style="text-transform:uppercase"> title </strong>
                                    </label>
                                    <input type="text" class="form-control" id="subscriber_title" value="{{$subscriberHeader->subscriber_title}}" name="subscriber_title">
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