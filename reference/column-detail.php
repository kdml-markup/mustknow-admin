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
        <div class="content-wrapper detail-wrapper column">
           <?php include("../pages/tpl/detail-side.tpl");?>
           <div class="detail-view">
                <div class="zoom">
                    <a href="#" class="zoom-out">작게</a>
                    <a href="#" class="zoom-in">크게</a>
                </div>
                <div class="title">
                    <em><strong>칼럼 &#183; </strong>부동산</em>
                    <h2>내부자들의 영업비밀</h2>
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
                        </ul>
                    </div>
                </div>
                <div class="article">
                    <div class="lt_section">
                        <div class="section">
                            <h3>관련이미지</h3>
                            <!--[D] 동영상 -->
                            <div class="video_wrap" style="display:none">
                               <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nUYZVIlWoV8?list=PLbyLVH8m5BD0lAYDYFtxFv3vFslv2_fGq" frameborder="0" allowfullscreen=""></iframe>
                               </div>
                            </div>
                            <!--//[D] 동영상 -->
                            <!--[D] 이미지 -->
                            <div class="img_wrap">
                               <img src="../../dist/img/@temp_column.jpg">
                            </div>
                            <!--//[D] 이미지 -->
                            <div class="media-author">출처 : 네이버 영화. 내부자들 메인포스터 우장훈 검사컷.</div>
                        </div>
                    </div>
                    <div class="rt_section">
                        <div class="section">
                            <h3>본문</h3>
                            <p class="scroll">
                               <span>
                                작년에 굉장히 흥행한 ‘내부자들’이라는 영화를 보면, 막판에 우장훈 검사가 장필우 의원 일당의 비리에 대한 직접적인 증거를 확보하기 위해 그 조직에 합류하는 길을 택한다. 중요한 정보를 가장 빠르게 얻을 수 있는 것은 바로 조직의 내부자이기 때문이다. 비유가 적절한지는 모르겠으나, 기업의 영업비밀 유출 사고 역시 내부자들 즉, 이직하는 임직원들 중에서도 특히 유출되는 영업비밀과 직접적으로 관련이 있는 업무를 했었던 임직원들에 의해 가장 많이 발생한다고 한다.<br>
                                이에 기업은 직원들을 채용하면서 별도 약정을 통해 직원들에게 제한을 가하기도 하는데, 이들의 직업 선택의 자유 역시 인정되어야 하므로 한계가 있기 마련이다. 때문에 회사와 임직원 사이의 개별적인 약정 외에도 국가 차원에서 법을 통해 위와 같은 상황을 규제하고 있는데, 이것이 바로 ‘부정경쟁방지 및 영업비밀보호 에 관한 법률(이하 ‘부정경쟁방지법’이라 함)’이다. <br>
                                그럼 실제 사례를 통해 ‘부정경쟁방지법’이 보호하고자 하는 ‘영업비밀’이 무엇인지 알아보자. 모바일 콘텐츠, 게임 등을 해외에 판매하는 A회사에서 근무하던 팀장 B가 이직하면서 자신이 쓰던 컴퓨터에 저장된 문서들 중 게임 비즈니스 모델을 수출하는 과정에서 작성된 문서, 모바일 게임 사업제안서, 핸드폰 내장형 게임툴에 대한 설명문, 게임 수출계약서 등을 복사하여 가져간 사건이다.
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