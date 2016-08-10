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
    <link rel="stylesheet" href="../dist/css/AdminLTE.css">
    <link rel="stylesheet" href="../dist/css/mustknow.ico.css">
    <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/tablelistStyle.css">
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini inside-land">
    <?php include("../pages/tpl/advertising.tpl"); ?>
    <div class="wrapper">

      <?php include("../pages/tpl/header.tpl");
            include("../pages/tpl/aside.tpl"); ?>

      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper detail-wrapper diagnosis">
           <div class="detail-view">
                <div class="title">
                    <em><strong>RM진단 &#183; </strong>계약</em>
                    <h2>계약법 기초 - 계약 체결시 유의사항</h2>
                    <div class="info">
                        <ul>
                            <li><em>발행일</em>2015-11-14</li>
                            <li><em>조회수</em>354</li>
                            <li><em>중요도</em>3</li>
                        </ul>
                    </div>
                </div>
                <div class="article">
                    <div class="section-rm">
                       <ul class="rm-list">
                           <li>
                                <div class="form-rm">
                                    <label><input type="radio" name="r1" class="minimal">YES</label>
                                    <label><input type="radio" name="r1" class="minimal">NO</label>
                                </div>
                                <div class="form-desc">
                                   <em>01</em><span>귀하는 MOU가 법적 구속력이 있는지 여부에 대해 정확히 알고 계신가요?</span>
                                </div>
                           </li>
                           <li>
                                <div class="form-rm">
                                    <label><input type="radio" name="r2" class="minimal">YES</label>
                                    <label><input type="radio" name="r2" class="minimal">NO</label>
                                </div>
                                <div class="form-desc">
                                   <em>02</em><span>귀사가 다른 회사와 계약을 체결할 때 그 회사 대표이사의 위임장을 받도록 명확히 지침을 내리고 있나요?</span>
                                </div>
                           </li>
                           <li>
                                <div class="form-rm">
                                    <label><input type="radio" name="r3" class="minimal">YES</label>
                                    <label><input type="radio" name="r3" class="minimal">NO</label>
                                </div>
                                <div class="form-desc">
                                   <em>03</em><span>귀사는 계약서에서 '위약금'과 '위약벌'의 차이를 정확히 알고 계신가요?</span>
                                </div>
                           </li>
                           <li>
                                <div class="form-rm">
                                    <label><input type="radio" name="r4" class="minimal">YES</label>
                                    <label><input type="radio" name="r4" class="minimal">NO</label>
                                </div>
                                <div class="form-desc">
                                   <em>04</em><span>귀사에는 계약업무를 진행할 때 전체적인 문구를 검토하는 전담 직원이 계신가요?</span>
                                </div>
                           </li>
                           <li>
                                <div class="form-rm">
                                    <label><input type="radio" name="r5" class="minimal">YES</label>
                                    <label><input type="radio" name="r5" class="minimal">NO</label>
                                </div>
                                <div class="form-desc">
                                   <em>05</em><span>자주 사용 되는 납품/공급 계약서나 임대차 계약서 표준 형식을 구비하고 계신가요? 자주 사용 되는 납품/공급 계약서나 임대차 계약서 표준 형식을 구비하 고 계신가요? 자주 사용 되는 납품/공급 계약서나 임대차 계약서 표준 형식을 구비하고 계신가요?</span>
                                </div>
                           </li>
                       </ul>
                    </div>
                </div>
                <div class="action-rm">
                    <div class="lt">
                        <a href="#" class="list">목록</a>
                    </div>
                    <div class="rt">
                        <a href="#" class="memory">임시저장</a><a href="#" class="submission" data-toggle="modal" data-target="#mySubmit">제출</a>
                    </div>
                </div>
            </div>       
        </div><!-- /.content-wrapper -->

       <?php include("../pages/tpl/footer.tpl");?>
       
    </div><!-- ./wrapper -->
    
    <!-- Modal : 목록으로 이동하시겠습니까 -->
    <div class="modal fade" id="myPay" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">목록으로 이동하시겠습니까?</h4>
          </div>
          <div class="modal-body">
            현재까지 진행된 내역이 저장되지 않고<br>바로 목록으로 이동합니다.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-black" data-dismiss="modal">아니오</button>
            <button type="button" class="btn btn-confirm">예</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal : 현재까지 진행한 내역을 저장합니다. -->
    <div class="modal fade" id="myPay" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">현재까지 진행한 내역을 저장합니다.</h4>
          </div>
          <div class="modal-body">
            다음 접속시 현재 진행한 지점부터<br>이어서 진행하실 수 있습니다.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-black" data-dismiss="modal">아니오</button>
            <button type="button" class="btn btn-confirm">예</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal : 저장된 지점부터 이어서 하시겠습니까? -->
    <div class="modal fade" id="myPay" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">저장된 지점부터 이어서 하시겠습니까?</h4>
          </div>
          <div class="modal-body">
            이어하시길 원하신다면 예를,<br>초기화를 원하시면 아니오를 클릭해주세요.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-black" data-dismiss="modal">아니오</button>
            <button type="button" class="btn btn-confirm">예</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal : 아직 체크하지 않은 항목이 있습니다. -->
    <div class="modal fade" id="myPay" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">아직 체크하지 않은 항목이 있습니다.</h4>
          </div>
          <div class="modal-body">
            문제지의 모든 항목을 체크해야 제출할 수 있습니다.<br>체크하지 않은 항목을 확인해주세요.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-confirm">확인</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal : 아직 체크하지 않은 항목이 있습니다. -->
    <div class="modal fade" id="mySubmit" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">평가를 제출하시겠습니까?</h4>
          </div>
          <div class="modal-body">
            평가를 제출하시면 채점 후 결과를<br>바로 열람하실 수 있습니다.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-black" data-dismiss="modal">아니오</button>
            <a class="btn btn-confirm" href="diagnosis-end.php">예</a>
          </div>
        </div>
      </div>
    </div>
    
    <!-- iCheck 1.0.1 -->
    <script src="../../plugins/iCheck/icheck.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <script>
      $(function () {
        //iCheck for checkbox and radio inputs
        $('input[type="radio"].minimal').iCheck({
          radioClass: 'iradio_mustknow'
        });
      });
    </script>
  </body>
</html>