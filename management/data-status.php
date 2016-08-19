<?php
session_start();
if(!isset($_SESSION['uid']) || !isset($_SESSION['uname'])) {
//    echo "<meta http-equiv='refresh' content='0;url=login.php'>";
//    exit;
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
    <link rel="stylesheet" href="/mustknow-admin/dist/css/love.css">
    <link rel="stylesheet" href="/mustknow-admin/dist/css/mustknow.ico.css">
    <link rel="stylesheet" href="/mustknow-admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <script src="/mustknow-admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="/mustknow-admin/plugins/select2/select2.full.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini main">
    <?php include("../pages/tpl/advertising.tpl"); ?>
    <div class="wrapper">

      <?php include("../pages/tpl/header.tpl");
            include("../pages/tpl/aside-management.tpl"); ?>

      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
           <div class="main">
                <div class="func">
                    <h2>Data 서비스 신청</h2>
                    <ul>
                        <li>관리자, 구성원의 현재 사용중인 Data 서비스 현황을 하단에서 확인하실수 있습니다.</li>
                        <li>구성원의 잔여기간은 관리자의 잔여 Data 서비스 기간을 초과하지 못합니다.</li>
                        <li>구성원의 Data 서비스 현황을 부서별, 직급별로 구분하여 확인하실 수 있습니다.</li>
                    </ul>
                </div>
                <div class="management-status">
                    <div class="userinfo">
                        <h3><strong>관리자</strong><span>김수연님</span></h3>
                        <ul>
                            <li><strong>기업명 :</strong> 삼성</li>
                            <li><strong>ID :</strong> fifteenidnumber</li>
                        </ul>
                    </div>
                    <div class="datainfo">
                        <div class="datain">
                            <h3>현재 <em>12개월 Data 서비스</em>를 이용 중입니다.</h3>
                            <ul>
                                <li><strong class="ico cal">Data 서비스 이용기간</strong><span>2016-06-23 ~ 2016-04-28</span></li>
                                <li><strong class="ico cal-lim">잔여 Data 서비스 기간</strong><span><em>10개월 05일</em></span></li>
                            </ul>
                        </div>
                        <div class="datain">
                            <h3>현재 <em>Q&A 서비스</em>를 이용 중입니다.</h3>
                            <ul>
                                <li><strong class="ico qa">현재 사용 가능한 Q&A 개수</strong><span> <em>7개</em> <span class="remain_qa">06-23~07-23</span></span></li>
                                <li><strong class="ico all">총 Q&A 개수</strong><span><em>30</em> / 50개</span></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
                <div role="main">
                  <div class="wrap_mst">
                      <?
                        $array = array(
                            array(
                                "name"=>"김수연",
                                "position"=>"팀원",
                                "team"=>"재무2팀",
                                "email"=>"ddddd@mustknow.co.kr",
                                "id"=>"test1234",
                                "status"=>"사용",
                                "auth"=>"권한없음",
                                "date"=>"2016-01-02~2016-06-10",
                                "remain"=>"00개월00일",
                                "new"=>"2015. 12. 28"
                            ),
                            array(
                                "name"=>"박정현",
                                "position"=>"팀원",
                                "team"=>"재무1팀",
                                "email"=>"test@mustknow.co.kr",
                                "id"=>"test45645",
                                "status"=>"미사용",
                                "auth"=>"결제관리자",
                                "date"=>"2016-01-02~2016-06-10",
                                "remain"=>"00개월00일",
                                "new"=>"2015. 12. 28"
                            ),
                            array(
                                "name"=>"홍길동",
                                "position"=>"팀원",
                                "team"=>"재무1팀",
                                "email"=>"test@mustknow.co.kr",
                                "id"=>"test45645",
                                "status"=>"미사용",
                                "auth"=>"구성원 생성",
                                "date"=>"2016-01-02~2016-06-10",
                                "remain"=>"00개월00일",
                                "new"=>"2015. 12. 28"
                            ),
                            array(
                                "name"=>"김길동",
                                "position"=>"팀장",
                                "team"=>"영업1팀",
                                "email"=>"aafsdfsd@mustknow.co.kr",
                                "id"=>"test6756",
                                "status"=>"사용중지",
                                "auth"=>"-",
                                "date"=>"2016-01-02~2016-06-10",
                                "leave"=>"leave",
                                "remain"=>"00개월00일",
                                "new"=>"2015. 12. 28"
                            )
                        );
                     ?>
                      <div class="wrap_mst_table type2">
                          <div class="mst_table">
                            <div class="mst_table_filter">
                                <h3>구성원 <strong>총 <em>00명</em></strong></h3>
                                <div class="mst_status">
                                    <span>사용<strong>00</strong></span>
                                    <span>미사용<strong>00</strong></span>
                                    <span>사용중지<strong>00</strong></span>
                                </div>
                                <div class="double_sort">
                                    <div class="sort">
                                        <select class="select2" style="width: 100%;">
                                          <option selected="selected">전체</option>
                                          <option>UX디자인팀</option>
                                          <option>재무1팀</option>
                                          <option>영업1팀</option>
                                        </select>
                                    </div>
                                    <div class="sort">
                                        <select class="select2" style="width: 100%;">
                                          <option selected="selected">전체</option>
                                          <option>팀장</option>
                                          <option>팀원</option>
                                          <option>퇴사</option>
                                        </select>
                                    </div>
                                </div>
                                <a href="javascript:void(0)" id="filter" class="filter">검색</a>
                            </div>
                            <table id="mstTable" class="table">
                               <colgroup>
                                 <col style="width:5%;text-align:center">
                                 <col style="width:10%;text-align:center">
                                 <col style="width:9%;">
                                 <col style="width:12%;">
                                 <col style="width:12%;">
                                 <col>
                                 <col style="width:11%;">
                                 <col style="width:11%;">
                                 <col style="width:9%;">
                                </colgroup>
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>이름 <i class="arraw"></i></th>
                                    <th>구분 <i class="arraw"></i></th>
                                    <th>부서 <i class="arraw"></i></th>
                                    <th>아이디 <i class="arraw"></i></th>
                                    <th>서비스 이용기간</th>
                                    <th>잔여기간 <i class="arraw"></i></th>
                                    <th>최초 생성일 <i class="arraw"></i></th>
                                    <th>상태 <i class="arraw"></i></th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?                     
                                $count = 0;
                                while(++$count <= 60){ 
                                    $i = rand(0,3);
                                ?>
                                  <tr class="<? echo $array[$i]['leave'] ?>">
                                      <td><? echo $count ?></td>
                                      <td><? echo $array[$i]['name'] ?></td>
                                      <td><? echo $array[$i]['position'] ?></td>
                                      <td><? echo $array[$i]['team'] ?></td>
                                      <td><? echo $array[$i]['id'] ?></td>
                                      <td><? echo $array[$i]['date'] ?></td>
                                      <td><? echo $array[$i]['remain'] ?></td>
                                      <td><? echo $array[$i]['new'] ?></td>
                                      <td><? echo $array[$i]['status'] ?></td>
                                  </tr>
                                  <? } ?>
                                </tbody>
                            </table>
                            <div class="mst_btn">
                                <div class="mst_left">
                                    <a href="" class="del" data-toggle="modal">삭제</a><a href="" class="modify">부서  변경</a>
                                </div>
                                <div class="mst_right">
                                    <a href="" class="blue plus" data-toggle="modal" data-target="#userAdd">구성원 개별 등록</a><a href="" class="dark plus">구성원 일괄 등록</a><a href="" class="gray down">구성원 목록 다운로드</a>
                                </div>
                            </div>
                          </div>
                      </div>
                  </div>
                </div>
            </div>       
        </div><!-- /.content-wrapper -->

       <?php  include("../pages/tpl/footer.tpl");?>
       
    </div><!-- ./wrapper -->
    
    <!-- contextmenu -->
    <div id="divView"><a href="">이름 수정</a><a href="" id="teamDel" data-toggle="modal" data-target="#teamDel">삭제</a></div>
    <!-- Modal -->
    <div class="modal fade" id="teamDel" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm" style="width:371px" id="teamDelStep1">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">해당 부서를 삭제하시겠습니까?</h4>
          </div>
          <div class="modal-body">
            해당 부서를 삭제하게 되면 부서 리스트에서<br>해당 부서명이 보이지 않게 됩니다.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-black" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-confirm">삭제</button>
          </div>
        </div>
      </div>
      <!--[D] step2 : 삭제 확인 -->
      <div class="modal-dialog modal-sm" style="width:371px" id="teamDelStep2">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">해당 부서를 삭제했습니다.</h4>
          </div>
          <div class="modal-body">
            해당 부서에 대한 삭제 요청이 완료되었습니다.
          </div>
          <div class="modal-footer" style="text-align:center">
<!--            <button type="button" class="btn btn-black" data-dismiss="modal">취소</button>-->
            <button type="button" class="btn btn-confirm">확인</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="userAdd" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">구성원 개별 등록</h4>
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
    <!-- DataTables -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- page script -->
    <script>
        $(function () {
            var oTable = $("#mstTable").DataTable({
                "scrollY":        "505px",
                "scrollCollapse": true,
                "paging":         false,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "구성원 검색 "
                },
                "info":false
            });
            $("div.dataTables_filter input").unbind();
            $('#filter').click(function(e){
                oTable.search($("div.dataTables_filter input").val()).draw();
            });

            $(window).resize(function(){
                oTable.draw();
            });
        });
        //Initialize Select2 Elements
        $(".select2").select2({
            minimumResultsForSearch: -1
        });
        $(".nav_team li.team").bind("click contextmenu", function(event) {
//            event.preventDefault();
            $(".nav_team li").removeClass("mark");
            $(this).addClass( "mark" );
        });
        
        $('#myButtonUp').click(function(){
          var current = $('.mark');
          current.prev().before(current);
        });
        
        $('#myButtonDown').click(function(){
          var current = $('.mark');
          current.next().after(current);
        });
        
//-- 버튼 클릭시 버튼을 클릭한 위치 근처에 레이어 생성 --//
$('.nav_team li.team').contextmenu(function(e) {
    e.preventDefault();
var divTop = e.clientY - 20; //상단 좌표 위치 안맞을시 e.pageY
var divLeft = e.clientX; //좌측 좌표 위치 안맞을시 e.pageX
var serial = $(this).attr("serial");
var idx = $(this).attr("idx");
//$('#divView').empty().append('<div style="position:absolute;top:5px;right:5px"><span id="close" style="cursor:pointer;font-size:1.5em" title="닫기">X</span> </div><br><a href="?serial=' + serial + '">serial</a><BR><a href="?idx=' + idx + '">idx</a>');
$('#divView').css({
     "top": divTop
     ,"left": divLeft
     , "position": "absolute"
}).show();
$('body').click(function(e){
    e.preventDefault();
    document.getElementById('divView').style.display='none'});
});


        $("#teamDelStep1 .btn-confirm").click(function(){
            $("#teamDelStep1").hide();
            $("#teamDelStep2").show();
        });
    </script>
  </body>
</html>
