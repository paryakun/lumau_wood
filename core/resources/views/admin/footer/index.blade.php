@extends('admin.master') @section('title') Social Icon Info  @endsection 
@section('css')
<link href="{{asset('assets/admin/css/fontawesome-iconpicker.min.css')}}" rel="stylesheet" type="text/css" />

<style>
    .file {
        visibility: hidden;
        position: absolute;
    }
</style>

@endsection 
@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title uppercase bold"> Social Icon Info 

            <button id="addBtn" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add 
                New</button>
        </h3>
        <hr>
        <div class="row">


            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-list"></i> Social Icon Info 
                    </div>
                    <div class="panel-body ">
                            @if($footers->all())
                        <table class="table table-responsive table-striped table-bordered table-hover" >
                            <thead>
                                <tr>
                                    <th> Icon</th>
                                    <th> View</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($footers as $item)
                                <tr>
                                    <td>{{$item->icon}}</td>
                                    <td>
                                        <i class="fa {{$item->icon}}"></i>
                                    </td>
                                    <td>
                                        <a href="#" data-route="{{route('admin.icon.edit',$item->id)}}" class="btn btn-primary btnEdit">
                                                <i class="fa fa-edit"></i> EDIT
                                        </a>
                                        <a href="#" data-id="{{$item->id}}"  class="btn btn-danger btnDelete">
                                                <i class="fa fa-trash"></i> DELETE
                                        </a>
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                        @else
                       <div class="alert alert-danger text-center">
                        <h1>
                            <strong>No Record Found...</strong>
                        </h1>
                       </div>
                        @endif
                    </div>
                   <div class="text-center">
                       {{ $footers->links() }}
                   </div>
                    
                </div>
                
            </div>





        </div>

    </div>
</div>






<div id="deleteForm" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
            <div class="row">
                    <div class="col-md-12">
        
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <i class="fa fa-trash"></i> Delete Social Icon Info 
                            </div>
                            <form id="editSclFrmData" action="{{route('admin.icon.delete')}}" method="POST" >
                            <div class="panel-body text-center">
                                    {{ csrf_field()}}
                                    <input type="hidden" name="id" id="delId">
                                   <h3 style="color: red">Are You Sure to Delete This ?</h3>
                            </div>
                            <div class="panel-footer ">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary pull-right">DELETE</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>

    </div>
</div>





<div id="modals">

</div>

@endsection


@section('js')
<script src="{{asset('assets/admin/js/fontawesome-iconpicker.min.js')}}"></script>
<script>

    $(document).ready(function () {

        $.ajaxSetup({
           headers:{
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
        });

        $(document).on('focus', '.socioicon', function () {
            $('.socioicon').iconpicker();
        });

          // delete
       $(".btnDelete").on("click",function(e){
           e.preventDefault();
               $("#deleteForm").modal("show");
               var id = $(this).data('id');
               $("#delId").val(id);
       });



        // add part
        $("#addBtn").on("click",function(e){
            e.preventDefault();
            $.get("{{route('admin.icon.create')}}",function(data){
                $("#modals").empty().append(data);
                $("#addSclFrm").modal("show");
            })
        })    

        $("#modals").on("submit","#addSclFrmData",function(e){
            e.preventDefault();
            var frmData = $(this).serialize();
            $.ajax({
                url:"{{route('admin.icon.store')}}",
                type:"POST",
                data:frmData
            })
            .done(function(data){
                $("#addSclFrm").modal("hide");
                if(data == 1){
                    toastr.success("Information Added Successfully ...","Success Message !!");
                    setTimeout(function(){
                        location.reload();
                    },1000)
                }else{
                    toastr.error('Demo Version ! Change Not Possible');
                }
            })
            .fail(function(error){
                var errors = error.responseJSON;
                var data = errors.errors;
                $("#modals #errIcn").empty().append(data.icon);
                $("#modals #errLink").empty().append(data.link);
            });
        });
        
        $(".btnEdit").on("click",function(e){
            e.preventDefault();
            var route = $(this).data("route");
            $.get(route,function(data){
                $("#modals").empty().append(data);
                $("#editSclFrm").modal("show");
            })
        });

        $("#modals").on("submit","#editSclFrmData",function(e){
            e.preventDefault();
            var frmData = $(this).serialize();
            $.ajax({
                url:"{{route('admin.icon.update')}}",
                type:"POST",
                data:frmData,
            })
            .done(function(data){
                $("#editSclFrm").modal("hide");
                if(data == 1){
                    toastr.success("Information Updated Successfully ...","Success Message !!");
                    setTimeout(function(){
                        location.reload();
                    },1000)
                }else{
                    toastr.error('Demo Version ! Change Not Possible');
                }
            });
        });
        
    });


    $(document).on('click', '.browse', function () {
        var file = $(this).parent().parent().parent().find('.file');
        file.trigger('click');
    });
    $(document).on('change', '.file', function () {
        $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
    });


</script>
@endsection
