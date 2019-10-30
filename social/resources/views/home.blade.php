@include('inc.header')
<div class="conainer">
    <table class="table table-striped table-hover">
  <thead>
    <tr class="text-center">
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    @if(!empty(@articles))
        @foreach($articles ->all() as $article)
            <tr class="table-dark">
                <td >{{$article->id}}</td>
                <td>{{$article->title}}</td>
                <td>{{$article->description}}</td>
                <td>
                    <a href="{{url('')}}" class="badge badge-primary">Read</a> | 
                    <a href="{{url('')}}" class="badge badge-success">Update</a> | 
                    <a href="{{url('')}}" class="badge badge-danger">Delete</a> |
                </td>
            </tr>
        @endforeach
    @endif
  </tbody>
</table> 
</div>
@include('inc.footer')