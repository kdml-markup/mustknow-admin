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
                    <h2>서비스 결제내역</h2>
                    <ul>
                        <li>결제된 서비스의 상세내역을 하단에서 확인하실 수 있습니다.</li>
                        <li>현금영수증/신용카드 매출전표는 우측상단의 ‘현금영수증/신용카드 매출전표 조회’에서 출력하실 수 있습니다.</li>
                        <li>결제 취소 및 환불에 관련된 사항은 머스트노우 고객센터 00-0000-0000으로 문의해주세요.</li>
                    </ul>
                </div>

                <div role="main">
                  <div class="wrap_card_pay_view"><a href="" class="card_pay_view" data-toggle="modal" data-target="#payview">현금영수증 / 신용카드 매출전표 조회</a></div>
                  <div class="wrap_mst" style="position:relative">
                      <?
                        $array = array(
                            array(
                                "num"=>"20161290002",
                                "title"=>"<em class='imp'>[프로모션 10%]</em> 관리자 6개월 외 구성원 00인",
                                "pay"=>"3,150,000원",
                                "time"=>"2016.06.06",
                                "status"=>"waiting"
                            ),
                            array(
                                "num"=>"20161290002",
                                "title"=>"<em class='imp'>[프로모션 20%]</em> 관리자 3개월 외 구성원 00인",
                                "pay"=>"3,150,000원",
                                "time"=>"2016.06.06",
                                "status"=>"complete"
                            ),
                            array(
                                "num"=>"20161290002",
                                "title"=>"관리자 3개월",
                                "pay"=>"3,150,000원",
                                "time"=>"2016.06.06",
                                "status"=>"cancel"
                            )
                        );
                     ?>
                          <div class="wrap_mst_table type4" id="wrapTable2" style="margin-right:0">
                          <div class="mst_table" style="border:0">
                            <table id="mstTable2" class="table pay_end_table">
                               <colgroup>
                                 <col style="width:7%;text-align:center">
                                 <col style="width:10%;">
                                 <col>
                                 <col style="width:10%;">
                                 <col style="width:10%;">
                                </colgroup>
                                <thead>
                                  <tr>
                                    <th>no.</th>
                                    <th>결제 번호</th>
                                    <th>결제 항목</th>
                                    <th>결제일 <i class="arraw"></i></th>
                                    <th>상태 <i class="arraw"></i></th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?                     
                                $count = 0;
                                while(++$count <= 12){ 
                                    $i = rand(0,2);
                                ?>
                                  <tr>
                                      <td><? echo $count ?></td>
                                      <td><? echo $array[$i]['num'] ?></td>
                                      <td class="lt"><? echo $array[$i]['title'] ?></td>
                                      <td><? echo $array[$i]['time'] ?></td>
                                      <td><span class="pay_btn <? echo $array[$i]['status'] ?>"></span></td>
                                      <td><button type="button" class="fold">접기/펼치기</button><!--[D] 접힐시 off 클래스 추가 --></td>
                                  </tr>
                                  <tr>
                                      <td colspan="6" class="pay_view">
                                       <div class="alltit">결제 항목 <span>결제금액</span>
                                       <span>할인금액</span>
                                       <span>금액</span></div>
                                       <div class="modu">
                                            <h4 class="tit">Data</h4>
                                            <div class="wrap_pay_table">
                                                <table class="pay_table">
                                                   <colgroup>
                                                     <col>
                                                     <col width="96">
                                                     <col width="96">
                                                     <col width="96">
                                                    </colgroup>
                                                    <tbody>
                                                        <tr>
                                                          <td class="list first"><strong><em>[프로모션 10%]</em> 관리자 6개월 외 구성원 00인</strong></td>
                                                          <td>0,000,000원</td>
                                                          <td>- 000,000원 
                                                              <div class="tip">
                                                                  <button type="button" class="btn" data-toggle="dropdown" aria-expanded="true"></button>
                                                                  <div class="text">
                                                                     서비스 프로모션 할인 -6개월 이상 ( 10% )
                                                                  </div>
                                                              </div>
                                                          </td>
                                                          <td class="pay" width="96">000,000원</td>
                                                      </tr>
                                                    <?                     
                                                    $count1 = 0;
                                                    while(++$count1 <= 1){
                                                    ?>
                                                      <tr>
                                                          <td class="list"><strong></strong><span>[관리자] 6개월</span></td>
                                                          <td>0,000,000원</td>
                                                          <td>- 000,000원 
                                                              <div class="tip">
                                                                  <button type="button" class="btn" data-toggle="dropdown" aria-expanded="true"></button>
                                                                  <div class="text">
                                                                     서비스 프로모션 할인 -6개월 이상 ( 10% )
                                                                  </div>
                                                              </div>
                                                          </td>
                                                          <td class="pay" width="96">000,000원</td>
                                                      </tr>
                                                      <? } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                       </div>
                                       <div class="modu">
                                            <h4 class="tit">Form</h4>
                                            <div class="wrap_pay_table">
                                                <table class="pay_table">
                                                   <colgroup>
                                                     <col>
                                                     <col width="96">
                                                    </colgroup>
                                                    <tbody>
                                                      <tr>
                                                          <td class="list first"><strong>2016.06.15 계약된 상용SW유지보수 관련 문서 5종</strong></td>
                                                          <td class="pay" width="96">000,000원</td>
                                                      </tr>
                                                    <?                     
                                                    $count1 = 0;
                                                    while(++$count1 <= 5){
                                                    ?>
                                                      <tr>
                                                          <td class="list"><strong>[계약서] 2016 상용SW유지보수 계약서</strong></td>
                                                          <td class="pay" width="96">000,000원</td>
                                                      </tr>
                                                      <? } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                       </div>
                                       <div class="alltit">결제 정보</div>
                                       <div class="payinfo">
                                           <div class="rt">
                                               <div class="plus">
                                                   <strong>총 합계</strong><span>3,500,000 원</span><br>
                                                   <strong class="promo">총 할인금액 (프로모션)</strong><span class="promo">(-) 350,000 원</span>
                                               </div>
                                               <div class="total">
                                                   <strong>총 결제금액</strong><span>3,150,000 원</span>
                                               </div>
                                           </div>
                                           <div class="lt">
                                               <div class="pay_so">
                                                    <strong>총 합계</strong><span>3,500,000 원</span>
                                                    <strong>총 할인금액 (프로모션)</strong><span>350,000 원</span>
                                               </div>
                                               <div class="pay_status">
                                                   <strong>신용카드</strong><span class="card">삼성(5000-32**-****-****)  -  일시불</span>
                                                   <em class="date">(2016.05.02. 23:20)</em>
                                               </div>
                                           </div>
                                       </div>
                                        
                                      </td>
                                  </tr>
                                  <? } ?>
                                </tbody>
                            </table>
                          </div>
                          <!--[D] 페이지네이션 -->
                            <div class="wrap_pagination" style="margin-top:24px">
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

                    
                    
                </div>
                
                
                
                
                
            </div>       
        </div><!-- /.content-wrapper -->

       <?php  include("../pages/tpl/footer.tpl");?>
       
    </div><!-- ./wrapper -->
    
    
    <!-- Modal -->
    <div class="modal fade" id="payview" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
        <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="wrap_payview" style="width:685px">
                <div class="tit">
                    <h3>현금영수증 / 신용카드 매출전표 발급 내역</h3>
                    <div class="wrap_sortby">
                         <ol id="sortbys" class="search_sort">
                          <li class="active" href="#home" aria-controls="home" role="tab" data-toggle="tab">현금영수증</li>
                          <li href="#profile" aria-controls="profile" role="tab" data-toggle="tab">신용카드</li>
                        </ol>
                     </div>
                     <a href="" class="goprint">발급내역 프린트하기</a>
                </div>
                <div class="cnt active" role="tabpanel" class="tab-pane active" id="home">
                    <div class="tb_sort">
                        <span class="txt">현금영수증 발급내역</span>
                        <div class="sort" style="width:90px;display:inline-block">
                            <select class="select2" style="width: 100%;">
                              <option selected="selected">2016년 01월</option>
                              <option>2016년 02월</option>
                            </select>
                        </div>
                        <a href="" class="btn_srch">조회</a>
                        <div class="sort" style="width:130px;display:inline-block;position:absolute;right:0">
                            <select class="select2" style="width: 100%;">
                              <option selected="selected">전체</option>
                              <option>Data 서비스 결제내역</option>
                              <option>Form 서비스 결제내역</option>
                            </select>
                        </div>
                    </div>
                    <div class="tb_txt">
                        <span>이달의 총 발행금액 : 0원 (0건)</span><span>올해의 총 발행금액 : 999,000원 (5건)</span>
                    </div>
                    <div class="wrap_tb">
                          <table border="0" class="pay_tb">
                          <tr>
                            <th scope="col" width="43"><input type="checkbox"></th>
                            <th scope="col" width="90">승인번호</th>
                            <th scope="col" width="135">거래일시</th>
                            <th scope="col" width="101">결제번호</th>
                            <th scope="col" width="95">결제금액(원)</th>
                            <th scope="col" width="67">거래구분</th>
                            <th scope="col" class="last">소득공제</th>
                          </tr>
                            <?                     
                            $count1 = 0;
                            while(++$count1 <= 6){
                            ?>
                          <tr>
                            <td><input type="checkbox"></td>
                            <td>000000000</td>
                            <td>2016-01-12 11:36:00</td>
                            <td>00000000000</td>
                            <td>999,999,000</td>
                            <td>정상</td>
                            <td class="last">소득공제</td>
                          </tr>
                          <? } ?>
                          </table>
                    </div>
                    <!--[D] 페이지네이션 -->
                        <div class="wrap_pagination" style="margin-top:11px;margin-bottom:15px">
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
                <div class="cnt"  role="tabpanel" class="tab-pane" id="profile">
                    <div class="tb_sort">
                        <span class="txt">신용카드 발급내역</span>
                        <div class="sort" style="width:90px;display:inline-block">
                            <select class="select2" style="width: 100%;">
                              <option selected="selected">2016년 01월</option>
                              <option>2016년 02월</option>
                            </select>
                        </div>
                        <a href="" class="btn_srch">조회</a>
                        <div class="sort" style="width:130px;display:inline-block;position:absolute;right:0">
                            <select class="select2" style="width: 100%;">
                              <option selected="selected">전체</option>
                              <option>Data 서비스 결제내역</option>
                              <option>Form 서비스 결제내역</option>
                            </select>
                        </div>
                    </div>
                    <div class="tb_txt">
                        <span>이달의 총 발행금액 : 0원 (0건)</span><span>올해의 총 발행금액 : 999,000원 (5건)</span>
                    </div>
                    <div class="wrap_tb">
                          <table border="0" class="pay_tb">
                          <tr>
                            <th scope="col" width="43"><input type="checkbox"></th>
                            <th scope="col" width="90">승인번호</th>
                            <th scope="col" width="135">거래일시</th>
                            <th scope="col" width="101">결제번호</th>
                            <th scope="col" width="95">결제금액(원)</th>
                            <th scope="col" width="67">거래구분</th>
                            <th scope="col" class="last">소득공제</th>
                          </tr>
                            <?                     
                            $count1 = 0;
                            while(++$count1 <= 6){
                            ?>
                          <tr>
                            <td><input type="checkbox"></td>
                            <td>000000000</td>
                            <td>2016-01-12 11:36:00</td>
                            <td>00000000000</td>
                            <td>999,999,000</td>
                            <td>정상</td>
                            <td class="last">소득공제</td>
                          </tr>
                          <? } ?>
                          </table>
                    </div>
                    <!--[D] 페이지네이션 -->
                        <div class="wrap_pagination" style="margin-top:11px;margin-bottom:15px">
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
                
                <a href="" class="close" data-dismiss="modal">닫기</a>
            </div>
            <div class="info_bottom">*현금영수증 / 신용카드 매출전표 발급에 대해 궁금하신 점은 고객센터로 문의 바랍니다. (0000-0000)</div>
          
        </div>
      </div>
      <div class="modal-dialog modal-sm reciept_modal" style="display:none">
        <div class="modal-content">
            <div class="wrap_payview" style="width:530px;height:829px">
                <div class="tit">
                    <h3>신용카드 매출전표 발급</h3>
                </div>
                <div class="cnt_receipt">
                    <button type="button" class="print">출력</button>
                    <img src="/mustknow-admin/dist/img/@temp_receipt.gif" alt="영수증">
                </div>
                <a href="" class="close">닫기</a>
            </div>
        </div>
      </div>
    </div>
    
    <style>
    .modal-dialog .wrap_payview .select2-container--default span.select2-selection--single{height:19px}
    .modal-dialog .wrap_payview .select2-container--default .select2-selection--single span.select2-selection__rendered{line-height:12px;font-size:10px}
    .modal-dialog .wrap_payview .select2-container--default .select2-selection--single .select2-selection__arrow{
        background:url(/mustknow-admin/dist/img/ic_arrow_drop_down_black_18dp_1x-copy-2.png) 0 0 no-repeat;width:5px;height:7px;top:5px}
    .modal-dialog .wrap_payview .select2-container--default .select2-selection--single{padding-left:7px;background-color: #fafafa;border-radius: 2px;transform:none!important}
    .modal-dialog .wrap_payview .select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow{transform: none!important}
    .select2-results__option{padding-top:0;padding-bottom:0;padding-left:7px;height:17px;font-size: 10px;}  
    </style>
    
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
            $("#sortbys li").click(function(){
                $("#sortbys li").removeClass("active");
                $(this).addClass("active");
            });
        });
            
        //Initialize Select2 Elements
        $(".select2").select2({
            minimumResultsForSearch: -1
        });
        $(".wrap_pay_detail .toggle").click(function(){
            $( this ).parent().toggleClass("open");
        });
        $(".goprint").click(function(e){
            e.preventDefault();
            $(".reciept_modal").show()
        });
        $(".reciept_modal .close").click(function(e){
            e.preventDefault();
            $(".reciept_modal").hide()
        });
    </script>
  </body>
</html>
