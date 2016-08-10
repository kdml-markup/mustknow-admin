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
    <script type="text/javascript" src="/dist/se2/js/HuskyEZCreator.js" charset="utf-8"></script>
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
        <div class="content-wrapper detail-wrapper qna">
           <?php include("../pages/tpl/detail-side.tpl");?>
           <div class="detail-view">
                <div class="zoom">
                    <a href="#" class="zoom-out">작게</a>
                    <a href="#" class="zoom-in">크게</a>
<!--                    <a href="#" class="fontReset">Reset</a> | -->
                </div>
                <div class="title title-area">
                    <em><strong>Q&amp;A</strong></em>
                    <h2>새 글 작성하기</h2>
	                <div class="qna_status qna_detail_info">
	                	<div class="used">
	                		<span>현재 사용 가능한 Q&amp;A 개수</span>
	                		<strong>7/10</strong>
	                	</div>
	                	<div class="period">
	                		<span>사용 가능한 기간</span>
	                		<strong>2월 13일 ~ 3월 12일</strong>
	                	</div>
	                </div>
                    <div class="qna_notice">
                        <ul>
                            <li>Q&amp;A는 기업전용 서비스로 작성하신 심화법률질문에 대해 담당 머스트노우 전문가가 직접 답변을 드립니다.</li>
                            <li>기업별로 매달 기본 00개가 제공되며, 추가적으로 구매를 원하실 경우 기업 관리자에게 문의바랍니다.</li>
                            <li>기업 내 다른 사람의 Q&amp;A를 열람하실 수 있으며, 내가 한 Q&amp;A는 마이페이지-나의 데스크-Q&nbsp;A에서 확인하실 수 있습니다.</li>
                        </ul>
                    </div>
                </div>
                <div class="article">
                   <div class="lt_section">
                        <div class="section select category">
                            <h3>카테고리</h3>
                            <div>
                            	<span id="select_category" class="select_result">카테고리를 선택해주세요
                            		<span class="select_arrow"></span>
                            	</span>
                            	<ul id="ul_category" style="display:none; position:absolute; z-index:1000;">
                            		<li>
                            			<span>계약</span>
                            		</li>
                            		<li>
                            			<span>협상</span>
                            		</li>
                            		<li>
                            			<span>형사고소</span>                            		
                            		</li>
                            		<li>
                            			<span>채권회수</span>
                            		</li>
                            		<li>
                            			<span>부동산</span>
                            		</li>
                            		<li>
                            			<span>지재권</span>                            		
                            		</li>
                            	</ul>
                            </div>
                        </div>
                        <div class="section select admin">
                            <h3>담당전문가</h3>
                            <div>
                            	<span id="select_admin" class="select_result">담당자를 선택해주세요
                            		<span class="select_arrow"></span>
                            	</span>
                            	<ul id="ul_admin" style="display:none; position:absolute; z-index:1000;">
                            		<li>
                            			<span>홍길동 (admin001)</span>
                            		</li>
                            		<li>
                            			<span>박진만 (admin002)</span>
                            		</li>
                            		<li>
                            			<span>김길동 (admin003)</span>                            		
                            		</li>
                            		<li>
                            			<span>이영업 (admin004)</span>
                            		</li>
                            	</ul>
                            </div>
                        </div>
                    </div>
                    <div class="rt_section">
                        <div class="section">
                            <h3>제목</h3>
                            <div>
                            	<input type="text" name="name" placeholder="제목을 입력해주세요" />
                            </div>
                            <div class="letter_count"><span>0</span>&nbsp;/&nbsp;100자</div>
                        </div>
                        <div class="section">
                            <h3>내용</h3>
                            <div>
                            	<textarea name="ir1" id="ir1" rows="10" cols="90" style="width:100%; min-width:655px;"></textarea>
                            </div>
                            <div class="letter_count"><span>0</span>&nbsp;/&nbsp;1000자</div>
                        </div>
                    </div>
                </div>
                <div class="action">
                    <div class="reset"><a href="#" class="reset"></a></div>
                    <div class="write"><a href="" class="cancel" data-toggle="modal" data-target="#txtover" ></a><a href="" class="done"></a></div>
                </div>
            </div>       
        </div><!-- /.content-wrapper -->
        
       <?php include("../pages/tpl/footer.tpl");?>
       
    </div><!-- ./wrapper -->
    
    <!-- Modal -->
    <div class="modal fade" id="txtover" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">글자수를 초과하였습니다.</h4>
          </div>
          <div class="modal-body">
            최대 100자로 수정해주세요.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-confirm">확인</button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="txtover" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">글자수를 초과하였습니다.</h4>
          </div>
          <div class="modal-body">
            최대 1000자로 수정해주세요.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-confirm">확인</button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="txtover" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Q&amp;A 개수를 모두 소진하였습니다.</h4>
          </div>
          <div class="modal-body">
            2016.00.00부터 다시 사용 가능합니다.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-confirm">확인</button>
          </div>
        </div>
      </div>
    </div>   
    
    <div class="modal fade" id="txtover" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Q&amp;A가 00개 남았습니다.</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-confirm">확인</button>
          </div>
        </div>
      </div>
    </div>  
    
    <div class="modal fade" id="txtover" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Q&amp;A가 1개 차감됩니다.</h4>
          </div>
          <div class="modal-footer">
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
        
        $('#select_category').click(function() {
        	$('#ul_admin').hide();
        	
	       if($('#ul_category').css('display') == 'none'){
	       	  $('#ul_category').show();	
	       } else{
	       	  $('#ul_category').hide();
	       }
        });
        
        $('#select_admin').click(function() {
        	$('#ul_category').hide();
        	
	       if($('#ul_admin').css('display') == 'none'){
	       	  $('#ul_admin').show();	
	       } else{
	       	  $('#ul_admin').hide();
	       }
        });
        
        $('#ul_category li').click(function() {
	       	$("#select_category").get(0).innerHTML = ( $(this).children().get(0).innerHTML+ '<span class="select_arrow"></span>');
	       	$("#select_category").css("color", "#4f555e");
	       	$('#ul_category').hide();
        });
        
		$('#ul_admin li').click(function() {
	       	$("#select_admin").get(0).innerHTML = ( $(this).children().get(0).innerHTML+ '<span class="select_arrow"></span>');
	       	$("#select_admin").css("color", "#4f555e");
	       	$('#ul_admin').hide();
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
        
        var oEditors = [];
		nhn.husky.EZCreator.createInIFrame({
		    oAppRef: oEditors,
		    elPlaceHolder: "ir1",
		    sSkinURI: "/dist/se2/SmartEditor2Skin.html",
		    fCreator: "createSEditor2"
		});

    });

    function getProducInfoHTML() {
		oEditors.getById["ir1"].exec("UPDATE_CONTENTS_FIELD", []);
		return document.getElementById("ir1").value;
	
	} 

    function str_replace(haystack, needle, replacement) {
        var temp = haystack.split(needle);
        return temp.join(replacement);
    }
    </script>
  </body>
</html>