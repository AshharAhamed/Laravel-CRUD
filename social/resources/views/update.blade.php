@include('inc.header')
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <!-- {{csrf_field()}} -->
            <form class="" method="POST" action="{{url('/edit',array($articles->id))}}">
            {{csrf_field()}}
            <!-- @method('GET') -->
                <fieldset>
                    <legend>LARAVEL  CRUD</legend>

                    @if(!empty($errors))
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-lg-10">
                            <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="<?php echo $articles->title; ?>" placeholder="Enter Title">
                        </div>
                        <div class="col-lg-10">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <div class="col-lg-10">
                            <textarea type="text" class="form-control" id="exampleInputPassword1" name="description" placeholder="Description">
                                <?php echo $articles->description?>
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{url('/')}}" class="btn btn-primary">Back</a>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@include('inc.footer')
