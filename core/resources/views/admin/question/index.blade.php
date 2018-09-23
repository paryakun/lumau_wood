@extends('admin.master') @section('title') Questions  @endsection @section('css')


@endsection @section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title uppercase bold"> Questions 
        </h3>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-list"></i> Questions List
                    </div>
                    <div class="panel-body ">
                            @if($questions->all())
                        <table class="table table-responsive table-striped table-bordered table-hover" >
                            <thead>
                                <tr>
                                    <th> Questions</th>
                                    <th> Answer</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($questions as $item)
                                <tr>
                                    <td>{{$item->question}}</td>
                                    <td>{{$item->answer}}</td>
                                    <td>
                                        <a href="" data-route="{{route('admin.question.edit',$item->id)}}" class="btn btn-primary editBtn">
                                    
                                                <i class="fa fa-edit"></i> EDIT
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
                   
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modals">

</div>

@endsection 

@section('js')

<script>
    $(document).ready(function(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".editBtn").on("click",function(e){
            e.preventDefault();
            var route = $(this).data("route");
            $.get(route,function(data){
                $("#modals").empty().append(data);
                $("#editQusFrm").modal("show");
            })
        });

        $("#modals").on("submit","#editQusFrmData",function(e){
            e.preventDefault();
            var frmData = $(this).serialize();
            $.ajax({
                url:"{{route('admin.question.update')}}",
                type:"POST",
                data:frmData,
            })
            .done(function(data){
                $("#editQusFrm").modal("hide");
                if(data == 1){
                    toastr.success('Information  Updated Successfully...','Success Message');
                    setTimeout(function(){
                        location.reload();
                    },1000);
                }else{
                    toastr.error('Demo Version ! Change Not Possible');
                }
            });
        })

    });
</script>

@endsection