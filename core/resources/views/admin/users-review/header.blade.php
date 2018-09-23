@extends('admin.master') @section('title') Update User Review Header  @endsection @section('css')

@endsection @section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title uppercase bold"> Update User Review Header Info

        </h3>
        <hr>
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-plus"></i> Update User Review Header Info
                    </div>
                    <div class="panel-body">
                        <form action="{{route('admin.user-review-header.update')}}" method="post" >
                            {{ csrf_field()}}
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="user_review_title">
                                        <strong style="text-transform:uppercase"> title </strong>
                                    </label>
                                    <input type="text" class="form-control" id="user_review_title" value="{{$userRvHeader->user_review_title}}" name="user_review_title">
                                </div>
                                <div class="form-group">
                                    <label for="user_review_star">
                                        <strong style="text-transform:uppercase"> Number Of Stars </strong>
                                    </label>
                                    <input type="number" max="5" class="form-control" id="user_review_star" value="{{$userRvHeader->user_review_star}}" name="user_review_star">
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