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
        <div class="content-wrapper detail-wrapper land">
           <?php include("../pages/tpl/detail-side.tpl");?>
           <div class="detail-view">
                <div class="zoom">
                    <a href="#" class="zoom-out">작게</a>
                    <a href="#" class="zoom-in">크게</a>
                </div>
                <div class="title">
                    <em><strong>사례해설 &#183; </strong>부동산</em>
                    <h2>상호계산계약관계에 있는 업체에 제3의 업체로 부터 양수한 금전채권을 별도로 행사할 수 있는지 알 수 있는 방법은 무엇인가요?</h2>
                    <div class="info">
                        <ul>
                            <li><em>발행일</em>2015-11-14</li>
                            <li><em>조회수</em>354</li>
                            <li><em>중요도</em>3</li>
                        </ul>
                        <button type="button" class="favorite">즐겨찾기 추가</button>
                    </div>
                    <div class="author">
                        <ul>
                            <li><img src="../../dist/img/author.png" alt="작성자 사진"><em>작성자</em><strong>박진만</strong></li>
                            <li><img src="../../dist/img/author.png" alt="감수자 사진"><em>감수자</em><strong>박진만</strong></li>
                        </ul>
                    </div>
                </div>
                <div class="article">
                   <div class="lt_section">
                        <div class="section">
                            <h3>사례</h3>
                            <p>계속적 거래관계가 있는 A업체와는 현재 상호계산계약관계에 있습니다. 얼마 전에 A업체 에 대하여 금전채권을 가지고 있는 B업체로부터 채권을 양수하였는데, 해당 채권을 별도 로 A업체에 대하여 행사할 수 있는지 궁금합니다. 아니면 양사가 상호계산계약관계에 있으므로 해당 채권 역시 상호계산범위로 포함되어 계상되는 것인가요?</p>
                        </div>
                        <div class="section">
                            <h3>결론</h3>
                            <p>B업체로부터 양수한 채권을 A업체에 대하여 별도로 행사할 수 있습 니다. 제3자로부터 양 수한 채권 즉, 귀사가 B업체로부터 양수한 채권은 거래로 발생한 채권에 해당하지 않으므 로 상호계산이 대상이 되지 않기 때문입니다. 즉, 귀사가 B업체로부터 양수한 채권은 거래로 발생한 채권에 해당되지 않습니다.</p>
                        </div>
                    </div>
                    <div class="rt_section">
                        <div class="section">
                            <h3>해설</h3>
                            <p class="scroll">
                              <span>
                               <!--[D] 글 시작 -->
                               우선 상호계산이란 상인간 또는 상인·비상인간에 계속적인 거래관계가 있는 경우에 일 정한 기간의 거래로 채권·채무의 총액에 관하여 상계(相計)하고 그 잔액을 지급할 것을 약정하는 계약을 의미합니다(상법 제72조). 상사거래에 있어 일정한 기간 거래가 계속될 때 개개의 거래시마다 대금결제를 하여야 한다면 불편할 수 있으므로 일정한 시기에 그 총액을 계상하여 결제할 수 있도록 하는 것입니다. 즉, 기간을 정한 때에는 그 기간마다, 기간을 정하지 아니한 때에는 6개월마다 총액을 계상하여 결제하면 되는 것입니다.<br>
                                만약 귀사가 B업체로부터 받은 금전채권이 상호계산의 대상에 해당하게 된다면 상호 계산의 범위로 포함되어 계상되는 것이고, 해당 채권만 별도로 행사하지 못할 것입니 다. 그러나 상호계산의 대상이 되는 것은 일정기간 동안의 거래로 발생한 채권입니다. 제3자로부터 양수한 채권 즉, 귀사가 B업체로부터 양수한 채권은 거래로 발생한 채권 에 해당하지 않으므로 상호계산이 대상이 되지 않는 것입니다. 사무관리, 부당이득, 불법행위 등으로 인한 법정 채권과 어음 채권, 그리고 담보부 채권도 역시 상호계산의 대상에 해당하지 않습니다. 어음 기타의 상업증권의 경우에는 채무자가 변제하지 않을 때에 당사자자 그 항목을 예외적으로 상호계산에서 제거할수 있다는 것이 상법의 태도입니다. 그러므로 A업체로부터 받은 어음의 기한이 지났 음에도 불구하고 A업체가 대금을 변제하지 않았다면 질의주신 사안과 동일하게 어음 채권을 별도로 A업체에 대하여 행사하실 수 있으니 참고하시기 바랍니다.
                                <!--//[D] 글 종료 -->
                                </span>
                            </p>
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
            if($('.scroll > span').height() > 344){
                    $('.scroll').css('padding-right',14);
                    $('.slimScrollRail').show();
                }else{
                    $('.scroll').css('padding-right',0);
                    $('.slimScrollRail').hide();
             }
        });
        $('.scroll').slimScroll({
            size: '6px',
            height: '344px',
            distance: '0',
            alwaysVisible: true,
            railVisible: true,
            color:'#c6cad1',
            railColor: '#f1f1f1',
            opacity: 1,
            railOpacity: 1
        });
    });

    function str_replace(haystack, needle, replacement) {
        var temp = haystack.split(needle);
        return temp.join(replacement);
    }
    </script>
  </body>
</html>