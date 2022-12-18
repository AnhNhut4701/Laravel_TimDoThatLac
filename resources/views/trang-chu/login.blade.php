@extends('trang-chu.auth-master')
@section('content')
<div class="auth-box">
    <div>
        <div class="logo">
            <span class="db"><img src="{{ asset('assets/images/logo-icon.png') }}" alt="logo" /></span>
            <h5 class="font-medium m-b-20">ĐĂNG NHẬP</h5>
        </div>
        <div class="row">
            <form id="frm-dang-nhap" class="col s12" action="{{ route('xl-dang-nhap') }}" method="POST">
                @csrf()
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" name="email" type="email" class="validate" required data-error=".error-email">
                        <label for="email">Email</label>
                        <div class="error-email"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" name="mat_khau" type="password" class="validate" required data-error=".error-mat-khau">
                        <label for="password">Mật khẩu</label>
                        <div class="error-mat-khau"></div>
                    </div>
                </div>
                <div class="row m-t-5">
                    <div class="col s7"></div>
                    <div class="col s5 right-align"><a href="{{ route('quen-mat-khau') }}" class="link">Quên mật khẩu?</a></div>
                </div>
                <div class="row m-t-40">
                    <div class="col s12">
                        <button class="btn-large w100 blue accent-4" type="submit">Đăng Nhập</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="center-align m-t-20 db">
            Nếu bạn chưa có tài khoản, hãy vui lòng <a href="{{ route('dang-ky') }}">đăng ký</a>
        </div>
    </div>
</div>
@endsection

@section('page-js')
<script type="text/javascript">
$(document).ready(function() {
    var $form = $("#frm-dang-nhap");

    var $validateForm = $form.validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            mat_khau: "required"
        },
        messages: {
            email: {
                required: "Vui lòng nhập email",
                email: "Vui lòng nhập đúng định dạng email@gmail.com"
            },
            mat_khau: "Vui lòng nhập mật khẩu"
        },
        errorElement: "div",
        errorPlacement: function(error, element) {
            var placement = $(element).data("error");
            if (placement) {
                $(placement).append(error);
            } else {
                error.insertAfter(element);
            }
        }
    });
});
</script>
@endsection