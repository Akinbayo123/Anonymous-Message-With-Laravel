<x-index>
    <div class="container-message"style="background-image: url('images/bg-01.jpg');">
        
<div class="container-fluid">
    @if (session()->has('message'))
    <h5 class="alert alert-success">
    {{ session('message') }}
    </h5> 
        @endif
        <a class="btn btn-sm" href="{{ route('home') }}" style="color:white; text-decoration:none;"><i class="fa fa-long-arrow-left" style="margin-right: 10px;"></i>Go back</a>
    <div class="row">
       
        <h1 class="mb-4 text-center fw-bold text-white">Your Messages</h1>
        @forelse ($message as $messages)
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card shadow-sm">
                
                <div class="card-body">
                   
                    <p class="card-text" style="font-size: 20px;">{{ $messages->message }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group mt-4">
                            <a href="{{ route('delete_msg',$messages->id ) }}" class="btn btn-sm btn-outline-secondary">Delete</a>
                        </div>
                        <small class="text-muted mt-4">-anonymus {{ $messages->created_at->diffForHumans() }}</small>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <p class='text-center fw-bold' style="color: white;">Your don't have message yet share your profile to receive message.</h1>
        @endforelse
        



        </div>

    

       
    </div>
    
    
</div>



    </div>
</div>
</x-index>