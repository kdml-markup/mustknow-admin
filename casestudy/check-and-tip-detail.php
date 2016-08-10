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
        <div class="content-wrapper detail-wrapper checktip">
           <?php include("../pages/tpl/detail-side.tpl");?>
           <div class="detail-view">
                <div class="zoom">
                    <a href="#" class="zoom-out">작게</a>
                    <a href="#" class="zoom-in">크게</a>
<!--                    <a href="#" class="fontReset">Reset</a> | -->
                </div>
                <div class="title">
                    <em><strong>체크앤팁 &#183; </strong>부동산</em>
                    <h2>계약 기간은 다 돼가고 장사는 더 하고 싶을 때</h2>
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
                            <h3>상황</h3>
                            <p>나는 상가임차인이다. 그런데 계약기간이 6개월 남짓 남았다. 좀 더 영업을 하고 싶다. 난 어떤 조치를 해야 하나?</p>
                        </div>
                        <div class="section">
                            <h3>설명</h3>
                            <p>나중에 채무자가 돈을 갚지 않을 때 정확한 법적 권리를 행사하려면 증빙이 정확해야 합니다.필수적인 사항을 기재한 차용증을 받아야 하며, 무통장 입금 방식으로 돈을 보내는 것이 필요합니다.</p>
                        </div>
                    </div>
                    <div class="rt_section">
                        <div class="section">
                            <h3>체크리스트</h3>
                            <p class="scroll">
                              <span>
                                  <strong class="check">장사한 기간이 5년이 되지 않았다면 임대차기간이 만료되기 6개월 전부터 1개월 전까지 사이에 계약갱신을 요구할 수 있다(상가임대차보호법 제10조 1항).</strong>
                                  <span class="check">단, 월세를 3번 이상 안 냈다면 갱신청구는 불가(따라서 월세를 잘 챙겨서 내는 것이 중요)하다. 이 경우 계약은 갱신되는데, 다만 임대인은 9%의 범위 내에서 월세 등을 인상해 줄 것을 요구할 수 있다(법 제11조 1항 단서).</span>
                                  <strong class="check">장사한 기간이 5년이 넘었다면, 가.의 갱신요구는 인정되지  않는다. 이 때는 계약 서상의 갱신요구방법을 잘 살펴보고 그에 따른다.</strong>
                                  <span class="check">예를 들어, ‘계약 만료 2개월 전까지 별다른 의사표시가 없으면 계약은 종료한다’로 되어 있으면 임차인은 계약 만료 2개월 전까지 갱신하겠다는 의사를 통지해야 한다.</span>
                                  <strong class="check">갱신을 보장받을 수 없을 때는 이미 앞선 사람에게 지급한 권리금이라도 확보하 도록 노력해야 한다.</strong>
                                  <span class="check">즉, 임대인에게 “내가 이미 앞선 임차인에게 권리금으로 000원을 지급했다. 따라서 최소한 그 권리금만이라도 받아갈 수 있도록 협조해 달라.”고 말하고는 임차인이 적극적으로 ‘다음 임차인’을 물색하기 위해 노력한다. 필요하면 공인중개사를 통해서 작자를 물색해야 한다.</span>
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
        $( ".detail-view .info .favorite" ).click(function() {
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