<div id="editAcmtFrm" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-plus"></i> Update Achievement Info
                    </div>
                    <form id="editAcmtFrmData">
                        <div class="panel-body">
                            {{ csrf_field()}}
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">
                                        <strong style="text-transform:uppercase"> title </strong>
                                    </label>
                                    <input type="text" class="form-control" id="title" value="{{$achievement->title}}" name="title">
                                    <input type="hidden" value="{{$achievement->id}}" name="id">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="icon">
                                        <strong style="text-transform:uppercase"> icon </strong>
                                    </label>


                                    <div class="input-group">
                                        <span class="input-group-addon">fa</span>
                                        <input id="social_icon" autocomplete="off" type="text" class="form-control socioicon" value="{{$achievement->icon}}" name="icon">
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="total">
                                        <strong style="text-transform:uppercase"> total </strong>
                                    </label>
                                    <input type="number" class="form-control" id="total" value="{{$achievement->total}}" name="total">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">

                                </div>
                            </div>

                        </div>
                        <div class="panel-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary pull-right">UPDATE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>