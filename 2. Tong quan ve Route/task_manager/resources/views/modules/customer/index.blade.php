<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <h1>Danh sách khách hàng</h1>
    <a type="button" class="btn btn-user btn-primary" href="/customer/create">Thêm khách hàng</a>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>STT</th>
                <th>Họ và tên</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Nguyễn Văn A</td>
                <td>01234567890</td>
                <td>email.test@mail.com</td>
                <td>
                    <a href="/customer/detail">Xem</a> | <a href="/customer/edit">Sửa</a> | <a href="/customer/delete">Xóa</a>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>