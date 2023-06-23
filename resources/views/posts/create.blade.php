<x-layouts.main>
    <x-slot:title>
    Create a conference
    </x-slot:title>
<x-page-header>
    New create a conference
</x-page-header>

    <div class="container">
        <div class="row w-50 py-4">
        <div class="contact-form">
            <div id="success"></div>
            @if($errors->any())
            <div class="alert alert-info">
                <ul>
                    @foreach($errors->all() as $error)
                            <li>
                                
                                {{$error}}
                             
                            </li>
                    @endforeach
                </ul>
            </div>
                    
            @endif
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="col-sm-6 control-group">
                        <input type="text" class="form-control p-4" name="title" id="name" value="{{old('title')}}" placeholder="Your Name" />
                        @error('title')
                            <p class="help-block text-danger">{{$message}}</p>
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    
                        
                 
                       
                  
                    
                    <div class="col-sm-6 control-group">
                        <input type="email" value="{{old('email')}}" class="form-control p-4" name="email" placeholder="Your Email" />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <input type="text"  class="form-control p-4" name="short_content" value="{{old('short_content')}}" placeholder="Subject of Conference"   />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <textarea value="{{old('content')}}" class="form-control p-4" rows="6" name="content" placeholder="About of Conference type and full object">
                    </textarea>
                    <p class="help-block text-danger"></p>
                </div>
                <div>
                    <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Send Conference</button>
                </div>
            </form>
        </div>
    </div>


</div>
</x-layouts.main>
