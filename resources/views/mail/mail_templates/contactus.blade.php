<html>

<head></head>

<body>
    <p class="yiv7050401279MsoNormal">&nbsp;</p>
    <table class="yiv7050401279MsoNormalTable" style="width: 100.0%;" border="0" width="100%" cellspacing="0"
        cellpadding="0">
        <tbody>
            <tr style="min-height: 22.5pt;">
                <td style="width: 418.5pt; background: #7C1BEC;" colspan="4" valign="top" width="743"><strong><span
                            style="font-size: 15.0pt; font-family: Calibri,sans-serif; color: white; padding-left: 10px; float: left;">&nbsp;
                            Sk Property</span></strong>
                    <p>&nbsp;</p>
                </td>
            </tr>
            <tr style="min-height: 22.5pt;">
                <td style="border: solid #DFE0E2 1.0pt; padding: 0in 0in 0in 0in; min-height: 22.5pt;" colspan="4
                                                                                                    ">


                    <p class="yiv7050401279MsoNormal" style="margin-bottom: 12.0pt;"><span
                            style="font-size: 10.0pt;"><strong>&nbsp; &nbsp;Contact request Submitted
                                Successfully</strong></span>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
    <table class="yiv7050401279MsoNormalTable" style="width: 100.0%;" border="1" width="100%" cellspacing="3"
        cellpadding="0">
        <tbody>
            <tr style="min-height: 22.5pt;">
                <td style="border: solid #DFE0E2 1.0pt; padding: .75pt .75pt .75pt .75pt; min-height: 22.5pt;">
                    <p class="yiv7050401279MsoNormal"><span style="font-size: 9.0pt;">&nbsp; <strong>Company
                                Name</strong></span></p>
                </td>
                <td style="border: solid #DFE0E2 1.0pt; padding: .75pt .75pt .75pt .75pt; min-height: 22.5pt;">
                    <p class="yiv7050401279MsoNormal"><span style="font-size: 9.0pt;">&nbsp; &nbsp; Sk Realestate</span>
                    </p>
                </td>
            </tr>
            <tr style="min-height: 22.5pt;">
                <td style="border: solid #DFE0E2 1.0pt; padding: .75pt .75pt .75pt .75pt; min-height: 22.5pt;">
                    <p class="yiv7050401279MsoNormal"><span style="font-size: 9.0pt;">&nbsp; <strong>Notification
                                Date</strong></span></p>
                </td>
                <td style="border: solid #DFE0E2 1.0pt; padding: .75pt .75pt .75pt .75pt; min-height: 22.5pt;">
                    <p class="yiv7050401279MsoNormal">
                        <span style="font-size: 9.0pt;">&nbsp; &nbsp;</span>{{ \Carbon\Carbon::now()->format('Y-m-d') }}
                    </p>
                </td>

            </tr>


            <tr style="min-height: 22.5pt;">
                <td style="border: solid #DFE0E2 1.0pt; padding: .75pt .75pt .75pt .75pt; min-height: 22.5pt;">
                    <p class="yiv7050401279MsoNormal"><span style="font-size: 9.0pt;">&nbsp; <strong>Name
                            </strong></span></p>
                </td>
                <td style="border: solid #DFE0E2 1.0pt; padding: .75pt .75pt .75pt .75pt; min-height: 22.5pt;">
                    <p class="yiv7050401279MsoNormal"><span style="font-size: 9.0pt;">&nbsp; &nbsp;{{
                            $contactData['fullName']
                            }}</span>
                    </p>
                </td>
            </tr>


            <tr style="min-height: 22.5pt;">
                <td style="border: solid #DFE0E2 1.0pt; padding: .75pt .75pt .75pt .75pt; min-height: 22.5pt;">
                    <p class="yiv7050401279MsoNormal"><span style="font-size: 9.0pt;">&nbsp; <strong>Email
                            </strong></span></p>
                </td>
                <td style="border: solid #DFE0E2 1.0pt; padding: .75pt .75pt .75pt .75pt; min-height: 22.5pt;">
                    <p class="yiv7050401279MsoNormal"><span style="font-size: 9.0pt;">&nbsp; &nbsp;{{
                            $contactData['email']
                            }}</span>
                    </p>
                </td>
            </tr>



            <tr style="min-height: 22.5pt;">
                <td style="border: solid #DFE0E2 1.0pt; padding: .75pt .75pt .75pt .75pt; min-height: 22.5pt;">
                    <p class="yiv7050401279MsoNormal"><span style="font-size: 9.0pt;">&nbsp; <strong>Subject
                            </strong></span></p>
                </td>
                <td style="border: solid #DFE0E2 1.0pt; padding: .75pt .75pt .75pt .75pt; min-height: 22.5pt;">
                    <p class="yiv7050401279MsoNormal"><span style="font-size: 9.0pt;">&nbsp;
                            &nbsp;{{ $contactData['subject']}}</span></p>
                </td>
            </tr>
            <tr style="min-height: 22.5pt;">
                <td style="border: solid #DFE0E2 1.0pt; padding: .75pt .75pt .75pt .75pt; min-height: 22.5pt;">
                    <p class="yiv7050401279MsoNormal"><span style="font-size: 9.0pt;">&nbsp; <strong>Message
                            </strong></span></p>
                </td>
                <td style="border: solid #DFE0E2 1.0pt; padding: .75pt .75pt .75pt .75pt; min-height: 22.5pt;">
                    <p class="yiv7050401279MsoNormal"><span style="font-size: 9.0pt;">&nbsp;
                            &nbsp;{{$contactData['message']}}</span></p>
                </td>
            </tr>





        </tbody>
    </table>



    <table class="yiv7050401279MsoNormalTable" style="width: 100.0%; border-collapse: collapse;" border="0" width="100%"
        cellspacing="0" cellpadding="0">
        <tbody>
            <!--<tr style="min-height: 26.25pt;">
            <td style="border: solid #DFE0E2 1.0pt; border-top: none; padding: 0in 0in 0in 11.25pt; min-height: 26.25pt;" colspan="8">
                <div>
                    <p class="yiv7050401279MsoNormal" style="margin-bottom: 6.0pt;"><strong><span style="font-size: 9.0pt; color: #003366;">[HEADING_DETAIL]</span></strong></p>
                </div>
            </td>
        </tr>-->


            <tr>
                <td style="width: 445.5pt; background: #F2F2F2; padding: 0in 5.4pt 0in 5.4pt;" colspan="8" valign="top"
                    width="743">
                    <p align="center">Copyright (c) 2024, SkProperty . All rights reserved.</p>
                </td>

            </tr>
        </tbody>
    </table>
</body>

</html>