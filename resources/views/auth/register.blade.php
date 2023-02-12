
@extends('layouts.app')
@section('content')
    <div class="page-wrapper full-page">
        <div class="page-content d-flex align-items-center justify-content-center">
            <div class="row w-100 mx-0 auth-page">
                <div class="col-md-8 col-xl-6 mx-auto">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-4 pr-md-0">
                                <div class="auth-left-wrapper">

                                </div>
                            </div>
                            <div class="col-md-8 pl-md-0">
                                <div class="auth-form-wrapper px-4 py-5">
                                    <a href="#" class="noble-ui-logo d-block mb-2">Job<span>Portal</span></a>
                                    <h5 class="text-muted font-weight-normal mb-4">Welcome back! sign in to your
                                        account.</h5>
                                        <form class="forms-sample"  method="POST" action="{{ route('user.register') }}">
                                           @csrf
                                            <div class="form-group">
                                              <label for="exampleInputUsername1">Name</label>
                                              <input type="text" class="form-control" name="name" id="exampleInputUsername1" autocomplete="Username" placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                              <label for="exampleInputEmail1">Email address</label>
                                              <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
                                            </div>
                                            @php
                                                $roles = DB::table('roles')->get();
                                            @endphp
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Role</label>
                                                <select class="form-select" id="exampleFormControlSelect1" name="role">
                                                    <option selected="" disabled="">Select your role</option>
                                                    @foreach ($roles as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                              <label for="exampleInputPassword1">Password</label>
                                              <input type="password" class="form-control" name="password" id="exampleInputPassword1" autocomplete="current-password" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Confirm Password</label>
                                                <input type="password" class="form-control" name="confirm-password" id="exampleInputPassword1" autocomplete="current-password" placeholder="Password">
                                              </div>
                                            <div class="form-check form-check-flat form-check-primary">
                                              <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                                Remember me
                                              </label>
                                            </div>
                                            <div class="mt-3">
                                              <button type="submit" class="btn btn-primary text-white mr-2 mb-2 mb-md-0">Sing up</button>

                                            </div>
                                            <a href="{{ route('login') }}" class="d-block mt-3 text-muted">Already a user? Sign in</a>
                                          </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
