<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Product Discount Calculator</title>
</head>

<body>
    <h1>Product Discount Calculator</h1>
    <form action="/discount" method="POST">
        @csrf
        <p>
            <input type="text" name="productDescription" placeholder="Mô tả">
        </p>
        <p>
            <input type="number" name="price" placeholder="Giá niêm yết">
        </p>
        <p>
            <input type="number" name="discountPercent" placeholder="Tỷ lệ chiết khấu (%)">
        </p>
        <p>
            <button type="submit">Tính toán</button>
        </p>
    </form>
</body>

</html>