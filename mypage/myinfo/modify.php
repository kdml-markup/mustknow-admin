<?php
session_start();
if(!isset($_SESSION['uid']) || !isset($_SESSION['uname'])) {
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
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../plugins/select2/select2.min.css">
    <link rel="stylesheet" href="../dist/css/AdminLTE.css">
    <link rel="stylesheet" href="../dist/css/mustknow.ico.css">
    <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/tablelistStyle.css">
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="../plugins/select2/select2.full.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini inside-land">
    <?php include("../../pages/tpl/advertising.tpl"); ?>
    <div class="wrapper">

      <?php include("../../pages/tpl/header.tpl");
            include("../../pages/tpl/aside.tpl"); ?>

      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
           <div class="content main mypage">
            
               <?php include("../menu.php"); ?>
               <div class="wrap_infomodify">
                   <div class="myinfo_lt">
                       <div class="title_min">
                           <h2>회원정보 수정</h2>
                       </div>
                       <div class="myinfo_content">
                           <? if (isset($_SESSION['ucorp'])) : ?>
                           <h3 class="t-in">기업 정보</h3>
                           <? elseif (isset($_SESSION['uuser'])) : ?>
                           <h3 class="t-in">소속정보 수정</h3>
                           <? endif; ?>
                           <label for="myin1">소속명 <em>Optional</em></label>
                           <input type="text" id="myin1" value="소속명1">
                           <label for="myin2">부서 <em>Optional</em></label>
                           <input type="text" id="myin2" value="영업2팀">
                           <label for="myin3">직급 <em>Optional</em></label>
                           <input type="text" id="myin3" value="대리">
                       </div>
                   </div>

                   <div class="myinfo_rt">
                       <div class="myinfo_content">
                           <h3 class="u-in">개인 정보 수정</h3>
                           <label for="myin4">아이디</label>
                           <input type="text" id="myin4" value="mustknow_323" placeholder="아이디" disabled="disabled">
                           <label for="myin5">비밀번호</label>
                           <button type="button" id="myin5" class="pw_modify" data-toggle="modal" data-target="#pw-modify">비밀번호 변경</button>
                           <label for="myin6">이름</label>
                           <input type="text" id="myin6" value="김길동" placeholder="이름">
                           <span class="label-inline">휴대전화</span>
                           <div class="tel">
                                <select class="select2" style="width:83px">
                                  <option selected="selected">010</option>
                                  <option>010</option>
                                  <option>010</option>
                                  <option>010</option>
                                </select>
                                <span class="line">-</span>
                                <input type="text" value="0000" style="width:83px">
                                <span class="line">-</span>
                                <input type="text" value="0000" style="width:83px">
                           </div>
                           <label for="myin8">이메일주소 <strong>인증번호가 전송되었습니다.</strong></label>
                           <div class="confirm_num">
                               <button type="button" data-toggle="modal" data-target="#econfirm">인증번호 발송</button>
                               <div><input type="text" id="myin8" value="mustknow@mustknow.co.kr"></div>
                           </div>
                           <label for="myin9">이메일 인증번호 <strong style="display:none">인증이 완료되었습니다.</strong>
                           <strong style="display:none">인증이 완료되었습니다.</strong>
                           <strong class="alert" style="display:inline">인증번호 입력시간이 초과되었습니다.</strong></label>
                           <input type="text" id="myin9" value="994365" placeholder="이메일로 발송된 인증번호를 정확하게 입력해주세요.">
                       </div>
                   </div>
               </div>
               <div class="myinfo_btn_area">
                    <button type="button" class="btn btn-black">취소</button><button type="button" class="btn btn-confirm" data-toggle="modal" data-target="#info-modify">수정</button>
               </div>
                
            </div><!-- nav-tabs-custom -->
            <!--//[D] list view -->
        </div>       
        <!-- /.content-wrapper -->

       <?php include("../../pages/tpl/footer.tpl");?>
       
    </div><!-- ./wrapper -->
    
    <!-- Modal : 인증번호가 발송되었습니다. -->
    <div class="modal fade" id="econfirm" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content" style="width:371px">
          <div class="modal-header">
            <h4 class="modal-title">인증번호가 발송되었습니다.</h4>
          </div>
          <div class="modal-body">
            가입시 등록했던 이메일 주소로 인증번호가 발송되었습니다.<br>유효 시간내에 인증번호를 입력해주세요.
          </div>
          <div class="modal-footer" style="text-align:center">
            <button type="button" class="btn btn-confirm" data-dismiss="modal">확인</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal : 회원정보를 수정하시겠습니까? -->
    <div class="modal fade" id="info-modify" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">회원정보를 수정하시겠습니까?</h4>
          </div>
          <div class="modal-body">
            확인을 누르시면 이후부터는 수정된 정보로 보여집니다.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-black" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-confirm">확인</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal : 비밀번호 변경 -->
    <div class="modal fade" id="pw-modify" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title p_tit_modify">비밀번호 변경</h4>
          </div>
          <div class="modal-body">
            안전한 비밀번호로 내 정보를 보호하세요.
          </div>
          <div class="modal-field">
            <div class="modal-form">
                <label for="mypopin1">현재 비밀번호 <span></span></label>
                <input type="text" id="mypopin1" placeholder="현재 비밀번호 입력">
            </div>
            <div class="modal-form" style="margin-top:24px">
                <label for="mypopin2">새 비밀번호 <span class="imp">*</span></label>
                <input type="text" id="mypopin2" placeholder="새 비밀번호 입력">
            </div>
            <div class="modal-form" style="margin-top:8px">
                <label for="mypopin3">새 비밀번호 확인 <span class="imp">*</span></label>
                <input type="text" id="mypopin3" placeholder="새 비밀번호 확인">
            </div>
          </div>
          <div class="modal-footer" style="padding-top:14px;padding-bottom:20px">
            <button type="button" class="btn btn-black" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-confirm">확인</button>
          </div>
        </div>
      </div>
    </div>
            
    <style>
    .select2-container--default .select2-results__option--highlighted,.select2-results__option{height:39px;font-size:13px;padding-left:10px}
    </style>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <script>
    $(function () {
        //dropdown menu
        $("._nav-mypage dl:eq(1) dt").addClass("on mn2");
    });
    
    //Initialize Select2 Elements
    $(".select2").select2({
        minimumResultsForSearch: -1
    });
    </script>
  </body>
</html>