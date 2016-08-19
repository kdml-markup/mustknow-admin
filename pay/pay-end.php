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

                <div role="main">
                  <div class="wrap_mst" style="position:relative;padding-bottom:28px">
                      <div class="notice_tit">
                          <h3 class="ico_notice">결제 완료</h3>
                          <p>신청하신 항목의 결제가 정상적으로 완료되었습니다.<br><strong>서비스 결제내역</strong>에서 결제하신 내역을 확인할 수 있습니다.</p>
                      </div>
                      <div class="wrap_mst_table type4" id="wrapTable2" style="margin:0 auto;width:676px">
                          <div class="mst_table" style="border:0">
                            <table id="mstTable2" class="table pay_end_table">
                               <colgroup>
                                 <col style="width:137px;text-align:center">
                                 <col style="width:416px   ">
                                 <col>
                                </colgroup>
                                <thead>
                                  <tr>
                                    <th>결제 번호</th>
                                    <th>결제 항목</th>
                                    <th>결제일</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                      <td>20161290002</td>
                                      <td class="lt">
                                          <div class="pay_list">
                                              <span><em>[프로모션 10%]</em> 관리자 6개월 외 구성원 00인</span>
                                              <ul>
                                                  <li>[관리자] 6개월</li>
                                                  <li>[구성원] 00개월 00일 X 00명</li>
                                                  <li>[구성원] 00개월 00일 X 00명</li>
                                                  <li>[구성원] 00개월 00일 X 00명</li>
                                                  <li>[구성원] 00개월 00일 X 00명</li>
                                                  <li>[구성원] 00개월 00일 X 00명</li>
                                              </ul>
                                          </div>
                                          <div class="pay_list">
                                              <span>상용SW유지보수 관련 문서 5종</span>
                                              <ul>
                                                  <li>[계약서] 2016 상용SW유지보수 계약서</li>
                                                  <li>[내용증명] 하자보수 및 매매대금반환 관련 내용증명</li>
                                                  <li>[내용증명] 계약이행촉구 및 계약 해제 통보 내용증명</li>
                                                  <li>[매뉴얼] 상용SW유지보수 실무자 매뉴얼</li>
                                                  <li>[매뉴얼] 사회적기업 재정지원사업 업무 매뉴얼</li>
                                              </ul>
                                          </div>
                                      </td>
                                      <td>2016.06.30</td>
                                  </tr>
                                  <tr>
                                      <td colspan="3" class="pay_end">
                                          <div class="payinfo">
                                               <div class="pay_so">
                                                   <div class="pay_total" style="padding-top: 3px;height:44px">
                                                    <strong>총 합계</strong><span>3,500,000 원</span>
                                                   </div>
                                                    <div class="pay_promo"><strong>총 할인금액 (프로모션)</strong><span>350,000 원</span></div>
                                               </div>
                                           </div>
                                           <div class="paytotal">
                                               <strong>총 결제금액</strong><span>3,150,000 원</span>
                                           </div>
                                      </td>
                                  </tr>
                                </tbody>
                            </table>
                            <a href="" class="gotopayhistory">서비스 결제내역으로 이동</a>
                          </div>
                      
                      </div>
                  </div>

                    
                    
                </div>
                
                
                
                
                
            </div>       
        </div><!-- /.content-wrapper -->

       <?php include("../pages/tpl/footer.tpl");?>
       
    </div><!-- ./wrapper -->
    
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- page script -->
  </body>
</html>
