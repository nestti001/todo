<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title',"เว็บไซต์ขอวฉัน")</title>
</head>
<body>
    <div class="container">
        <h1><i class="fa fa-list"></i> Todo List ::</h1>
            <p>กรองสถานะ : <a href="#">ทั้งหมด</a> | <a href="#">Completed</a> | <a href="#">Incomplete</a></p>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <i class="fa fa-list"></i> รายการที่ต้องทำ
                <span class="pull-right"><a href="/create" class="btn btn-xs btn-success"><i class="fa fa-plus"></i> เพิ่มรายการ</a></span>
            </h4>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ชื่อรายการ</th>
                    <th>หมวดหมู่</th>
                    <th>สถานะ</th>
                    <th>จัดการ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>ซื้อสินค้าที่ Super Market</td>
                    <td>Shopping</td>
                    <td>Incomplete</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> edit</a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>พาหมาไปวิ่งเล่น</td>
                    <td>Activity</td>
                    <td>Completed</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> edit</a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    <header><a href ="/" >หน้าแรก </a> | <a href="/about"> เกี่ยวกับ</a> | <a href="/contact"> ติดต่อ </a> </header>
    <hr>
    <div>
     @yield("cntent")
    </div>
    <hr>
    <p>credit by Patcharapon</p>
</body>
</html>
