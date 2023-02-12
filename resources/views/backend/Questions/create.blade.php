@extends('layouts.backend')

@section('content')

<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>Dashboard</a></li>
            <li class="breadcrumb-item"><a>Question Add</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Multiple Question Add</li>
        </ol>
    </nav>
</div>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Multiple Question Add</h6>
                <form class="repeater" action="{{ route('question.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" id="name" name="subject" placeholder="Subject">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="my-select">Category</label>
                                    <select id="my-select" class="form-control" name="">
                                        <option>Cat1</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div data-repeater-list="questions">
                        <div data-repeater-item>
                            <div class="form-group">
                                <label for="name">Question</label>
                                <input type="text" class="form-control" id="name" name="question" placeholder="Question">
                            </div>
                            <label for="name">Options</label>
                            <div class="form-group">

                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control mt-1" name="o1" placeholder="option1" value=""/>
                                    </div>
                                    <div class="col-md-6">
                                      Is_checked  <input type="checkbox" class="form-check-input ml-2" name="checkbox1" value="1" />
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control mt-1" name="o2" placeholder="option2" value=""/>
                                    </div>
                                    <div class="col-md-6">
                                      Is_checked  <input type="checkbox" class="form-check-input ml-2" name="checkbox2" value="1" />
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control mt-1" name="o3" placeholder="option1" value=""/>

                                    </div>
                                    <div class="col-md-6">
                                      Is_checked  <input type="checkbox" class="form-check-input ml-2" name="checkbox3" value="1" />
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control mt-1" name="o4" placeholder="option1" value=""/>

                                    </div>
                                    <div class="col-md-6">
                                      Is_checked  <input type="checkbox" class="form-check-input ml-2" name="checkbox4" value="1" />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <input data-repeater-create type="button" value="ADD AN OTHER QUESTION" class="btn btn-primary"/>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
