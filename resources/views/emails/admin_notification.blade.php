<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Quote Request</title>
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
            border-bottom: 2px solid #fcdb65;
            padding-bottom: 10px;
            font-size: 18px;
        }
        .details-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .details-table th, .details-table td {
            text-align: left;
            padding: 12px;
            border-bottom: 1px solid #eeeeee;
        }
        .details-table th {
            width: 35%;
            color: #555555;
            font-weight: bold;
            background-color: #fcfcfc;
        }
        .details-table td {
            color: #111111;
        }
        .message-box {
            margin-top: 25px;
            background-color: #fcfcfc;
            border-left: 4px solid #fcdb65;
            padding: 20px;
            border-radius: 0 4px 4px 0;
        }
        .message-box h4 {
            margin: 0 0 10px 0;
            color: #000000;
            font-size: 16px;
        }
        .message-box p {
            margin: 0;
            color: #333333;
            line-height: 1.6;
            white-space: pre-wrap;
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
            <p>New Quote & Consultation Request</p>
        </div>
        <div class="content">
            <h3>Request Details</h3>
            <table class="details-table">
                <tr>
                    <th>Customer Name</th>
                    <td>{{ $submission->name }}</td>
                </tr>
                <tr>
                    <th>Email Address</th>
                    <td><a href="mailto:{{ $submission->email }}">{{ $submission->email }}</a></td>
                </tr>
                <tr>
                    <th>Phone Number</th>
                    <td><a href="tel:{{ $submission->phone }}">{{ $submission->phone }}</a></td>
                </tr>
                <tr>
                    <th>Service Needed</th>
                    <td><strong>{{ $submission->service }}</strong></td>
                </tr>
                <tr>
                    <th>Origin</th>
                    <td>{{ $submission->origin ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Destination</th>
                    <td>{{ $submission->destination ?? 'N/A' }}</td>
                </tr>
            </table>

            <div class="message-box">
                <h4>Message / Instructions:</h4>
                <p>{{ $submission->message }}</p>
            </div>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} WUMIYIN & MASE NIGERIA LIMITED. All Rights Reserved.
        </div>
    </div>
</body>
</html>
