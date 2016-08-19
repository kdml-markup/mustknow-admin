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
                    <h2>Form 서비스 신청</h2>
                    <ul>
                        <li>Form 서비스는 기업에서 필요한 문서를 카테고리별 맞춤형으로 제공합니다.</li>
                        <li>문서유형은 계약서, 내용증명, 고소장, 매뉴얼, 회사서식으로 나누어져 있습니다. 각각의 문서유형 안에는 다양한 카테고리가 있습니다.</li>
                        <li>상황별로 필요한 Form을 하단의 양식(문서유형, 카테고리, 신청 목적, 문서 수량 등)에 맞춰 작성한 후 신청할 수 있습니다.</li>
                        <li>서비스를 신청하시면 머스트노우에서 오프라인 계약 진행을 위해 고객님께 연락을 드립니다.  오프라인 계약절차를 통해 구매 후 이용할 수 있습니다.</li>
                    </ul>
                </div>
                
                <div class="flex_layout">
                    <div class="lt_section" style="height:185px">
                        <div class="title">
                            <h3>문서유형 및 카테고리 선택</h3>
                            <em>상단의 문서유형 탭을 클릭하고<br>하단의 카테고리를 선택하세요.</em>
                        </div>
                        <div class="wrap_mintip">
                            <span class="mintip_tit">추가카테고리</span>
                            <div class="mintip">
                                <button type="button" class="btn" data-toggle="dropdown" aria-expanded="true"></button>
                                <div class="wrap_text"><div class="text">원하는 카테고리를 직접 입력 후 체크박스 선택 시<br>하단의 선택내역에 추가됩니다.</div><span class="arrow"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="rt_section" style="height:185px">
                        <!-- Custom Tabs -->
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs nav-column-6" style="border-right: solid 1px #d9dadb">
                                <li class="active"><a href="#tab_1" data-toggle="tab">계약서</a></li>
                                <li><a href="#tab_2" data-toggle="tab">내용증명</a></li>
                                <li><a href="#tab_3" data-toggle="tab">고소장</a></li>
                                <li><a href="#tab_4" data-toggle="tab">매뉴얼</a></li>
                                <li><a href="#tab_5" data-toggle="tab">회사서식</a></li>
                                <li><a href="#tab_6" data-toggle="tab" style="border-right:0">기타</a></li>
                            </ul>
                            <div id="tab_1" class="tab-content active">
                                <div class="wrap_check">
                                    <input type="checkbox" id="t1" checked><label for="t1">협상</label>
                                    <input type="checkbox" id="t2"><label for="t2">계약</label>
                                    <input type="checkbox" id="t3"><label for="t3">형사고소</label>
                                    <input type="checkbox" id="t4"><label for="t4">채권회수</label>
                                    <input type="checkbox" id="t5"><label for="t5">부동산</label>
                                    <input type="checkbox" id="t6"><label for="t6">지재권</label>
                                    <input type="checkbox" id="t7"><label for="t7">IT분쟁</label>
                                    <input type="checkbox" id="t8" checked><label for="t8">경영권</label><br>
                                    <input type="checkbox" id="t9"><label for="t9">공정거래</label>
                                    <input type="checkbox" id="t10"><label for="t10">가맹사업</label>
                                    <input type="checkbox" id="t11"><label for="t11">스타트업</label>
                                    <input type="checkbox" id="t12"><label for="t12">병원</label>
                                    <input type="checkbox" id="t13"><label for="t13">계약일반</label>
                                    <input type="checkbox" id="t14"><label for="t14">계약특화</label>
                                    <input type="checkbox" id="t15"><label for="t15">
                                        <div class="wrap_mintip">
                                            <span class="mintip_tit">기타</span>
                                            <div class="mintip">
                                                <button type="button" class="btn" data-toggle="dropdown" aria-expanded="true"></button>
                                                <div class="wrap_text"><div class="text">신청하고자 하는 카테고리가 명확하지 않은 경우<br>'기타'를 선택하고 요청사항에 설명을 적어주세요.</div><span class="arrow"></span></div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="add_check">
                                    <div class="add_check_in">
                                        <span><input type="checkbox" checked><input type="text" value="소프트웨어유지및보수"></span>
                                        <span><input type="checkbox"><input type="text" value="SW상용유지보수"></span>
                                        <button class="plus">추가</button>
                                    </div>
                                </div>
                            </div><!-- /.tab-pane -->
                            <div id="tab_2" class="tab-content">
                                <div class="wrap_check">
                                    <input type="checkbox" id="t1"><label for="t1">협상</label>
                                    <input type="checkbox" id="t2"><label for="t2">계약</label>
                                    <input type="checkbox" id="t3"><label for="t3">형사고소</label>
                                    <input type="checkbox" id="t4"><label for="t4">채권회수</label>
                                    <input type="checkbox" id="t5"><label for="t5">부동산</label>
                                    <input type="checkbox" id="t6"><label for="t6">지재권</label>
                                    <input type="checkbox" id="t7"><label for="t7">IT분쟁</label>
                                    <input type="checkbox" id="t8"><label for="t8">경영권</label>
                                    <input type="checkbox" id="t9"><label for="t9">공정거래</label>
                                    <input type="checkbox" id="t10"><label for="t10">가맹사업</label>
                                    <input type="checkbox" id="t11"><label for="t11">스타트업</label>
                                    <input type="checkbox" id="t12"><label for="t12">병원</label>
                                    <input type="checkbox" id="t13"><label for="t13">계약일반</label>
                                    <input type="checkbox" id="t14"><label for="t14">계약특화</label>
                                    <input type="checkbox" id="t15"><label for="t15">
                                        <div class="wrap_mintip">
                                            <span class="mintip_tit">기타</span>
                                            <div class="mintip open">
                                                <button type="button" class="btn" data-toggle="dropdown" aria-expanded="true"></button>
                                                <div class="wrap_text"><div class="text">신청하고자 하는 카테고리가 명확하지 않은 경우<br>'기타'를 선택하고 요청사항에 설명을 적어주세요.</div><span class="arrow"></span></div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="add_check">
                                    <div class="add_check_in">
                                        <span><input type="checkbox"><input type="text"></span>
                                        <span><input type="checkbox"><input type="text"></span>
                                        <button class="plus">추가</button>
                                    </div>
                                </div>
                            </div><!-- /.tab-pane -->
                            <div id="tab_3" class="tab-content">
                                <div class="wrap_check">
                                    <input type="checkbox" id="t1" checked><label for="t1">협상</label>
                                    <input type="checkbox" id="t2"><label for="t2">계약</label>
                                    <input type="checkbox" id="t3"><label for="t3">형사고소</label>
                                    <input type="checkbox" id="t4"><label for="t4">채권회수</label>
                                    <input type="checkbox" id="t5"><label for="t5">부동산</label>
                                    <input type="checkbox" id="t6"><label for="t6">지재권</label>
                                    <input type="checkbox" id="t7"><label for="t7">IT분쟁</label>
                                    <input type="checkbox" id="t8"><label for="t8">경영권</label>
                                    <input type="checkbox" id="t9"><label for="t9">공정거래</label>
                                    <input type="checkbox" id="t10"><label for="t10">가맹사업</label>
                                    <input type="checkbox" id="t11"><label for="t11">스타트업</label>
                                    <input type="checkbox" id="t12"><label for="t12">병원</label>
                                    <input type="checkbox" id="t13"><label for="t13">계약일반</label>
                                    <input type="checkbox" id="t14"><label for="t14">계약특화</label>
                                    <input type="checkbox" id="t15"><label for="t15">
                                        <div class="wrap_mintip">
                                            <span class="mintip_tit">기타</span>
                                            <div class="mintip open">
                                                <button type="button" class="btn" data-toggle="dropdown" aria-expanded="true"></button>
                                                <div class="wrap_text"><div class="text">신청하고자 하는 카테고리가 명확하지 않은 경우<br>'기타'를 선택하고 요청사항에 설명을 적어주세요.</div><span class="arrow"></span></div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="add_check">
                                    <div class="add_check_in">
                                        <span><input type="checkbox"><input type="text"></span>
                                        <span><input type="checkbox"><input type="text"></span>
                                        <button class="plus">추가</button>
                                    </div>
                                </div>
                            </div><!-- /.tab-pane -->
                            <div id="tab_4" class="tab-content">
                                <div class="wrap_check">
                                    <input type="checkbox" id="t1"><label for="t1">협상</label>
                                    <input type="checkbox" id="t2"><label for="t2">계약</label>
                                    <input type="checkbox" id="t3"><label for="t3">형사고소</label>
                                    <input type="checkbox" id="t4"><label for="t4">채권회수</label>
                                    <input type="checkbox" id="t5"><label for="t5">부동산</label>
                                    <input type="checkbox" id="t6"><label for="t6">지재권</label>
                                    <input type="checkbox" id="t7"><label for="t7">IT분쟁</label>
                                    <input type="checkbox" id="t8"><label for="t8">경영권</label>
                                    <input type="checkbox" id="t9"><label for="t9">공정거래</label>
                                    <input type="checkbox" id="t10"><label for="t10">가맹사업</label>
                                    <input type="checkbox" id="t11"><label for="t11">스타트업</label>
                                    <input type="checkbox" id="t12"><label for="t12">병원</label>
                                    <input type="checkbox" id="t13"><label for="t13">계약일반</label>
                                    <input type="checkbox" id="t14"><label for="t14">계약특화</label>
                                    <input type="checkbox" id="t15"><label for="t15">
                                        <div class="wrap_mintip">
                                            <span class="mintip_tit">기타</span>
                                            <div class="mintip open">
                                                <button type="button" class="btn" data-toggle="dropdown" aria-expanded="true"></button>
                                                <div class="wrap_text"><div class="text">신청하고자 하는 카테고리가 명확하지 않은 경우<br>'기타'를 선택하고 요청사항에 설명을 적어주세요.</div><span class="arrow"></span></div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="add_check">
                                    <div class="add_check_in">
                                        <span><input type="checkbox"><input type="text"></span>
                                        <span><input type="checkbox"><input type="text"></span>
                                        <button class="plus">추가</button>
                                    </div>
                                </div>
                            </div><!-- /.tab-pane -->
                            <div id="tab_5" class="tab-content">
                                <div class="wrap_check">
                                    <input type="checkbox" id="t1"><label for="t1">협상</label>
                                    <input type="checkbox" id="t2"><label for="t2">계약</label>
                                    <input type="checkbox" id="t3"><label for="t3">형사고소</label>
                                    <input type="checkbox" id="t4"><label for="t4">채권회수</label>
                                    <input type="checkbox" id="t5"><label for="t5">부동산</label>
                                    <input type="checkbox" id="t6"><label for="t6">지재권</label>
                                    <input type="checkbox" id="t7"><label for="t7">IT분쟁</label>
                                    <input type="checkbox" id="t8"><label for="t8">경영권</label>
                                    <input type="checkbox" id="t9"><label for="t9">공정거래</label>
                                    <input type="checkbox" id="t10"><label for="t10">가맹사업</label>
                                    <input type="checkbox" id="t11"><label for="t11">스타트업</label>
                                    <input type="checkbox" id="t12"><label for="t12">병원</label>
                                    <input type="checkbox" id="t13"><label for="t13">계약일반</label>
                                    <input type="checkbox" id="t14"><label for="t14">계약특화</label>
                                    <input type="checkbox" id="t15"><label for="t15">
                                        <div class="wrap_mintip">
                                            <span class="mintip_tit">기타</span>
                                            <div class="mintip open">
                                                <button type="button" class="btn" data-toggle="dropdown" aria-expanded="true"></button>
                                                <div class="wrap_text"><div class="text">신청하고자 하는 카테고리가 명확하지 않은 경우<br>'기타'를 선택하고 요청사항에 설명을 적어주세요.</div><span class="arrow"></span></div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="add_check">
                                    <div class="add_check_in">
                                        <span><input type="checkbox"><input type="text"></span>
                                        <span><input type="checkbox"><input type="text"></span>
                                        <button class="plus">추가</button>
                                    </div>
                                </div>
                            </div><!-- /.tab-pane -->
                            <div id="tab_6" class="tab-content">
                                <div class="wrap_check">
                                    <input type="checkbox" id="t1"><label for="t1">협상</label>
                                    <input type="checkbox" id="t2"><label for="t2">계약</label>
                                    <input type="checkbox" id="t3"><label for="t3">형사고소</label>
                                    <input type="checkbox" id="t4"><label for="t4">채권회수</label>
                                    <input type="checkbox" id="t5"><label for="t5">부동산</label>
                                    <input type="checkbox" id="t6"><label for="t6">지재권</label>
                                    <input type="checkbox" id="t7"><label for="t7">IT분쟁</label>
                                    <input type="checkbox" id="t8"><label for="t8">경영권</label>
                                    <input type="checkbox" id="t9"><label for="t9">공정거래</label>
                                    <input type="checkbox" id="t10"><label for="t10">가맹사업</label>
                                    <input type="checkbox" id="t11"><label for="t11">스타트업</label>
                                    <input type="checkbox" id="t12"><label for="t12">병원</label>
                                    <input type="checkbox" id="t13"><label for="t13">계약일반</label>
                                    <input type="checkbox" id="t14"><label for="t14">계약특화</label>
                                    <input type="checkbox" id="t15"><label for="t15">
                                        <div class="wrap_mintip">
                                            <span class="mintip_tit">기타</span>
                                            <div class="mintip open">
                                                <button type="button" class="btn" data-toggle="dropdown" aria-expanded="true"></button>
                                                <div class="wrap_text"><div class="text">신청하고자 하는 카테고리가 명확하지 않은 경우<br>'기타'를 선택하고 요청사항에 설명을 적어주세요.</div><span class="arrow"></span></div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="add_check">
                                    <div class="add_check_in">
                                        <span><input type="checkbox"><input type="text"></span>
                                        <span><input type="checkbox"><input type="text"></span>
                                        <button class="plus">추가</button>
                                    </div>
                                </div>
                            </div><!-- /.tab-pane -->
                        </div><!-- /.tab-content -->
                        
                    </div>
                    
                </div>
                
                <div class="flex_layout">
                    <div class="lt_section" style="height:386px;border-top:solid 1px #e1e1e1">
                        <div class="title">
                            <h3>선택내역 확인 및 상세신청</h3>
                            <em>‘문서유형-카테고리’순으로 된<br>선택내역과 개수를 확인한 후<br>자세한 신청 목적 및 요청사항을<br>우측칸에 입력해주세요.</em>
                        </div>
                    </div>
                    <div class="rt_section" style="height:386px;border:solid 1px #e1e1e1;border-left:0">
                        <div class="lt">
                            <h3>선택내역 <span class="notice">각 문서의 개수를 개별적으로 입력할 수 있습니다.</span></h3>
                            <table cellpadding="0" cellspacing="0" border="0" class="stk_table" style="width:315px">
                                <thead>
                                <tr>
                                    <th width="19"></th>
                                    <th width="66">문서유형</th>
                                    <th width="132">카테고리</th>
                                    <th style="padding-left:34px;text-indent:-11px">개수</th>
                                </tr>
                                </thead>
                            </table>
                            <div class="scroll">
                                <span>
                                <table cellpadding="0" cellspacing="0" border="0" class="stk_table" style="width:315px">
                                   <colgroup>
                                     <col width="19">
                                     <col width="66">
                                     <col width="132">
                                     <col>
                                    </colgroup>
                                    <tbody>
                                    <tr>
                                        <td colspan="4"><span class="nodata"></span></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><input type="text" value="계약서" class="gr_input" style="width:64px"></td>
                                        <td><input type="text" value="협상" class="gr_input" style="width:130px"></td>
                                        <td class="add"><input type="text" value="1" class="num_input" style="width:50px"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><input type="text" value="계약서" class="gr_input" style="width:64px"></td>
                                        <td><input type="text" value="협상" class="gr_input" style="width:130px"></td>
                                        <td class="add"><input type="text" value="1" class="num_input" style="width:50px"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><input type="text" value="계약서" class="gr_input" style="width:64px"></td>
                                        <td><input type="text" value="협상" class="gr_input" style="width:130px"></td>
                                        <td class="add"><input type="text" value="1" class="num_input" style="width:50px"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><input type="text" value="계약서" class="gr_input" style="width:64px"></td>
                                        <td><input type="text" value="협상" class="gr_input" style="width:130px"></td>
                                        <td class="add"><input type="text" value="1" class="num_input" style="width:50px"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><input type="text" value="계약서" class="gr_input" style="width:64px"></td>
                                        <td><input type="text" value="협상" class="gr_input" style="width:130px"></td>
                                        <td class="add"><input type="text" value="1" class="num_input" style="width:50px"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><input type="text" value="계약서" class="gr_input" style="width:64px"></td>
                                        <td><input type="text" value="협상" class="gr_input" style="width:130px"></td>
                                        <td class="add"><input type="text" value="1" class="num_input" style="width:50px"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><input type="text" value="계약서" class="gr_input" style="width:64px"></td>
                                        <td><input type="text" value="협상" class="gr_input" style="width:130px"></td>
                                        <td class="add"><input type="text" value="1" class="num_input" style="width:50px"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><input type="text" value="계약서" class="gr_input" style="width:64px"></td>
                                        <td><input type="text" value="협상" class="gr_input" style="width:130px"></td>
                                        <td class="add"><input type="text" value="1" class="num_input" style="width:50px"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><input type="text" value="계약서" class="gr_input" style="width:64px"></td>
                                        <td><input type="text" value="협상" class="gr_input" style="width:130px"></td>
                                        <td class="add"><input type="text" value="1" class="num_input" style="width:50px"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><input type="text" value="계약서" class="gr_input" style="width:64px"></td>
                                        <td><input type="text" value="협상" class="gr_input" style="width:130px"></td>
                                        <td class="add"><input type="text" value="1" class="num_input" style="width:50px"></td>
                                    </tr>
                                    </tbody>









                                </table>
                                </span>
                            </div>
                            <div class="total">
                                <span class="tx">총 문서개수</span><strong><span>20</span>개</strong>
                            </div>
                            <button type="button" class="del" data-toggle="modal" data-target="#listDel">선택목록삭제</button>
                        </div>
                        <div class="rt">
                            
                            <h3>서비스 신청 목적 및 요청사항</h3>
                            
                            <textarea id="content" class="text_count" maxlength="500">상용SW유지보수업종과 관련한 계약을 체결하는데 필요한 표준하도급계약서와 매뉴얼을 신청합 니다. 이중 회사서식은 성격이 달라 공정거래와 계약 카테고리 두 가지 버전을 분리하여 신청하고 싶습니다. 그리고 고소장은 형사고소 카테고리를 추가하고 싶습니다. 상용SW유지보수업종과 관 련한 계약을 체결하는데 필요한 표준하도급계약서와 매뉴얼을 신청합니다. 이중 회사서식은 성격 이 달라 공정거래와 계약 카테고리 두 가지 버전을 분리하여 신청하고 싶습니다. 그리고 고소장은 형사고소 카테고리를 추가하고 싶습니다. 상용SW유지보수업종과 관련한 계약을 체결하는데 필 요한 표준하도급계약서와 매뉴얼을 신청합니다. 이중 회사서식은 성격이 달라 공정거래와 계약 카 테고리 두 가지 버전을 분리하여 신청하고 싶습니다. 그리고 고소장은 형사고소 카테고리를 추가 하고 싶습니다. 상용SW유지보수업종과 관련한 계약을 체결하는데 필요한 표준하도급계약서와 매뉴얼을 신청합니다. 고소장은 형사고소 카테고리를 꼭 추가하고 싶습니다.</textarea>
                            <div class="wrap_count">
                                <span id="counter" class="num_count">###</span><span>/500자</span>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                
                
                <div class="action-rm" style="margin-top:30px">
                    <div class="rt">
                        <a href="#" class="btn-black" data-toggle="modal" data-target="#saveTemp" style="width:112px">임시저장</a>
                        <a href="#" class="submission" data-toggle="modal" data-target="#formSubmit" style="width:162px">서비스 신청</a>
                    </div>
                </div>
                
                
                
                
                
                
                
                
                
                
            </div>
        </div><!-- /.content-wrapper -->

       <?php include("../pages/tpl/footer.tpl");?>
       
    </div><!-- ./wrapper -->
    
    <!-- Modal 글자수를 초과하였습니다. -->
    <div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <div class="modal-dialog modal-sm" style="width:371px">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">글자수를 초과하였습니다.</h4>
          </div>
          <div class="modal-body">
            최대 10자로 수정해주세요.
          </div>
          <div class="modal-footer" style="text-align:center">
            <button type="button" class="btn btn-confirm" data-dismiss="modal">확인</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 선택목록을 삭제하시겠습니까? -->
    <div class="modal fade" id="listDel" tabindex="-1" role="dialog" aria-labelledby="listDel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">선택목록을 삭제하시겠습니까?</h4>
          </div>
          <div class="modal-body">
            선택한 문서유형-카테고리와 개수가 목록에서 삭제됩니다.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-black" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-confirm" data-dismiss="modal">확인</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 서비스 신청을 임시저장하였습니다. -->
    <div class="modal fade" id="saveTemp" tabindex="-1" role="dialog" aria-labelledby="listDel" aria-hidden="true">
      <div class="modal-dialog modal-sm" style="width:371px">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">서비스 신청을 임시저장하였습니다.</h4>
          </div>
          <div class="modal-body">
            임시 저장된 서비스는 <span class="blue">Form 서비스 신청내역</span>에서<br><span class="blue">신청대기</span> 상태로 표시되며, 추후 수정 및 신청이 가능합니다.
          </div>
          <div class="modal-footer" style="text-align:center">
            <button type="button" class="btn btn-confirm" data-dismiss="modal">확인</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Form 서비스를 신청하시겠습니까?-->
    <div class="modal fade" id="formSubmit" tabindex="-1" role="dialog" aria-labelledby="formSubmit" aria-hidden="true">
      <div class="modal-dialog modal-sm" id="teamDelStep1" style="width:371px">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Form 서비스를 신청하시겠습니까?</h4>
          </div>
          <div class="modal-body">
            신청 내용이 맞으시면 확인을 눌러주세요.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-black" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-confirm">확인</button>
          </div>
        </div>
      </div>
      <!--[D] step2 : 삭제 확인 -->
      <div class="modal-dialog modal-sm" style="width:371px;display:none" id="teamDelStep2">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">서비스 신청이 완료되었습니다.</h4>
          </div>
          <div class="modal-body">
            신청한 서비스는 <span class="blue">Form 서비스 신청내역</span>에서<br><span class="blue">신청완료</span> 상태로 표시되며, 오프라인 계약을 진행하게 됩니다.
          </div>
          <div class="modal-footer" style="text-align:center">
            <button type="button" class="btn btn-confirm" data-dismiss="modal">확인</button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Slimscroll css -->
    <style>
        
        .slimScrollDiv,.slimScrollDiv .scroll{margin:0}
        
        .scroll > span{padding:3px 0;display:block}
    </style>
    <!-- Slimscroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- page script -->
    <script>
        $(function () {
            /* scroll */
            $('.scroll').slimScroll({
                size: '6px',
                height: '181px',
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
//                $(this).height(((content.split('\n').length + 1) * 1.5) + 'em');
                $('#counter').html(content.length);
            });
            $('#content').keyup();
            
        });

        $(".wrap_pay_detail .toggle").click(function(){
            $( this ).parent().toggleClass("open");
        });
        $("#teamDelStep1 .btn-confirm").click(function(){
            $("#teamDelStep1").hide();
            $("#teamDelStep2").show();
        });
    </script>
  </body>
</html>
