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
                    <h2>Data 서비스 신청</h2>
                    <ul>
                        <li>Data 서비스를 신청할 때에 기간을 먼저 선택한 후 구성원을 선택할 수 있으며, 기업관리자가 잔여 Data 서비스 기간이 있다면 구성원 기간만 선택하실 수 있습니다.</li>
                        <li>관리자의 Data 서비스신청시 관리자는 콘텐츠를 열람할 수 있고, 신청한 개월수 당 00 개의 Q&A 가 제공됩니다.</li>
                        <li>제공된 Q&A는 관리자를 포함, Data 서비스를 사용중인 기업구성원 모두가 공유하여 사용할 수 있습니다. 그 달에 사용하지 않은 Q&A는 이월되지 않습니다.</li>
                        <li>Data 서비스는 결제 후 결제한 서비스 기간동안 모든 유료콘텐츠 Case study / Reference / Evaluation / Form을  바로 열람하실 수 있습니다.</li>
                        <li>구성원은 이름/직급/부서명을 검색하여 한번에 선택 후 목록에 추가할 수 있으며, 목록에서 선택하여 구성원을 삭제할 수 있습니다.</li>
                        <li>6개월 이상 Data 서비스 결제시 할인혜택을 드립니다.</li>
                    </ul>
                </div>
                <div class="management-title"><h2>기간선택</h2> <span class="user"><span>관리자 : 김수연</span> fifteenidnumber</span>
                <div class="notice">관리자 Data 서비스 1개월 신청시 5개의 Q&A가 제공됩니다.</div>
                </div>
                <div class="management-status2">
                    <div class="userinfo">
                        <h3><strong>Data 서비스</strong><span> (개월)</span></h3>
                        <div class="month">
                            <input type="text" value="10" readonly>
                            <button type="button" class="plus">+</button>
                            <button type="button" class="minus">-</button>
                            <button type="button" class="confirm">신청</button>
                        </div>
                    </div>
                    <div class="datainfo">
                        <div class="datain">
                            <ul>
                                <li><strong class="ico cal">Data 서비스 이용기간</strong><span>2016-06-23 ~ 2016-04-28</span></li>
                                <li><strong class="ico cal-lim">잔여 Data 서비스 기간</strong><span><em>10개월 05일</em></span></li>
                                <li><strong class="ico qa">현재 사용 가능한 Q&A 개수</strong><span> <em>7개</em> <span class="remain_qa">06-23~07-23</span></span></li>
                                <li><strong class="ico all">총 Q&A 개수</strong><span><em>30</em> / 50개</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div role="main">
                  <div class="wrap_mst" style="position:relative">
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
                      <div class="management-title"><h2>구성원 선택</h2></div>
                      
                      <div class="separation">
                          <div class="wrap_mst_table type3" id="wrapTable1">
                          <div class="mst_table">
                            <div class="mst_table_filter">
                                <h3><strong>총 <em>00명</em></strong></h3>
                                <a href="javascript:void(0)" id="filter" class="filter">검색</a>
                            </div>
                            <table id="mstTable1" class="table">
                               <colgroup>
                                 <col style="width:7%;text-align:center">
                                 <col style="width:9%;text-align:center">
                                 <col style="width:8%;">
                                 <col style="width:9%;">
                                 <col style="width:12%;">
                                 <col>
                                 <col style="width:18%;">
                                </colgroup>
                                <thead>
                                  <tr>
                                    <th><input type="checkbox"></th>
                                    <th>이름 <i class="arraw"></i></th>
                                    <th>부서 <i class="arraw"></i></th>
                                    <th>구분 <i class="arraw"></i></th>
                                    <th>상태 <i class="arraw"></i></th>
                                    <th>서비스 이용기간</th>
                                    <th>잔여기간 <i class="arraw"></i></th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?                     
                                $count = 0;
                                while(++$count <= 60){ 
                                    $i = rand(0,3);
                                ?>
                                  <tr class="<? echo $array[$i]['leave'] ?>">
                                      <td><input type="checkbox" id="fv<? echo $count ?>"><label for="fv<? echo $count ?>" class="blind"></td>
                                      <td><? echo $array[$i]['name'] ?></td>
                                      <td><? echo $array[$i]['team'] ?></td>
                                      <td><? echo $array[$i]['position'] ?></td>
                                      <td><? echo $array[$i]['status'] ?></td>
                                      <td><? echo $array[$i]['date'] ?></td>
                                      <td><? echo $array[$i]['remain'] ?></td>
                                  </tr>
                                  <? } ?>
                                </tbody>
                            </table>
                          </div>
                      </div>                          
                      </div>
                      <div class="separation">
                          <div class="wrap_mst_table type3" id="wrapTable2">
                          <div class="mst_table">
                            <div class="mst_table_filter">
                                <h3><strong>총 <em>00명</em></strong></h3>
                                <a href="javascript:void(0)" id="filter" class="filter">검색</a>
                            </div>
                            <table id="mstTable2" class="table">
                               <colgroup>
                                 <col style="width:7%;text-align:center">
                                 <col style="width:9%;text-align:center">
                                 <col style="width:8%;">
                                 <col style="width:9%;">
                                 <col style="width:12%;">
                                 <col>
                                 <col style="width:18%;">
                                </colgroup>
                                <thead>
                                  <tr>
                                    <th><input type="checkbox"></th>
                                    <th>이름 <i class="arraw"></i></th>
                                    <th>부서 <i class="arraw"></i></th>
                                    <th>구분 <i class="arraw"></i></th>
                                    <th>상태 <i class="arraw"></i></th>
                                    <th>서비스 이용기간</th>
                                    <th>잔여기간 <i class="arraw"></i></th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?                     
                                $count = 0;
                                while(++$count <= 12){ 
                                    $i = rand(0,3);
                                ?>
                                  <tr class="<? echo $array[$i]['leave'] ?>">
                                      <td><input type="checkbox" id="fv<? echo $count ?>"><label for="fv<? echo $count ?>" class="blind"></td>
                                      <td><? echo $array[$i]['name'] ?></td>
                                      <td><? echo $array[$i]['team'] ?></td>
                                      <td><? echo $array[$i]['position'] ?></td>
                                      <td><? echo $array[$i]['status'] ?></td>
                                      <td><? echo $array[$i]['date'] ?></td>
                                      <td><? echo $array[$i]['remain'] ?></td>
                                  </tr>
                                  <? } ?>
                                </tbody>
                            </table>
                            <div class="select_del"><button type="button">선택목록삭제</button></div>
                          </div>
                      </div>                          
                      </div>
                      <div class="mst_move">
                          <button type="button" class="choice">선택</button><button type="button" class="not_choice">비선택</button>
                      </div>
                  </div>
                  <div class="management-title min">
                      <h2>Data 서비스 신청 합계</h2> <button type="button" class="policy"></button>
                      <div class="notice">Data 서비스 신청일과 결제일이 다를 경우 총 결제금액이 변동될 수 있습니다.</div>
                  </div>
                  <div class="wrap_pay_detail">
                      <div class="wrap_pay">
                          <div class="pay_all">
                              <strong>총액</strong>
                              <span class="num">3,500,000</span>
                              <span class="won">원</span>
                          </div>
                          <div class="pay_discount">
                              <strong>총 할인금액</strong>
                              <span class="num">350,000</span>
                              <span class="won">원</span>
                          </div>
                          <div class="pay_total">
                              <strong>총 결제금액</strong>
                              <span class="num">3,150,000</span>
                              <span class="won">원</span>
                          </div>
                      </div>
                      <button type="button" class="toggle"></button>
                      
                      <div class="pay_drapdown">
                          <h3 class="title_sb">관리자 <em>Q&A는 관리자와 구성원이 함께 사용합니다.</em></h3>
                          <div class="wrap_simple_table">
                              <div>
                                  <table class="simple_table">
                                   <colgroup>
                                     <col style="width:31%">
                                     <col style="width:28%">
                                     <col>
                                    </colgroup>
                                    <thead>
                                      <tr>
                                        <th>기간 / 만료일</th>
                                        <th>Q&A 개수 / 사용기간</th>
                                        <th class="intable">
                                           <table width="100%">
                                                <tr>
                                                    <th width="33%">금액</td>
                                                    <th width="33%">할인금액</td>
                                                    <th>결제금액</td>
                                                </tr>
                                            </table>
                                        </th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    <?                     
                                    $count = 0;
                                    while(++$count <= 1){
                                    ?>
                                      <tr>
                                          <td><strong>00 개월</strong><span>0000-00-00</span></td>
                                          <td><strong>총 00개 (매월 5개)</strong><span>0000-00-00~0000-00-00</span></td>
                                          <td class="intable">
                                            <table width="100%" class="simple_table_min">
                                                <tr>
                                                    <td width="33%">0,000,000원</td>
                                                    <td width="33%">- 000,000원 
                                                        <div class="tip">
                                                            <button type="button" class="btn" data-toggle="dropdown" aria-expanded="true"></button>
                                                            <div class="text">
                                                               서비스 프로모션 할인 -6개월 이상 ( 10% )
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="pay">0,000,000원</td>
                                                </tr>
                                            </table>
                                          </td>
                                      </tr>
                                      <? } ?>
                                    </tbody>
                                </table>
                              </div>
                          </div>

                          <h3 class="title_sb" style="padding-top:54px">구성원 <em>구성원의 Data 서비스 만료일은 관리자와 동일합니다.</em></h3>
                          <div class="wrap_simple_table">
                              <div>
                                  <table class="simple_table">
                                   <colgroup>
                                     <col style="width:31%">
                                     <col style="width:28%">
                                     <col>
                                    </colgroup>
                                    <thead>
                                      <tr>
                                        <th>기간 / 만료일</th>
                                        <th>Q&A 개수 / 사용기간</th>
                                        <th class="intable">
                                           <table width="100%">
                                                <tr>
                                                    <th width="33%">금액</td>
                                                    <th width="33%">할인금액</td>
                                                    <th>결제금액</td>
                                                </tr>
                                            </table>
                                        </th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    <?                     
                                    $count = 0;
                                    while(++$count <= 5){
                                    ?>
                                      <tr>
                                          <td><strong>00 개월</strong><span>0000-00-00</span></td>
                                          <td>
                                               <strong>10 명</strong>
                                               <span class="user">김수연, 김수연, 김수연, 김수연, 김수연, 김수연, 김수연, 김수연, 김수연, 김수연, 김수연</span>
                                               <div class="tip">
                                                   <button type="button" class="btn" data-toggle="dropdown" aria-expanded="true"></button>
                                                   <div class="text">
                                                      <strong>인원 상세보기</strong><br>
                                                      <span class="ht">김수연<a href="" class="del">삭제</a></span>
                                                      <span class="ht">김수연<a href="" class="del">삭제</a></span>
                                                      <span class="ht">김수연<a href="" class="del">삭제</a></span>
                                                      <span class="ht">김수연<a href="" class="del">삭제</a></span>
                                                      <span class="ht">김수연<a href="" class="del">삭제</a></span><br>
                                                      <span class="ht">김수연<a href="" class="del">삭제</a></span>
                                                      <span class="ht">김수연<a href="" class="del">삭제</a></span>
                                                      <span class="ht">김수연<a href="" class="del">삭제</a></span>
                                                      <span class="ht">김수연<a href="" class="del">삭제</a></span>
                                                      <span class="ht">김수연<a href="" class="del">삭제</a></span>
                                                   </div>
                                                </div>
                                          </td>
                                          <td class="intable">
                                            <table width="100%" class="simple_table_min">
                                                <tr>
                                                    <td width="33%">0,000,000원</td>
                                                    <td width="33%">- 000,000원 
                                                        <div class="tip">
                                                            <button type="button" class="btn" data-toggle="dropdown" aria-expanded="true"></button>
                                                            <div class="text">
                                                               서비스 프로모션 할인 -6개월 이상 ( 10% )
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="pay">0,000,000원</td>
                                                </tr>
                                            </table>
                                          </td>
                                      </tr>
                                      <? } ?>
                                    </tbody>
                                </table>
                              </div>
                          </div>
                      </div>
                      
                   </div>
                  
                  <div class="action-rm">
                      <div class="rt">
                          <a href="#" class="submission" data-toggle="modal" data-target="#mySubmit" style="width:153px">서비스 결제하기</a>
                      </div>
                  </div>
                    
                    
                    
                </div>
                
                
                
                
                
            </div>       
        </div><!-- /.content-wrapper -->

       <?php $path="main"; include("../pages/tpl/footer.tpl");?>
       
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
            var oTable = $("#mstTable1").DataTable({
                "scrollY":        "324px",
                "scrollCollapse": true,
                "paging":         false,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "이름/직급/부서를 검색하세요. "
                },
                "info":false
            });
            $("#wrapTable1 div.dataTables_filter input").unbind();
            $('#wrapTable1 #filter').click(function(e){
                oTable.search($("#wrapTable1 div.dataTables_filter input").val()).draw();
            });
            
            var oTable2 = $("#mstTable2").DataTable({
                "scrollY":        "277px",
                "scrollCollapse": true,
                "paging":         false,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "이름/직급/부서를 검색하세요. "
                },
                "info":false
            });
            $("#wrapTable2 div.dataTables_filter input").unbind();
            $('#wrapTable2 #filter').click(function(e){
                oTable2.search($("#wrapTable2 div.dataTables_filter input").val()).draw();
            });

            $(window).resize(function(){
                oTable.draw();
                oTable2.draw();
            });
            
        });

        $(".wrap_pay_detail .toggle").click(function(){
            $( this ).parent().toggleClass("open");
        });
    </script>
  </body>
</html>
