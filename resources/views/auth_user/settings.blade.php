<x-index>
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 pt-3 p-b-54">
            @if (session()->has('message'))
            <h5 class="alert alert-success">
            {{ session('message') }}
            </h5> 
            @endif
            <img src="{{Auth::user()->profile_img ? Storage::url(Auth::user()->profile_img):asset("images/logo-icon.png")}}" alt="" id="img-logo" class="mb-3 img-thumbnail img__img">
            <form class="login100-form validate-form" method="POST">
                <span class="login100-form-title pb-2">
                    Settings
                </span>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        @if (Auth::user()->profile_img)
                        <a href="{{ route('upload.image') }}" style="text-decoration:none;" class="login100-form-btn" name="image">
                            Update Profile Image <i class="fa fa-upload" style="margin-left: 10px;"></i>
                        </a>
                      @else
                        <a href="{{ route('upload.image') }}" class="login100-form-btn" style="text-decoration:none;" name="image">
                            Upload Profile Image <i class="fa fa-upload" style="margin-left: 10px;"></i>
                        </a>
                        @endif
                    </div>
                </div><br>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <a href="{{ route('profile.edit') }}" style="text-decoration:none;" class="login100-form-btn" name="submit-register">
                            Update Profile <i class="fa fa-envelope" style="margin-left: 10px;"></i>
                        </a>
                    </div>
                </div><br>
                
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <a href="#" class="login100-form-btn" style="text-decoration:none;" name="submit-register">
                            Disclaimer  <i class="fa fa-exclamation-triangle" style="margin-left: 10px;"></i>
                        </a>
                    </div>
                </div><br>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <a href="#" class="login100-form-btn" name="submit-register"style="text-decoration:none;">
                            Contact Us  <i class="fa fa-question-circle" style="margin-left: 10px;"></i>
                        </a>
                    </div>
                </div><br>

                

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <a href="{{ route('home') }}" class="login100-form-btn"style="text-decoration:none;"><i class="fa fa-long-arrow-left" style="margin-right: 10px;"></i>
                            Go Back  
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</x-index>