@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
<form action="{{url('add_img')}}" enctype="multipart/form-data" method="POST">
     {{ csrf_field() }}  
    @method('PUT')
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label for="exampleInputName">Title</label>
        <input type="text" class="form-control" id="exampleInputName" placeholder="Enter title" name="title">
        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
 
    <div class="form-group">
        <label for="exampleInputName">File</label>
   <input type="file" class="form-control" id="exampleInputName" name="file_name">
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
 
    <button type="submit">Save</button>
</form>