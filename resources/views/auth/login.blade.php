
<x-index>
<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
    
    <div class="wrap-login100 p-l-55 p-r-55 pt-3 p-b-54">
        

        <img src="images/logo-icon.png" alt="" id="img-logo" class="mb-3">
        <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
            @csrf
            <span class="login100-form-title pb-2">
                Login
            </span>
            <p class="text-center mb-5">Receive anonymous compliments from your friends and send anonymous messages to your friends for free.</p>

            <div class="wrap-input100 m-b-23">
                <span class="label-input100">Email</span>
                <input class="input100" type="text" name="email" placeholder="Type your username" required>
                <span class="focus-input100" data-symbol="&#xf206;"></span>
                @error('email')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="wrap-input100">
                <span class="label-input100">Password</span>
                <input class="input100" type="password" name="password" placeholder="Type your password" required>
                <span class="focus-input100" data-symbol="&#xf190;"></span>
                @error('password')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>




            <div class="text-right p-t-8 p-b-31">
                <a href="{{ route('password.request') }}">
                    Forgot password?
                </a>
            </div>

            <div class="container-login100-form-btn">
                <div class="wrap-login100-form-btn">
                    <div class="login100-form-bgbtn"></div>
                    <button class="login100-form-btn" name="login-submit">
                        Login <i class="fa fa-long-arrow-right" style="margin-left: 10px;"></i>
                    </button>
                </div>
            </div>

            <div class="text-right p-t-8 p-b-31">
                <a href="{{ route('register') }}">
                    Don't Have an Account? Register
                </a>
            </div>
        </form>
    </div>
</div>
</x-index>









