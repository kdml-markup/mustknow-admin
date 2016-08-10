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
        <div class="content-wrapper">
           <div class="content main mypage">
            
               <?php include("../menu.php"); ?>
               <div class="title_min">
                   <h2>알림내역</h2><em>*알림내역은 최대 7일까지 보관되며 이후에는 자동삭제 됩니다.</em>
               </div>
                <?
                    $type = "t11"; //매뉴얼 t11
                    $array = array(
                        array(
                            "title"=>"머스트노우에서 새롭게 서비스를 새행합니다.",
                            "date"=>"2016-05-29",
                            "sort"=>"공지사항",
                            "new"=>"true"
                        ),
                        array(
                            "title"=>"6월 프로모션이 시작되었습니다.",
                            "date"=>"2016-05-27",
                            "sort"=>"공지사항",
                            "new"=>"false"
                        ),
                        array(
                            "title"=>"고객님의 콘텐츠 요청이 채택되었습니다.",
                            "date"=>"2016-05-27",
                            "sort"=>"문의 메일함",
                            "new"=>"false"
                        ),
                        array(
                            "title"=>"고객님의 문의메일에 대한 답변이 등록되었습니다.",
                            "date"=>"2016-05-27",
                            "sort"=>"콘텐츠 요청",
                            "new"=>"false"
                        )
                    );
                 ?>
                 <!--[D] list view -->
                 <!-- Custom Tabs -->
                  <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs nav-column-4">
                      <li class="active"><a href="#tab_1" data-toggle="tab">전체</a></li>
                      <li><a href="#tab_2" data-toggle="tab">공지사항</a></li>
                      <li><a href="#tab_3" data-toggle="tab">콘텐츠 요청</a></li>
                      <li><a href="#tab_4" data-toggle="tab">문의 메일함</a></li>
                    </ul>
                    <div class="tab-content">
                         <div class="table-list contract _table-list">
                            <table class="simple_tb">
                                <caption>알림내역 전체</caption>
                                <colgroup>
                                    <col width="72px">
                                    <col width="99px">
                                    <col />
                                    <col width="103px" />
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th scope="col"><span>no.</span></th>
                                        <th scope="col"><span>카테고리</span><em class="controller"></em></th>
                                        <th scope="col"><span>제목</span><em class="controller"></em></th>
                                        <th scope="col"><span>발행일</span></th>
                                    </tr>
                                </thead>
                                <tbody  class="tab-pane active" id="tab_1">
                                    <tr style="display: none;">
                                        <td class="list-empty" colspan="4">
                                            <span>알림내역이 없습니다.</span>
                                        </td>
                                    </tr>
                                    <?                     
                                    $count = 0;
                                    while(++$count <= 16){ 
                                        $i = rand(0,3);
                                    ?>
                                    <tr>
                                        <td class="td-type-1 td-type-first"><span>9,999</span></td>
                                        <td class="td-type-2"><span><? echo $array[$i]['sort'] ?></span></td>
                                        <td class="title"><a href="check-and-tip-detail.php"><? echo $array[$i]['title'] ?><? if( $array[$i]['new'] == "true" ) {?><i class="new">new</i><?} ?></a></td>
                                        <td class="td-type-1 td-type-last"><span><? echo $array[$i]['date'] ?></span></td>
                                    </tr>
                                    <? } ?>
                                </tbody>
                             
                        <tbody class="tab-pane" id="tab_2">
                            <tr>
                                <td class="list-empty" colspan="4">
                                    <span>알림내역이 없습니다.</span>
                                </td>
                            </tr>
                            <?                     
                            $count = 0;
                            while(++$count <= 16){ 
                                $i = rand(0,3);
                            ?>
                            <tr style="display:none">
                                <td class="td-type-1 td-type-first"><span>9,999</span></td>
                                <td class="td-type-2"><span>공지사항</span></td>
                                <td class="title"><a href="check-and-tip-detail.php"><? echo $array[$i]['title'] ?><? if( $array[$i]['new'] == "true" ) {?><i class="new">new</i><?} ?></a></td>
                                <td class="td-type-1 td-type-last"><span><? echo $array[$i]['date'] ?></span></td>
                            </tr>
                            <? } ?>
                        </tbody>
                        <tbody class="tab-pane" id="tab_3">
                            <tr style="display: none;">
                                <td class="list-empty" colspan="4">
                                    <span>알림내역이 없습니다.</span>
                                </td>
                            </tr>
                            <?                     
                            $count = 0;
                            while(++$count <= 16){ 
                                $i = rand(0,3);
                            ?>
                            <tr>
                                <td class="td-type-1 td-type-first"><span>9,999</span></td>
                                <td class="td-type-2"><span>콘텐츠 요청</span></td>
                                <td class="title"><a href="check-and-tip-detail.php"><? echo $array[$i]['title'] ?><? if( $array[$i]['new'] == "true" ) {?><i class="new">new</i><?} ?></a></td>
                                <td class="td-type-1 td-type-last"><span><? echo $array[$i]['date'] ?></span></td>
                            </tr>
                            <? } ?>
                        </tbody>
                        <tbody class="tab-pane" id="tab_4">
                            <tr style="display: none;">
                                <td class="list-empty" colspan="4">
                                    <span>알림내역이 없습니다.</span>
                                </td>
                            </tr>
                            <?                     
                            $count = 0;
                            while(++$count <= 16){ 
                                $i = rand(0,3);
                            ?>
                            <tr>
                                <td class="td-type-1 td-type-first"><span>9,999</span></td>
                                <td class="td-type-2"><span>문의 메일함</span></td>
                                <td class="title"><a href="check-and-tip-detail.php"><? echo $array[$i]['title'] ?><? if( $array[$i]['new'] == "true" ) {?><i class="new">new</i><?} ?></a></td>
                                <td class="td-type-1 td-type-last"><span><? echo $array[$i]['date'] ?></span></td>
                            </tr>
                            <? } ?>
                        </tbody>
                     </table>
                </div>
                      </div><!-- /.tab-pane -->
                    </div><!-- /.tab-content -->
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
                  </div><!-- nav-tabs-custom -->
                <!--//[D] list view -->
            </div>       
        <!-- /.content-wrapper -->

       <?php include("../../pages/tpl/footer.tpl");?>
       
    </div><!-- ./wrapper -->
            
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <script>
    $(function () {
        //dropdown menu
        $("._nav-mypage dl:eq(2) dt").addClass("on mn1");
    });
    </script>
  </body>
</html>