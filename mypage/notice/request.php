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
                   <h2>콘텐츠 요청</h2><em>*콘텐츠 요청 내역과 채택된 요청에 대한 관련 링크를 확인할 수 있습니다.</em>
               </div>
                <?
                    $type = "t11"; //매뉴얼 t11
                    $array = array(
                        array(
                            "title"=>"OOO에 관한 질문을 하려고 합니다. 머스트노우의 예시문구로 작성되었으니 참고로만 부탁합니다.",
                            "date"=>"2016-05-29",
                            "type"=>"동영상강의",
                            "category"=>"협상",
                            "impt"=>"3",
                            "writer"=>"머스트노우",
                            "link"=>"#"
                        ),
                        array(
                            "title"=>"OOO에 관한 질문을 하려고 합니다. 예시문구로 작성되었습니다.",
                            "date"=>"2016-05-27",
                            "type"=>"체크앤팁",
                            "category"=>"계약",
                            "impt"=>"1",
                            "writer"=>"머스트노우"
                        )
                    );
                 ?>
                 <!--[D] list view -->
<div class="table-list contract _table-list">
                            <table>
                                <caption>알림내역 전체</caption>
                                <colgroup>
                                    <col width="64px">
                                    <col width="62px">
                                    <col />
                                    <col width="74px">
                                    <col width="74px">
                                    <col width="103px">
                                    <col width="98px">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th scope="col"><input type="checkbox"></th>
                                        <th scope="col"><span>no.</span></th>
                                        <th scope="col"><span>제목</span></th>
                                        <th scope="col"><span>조회수</span></th>
                                        <th scope="col"><span>공감수</span></th>
                                        <th scope="col"><span>작성일</span><em class="controller"></em></th>
                                        <th scope="col"><span>관련 링크</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="display: none;">
                                        <td class="list-empty" colspan="4">
                                            <span>알림내역이 없습니다.</span>
                                        </td>
                                    </tr>
                                    <?                     
                                    $count = 0;
                                    while(++$count <= 16){ 
                                        $i = rand(0,1);
                                    ?>
                                    <tr>
                                        <td class="td-type-first"><input type="checkbox" id="fv<? echo $count ?>"><label for="fv<? echo $count ?>" class="blind"><? echo $array[$i]['title'] ?></label></td>
                                        <td class="td-type-1"><span>9,999</span></td>
                                        <td class="title"><a href="check-and-tip-detail.php"><? echo $array[$i]['title'] ?><? if( $array[$i]['new'] == "true" ) {?><i class="new">new</i><?} ?></a></td>
                                        <td class="td-type-1"><span>999</span></td>
                                        <td class="td-type-1"><span>999</span></td>
                                        <td class="td-type-1"><span><? echo $array[$i]['date'] ?></span></td>
                                        <td class="link">
                                            <? if( $array[$i]['link']) {?><a href="" target="_blank" class="btn_link">링크</a><?} ?>
                                        </td>
                                    </tr>
                                    <? } ?>
                                </tbody>
                     </table>
                </div>
                  <!--[D] 페이지네이션 -->
                    <div class="wrap_pagination">
                        <a href="#" class="delete" data-toggle="modal" data-target="#myPay">선택 삭제</a>
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
           
    <!-- Modal -->
    <div class="modal fade" id="myPay" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
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
            
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <script>
    $(function () {
        //dropdown menu
        $("._nav-mypage dl:eq(2) dt").addClass("on mn2");
        
        $(".table-list table tr td.download").click(function() {
            $(".table-list table tr td.download").removeClass("open");
            $(".table-list table tr td.download > ul").hide();
            $(this).toggleClass("open");
            $(this).find("ul").toggle();
        });
    });
    </script>
  </body>
</html>