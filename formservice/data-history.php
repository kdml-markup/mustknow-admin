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
                    <h2>Form 서비스 내역</h2>
                    <ul>
                        <li>Form 서비스 신청에서 신청한 내역 및 진행단계를 하단에서 확인하실 수 있습니다.</li>
                        <li>Form 서비스를 신청하시면 머스트노우 측에서 연락을 드리게 되며, 이때 별도의 오프라인 계약 체결을 하게 됩니다.</li>
                        <li>Form  서비스 신청 취소는 오프라인 계약 전까지 가능합니다.</li>
                        <li>계약완료된 내역은 결제관리-서비스 결제하기 메뉴에서 확인하실 수 있으며, 해당 계약에 대한 결제를 진행 할 수 있습니다.</li>
                    </ul>
                </div>

                <div role="main">
            
                <?
                    $type = "t11"; //매뉴얼 t11
                    $array = array(
                        array(
                            "title"=>"문서 8종  - 계약서(협상, 계약, 형사고소), 내용증명(채권회수), 고소장(형사고소), 매뉴얼(계약), 회사서식(공정거래, 계약)",
                            "date"=>"2016-05-29",
                            "type"=>"동영상강의",
                            "category"=>"협상",
                            "impt"=>"3",
                            "writer"=>"머스트노우",
                            "status"=>"complete_application"/*신청완료*/
                        ),
                        array(
                            "title"=>"문서 10종  - 계약서(협상, 계약, 형사고소, 스타트엄), 내용증명(채권회수), 고소장(형사고소), 매뉴얼(계약), 회사서식(공정거래, 계약, IT분",
                            "date"=>"2016-05-27",
                            "type"=>"체크앤팁",
                            "category"=>"계약",
                            "impt"=>"1",
                            "writer"=>"머스트노우",
                            "status"=>"complete_agreement"/*계약완료*/
                        ),
                        array(
                            "title"=>"문서 5종  - 내용증명(채권회수), 고소장(형사고소), 매뉴얼(계약), 회사서식(공정거래, 계약)",
                            "date"=>"2016-05-25",
                            "type"=>"매뉴얼",
                            "category"=>"형사 고소",
                            "impt"=>"4",
                            "writer"=>"머스트노우",
                            "status"=>"standby_application"/*신청대기*/
                        ),
                        array(
                            "title"=>"문서 3종 - 매뉴얼(가맹사업), 고소장(병원)",
                            "date"=>"2016-05-22",
                            "type"=>"사례해설",
                            "category"=>"부동산",
                            "impt"=>"2",
                            "writer"=>"머스트노우",
                            "status"=>"apply_Cancel"/*신청취소*/
                        ),
                        array(
                            "title"=>"문서 5종  - 내용증명(채권회수), 고소장(형사고소), 매뉴얼(계약), 회사서식(공정거래, 계약)",
                            "date"=>"2016-05-20",
                            "type"=>"카드인포",
                            "category"=>"공정거래",
                            "impt"=>"1",
                            "writer"=>"머스트노우",
                            "status"=>"contract_cancellation"/*신청취소*/
                        ),
                        array(
                            "title"=>"문서 5종 - 계약서(공정거래), 내용증명(공정거래), 고소장(공정거래), 매뉴얼(공정거래), 회사서식(공정거래)",
                            "date"=>"2016-05-27",
                            "type"=>"칼럼",
                            "category"=>"스타트업",
                            "impt"=>"3",
                            "writer"=>"머스트노우",
                            "status"=>"contract_cancellation"
                        ),
                        array(
                            "title"=>"문서 8종  - 계약서(협상, 계약, 형사고소), 내용증명(채권회수), 고소장(형사고소), 매뉴얼(계약), 회사서식(공정거래, 계약)",
                            "date"=>"2016-05-03",
                            "type"=>"칼럼",
                            "category"=>"가맹사업",
                            "impt"=>"4",
                            "writer"=>"머스트노우",
                            "status"=>"complete_application"
                        ),
                        array(
                            "title"=>"문서 5종  - 내용증명(채권회수), 고소장(형사고소), 매뉴얼(계약), 회사서식(공정거래, 계약)",
                            "date"=>"2016-05-11",
                            "type"=>"사례해설",
                            "category"=>"계약",
                            "impt"=>"2",
                            "writer"=>"머스트노우",
                            "status"=>"apply_Cancel"
                        )
                    );
                 ?>
                     <div class="wrap_sortby">
                         <ol id="sortbys" class="search_sort">
                          <li class="active">전체</li>
                          <li>신청대기</li>
                          <li>신청완료</li>
                          <li>신청취소</li>
                          <li>계약완료</li>
                        </ol>
                     </div>
                 <!--[D] list view -->
                    <div class="table-list table-video _table-list">
                        <table>
                            <caption>알림내역 전체</caption>
                            <colgroup>
                                <col width="100px">
                                <col>
                                <col width="120px">
                                <col width="60px">
                                <col width="80px" />
                            </colgroup>
                            <thead>
                                <tr>
                                    <th scope="col"><span>no.</span></th>
                                    <th scope="col"><span>신청 항목</span></th>
                                    <th scope="col"><span>신청일</span><em class="controller"></em></th>
                                    <th scope="col"><span>상태</span><em class="controller"></em></th>
                                    <th scope="col"><span>상세보기</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="display: none;">
                                    <td class="list-empty" colspan="5">
                                        <span>신청내역이 없습니다.</span>
                                    </td>
                                </tr>
                                <?                     
                                $count = 0;
                                while(++$count <= 12){ 
                                    $i = rand(0,7);
                                ?>
                                <tr>
                                    <td class="td-type-1"><span>9,999</span></td>
                                    <td class="title"><a href="request-mail-detail.php"><? echo $array[$i]['title'] ?></a></td>
                                    <td class="td-type-1"><span><? echo $array[$i]['date'] ?></span></td>
                                    <td class="td-type-1 td-type-last"><span>
                                    <? if( $array[$i]['status'] === "complete_application" ) {?>
                                        <span class="status_ico complete_application">신청완료</span>
                                    <?}else if( $array[$i]['status'] === "complete_agreement" ) {?>
                                        <span class="status_ico complete_agreement">계약완료</span>
                                    <?}else if( $array[$i]['status'] === "standby_application" ) {?>
                                       <span class="status_ico standby_application">신청대기</span>
                                    <?}else if( $array[$i]['status'] === "contract_cancellation" ) {?>
                                       <span class="status_ico contract_cancellation">신청취소</span>
                                    <?}else{?>
                                        <span class="status_ico apply_Cancel">신청취소</span>
                                    <?} ?></span></td>
                                    <td class="td-type-1 td-type-last"><a href="#" class="view_in" data-toggle="modal" data-target="#<? echo $array[$i]['status'] ?>">상세보기</a></td>
                                </tr>
                                <? } ?>
                            </tbody>
                     </table>
                  </div>
                  <!--[D] 페이지네이션 -->
                    <div class="wrap_pagination">
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
        </div><!-- /.content-wrapper -->

       <?php $path="main"; include("../pages/tpl/footer.tpl");?>
       
    </div><!-- ./wrapper -->
    
    
    <!-- Modal 신청대기시 -->
    <div class="modal fade" id="standby_application" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <!--[D] step1 : Form 서비스 내역 상세보기 -->
      <div class="modal-dialog modal-sm" style="width:427px" id="serviceProperty1">
        <div class="modal-content">
         <div class="service_property">
              <div class="tit">
                  <h3>Form 서비스 내역 상세보기</h3><span class="status_ico standby_application">신청대기</span>
              </div>
              <div class="section_property section_property_table">
                <h3>문서유형 및 카테고리 선택내역<em class="accent">20개</em></h3>
                <table cellpadding="0" cellspacing="0" border="0" class="stk_table" style="width:367px">
                    <thead>
                    <tr>
                        <th width="54" style="text-align:center">#</th>
                        <th width="83" class="plain">문서유형</th>
                        <th width="164" class="plain">카테고리</th>
                        <th>개수</th>
                    </tr>
                    </thead>
                </table>
                <div class="scroll tp0">
                    <span>
                    <table cellpadding="0" cellspacing="0" border="0" class="stk_table" style="width:100%">
                       <colgroup>
                         <col width="54">
                         <col width="83">
                         <col width="164">
                         <col>
                        </colgroup>
                        <tbody>
                        <tr>
                            <td class="num">20</td>
                            <td class="plain">내용증명</td>
                            <td class="plain">소프트웨어유지및보수</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td class="num">19</td>
                            <td class="plain">계약서</td>
                            <td class="plain">협상</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td class="num">18</td>
                            <td class="plain">계약서</td>
                            <td class="plain">형사고소</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td class="num">17</td>
                            <td class="plain">계약서</td>
                            <td class="plain">소프트웨어유지및보수</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td class="num">16</td>
                            <td class="plain">기타</td>
                            <td class="plain">소프트웨어유지및보수</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td class="num">16</td>
                            <td class="plain">기타</td>
                            <td class="plain">소프트웨어유지및보수</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td class="num">16</td>
                            <td class="plain">기타</td>
                            <td class="plain">소프트웨어유지및보수</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td class="num">16</td>
                            <td class="plain">기타</td>
                            <td class="plain">소프트웨어유지및보수</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td class="num">16</td>
                            <td class="plain">기타</td>
                            <td class="plain">소프트웨어유지및보수</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td class="num">16</td>
                            <td class="plain">기타</td>
                            <td class="plain">소프트웨어유지및보수</td>
                            <td>3</td>
                        </tr>
                        </tbody>
                    </table>
                    </span>
                </div>
              </div>
              <div class="section_property">
                  <h3 style="padding-bottom:16px">서비스 신청 목적 및 요청사항</h3>
                  <div class="scroll tp1">
                      <span style="position:relative;top:-5px">상용SW유지보수업종과 관련한 계약을 체결하는데 필요한 표준하도급계약 서와 매뉴얼을 신청합니다. 이중 회사서식은 성격이 달라 공정거래와 계약카 테고리 두 가지 버전을 분리하여 신청하고 싶습니다. 그리고 고소장은 형사고 소 카테고리를 추가하고 싶습니다. 상용SW유지보수업종과 관련한 계약을 체 결하는데 필요한 표준하도급계약서와 매뉴얼을 신청합니다. 이중 회사서식은 성격이 달라 공정거래와 계약 카테고리 두 가지 버전을 분리하여 신청하고 싶 습니다. 그리고 고소장은 형사고소 카테고리를 추가하고 싶습니다. 상용SW유지보수업종과 관련한 계약을 체결 하는데 필요한 표준하도급계약서와 매뉴얼을 신청합니다. 이중 회사서식은 성격이 달라 공정거래와 계약 카테고리 두 가지 버전을 분리하여 신청하고 싶습니다. 그리고 고소장은 형사고소 카테고리를 추가하고 싶습니다. 상용SW유지보수업종과 관련한 계약을 체결하는데 필요한 표준하도급계약서와 매뉴얼을 신청 합니다. 그리고 고소장은 형사고소 카테고리를 추가하고 싶습니다.</span>
                  </div>
              </div>
              <div class="action-rm action-rm-ly">
                  <div class="rt">
                     <a href="#" class="memory" data-toggle="modal" style="width:99px">수정</a>
                      <a href="#" class="btn-confirm" data-toggle="modal" style="width:154px">신청</a>
                  </div>
              </div>
              <a href="" class="close" data-dismiss="modal">닫기</a>
          </div>
          
        </div>
      </div>
      <!--[D] step2 : Form 서비스를 신청하시겠습니까? -->
      <div class="modal-dialog modal-sm" style="width:371px;display:none" id="serviceProperty2">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Form 서비스를 신청하시겠습니까?</h4>
          </div>
          <div class="modal-body">
            신청한 이후에는 내용 수정이 불가능합니다.<br>신청 내용이 맞으시면 확인을 눌러주세요.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-black" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-confirm">확인</button>
          </div>
        </div>
      </div>
      <!--[D] step3 : 서비스 신청이 완료되었습니다. -->
      <div class="modal-dialog modal-sm" style="width:371px;display:none" id="serviceProperty3">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">서비스 신청이 완료되었습니다.</h4>
          </div>
          <div class="modal-body">
            신청된 서비스는 Form <span class="blue">서비스 신청내역</span>에서 확인 가능하며<br>진행 상황에 따라 이용까지 2~3일의 시간이 소요될 수 있습니다.
          </div>
          <div class="modal-footer" style="text-align:center">
            <button type="button" class="btn btn-confirm" data-dismiss="modal">확인</button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Modal 신청완료시 -->
    <div class="modal fade" id="complete_application" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <!--[D] step1 : Form 서비스 내역 상세보기 -->
      <div class="modal-dialog modal-sm" style="width:427px" id="serviceProperty4">
        <div class="modal-content">
         <div class="service_property">
              <div class="tit">
                  <h3>Form 서비스 내역 상세보기</h3><span class="status_ico complete_application">신청대기</span>
              </div>
              <div class="section_property section_property_table">
                <h3>문서유형 및 카테고리 선택내역<em class="accent">20개</em></h3>
                <table cellpadding="0" cellspacing="0" border="0" class="stk_table" style="width:367px">
                    <thead>
                    <tr>
                        <th width="54" style="text-align:center">#</th>
                        <th width="83" class="plain">문서유형</th>
                        <th width="164" class="plain">카테고리</th>
                        <th>개수</th>
                    </tr>
                    </thead>
                </table>
                <div class="scroll tp0">
                    <span>
                    <table cellpadding="0" cellspacing="0" border="0" class="stk_table" style="width:100%">
                       <colgroup>
                         <col width="54">
                         <col width="83">
                         <col width="164">
                         <col>
                        </colgroup>
                        <tbody>
                        <tr>
                            <td class="num">20</td>
                            <td class="plain">내용증명</td>
                            <td class="plain">소프트웨어유지및보수</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td class="num">19</td>
                            <td class="plain">계약서</td>
                            <td class="plain">협상</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td class="num">18</td>
                            <td class="plain">계약서</td>
                            <td class="plain">형사고소</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td class="num">17</td>
                            <td class="plain">계약서</td>
                            <td class="plain">소프트웨어유지및보수</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td class="num">16</td>
                            <td class="plain">기타</td>
                            <td class="plain">소프트웨어유지및보수</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td class="num">16</td>
                            <td class="plain">기타</td>
                            <td class="plain">소프트웨어유지및보수</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td class="num">16</td>
                            <td class="plain">기타</td>
                            <td class="plain">소프트웨어유지및보수</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td class="num">16</td>
                            <td class="plain">기타</td>
                            <td class="plain">소프트웨어유지및보수</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td class="num">16</td>
                            <td class="plain">기타</td>
                            <td class="plain">소프트웨어유지및보수</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td class="num">16</td>
                            <td class="plain">기타</td>
                            <td class="plain">소프트웨어유지및보수</td>
                            <td>3</td>
                        </tr>
                        </tbody>
                    </table>
                    </span>
                </div>
              </div>
              <div class="section_property">
                  <h3 style="padding-bottom:16px">문서유형 및 카테고리 선택내역<em class="accent">20개</em></h3>
                  <div class="scroll tp1">
                      <span style="position:relative;top:-5px">상용SW유지보수업종과 관련한 계약을 체결하는데 필요한 표준하도급계약 서와 매뉴얼을 신청합니다. 이중 회사서식은 성격이 달라 공정거래와 계약카 테고리 두 가지 버전을 분리하여 신청하고 싶습니다. 그리고 고소장은 형사고 소 카테고리를 추가하고 싶습니다. 상용SW유지보수업종과 관련한 계약을 체 결하는데 필요한 표준하도급계약서와 매뉴얼을 신청합니다. 이중 회사서식은 성격이 달라 공정거래와 계약 카테고리 두 가지 버전을 분리하여 신청하고 싶 습니다. 그리고 고소장은 형사고소 카테고리를 추가하고 싶습니다. 상용SW유지보수업종과 관련한 계약을 체결 하는데 필요한 표준하도급계약서와 매뉴얼을 신청합니다. 이중 회사서식은 성격이 달라 공정거래와 계약 카테고리 두 가지 버전을 분리하여 신청하고 싶습니다. 그리고 고소장은 형사고소 카테고리를 추가하고 싶습니다. 상용SW유지보수업종과 관련한 계약을 체결하는데 필요한 표준하도급계약서와 매뉴얼을 신청 합니다. 그리고 고소장은 형사고소 카테고리를 추가하고 싶습니다.</span>
                  </div>
              </div>
              <div class="action-rm action-rm-ly">
                  <div class="rt"><a href="#" class="gray" data-toggle="modal" style="width:98px">신청취소</a>
                  <a href="#" class="memory" data-toggle="modal" style="width:99px">수정</a>
                  <a href="#" class="btn-confirm goto2" data-toggle="modal" style="width:154px">확인</a>
                  </div>
              </div>
              <a href="" class="close" data-dismiss="modal">닫기</a>
          </div>
          
        </div>
      </div>
      <!--[D] step2 : Form 서비스 신청취소 -->
      <div class="modal-dialog modal-sm" style="width:480px;display:none" id="serviceProperty5">
        <div class="modal-content">
         <div class="service_property">
              <div class="tit">
                  <h3>Form 서비스 신청취소</h3>
              </div>
              <div class="section_property">
                  <ul class="plain_list">
                      <li>Form 서비스 신청을 취소하시면 오프라인 계약이 진행되지 않습니다.</li>
                      <li>더 나은 서비스를 위해 취소사유를 적어주시면 머스트노우 서비스에 반영하겠습니다.</li>
                  </ul>
              </div>
              <div class="section_property">
                  <h3>취소사유</h3>
                    <textarea id="content" class="text_count" maxlength="200" placeholder="취소사유를 입력해주세요."></textarea>
                    <div class="wrap_count">
                        <span id="counter" class="num_count">###</span><span>/200자</span>
                    </div>
              </div>
              <div class="action-rm action-rm-ly">
                  <div class="rt">
                      <a href="#" class="memory" data-toggle="modal" style="width:99px">취소</a>
                      <a href="#" class="btn-confirm goto3" data-toggle="modal" style="width:154px">신청취소 완료</a>
                  </div>
              </div>
              <a href="" class="close" data-dismiss="modal">닫기</a>
          </div>
          
        </div>
      </div>
      <!--[D] step3 : Form 서비스 신청취소 완료 -->
      <div class="modal-dialog modal-sm" style="width:371px;display:none" id="serviceProperty6">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">서비스 신청이 취소되었습니다.</h4>
          </div>
          <div class="modal-body">
            취소된 서비스는<br><span class="blue">Form 서비스 신청내역</span>에서 확인 가능합니다.
          </div>
          <div class="modal-footer" style="text-align:center">
            <button type="button" class="btn btn-confirm goto4">확인</button>
          </div>
        </div>
      </div>
      <!--[D] step4 : 서비스 신청이 완료되었습니다. -->
      <div class="modal-dialog modal-sm" style="width:371px;display:none" id="serviceProperty7">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">수정 페이지로 이동합니다.</h4>
          </div>
          <div class="modal-body" style="padding-bottom:36px">
            Form 서비스 신청 페이지에서 수정을 진행합니다.<br>수정를 위해 Form 서비스 신청페이지로 바로 이동합니다.
          </div>
        </div>
      </div>
    </div>
    
    <!-- Modal 신청취소시 -->
    <div class="modal fade" id="contract_cancellation" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <!--[D] step1 : Form 서비스 내역 상세보기 -->
      <div class="modal-dialog modal-sm" style="width:427px" id="serviceProperty1">
        <div class="modal-content">
         <div class="service_property">
              <div class="tit">
                  <h3>Form 서비스 내역 상세보기</h3><span class="status_ico contract_cancellation">신청취소</span>
              </div>
              <div class="section_property section_property_table">
                <h3>문서유형 및 카테고리 선택내역<em class="accent">20개</em></h3>
                <table cellpadding="0" cellspacing="0" border="0" class="stk_table" style="width:367px">
                    <thead>
                    <tr>
                        <th width="54" style="text-align:center">#</th>
                        <th width="83" class="plain">문서유형</th>
                        <th width="164" class="plain">카테고리</th>
                        <th>개수</th>
                    </tr>
                    </thead>
                </table>
                <div class="scroll tp0">
                    <span>
                    <table cellpadding="0" cellspacing="0" border="0" class="stk_table" style="width:100%">
                       <colgroup>
                         <col width="54">
                         <col width="83">
                         <col width="164">
                         <col>
                        </colgroup>
                        <tbody>
                        <tr>
                            <td class="num">20</td>
                            <td class="plain">내용증명</td>
                            <td class="plain">소프트웨어유지및보수</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td class="num">19</td>
                            <td class="plain">계약서</td>
                            <td class="plain">협상</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td class="num">18</td>
                            <td class="plain">계약서</td>
                            <td class="plain">형사고소</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td class="num">17</td>
                            <td class="plain">계약서</td>
                            <td class="plain">소프트웨어유지및보수</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td class="num">16</td>
                            <td class="plain">기타</td>
                            <td class="plain">소프트웨어유지및보수</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td class="num">16</td>
                            <td class="plain">기타</td>
                            <td class="plain">소프트웨어유지및보수</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td class="num">16</td>
                            <td class="plain">기타</td>
                            <td class="plain">소프트웨어유지및보수</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td class="num">16</td>
                            <td class="plain">기타</td>
                            <td class="plain">소프트웨어유지및보수</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td class="num">16</td>
                            <td class="plain">기타</td>
                            <td class="plain">소프트웨어유지및보수</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td class="num">16</td>
                            <td class="plain">기타</td>
                            <td class="plain">소프트웨어유지및보수</td>
                            <td>3</td>
                        </tr>
                        </tbody>
                    </table>
                    </span>
                </div>
              </div>
              <div class="section_property">
                  <h3 style="padding-bottom:16px">서비스 신청 목적 및 요청사항</h3>
                  <div class="scroll tp1">
                      <span style="position:relative;top:-5px">상용SW유지보수업종과 관련한 계약을 체결하는데 필요한 표준하도급계약 서와 매뉴얼을 신청합니다. 이중 회사서식은 성격이 달라 공정거래와 계약카 테고리 두 가지 버전을 분리하여 신청하고 싶습니다. 그리고 고소장은 형사고 소 카테고리를 추가하고 싶습니다. 상용SW유지보수업종과 관련한 계약을 체 결하는데 필요한 표준하도급계약서와 매뉴얼을 신청합니다. 이중 회사서식은 성격이 달라 공정거래와 계약 카테고리 두 가지 버전을 분리하여 신청하고 싶 습니다. 그리고 고소장은 형사고소 카테고리를 추가하고 싶습니다. 상용SW유지보수업종과 관련한 계약을 체결 하는데 필요한 표준하도급계약서와 매뉴얼을 신청합니다. 이중 회사서식은 성격이 달라 공정거래와 계약 카테고리 두 가지 버전을 분리하여 신청하고 싶습니다. 그리고 고소장은 형사고소 카테고리를 추가하고 싶습니다. 상용SW유지보수업종과 관련한 계약을 체결하는데 필요한 표준하도급계약서와 매뉴얼을 신청 합니다. 그리고 고소장은 형사고소 카테고리를 추가하고 싶습니다.</span>
                  </div>
              </div>
              <div class="action-rm action-rm-ly">
                  <div class="rt">
                      <a href="#" class="btn-confirm" data-toggle="modal" style="width:154px" data-dismiss="modal">확인</a>
                  </div>
              </div>
              <a href="" class="close" data-dismiss="modal">닫기</a>
          </div>
          
        </div>
      </div>      
    </div>
    
    <!-- Modal 신청완료시 -->
    <div class="modal fade" id="complete_agreement" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <!--[D] step1 : Form 서비스 내역 상세보기 -->
      <div class="modal-dialog modal-sm" style="width:988px" id="serviceProperty8">
        <div class="modal-content">
         <div class="service_property">
              <a href="" class="close" data-dismiss="modal">닫기</a>
              <div class="tit">
                  <h3>Form 서비스 내역 상세보기</h3><span class="status_ico complete_agreement">계약완료</span>
              </div>
              <div class="partition">
                  <div class="lt">
                      <div class="section_property section_property_table">
                        <h3>문서유형 및 카테고리 선택내역<em class="accent">20개</em></h3>
                        <table cellpadding="0" cellspacing="0" border="0" class="stk_table" style="width:367px">
                            <thead>
                            <tr>
                                <th width="54" style="text-align:center">#</th>
                                <th width="83" class="plain">문서유형</th>
                                <th width="164" class="plain">카테고리</th>
                                <th>개수</th>
                            </tr>
                            </thead>
                        </table>
                        <div class="scroll tp0">
                            <span>
                            <table cellpadding="0" cellspacing="0" border="0" class="stk_table" style="width:100%">
                               <colgroup>
                                 <col width="54">
                                 <col width="83">
                                 <col width="164">
                                 <col>
                                </colgroup>
                                <tbody>
                                <tr>
                                    <td class="num">20</td>
                                    <td class="plain">내용증명</td>
                                    <td class="plain">소프트웨어유지및보수</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td class="num">19</td>
                                    <td class="plain">계약서</td>
                                    <td class="plain">협상</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td class="num">18</td>
                                    <td class="plain">계약서</td>
                                    <td class="plain">형사고소</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td class="num">17</td>
                                    <td class="plain">계약서</td>
                                    <td class="plain">소프트웨어유지및보수</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td class="num">16</td>
                                    <td class="plain">기타</td>
                                    <td class="plain">소프트웨어유지및보수</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td class="num">16</td>
                                    <td class="plain">기타</td>
                                    <td class="plain">소프트웨어유지및보수</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td class="num">16</td>
                                    <td class="plain">기타</td>
                                    <td class="plain">소프트웨어유지및보수</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td class="num">16</td>
                                    <td class="plain">기타</td>
                                    <td class="plain">소프트웨어유지및보수</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td class="num">16</td>
                                    <td class="plain">기타</td>
                                    <td class="plain">소프트웨어유지및보수</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td class="num">16</td>
                                    <td class="plain">기타</td>
                                    <td class="plain">소프트웨어유지및보수</td>
                                    <td>3</td>
                                </tr>
                                </tbody>
                            </table>
                            </span>
                        </div>
                      </div>
                      <div class="section_property">
                          <h3 style="padding-bottom:16px">서비스 신청 목적 및 요청사항</h3>
                          <div class="scroll tp1">
                              <span style="position:relative;top:-5px">상용SW유지보수업종과 관련한 계약을 체결하는데 필요한 표준하도급계약 서와 매뉴얼을 신청합니다. 이중 회사서식은 성격이 달라 공정거래와 계약카 테고리 두 가지 버전을 분리하여 신청하고 싶습니다. 그리고 고소장은 형사고 소 카테고리를 추가하고 싶습니다. 상용SW유지보수업종과 관련한 계약을 체 결하는데 필요한 표준하도급계약서와 매뉴얼을 신청합니다. 이중 회사서식은 성격이 달라 공정거래와 계약 카테고리 두 가지 버전을 분리하여 신청하고 싶 습니다. 그리고 고소장은 형사고소 카테고리를 추가하고 싶습니다. 상용SW유지보수업종과 관련한 계약을 체결 하는데 필요한 표준하도급계약서와 매뉴얼을 신청합니다. 이중 회사서식은 성격이 달라 공정거래와 계약 카테고리 두 가지 버전을 분리하여 신청하고 싶습니다. 그리고 고소장은 형사고소 카테고리를 추가하고 싶습니다. 상용SW유지보수업종과 관련한 계약을 체결하는데 필요한 표준하도급계약서와 매뉴얼을 신청 합니다. 그리고 고소장은 형사고소 카테고리를 추가하고 싶습니다.</span>
                          </div>
                      </div>
                  </div>
                  <div class="rt">
                      <div class="section_property section_property_table">
                        <h3>Form 서비스 오프라인 계약내역</h3>
                        <div class="wrap_topline_list">
                            <ul class="topline_list">
                                <li><strong>계약명</strong><span>상용SW유지보수 관련 문서 5종</span></li>
                                <li><strong>계약일</strong><span>2016.06.15</span></li>
                                <li><strong>담당자</strong><span>머스트노우 홍길동</span></li>
                                <li><strong>문서개수</strong><span>5 종</span></li>
                                <li><strong>결제금액</strong><span>2,000,000원</span></li>
                                <li><strong>결제상태</strong><span class="blue">결제대기</span></li>
                            </ul>
                        </div>
                        <table cellpadding="0" cellspacing="0" border="0" class="stk_table" style="width:100%">
                            <thead>
                            <tr>
                                <th width="54" style="text-align:center">#</th>
                                <th width="83" class="plain">문서유형</th>
                                <th class="plain">카테고리</th>
                                <th width="116" style="text-align:center">결제금액</th>
                            </tr>
                            </thead>
                        </table>
                        <div class="scroll tp0">
                            <span>
                            <table cellpadding="0" cellspacing="0" border="0" class="stk_table" style="width:100%">
                               <colgroup>
                                 <col width="54">
                                 <col width="83">
                                 <col>
                                 <col width="116">
                                </colgroup>
                                <tbody>
                                <tr>
                                    <td class="num">20</td>
                                    <td class="plain">계약서</td>
                                    <td class="plain">2016년 상용SW유지보수 계약서 2016년 상용</td>
                                    <td class="price">1,000,000 원</td>
                                </tr>
                                <tr>
                                    <td class="num">19</td>
                                    <td class="plain">내용증명</td>
                                    <td class="plain">SW유지보수 계약서</td>
                                    <td class="price">250,000 원</td>
                                </tr>
                                <tr>
                                    <td class="num">18</td>
                                    <td class="plain">내용증명</td>
                                    <td class="plain">하자보수 및 매매대금반환 관련 내용증명</td>
                                    <td class="price">250,000 원</td>
                                </tr>
                                <tr>
                                    <td class="num">17</td>
                                    <td class="plain">매뉴얼</td>
                                    <td class="plain">계약이행촉구 및 계약 해제 통보 내용증명</td>
                                    <td class="price">250,000 원</td>
                                </tr>
                                <tr>
                                    <td class="num">16</td>
                                    <td class="plain">매뉴얼</td>
                                    <td class="plain">상용SW유지보수 실무자 매뉴얼</td>
                                    <td class="price">250,000 원</td>
                                </tr>
                                <tr>
                                    <td class="num">16</td>
                                    <td class="plain">계약서</td>
                                    <td class="plain">사회적기업 재정지원사업 업무 매뉴얼</td>
                                    <td class="price">450,000 원</td>
                                </tr>
                                <tr>
                                    <td class="num">16</td>
                                    <td class="plain">계약서</td>
                                    <td class="plain">소프트웨어유지및보수</td>
                                    <td class="price">450,000 원</td>
                                </tr>
                                <tr>
                                    <td class="num">16</td>
                                    <td class="plain">기타</td>
                                    <td class="plain">소프트웨어유지및보수</td>
                                    <td class="price">150,000 원</td>
                                </tr>
                                <tr>
                                    <td class="num">16</td>
                                    <td class="plain">기타</td>
                                    <td class="plain">소프트웨어유지및보수</td>
                                    <td>250,000 원</td>
                                </tr>
                                <tr>
                                    <td class="num">16</td>
                                    <td class="plain">기타</td>
                                    <td class="plain">소프트웨어유지및보수</td>
                                    <td class="price">450,000 원</td>
                                </tr>
                                </tbody>
                            </table>
                            </span>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="action-rm action-rm-ly" style="margin-top:19px;text-align:right">
                  <a href="#" class="memory" data-toggle="modal" style="width:154px">다음에 결제</a>
                  <a href="#" class="btn-confirm goto2" data-toggle="modal" style="width:154px">바로 결제</a>
                  <!--[D] 계약완료시 확인으로 변경 -->
                  </div>
              </div>
          </div>
          
        </div>
      </div>
      <!--[D] step2 : 서비스 결제하기로 이동합니다. -->
      <div class="modal-dialog modal-sm" style="width:371px;display:none" id="serviceProperty9">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">서비스 결제하기로 이동합니다.</h4>
          </div>
          <div class="modal-body" style="padding-bottom:36px">
            서비스 결제하기 페이지에서 결제를 바로 진행합니다.<br>결제를 위해 서비스 결제하기 페이지로 바로 이동합니다.
          </div>
        </div>
      </div>
    </div>
    
    

    <!-- Slimscroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
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
            /* scroll */
            $('.scroll.tp0').slimScroll({
                size: '6px',
                height: '159px',
                distance: '0',
                alwaysVisible: true,
                railVisible: true,
                color:'#c6cad1',
                railColor: '#f1f1f1',
                opacity: 1,
                railOpacity: 1
            });
            $('.scroll.tp1').slimScroll({
                size: '6px',
                height: '127px',
                distance: '0',
                alwaysVisible: true,
                railVisible: true,
                color:'#c6cad1',
                railColor: '#f1f1f1',
                opacity: 1,
                railOpacity: 1
            });
            $('#content').keyup(function (e){
                var content = $(this).val();
                $('#counter').html(content.length);
            });
            $('#content').keyup();
            /* scroll */
//            $(window).on("load resize",function(e){
//                if($('.scroll.tp1 > span').height() > 127){
//                        $('.scroll.tp1').css('padding-right',14);
//                        $('.scroll.tp1 + div + .slimScrollRail').show();
//                    console.log($('.scroll.tp1 > span').height())
//                    }else{
//                        $('.scroll.tp1').css('padding-right',0);
//                        $('.scroll.tp1 + div + .slimScrollRail').hide();
//                        console.log($('.scroll.tp1 > span').height())
//                 }
//            });
        });
        
        $(".wrap_pay_detail .toggle").click(function(){
            $( this ).parent().toggleClass("open");
        });
        $("#serviceProperty1 .btn-confirm").click(function(){
            $("#serviceProperty1").hide();
            $("#serviceProperty2").show();
        });
        $("#serviceProperty2 .btn-confirm").click(function(){
            $("#serviceProperty2").hide();
            $("#serviceProperty3").show();
        });
        
        $("#serviceProperty4 .btn-confirm").click(function(){
            $("#serviceProperty4").hide();
            $("#serviceProperty5").show();
        });
        $("#serviceProperty5 .btn-confirm").click(function(){
            $("#serviceProperty5").hide();
            $("#serviceProperty6").show();
        });
        $("#serviceProperty6 .btn-confirm").click(function(){
            $("#serviceProperty6").hide();
            $("#serviceProperty7").show();
        });
        $("#serviceProperty8 .btn-confirm").click(function(){
            $("#serviceProperty8").hide();
            $("#serviceProperty9").show();
        });
    </script>
  </body>
</html>
