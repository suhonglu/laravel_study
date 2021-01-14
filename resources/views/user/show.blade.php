@extends('layout.default')

@section('title',$user->name)
    
@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="col-md12">
                <div class="user_info">
                    @include('user._userInfo',['user'=>$user])
                </div>
            </div>
            
        </div>
    </div>
@endsection