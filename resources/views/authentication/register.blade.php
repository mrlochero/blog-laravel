<form method = "POST" action="{{route('user.register.add')}}" >
    @csrf
      <div class="container">
        <h1>Đăng Ký</h1>
        <h4><a class="title-next" href="{{route('user.login')}}" >Đăng Nhập</a></h4>
        <p>Xin hãy nhập biểu mẫu bên dưới để đăng ký.</p>
        <hr>
        
        <div class="block-input">
        <label for="name"><b>Tên đăng nhập</b></label>
        <input type="text" placeholder="Nhập Tên đăng nhập" name="name" value="{{old('name')}}">
          @error('name')
          <span style="color:red;">{{$message}}</span>
          @enderror
        </div>  
  
        <div class="block-input">
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Nhập Email" name="email"value="{{old('email')}}" >
        @error('email')
          <span style="color:red"> {{$message}} </span>
        @enderror
        </div>
  
        <div class="block-input">
        <label for="psw"><b>Mật Khẩu</b></label>
        <input type="password" placeholder="Nhập Mật Khẩu" name="password"value="{{old('password')}}" >
        @error('password')
        <span style="color:red"> {{$message}} </span>
        @enderror
        </div>
  
        <div class="block-input">
        <label for="psw-repeat"><b>Nhập Lại Mật Khẩu</b></label>
        <input type="password" placeholder="Nhập Lại Mật Khẩu" name="password_confirmation">
        @error('password_confirmation')
        <span style="color:red"> {{$message}} </span>
        @enderror
      </div>
  
        {{-- <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">Nhớ Đăng Nhập
        </label> --}}
    
        <div class="clearfix">
          <button type="submit" class="signupbtn">Đăng Ký</button>
        </div>
      </div>
    </form>

    <link rel="stylesheet" href="{{asset('assets/clients/css/authentication.css')}}">
