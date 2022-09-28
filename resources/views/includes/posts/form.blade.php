@if($post->exists)
<form action="{{route('admin.posts.update', $post)}}" method="POST">
    @method('PUT')
@else
<form action="{{route('admin.posts.store')}}" method="POST">

@endif

<form action="{{route('admin.posts.store')}}" method="POST">
            @csrf
  <div class="d-flex">
    <div class="form-group col-9">
      <label for="title">TITOLO</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title ) }}" aria-describedby="emailHelp">
      <small class="form-text text-muted">We'll never share your Privacy with anyone else.</small>
    </div>
    <div class="ms-2 col-3">
    <div class="form-group">
    <label for="category_id">CATEGORIA</label>
    <select class="form-control" id="category_id" name="category_id">
      <option>Nessuna Categoria</option>
      @foreach( $categories as $category )
      <option value="$category->id">{{$category->label}}</option>
      @endforeach
    
    </select>
  </div>
    </div>

  </div>
  
 
  <div class="form-group">
    <label for="content">CONTENUTO</label><br>
    <textarea name="content" placeholder="content" row="10" col="40">{{old('content',$post->content )}}</textarea>
  </div>
  <div class="form-group">
    <label for="image">IMMAGINE</label>
    <input type="url" class="form-control" name="image" id="image-field" value="{{old('image', $post->image )}}" placeholder="Url">
  </div>
  <div class="col-1">
    <img class="img-fluid" id="preview" src="{{ $post->image ?? 'https://media.istockphoto.com/vectors/thumbnail-image-vector-graphic-vector-id1147544807?k=20&m=1147544807&s=612x612&w=0&h=pBhz1dkwsCMq37Udtp9sfxbjaMl27JUapoyYpQm0anc=' }}" alt="Post Image Preview">
  </div>

    <footer class="d-flex justify-content-between align-items-center mt-5">
        <a class="btn btn-light" href="{{route('admin.posts.index')}}">HOMEPAGE</a>
        <button class="btn btn-primary" type="submit" href="#">SALVA</button>
    </footer>
    </form>