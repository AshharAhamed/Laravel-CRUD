@include('inc.header')
<div class="container">
    <div class="row">
        {{--<legend>Read Article</legend>
        <p class="lead">{{$articles->title}}</p>
        <p class="sub">{{$articles->description}}</p>--}}
        <div class="card mx-auto " style=" width: 50rem; margin-top: 10px" >
            <div class="card-body">
                <h5 class="card-title">Title : {{$articles->title}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">ID : {{$articles->id}}</h6>
                <p class="card-text">Description : {{$articles->description}}</p>
            </div>
        </div>
    </div>
</div>
@include('inc.footer')
