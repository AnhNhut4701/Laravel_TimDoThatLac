@extends('trang-chu.auth-master')
@section('content')
<div class="auth-box">
    <div>
        <div class="logo">
            <span class="db"><img src="{{ asset('assets/images/logo-icon.png') }}" alt="logo" /></span>
            <h5 class="font-medium m-b-20">QUÊN MẬT KHẨU</h5>
            <span>Mật khẩu sẽ được gửi vào địa chỉ email của bạn!</span>
        </div>
        <div class="row">
            <form class="col s12" action="index.html">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email1" type="email" class="validate" required>
                        <label for="email1">Email</label>
                    </div>
                </div>
                <div class="row m-t-20">
                    <div class="col s12">
                        <button class="btn-large w100 red" type="submit" name="action">Khôi Phục</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div
@endsection