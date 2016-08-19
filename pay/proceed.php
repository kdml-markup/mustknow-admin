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
                    <h2>서비스 결제하기</h2>
                    <ul>
                        <li>서비스 결제하기에 담긴 신청항목은 최대 30일까지 보관됩니다.</li>
                        <li>Data 서비스는 일별계산되어 결제금액이 매일 변동되므로 신청일과 결제일이 다를 경우 결제금액이 다를 수 있습니다.</li>
                        <li>신청하신 Data와 Form 서비스 내역 중 결제를 원하시는 항목을 체크하신 후 총 결제금액을 확인하고 결제를 진행해주세요.</li>
                    </ul>
                </div>

                <div role="main">
                  <div class="wrap_mst" style="position:relative;margin-top:47px">
                      <?
                        $array = array(
                            array(
                                "title"=>"<em class='imp'>[프로모션 10%]</em> 관리자 6개월 외 구성원 00인",
                                "type"=>"Data",
                                "pay"=>"3,150,000원",
                                "time"=>"2016.06.06",
                                "status"=>"waiting"
                            ),
                            array(
                                "title"=>"<em class='imp'>[프로모션 20%]</em> 관리자 3개월 외 구성원 00인",
                                "type"=>"Form",
                                "pay"=>"3,150,000원",
                                "time"=>"2016.06.06",
                                "status"=>"complete"
                            ),
                            array(
                                "title"=>"관리자 3개월",
                                "type"=>"Form",
                                "pay"=>"3,150,000원",
                                "time"=>"2016.06.06",
                                "status"=>"cancel"
                            )
                        );
                     ?>
                      <div class="payinfo solid">
                           <div class="plus">
                               <strong>총 합계</strong><span>3,500,000 원</span><br>
                               <strong class="promo">총 할인금액</strong><span class="promo">(-) 350,000 원</span>
                           </div>
                           <div class="total">
                               <strong>총 결제금액</strong><span><em>3,150,000</em> 원</span>
                           </div>
                      </div>
                       <div class="next_step">
                           <a href="" class="btn_pay" data-toggle="modal" data-target="#myPayGo">결제</a>
                       </div>
                      <div class="wrap_mst_table type4 type4_2" id="wrapTable2">
                          <div class="mst_table">
                            <table id="mstTable2" class="table">
                               <colgroup>
                                 <col style="width:7%;text-align:center">
                                 <col style="width:7%;text-align:center">
                                 <col style="width:10%;">
                                 <col>
                                 <col style="width:10%;">
                                 <col style="width:10%;">
                                 <col style="width:72px">
                                </colgroup>
                                <thead>
                                  <tr>
                                    <th><input type="checkbox"></th>
                                    <th>no.</th>
                                    <th>유형 <i class="arraw"></i></th>
                                    <th>신청 항목</th>
                                    <th>결제금액</th>
                                    <th>신청일 <i class="arraw"></i></th>
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
                                      <td><input type="checkbox"></td>
                                      <td><? echo $count ?></td>
                                      <td><? echo $array[$i]['type'] ?></td>
                                      <td class="lt"><? echo $array[$i]['title'] ?></td>
                                      <td><? echo $array[$i]['pay'] ?></td>
                                      <td><? echo $array[$i]['time'] ?></td>
                                      <td><button type="button" class="fold">접기/펼치기</button><!--[D] 접힐시 off 클래스 추가 --></td>
                                  </tr>
                                  <tr>
                                      <td colspan="7" class="pay_view">
                                       <div class="alltit">
                                       신청 항목
                                          <span>결제금액</span>
                                          <span>할인금액</span>
                                          <span>금액</span>
                                       </div>
                                       <div class="modu">
                                            <h4 class="tit">관리자</h4>
                                            <div class="wrap_pay_table">
                                                <table class="pay_table">
                                                   <colgroup>
                                                     <col>
                                                     <col width="96">
                                                     <col width="96">
                                                     <col width="96">
                                                    </colgroup>
                                                    <tbody>
                                                    <?                     
                                                    $count1 = 0;
                                                    while(++$count1 <= 1){
                                                    ?>
                                                      <tr>
                                                          <td class="list"><strong>00 개월</strong> <span>0000-00-00까지</span></td>
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
                                            <h4 class="tit">구성원</h4>
                                            <div class="wrap_pay_table">
                                                <table class="pay_table">
                                                   <colgroup>
                                                     <col>
                                                     <col width="96">
                                                     <col width="96">
                                                     <col width="96">
                                                    </colgroup>
                                                    <tbody>
                                                    <?                     
                                                    $count1 = 0;
                                                    while(++$count1 <= 5){
                                                    ?>
                                                      <tr>
                                                          <td class="list">
                                                             <strong>00 개월 00일</strong><span class="x"></span><strong>10</strong>
                                                              <div class="tip">
                                                                  <button type="button" class="btn" data-toggle="dropdown" aria-expanded="true"></button>
                                                                  <div class="text">
                                                                     서비스 프로모션 할인 -6개월 이상 ( 10% )
                                                                  </div>
                                                              </div>
                                                          </td>
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
                                       <div class="alltit">결제 정보</div>
                                       <div class="payinfo">
                                           <div class="lt">
                                               <div class="pay_so">
                                                    <strong>총 합계</strong><span>3,500,000 원</span>
                                                    <strong>총 할인금액 (프로모션)</strong><span>350,000 원</span>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="paytotal">
                                           <strong>총 결제금액</strong><span>3,150,000 원</span>
                                       </div>
                                        
                                      </td>
                                  </tr>
                                  <? } ?>
                                </tbody>
                            </table>
                          </div>
                      
                      </div>
                  </div>
                  <div class="wrap_pagination" style="margin-top:18px;margin-bottom:72px">
                      <a href="#" class="delete" data-toggle="modal" data-target="#myPay">선택 삭제</a>
                  </div>

                    
                    
                </div>
                
                
                
                
                
            </div>       
        </div><!-- /.content-wrapper -->

       <?php  include("../pages/tpl/footer.tpl");?>
       
    </div><!-- ./wrapper -->
    
    <!-- Modal -->
    <div class="modal fade" id="myPay" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm" style="width:371px">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">선택하신 항목을 삭제하시겠습니까?</h4>
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
    
    <!-- Modal -->
    <div class="modal fade" id="myPayGo" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm" style="width:371px">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">결제하실 항목을 선택해주세요.</h4>
          </div>
          <div class="modal-body">
            원하시는 항목을 선택하여 결제를 진행해주세요.
          </div>
          <div class="modal-footer" style="text-align:center">
            <button type="button" class="btn btn-confirm" data-dismiss="modal">확인</button>
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
        $(".wrap_pay_detail .toggle").click(function(){
            $( this ).parent().toggleClass("open");
        });
    </script>
  </body>
</html>
