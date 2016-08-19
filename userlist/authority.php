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
    <link rel="stylesheet" href="/mustknow-admin/plugins/iCheck/all.css">
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
            include("../pages/tpl/aside.tpl"); ?>

      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
           <div class="main">
                <div class="func">
                    <h2>부서 / 구성원 설정</h2>
                    <ul>
                        <li>기업의 조직 및 구성원을 추가하거나 정보를 수정할 수 있습니다.</li>
                        <li>기업 구성원은 서브 아이디 사용자입니다.</li>
                        <li>기업의 구성원을 추가하여야 서브아이디가 생성되며, 서브아이디의 서비스 이용 신청을 할 수 있습니다.</li>
                    </ul>
                </div>
                <div role="main">
                  <div class="wrap_mst">
                      <div class="nav_team">
                            <h3>관리자 권한 <a href="" class="add_admin" data-toggle="modal" data-target="#generate">권한 생성</a></h3>
                            <div class="list_wrap">
                                <ul>
                                    <li class="team mark">기업 관리자 <span class="auth_modify"><a href="" class="modify">수정</a>/<a href="" class="delete" data-toggle="modal" data-target="#authorityDel">삭제</a></span></li>
                                    <li class="team">부 관리자 <button type="button" class="authorityModify" data-toggle="modal" data-target="#authorityModify">권한 수정</button></li>
                                    <li class="team">결제 관리자 <button type="button" class="authorityModify" data-toggle="modal" data-target="#authorityModify">권한 수정</button></li>
                                </ul>
                            </div>
                      </div>
                      <?
                        $array = array(
                            array(
                                "name"=>"김수연",
                                "position"=>"팀원",
                                "team"=>"재무2팀",
                                "email"=>"ddddd@mustknow.co.kr",
                                "id"=>"test1234",
                                "status"=>"사용",
                                "phone"=>"010-1234-1234",
                                "auth"=>"권한없음"
                            ),
                            array(
                                "name"=>"박정현",
                                "position"=>"팀원",
                                "team"=>"재무1팀",
                                "email"=>"test@mustknow.co.kr",
                                "id"=>"test45645",
                                "status"=>"미사용",
                                "phone"=>"010-343-7564",
                                "auth"=>"결제관리자"
                            ),
                            array(
                                "name"=>"홍길동",
                                "position"=>"팀원",
                                "team"=>"재무1팀",
                                "email"=>"test@mustknow.co.kr",
                                "id"=>"test45645",
                                "status"=>"미사용",
                                "phone"=>"010-7854-3212",
                                "auth"=>"구성원 생성"
                            )
                        );
                     ?>
                      <div class="wrap_mst_table noline">
                          <div class="mst_table">
                            <div class="mst_table_filter">
                                <h3>기업 관리자 <strong>2</strong>명</h3>
                            </div>
                            <table id="mstTable" class="table none_align">
                               <colgroup>
                                 <col style="width:14%">
                                 <col style="width:14%">
                                 <col>
                                 <col style="width:19%">
                                 <col style="width:13%">
                                 <col style="width:15%">
                                </colgroup>
                                <thead>
                                  <tr>
                                    <th>이름</th>
                                    <th>권한</th>
                                    <th>이메일</th>
                                    <th>휴대폰</th>
                                    <th>아이디</th>
                                    <th style="text-align:center;text-indent:0">권한 이양</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?                     
                                $count = 0;
                                while(++$count <= 3){ 
                                    $i = $count -1 ;
                                ?>
                                  <tr>
                                      <td><? echo $array[$i]['name'] ?></td>
                                      <td>관리자</td>
                                      <td><? echo $array[$i]['email'] ?></td>
                                      <td><? echo $array[$i]['phone'] ?></td>
                                      <td><? echo $array[$i]['id'] ?></td>
                                      <td style="text-align:center;text-indent:0"><button type="button" class="transfer" data-toggle="modal" data-target="#authorityTransfer">권한이양</button></td>
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

       <?php  include("../pages/tpl/footer.tpl");?>
       
    </div><!-- ./wrapper -->
    
    <!-- Modal : 지정된 관리자의 권한을 삭제하시겠습니까?  -->
    <div class="modal fade" id="authorityDel" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm" style="width:371px">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">지정된 관리자의 권한을<br>삭제하시겠습니까?</h4>
          </div>
          <div class="modal-body">
            관리자 권한을 삭제하게 되면, 기존 구성원과<br>동일한 권한 상태로 되돌아 가게 됩니다.<br>해당 관리자 권한을 삭제 하시겠습니까?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-black" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-confirm">권한 삭제</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--[D] Modal : 권한 생성 -->
    <div class="modal fade" id="generate" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-simple">
        <div class="modal-content" style="width:371px">
          <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">권한 생성</h4>
                <strong>특정영역의 서브 관리자를 생성할 수 있습니다.</strong>
          </div>
          <div class="modal-body field_double">
              <div class="auth_select">
                    <strong class="label inline">권한 이름</strong>
                    <div>
                        <select class="select2" style="width: 100%;" pla>
                            <option>부 관리자</option>
                            <option>결제 관리자</option>
                        </select>
                    </div>
              </div>
              <div>
                    <strong class="label inline">권한 종류</strong>
                    <div class="auth_list">
                        <ul>
                            <li><input type="checkbox" id="auth01"><label for="auth01">기업통계</label></li>
                            <li><input type="checkbox" id="auth02"><label for="auth02">서비스 관리</label></li>
                            <li><input type="checkbox" id="auth03"><label for="auth03">결제관리</label></li>
                            <li>
                                <input type="checkbox" id="auth04"><label for="auth04">구성원관리</label>
                                <ul>
                                    <li><input type="checkbox" id="auth04-1"><label for="auth04-1">구성원 생성</label></li>
                                    <li><input type="checkbox" id="auth04-2"><label for="auth04-2">구성원 삭제</label></li>
                                </ul>
                            </li>
                            <li><input type="checkbox" id="auth05"><label for="auth05">기본환경</label></li>
                        </ul>
                    </div>
              </div>
          </div>
          <div class="modal-footer" style="text-align:right;padding-top:11px">
            <button type="button" class="btn btn-black" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-confirm" data-dismiss="modal">권한 생성</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--[D] Modal : 권한 수정 -->
    <div class="modal fade" id="authorityModify" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-simple">
        <div class="modal-content" style="width:371px">
          <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">권한 수정</h4>
                <strong>특정영역의 서브 관리자를 생성할 수 있습니다.</strong>
          </div>
          <div class="modal-body field_double">
              <div class="auth_select">
                    <strong class="label inline">권한 이름</strong>
                    <div>
                        <span class="auth_name">부 관리자</span>
                    </div>
              </div>
              <div>
                    <strong class="label inline">권한 종류</strong>
                    <div class="auth_list">
                        <ul>
                            <li><input type="checkbox" id="auth01"><label for="auth01">기업통계</label></li>
                            <li><input type="checkbox" id="auth02"><label for="auth02">서비스 관리</label></li>
                            <li><input type="checkbox" id="auth03"><label for="auth03">결제관리</label></li>
                            <li>
                                <input type="checkbox" id="auth04"><label for="auth04">구성원관리</label>
                                <ul>
                                    <li><input type="checkbox" id="auth04-1"><label for="auth04-1">구성원 생성</label></li>
                                    <li><input type="checkbox" id="auth04-2"><label for="auth04-2">구성원 삭제</label></li>
                                </ul>
                            </li>
                            <li><input type="checkbox" id="auth05"><label for="auth05">기본환경</label></li>
                        </ul>
                    </div>
              </div>
          </div>
          <div class="modal-footer" style="text-align:right;padding-top:11px">
            <button type="button" class="btn btn-black" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-confirm" data-dismiss="modal">권한 생성</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--[D] Modal : 권리자 권한 이양 -->
    <div class="modal fade" id="authorityTransfer" tabindex="-1" role="dialog" aria-labelledby="authorityTransfer" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-simple">
        <div class="modal-content" style="width:371px">
          <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">권리자 권한 이양</h4>
                <strong>이양 받을 구성원을 선택하면 해당 구성원에게 메일이<br>발송되고, 14일 내에 수락해야 권한 이양이 완료됩니다.</strong>
          </div>
          <div class="modal-body" style="padding:0">
              <div class="admin_auth_email">
                  <input type="text" placeholder="이양 받을 분의 이메일을 입력하세요.">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-black" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-confirm" data-dismiss="modal">권한 이양</button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Bootstrap 3.3.5 -->
    <script src="/mustknow-admin/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="/mustknow-admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/mustknow-admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="/mustknow-admin/plugins/iCheck/icheck.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/mustknow-admin/dist/js/app.min.js"></script>
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
                "info":false,
                "bFilter": false,
                "bInfo": false
            });
            $("div.dataTables_filter input").unbind();

        });
        //Initialize Select2 Elements
        $(".select2").select2({
            minimumResultsForSearch: -1,
            placeholder: "권한을 선택해주세요."
        });
    </script>
  </body>
</html>
