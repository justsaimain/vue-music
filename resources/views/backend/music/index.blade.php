@extends('backend.layouts.app')


@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#home1" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">View</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#addNew" data-toggle="tab" aria-expanded="true" class="nav-link">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Add New</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade show active" id="home1">
                            <div class="card border-0 shadow-none">
                                <div class="card-body">
                                    <form action="">
                                        <div class="form-group">
                                            <label for="link">Enter Website Link</label>
                                            <input type="text" id="link" class="form-control" placeholder="Website Link">
                                        </div>
                                        <button class="btn btn-primary" type="submit">Fetch</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="addNew">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
