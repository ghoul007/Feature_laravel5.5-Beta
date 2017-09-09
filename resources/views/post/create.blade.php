<form action="{{route('post.store')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" id="description" name="description">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>

@foreach($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach