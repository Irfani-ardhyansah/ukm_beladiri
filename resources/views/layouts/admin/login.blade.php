<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
 
      <link rel="stylesheet" href="{{ asset('/css/loginstyle.css') }}">
 
</head>
 
<body>
 
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login Panel</h1>
			</div>
 
			<div class="login-form">
			<form method="POST" action="{{ route('login') }}">
                        @csrf

				<div class="control-group">
				<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
				<div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
				</div>

				<div class="control-group">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
				
	
				<button type="submit" class="btn btn-primary btn-large btn-block">login</button>
				 @if(Session::has('failed'))
  					<p style="color:red">Username Atau Password Anda Salah</p>
  				@endif
				</div>
            </form>
		</div>
	</div>
</body>
  
  
</body>
</html>