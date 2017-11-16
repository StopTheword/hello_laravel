@extends('layouts.default')
@section('content')
    <div class="jumbotron">
       <h1>Hello,World</h1>
       <p>你现在所看到的是<a href="www.baidu.com">入门教程</a></p>
       <p>
         一切，从这里开始
       </p>
       <p>
          <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
       </p>
    </div>
@stop
