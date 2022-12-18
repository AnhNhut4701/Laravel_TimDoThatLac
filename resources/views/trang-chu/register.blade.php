@extends('trang-chu.auth-master')
@section('content')
<div class="auth-box">
    <div>
        <div class="logo">
            <span class="db"><img src="{{ asset('assets/images/logo-icon.png') }}" alt="logo" /></span>
            <h5 class="font-medium m-b-20">ĐĂNG KÝ</h5>
        </div>
        <!-- Form -->
        <div class="row">
            <form id="frm-dang-ky" class="col s12" action="{{ route('dang-ky') }}" method="POST">
                @csrf()
                <div class="row">
                    <div class="input-field col s12">
                        <input id="ho_ten" name="ho_ten" type="text" class="validate" required data-error=".error-ho-ten">
                        <label for="ho_ten">Họ tên</label>
                        <div class="error-ho-ten"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" name="email" type="email" class="validate" required data-error=".error-email">
                        <label for="email">Email</label>
                        <div class="error-email"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="phone" name="phone" type="text" class="validate" required data-error=".error-dien-thoai">
                        <label for="phone">Điện thoại</label>
                        <div class="error-dien-thoai"></div>
                    </div>
                </div>
                <div class="row m-t-40">
                    <div class="col s12">
                        <button class="btn-large w100 blue accent-4" type="submit">Đăng Ký</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="center-align m-t-20 db">
            Nếu bạn đã có tài khoản, hãy vui lòng <a href="{{ route('dang-nhap') }}">đăng nhập</a>
        </div>
    </div>
</div>
@endsection

@section('page-js')
<script type="text/javascript">
$(document).ready(function() {
    var $form = $("#frm-dang-ky");

    var $validateForm = $form.validate({
        rules: {
            ho_ten: "required",
            email: {
                required: true,
                email: true
            },
            phone: "required"
        },
        messages: {
            ho_ten: "Vui lòng nhập họ tên",
            email: {
                required: "Vui lòng nhập email",
                email: "Vui lòng nhập đúng định dạng email@gmail.com"
            },
            phone: "Vui lòng nhập điện thoại"
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