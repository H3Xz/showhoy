<!DOCTYPE html>
<html lang="th">
    <head>
            <?php 
                    $xml = simplexml_load_file('https://www.lottery.co.th/feed');
                    $value = (string) $xml->channel->item[0]->title;
            ?>
    </head>

    <?php
        function thai_lottery_table_shortcode($yearNow) {

            $curl = curl_init();
        
            curl_setopt_array($curl, [
                //CURLOPT_URL => "https://thai-lottery1.p.rapidapi.com/gdpy?year=2564",
                CURLOPT_URL => "https://thai-lottery1.p.rapidapi.com/gdpy?year=$yearNow",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "X-RapidAPI-Host: thai-lottery1.p.rapidapi.com",
                    "X-RapidAPI-Key: be72945233msha7f60a56f8df87ep18f7bcjsn366b4116954e",
                    "content-type: application/octet-stream"
                ],
            ]);
        
            $response = curl_exec($curl);
            $err = curl_error($curl);
        
            curl_close($curl);
        
            if ($err) {
                return "cURL Error #:" . $err;
            } else {
                $data = json_decode($response, true); // แปลง JSON เป็น associative array
                if (is_array($data)) {
                    // ถ้า $data เป็น array ให้ทำการ loop และสร้าง HTML ตาราง
                    $html = '<table><thead><tr><th>วันที่</th><th>รางวัลที่ 1</th><th>รางวัลเลขท้าย 2 ตัว</th></tr></thead><tbody>';
                    
                return $data;
                } else {
                    // ถ้า $data ไม่ใช่ array ให้ส่ง error message กลับไปแสดงผล
                    return "Error: Cannot decode JSON response from API.";
                }

                $html = '<table><thead><tr><th>วันที่</th><th>รางวัลที่ 1</th><th>รางวัลเลขท้าย 2 ตัว</th></tr></thead><tbody>';
                
            }
            return $data;
        }
        //add_shortcode( 'thai_lottery_table', 'thai_lottery_table_shortcode' );
        
    ?>

    <body class="home blog  wide">
        <div id="page" class="hfeed site">
            <div id="main" class="clearfix">
                <?php
                    date_default_timezone_set('asia/bangkok');                  
                    $year = date('Y'); // 2023
                    $yearNow = intval($year)+543;                        //get yearNow yearThai
                   // echo $yearNow;                                          

                    $responseYear = array();
                    $responseYears = array();
                    
                    for($i=$yearNow;$i>2540;$i--){
                        $responseYear[$i] = thai_lottery_table_shortcode($i);
                       // var_dump($responseYear[$i])
                        //$responseYears[$i] = implode(',', $responseYear[$i]);
                        for($j=count($responseYear[$i])-1;$j>=0;$j--){
                            
                            $rpDay[$i][$j] = substr($responseYear[$i][$j],0,2); 
                            $rpMonth[$i][$j] = substr($responseYear[$i][$j],2,2); 
                            // echo $rpDay[$i][$j];
                            // echo '   ';
                            // echo $rpMonth[$i][$j];
                            // echo "<br>";
                        }
                        // echo "<br>";
                        //echo $yearNow;
                    }    
                ?>
                    <table class="table table-hover text-nowrap" id="attribute_table">
                            <h3 class="widget-title">
                                <thead>
                                    <tr>
                                        <th>ปี</th>
                                        <th>วัน / เดือน</th>
                                    </tr>
                                </thead>

                                <tr id="row1">
                                    <td>
                                        <select id="year" name="year" class="form-control-year">
                                            <?php
                                                echo "<option value=''>ปี</option>";
                                                // Generate options for year dropdown
                                                for ($i = $yearNow; $i > 2540; $i--) {                           //หาค่าปีแล้วดึงมาใส่ซะ
                                                    if($i == $yearNow){
                                                        //$j = $i - 543;
                                                        echo "<option value='$i' selected>$i</option>";
                                                    }
                                                    else if($i != intval($yearNow)){
                                                        //$j = $i - 543;
                                                        echo "<option value='$i'>$i</option>";
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </td>
                                    <?php
                                        $monthTh = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน",
                                                    "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];
                                        //echo count($responseYears);
                                        //echo $responseYears[0];
                                    ?>
                                    <td>
                                        <select name="day" id="day_value" class="form-control-day-value">
                                            <?php 
                                                echo "<option value=''>วัน / เดือน</option>";

                                                for($i=$yearNow;$i>2540;$i--){                                             // value year
                                                    for($j=count($responseYear[$i])-1;$j>=0;$j--){   
                                                        $rpDay[$i][$j] = substr($responseYear[$i][$j],0,2); 
                                                        $rpADay = $rpDay[$i][$j];
                                                        $rpMonth[$i][$j] = substr($responseYear[$i][$j],2,2);
                                                        $rpMonthInt = intval( $rpMonth[$i][$j]) - 1;

                                                        if(($i==$yearNow) && ($j==count($responseYear[$i])-1)){
                                                            echo "<option data-parent='$i' value='$rpADay,$rpMonthInt' selected>
                                                            $rpADay".' / '."$monthTh[$rpMonthInt]
                                                        </option>"; ?><br><?php
                                                        }
                                                        else{
                                                            echo "<option data-parent='$i' value='$rpADay,$rpMonthInt'>
                                                            $rpADay".' / '."$monthTh[$rpMonthInt]
                                                        </option>"; ?><br><?php
                                                        }
                                                            
                                                    }    
                                                }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                            </h3>
                                    <div class="textwidget custom-html-widget">
                                        <div class="entry-content">
                                            <div class="table-responsive">
                                                <table id="reward1" class="easy-table easy-table-default table">
                                                    <caption>
                                                        รางวัลที่ 1<br/>มี 1 รางวัลๆละ 6,000,000 บาท
                                                    </caption>
                                                    <tbody id="info">
                                                        <tr>
                                                            <td>087907</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="table-responsive">
                                                <table id="nearreward1" class="easy-table easy-table-default table">
                                                    <caption>
                                                        รางวัลข้างเคียงรางวัลที่ 1<br/>มี 2 รางวัลๆละ 100,000 บาท
                                                    </caption>
                                                    <tbody>
                                                        <tr>
                                                            <td>087906</td>
                                                            <td>087908</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="table-responsive">
                                                <table id="reward2" class="easy-table easy-table-default table">
                                                    <caption>
                                                        ผลสลาก รางวัลที่ 2<br/>มี 5 รางวัลๆละ 200,000 บาท
                                                    </caption>
                                                    <tbody>
                                                        <tr>
                                                            <td>108675</td>
                                                            <td>196954</td>
                                                            <td>250149</td>
                                                            <td>309743</td>
                                                            <td>805914</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="table-responsive">
                                                <table id="reward3" class="easy-table easy-table-default table">
                                                    <caption>
                                                        ผลสลาก รางวัลที่ 3<br/>มี 10 รางวัลๆละ 80,000 บาท
                                                    </caption>
                                                    <tbody>
                                                        <tr>
                                                            <td>038539</td>
                                                            <td>107827</td>
                                                            <td>212379</td>
                                                            <td>316883</td>
                                                            <td>352585</td>
                                                        </tr>
                                                        <tr>
                                                            <td>362424</td>
                                                            <td>529206</td>
                                                            <td>551768</td>
                                                            <td>715548</td>
                                                            <td>769712</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="table-responsive">
                                                <table id="reward4" class="easy-table easy-table-default table">
                                                    <caption>
                                                        ผลสลาก รางวัลที่ 4<br/>มี 50 รางวัลๆละ 40,000 บาท
                                                    </caption>
                                                    <tbody>
                                                        <tr>
                                                            <td>035885</td>
                                                            <td>056080</td>
                                                            <td>060689</td>
                                                            <td>079640</td>
                                                            <td>137670</td>
                                                        </tr>
                                                        <tr>
                                                            <td>141530</td>
                                                            <td>155329</td>
                                                            <td>179111</td>
                                                            <td>200071</td>
                                                            <td>200760</td>
                                                        </tr>
                                                        <tr>
                                                            <td>214808</td>
                                                            <td>219843</td>
                                                            <td>224219</td>
                                                            <td>233961</td>
                                                            <td>240022</td>
                                                        </tr>
                                                        <tr>
                                                            <td>282700</td>
                                                            <td>286399</td>
                                                            <td>289055</td>
                                                            <td>316115</td>
                                                            <td>319181</td>
                                                        </tr>
                                                        <tr>
                                                            <td>378089</td>
                                                            <td>387188</td>
                                                            <td>399332</td>
                                                            <td>426109</td>
                                                            <td>445688</td>
                                                        </tr>
                                                        <tr>
                                                            <td>446793</td>
                                                            <td>461495</td>
                                                            <td>471524</td>
                                                            <td>495593</td>
                                                            <td>520212</td>
                                                        </tr>
                                                        <tr>
                                                            <td>581827</td>
                                                            <td>597800</td>
                                                            <td>615972</td>
                                                            <td>618938</td>
                                                            <td>620544</td>
                                                        </tr>
                                                        <tr>
                                                            <td>629482</td>
                                                            <td>691942</td>
                                                            <td>695871</td>
                                                            <td>723169</td>
                                                            <td>731192</td>
                                                        </tr>
                                                        <tr>
                                                            <td>749558</td>
                                                            <td>760291</td>
                                                            <td>773341</td>
                                                            <td>776468</td>
                                                            <td>778250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>798449</td>
                                                            <td>832248</td>
                                                            <td>912239</td>
                                                            <td>914923</td>
                                                            <td>925280</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="table-responsive">
                                                <table id="reward5" class="easy-table easy-table-default table">
                                                    <caption>
                                                        ผลสลาก รางวัลที่ 5<br/>มี 100 รางวัลๆละ 20,000 บาท
                                                    </caption>
                                                    <tbody>
                                                        <tr>
                                                            <td>006519</td>
                                                            <td>009898</td>
                                                            <td>010376</td>
                                                            <td>014290</td>
                                                            <td>014589</td>
                                                        </tr>
                                                        <tr>
                                                            <td>018117</td>
                                                            <td>044610</td>
                                                            <td>058231</td>
                                                            <td>068624</td>
                                                            <td>092653</td>
                                                        </tr>
                                                        <tr>
                                                            <td>096227</td>
                                                            <td>108849</td>
                                                            <td>110138</td>
                                                            <td>136409</td>
                                                            <td>136889</td>
                                                        </tr>
                                                        <tr>
                                                            <td>141406</td>
                                                            <td>156691</td>
                                                            <td>173884</td>
                                                            <td>174755</td>
                                                            <td>198655</td>
                                                        </tr>
                                                        <tr>
                                                            <td>202603</td>
                                                            <td>228794</td>
                                                            <td>229106</td>
                                                            <td>243494</td>
                                                            <td>243870</td>
                                                        </tr>
                                                        <tr>
                                                            <td>244277</td>
                                                            <td>254155</td>
                                                            <td>254451</td>
                                                            <td>264393</td>
                                                            <td>271902</td>
                                                        </tr>
                                                        <tr>
                                                            <td>276878</td>
                                                            <td>295474</td>
                                                            <td>297612</td>
                                                            <td>303362</td>
                                                            <td>318054</td>
                                                        </tr>
                                                        <tr>
                                                            <td>329146</td>
                                                            <td>336620</td>
                                                            <td>346718</td>
                                                            <td>347094</td>
                                                            <td>348838</td>
                                                        </tr>
                                                        <tr>
                                                            <td>351838</td>
                                                            <td>351946</td>
                                                            <td>353376</td>
                                                            <td>353513</td>
                                                            <td>354120</td>
                                                        </tr>
                                                        <tr>
                                                            <td>354986</td>
                                                            <td>390637</td>
                                                            <td>404061</td>
                                                            <td>415662</td>
                                                            <td>441625</td>
                                                        </tr>
                                                        <tr>
                                                            <td>448756</td>
                                                            <td>453902</td>
                                                            <td>456828</td>
                                                            <td>492817</td>
                                                            <td>495859</td>
                                                        </tr>
                                                        <tr>
                                                            <td>521547</td>
                                                            <td>525829</td>
                                                            <td>526829</td>
                                                            <td>528850</td>
                                                            <td>531959</td>
                                                        </tr>
                                                        <tr>
                                                            <td>553533</td>
                                                            <td>575464</td>
                                                            <td>578532</td>
                                                            <td>585525</td>
                                                            <td>588729</td>
                                                        </tr>
                                                        <tr>
                                                            <td>593198</td>
                                                            <td>593908</td>
                                                            <td>608709</td>
                                                            <td>613522</td>
                                                            <td>616981</td>
                                                        </tr>
                                                        <tr>
                                                            <td>619846</td>
                                                            <td>646796</td>
                                                            <td>654070</td>
                                                            <td>684959</td>
                                                            <td>689647</td>
                                                        </tr>
                                                        <tr>
                                                            <td>699554</td>
                                                            <td>705018</td>
                                                            <td>709284</td>
                                                            <td>751782</td>
                                                            <td>756310</td>
                                                        </tr>
                                                        <tr>
                                                            <td>756586</td>
                                                            <td>759967</td>
                                                            <td>763652</td>
                                                            <td>789207</td>
                                                            <td>791255</td>
                                                        </tr>
                                                        <tr>
                                                            <td>794147</td>
                                                            <td>806594</td>
                                                            <td>808721</td>
                                                            <td>812122</td>
                                                            <td>858303</td>
                                                        </tr>
                                                        <tr>
                                                            <td>869884</td>
                                                            <td>905388</td>
                                                            <td>920401</td>
                                                            <td>920414</td>
                                                            <td>924716</td>
                                                        </tr>
                                                        <tr>
                                                            <td>946395</td>
                                                            <td>968357</td>
                                                            <td>971294</td>
                                                            <td>987629</td>
                                                            <td>990976</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                
                                            </div>
                                        </div>
                                    </div>
                        
                            <!-- <div id='section1'>
                                <a href="#" class="btn" onclick="get_dmy_now()">Click ME</a>
                            </div> -->
                        
            </div>
        </div>
    </body>    
        <?php
            //thai_lottery_table_shortcode();
           // echo count($responseYears);
      ?>
        
        <link rel="stylesheet" href="https://www.lottery.co.th/style.min2020.css" type="text/css"/>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>
            $('#year').bind('change', function () {
                var parent = $(this).val();
                console.log(parent)
                $('#day_value').children().each(function () {
                    if ($(this).data('parent') != parent) {
                        $(this).hide();
                    } else
                        $(this).show();
                });
            });
        </script>
    
</html>
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me - Debug: cached@1681173548 -->
