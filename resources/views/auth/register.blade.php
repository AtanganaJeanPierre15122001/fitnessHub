@extends('layouts.app')
@section('content')
    <section  style="background-image: url('https://t3.ftcdn.net/jpg/02/24/31/68/240_F_224316855_ZIENS9D1LpzoIaGXMwUAAkqff9MeEZEe.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;" class="register-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="register-text bg-light">
                        <div class="section-title">
                            <h2>Register Now</h2>
                            <p>The First 7 Day Trial Is Completely Free With The Teacher</p>
                        </div>
                        <form action="#" class="register-form ">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="name">First Name</label>
                                    <input type="text" id="name">
                                </div>
                                <div class="col-lg-6">
                                    <label for="email">Your email address</label>
                                    <input type="text" id="email">
                                </div>
                                <div class="col-lg-6">
                                    <label for="last-name">Last Name</label>
                                    <input type="text" id="last-name">
                                </div>
                                <div class="col-lg-6">
                                    <label for="mobile">Mobile No*</label>
                                    <input type="text" id="mobile">
                                </div>
                                <div class="col-lg-6">
                                    <label for="password">Password</label>
                                    <input type="password" id="mobile">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="last-name">Role</label>
                                    <select id="role" class="form-control" name="role" required>
                                        <option value="admin">Admin</option>
                                        <option value="client">Client</option>
                                        <option value="coach">Coach</option>
                                    </select>
                                    @if ($errors->has('role'))
                                        <span class="text-danger">{{ $errors->first('role') }}</span>
                                    @endif
                                </div>
                                
                            </div>
                            <button type="submit" class="register-btn">SignUp</button>
                        </form>
                    </div>
                </div>
                {{-- <div class="col-lg-4">
                    <div class="register-pic">
                        <img src="assets/img/register-pic.jpg" alt="">
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

@endsection