<!DOCTYPE html>
<html lang="th" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="format-detection" content="telephone=no">
        <meta name="HandheldFriendly" content="true">
        <link rel="stylesheet" href="checker.css">

    </head>
    <body>
        <div class="wrapper">
            <aside id="custom_html-12" class="widget_text widget widget_custom_html clearfix">
                <h3 class="widget-title">
                    <a href="" title="showhoy" target="_blank">
                        <span>
                            <i class="glyphicon glyphicon-check" aria-hidden="true"></i>
                            <?php 
                                $xml = simplexml_load_file('https://www.lottery.co.th/feed');
                                $value = (string) $xml->channel->item[0]->title;
                            ?>
                        </span>
                    </a>
                </h3>
            </aside>
        </div>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.4.1/jquery-migrate.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>

    <?php
    define("API_URL","http://51.159.105.201:5000/lotto/");

    function lotterycurl( $day, $month, $year, $number ){
            // API endpoint URL
            $url = API_URL.$year.'-'.$month.'-'.$day.'/'.$number;

            $options = array(
                'http' => array(
                    'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method' => 'GET',
                    'timeout' => 30,
                ),
            );

            // Create stream context
            $context = stream_context_create($options);

            // Send request and get response
            $response = file_get_contents($url, false, $context);

            return $response;
    }
    ?>

    <!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me - Debug: cached@1680395029 -->
    <form id="frmLotto" method="POST" target="_self">
        <div class="form-group">
            <div>
                <?php 
                    // $values = array();
                    $values = [(string) $xml->channel->item[0]->link, (string) $xml->channel->item[1]->link,
                            (string) $xml->channel->item[2]->link, (string) $xml->channel->item[3]->link,
                            (string) $xml->channel->item[4]->link, (string) $xml->channel->item[5]->link,
                            (string) $xml->channel->item[6]->link, (string) $xml->channel->item[7]->link,
                            (string) $xml->channel->item[8]->link, (string) $xml->channel->item[9]->link,
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-65", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-65",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-65", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-65",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-65", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-65",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-65", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-65",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-65", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-65",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-65", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-65",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-65", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-65",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-65", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-65",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-65", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-65",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/17-02-65", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-65",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/17-01-65", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-64",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-64", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-64",  //64
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-64", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-64",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-64", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-64",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-64", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-64",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-64", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-64",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-64", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-64",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-64", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-64",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-64", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-64",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-64", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-64",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-64", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-64",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-64", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-64",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/17-01-64", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-63",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-63", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-63",  //63
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-63", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-63",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-63", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-63",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-63", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-63",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-63", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-63",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-63", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-63",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-63", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-63",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-63", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-05-63",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-63", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-63",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-63", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-63",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-63", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-63",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/17-01-63", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-62",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-62", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-62",  //62
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-62", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-62",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-62", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-62",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-62", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-62",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-62", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-62",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/15-07-62", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-62",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-62", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-62",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-62", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-62",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-62", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-62",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-62", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-62",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-62", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-62",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/17-01-62", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-61",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-61", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-61",  //61
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-61", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-61",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-61", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-61",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-61", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-61",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-61", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-61",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-61", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-61",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-61", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-61",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-61", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-61",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-61", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-61",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-61", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-03-61",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-61", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-61",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/17-01-61", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-60",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-60", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-60",  //60
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-60", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-60",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-60", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-60",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-60", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-60",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-60", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-60",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-60", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-60",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-60", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-60",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-60", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-60",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-60", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-60",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-60", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-60",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-60", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-60",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/17-01-60", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-59",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-59", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-59",  //59
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-59", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-59",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-59", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-59",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-59", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-59",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-59", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-59",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-59", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-59",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-59", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-59",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-59", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-59",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-59", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-59",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-59", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-59",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-59", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-59",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/17-01-59", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-58",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/17-12-58", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-58",  //58
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-58", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-58",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-58", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-58",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-58", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-58",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-58", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-58",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-58", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-58",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-58", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-06-58",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-58", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-05-58",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-58", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-58",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-58", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-58",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-58", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-58",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-01-58", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-57",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-57", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-57",  //57
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-57", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-57",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-57", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-57",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-57", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-57",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-57", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-57",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-57", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-57",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-57", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-57",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-57", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-57",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-57", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-57",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-57", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-57",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-57", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-57",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-01-57", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-56",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-56", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-56",  //56
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-56", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-56",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-56", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-56",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-56", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-56",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-56", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-56",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-56", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-56",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-56", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-56",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-56", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-56",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-56", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-56",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-56", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-56",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-56", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-56",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-01-56", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-55",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-55", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-55",  //55
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-55", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-55",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-55", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-55",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-55", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-55",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-55", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-55",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-55", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-55",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-55", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-55",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-55", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-55",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-55", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-55",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-55", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-55",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-55", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-55",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-01-55", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-54",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-54", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-54",  //54
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-54", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-54",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-54", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-54",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-54", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-54",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-54", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-54",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-54", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-54",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-54", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-54",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-54", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-54",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-54", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-54",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-54", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-54",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-54", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-54",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-01-54", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-53",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-53", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-53",  //53
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-53", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-53",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-53", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-53",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-53", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-53",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-53", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-53",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-53", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-53",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-53", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-53",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-53", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-53",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-53", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-53",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-53", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-53",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-53", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-53",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-01-53", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-52",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-52", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-52",  //52
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-52", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-52",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-52", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-52",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-52", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-52",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-52", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-52",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-52", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-52",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-52", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-52",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-52", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-52",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-52", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-52",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-52", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-52",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-52", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-52",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-01-52", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-51",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-51", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-51",  //51
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-51", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-51",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-51", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-51",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-51", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-51",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-51", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-51",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-51", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-51",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-51", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-51",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-51", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-51",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-51", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-51",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-51", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-51",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-51", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-51",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-01-51", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-50",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-50", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-50",  //50
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-50", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-50",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-50", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-50",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-50", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-50",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-50", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-50",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-50", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-50",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-50", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-50",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-50", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-50",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-50", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-50",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-50", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-50",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-50", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-50",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-01-50", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-49",
                        ];
                    //echo strlen($values[9]); ?><br><?php
                    //echo count($values);
                    $valueaDay = array();
                    $valueaMonth = array();
                    $valueaYear = array();
                    for($i=0;$i<count($values);$i++){
                        if($values[$i][33] == '-'){
                            $valueaYear[$i] = '25'.$values[$i][37].$values[$i][38];
                            $valueaMonth[$i] = $values[$i][34].$values[$i][35];
                            $valueaDay[$i] = '0'.$values[$i][32];
                        }
                        else{
                            $valueaDay[$i] = $values[$i][32].$values[$i][33];
                            $valueaMonth[$i] = $values[$i][35].$values[$i][36];
                            $valueaYear[$i] = '25'.$values[$i][38].$values[$i][39];
                        }
                    }
                ?>
            </div>
            <?php 
                    $valueaYearNow = intval($valueaYear[0]);
            ?>
            <table class="table table-hover text-nowrap" id="attribute_table">
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
                            for ($i = $valueaYearNow; $i > 2540; $i--) {
                                if($i == $valueaYearNow){
                                    $j = $i - 543;
                                    echo "<option value='$j' selected>$i</option>";
                                }
                                else if($i != $valueaYearNow){
                                    $j = $i - 543;
                                    echo "<option value='$j'>$i</option>";
                                }
                            }
                            ?>
                        </select>
                    </td>
                        <?php
                            $monthTh = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน",
                                            "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];
                        ?>
                    <td>
                        <select name="day" id="day_value" class="form-control-day-value">
                            <?php 
                                echo "<option value=''>วัน / เดือน</option>";
                                for($j=0;$j<$valueaYearNow-2550;$j++){                                  // value year
                                    for($i=0;$i<count($values);$i++){                                   // all value
                                        
                                            if(($values[$i][33] == '-') ){                                      // ตรวจเลขที่เป็นวันหลักหน่วย
                                                $valueaDay[$i] = '0'.$values[$i][32];
                                                $valueaMonth[$i] = $values[$i][34].$values[$i][35];
                                                $valueaYear[$i] = '25'.$values[$i][37].$values[$i][38];
                                                $thismonth = intval($valueaMonth[$i]-1);
                                                $yearNow = $valueaYear[$i]-543-$j;                              //year eng
                                                if($yearNow==$valueaYear[$i]-543){    
                                                    $valueaDay[$i]='0'.$values[$i][32];

                                                    if(($valueaYear[$i]==$valueaYear[0]) && ($valueaMonth[$i]==$valueaMonth[0]) && ($valueaDay[$i]==$valueaDay[0])){
                                                        echo "<option data-parent='$yearNow' value='$valueaDay[$i],$valueaMonth[$i]' selected>
                                                        $valueaDay[$i]".' / '."$monthTh[$thismonth]
                                                        </option>"; ?><br><?php
                                                    }
                                                    else{
                                                        echo "<option data-parent='$yearNow' value='$valueaDay[$i],$valueaMonth[$i]'>
                                                        $valueaDay[$i]".' / '."$monthTh[$thismonth]
                                                        </option>"; ?><br><?php
                                                    }
                                                }
                                                //ss
                                            }
                                            else{                                                               // ตรวจเลขที่เป็นวันหลัก10
                                                $valueaDay[$i] = $values[$i][32].$values[$i][33];
                                                $valueaMonth[$i] = $values[$i][35].$values[$i][36];
                                                $valueaYear[$i] = '25'.$values[$i][38].$values[$i][39];
                                                $thismonth = intval($valueaMonth[$i]-1);
                                                $yearNow = $valueaYear[$i]-543-$j;
                                                if($yearNow==$valueaYear[$i]-543){ 
                                                    if(($valueaYear[$i]==$valueaYear[0]) && ($valueaMonth[$i]==$valueaMonth[0]) && ($valueaDay[$i]==$valueaDay[0]) ){
                                                        echo "<option data-parent='$yearNow' value='$valueaDay[$i],$valueaMonth[$i]' selected>
                                                        $valueaDay[$i]".' / '."$monthTh[$thismonth]
                                                        </option>"; ?><br><?php
                                                    }
                                                    else{
                                                        echo "<option data-parent='$yearNow' value='$valueaDay[$i],$valueaMonth[$i]'>
                                                        $valueaDay[$i]".' / '."$monthTh[$thismonth]
                                                        </option>"; ?><br><?php
                                                    }
                                                }
                                            }
                                            
                                    }    
                                }
                            ?>
                        </select>
                    </td>
                </tr>
            </table>
        </div><br/>
                    <div class="form-group">
                        <input type="text" name="number" maxlength="6" pattern="[0-9]{6}" class="lotto-form_input" placeholder="กรอกเลขสลาก" 
                        required oninvalid="setCustomValidity('คุณไม่ได้ระบุตัวเลขสลากที่ถูกต้อง หรือเลขสลากไม่ครบ 6 หลัก')" oninput="setCustomValidity('')">
                    </div><br/>

                    <div class="form-group">
                        <button type="submit" value="Submit" title="ตรวจสลากฯ ของคุณ" class="btn btn-primary">เช็คผลรางวัล</button>
                    </div>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Data received from form
                $day = $_POST['day'];
                $result_day = explode("," , $day);
                $aday = $result_day[0];
                $month = $result_day[1];
                $year = $_POST['year'];
                $number = $_POST['number'];

                // Send data to API and get response
                $response = lotterycurl($aday, $month, $year, $number);
                $word = "";
                $result_data = json_decode($response,true);
               if($result_data["statusType"] == "2"){
                    // ไม่ถูกรางวัล
                    $word = "เสียใจด้วยจ้าา โดนหวยกินแล้วว โอกาสหน้ามาเสี่ยงดวงใหม่น้าา";
                }else if($result_data['statusType'] == "1"){
                    // ถูกรางวัล
                    $word = "ยินดีด้วยครับ คุณพี่ถูก ".$result_data['msg'];
                }
                
                ?><h4 style="color:black;"><?php
                echo $word;
                ?></h4><?php
            }
        ?>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $('#year').bind('change', function () {
        var parent = $(this).val();
        //console.log(parent)
        $('#day_value').children().each(function () {
            if ($(this).data('parent') != parent) {
                $(this).hide();
            } else
                $(this).show();
        });
    });
</script>
</html>
