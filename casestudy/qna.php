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
    <?php include("../pages/tpl/advertising.tpl"); ?>
    <div class="wrapper">

      <?php include("../pages/tpl/header.tpl");
            include("../pages/tpl/aside.tpl"); ?>

      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="title-area">
                <h2><span>Q&amp;A</span></h2>
                <div class="qna_status">
                	<div class="used">
                		<span>현재 사용 가능한 Q&amp;A 개수</span>
                		<strong>7/10</strong>
                	</div>
                	<div class="period">
                		<span>사용 가능한 기간</span>
                		<strong>2월 13일 ~ 3월 12일</strong>
                	</div>
                	<p>
                		<a href="#">새 글 작성하기</a>
                	</p>
                </div>
            </div>
           <div class="content main">
              <div class="sch_filter">
                	<div class="sch_area">
                		<input type="text" placeholder="검색어를 입력하세요."/>
                	</div>
                	<div class="filter_area">
                		<div class="list-type _list-type">
                			<ul>
                				<li class="card" style="margin-right: 8px;">
                					<a href="#"><em>썸네일형</em></a>
                				</li>
                				<li class="list on">
                					<a href="#"><em>리스트형</em></a>
                				</li>
                			</ul>
                			<div class="sort">
                                <select class="select2" style="width: 100%;">
                                  <option selected="selected">작성일순</option>
                                  <option>조회순</option>
                                  <option>카테고리순</option>
                                  <option>제목순</option>
                                </select>
                            </div>
                		</div>
                	</div>
                </div>
               <?php
                    $type = "t12"; //Q&A t11
                    $array = array(
                        array(
                            "title"=>"계약해제조항 작성 시 반드시 알아두어야 할 5 가지는 어떤 건 어쩌고",
                            "date"=>"2016-05-30",
                            "impt"=>"3",
                            "count"=>"20",
                            "txt"=>"원래 해제는 더 이상 지속하지 못할 결과가 발생했을 때 하는 것이다. 그런데 대부분의 계약서는 특정한 원인이 발생하면 바로 어쩌고 저쩌고"
                        ),
                        array(
                            "title"=>"제3자 법원명령을 수용하나요?",
                            "date"=>"2016-05-29",
                            "impt"=>"10",
                            "count"=>"1",
                            "txt"=>"원래 해제는 더 이상 지속하지 못할 결과가 발생했을 때 하는 것이다. 그런데 대부분의 계약서는 특정한 원인이 발생하면 바로 어쩌고 저쩌고"
                        ),
                        array(
                            "title"=>"법원 명령 사본을 구글에 보내려면 어떻게 해야 하나요?",
                            "date"=>"2016-05-28",
                            "impt"=>"7",
                            "count"=>"15",
                            "txt"=>"원래 해제는 더 이상 지속하지 못할 결과가 발생했을 때 하는 것이다. 그런데 대부분의 계약서는 특정한 원인이 발생하면 바로 어쩌고 저쩌고"
                        ),
                        array(
                            "title"=>"법원 명령에 구글의 이름이 명시되어 있다면 어떻게 되나요?",
                            "date"=>"2016-05-27",
                            "impt"=>"7",
                            "count"=>"120",
                            "txt"=>"원래 해제는 더 이상 지속하지 못할 결과가 발생했을 때 하는 것이다. 그런데 대부분의 계약서는 특정한 원인이 발생하면 바로 어쩌고 저쩌고"
                        ),
                        array(
                            "title"=>"계약해제조항 작성 시 반드시 알아두어야 할 5 가지는 어떤 건 어쩌고",
                            "date"=>"2016-05-26",
                            "impt"=>"10",
                            "count"=>"7",
                            "txt"=>"원래 해제는 더 이상 지속하지 못할 결과가 발생했을 때 하는 것이다. 그런데 대부분의 계약서는 특정한 원인이 발생하면 바로 어쩌고 저쩌고"
                        ),
                        array(
                            "title"=>"법원 명령 사본을 구글에 보내려면 어떻게 해야 하나요?",
                            "date"=>"2016-05-26",
                            "impt"=>"10",
                            "count"=>"156",
                            "txt"=>"원래 해제는 더 이상 지속하지 못할 결과가 발생했을 때 하는 것이다. 그런데 대부분의 계약서는 특정한 원인이 발생하면 바로 어쩌고 저쩌고"
                        )
                    );
               ?>
                <!--[D] list view -->
                 <div class="table-list table-qna _table-list">
                    <table>
                        <caption>Q&amp;A</caption>
                        <colgroup>
                            <col width="53px">
                            <col width="91px">
                            <col />
                            <col width="85px">
                            <col width="80px">
                            <col width="101px" />
                            <col width="89px" />
                            <col width="82px" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col"><span>no.</span></th>
                                <th scope="col"><span>카테고리</span><em class="controller"></em></th>
                                <th scope="col"><span>제목</span><em class="controller"></em></th>
                                <th scope="col"><span>부서</span><em class="controller"></em></th>
                                <th scope="col"><span>작성자</span></th>
                                <th scope="col"><span>작성일</span><em class="controller"></em></th>
                                <th scope="col"><span>조회수</span><em class="controller"></em></th>
                                <th scope="col"><span>상태</span><em class="controller"></em></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="display: none;">
                                <td class="list-empty" colspan="8">
                                    <span>검색결과가 없습니다.</span>
                                </td>
                            </tr>
                            <?                     
                            $count = 0;
                            while(++$count <= 16){ 
                                $i = rand(0,5);
                            ?>
                            <tr>
                                <td class="td-type-1"><span>9,999</span></td>
                                <td class="td-type-2"><span>형사고소</span></td>
                                <td class="title"><a href="video-lectures-detail.php"><? echo $array[$i]['title'] ?></a></td>
                                <td class="td-type-1"><span>영업3팀</span></td>
                                <td class="td-type-1"><span>홍길동</span></td>
                                <td class="td-type-1"><span><? echo $array[$i]['date'] ?></span></td>
                                <td class="td-type-1"><span><? echo $array[$i]['count'] ?></span></td>
                                <td class="answer_status">
                                	<span class="on"></span>
                                </td>
                            </tr>
                            <? } ?>
                        </tbody>
                     </table>
                </div>
                <!--//[D] list view -->
                <!--[D] card view -->
                <div role="main">
                  <ul class="tiles-wrap _tiles-wrap" style="display:none">
                    <?
                        $count = 0;
                        while(++$count <= 16){ 
                            $i = rand(0,5);
                    ?>
                    <li class="<? echo $type ?>" data-date="<? echo $array[$i]['date'] ?>" data-popularity="<? echo $array[$i]['impt'] ?>" data-issue="부동산">
                      <strong><em>Q&amp;A - 형사고소</em></strong>
                        <h3><a href="check-and-tip-detail.php"><? echo mb_strimwidth($array[$i]['title'],'0','57',"...","utf-8"); ?></a></h3>
                      <span class="date"><? echo $array[$i]['date'] ?></span><span class="imp"> | 조회수 <? echo $array[$i]['count'] ?> | </span><span class="answer_status"></span>
                        <p><a href="check-and-tip-detail.php"><? echo mb_strimwidth($array[$i]['txt'],'0','120',"...","utf-8"); ?></a></p>
                      <button type="button" class="favorites">즐겨찾기 추가</button>
                    </li>
                    <? } ?>
                    <li class="list-empty" style="display:none">검색결과가 없습니다.</li>
                    <!-- End of grid blocks -->
                  </ul>
                  <!--[D] 페이지네이션 -->
                    <div class="wrap_pagination">
                        <!--[D] 검색시 back버튼 -->
                        <a href="#" class="history">이전 목록으로 돌아가기</a>
                        <!--//[D] 검색시 back버튼 -->
                        <ul class="pagination">
                            <li class="goto first"><a href="#">처음으로</a></li>
                            <li class="goto pre"><a href="#">이전</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#">8</a></li>
                            <li><a href="#">9</a></li>
                            <li class="goto next"><a href="#">다음</a></li>
                            <li class="goto end"><a href="#">끝으로</a></li>
                        </ul>
                    </div>
                  <!--// 페이지네이션 -->
                </div>
            </div>       
        </div><!-- /.content-wrapper -->

       <?php include("../pages/tpl/footer.tpl");?>
       
    </div><!-- ./wrapper -->
            
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <script>
    $( ".tiles-wrap li .favorites" ).click(function() {
      $( this ).toggleClass( "on" );
    });
    $("._list-type li a").click(function(event){
        event.preventDefault();
        $("._table-list,._tiles-wrap").toggle();
        $(this).parents("ul").find("li").toggleClass( "on" );
    });
    //Initialize Select2 Elements
    $(".select2").select2({
        minimumResultsForSearch: -1
    });
    </script>
  </body>
</html>