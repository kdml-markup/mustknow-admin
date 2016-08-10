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
    <link rel="stylesheet" href="/mustknow-admin/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/mustknow-admin/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="/mustknow-admin/dist/css/AdminLTE.css">
    <link rel="stylesheet" href="/mustknow-admin/dist/css/mustknow.ico.css">
    <link rel="stylesheet" href="/mustknow-admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="/mustknow-admin/plugins/bootstrap-wysihtml5/tablelistStyle.css">
    <script src="/mustknow-admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="/mustknow-admin/plugins/select2/select2.full.min.js"></script>
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
               
               <div class="myevaluation_lt">
                   <div class="title_min">
                       <h2>Evaluation 결과</h2>
                   </div>
                   <div class="nav_evaluation">
                       <a href="#" class="btn_rm01 on">RM진단</a>
                       <a href="diagnosis.php" class="btn_rm02">RM평가</a>
                   </div>
               </div>
               
               <div class="myevaluation_rt">
                   <div class="title_min">
                       <h2>RM진단</h2>
                   </div>
                   <!--[D] list view -->
                   <div class="table-list contract _table-list">
                        <table>
                            <caption>RM진단</caption>
                            <colgroup>
                                <col width="72">
                                <col width="93">
                                <col width="83">
                                <col>
                                <col width="113">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th scope="col"><span>no.</span></th>
                                    <th scope="col"><span>카테고리</span><em class="controller"></em></th>
                                    <th scope="col"><span>중요도</span><em class="controller"></em></th>
                                    <th scope="col"><span>제목</span><em class="controller"></em></th>
                                    <th scope="col"><span>발행일</span><em class="controller"></em></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="display: none;">
                                    <td class="list-empty" colspan="5">
                                        <span>Data 서비스 이용내역이 없습니다.</span>
                                    </td>
                                </tr>
                                <?                     
                                $count = 0;
                                while(++$count <= 12){
                                ?>
                                <tr>
                                    <td class="td-type-first"><? echo $count ?></td>
                                    <td class="td-type-1"><span>형사고소</span></td>
                                    <td class="td-type-1"><span>3</span></td>
                                    <td class="title"><a href="evaluation-end.php">계약법 기초 - 계약 체결시 유의사항</a></td>
                                    <td class="td-type-1 td-type-last"><span>2016.06.06</span></td>
                                </tr>
                                <? } ?>
                            </tbody>
                         </table>
                    </div>
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
        $("._nav-mypage dl:eq(1) dt").addClass("on mn3");
    });
    </script>
  </body>
</html>