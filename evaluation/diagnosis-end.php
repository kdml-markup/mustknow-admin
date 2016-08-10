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
        <div class="content-wrapper detail-wrapper diagnosis end">
          <?php include("../pages/tpl/detail-side.tpl");?>
           <div class="detail-view">
                <div class="title">
                    <em><strong>RM진단 &#183; </strong>부동산</em>
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
                    <div class="rm-end">
                        <h3>진단결과</h3>
                        <ul>
                            <li><strong>진단명</strong><span>계약법 기초 - 계약 체결시 유의사항</span></li>
                            <li><strong>제출일시</strong><span>2016-06-07 15:30</span></li>
                        </ul>
                    </div>
                    <div class="rm-data">
                        <div class="slot">
                            <h3>점수</h3>
                            <div class="wrap-graph">
                                <input type="text" class="knob" value="65" data-width="170" data-height="170" data-fgColor="#865025" data-thickness="0.19" data-readonly="true">
                                <div class="score"><strong>60</strong><span>점</span></div>
                            </div>
                            <div class="graph-info">
                                <span class="score">획득점수</span><span class="total">총점 (100점)</span>
                            </div>
                        </div>
                        <div class="slot">
                            <h3>등급</h3>
                            <div class="rating"><strong>B</strong><span>양호</span></div>
                            <div class="rating f" style="display:none"><strong>F</strong><span>위험</span></div>
                            <img src="../dist/img/graph-rating.gif" alt="등급표">
                        </div>
                        <div class="slot">
                            <h3>평가</h3>
                            <p class="desc">계약 체결과 관련하여 기본적인 지식을 습득하고 있습니다. 하지만 MOU에 대 한 법리, 손해배상과 위약금에 대해서 더 정확한 지식을 알아 둘 필요가 있습니다.</p>
                        </div>
                    </div>
                </div>
                <div class="action-rm">
                    <div class="lt">
                        <a href="#" class="list">목록</a>
                    </div>
                    <div class="rt">
                        <a href="#" class="submission">진단 결과 저장</a>
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
    <!-- Modal : 진단결과가 저장되었습니다. -->
    <div class="modal fade" id="myPay" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">진단결과가 저장되었습니다.</h4>
          </div>
          <div class="modal-body">
            마이페이지 - 나의 데스크 - RM진단 / 평가에서<br>저장된 진단결과를 확인하실 수 있습니다.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-confirm">확인</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal : 평가결과가 저장되었습니다. -->
    <div class="modal fade" id="myPay" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">평가결과가 저장되었습니다.</h4>
          </div>
          <div class="modal-body">
            마이페이지 - 나의 데스크 - RM진단 / 평가에서<br>저장된 평가결과를 확인하실 수 있습니다.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-confirm">확인</button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- jQuery Knob -->
    <script src="../../plugins/knob/jquery.knob.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <script>
      $(function () {

        $(".knob").knob({
          /*change : function (value) {
           //console.log("change : " + value);
           },
           release : function (value) {
           console.log("release : " + value);
           },
           cancel : function () {
           console.log("cancel : " + this.value);
           },*/
          draw: function () {

            // "tron" case
            if (this.$.data('skin') == 'tron') {

              var a = this.angle(this.cv)  // Angle
                      , sa = this.startAngle          // Previous start angle
                      , sat = this.startAngle         // Start angle
                      , ea                            // Previous end angle
                      , eat = sat + a                 // End angle
                      , r = true;

              this.g.lineWidth = this.lineWidth;

              this.o.cursor
                      && (sat = eat - 0.3)
                      && (eat = eat + 0.3);

              if (this.o.displayPrevious) {
                ea = this.startAngle + this.angle(this.value);
                this.o.cursor
                        && (sa = ea - 0.3)
                        && (ea = ea + 0.3);
                this.g.beginPath();
                this.g.strokeStyle = this.previousColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                this.g.stroke();
              }

              this.g.beginPath();
              this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
              this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
              this.g.stroke();

              this.g.lineWidth = 2;
              this.g.beginPath();
              this.g.strokeStyle = this.o.fgColor;
              this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
              this.g.stroke();

              return false;
            }
          }
        });
        /* END JQUERY KNOB */

      });
    </script>
  </body>
</html>