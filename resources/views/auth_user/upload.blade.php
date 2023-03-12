<x-index>
<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
    <div class="wrap-login100 p-l-55 p-r-55 pt-3 p-b-54">


        <img src="images/logo-icon.png" alt="" id="img-logo" class="mb-3">
        <form class="login100-form validate-form" method="POST" action="{{ route('upload.img', Auth::user()->id) }}" enctype="multipart/form-data">
            @csrf
            <span class="login100-form-title pb-2">
                Upload Your Profile
            </span>
            <div class="wrap-input100 m-b-23">
                <input class="input100" type="file" name="image" required>
            </div>
            <div class="container-login100-form-btn">
                <div class="wrap-login100-form-btn">
                    <div class="login100-form-bgbtn"></div>
                    <button class="login100-form-btn">
                    <i class="fa fa-long-arrow-right" style="margin-right: 10px;"></i>UPLOAD
                    </button>
                </div>
            </div><br>
            <div class="container-login100-form-btn">
                <div class="wrap-login100-form-btn">
                    <div class="login100-form-bgbtn"></div>
                    <a href="{{ route('home') }}" class="login100-form-btn">
                        <i class="fa fa-long-arrow-left" style="margin-right: 10px;"></i> Go Back
                    </a>
                </div>
            </div><br>
        </form>
    </div>
</div>
</x-index>