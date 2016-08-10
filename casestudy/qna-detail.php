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
        <div class="content-wrapper detail-wrapper qna qnadetail">
           <?php include("../pages/tpl/detail-side.tpl");?>
           <div class="detail-view">
                <div class="zoom">
                    <a href="#" class="zoom-out">작게</a>
                    <a href="#" class="zoom-in">크게</a>
<!--                    <a href="#" class="fontReset">Reset</a> | -->
                </div>
                <div class="title">
                    <em><strong>Q&amp;A</strong></em>
                    <h2>계약해제조항 작성 시 반드시 알아두어야 할 5가지는 어떤 건가요?</h2>
                    <div class="info">
                        <ul>
                            <li><em>발행일</em>2015-11-14</li>
                            <li><em>조회수</em>354</li>
                            <li><em>상태</em><span class="answer_status on"></span></li>
                        </ul>
                    </div>
                    <div class="author">
                        <ul>
                            <li><img src="../../dist/img/author.png" alt="작성자 사진"><em>작성자</em><strong>영업3팀 홍길동</strong></li>
                            <li><img src="../../dist/img/author.png" alt="감수자 사진"><em>답변자</em><strong>박진만</strong></li>
                        </ul>
                    </div>
                </div>
                <div class="article">
                   <div class="lt_section">
                        <div class="section">
                            <h3>댓글</h3>
                            	<ul class="scroll qna_review">
                            		<!-- <li class="none">
                            			<span>작성된 댓글이 없습니다.</span>
                            		</li> -->
                            		<li>
                            			<dl>
                            				<dt>
                            					<img src="../../dist/img/author.png" />
                            					<strong>박진만</strong><em>mustknow admin</em>
                            				</dt>
                            				<dt>
                            					<span>계약위반 시 바로 일정적으로 해제통보를 할 수 있게 하지 말고, 상대방에게 일정한 기간을 정해 그 시정을 요구한 뒤 그럼에도 시정이 되지 않을 경우에 한해서...</span>
                            					<a href="#">더보기</a>
                            				</dt>
                            				<dd>2016-05-06&nbsp;19:39</dd>
                            			</dl>
                            		</li>
                            		<li>
                            			<dl>
                            				<dt>
                            					<img src="../../dist/img/author.png" />
                            					<strong>박진만</strong><em>mustknow admin</em>
                            				</dt>
                            				<dt>
                            					<span>계약위반 시 바로 일정적으로 해제통보를 할 수 있게 하지 말고, 상대방에게 일정한 기간을 정해 그 시정을 요구한 뒤 그럼에도 시정이 되지 않을 경우에 한해서...</span>
                            					<a href="#">더보기</a>
                            				</dt>
                            				<dd>2016-05-06&nbsp;19:39</dd>
                            			</dl>
                            		</li>
                            		<li>
                            			<dl>
                            				<dt>
                            					<img src="../../dist/img/author.png" />
                            					<strong>박진만</strong><em>mustknow admin</em>
                            				</dt>
                            				<dt>
                            					<span>계약위반 시 바로 일정적으로 해제통보를 할 수 있게 하지 말고, 상대방에게 일정한 기간을 정해 그 시정을 요구한 뒤 그럼에도 시정이 되지 않을 경우에 한해서...</span>
                            					<a href="#">더보기</a>
                            				</dt>
                            				<dd>2016-05-06&nbsp;19:39</dd>
                            			</dl>
                            		</li>
                            	</ul>
                            	<div class="write_review">
                            		<div class="placeholder">
	                            		<!-- <textarea name="comment" placeholder="댓글을 입력해주세요"></textarea> -->
	                            		<textarea name="message" placeholder="댓글을 입력해주세요"></textarea>
	                            	</div>
                            		<div>
                            			<div class="letter_count"><span>0</span>&nbsp;/&nbsp;500자</div>
                            			<a href="#">
                            				<img src="../../dist/img/btn_input.png">
                            			</a>
                            		</div>
                            	</div>
                        </div>
                    </div>
                    <div class="rt_section">
                        <div class="section">
                            <h3>질문</h3>
                            <p class="scroll">계약해제조항 작성 시 반드시 알아두어야 할 5가지는 어떤 건가요? 을이 본 계약상의 의무를 위반한 경우 갑은 계약을 해제할 수 있다라고 되어 있는 경우, 이 조항에는 원인(계약상의 의무위반)만이 규정 되어 있지 결과에 대한 언급이 없는 경우 어떤 식으로 수정안을 제시하는 것이 좋은가요? </p>
                        </div>
                        <div class="section">
                            <h3>답변</h3>
                            <p class="scroll">원래 해제는 더 이상 지속하지 못할 결과가 발생했을 때 하는 것이다. 그런데 대부분의 계약서는 특정한 원인이 발생하면 바로 계약을 해제할 수 있도록 규정하고 있는데, 이는 문제다. 계약의 해제는 이혼과 마찬가지다. 관계를 종결짓겠다는 의미다. 따라서 이는 신중해야지 절대 섣불리 계약해제를 할 수 있도록 규정하면 안된다. 일정한 원인만 발생하면 바로 계약을 해제할 수 있도록 규정한 것인데, 이는 계약이 너무 쉽게 해제될 수 있는 위험이 있다. 계약을 해제하는 것은 너랑은 이제 더 이상 같이 일 못해 이제 그만 끝내라는 강력한 의사표시이므로, 실제 더 이상 계약을 같이 진행하지 못한다는 상황이 있을 때에만 허용하는 것이 옳다. 이렇듯 문제가 있는 조항이지만 서로 합의하고 서명하면 그 해제 조항이 효력을 갖는 것은 물론이다. 
을로서는 어떤 원인 뿐만 아니라 그 원인으로 인해 결과가 발생했을 때 한해서 갑이 계약을 해제할 수 있도록 규정하는 것이 안전하다. 일반적으로 을은 갑과 계약을 체결하기 위해 노력한다. 하지만 어렵게 계약을 체결하기만 하면 다가 아니다. 너무 쉽게 계약을 해제당할 수 있도록 계약서가 구성되어 있으면 그 계약은 불안전하다. 따라서 을로서는 갑이 제시하는 계약서 해제조항에 대해 결과(더 이상 계약의 목적을 달성할 수 없을 경우)를 추가해 달라고 요청해야 한다.</p>
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
                    $('.scroll').css('padding-right',10);
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