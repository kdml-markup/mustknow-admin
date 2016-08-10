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
                    <h2>Form 서비스 현황</h2>
                    <ul>
                        <li>Form 서비스 현황을 하단에서 확인하실수 있습니다.</li>
                        <li>유료 Form은 제공일부터 열람 및 다운로드가 가능합니다.</li>
                        <li>Form 서비스 현황을 문서유형별, 카테고리별로 구분하여 확인하실 수 있습니다.</li>
                    </ul>
                </div>
                <div role="main">
                  <div class="wrap_mst">
                      <?
                        $array = array(
                            array(
                                "type"=>"내용증명",
                                "category"=>"스타트업",
                                "name"=>"주택 전세계약해지 통보 및 전세보증금에 대한 반환의 건 최고장 작성 내 주택 전세계약해지 통보 및 전세보증금에 대한 반환의 건 최고장 작성 내",
                                "date"=>"2015. 12. 28",
                                "nDate"=>"2016. 06. 15",
                                "sDate"=>"2016. 06. 30",
                                "sort"=>"유료"
                            ),
                            array(
                                "type"=>"계약서",
                                "category"=>"협상",
                                "name"=>"디자인업종 디지털 디자인 분야 제정 표준하도급 계약서",
                                "date"=>"2015. 12. 28",
                                "nDate"=>"2016. 06. 15",
                                "sDate"=>"2016. 06. 30",
                                "sort"=>"유료"
                            ),
                            array(
                                "type"=>"고소장",
                                "category"=>"계약",
                                "name"=>"출판물에 의한 명예회손죄 고소장",
                                "date"=>"2015. 12. 28",
                                "nDate"=>"2016. 06. 15",
                                "sDate"=>"2016. 06. 30",
                                "sort"=>"유료"
                            ),
                            array(
                                "type"=>"매뉴얼",
                                "category"=>"형사고소",
                                "name"=>"폭력행위등 처벌에 관한 법률 위반, 손괴 고소장",
                                "date"=>"2015. 12. 28",
                                "nDate"=>"2016. 06. 15",
                                "sDate"=>"2016. 06. 30",
                                "sort"=>"유료"
                            )
                        );
                     ?>
                      <div class="wrap_mst_table type2">
                          <div class="mst_table">
                            <div class="mst_table_filter">
                                <h3>문서 <strong>총 <em>00개</em></strong></h3>
                                <div class="mst_status">
                                    <span>유료<strong>00</strong></span>
                                    <span>무료<strong>00</strong></span>
                                </div>
                                <div class="double_sort">
                                    <div class="sort">
                                        <select class="select2" style="width: 100%;">
                                          <option selected="selected">전체</option>
                                          <option>계약서</option>
                                          <option>내용증명</option>
                                          <option>고소장</option>
                                          <option>매뉴얼</option>
                                          <option>회사서식</option>
                                        </select>
                                    </div>
                                    <div class="sort">
                                        <select class="select2" style="width: 100%;">
                                          <option selected="selected">전체</option>
                                          <option>협상</option>
                                          <option>계약</option>
                                          <option>형사고소</option>
                                          <option>채권회수</option>
                                          <option>부동산</option>
                                        </select>
                                    </div>
                                </div>
                                <a href="javascript:void(0)" id="filter" class="filter">검색</a>
                            </div>
                            <table id="mstTable" class="table">
                               <colgroup>
                                 <col style="width:5%;text-align:center">
                                 <col style="width:10%;text-align:center">
                                 <col style="width:10%;">
                                 <col>
                                 <col style="width:10%;">
                                 <col style="width:10%;">
                                 <col style="width:10%;">
                                 <col style="width:5%;">
                                </colgroup>
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>문서유형 <i class="arraw"></i></th>
                                    <th>카테고리 <i class="arraw"></i></th>
                                    <th>문서명 <i class="arraw"></i></th>
                                    <th>신청일 <i class="arraw"></i></th>
                                    <th>계약일 <i class="arraw"></i></th>
                                    <th>제공일 <i class="arraw"></i></th>
                                    <th>구분 <i class="arraw"></i></th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?                     
                                $count = 0;
                                while(++$count <= 60){ 
                                    $i = rand(0,3);
                                ?>
                                  <tr>
                                      <td><? echo $count ?></td>
                                      <td><? echo $array[$i]['type'] ?></td>
                                      <td><? echo $array[$i]['category'] ?></td>
                                      <td><span><? echo $array[$i]['name'] ?></span></td>
                                      <td><!--[D] 데이터 없을시 --><span class="none" style="display:none">-</span><!--//[D] 데이터 없을시 --><? echo $array[$i]['date'] ?></td>
                                      <td><!--[D] 데이터 없을시 --><span class="none" style="display:none">-</span><!--//[D] 데이터 없을시 --><? echo $array[$i]['nDate'] ?></td>
                                      <td><!--[D] 데이터 없을시 --><span class="none" style="display:none">-</span><!--//[D] 데이터 없을시 --><? echo $array[$i]['sDate'] ?></td>
                                      <td><? echo $array[$i]['sort'] ?></td>
                                  </tr>
                                  <? } ?>
                                </tbody>
                            </table>
                          </div>
                      </div>
                  </div>
                </div>
            </div>       
        </div><!-- /.content-wrapper -->

       <?php $path="main"; include("../pages/tpl/footer.tpl");?>
       
    </div><!-- ./wrapper -->

    
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
            oTable = $("#mstTable").DataTable({
                "scrollY":        "505px",
                "scrollCollapse": true,
                "paging":         false,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "문서 검색 "
                },
                "info":false,
                columnDefs: [ {
                    targets: 3,
                    render: function ( data, type, row ) {
                        return type === 'display' && data.length > 50 ?
                         data.substr( 0, 50 ) +'…':
                         data;

                    }
                } ]
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
    </script>
  </body>
</html>
