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
                
	            <p>관리자 정보</p>
                <div class="management-status">
                    <div class="userinfo">
                        <h3><strong>관리자</strong><span>김수연님</span></h3>
                        <ul>
                            <li><strong>기업명 :</strong> 삼성</li>
                            <li><strong>ID :</strong> fifteenidnumber</li>
                        </ul>
                    </div>
                    <div class="datainfo">
                        <div class="datain">
                            <h3>현재 <em>12개월 Data 서비스</em>를 이용 중입니다.</h3>
                            <ul>
                                <li><strong class="ico cal">Data 서비스 이용기간</strong><span>2016-06-23 ~ 2016-04-28</span></li>
                                <li><strong class="ico cal-lim">잔여 Data 서비스 기간</strong><span><em>10개월 05일</em></span></li>
                            </ul>
                        </div>
                        <div class="datain">
                            <h3>현재 <em>Q&A 서비스</em>를 이용 중입니다.</h3>
                            <ul>
                                <li><strong class="ico qa">현재 사용 가능한 Q&A 개수</strong><span> <em>7개</em> <span class="remain_qa">06-23~07-23</span></span></li>
                                <li><strong class="ico all">총 Q&A 개수</strong><span><em>30</em> / 50개</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
	            <p>기업 탈퇴 사유 <span>(중복 선택 가능)</span></p>
                <div class="cause">
                	<ul>
                		<li class="checkbox">
                			<input type="checkbox" id="check_mail" value="">
                			<label for="check_mail">
                				<i></i>
                				<span>재가입을 위해서</span>
                			</label>
                		</li>
                		<li class="checkbox">
                			<input type="checkbox" id="check_mail" value="">
                			<label for="check_mail">
                				<i></i>
                				<span>시스템 장애 (속도저하, 잦은 에러 등)</span>
                			</label>
                		</li>
                		<li class="checkbox">
                			<input type="checkbox" id="check_mail" value="">
                			<label for="check_mail">
                				<i></i>
                				<span>개인정보 (통신 및 신용정보)의 노출 우려</span>
                			</label>
                		</li>
                		<li class="checkbox">
                			<input type="checkbox" id="check_mail" value="">
                			<label for="check_mail">
                				<i></i>
                				<span>회사 부도</span>
                			</label>
                		</li>
                		<li class="checkbox">
                			<input type="checkbox" id="check_mail" value="">
                			<label for="check_mail">
                				<i></i>
                				<span>콘텐츠 부족 등 이용할만한 서비스 부족</span>
                			</label>
                		</li>
                		<li class="checkbox">
                			<input type="checkbox" id="check_mail" value="">
                			<label for="check_mail">
                				<i></i>
                				<span>회사 부도</span>
                			</label>
                		</li>
                		<li class="checkbox">
                			<input type="checkbox" id="check_mail" value="">
                			<label for="check_mail">
                				<i></i>
                				<span>재가입을 위해서</span>
                			</label>
                		</li>
                		<li class="checkbox">
                			<input type="checkbox" id="check_mail" value="">
                			<label for="check_mail">
                				<i></i>
                				<span>장기간 부재(군 입대, 유학 등)</span>
                			</label>
                		</li>
                		<li class="checkbox">
                			<input type="checkbox" id="check_mail" value="">
                			<label for="check_mail">
                				<i></i>
                				<span>기타</span>
                			</label>
                		</li>
                	</ul>
                </div>
                
	            <p>기업 탈퇴 안내사항 <em></em></p>
                <div class="guide">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs nav-column-6" style="border-right: solid 1px #d9dadb">
                            <li class="active"><a href="#tab_1" data-toggle="tab">안내사항1</a></li>
                            <li><a href="#tab_2" data-toggle="tab">안내사항2</a></li>
                            <li><a href="#tab_3" data-toggle="tab">안내사항3</a></li>
                            <li><a href="#tab_4" data-toggle="tab">안내사항4</a></li>
                            <li><a href="#tab_5" data-toggle="tab">안내사항5</a></li>
                            <li><a href="#tab_6" data-toggle="tab" style="border-right:0">안내사항6</a></li>
                        </ul>
                        <div id="tab_1" class="guide_content active">
                        	<p>
                        		기업 탈퇴 관련 안내사항<br><br>1. 기업 탈퇴하려는 회원에게 아래의 내용(예시, 확정안 아님)을 알릴 필요가 있습니다. <br><br>&nbsp;&nbsp;&nbsp;&nbsp;- 유료서비스 이용해지 및 환불 절차(환불 규정)에 대한 내용<br>&nbsp;&nbsp;&nbsp;&nbsp;- (이용하고 있는 서비스가 있다면) 현재 서비스 이용 내역 <br>&nbsp;&nbsp;&nbsp;&nbsp;- 기업 탈퇴가 제한되는 경우에 대한 안내<br>&nbsp;&nbsp;&nbsp;&nbsp;- 개인정보 삭제 및 보관(기업 탈퇴 후에도 보존되는 정보)에 관한 내용<br>&nbsp;&nbsp;&nbsp;&nbsp;- 탈퇴회원 ID 재사용 불가능 (*이에 대해서는 재사용 가능하게 해도 되는지 확인 필요)<br>&nbsp;&nbsp;&nbsp;&nbsp;- 탈퇴 시에 재가입 기간 제한에 대한 안내
                        	</p>
                        </div>
                		<div class="checkbox">
                			<input type="checkbox" id="agree" value="">
                			<label for="agree">
                				<i></i>
                				<span>위 안내사항을 모두 확인하였으며, 해당 내용에 동의합니다.</span>
                			</label>
                		</div>
                	</div>
         	   </div>
         	   <div class="action-rm" style="margin-top:30px">
                    <div class="rt">
                        <a href="#" class="submission" data-toggle="modal" data-target="#withdrawal_complete" style="width:162px">기업 탈퇴 신청</a>
                    </div>
                </div>
        </div><!-- /.content-wrapper -->
    
    <!-- Modal 기업 탈퇴를 계속 진행하시겠습니까? -->
    <div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <div class="modal-dialog modal-sm" style="width:371px; display: none;">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">기업 탈퇴를 계속 진행하시겠습니까?</h4>
          </div>
          <div class="modal-body">
            기업 탈퇴에 관련된 안내사항을 모두 확인하셨습니까?<br>기업 탈퇴를 진행하시고 나면 복구할 수 없습니다.
          </div>
          <div class="modal-footer" style="text-align:center">
            <button type="button" class="btn btn-black" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-confirm" data-dismiss="modal">확인</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 기업 탈퇴 신청 실패1-->
    <div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <div class="modal-dialog modal-sm" style="width:371px">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">기업 탈퇴 신청 실패</h4>
          </div>
          <div class="modal-body">
            현재 이용 중인 구성원이 관리자를 포함하여<br>2명 이상일 경우에는 탈퇴가 불가능합니다.<br>구성원을 삭제한 후에 이용해주세요.
          </div>
          <div class="modal-footer" style="text-align:center">
            <button type="button" class="btn btn-confirm" data-dismiss="modal" style="width: 214px;">부서 / 구성원 설정으로 이동</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 기업 탈퇴 신청 실패2-->
    <div class="modal fade" id="withdrawal_complete" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <div class="modal-dialog modal-sm" style="width:371px">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">기업 탈퇴 신청 실패</h4>
          </div>
          <div class="modal-body">
            현재 유료 서비스를 이용 중인 구성원이 관리자를 포함하여<br>2명 이상일 경우에는 탈퇴가 불가능합니다.<br>유료 서비스 이용해지 신청 후에, 구성원을 삭제해주세요.
          </div>
          <div class="modal-footer" style="text-align:center">
            <button type="button" class="btn btn-confirm" data-dismiss="modal" style="width: 214px;">유료 서비스 이용해지로 이동</button>
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
