<html>
    <head>
<style>
    .wrapper{
        width: 800px;
        margin: 0 auto;
    }
    table {
        width: 100%;
    }
</style>
    </head>
    <body>
        <div class="wrapper">
            <table border="1">
                <tr style="height: 50px;">
                    <td>Logo</td>
                    <td style="text-align: right;">Xin chào {{ Auth::user()->ho_ten }}, <a href="{{route('dang-xuat')}}">Thoát</a></td>
                </tr>
                <tr style="height: 300px;">
                    <td>Menu</td>
                    <td>Đây là trang chủ</td>
                </tr>
            </table>
        </div>

    </body>
</html>
