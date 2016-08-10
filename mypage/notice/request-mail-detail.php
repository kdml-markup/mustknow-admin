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
        <div class="content-wrapper detail-wrapper request">
           <div class="content main mypage">
            
               <?php include("../menu.php"); ?>
                <div class="detail-view">
                <div class="title">
                    <em><strong>문의메일함 &#183; </strong>서비스</em>
                    <h2>계약해제조항 작성 시 반드시 알아두어야 할 5가지는 어떤 것인가요?</h2>
                    <div class="info">
                        <ul>
                            <li><em>작성일</em>2015-11-14</li>
                            <li><em>상태</em><span class="complete">답변완료</span></li>
                        </ul>
                    </div>
                </div>
                <div class="article">
                   <div class="lt_section">
                        <div class="section">
                            <h3>문의 내용</h3>
                            <p class="scroll">
                              <span>
                               <!--[D] 글 시작 -->
                               계약해제조항 작성 시 반드시 알아두어야 할 5가지는 어떤 건가요? 을이 본 계약상의 의무를 위반한 경우 갑은 계약을 해제할 수 있다라고 되어 있는 경우, 이 조항에는 원인(계약상의 의무위반)만이 규정 되어 있지 결과(그 계약불이행으로 인해 계약의 목적을 달성하기 어렵다)에 대한 언급이 없습니다. 어떤 식으로 수정안을 제시하는 것이 좋은가요? 계약해제조항 작성 시 반드시 알아두어야 할 5가지는 어떤 건가요? 을이 본 계약상의 의무를 위반한 경우 갑은 계약을 해제할 수 있다라고 되어 있는 경우, 이 조항에는 원인(계약상의 의무위반)만이 규정 되어 있지 결과(그 계약불이행으로 인해 계약의 목적을 달성하기 어렵다)에 대한 언급이 없습니다. 어떤 식으로 수정안을 제시하는 것이 좋은가요?
                                <!--//[D] 글 종료 -->
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="rt_section">
                        <div class="section">
                            <h3>문의 답변</h3>
                            <p class="scroll">
                              <span>
                               <!--[D] 글 시작 -->
                               원래 해제는 더 이상 지속하지 못할 결과가 발생했을 때 하는 것이다. 그런데 대부분의 계약서는 특정한 원인이 발생하면 바로 계약을 해제할 수 있도록 규정하고 있는데, 이는 문제다. 계약의 해제는 이혼과 마찬가지다. 관계를 종결짓겠다는 의미다. 따라서 이는 신중해야지 절대 섣불리 계약해제를 할 수 있도록 규정하면 안된다. 일정한 원인만 발생하면 바로 계약을 해제할 수 있도록 규정한 것인데, 이는 계약이 너무 쉽게 해제될 수 있는 위험이 있다. 계약을 해제하는 것은 너랑은 이제 더 이상 같이 일 못해 이제 그만 끝내라는 강력한 의사표시이므로, 실제 더 이상 계약을 같이 진행하지 못한다는 상황이 있을 때에만 허용하는 것이 옳다. 하지만 실제 사용하고 있는 대부분의 계약서에는 이런 심각한 고려 없이 그냥 무엇무엇한 경우 계약을 해제할 수 있다라고 되어 있는 바, 이는 근본적인 문제가 있는 조항이라는 점을 지적하고 싶다.  이렇듯 문제가 있는 조항이지만 서로 합의하고 서명하면 그 해제 조항이 효력을 갖는 것은 물론이다.<br>
                                을로서는 어떤 원인 뿐만 아니라 그 원인으로 인해 결과가 발생했을 때 한해서 갑이 계약을 해제할 수 있도록 규정하는 것이 안전하다. 일반적으로 을은 갑과 계약을 체결하기 위해 노력한다. 하지만 어렵게 계약을 체결하기만 하면 다가 아니다. 너무 쉽게 계약을 해제당할 수 있도록 계약서가 구성되어 있으면 그 계약은 불안전하다. 따라서 을로서는 갑이 제시하는 계약서 해제조항에 대해 결과(더 이상 계약의 목적을 달성할 수 없을 경우)를 추가해 달라고 요청해야 한다.
                                <!--//[D] 글 종료 -->
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="action">
                    <div class="lt"><a href="#" class="del" data-toggle="modal" data-target="#delContent"></a><a href="#" class="list"></a></div>
                    <div class="rt"><a href="" class="back"></a><a href="" class="next"></a></div>
                </div>
            </div>                        
                  </div><!-- nav-tabs-custom -->
                <!--//[D] list view -->
            </div>       
        <!-- /.content-wrapper -->

       <?php include("../../pages/tpl/footer.tpl");?>
       
    </div><!-- ./wrapper -->
           
    <!-- Modal -->
    <div class="modal fade" id="delContent" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">선택하신 게시물을 삭제하시겠습니까?</h4>
          </div>
          <div class="modal-body">
            선택하신 게시물을 삭제하시겠습니까?<br>삭제를 진행하시고 나면 복구할 수 없습니다.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-black" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-confirm">확인</button>
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
        /* scroll */
        $(window).on("load resize",function(e){
            var el = $('.scroll > span');
            $.each( el, function( i=0 ){
                var el = $('.scroll > span')[i],
                    scroll = $(el).parents('.scroll');
                if($(el).height() > 344){
                        scroll.css('padding-right',14);
                        scroll.siblings('.slimScrollRail').show();
                    }else{
                        scroll.css('padding-right',0);
                        scroll.siblings('.slimScrollRail').hide();
                 }
              i++;
            });
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
    </script>
  </body>
</html>