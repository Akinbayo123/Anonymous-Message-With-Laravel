<x-index>
<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
    <div class="wrap-login100 p-l-55 p-r-55 pt-3 p-b-54">
        <img src="images/logo-icon.png" alt="" id="img-logo" class="mb-3">
        <form class="login100-form validate-form" action="{{ route('register') }}" method="POST">
           @csrf
            <span class="login100-form-title pb-2">
                Register
            </span>

            <div class="wrap-input100 m-b-23">
                <span class="label-input100">Username</span>
                <input class="input100" type="text" name="username" placeholder="Type your username" required>
                <span class="focus-input100" data-symbol="&#xf206;"></span>
                @error('username')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="wrap-input100 m-b-23">
                <span class="label-input100">Email</span>
                <input class="input100" type="text" name="email" placeholder="Type your Email" required>
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
            <div class="wrap-input100">
                <span class="label-input100">Password</span>
                <input class="input100" type="password" name="password_confirmation" placeholder="Confirm your password" required>
                <span class="focus-input100" data-symbol="&#xf190;"></span>
                @error('password_confirmation')
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
                    <button class="login100-form-btn" name="submit-register">
                        Register Account  <i class="fa fa-long-arrow-right" style="margin-left: 10px;"></i>
                    </button>
                </div>
            </div>

            <div class="text-right p-t-8 p-b-31">
                <a href="{{ route('login') }}">
                    Already Have An Account? Login
                </a>
            </div>
            <p class="text-muted">
                By using this service, you agree to our Privacy Policy, Terms of Service and any related policies. (Check Disclaimer)
            </p>
        </form>
    </div>
</div>
</x-index>








