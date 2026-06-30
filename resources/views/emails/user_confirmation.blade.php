<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quote Request Received</title>
    <style>
        body {
            font-family: 'DM Sans', Arial, sans-serif;
            background-color: #f4f5f7;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 30px auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        .header {
            background-color: #000000;
            padding: 30px;
            text-align: center;
            border-bottom: 4px solid #fcdb65;
        }
        .header h2 {
            margin: 0;
            color: #ffffff;
            font-size: 24px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .header p {
            margin: 5px 0 0 0;
            color: #fcdb65;
            font-size: 14px;
            font-weight: bold;
        }
        .content {
            padding: 40px 30px;
        }
        .content h3 {
            margin-top: 0;
            color: #000000;
            font-size: 20px;
            margin-bottom: 15px;
        }
        .content p {
            color: #555555;
            font-size: 15px;
            line-height: 1.7;
            margin-bottom: 25px;
        }
        .summary-box {
            background-color: #fcfcfc;
            border: 1px dashed #cccccc;
            padding: 20px;
            border-radius: 6px;
            margin-bottom: 30px;
        }
        .summary-box h4 {
            margin: 0 0 15px 0;
            color: #000000;
            font-size: 16px;
            border-bottom: 1px solid #eeeeee;
            padding-bottom: 8px;
        }
        .summary-list {
            margin: 0;
            padding: 0;
            list-style: none;
            font-size: 14px;
        }
        .summary-list li {
            margin-bottom: 8px;
            color: #333333;
        }
        .summary-list strong {
            color: #555555;
        }
        .btn-container {
            text-align: center;
            margin-bottom: 30px;
        }
        .btn-whatsapp {
            display: inline-block;
            background-color: #25d366;
            color: #ffffff !important;
            padding: 12px 25px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
            font-size: 15px;
            box-shadow: 0 4px 10px rgba(37, 211, 102, 0.2);
            transition: background 0.3s ease;
        }
        .btn-whatsapp:hover {
            background-color: #128c7e;
        }
        .contact-footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eeeeee;
            font-size: 13px;
            color: #666666;
            line-height: 1.6;
        }
        .footer {
            background-color: #f4f5f7;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #888888;
            border-top: 1px solid #eeeeee;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Wumiyin & Mase</h2>
            <p>Quote Request Received</p>
        </div>
        <div class="content">
            <h3>Hello {{ $submission->name }},</h3>
            <p>
                Thank you for reaching out to WUMIYIN & MASE NIGERIA LIMITED. We have received your request for a logistics consultation and quote. Our experienced compliance and logistics specialists are already reviewing your details.
            </p>

            <div class="summary-box">
                <h4>Summary of your request:</h4>
                <ul class="summary-list">
                    <li><strong>Service:</strong> {{ $submission->service }}</li>
                    @if($submission->origin)
                        <li><strong>Origin:</strong> {{ $submission->origin }}</li>
                    @endif
                    @if($submission->destination)
                        <li><strong>Destination:</strong> {{ $submission->destination }}</li>
                    @endif
                </ul>
            </div>

            <p>
                Need to chat with us immediately or share additional documentation? You can click the button below to connect with us directly on WhatsApp:
            </p>

            <div class="btn-container">
                <a href="https://wa.me/2348069675585" class="btn-whatsapp" target="_blank">
                    💬 Chat on WhatsApp
                </a>
            </div>

            <div class="contact-footer">
                <strong>WUMIYIN & MASE NIGERIA LIMITED</strong><br>
                📍 Wing A Block 1, Office 006 NAHCO COMPLEX, MM Int'l Airport Ikeja Lagos Nigeria<br>
                📞 +234 806 967 5585, &nbsp; +234 703 739 5331<br>
                ✉️ <a href="mailto:info@wumiyinmase.com" style="color: #000000; font-weight: bold;">info@wumiyinmase.com</a>
            </div>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} WUMIYIN & MASE NIGERIA LIMITED. All Rights Reserved.
        </div>
    </div>
</body>
</html>
