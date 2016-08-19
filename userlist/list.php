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
                            <h3>부서</h3>
                            <div class="list_wrap">
                                <ul>
                                    <li>전체 <em>27</em></li>
                                </ul>
                                <ul>
                                    <li class="team mark">재무1팀 <em>5</em></li>
                                    <li class="team">재무2팀 <em>14</em></li>
                                    <li class="team">재무3팀 <em>3</em></li>
                                    <li class="team">재무4팀 <em>5</em></li>
                                </ul>
                                <input type="text" class="addteam" placeholder="부서 추가">
                            </div>
                            <div>
                            <span class="move">순서이동</span><button id="myButtonUp">myButtonTextForUp</button><button id="myButtonDown">myButtonTextForDown</button>
                            </div>
                      </div>
                      <?
                        $type = "t3"; //체크앤팁 t3
                        $array = array(
                            array(
                                "name"=>"김수연",
                                "position"=>"팀원",
                                "team"=>"재무2팀",
                                "email"=>"ddddd@mustknow.co.kr",
                                "id"=>"test1234",
                                "status"=>"사용",
                                "auth"=>"권한없음"
                            ),
                            array(
                                "name"=>"박정현",
                                "position"=>"팀원",
                                "team"=>"재무1팀",
                                "email"=>"test@mustknow.co.kr",
                                "id"=>"test45645",
                                "status"=>"미사용",
                                "auth"=>"결제관리자"
                            ),
                            array(
                                "name"=>"홍길동",
                                "position"=>"팀원",
                                "team"=>"재무1팀",
                                "email"=>"test@mustknow.co.kr",
                                "id"=>"test45645",
                                "status"=>"미사용",
                                "auth"=>"구성원 생성"
                            ),
                            array(
                                "name"=>"김길동",
                                "position"=>"팀장",
                                "team"=>"영업1팀",
                                "email"=>"aafsdfsd@mustknow.co.kr",
                                "id"=>"test6756",
                                "status"=>"퇴사",
                                "auth"=>"-",
                                "leave"=>"leave"
                            )
                        );
                     ?>
                      <div class="wrap_mst_table">
                          <div class="mst_table">
                            <div class="mst_table_filter">
                                <h3>구성원</h3>
                                <div class="sort">
                                    <select class="select2" style="width: 100%;">
                                      <option selected="selected">전체</option>
                                      <option>사용</option>
                                      <option>미사용</option>
                                      <option>퇴사</option>
                                    </select>
                                </div>
                                <a href="javascript:void(0)" id="filter" class="filter">검색</a>
                            </div>
                            <table id="mstTable" class="table">
                               <colgroup>
                                 <col style="width:5%;text-align:center">
                                 <col style="width:5%;text-align:center">
                                 <col style="width:7%;">
                                 <col style="width:6%;">
                                 <col style="width:8%;">
                                 <col style="width:24%;">
                                 <col style="width:10%;">
                                 <col style="width:6%;">
                                 <col style="width:7%;">
                                 <col style="width:7%;">
                                </colgroup>
                                <thead>
                                  <tr>
                                    <th><input type="checkbox"></th>
                                    <th>#</th>
                                    <th>이름 <i class="arraw"></i></th>
                                    <th>구분 <i class="arraw"></i></th>
                                    <th>부서 <i class="arraw"></i></th>
                                    <th>이메일 <i class="arraw"></i></th>
                                    <th>아이디 <i class="arraw"></i></th>
                                    <th>상태 <i class="arraw"></i></th>
                                    <th>권한</th>
                                    <th>수정</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?                     
                                $count = 0;
                                while(++$count <= 60){ 
                                    $i = rand(0,3);
                                ?>
                                  <tr class="<? echo $array[$i]['leave'] ?>">
                                      <td><input type="checkbox" id="us<? echo $count ?>"></imput></td>
                                      <td><? echo $count ?></td>
                                      <td><? echo $array[$i]['name'] ?></td>
                                      <td><? echo $array[$i]['position'] ?></td>
                                      <td><? echo $array[$i]['team'] ?></td>
                                      <td><? echo $array[$i]['email'] ?></td>
                                      <td><? echo $array[$i]['id'] ?></td>
                                      <td><? echo $array[$i]['status'] ?></td>
                                      <td><? echo $array[$i]['auth'] ?></td>
                                      <td><button type="button" class="modify" data-toggle="modal" data-target="#userModify">수정</button></td>
                                  </tr>
                                  <? } ?>
                                </tbody>
                            </table>
                            <div class="mst_btn">
                                <div class="mst_left">
                                    <a href="" class="del" data-toggle="modal" data-target="#selectUserDel">삭제</a><a href="" class="modify" data-toggle="modal" data-target="#teamMove">부서  변경</a>
                                </div>
                                <div class="mst_right">
                                    <a href="" class="blue plus" data-toggle="modal" data-target="#userAdd">구성원 개별 등록</a><a href="" class="dark plus" data-toggle="modal" data-target="#userExel">구성원 일괄 등록</a><a href="" class="gray down" data-toggle="modal" data-target="#test">구성원 목록 다운로드</a>
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
    <div id="divView"><a href="">이름 수정</a><a href="" data-toggle="modal" data-target="#teamDel">삭제</a></div>
    
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
      <div class="modal-dialog modal-sm" style="width:371px;display:none" id="teamDelStep2">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">해당 부서를 삭제했습니다.</h4>
          </div>
          <div class="modal-body">
            해당 부서에 대한 삭제 요청이 완료되었습니다.
          </div>
          <div class="modal-footer" style="text-align:center">
            <button type="button" class="btn btn-confirm" data-dismiss="modal">확인</button>
          </div>
        </div>
      </div>
      <!--[D] step2 : 구성원 있을시 삭제 불가 -->
      <div class="modal-dialog modal-sm" style="width:371px;display:none" id="teamDelStep3">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">해당 부서를 삭제하실 수 없습니다.</h4>
          </div>
          <div class="modal-body">
            해당 부서에 구성원이 있을 때에는<br>해당 부서에 관한 삭제 요청을 실행할 수 없습니다.
          </div>
          <div class="modal-footer" style="text-align:center">
            <button type="button" class="btn btn-confirm" data-dismiss="modal">확인</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--[D] Modal : 선택 구성원 부서 변경 -->
    <div class="modal fade" id="teamMove" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-simple team_move">
        <div class="modal-content" style="width:371px">
          <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">선택 구성원 부서 변경</h4>
                <strong>선택하신 구성원의 변경할 부서를 선택해주세요.</strong>
          </div>
          <div class="modal-body">
                <ul class="team_list">
                    <li class="team mark">재무1팀 <em>5</em></li>
                    <li class="team">재무2팀 <em>14</em></li>
                    <li class="team">재무3팀 <em>3</em></li>
                    <li class="team">재무4팀 <em>5</em></li>
                    <li class="team">재무3팀 <em>3</em></li>
                    <li class="team">재무3팀 <em>3</em></li>
                </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-black" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-confirm" data-dismiss="modal">이동</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--[D] Modal : 선택 구성원을 삭제하시겠습니까? -->
    <div class="modal fade" id="selectUserDel" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content" style="width:371px">
          <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">선택 구성원을 삭제하시겠습니까?</h4>
          </div>
          <div class="modal-body">
              해당 구성원을 삭제하게 되면 구성원 리스트에서<br>해당 구성원이 보이지않게 되며. 자동으로<br>7일간의 유예기간을 거친 후에 탈퇴 처리 됩니다.
              <div class="admin_pwd">
                  <input type="text" placeholder="관리자 비밀번호를 입력해주세요.">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-black" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-confirm" data-dismiss="modal">확인</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--[D] Modal : 해당 구성원의 퇴사를 취소하시겠습니까? -->
    <div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content" style="width:371px">
          <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">해당 구성원의 퇴사를<br>취소하시겠습니까?</h4>
          </div>
          <div class="modal-body">
              퇴사를 취소하게 되면 해당 구성원의 상태가 퇴사상태로<br>변경하기 전의 계정상태로 변경 및 복구됩니다.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-black" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-confirm" data-dismiss="modal">변경 적용</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--[D] Modal : 해당 구성원을 퇴사 처리 하시겠습니까? -->
    <div class="modal fade" id="test1" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content" style="width:371px">
          <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">해당 구성원을<br>퇴사 처리 하시겠습니까?</h4>
          </div>
          <div class="modal-body">
              구성원의 계정 상태를 퇴사로 선택하면 7일간의 유예기간을<br>거친 후에 구성원 목록에서 삭제와 함께 탈퇴 처리 됩니다.
              <div class="em">
                  *회원의 계정 상태 복구를 원하신다면, 유예기간동안<br>다른 계정 상태를 선택하셔야 합니다.
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-black" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-confirm" data-dismiss="modal">변경 적용</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--[D] Modal : 구성원 개별 수정 -->
    <div class="modal fade" id="userModify" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-simple">
        <div class="modal-content" style="width:567px">
          <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">구성원 개별 수정</h4>
                <strong>구성원의 정보를 수정할 수 있습니다.</strong>
          </div>
          <div class="modal-body usermodify">
              <div>
                  <strong class="label">아이디 <em>사용할 수 있는 아이디입니다.</em></strong><input type="text" value="AADMFIDD_08" placeholder="영문, 숫자로 구성된 아이디를 입력해주세요. (특수문자 입력 불가)">
              </div>
              <div>
                  <strong class="label">이름</strong><input type="text" value="김길동" placeholder="이름을 입력해주세요.">
              </div>
              <div class="tel">
                  <strong class="label">휴대전화</strong><input type="text" value="010" style="width:83px;text-align:center"> - <input type="text" value="0000" style="width:83px;text-align:center"> - <input type="text" value="0000" style="width:83px;text-align:center"> 
              </div> 
              <div>
                  <strong class="label">이메일주소</strong><input type="text" value="mustknow@mustknow.co.kr" placeholder="이메일주소를 정확하게 입력해주세요.">
              </div>
              <div>
                    <strong class="label">부서</strong>
                    <select class="select2" style="width: 100%;">
                      <option selected="selected">전체</option>
                      <option>사용</option>
                      <option>미사용</option>
                      <option>퇴사</option>
                    </select>
              </div>
              <div>
                  <strong class="label">직급</strong><input type="text" value="대리" placeholder="직급을 입력해주세요.">
              </div>
              <div>
                    <strong class="label">구분 <em>*</em></strong>
                    <select class="select2" style="width: 100%;">
                      <option selected="selected">팀원</option>
                      <option>팀장</option>
                    </select>
              </div>
              <div>
                    <strong class="label">부서 <em>*</em></strong>
                    <select class="select2" style="width: 100%;">
                      <option selected="selected">권한없음</option>
                      <option>부 관리자</option>
                      <option>결제 관리자</option>
                    </select>
              </div>
              <div class="user_status">
                  <strong>계정 상태</strong>
                  <div class="radio_wrap">
                       <label>
                        <input type="radio" name="r1" class="minimal" checked>미사용 중
                        </label>
                        <label>
                          <input type="radio" name="r1" class="minimal">퇴사 <em>( 퇴사 상태 취소 가능한 유예기간 : 0일 00:00:00 )</em>
                        </label>
                   </div>
              </div>
          </div>
          <div class="modal-footer" style="text-align:right">
            <button type="button" class="btn btn-black" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-confirm" data-dismiss="modal">수정</button>
          </div>
        </div>
      </div>
    </div>
    
    <!--[D] Modal :  -->
    <div class="modal fade" id="userExel" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-simple">
        <div class="modal-content" style="width:371px">
          <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">구성원 일괄 등록</h4>
                <strong>구성원을 한꺼번에 등록할 수 있습니다. 하단의 양식을<br>다운받아 구성원들의 정보를 입력한 뒤 등록해주세요.</strong>
          </div>
          <div class="modal-body usermodify">
                <div class="filebox">
                <input class="upload-name" value="엑셀(Excel) 파일 첨부" disabled="disabled">
                <label for="ex_filename">업로드</label><input type="file" id="ex_filename" class="upload-hidden"> 
                </div>
                <div class="sample_down"><span>샘플양식 다운로드</span><button type="button"></button></div>
          </div>
          <div class="modal-footer" style="text-align:right">
            <button type="button" class="btn btn-black" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-confirm" data-dismiss="modal">등록</button>
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
                "info":false
            });
            $("div.dataTables_filter input").unbind();
            $('#filter').click(function(e){
                oTable.fnFilter($("div.dataTables_filter input").val());
            });

            //iCheck for checkbox and radio inputs
            $('input[type="radio"].minimal').iCheck({
              checkboxClass: 'icheckbox_minimal-blue',
              radioClass: 'iradio_minimal-blue'
            });
            
              var fileTarget = $('.filebox .upload-hidden');

                fileTarget.on('change', function(){
                    if(window.FileReader){
                        var filename = $(this)[0].files[0].name;
                    } else {
                        var filename = $(this).val().split('/').pop().split('\\').pop();
                    }

                    $(this).siblings('.upload-name').val(filename);
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
          var current = $('.nav_team .mark');
          current.prev().before(current);
        });
        
        $('#myButtonDown').click(function(){
          var current = $('.nav_team .mark');
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
            $("#teamDelStep1").css("display","none");
            $("#teamDelStep2").css("display","inline-block");
        });
        $("#teamDelStep2 .btn-confirm").click(function(){
            setTimeout(function(){
                $("#teamDelStep1").css("display","inline-block");
                $("#teamDelStep2").css("display","none");
            }, 1000);
        });
    </script>
  </body>
</html>
