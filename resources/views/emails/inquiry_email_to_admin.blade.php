<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry Received</title>
</head>

<body>
    <table border="0" width="100%" cellspacing="0" cellpadding="0">
        <tbody><!-- Header --> <!-- Message Body -->
            <tr>
                <td align="center" valign="top">
                    <table style="max-width: 620px; background-color: #fff;" border="0" width="100%" cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td style="padding: 0px 40px 70px;" align="center" valign="top">
                                    <p style="font-family: 1Poppins\', sans-serif; color: rgba(0, 0, 0, 0.8); font-size: 20px; font-weight: 600; text-align: left; line-height: 27px; font-style: normal;">Hi Admin, a user sent inquiry to Coodevo with following details:</p>
                                    <p style="font-family: 1Poppins\', sans-serif; color: #000000; font-size: 16px; line-height: 24px; text-align: left; font-weight: 400;">Email : {{ $inquiry->email }}</p>
                                    <p style="font-family: 1Poppins\', sans-serif; color: #000000; font-size: 16px; line-height: 24px; text-align: left; font-weight: 400;">Name : {{ $inquiry->name }}</p>
                                    <p style="font-family: 1Poppins\', sans-serif; color: #000000; font-size: 16px; line-height: 24px; text-align: left; font-weight: 400;">Phone : {{ $inquiry->phone }}</p>
                                    <p style="font-family: 1Poppins\', sans-serif; color: #000000; font-size: 16px; line-height: 24px; text-align: left; font-weight: 400;">Subject : {{ $inquiry->subject }}</p>
                                    <p style="font-family: 1Poppins\', sans-serif; color: #000000; font-size: 16px; line-height: 24px; text-align: left; font-weight: 400;">Message : {{ $inquiry->message }}</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>