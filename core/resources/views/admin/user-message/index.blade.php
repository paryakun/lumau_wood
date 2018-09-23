@extends('admin.master') @section('title') Users Message Info  @endsection @section('css')


@endsection @section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title uppercase bold"> Users Message Info 
        </h3>
        <hr>
        <div class="row">


            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-list"></i> Users Message Info 
                    </div>
                    <div class="panel-body ">
                            @if($userMessages->all())
                        <table class="table table-responsive table-striped table-bordered table-hover" >
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th> Email</th>
                                    <th> Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($userMessages as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->message}}</td>
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
                       {{ $userMessages->links() }}
                   </div>
                    
                </div>
                
            </div>





        </div>

    </div>
</div>



@endsection @section('js')

@endsection