<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <h1>
        <h1>
            <div style="position: relative; margin: 0 auto;/*background-image: url('<?php echo base_url(); ?>/public/admin/img/email_bg1.jpg');*/background: #ebdaff;
    background-size: cover;background-position: center; position: relative;max-width: 602px;">

                <table border="0" cellpadding="0" cellspacing="0" style="max-width: 602px;width: 100%;    border: 1px solid #00008c;" align="center">

                    <tr>
                        <td style="position: relative;
              height: 50px; padding: 35px 0;" align="center" valign="middle">
                            <div style="  position: absolute; top: 15%; display: flex;align-items: center; padding: 0px 1px;width: 100%;left: 0%;">
                                <img src="<?php echo base_url(); ?>/public/assets/images/ntoi/original_logo.png" style=" width: 20%;padding-top: 3px;">
                                <p style="font-size: 23px; font-family: sans-serif,Poppins;font-weight: 600; color: #00008c;
                        margin: 0px; padding: 0px 15px;line-height: 24px;">NATIONAL TALENT OF INDIA</p>
                                <img src="<?php echo base_url(); ?>/public/assets/images/ntoi/original_logo.png" style=" width: 20%;padding-top: 3px;">
                            </div>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td align="left">
                            <p style="font-size: 21px; font-family: Poppins; font-weight: 600; border-bottom: 2px solid #cd2f2e; padding: 0px 18px 5px; text-align: center; margin-bottom: 0; margin-top: 20px;color: blue;">
                                Project : Govt. GCRT </p>
                        </td>
                    </tr>
                    <tr>
                        <td align="left">
                            <p style="font-size: 16px; font-family: Poppins; font-weight: 600; border-bottom: 2px solid #cd2f2e; padding: 0px 18px 5px; text-align: center; margin-bottom: 0; margin-top: 20px;">
                                State Govt. Agency under Department of Energy </p>
                        </td>
                    </tr> -->
                    <!-- <tr>
                        <p style="font-size:14px;font-family:Poppins;margin: 10px 0px 10px;">
                            <?// echo $data['salutation'];?></p>
                    </tr> -->
                    <tr>
                        <td style="padding:0px 20px;" align="left">
                            <p style="font-size:14px;font-family:Poppins;margin: 10px 0px 10px;">
                                <?php // echo $data['message'];
                                ?>
                                <!-- <span>
                            <a href="#">Click here</a>
                        </span> -->
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td style=" padding: 0px 20px 15px 20px;">
                            <table style=" border: 1px solid black; vertical-align: middle; border-collapse: collapse;
                    padding: 0px 20px; width: 100%;background: white;">
                                <tr style="border: 1px solid #a7a7a7;padding:5px;vertical-align: middle; ">
                                    <td colspan="4" style="border: 1px solid #a7a7a7;width: 25%;line-height: 1.5;padding:5px;width: 150px;font-family:sans-serif,Poppins; vertical-align: middle;font-size: 14px;font-weight: 400; background: #fff;">
                                    <?= (isset($data['message'])) ? $data['message'] : ''; ?>
                                    </td>
                                </tr>

                                <tr style="border: 1px solid #a7a7a7;padding:5px;vertical-align: middle; ">
                                    <td colspan="4" style="border: 1px solid #a7a7a7; padding:5px;background: #ffffff;vertical-align: middle;font-weight: 600;font-family:sans-serif,Poppins;   font-size: 14px;">
                                        <a href='<?= (isset($data['token'])) ? $data['token'] : '#'; ?>' target="_blank">Click here to verify your registration</a>
                                    </td>
                                    <!-- <td colspan="4" style="border: 1px solid #a7a7a7;padding:5px;vertical-align: middle;font-family:sans-serif,Poppins;font-size: 14px; ">
                                        <?php  //echo $data['otp']; 
                                        ?>
                                    </td> -->
                                    <!-- <td style="border: 1px solid #a7a7a7; padding:5px;background: #cfd6f6;vertical-align: middle;font-weight: 600;font-family:Poppins;   font-size: 14px;">
                                        Contractor:
                                    </td>
                                    <td style="border: 1px solid #a7a7a7;padding:5px;vertical-align: middle;font-family:Poppins;font-size: 14px; ">
                                        <?php // echo $data['contractor'] 
                                        ?>
                                    </td> -->
                                </tr>
                                <!-- <tr style="border: 1px solid #a7a7a7;padding:5px;vertical-align: middle; ">
                                    <td style="border: 1px solid #a7a7a7; padding:5px;background: #cfd6f6;vertical-align: middle;font-weight: 600;font-family:Poppins;   font-size: 14px;">
                                        District:
                                    </td>
                                    <td style="border: 1px solid #a7a7a7;padding:5px;vertical-align: middle;font-family:Poppins;font-size: 14px; ">
                                        <?php // echo $data['district'] 
                                        ?>
                                    </td>
                                    <td style="border: 1px solid #a7a7a7; padding:5px;background: #cfd6f6;vertical-align: middle;font-weight: 600;font-family:Poppins;   font-size: 14px;">
                                        Sub Division:
                                    </td>
                                    <td style="border: 1px solid #a7a7a7;padding:5px;vertical-align: middle;font-family:Poppins;font-size: 14px; ">
                                        <?php // echo $data['sub_division'] 
                                        ?>
                                    </td>
                                </tr> -->
                                <!-- <tr style="border: 1px solid #a7a7a7;padding:5px;vertical-align: middle; ">
                                    <td style="border: 1px solid #a7a7a7; padding:5px;background: #cfd6f6;vertical-align: middle;font-weight: 600;font-family:Poppins;   font-size: 14px;">
                                        Panchayat:
                                    </td>
                                    <td style="border: 1px solid #a7a7a7;padding:5px;vertical-align: middle;font-family:Poppins;font-size: 14px; ">
                                        <?php // echo $data['panchayat'] 
                                        ?>
                                    </td>
                                    <td style="border: 1px solid #a7a7a7; padding:5px;background: #cfd6f6;vertical-align: middle;font-weight: 600;font-family:Poppins;   font-size: 14px;">
                                        Issue Type:
                                    </td>
                                    <td style="border: 1px solid #a7a7a7;padding:5px;vertical-align: middle;font-family:Poppins;font-size: 14px; ">
                                        <?php // echo $data['issue_type'] 
                                        ?>
                                    </td>
                                    <td style="border: 1px solid #a7a7a7; padding:5px;background: #cfd6f6;vertical-align: middle;font-weight: 600;font-family:Poppins;   font-size: 14px;">
                                        GPS Location:
                                    </td>
                                    <td style="border: 1px solid #a7a7a7;padding:5px;vertical-align: middle;font-family:Poppins;font-size: 14px; ">

                                        <a href="#">Direction</a>

                                    </td>
                                </tr> -->
                                <!-- <tr style="border: 1px solid #a7a7a7;padding:5px;vertical-align: middle; ">
                                    <td style="border: 1px solid #a7a7a7; padding:5px;background: #cfd6f6;vertical-align: middle;font-weight: 600;font-family:Poppins;   font-size: 14px;">
                                        Created by:
                                    </td>
                                    <td style="border: 1px solid #a7a7a7;padding:5px;vertical-align: middle;font-family:Poppins;font-size: 14px; ">
                                        <?php // echo $data['created_by'] 
                                        ?>
                                    </td>
                                    <td style="border: 1px solid #a7a7a7; padding:5px;background: #cfd6f6;vertical-align: middle;font-weight: 600;font-family:Poppins;   font-size: 14px;">
                                        Mobile:
                                    </td>
                                    <td style="border: 1px solid #a7a7a7;padding:5px;vertical-align: middle;font-family:Poppins;font-size: 14px; ">
                                        <?php // echo $data['mobile'] 
                                        ?>
                                    </td>
                                </tr> -->
                                <!-- <tr style="border: 1px solid #a7a7a7;padding:5px;vertical-align: middle; ">
                                    <td style="border: 1px solid #a7a7a7; padding:5px;background: #cfd6f6;vertical-align: middle;font-weight: 600;font-family:Poppins;   font-size: 14px;">
                                        Created on:
                                    </td>
                                    <td style="border: 1px solid #a7a7a7;padding:5px;vertical-align: middle;font-family:Poppins;font-size: 14px; ">
                                        <?php // echo $data['created_on'] 
                                        ?>
                                    </td>
                                </tr>
                                <?php if (true) { ?>
                                    <tr style="border: 1px solid #a7a7a7;padding:5px;vertical-align: middle; ">
                                        <td style="border: 1px solid #a7a7a7; padding:5px;background: #cfd6f6;vertical-align: middle;font-weight: 600;font-family:Poppins;   font-size: 14px;">
                                            Remarks:
                                        </td>
                                        <td colspan="3" style="word-break: break-all;border: 1px solid #a7a7a7;padding:5px;vertical-align: middle;font-family:Poppins;font-size: 14px; ">
                                            <?php // echo $data['description'] 
                                            ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                                <?php if (true) { ?>
                                    <tr style="border: 1px solid #a7a7a7;padding:5px;vertical-align: middle; ">
                                        <td style="border: 1px solid #a7a7a7; padding:5px;background: #cfd6f6;vertical-align: middle;font-weight: 600;font-family:Poppins;   font-size: 14px;">
                                            Closure Date(expected):
                                        </td>
                                        <td style="border: 1px solid #a7a7a7;padding:5px;vertical-align: middle;font-family:Poppins;font-size: 14px; ">
                                            <?php // echo $data['clouser_date'] 
                                            ?>
                                        </td>
                                    </tr>

                                <?php
                                } ?>
                                <?php if (true) { ?>
                                    <tr style="border: 1px solid #a7a7a7;padding:5px;vertical-align: middle; ">
                                        <td style="border: 1px solid #a7a7a7; padding:5px;background: #cfd6f6;vertical-align: middle;font-weight: 600;font-family:Poppins;   font-size: 14px;">
                                            Status Upadted:
                                        </td>
                                        <td colspan="3" style="word-break: break-all;border: 1px solid #a7a7a7;padding:5px;vertical-align: middle;font-family:Poppins;font-size: 14px; ">
                                            <?php // echo $data['status_updated'] 
                                            ?>
                                        </td>
                                    </tr>
                                    <tr style="border: 1px solid #a7a7a7;padding:5px;vertical-align: middle; ">
                                        <td style="border: 1px solid #a7a7a7; padding:5px;background: #cfd6f6;vertical-align: middle;font-weight: 600;font-family:Poppins;   font-size: 14px;">
                                            Remarks Updated:
                                        </td>
                                        <td colspan="3" style="word-break: break-all;border: 1px solid #a7a7a7;padding:5px;vertical-align: middle;font-family:Poppins;font-size: 14px; ">
                                            <?php // echo $data['updated_remark'] 
                                            ?>
                                        </td>
                                    </tr>
                                <?php } ?> -->
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
</body>

</html>