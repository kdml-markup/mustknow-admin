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
               
               <div class="myservice_lt">
                   <div class="title_min">
                       <h2>즐겨찾기 콘텐츠</h2>
                   </div>
                   <div class="mybox">
                       <h3>홍길동님은 현재 <em>12개월 Data 서비스</em>를 이용 중입니다</h3>
                       <div class="user">
                           <ul>
                               <li><strong class="time" style="width:158px">Data 서비스 이용기간</strong><span>2016-02-02 ~ 2017-02-01</span></li>
                               <li><strong class="term" style="width:158px">잔여 Data 서비스 기간</strong><span>11개월 20일</span></li>
                           </ul>
                       </div>
                   </div>
                   <!--[D] 기업 회원 -->
                   <div class="mybox">
                       <h3>현재 <em>기업 Q&A 서비스</em>를 이용 중입니다</h3>
                       <div class="corp">
                           <ul>
                               <li><strong class="num" style="width:182px">현재 사용 가능한 Q&A 개수</strong><span>7 / 10</span></li>
                               <li><strong class="time" style="width:182px">Q&A 사용 가능 기간</strong><span>06-02 ~ 06-31</span></li>
                           </ul>
                       </div>
                   </div>
                   <!--//[D] 기업 회원 -->
               </div>
               
               <div class="myservice_rt">
                   <div class="title_min">
                       <h2>즐겨찾기 콘텐츠</h2>
                   </div>
                   <!--[D] list view -->
                   <div class="wrap_table_type">
                       <div class="table-list contract _table-list">
                            <table>
                                <caption>서비스 이력</caption>
                                <colgroup>
                                    <col width="72px">
                                    <col>
                                    <col width="110px">
                                    <col width="110px">
                                    <col width="185px">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th scope="col"><span>no.</span></th>
                                        <th scope="col"><span>Data 서비스 이용내역</span></th>
                                        <th scope="col"><span>서비스 신청자</span></th>
                                        <th scope="col"><span>서비스 결제자</span></th>
                                        <th scope="col"><span>서비스 기간</span></th>
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
        //                                        $i = rand(0,7);
                                    ?>
                                    <tr>
                                        <td class="td-type-first"><? echo $count ?></td>
                                        <td class="td-type-1"><span><em class="chara">12개월</em> Data 서비스</span></td>
                                        <td class="td-type-1"><span>김길동</span></td>
                                        <td class="td-type-1"><span>김길동</span></td>
                                        <td class="td-type-1 td-type-last"><span>0000.00.00 ~ 0000.00.00</span></td>
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
        $("._nav-mypage dl:eq(1) dt").addClass("on mn2");
    });
    </script>
  </body>
</html>