@include('inc.header')
<div class="container">
    <div class="row">
        <legend>Laravel CRUD Application</legend>
        @if(session('info'))
                <div class="col-md-6 col-lg-6 alert alert-success">
                    {{session('info')}}
                </div>
        @endif
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
                    <tr class="table-dark text-center">
                        <td >{{$article->id}}</td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->description}}</td>
                        <td>
                            <a {{--type="button"--}} href='{{url("/read/{$article->id}")}}' class="badge badge-primary" {{--data-togglle="modal" data-target="#article"--}}>Read</a> |
                            <a href='{{url("/update/{$article->id}")}}' class="badge badge-success">Update</a> |
                            <a href='{{url("/delete/{$article->id}")}}' class="badge badge-danger">Delete</a> |
                        </td>
                    </tr>
                @endforeach
            @endif
          </tbody>
        </table>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="article" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>


@include('inc.footer')
