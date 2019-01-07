@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in ..  Welcome !!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('pagespecificscripts')
<script>
        if (!sessionStorage.tab) {
            var max = 999999999999999999;
            var min = 100000000000000000;
            sessionStorage.tab = Math.floor(Math.random() * (max - min + 1) + min);
            checkSession(sessionStorage.tab);
        }else{
            checkSession(sessionStorage.tab);
        }
    

        function checkSession(session){
            $.ajax({
                type: 'GET',
                url: "/check_session",
                async: false ,
                dataType: 'json',
                data: {
                    'tab_id':session
                },
                success: function (data) {
                    if(data==false){
                        alert("Sorry you already logged in from other tab if you won't logout ( CLICK OK TO LOGOUT )");
                        sessionStorage.clear();
                        window.location = '/logout';
                    }
                }
            });
        }
      
        function removeSession(){
            sessionStorage.clear();
        }  
    </script>
@stop    
