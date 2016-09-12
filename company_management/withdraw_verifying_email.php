<?php
session_start();
if(!isset($_SESSION['uid']) || !isset($_SESSION['uname'])) {
//    echo "<meta http-equiv='refresh' content='0;url=login.php'>";
//    exit;
    session_destroy();
}
$uid = $_SESSION['uid'];
$uname = $_SESSION['uname'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MustKnow</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/mustknow-admin/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/mustknow-admin/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="/mustknow-admin/dist/css/AdminLTE.css">
    <link rel="stylesheet" href="/mustknow-admin/dist/css/love.css">
    <link rel="stylesheet" href="/mustknow-admin/dist/css/mustknow.ico.css">
    <link rel="stylesheet" href="/mustknow-admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <script src="/mustknow-admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="/mustknow-admin/plugins/iCheck/all.css">
    <script src="/mustknow-admin/plugins/select2/select2.full.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini main">
    <?php include("../pages/tpl/advertising.tpl"); ?>
    <div class="wrapper">

      <?php include("../pages/tpl/header.tpl");
            include("../pages/tpl/aside.tpl"); ?>

      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper withdrawal">
           <div class="main">
                <div class="func">
                    <h2>기업 탈퇴</h2>
                    <ul>
                        <li>기업 탈퇴는 서비스 이용 해지 후에 가능해집니다.</li>
                        <li>기업 탈퇴는 소속 구성원이 2명 이상 (관리자 포함)인 경우 불가능합니다. </li>
                        <li>기업 탈퇴를 하면 기존 Case Study / Reference / Evaluation / Form의 모든 보유 데이터가 삭제됩니다. </li>
                    </ul>
                </div>
                <div class="managerinfo_confirm">
                	<div class="title">
	                	<img src="../dist/img/p_tit_modify.png" />
    	            	<p>기업 관리자 확인</p>
        	        	<span>기업 관리자 확인을 위한 아이디 및 이메일 인증 절차입니다. 정확하게 입력해주세요.</span>
        	        </div>
                	<div class="content">
                		<p>아이디
                			<span class="incorrect">등록된 기업 아이디가 아닙니다. </span>
                			<span class="incorrect">아이디를 입력해주세요.</span>
                		</p>
                		<input type="text" placeholder="사입시 등록하신 아이디를 입력해주세요."/>
                		<p>사업자 등록번호
                			<span class="incorrect">등록된 사업자 등록번호가 아닙니다. </span>
                			<span class="incorrect">사업자 번호를 입력해주세요. </span>
                		</p>
                		<input type="text" placeholder="가입시 등록하신 사업자 등록번호를 입력해주세요."/>
                		<p>이메일 주소
                			<span class="incorrect">등록된 이메일 주소가 아닙니다. </span>
                			<span class="incorrect">이메일 주소를 입력해주세요.</span>
                		</p>
                		<div class="btn_input">
                			<input type="text" placeholder="가입시 등록하신 이메일 주소를 입력해주세요."/>
                			<button type="button" data-toggle="modal" data-target="#confirm_num">인증번호 발송</button>
                		</div>
                		<p>이메일 인증번호
                			<span class="correct">인증번호 입력시간 00:08:24</span>
                			<span class="correct">인증이 완료되었습니다.</span>
                			<span class="incorrect">인증번호 입력이 잘못되었습니다. 다시 인증해주세요.</span>
                			<span class="incorrect">인증번호 입력시간이 초과되었습니다.</span>
                		</p>
                		<input type="text" placeholder="이메일로 전송된 인증번호를 정확하게 입력해주세요."/>
                	</div>
            		  <div class="action-rm action-rm-ly">
                     <!-- <a href="#" class="memory" data-toggle="modal" style="width:99px">수정</a> -->
                      <a href="#" class="btn-confirm" data-toggle="modal" style="width:154px">확인</a>
          		    </div>
                </div>
            </div>
        </div>
                <!-- /.content-wrapper -->
    
    <!-- Modal 인증번호가 발송되었습니다.-->
    <div class="modal fade" id="confirm_num" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <div class="modal-dialog modal-sm" style="width:371px;">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">인증번호가 발송되었습니다.</h4>
          </div>
          <div class="modal-body">
            가입시 등록했던 이메일 주소로 인증번호가 발송되었습니다.<br>유효 시간내에 인증번호를 입력해주세요.
          </div>
          <div class="modal-footer" style="text-align:center">
            <!-- <button type="button" class="btn btn-black" data-dismiss="modal">취소</button> -->
            <button type="button" class="btn btn-confirm" data-dismiss="modal">확인</button>
          </div>
        </div>
      </div>
    </div>

       <?php  include("../pages/tpl/footer.tpl");?>
       
    </div><!-- ./wrapper -->
      
    
    <!-- Bootstrap 3.3.5 -->
    <script src="/mustknow-admin/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="/mustknow-admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/mustknow-admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="/mustknow-admin/plugins/iCheck/icheck.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/mustknow-admin/dist/js/app.min.js"></script>
    <!-- page script -->
    <script>
    
        $('#check_mail').change(function() {
    	
        if($(this).is(':checked')){
        	$($(this).parent()).removeClass("checked");
        }
        else{
        	$($(this).parent()).addClass("checked");
        }
	});
	
        $('#agree').change(function() {
    	
        if($(this).is(':checked')){
        	$($(this).parent()).removeClass("checked");
        }
        else{
        	$($(this).parent()).addClass("checked");
        }
	});
        
        
    </script>
  </body>
</html>
