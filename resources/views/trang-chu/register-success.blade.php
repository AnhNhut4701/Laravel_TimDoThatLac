@extends('trang-chu.auth-master')
@section('content')
<div class="auth-box" style="max-width: 600px !important">
    <div>
        <div class="logo">
            <span class="db"><img src="{{ asset('assets/images/logo-icon.png') }}" alt="logo" /></span>
            <h5 class="font-medium m-b-20">ĐĂNG KÝ THÀNH CÔNG</h5>
        </div>
        <!-- Form -->
        <div class="row center">
            <p>Cảm ơn bạn {{ $user->fullname }} đã đăng ký tài khoản tại mokhoa.vn.</p>
            <p>Mật khẩu đã được gửi đến email <strong>{{ $user->email }}</strong></p>
        </div>
        <div class="center-align m-t-20 db">
            Hãy vui lòng kiểm tra email và <a href="{{ route('dang-nhap') }}">đăng nhập</a>
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
        },
        submitHandler: function() {
            $form.submit();
        }
    });
});
</script>
@endsection