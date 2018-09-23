<div id="editQlyFrm" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-plus"></i> Update App Quality Info
                        </div>
                        <form id="editQlyFrmData"  >
                        <div class="panel-body">
                                {{ csrf_field()}}
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title">
                                            <strong style="text-transform:uppercase"> title </strong>
                                        </label>
                                        <input type="text" class="form-control" id="title" value="{{$productQuality->title}}" name="title">
                                        <input type="hidden" value="{{$productQuality->id}}" name="id">
                                        <span class="text-danger">
                                            <strong>
                                                <div id="titleErr">

                                                </div>
                                            </strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group table-responsive">
                                        <label>
                                            <strong style="text-transform:uppercase"> Icon</strong>
                                        </label>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon">fa</span>
                                                <input id="social_icon" autocomplete="off" type="text" class="form-control socioicon" value="{{$productQuality->icon}}" name="icon">
                                            </div>
                                        </div>
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