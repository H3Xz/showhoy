<?php
   /*
   Plugin Name: Thai Lottery API
   Plugin URI: https://krupreecha.com/wpplugins
   description: Show results of Thai government lottery.
   Version: 1.0
   Author: krupreecha.com
   Author URI: https://www.krupreecha.com
   License: GPL2
   */


  function dbi_add_settings_page() {
      add_options_page( 'Thai Lottery Setting', 'Thai Lottery Setting', 'manage_options', 'dbi-example-plugin', 'dbi_render_plugin_settings_page' );
  }
  add_action( 'admin_menu', 'dbi_add_settings_page' );
  

  function dbi_render_plugin_settings_page() {
    ?>
    <h2>Thai Lottery Setting</h2>
    <form action="options.php" method="post">
        <?php 
        settings_fields( 'dbi_example_plugin_options' );
        do_settings_sections( 'dbi_example_plugin' ); ?>
        <input name="submit" class="button button-primary" type="submit" value="<?php esc_attr_e( 'Save' ); ?>" />
    </form>
    <?php
}

function dbi_register_settings() {
    register_setting( 'dbi_example_plugin_options', 'dbi_example_plugin_options', 'dbi_example_plugin_options_validate' );
    add_settings_section( 'api_settings', 'API Settings', 'dbi_plugin_section_text', 'dbi_example_plugin' );

    add_settings_field( 'dbi_plugin_setting_api_key', 'API Key', 'dbi_plugin_setting_api_key', 'dbi_example_plugin', 'api_settings' );
   
}
add_action( 'admin_init', 'dbi_register_settings' );
add_action( 'widgets_init', 'wpb_load_widget' );


function wpb_load_widget() {
    register_widget( 'wpb_widget' );
}


function dbi_example_plugin_options_validate( $input ) {
    $newinput['api_key'] = trim( $input['api_key'] );
    $file = plugin_dir_path( __FILE__ ) . '/api_key.txt'; 
    $open = fopen( $file, "w" ); 
    $write = fputs( $open, $newinput['api_key'] ); 
    fclose( $open );
    return $newinput;
}

function dbi_plugin_section_text() {
    echo '<p>Here you can set all the options for using the Thai Lottery API</p>';
}

function dbi_plugin_setting_api_key() {
    $options = get_option( 'dbi_example_plugin_options' );
    echo "<input style='width:80%' id='dbi_plugin_setting_api_key' name='dbi_example_plugin_options[api_key]' type='text' value='" . esc_attr( $options['api_key'] ) . "' />";
}


function load_asset() {
    wp_register_style('sweetalert', plugins_url('assets/plugins/sweetalert/sweetalert.css',__FILE__ ));
    wp_enqueue_style('sweetalert');
    wp_register_script( 'jquery-3.4.1.min.js', plugins_url('assets/plugins/jquery-3.4.1.min.js',__FILE__ ));
    wp_enqueue_script('jquery-3.4.1.min.js');
    wp_register_script( 'sweetalert', plugins_url('assets/plugins/sweetalert/sweetalert.min.js',__FILE__ ));
    wp_enqueue_script('sweetalert');
}
add_action('wp_enqueue_scripts', 'load_asset');




class wpb_widget extends WP_Widget {
 
    function __construct() {
        parent::__construct(
        'wpb_widget', 
        __('Thai Lottery', 'wpb_widget_domain'), 
        array( 'description' => __( 'Show results of Thai government lottery.', 'wpb_widget_domain' ), )
        );
    }
 
    public function get_current_lotto_name_space() {
        $request_url = $_SERVER['REQUEST_URI'];
        $days = explode("?", $request_url);
        $days = explode("=", $days[1]);
        if($days[0] == 'ld'){
            $current_lotto_name_space = $days[1];
        }else{
            $current_lotto_name_space = '';
        }
        return $current_lotto_name_space;
     }
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        
        echo $args['before_widget'];
        if ( ! empty( $title ) )
        echo $args['before_title'] . $title . $args['after_title'];
        
        $current_lotto_name_space = $this->get_current_lotto_name_space();
        $lotto_day = (isset($_REQUEST['lotto_day']))?$_REQUEST['lotto_day']:'';
        $lotto_number = (isset($_REQUEST['lotto_number']))?$_REQUEST['lotto_number']:'';   
        
        $file = plugin_dir_path( __FILE__ ) . '/api_key.txt'; 
        $fh = fopen($file,'r');
        while ($line = fgets($fh)) {
            $api_key = $line;
        }
        fclose($fh);


        $server_url = 'https://www.krupreecha.com/api/lotteryday';
        $header = array(
            "Content-Type: application/json",
            "Accept: application/json",
            "X-API-KEY:".$api_key,
            "domain:".$_SERVER["SERVER_NAME"]
        );
        $ch = curl_init($server_url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POST, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
        $result = curl_exec($ch);
        curl_close($ch);
        $json = json_decode($result);
        $lotteryday = (isset($json->result))?$json->result:array();

       
        $server_url = 'https://www.krupreecha.com/api/'.$current_lotto_name_space;
        $header = array(
            "Content-Type: application/json",
            "Accept: application/json",
            "X-API-KEY:".$api_key,
            "domain:".$_SERVER["SERVER_NAME"]
        );
        $ch = curl_init($server_url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POST, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
        $result = curl_exec($ch);
        curl_close($ch);
        $json = json_decode($result);
        $lotto = (isset($json->result))?$json->result:array();

    
        if(isset($lotto_day) && isset($lotto_number)){
            $server_url = 'https://www.krupreecha.com/api/verify/'.$lotto_day.'/'.$lotto_number;
            $header = array(
                "Content-Type: application/json",
                "Accept: application/json",
                "X-API-KEY:".$api_key,
                "domain:".$_SERVER["SERVER_NAME"]
            );
            $ch = curl_init($server_url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_POST, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
            $result = curl_exec($ch);
            curl_close($ch);
            $winner = $result;
        }


        

        ?>





    <div class="page-wrapper">
   
        
        <section class="cards-section text-center">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-lg-12 col-md-12 ">
                        <div class="card pr-3 pl-3">
                            <div class="row">
                              
                                <div class="col-md-12 col-xs-12 item item-green">
                                    <div class="item-inner">
                                        <div class="soc-header box-facebook text-left">
                                            
                                            <div class="form-group">
                                                <h4>ตรวจสลากอัตโนมัติ</h4>
                                                <span class="text-muted">ระบุเลขสลากที่ต้องการตรวจ 6 หลัก</span>
                                            </div>
                                            <div class="form-group">                        
                                                <form method="POST">
                                                    <div class="row">
                                                        <div class="col-md-8 col-xs-8">
                                                            <input name="lotto_day" type="hidden" value="<?php echo $lotto_day; ?>">
                                                            <input id="lotto_number" minlength="6" maxlength="6" class="form-control" name="lotto_number" type="search" placeholder="กรอกเลขสลาก" aria-label="ตรวจหวย" required>
                                                        </div>
                                                        <div class="col-md-4 col-xs-4">
                                                            <button class="btn btn-info" type="submit">ตรวจหวย</button>
                                                        </div>
                                                    </div>
                                                     
                                                </form>
                                            </div>
                                            <div class="form-group">
                                                <form action="" method="get">
                                                    <select name="ld" class="form-control custom-select" onchange="this.form.submit()">
                                                        <?php 
                                                            $last = 0;
                                                            foreach($lotteryday as $row){
                                                                $thaidate = $row->thaidate;
                                                                $lotto_name_space = $row->lotto_name_space;
                                                                if($last == 0){
                                                                    if($lotto_day == '')$lotto_day = $lotto_name_space;
                                                                    $last_string = "งวดล่าสุด";
                                                                }else{
                                                                    $last_string = "";
                                                                }
                                                                $last++;

                                                                if(!empty($current_lotto_name_space) && $current_lotto_name_space == $lotto_name_space){
                                                                    $lotto_day = $current_lotto_name_space;
                                                                    $current_thaidate = $thaidate;
                                                                    $selected = 'selected';
                                                                }else{
                                                                   
                                                                    $selected = '';
                                                                }

                                                               
                                                        ?>
                                                        <option value="<?php echo $lotto_name_space; ?>" <?=$selected; ?>><?php echo $thaidate; ?> <?=$last_string; ?></option>

                                                        <?php } ?>
                                                    </select>

                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                <?php         


                foreach($lotto as $row){
                        $id = $row->id;
                        $name = $row->name;
                        $amount = $row->amount;
                        $reward = $row->reward;
                        $number = $row->number;
                        if($name == 'รางวัลที่ 2' || $name == 'รางวัลที่ 3' || $name == 'รางวัลที่ 4' || $name == 'รางวัลที่ 5'){
                            $col = 'col-md-3 col-xs-3';
                        }else if($name == 'รางวัลข้างเคียงรางวัลที่ 1'){
                            $col = 'col';
                        }else if($name == 'เลขท้าย 2 ตัว'){
                            $col = 'col';
                        }else if($name == 'เลขท้าย 3 ตัว'){
                            $col = 'col';
                        }else if($name == 'เลขหน้า 3 ตัว'){
                            $col = 'col';
                        }else if($name == 'รางวัลที่ 1'){
                            $col = 'col';
                        }
                ?>
                    <div class="col-12 p-3">
                            <div class="card">
                                <div class="row">
                                    <div class="col-12 item item-green">
                                        <div class="item-inner">
                                            <div class="soc-header box-facebook p-3" style="padding-bottom:5px;">
                                                <h4 class="title"><?=$name; ?> มี <?=$amount; ?> รางวัล</h4>
                                                <span class="text-muted">รางวัลละ <?=number_format($reward,0); ?> บาท</span>
                                            </div>
                                            <div class="row text-center">
                                                <?php if(!is_array($number)){ ?>
                                                    <div class="<?php echo $col; ?> b-r text-center">
                                                        <h5 class="intro" style="padding-bottom:5px;"><?php echo $number; ?></h5>
                                                    </div>
                                                <?php }else{ ?>
                                                    <?php for($i = 0;$i<count($number);$i++){ ?>
                                                    <div class="<?php echo $col; ?> b-r text-center">
                                                        <h5 class="intro" style="padding-bottom:5px;"><?php echo $number[$i]; ?></h5>
                                                    </div>
                                                <?php }} ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <hr>
                    <br>
                    <?php  } ?>
                          
                      

                  

                </div>
            </div>


        </section>
    </div>

  
    <?php
        echo $args['after_widget'];
    ?>
    <script>
        var json = '<?php if(isset($winner)) echo $winner; ?>';
        var winner = '';
        
        if(json != ''){
            json = JSON.parse(json);
            console.log(json);
            winner = json.winner;
            if(winner){
                swal("ยินดีด้วย !",json.result[0].name);
            }else if(winner == false){
                swal("เสียใจด้วย !","คุณไม่ถูกรางวัล");
            }
        }
    </script>


<?php

 }
 

public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
        $title = $instance[ 'title' ];
    }else {
        $title = __( 'ตรวจสลากกินแบ่งรัฐบาลล่าสุด', 'wpb_widget_domain' );
    }
?>
    <p>
        <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
<?php
}
 
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }
    
} 