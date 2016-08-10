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
                <h2><span>RM진단</span></h2>
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
                			<div class="sort-status pull-left" data-toggle="tooltip" title="Status">
                                <div class="btn-group" data-toggle="btn-toggle" >
                                  <button type="button" class="btn btn-default active">전체</button>
                                  <button type="button" class="btn btn-default">미진행</button>
                                  <button type="button" class="btn btn-default">진행 중</button>
                                  <button type="button" class="btn btn-default">완료</button>
                                </div>
                            </div>
                			<div class="sort">
                                <select class="select2" style="width: 100%;">
                                  <option selected="selected">발행일순</option>
                                  <option>조회순</option>
                                  <option>카테고리순</option>
                                  <option>제목순</option>
                                  <option>상태순</option>
                                </select>
                            </div>
                		</div>
                	</div>
                </div>
                <?php
                    $type = "t13"; //RM진단 t13
                    $array = array(
                        array(
                            "title"=>"계약법 기초 - 계약 체결시 유의사항",
                            "date"=>"2016-05-30",
                            "impt"=>"3",
                            "count"=>"20",
                            "status"=>"rm-complete",
                            "status-text"=>"완료"
                        ),
                        array(
                            "title"=>"협상 중급 - 2016 중급 회계 제목 중급 경제법률시험",
                            "date"=>"2016-05-29",
                            "impt"=>"10",
                            "count"=>"1",
                            "status"=>"rm-progress",
                            "status-text"=>"진행 중"
                        ),
                        array(
                            "title"=>"공정거래 고급 - 독점규제 및 공정거래에 관한 법률위반죄로 처벌된 사례",
                            "date"=>"2016-05-28",
                            "impt"=>"7",
                            "count"=>"15",
                            "status"=>"rm-complete",
                            "status-text"=>"완료"
                        ),
                        array(
                            "title"=>"지재권 기초 - 산업재산권법, 민법개론, 자연과학개론",
                            "date"=>"2016-05-27",
                            "impt"=>"7",
                            "count"=>"120",
                            "status"=>"rm-stop",
                            "status-text"=>"미진행"
                        ),
                        array(
                            "title"=>"형사고소 고급 - 2016 경찰직 승진시험 형사소송법 문제",
                            "date"=>"2016-05-26",
                            "impt"=>"10",
                            "count"=>"7",
                            "status"=>"rm-progress",
                            "status-text"=>"진행 중"
                        ),
                        array(
                            "title"=>"채권회수 기초 - 채권회수 절차 및 방법",
                            "date"=>"2016-05-26",
                            "impt"=>"10",
                            "count"=>"156",
                            "status"=>"rm-complete",
                            "status-text"=>"완료"
                        ),
                        array(
                            "title"=>"부동산 중급 - 부동산 공시법, 부동산 세법, 부동산 공법 문제",
                            "date"=>"2016-05-26",
                            "impt"=>"10",
                            "count"=>"156",
                            "status"=>"rm-complete",
                            "status-text"=>"완료"
                        ),
                        array(
                            "title"=>"IT 분쟁 고급 - 해외 법률분쟁 공동대처 관련 문제",
                            "date"=>"2016-05-26",
                            "impt"=>"10",
                            "count"=>"156",
                            "status"=>"rm-stop",
                            "status-text"=>"미진행"
                        )
                    );
                ?>
                 <!--[D] list view -->
                 <div class="table-list rm-table _table-list">
                    <table>
                        <caption>사례해설</caption>
                        <colgroup>
                            <col width="53px">
                            <col width="91px">
                            <col width="51px">
                            <col />
                            <col width="101px" />
                            <col width="89px" />
                            <col width="103px" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col"><span>no.</span></th>
                                <th scope="col"><span>카테고리</span><em class="controller"></em></th>
                                <th scope="col"><span>중요도</span><em class="controller"></em></th>
                                <th scope="col"><span>제목</span><em class="controller"></em></th>
                                <th scope="col"><span>발행일</span><em class="controller"></em></th>
                                <th scope="col"><span>조회수</span><em class="controller"></em></th>
                                <th scope="col"><span>상태</span><em class="controller"></em></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="display: none;">
                                <td class="list-empty" colspan="7">
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
                                <td class="td-type-2"><span><? echo $array[$i]['impt'] ?></span></td>
                                <td class="title"><a href="diagnosis-detail.php"><? echo $array[$i]['title'] ?></a></td>
                                <td class="td-type-1"><span><? echo $array[$i]['date'] ?></span></td>
                                <td class="td-type-1"><span><? echo $array[$i]['count'] ?></span></td>
                                <td class="td-type-1"><span class="<? echo $array[$i]['status'] ?>"><? echo $array[$i]['status-text'] ?></span></td>
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
                          <strong><em>사례해설 - 부동산</em></strong>
                          <h3><a href="diagnosis-detail.php"><? echo mb_strimwidth($array[$i]['title'],'0','57',"...","utf-8"); ?></a></h3>
                          <span class="date"><? echo $array[$i]['date'] ?></span><span class="imp"> | 중요도 <? echo $array[$i]['impt'] ?></span><span class="imp"> | 조회수 <? echo $array[$i]['count'] ?></span>
                          <button type="button" class="status <? echo $array[$i]['status'] ?>">즐겨찾기 추가</button>
                        </li>
                        <? } ?>
                        <li class="list-empty" style="display:none">검색결과가 없습니다.</li>
                    <!-- End of grid blocks -->
                    </ul>
                  <!--[D] 페이지네이션 -->
                    <div class="wrap_pagination">
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