<x-index>
<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
    <div class="wrap-login100 p-l-55 p-r-55 pt-3 p-b-54 text-center">
        @if (session()->has('message'))
        <h6 class="alert alert-success">
        {{ session('message') }}
        </h6> 
            @endif
        @if(Auth::user()->profile_img)
        <div class='image'>
            <img src='{{ Storage::url(Auth::user()->profile_img) }}' alt='' class='mb-3 img-thumbnail img__img'>
            <div class='image__overlay image__overlay--blur'>
            <a href='{{ route('upload.image') }}' class='text-center text-light'>Change Profile <i class='fa fa-upload'></i></a>
            </div>
            </div>        
            @else

        <div class='alert alert-danger' role='alert'><a href='{{ route('upload.image') }}' class='alert-link'>You Are Yet to Upload Your Profile Image Click Here to Upload Your Profile Image</a></div>
        @endif
       

    <span class="login100-form-title pb-2 d-flex mt-5">
        <div>
            <input class="form-control d-flex " style="width:300px;" type="text" id='myInp' value="http://127.0.0.1:8000/sendmessage?user={{ Auth::user()->username }}"readonly></input>
            </div>
            <div>
            <i class='fa fa-clone d-flex mt-2' style="font-size: 25px;" id="btnCopy" ></i>
        </div>
            </span>
            <br>
            <p class="text-center">Share your profile link to get responses from your friend. Go to "View Messages" to check out the responses.</p><br>
            <div class="container-login100-form-btn">
                <div class="wrap-login100-form-btn">
                    <div class="login100-form-bgbtn"></div>
                    <a href="{{ route('messages') }}" style="text-decoration: none;" class="login100-form-btn">
                        View Messages <i class="fa fa-long-arrow-right" style="margin-left: 10px;"></i>
                    </a>
                </div>
            </div><br>
            
            <div class="container-login100-form-btn">
                <div class="wrap-login100-form-btn">
                    <div class="login100-form-bgbtn"></div>
                    <a class="login100-form-btn" style="text-decoration: none;" href="https://wa.me/?text='Write a secret anonymous message for me..I won't know who wrote it..  http://127.0.0.1:8000/sendmessage?user={{ Auth::user()->username }}'" >
                    <i class="fa fa-whatsapp" style="margin-right: 10px;"></i>Share on WhatsApp 
                    </a>
                </div>
            </div><br>
            <div class="container-login100-form-btn">
                <div class="wrap-login100-form-btn">
                    <div class="login100-form-bgbtn"></div>
                    <a class="login100-form-btn" href=" https://www.facebook.com/sharer.php?u=http://127.0.0.1:8000/sendmessage?user={{ Auth::user()->username }}$t='Anonymous Message'&description='Write a secret anonymous message for me..I won't know who wrote it..'" style="text-decoration: none;" >
                    <i class="fa fa-facebook" style="margin-right: 10px;"></i>Share on Facebook 
                    </a>
                </div>
            </div><br>
            <div class="container-login100-form-btn">
                <div class="wrap-login100-form-btn">
                    <div class="login100-form-bgbtn"></div>
                    <button class="login100-form-btn" >
                    <i class="fa fa-instagram" style="margin-right: 10px;"></i>Share on Instagram 
                    </button>
                </div>
            </div><br>
            <div class="container-login100-form-btn">
                <div class="wrap-login100-form-btn">
                    <div class="login100-form-bgbtn"></div>
                    <a href="{{ url('settings') }}" style="text-decoration: none;" class="login100-form-btn" >
                    <i class="fa fa-sliders" style="margin-right: 10px;"></i>Settings
                    </a>
                </div>
            </div><br>
           

            <div class="container-login100-form-btn">
                <div class="wrap-login100-form-btn">
                    <div class="login100-form-bgbtn"></div>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="login100-form-btn"> <i class="fa fa-power-off" style="margin-right: 10px;"></i>Logout</button>
                        
                    </form>     
                </div>
            </div>

          
    </div>
</div>

</x-index>





