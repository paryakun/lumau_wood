@extends('admin.master') @section('title') Subscriber Info  @endsection @section('css')


@endsection @section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title uppercase bold"> Subscriber Info 
        </h3>
        <hr>
        <div class="row">


            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-list"></i> Subscriber Info 
                    </div>
                    <div class="panel-body ">
                            @if($subscribers->all())
                        <table class="table table-responsive table-striped table-bordered table-hover" >
                            <thead>
                                <tr>
                                    <th>ID#</th>
                                    <th> Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($subscribers as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->email}}</td>
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
                       {{ $subscribers->links() }}
                   </div>
                    
                </div>
                
            </div>





        </div>

    </div>
</div>



@endsection @section('js')

@endsection