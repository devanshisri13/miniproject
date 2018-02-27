@extends('layouts.default')

@section('content')

    <div class="card mt-3 pl-2 pr-2" >
        <div class="card-title"><h1>View Message</h1>
            <p class="lead">This is first message to view</p></div>

        <div class="card-body">

                <div class="form-group">
                    <label for="email">Subject</label>
                    <input name="text" type="text" class="form-control">
                </div>





                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>



                <div class="form-group">
                    <label for="body">Message</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                </div>
        </div></div>
@endsection