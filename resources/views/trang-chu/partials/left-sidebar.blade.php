<aside class="left-sidebar">
    <ul id="slide-out" class="sidenav">
        <li class="side-wrap">
            <ul class="collapsible">
                <li>
                    <a href="{{ route('trang-chu') }}" class="collapsible-header"><i class="material-icons">view_list</i><span class="hide-menu">Tất cả bài viết</span></a>
                </li>

                @if (!Auth::guard('web')->check())
                <li>
                    <a href="{{ route('dang-nhap') }}" class="collapsible-header"><i class="material-icons">lock_open</i><span class="hide-menu">Đăng Nhập</span></a>
                </li>
                <li>
                    <a href="{{ route('dang-ky') }}" class="collapsible-header"><i class="material-icons">mail_outline</i><span class="hide-menu">Đăng Ký</span></a>
                </li>
                @else
                <li>
                    <a href="{{ route('TrangChu.TinCanTim') }}" class="collapsible-header"><i class="material-icons">view_list</i><span class="hide-menu">Tin Mất Đồ</span></a>
                </li>
                <li>
                    <a href="{{ route('TrangChu.TinNhatDuoc') }}" class="collapsible-header"><i class="material-icons">view_list</i><span class="hide-menu">Tin Nhặt Đồ</span></a>
                </li>
                {{-- <li>
                    <a href="{{ route('TrangChu.TinCanTim') }}" class="collapsible-header"><i class="material-icons">assignment</i><span class="hide-menu">Tin Mất Đồ</span></a>
                </li> --}}
                {{-- <li>
                    <a href="{{ route('nap-tien') }}" class="collapsible-header"><i class="material-icons">attach_money</i><span class="hide-menu">Nạp Tiền</span></a>
                </li> --}}
                @endif
                {{-- <li>
                    <a href="{{ route('lien-he') }}" class="collapsible-header"><i class="material-icons">mail_outline</i><span class="hide-menu">Liên Hệ</span></a>
                </li> --}}
            </ul>
        </li>
    </ul>
</aside>
