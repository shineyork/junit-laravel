<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>

  <body>
      <h1>不区分大小写(可以自行完善)</h1>
      <br>
      <form class="" action="{{route('junit.store')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        命名空间：<input type="text" value='' style="width:300px" name='namespace' placeholder="如：app\index\controller 或app\index\controller\Index">可以写全，然后下面类名不用些 <br>
        类名：<input type="text" name='className' placeholder="如：index ">命名空间全可以不用写<br>
        测试方法名：<input type="text" name='action' placeholder="index"><br>
        传递参数以 | 分割：<input type="text" placeholder="如: 1|2|3" name='param'><br>
        <input type="submit" name="" value="测试"/>
      </form>
  </body>
