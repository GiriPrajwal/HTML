@extends('layouts.app');
@section('content');
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col input-group">
            <form action="/insert" method="POST">
                @csrf
                <div class="form-row">
                Name
                <div class="col">

                    <input class="form-control" type="text" name="name" id="name" />
                </div>
                <div class="col">

                    <input class="form-control" type="text" name="email" id="email" />
                </div>
                <!-- <div class="col">
                    <label class="col-form-label">Name </label>
                    <input class="form-control" type="text" name="name" id="name" />
                </div> -->

                <div class="col">
                <input class="form-control" type="Submit" />
                </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

