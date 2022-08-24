@extends('layout')

@section('title', 'Create')


@section('content')
<div class="container">
    

    <form method="post" enctype="multipart/form-data" action="/posts">
            @csrf
        <div >
            <div class="col-8 offset-2" style="padding: 10px 20px 20px 100px ;">
                    <div class="row">
                        <h3>Add New Reflection</h3>
                    
                    </div>

                    <div class="form-group row">
                        <!--Title-->
                <div class="pb-10">
                <label for="title" class="d-block col-md-4 col-form-label">Reflection Title  <Title></Title></label>
                        <input id="title"
                        type="text"
                        class="form-control{{ $errors->has('title') ? 'is-invalid': ''}} "
                        name="title"
                        value="{{ old('title') }}"
                        autocomplete="title"
                        autofocus >

                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: red;"> {{$errors->first('title')}} </strong>
                            </span>
                        
                        @endif 
                </div>
                
                
                <!-- Description -->                      
                <div class="d-block" style="padding-top: 10px;">
                    <label for="description" class="d-block" >Description</label>
                    <textarea name = "description" id="desc" rows="5" cols="60"
                    class="form-control{{ $errors->has('description') ? 'is-invalid': ''}} "
                    value="{{ old('description') }}"
                    autocomplete="description"
                    autofocus    
                    >

                    </textarea>

                    @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red;"> {{$errors->first('description')}} </strong>
                                </span>
                            
                    @endif 
                </div>
                
                        <!-- Image -->
                <div class="d-block" style="padding-top: 10px;">
                    <label for="image"> Upload an Image</label>
                    <input name="image" type="file" class="form-control-file" id="image">
                    
                
                    @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red;"> {{$errors->first('image')}} </strong>
                                </span>
                            
                    @endif 
                </div>

                <div class="d-block row pt-10">
                 <button class="btn btn-primary">Add New Reflection</button>
                </div>
                        
                </div>
                
                </div>
            </div>
        </div>
    </form>
 </div>

@endsection()

