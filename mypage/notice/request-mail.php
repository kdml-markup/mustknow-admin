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
                   <h2>문의메일함</h2>
               </div>
                <?
                    $type = "t11"; //매뉴얼 t11
                    $array = array(
                        array(
                            "title"=>"법무, 지재권, 세무 개별진단",
                            "date"=>"2016-05-29",
                            "type"=>"동영상강의",
                            "category"=>"협상",
                            "impt"=>"3",
                            "writer"=>"머스트노우",
                            "status"=>"delay"
                        ),
                        array(
                            "title"=>"SV들의 컴플라이언스",
                            "date"=>"2016-05-27",
                            "type"=>"체크앤팁",
                            "category"=>"계약",
                            "impt"=>"1",
                            "writer"=>"머스트노우",
                            "status"=>"complete"
                        ),
                        array(
                            "title"=>"법무, 지재권, 세무 개별진단",
                            "date"=>"2016-05-25",
                            "type"=>"매뉴얼",
                            "category"=>"형사 고소",
                            "impt"=>"4",
                            "writer"=>"머스트노우",
                            "status"=>"complete"
                        ),
                        array(
                            "title"=>"SV들의 컴플라이언스",
                            "date"=>"2016-05-22",
                            "type"=>"사례해설",
                            "category"=>"부동산",
                            "impt"=>"2",
                            "writer"=>"머스트노우",
                            "status"=>"delay"
                        ),
                        array(
                            "title"=>"법무, 지재권, 세무 개별진단",
                            "date"=>"2016-05-20",
                            "type"=>"카드인포",
                            "category"=>"공정거래",
                            "impt"=>"1",
                            "writer"=>"머스트노우",
                            "status"=>"delay"
                        ),
                        array(
                            "title"=>"SV들의 컴플라이언스",
                            "date"=>"2016-05-27",
                            "type"=>"칼럼",
                            "category"=>"스타트업",
                            "impt"=>"3",
                            "writer"=>"머스트노우",
                            "status"=>"complete"
                        ),
                        array(
                            "title"=>"법무, 지재권, 세무 개별진단",
                            "date"=>"2016-05-03",
                            "type"=>"칼럼",
                            "category"=>"가맹사업",
                            "impt"=>"4",
                            "writer"=>"머스트노우",
                            "status"=>"complete"
                        ),
                        array(
                            "title"=>"SV들의 컴플라이언스",
                            "date"=>"2016-05-11",
                            "type"=>"사례해설",
                            "category"=>"계약",
                            "impt"=>"2",
                            "writer"=>"머스트노우",
                            "status"=>"complete"
                        )
                    );
                 ?>
                 <!--[D] list view -->
                        <div class="table-list contract _table-list">
                            <table>
                                <caption>알림내역 전체</caption>
                                <colgroup>
                                    <col width="72px">
                                    <col width="72px">
                                    <col width="99px">
                                    <col />
                                    <col width="99px">
                                    <col width="103px" />
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th scope="col"><input type="checkbox"></th>
                                        <th scope="col"><span>no.</span></th>
                                        <th scope="col"><span>유형</span><em class="controller"></em></th>
                                        <th scope="col"><span>제목</span><em class="controller"></em></th>
                                        <th scope="col"><span>작성일</span><em class="controller"></em></th>
                                        <th scope="col"><span>상태</span><em class="controller"></em></th>
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
                                        $i = rand(0,7);
                                    ?>
                                    <tr>
                                        <td class="td-type-first"><input type="checkbox" id="fv<? echo $count ?>"><label for="fv<? echo $count ?>" class="blind"><? echo $array[$i]['title'] ?></label></td>
                                        <td class="td-type-1"><span>9,999</span></td>
                                        <td class="td-type-1"><span><? echo $array[$i]['type'] ?></span></td>
                                        <td class="title"><a href="request-mail-detail.php"><? echo $array[$i]['title'] ?></a></td>
                                        <td class="td-type-1 td-type-last"><span><? echo $array[$i]['date'] ?></span></td>
                                        <td class="td-type-1 td-type-last"><span><? if( $array[$i]['status'] === "complete" ) {?><span class="delay">답변대기</span><?}else{?><span class="complete">답변완료</span><?} ?></span></td>
                                    </tr>
                                    <? } ?>
                                </tbody>
                     </table>
                </div>
                  <!--[D] 페이지네이션 -->
                    <div class="wrap_pagination">
                        <a href="#" class="delete" data-toggle="modal" data-target="#delContent">선택 삭제</a>
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
            
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <script>
    $(function () {
        //dropdown menu
        $("._nav-mypage dl:eq(2) dt").addClass("on mn3");
    });
    </script>
  </body>
</html>