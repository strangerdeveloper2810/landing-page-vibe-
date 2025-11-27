<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Yêu cầu liên hệ mới</title>
</head>

<body>
    <h2>Yêu cầu liên hệ mới</h2>
    <p>Bạn có một yêu cầu mới từ website:</p>

    <table width="100%" cellpadding="6" cellspacing="0" border="1" style="border-collapse: collapse;">
        <tr>
            <th align="left" width="30%">Họ và tên</th>
            <td>{{ $data['full_name'] ?? 'Không rõ' }}</td>
        </tr>
        <tr>
            <th align="left">Email</th>
            <td>{{ $data['email'] ?? 'Không rõ' }}</td>
        </tr>
        <tr>
            <th align="left">Số điện thoại</th>
            <td>{{ $data['phone'] ?? 'Không rõ' }}</td>
        </tr>
        <tr>
            <th align="left">Khu vực</th>
            <td>{{ $data['region'] ?? 'Không rõ' }}</td>
        </tr>
        <tr>
            <th align="left">Công ty</th>
            <td>{{ $data['company'] ?? 'Không cung cấp' }}</td>
        </tr>
        <tr>
            <th align="left">Sản phẩm quan tâm</th>
            <td>{{ $data['product'] ?? 'Không rõ' }}</td>
        </tr>
    </table>

    <p><strong>Yêu cầu cụ thể:</strong></p>
    <p>{{ $data['request'] ?? 'Người dùng không để lại yêu cầu cụ thể.' }}</p>
</body>

</html>

