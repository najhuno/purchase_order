@extends('layout.master')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="card"> -->
                <div class="wrapper wrapper-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4><i class="fa fa-info-circle"></i>WELCOME</h4>
                                </div>
                                <div class="panel-body">
                                    <h3>You Have Entered The WEB</h3>
                                </div>
                                <div class="card-body">
                                    @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!--    </div>
        </div>
    </div>
</div> -->
@endsection
