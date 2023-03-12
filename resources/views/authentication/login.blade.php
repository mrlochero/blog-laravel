@if(session('msg'))
  <div class="alert alert-success block-notify">{{session('msg')}} </div>
@endif

<form method="POST" action="{{route('user.login.check')}}" >
  @csrf
    <div class="container">
      <h1>Đăng Nhập</h1>

      <h4><a class="title-next" href="{{route('user.register')}}" >Đăng Ký</a></h4>
      <p>Xin hãy nhập biểu mẫu bên dưới để đăng Nhập.</p>
      <hr>

      <div class="block-input">
      <label for="username"><b>Tên đăng nhập</b></label>
      <input type="text" placeholder="Nhập Tên đăng nhập" name="username" >
        @error('username')
        <span style="color:red;">{{$message}}</span>
        @enderror
      </div>

      
      <div class="block-input">
      <label for="psw"><b>Mật Khẩu</b></label>
      <input type="password" placeholder="Nhập Mật Khẩu" name="password" >
      @error('password')
      <span style="color:red;">{{$message}}</span>
      @enderror
      </div>
{{-- 
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">Nhớ Đăng Nhập
      </label> --}}
  
      <div class="clearfix">
        <button type="submit" class="signupbtn">Đăng Nhập</button>
      </div>
    </div>
  </form>

  <link rel="stylesheet" href="{{asset('assets/clients/css/authentication.css')}}">
