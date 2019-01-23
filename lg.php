	

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E_Pelayanan | Log in</title>
  <script type="text/javascript">
   var txt=" E_Pelayanan | STIKES Baptis";
    var speed=200;     //Pengaturan kecepatan semakin kecil nilai variable semakin cepat kecepatannya
    var SULE_SS=null;
    function move() { document.title=txt;
    txt=txt.substring(1,txt.length)+txt.charAt(0);
    fresh=setTimeout("move()",speed);}move();
    </script>
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>lgw.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>lte/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>lte/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>lte/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<i style="position: absolute; margin-top:50px; margin-left:535px;"><?php echo $this->session->flashdata('notif'); ?></i>
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url(); ?>"><b>E_Cloud</b></br>STIKES Baptis</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">USER LOGIN </p>

    <?php echo form_open('welcome/cek_login'); ?>
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In awdr</button>
        </div>
        <!-- /.col -->
      </div>
    <?php echo form_close(); ?>

   
    <!-- /.social-auth-links -->

   
   

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>lte/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>lte/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>lte/plugins/iCheck/icheck.min.js"></script>


<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
<script type="text/javascript">
    function notif(){
        var notif = "<?php echo $this->session->flashdata('notif'); ?>";
        var msg = "<?php echo $this->session->flashdata('msg'); ?>";
        switch(notif){
            case 'success':
                noty({text: msg, layout: 'topCenter', type: 'success'}); 
                setTimeout(function() { $.noty.closeAll(); }, 5000);
                break;
            case 'error'  :
                noty({text: msg, layout: 'topCenter', type: 'error'}); 
                setTimeout(function() { $.noty.closeAll(); }, 5000);
                break;
        }
    }
</script>
</body>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    



