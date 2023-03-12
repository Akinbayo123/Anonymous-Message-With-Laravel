<x-index>
<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
    <div class="wrap-login100 p-l-55 p-r-55 pt-3 p-b-54">
    
        
    <img src="images/logo-icon.png" alt="" id="img-logo" class="mb-3">
        <form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
            @csrf
            <span class=" pb-4 mb-5">
                Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
            </span>
            <div class="wrap-input100 m-b-23">
                <span class="label-input100">Your Email</span>
                <input class="input100" type="text" name="email" value="" required>
                <span class="focus-input100" data-symbol="&#xf206;"></span>
                @error('email')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="container-login100-form-btn">
                <div class="wrap-login100-form-btn">
                    <div class="login100-form-bgbtn"></div>
                    <button class="login100-form-btn" type="submit" name="change-email-button" >
                    <i class="fa fa-long-arrow-right" style="margin-right: 10px;"></i>Email Password Reset Link
                    </button>
                </div>
            </div><br>
            <div class="container-login100-form-btn">
                <div class="wrap-login100-form-btn">
                    <div class="login100-form-bgbtn"></div>
                    <a href="{{ route('login') }}" class="login100-form-btn">
                    <i class="fa fa-long-arrow-left" style="margin-right: 10px;"></i> Go Back 
                    </a>
                </div>
            </div><br>
        </form>
    </div>
</div>
</x-index>



