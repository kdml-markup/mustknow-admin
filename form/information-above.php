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
                <h2><span>내용증명</span></h2>
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
                                  <option selected="selected">조회순</option>
                                  <option>카테고리순</option>
                                  <option>중요도순</option>
                                  <option>제목순</option>
                                </select>
                            </div>
                		</div>
                	</div>
                </div>
                <?
                    $type = "t11"; //내용증명 t11
                    $array = array(
                        array(
                            "title"=>"초상권 침해에 따른 손해 배상 관련 내용증명",
                            "date"=>"2016-05-30",
                            "impt"=>"3",
                            "count"=>"20",
                            "txt"=>"우선 상호계산이란 상인간 또는 상인비상 인간에 계속적인 거래관계가 있는 경우에 일정한 기간의 거래로 채권·채무의 총 경우에 일정한 기간의 거래로 채권·채무의 총"
                        ),
                        array(
                            "title"=>"토지반환 관련 내용증명에 관한 회신",
                            "date"=>"2016-05-29",
                            "impt"=>"10",
                            "count"=>"1",
                            "txt"=>"나는 상가임차인이다. 그런데 계약기간이 6개월 남짓 남았다. 좀 더 영업을 하고싶다. 난 어떤 조치를 해야 하나?"
                        ),
                        array(
                            "title"=>"계약이행촉구 및 계약 해제통보",
                            "date"=>"2016-05-28",
                            "impt"=>"7",
                            "count"=>"15",
                            "txt"=>"작년에 굉장히 흥행한 ‘내부자들’이라는 영화를 보면, 막판에 우장훈 검사가 장필우 의원 일당의 비리에 대한 직접적인 어쩌고"
                        ),
                        array(
                            "title"=>"임대차 계약 만기에 따른 계약 갱신 변경건",
                            "date"=>"2016-05-27",
                            "impt"=>"7",
                            "count"=>"120",
                            "txt"=>"향후 법적 분쟁과정에서는, 권리자가 상대방에서 어떤 사전 조치를 취했는지가 객관적으로 증명되는 것이 중요하다..."
                        ),
                        array(
                            "title"=>"부동산 매매계약 해약통보 내용 증명",
                            "date"=>"2016-05-26",
                            "impt"=>"10",
                            "count"=>"7",
                            "txt"=>"나는 상가임차인이다. 그런데 계약기간이 6개월 남짓 남았다. 좀 더 영업을 하고 싶다. 난 어떤 조치를 해야 하나?"
                        ),
                        array(
                            "title"=>"하자보수와 관련된 내용증명",
                            "date"=>"2016-05-26",
                            "impt"=>"10",
                            "count"=>"156",
                            "txt"=>"스톡옵션(주식매수청구권)이란 회사의 입직원에게 장래 일정한 시기에 이르러 미리 예정한 가격에 회사가 보유하고...?"
                        )
                    );
                 ?>
                 <!--[D] list view -->
                 <div class="table-list contract _table-list">
                    <table>
                        <caption>내용증명</caption>
                        <colgroup>
                            <col width="55px">
                            <col width="53px">
                            <col width="91px">
                            <col width="51px">
                            <col />
                            <col width="101px" />
                            <col width="89px" />
                            <col width="101px" />
                            <col width="103px" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col"><span></span></th>
                                <th scope="col"><span>no.</span></th>
                                <th scope="col"><span>카테고리</span><em class="controller"></em></th>
                                <th scope="col"><span>중요도</span><em class="controller"></em></th>
                                <th scope="col"><span>제목</span><em class="controller"></em></th>
                                <th scope="col"><span>발행일</span></th>
                                <th scope="col"><span>조회수</span><em class="controller"></em></th>
                                <th scope="col"><span>가격</span><em class="controller"></em></th>
                                <th scope="col"><span>다운로드</span><em class="controller"></em></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="display: none;">
                                <td class="list-empty" colspan="9">
                                    <span>등록된 컨텐츠가 없습니다.</span>
                                </td>
                            </tr>
                            <?                     
                            $count = 0;
                            while(++$count <= 16){ 
                                $i = rand(0,5);
                            ?>
                            <tr>
                                <td class="bookmark"><span class=""></span></td>
                                <td class="td-type-1"><span>9,999</span></td>
                                <td class="td-type-2"><span>형사고소</span></td>
                                <td class="td-type-2"><span><? echo $array[$i]['impt'] ?></span></td>
                                <td class="title"><a href="check-and-tip-detail.php"><? echo $array[$i]['title'] ?></a></td>
                                <td class="td-type-1"><span><? echo $array[$i]['date'] ?></span></td>
                                <td class="td-type-1"><span><? echo $array[$i]['count'] ?></span></td>
                                <td class="td-type-1"><span>999,000원</span></td>
                                <td class="download">
                                	<span class=""></span>
                            		<ul class="file_type" style="display: none;">
                            			<li class="zip">
                            				<span>
                            					<a href="#">zip</a>	
                            				</span>                            				
                            			</li>
                            			<li class="hwp">
                            				<span>
                            					<a href="#">hwp</a>	
                            				</span>                            				
                            			</li>
                            			<li class="pdf">
                            				<span>
                            					<a href="#">pdf</a>	
                            				</span>                            				
                            			</li>
                            			<li class="doc">
                            				<span>
                            					<a href="#">doc</a>	
                            				</span>                            				
                            			</li>
                            		</ul>
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
                      <strong><em>내용증명-부동산</em></strong>
                        <h3><a href="check-and-tip-detail.php"><? echo mb_strimwidth($array[$i]['title'],'0','57',"...","utf-8"); ?></a></h3>
                      <span class="date"><? echo $array[$i]['date'] ?></span><span class="imp"> | 중요도 <? echo $array[$i]['impt'] ?></span><span class="imp"> | 조회수 <? echo $array[$i]['count'] ?></span>
                        <p><a href="check-and-tip-detail.php"><? echo mb_strimwidth($array[$i]['txt'],'0','120',"...","utf-8"); ?></a></p>
                       <b>999,000</b>
                      <button type="button" class="favorites">즐겨찾기 추가</button>
                      <button type="button" class="download">                      	
                		<ul class="file_type" style="display: block;">
                			<li class="zip">
                				<span>
                					<a href="#">zip</a>	
                				</span>                            				
                			</li>
                			<li class="hwp">
                				<span>
                					<a href="#">hwp</a>	
                				</span>                            				
                			</li>
                			<li class="pdf">
                				<span>
                					<a href="#">pdf</a>	
                				</span>                            				
                			</li>
                			<li class="doc">
                				<span>
                					<a href="#">doc</a>	
                				</span>                            				
                			</li>
                		</ul>
                      </button>
                    </li>
                    <? } ?>
                    <li class="list-empty" style="display:none">등록된 컨텐츠가 없습니다.</li>
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