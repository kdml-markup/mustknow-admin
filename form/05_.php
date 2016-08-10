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
        <div class="content-wrapper detail-wrapper form">
           <?php include("../pages/tpl/detail-side.tpl");?>
           <div class="detail-view">
                <div class="zoom">
                    <a href="#" class="zoom-out">작게</a>
                    <a href="#" class="zoom-in">크게</a>
                </div>
                <div class="title">
                    <em><strong>회사서식 &#183; </strong>부동산</em>
                    <h2>시설물품관리대장</h2>
                    <div class="info">
                        <ul>
                            <li><em>발행일</em>2015-11-14</li>
                            <li><em>조회수</em>354</li>
                            <li><em>중요도</em>3</li>
                        </ul>
                        <button type="button" class="favorite">즐겨찾기 추가</button>
                    </div>
                </div>
                <div class="article">
                    <div class="lt_section">
                        <div id="carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active"><img src="../../dist/img/@temp_format.jpg" alt="서식"></div>
                                <div class="item"><img src="../../dist/img/@temp_format.jpg" alt="서식"></div>
                                <div class="item"><img src="../../dist/img/@temp_format.jpg" alt="서식"></div>
                            </div>
                            <div id="carousel-index">1 / 3</div>
                            <a class="left carousel-control" href="#carousel" data-slide="prev">이전</a>
                            <a class="right carousel-control" href="#carousel" data-slide="next">다음</a>
                      </div>
                    </div>
                    <div class="rt_section">
                        <div class="section">
                           <div class="purchasing_info">
                                <ul>
                                    <li><strong>분류</strong><span>내용증명</span></li>
                                    <li><strong>장수</strong><span>24장</span></li>
                                    <li><strong>형식</strong><span>hwp, pdf, doc</span></li>
                                    <!--[D] 결제 전 노출 -->
                                    <li style="display:block"><strong>가격</strong><span>999,000원</span></li>
                                    <!--//[D] 결제 전 노출 -->
                                </ul>
                                <!--[D] 결제 전 노출 -->
                                <a href="#" class="btn_payment" data-toggle="modal" data-target="#myPay" style="display:block">바로 결제</a>
                                <!--//[D] 결제 전 노출 -->
                                <!--[D] 결제 후 노출 -->
                                <div class="down" style="display:block">
                                    <strong>다운로드</strong>
                                    <a href="#" class="btn_zip">zip</a>
                                    <a href="#" class="btn_hwp">hwp</a>
                                    <a href="#" class="btn_pdf">pdf</a>
                                    <a href="#" class="btn_doc">doc</a>
                                </div>
                                <!--//[D] 결제 후 노출 -->
                            </div>
                            <div class="description">
                                <h3>개요</h3>
                                <p>시설물품관리대장</p>
                                <h3>목차</h3>
                                <p class="scroll"><span>증서나 원서, 신고서 등의 서류가 회사서식에 포함됩니다. 일반적으로 신청자, 서식의 종류, 사용목적, 등록 번호, 날짜, 비고 등의 항목이 대부분의 서식에 포함 됩니다. 증서나 원서, 신고서 등의 서류가 회사서식에 포함 됩니다. 일반적으로 신청자, 서식의 종류, 사용목적, 등록 번호, 날짜, 비고 등의 항목이 대부분의 서식에 포함됩니다.</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="action">
                    <div class="lt"><a href="#" class="list"></a></div>
                    <div class="rt"><a href="" class="back"></a><a href="" class="next"></a></div>
                </div>
            </div>
        </div><!-- /.content-wrapper -->

       <?php include("../pages/tpl/footer.tpl");?>
       
    </div><!-- ./wrapper -->
    
    <!-- Modal -->
    <div class="modal fade" id="myPay" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">서비스 결제함으로 이동하시겠습니까?</h4>
          </div>
          <div class="modal-body">
            해당 문서가 서비스 결제함에 담겼습니다.<br>서비스 결제함으로 이동하여 결제를 하실 수 있습니다.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-black" data-dismiss="modal">아니오</button>
            <button type="button" class="btn btn-confirm">예</button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Slimscroll -->
    <script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <script type="text/javascript">
    $(function () {
        /* favorite */
        $(".detail-view .info .favorite" ).click(function() {
          $( this ).toggleClass( "on" );
        });
        /* zoom */
        var min=12,
            max=21,
            reset = $('.detail-view').css('fontSize'),
            elm = $('.detail-view'),
            size = str_replace(reset, 'px', '');

        $('a.zoom-in').click(function() {
            if (size<=max) {
                size++;
                elm.css({'fontSize' : size});
            }
            return false;
        });

        $('a.zoom-out').click(function() {
            if (size>=min) {
                size--;
                elm.css({'fontSize' : size});
            }
            return false;
        });

        /* scroll */
        $(window).on("load resize",function(e){
            if($('.scroll > span').height() > 114){
                    $('.scroll').css('padding-right',14);
                    $('.slimScrollRail').show();
                }else{
                    $('.scroll').css('padding-right',0);
                    $('.slimScrollRail').hide();
             }
        });
        $('.scroll').slimScroll({
            size: '6px',
            height: '114px',
            distance: '0',
            alwaysVisible: true,
            railVisible: true,
            color:'#c6cad1',
            railColor: '#f1f1f1',
            opacity: 1,
            railOpacity: 1
        });
        
        /* carousel */
        $('.carousel').carousel({
          interval: false
        });
        $('#carousel').on('slid.bs.carousel', function () {
              var carouselData = $(this).data('bs.carousel');
              var currentIndex = carouselData.getItemIndex(carouselData.$element.find('.item.active'));
              var total = carouselData.$items.length;
              var text = (currentIndex + 1) + " / " + total;
              $('#carousel-index').text(text);
        });
    });

    function str_replace(haystack, needle, replacement) {
        var temp = haystack.split(needle);
        return temp.join(replacement);
    }
    </script>
  </body>
</html>