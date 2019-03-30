<form action="{{ route('posts.store')}}" method="post" enctype = "multipart/form-data">
@csrf 
TITLE:
<input type="text" name="title">
</br>s
CONTENT :
<textarea name="content" id="" cols="30" rows="10"></textarea>
</br>
IMAGE :
<input type="file" name="image">
</br>
<button type="submit">save</button>
</form>