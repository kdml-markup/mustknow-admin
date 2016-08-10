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

                <div role="main">
                  <div class="wrap_mst" style="position:relative">
                      <?
                        $array = array(
                            array(
                                "title"=>"<em class='imp'>[프로모션 10%]</em> 관리자 6개월 외 구성원 00인",
                                "pay"=>"3,150,000원",
                                "time"=>"2016.06.06",
                                "status"=>"waiting"
                            ),
                            array(
                                "title"=>"<em class='imp'>[프로모션 20%]</em> 관리자 3개월 외 구성원 00인",
                                "pay"=>"3,150,000원",
                                "time"=>"2016.06.06",
                                "status"=>"complete"
                            ),
                            array(
                                "title"=>"관리자 3개월",
                                "pay"=>"3,150,000원",
                                "time"=>"2016.06.06",
                                "status"=>"cancel"
                            )
                        );
                     ?>
                      <div class="management-title"><h2>구성원 선택</h2></div>
                      

                          <div class="wrap_mst_table type4" id="wrapTable2">
                          <div class="mst_table">
                            <table id="mstTable2" class="table">
                               <colgroup>
                                 <col style="width:7%;text-align:center">
                                 <col>
                                 <col style="width:10%;">
                                 <col style="width:10%;">
                                 <col style="width:10%;">
                                </colgroup>
                                <thead>
                                  <tr>
                                    <th>no.</th>
                                    <th>신청 항목</th>
                                    <th>결제금액</th>
                                    <th>신청일 <i class="arraw"></i></th>
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
                                      <td class="lt"><? echo $array[$i]['title'] ?></td>
                                      <td><? echo $array[$i]['pay'] ?></td>
                                      <td><? echo $array[$i]['time'] ?></td>
                                      <td><span class="pay_btn <? echo $array[$i]['status'] ?>"></span></td>
                                      <td><button type="button" class="fold">접기/펼치기</button><!--[D] 접힐시 off 클래스 추가 --></td>
                                  </tr>
                                  <tr>
                                      <td colspan="6" class="pay_view">
                                       <div class="alltit">신청 항목</div>
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
                                                          <td class="list"><strong>00 개월 00일</strong><span class="x"></span><strong>10</strong></td>
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
                                                   <span class="pay_btn <? echo $array[$i]['status'] ?>"></span>결제 대기 중입니다.
                                               </div>
                                           </div>
                                       </div>
                                        
                                      </td>
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
        $(".wrap_pay_detail .toggle").click(function(){
            $( this ).parent().toggleClass("open");
        });
    </script>
  </body>
</html>
