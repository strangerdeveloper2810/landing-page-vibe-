<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Yêu cầu liên hệ mới</title>
    <style>
        :root {
            color-scheme: light;
        }

        body {
            background: #f2f6ff;
            margin: 0;
            padding: 32px 12px;
            font-family: 'Segoe UI', Arial, sans-serif;
            color: #0f172a;
        }

        .mail-wrapper {
            max-width: 720px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 20px 45px rgba(15, 23, 42, 0.12);
        }

        .mail-header {
            background: linear-gradient(135deg, #1d4ed8, #3b82f6);
            color: #ffffff;
            padding: 32px;
        }

        .mail-header h1 {
            margin: 0 0 8px;
            font-size: 24px;
            font-weight: 600;
        }

        .mail-header p {
            margin: 0;
            font-size: 15px;
            opacity: 0.9;
        }

        .mail-body {
            padding: 32px;
        }

        .info-grid {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }

        .info-grid th,
        .info-grid td {
            padding: 14px 18px;
            text-align: left;
            font-size: 15px;
            border-bottom: 1px solid #e2e8f0;
        }

        .info-grid th {
            width: 40%;
            color: #475569;
            font-weight: 600;
            background: #f8fafc;
        }

        .info-grid tr:last-child th,
        .info-grid tr:last-child td {
            border-bottom: none;
        }

        .request-box {
            margin-top: 28px;
            padding: 20px;
            background: #f8fafc;
            border-radius: 16px;
            border: 1px solid #e2e8f0;
        }

        .request-box h3 {
            margin: 0 0 12px;
            font-size: 16px;
            color: #0f172a;
        }

        .request-box p {
            margin: 0;
            line-height: 1.6;
            white-space: pre-line;
            color: #334155;
        }
    </style>
</head>

<body>
    @php
        $regions = [
            'north' => 'Miền Bắc',
            'central' => 'Miền Trung',
            'south' => 'Miền Nam',
        ];

        $regionName = $regions[$data['region'] ?? ''] ?? ($data['region'] ?? 'Không rõ');
    @endphp

    <div class="mail-wrapper">
        <div class="mail-header">
            <h1>Liên hệ với chúng tôi để bắt đầu chuyển đổi số</h1>
            <p>Bạn vừa nhận được một yêu cầu mới từ website.</p>
        </div>

        <div class="mail-body">
            <table class="info-grid">
                <tr>
                    <th>Họ và tên</th>
                    <td>{{ $data['full_name'] ?? 'Không rõ' }}</td>
                </tr>
                <tr>
                    <th>Tên công ty</th>
                    <td>{{ $data['company'] ?? 'Không cung cấp' }}</td>
                </tr>
                <tr>
                    <th>Email công việc</th>
                    <td>{{ $data['email'] ?? 'Không rõ' }}</td>
                </tr>
                <tr>
                    <th>Số điện thoại</th>
                    <td>{{ $data['phone'] ?? 'Không rõ' }}</td>
                </tr>
                <tr>
                    <th>Khu vực</th>
                    <td>{{ $regionName }}</td>
                </tr>
            </table>

            <div class="request-box">
                <h3>Yêu cầu cụ thể</h3>
                <p>{{ $data['request'] ?? 'Người dùng không cung cấp yêu cầu cụ thể.' }}</p>
            </div>
        </div>
    </div>
</body>

</html>