@extends('layout.default')

@section('title')
    创建账户
@endsection

@section('content')
    <div class="col-md-8 offset-md-2">
        <div class="card clearfix">
            <div class="card-header">
                <h3>注册</h3>
            </div>
            <div class="card-body">
                @include('user._errors')
                @include('user._message')
                <form action="{{route('user.store')}}" method="POST" >
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">姓名</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}"  />
                    </div>

                    <div class="form-group">
                        <label for="email">邮箱</label>
                        <input type="text" name="email" class="form-control" value="{{old('email')}}"  />
                    </div>

                    <div class="form-group">
                        <label for="password">密码：</label>
                        <input type="password" name="password"  class="form-control" value="{{old('password')}}"  />
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">确认密码：</label>
                        <input type="password" class="form-control" name="password_confirmation" value="{{old('password_confirmation')}}"  />
                    </div>

                    <button class="btn btn-default" type="submit">提交</button>

                </form>
            </div>
        </div>
    </div>
@endsection