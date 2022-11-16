@extends('layouts.tintuc')

@section('title', 'bài viết')

@section('TT')
    Danh sách bài viết
@endsection

@section('sidebar')
    @parent
    @if (session('success'))
        <script>
            alter('{{ session('success') }}');
        </script>
    @endif
@section('content')

<div class="both-sides-title">
    <h1>Danh sách SĐT lừa đảo</h1>
    <a class="btn-danger mb-0" href="https://timdothatlac.vn/bao-cao-sdt-lua-dao">
        <i class="fal fa-plus-circle"></i>&nbsp;Báo cáo SĐT
    </a>
</div>
<div class="search-scam-phone-number mt-3">
    <div class="search-scam-phone-number__body">
        <form action="https://timdothatlac.vn/search_phone_number" method="GET"
            id="search_phone_number">
            <div class="field text">
                <label for="title" class="d-none">Tra cứu số điện thoại</label>
                <div class="control input-button">
                    <input type="text" value="" name="phone_number"
                        placeholder="Tra cứu số điện thoại">
                    <button type="submit" class="btn-primary" aria-label="Tìm kiếm">
                        <i class="fal fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

</div>
<div class="scam-phone-number-list mt-3">




    <div class="posts list">
        <div class="title-mobile">
            <a rel="dofollow" href="https://timdothatlac.vn/sdt-lua-dao/0347363547">
                <h3>Cảnh báo số điện thoại <span class='text-danger'>0347363547</span> có dấu
                    hiệu lừa đảo</h3>
            </a>
        </div>
        <a rel="dofollow" href="https://timdothatlac.vn/sdt-lua-dao/0347363547"
            class="image">
            <img src="/storage/images/scam_phone_number/bd0d020f-6d5d-42e3-a690-18bc38bf3ace.jpg"
                alt="<h3>Cảnh báo số điện thoại <span class='text-danger'>0347363547</span> có dấu hiệu lừa đảo</h3>"
                width="100%" height="100%">
        </a>
        <div class="info">

            <div class="title-desktop">
                <a rel="dofollow" href="https://timdothatlac.vn/sdt-lua-dao/0347363547">
                    <h3>Cảnh báo số điện thoại <span class='text-danger'>0347363547</span> có
                        dấu hiệu lừa đảo</h3>
                </a>
            </div>
            <div class="description">
                <p>Mọi người cẩn thận sđt này,
                    Hắn nhận nhặt được giấy tờ,
                    lừa chuyển khoản để book grab gửi giấy t...</p>
            </div>

            <div class="additional-info">
                <div class="created-at">
                    <i class="fal fa-clock"></i>&nbsp;8 tháng trước
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
