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
    <link rel="stylesheet" href="/mustknow-admin/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/mustknow-admin/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="/mustknow-admin/dist/css/AdminLTE.css">
    <link rel="stylesheet" href="/mustknow-admin/dist/css/mustknow.ico.css">
    <link rel="stylesheet" href="/mustknow-admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="/mustknow-admin/plugins/bootstrap-wysihtml5/tablelistStyle.css">
    <script src="/mustknow-admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="/mustknow-admin/plugins/select2/select2.full.min.js"></script>
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
        <div class="content-wrapper detail-wrapper evaluation end" style="position:static">
           <div class="content main mypage">
            
               <?php include("../menu.php"); ?>
               
               <div class="detail-view">
                <div class="title">
                    <em><strong>RM평가 &#183; </strong>부동산</em>
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
                                <input type="text" class="knob" value="65" data-width="170" data-height="170" data-fgColor="#a1474a" data-thickness="0.19" data-readonly="true">
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
                            <img src="../../dist/img/graph-rating.gif" alt="등급표">
                        </div>
                        <div class="slot">
                            <h3>평가</h3>
                            <p class="desc">계약 체결과 관련하여 기본적인 지식을 습득하고 있습니다. 하지만 MOU에 대 한 법리, 손해배상과 위약금에 대해서 더 정확한 지식을 알아 둘 필요가 있습니다.</p>
                        </div>
                    </div>
                    <div class="rm-dropdown">
                        <a href="#" class="dropdown">해설 상세보기</a>
                        <div class="section-rm">
                           <ul class="rm-list vertical description-list">
                               <li>
                                    <div class="desc-rm">
                                        <strong><em>O</em><span>정답 : 4. NDA</span></strong>
                                        <p>MOU는 LOI, 의향서, 양해각서, 협정서 등으로 불린다.</p>
                                    </div>
                                    <div class="form-desc">
                                       <em>01</em><span>다음 중 MOU와 의미가 다른 것은 무엇인가요?</span>
                                    </div>
                                    <div class="form-rm">
                                        <span class="label"><span class="iradio_mustknow"></span>1. LOI</span><br>
                                        <span class="label"><span class="iradio_mustknow"></span>2. 의향서</span><br>
                                        <span class="label"><span class="iradio_mustknow"></span>3. 양해각서</span><br>
                                        <span class="label"><span class="iradio_mustknow checked"></span>4. NDA   </span>
                                    </div>
                               </li>
                               <li>
                                    <div class="desc-rm">
                                        <strong><em>X</em><span>정답 : 2. 손해배상액의 예정</span></strong>
                                        <p>계약 체결시 상대방의 계약위반을 대비 해서 미리 손해배상의 액수를 정해두는 것을 손해배상액의 예정 혹은 위약금이 라 한다.</p>
                                    </div>
                                    <div class="form-desc">
                                       <em>02</em><span>계약 체결시 상대방의 계약위반을 대비해서 미리 손해배상의 액수를 정해 두는 것을 무엇이라 할까요?</span>
                                    </div>
                                    <div class="form-rm">
                                        <span class="label"><span class="iradio_mustknow"></span>1. 과태료</span><br>
                                        <span class="label"><span class="iradio_mustknow checked"></span>2. 손해배상액의 예정</span><br>
                                        <span class="label"><span class="iradio_mustknow"></span>3. 해방공탁</span><br>
                                        <span class="label"><span class="iradio_mustknow false"></span>4. 물적담보</span>
                                    </div>
                               </li>
                               <li>
                                    <div class="desc-rm">
                                        <strong><em>O</em><span>정답 : 4. 대등한 업체간의 물품공 급계약</span></strong>
                                        <p>계약 체결시 상대방의 계약위반을 대비 해서 미리 손해배상의 액수를 정해두는 것을 손해배상액의 예정 혹은 위약금이 라 한다.</p>
                                    </div>
                                    <div class="form-desc">
                                       <em>03</em><span>구두계약만으로는 효력이 제한을 받는 계약이 아닌 것은 무엇인가요?</span>
                                    </div>
                                    <div class="form-rm">
                                        <span class="label"><span class="iradio_mustknow"></span>1. 공기업과의 계약</span><br>
                                        <span class="label"><span class="iradio_mustknow"></span>2. 지방자치단체와의 계약</span><br>
                                        <span class="label"><span class="iradio_mustknow"></span>3. 하도급계약</span><br>
                                        <span class="label"><span class="iradio_mustknow checked"></span>4. 대등한 업체간의 물품공급계약</span>
                                    </div>
                               </li>
                               <li>
                                    <div class="desc-rm">
                                        <strong><em>X</em><span>정답 : 3. 법인인 경우 사용인감만으 로도 충분하다.</span></strong>
                                        <p>법인 계약시에는 법인인감을 찍어야하 며, 사용인감을 찍을 경우 법인인감계를 받아야 한다. 법인 계약시에는 법인 인감을 찍어야하며 사용인감을 찍을 경 우 법인인감계를 받아야 한다.</p>
                                    </div>
                                    <div class="form-desc">
                                       <em>04</em><span>계약 명의자가 아닌 대리인과 체결할 때 유의해야 할 사항 중 틀린 것은 무엇인가요?</span>
                                    </div>
                                    <div class="form-rm">
                                        <span class="label"><span class="iradio_mustknow"></span>1. 위임장을 받고록 한다.</span><br>
                                        <span class="label"><span class="iradio_mustknow"></span>2. 본인에게 전화 등을 통해 진정한 의사를 확인하도록 한다.</span><br>
                                        <span class="label"><span class="iradio_mustknow checked"></span>3. 법인인 경우 사용인감만으로도 충분하다.</span><br>
                                        <span class="label"><span class="iradio_mustknow false"></span>4. 개인인 경우 자필서명을 받도록 한다.</span>
                                    </div>
                               </li>
                               <li>
                                    <div class="desc-rm">
                                        <strong><em>X</em><span>정답 : 2. 사정변경의 법리</span></strong>
                                        <p>당초 계약할 때 예상했던 내용과 다른 사정이 발생한 경우 일정한 조건을 갖 춘다면 계약을 해제할 수 있는 법리를 사정변경의 법리라 한다.</p>
                                    </div>
                                    <div class="form-desc">
                                       <em>05</em><span>당초 계약할 때 예상했던 내용과 다른 사정이 발생한 경우 계약을 해제할 수 있는 법리를 무엇이라 할까요?</span>
                                    </div>
                                    <div class="form-rm">
                                        <span class="label"><span class="iradio_mustknow"></span>1. 무인대리의 추인 법리</span><br>
                                        <span class="label"><span class="iradio_mustknow checked"></span>2. 사정변경의 법리</span><br>
                                        <span class="label"><span class="iradio_mustknow"></span>3. 소멸시효의 중단 법리</span><br>
                                        <span class="label"><span class="iradio_mustknow false"></span>4. 불완전 이행의 법리</span>
                                    </div>
                               </li>
                           </ul>
                           <div class="rm-paging">
                               <div class="action">
                                   <a href="" class="back disable">뒤로</a>
                                   <span class="num">1 / 10</span>
                                   <a href="" class="next">다음으로</a>
                               </div>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="action">
                    <div class="lt"><a href="#" class="list"></a></div>
                    <div class="rt"><a href="" class="back"></a><a href="" class="next"></a></div>
                </div>
            </div>
            <?php include("../../pages/tpl/detail-side.tpl");?>            
            </div><!-- nav-tabs-custom -->
            <!--//[D] list view -->
        </div>  
        <!-- /.content-wrapper -->

       <?php include("../../pages/tpl/footer.tpl");?>
       
    </div><!-- ./wrapper -->
            
<!-- iCheck 1.0.1 -->
    <script src="../../plugins/iCheck/icheck.min.js"></script>
    <!-- jQuery Knob -->
    <script src="../../plugins/knob/jquery.knob.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <script>
      $(function () {
        //dropdown menu
        $("._nav-mypage dl:eq(1) dt").addClass("on mn3");
          
        // dropdown
        $('.rm-dropdown .dropdown').click(function(){
            event.preventDefault();
            $('.rm-dropdown').toggleClass('open');
        });
          
        //iCheck for checkbox and radio inputs
        $('input[type="radio"].minimal').iCheck({
          radioClass: 'iradio_mustknow'
        });

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