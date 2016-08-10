<?php
session_start();
if(!isset($_SESSION['uid']) || !isset($_SESSION['uname'])) {
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
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../plugins/select2/select2.min.css">
    <link rel="stylesheet" href="../dist/css/AdminLTE.css">
    <link rel="stylesheet" href="../dist/css/mustknow.ico.css">
    <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/tablelistStyle.css">
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="../plugins/select2/select2.full.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini inside-land">
    <?php include("../../pages/tpl/advertising.tpl"); ?>
    <div class="wrapper">

      <?php include("../../pages/tpl/header.tpl");
            include("../../pages/tpl/aside.tpl"); ?>

      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
           <div class="content main mypage">
            
               <?php include("../menu.php"); ?>
               <div class="wrap_withdraw">
                   <div class="title_min">
                       <h2>회원정보 수정</h2>
                   </div>
                   <div class="withdraw_content">
                       <h3>회원 정보</h3>
                       <div class="inbox">
                           <ul class="info">
                               <li><strong>회원 ID</strong><span>mustknow_022</span></li>
                               <li><strong>회원 유형</strong><span>개인 회원 (유료)</span></li>
                           </ul>
                       </div>
                       <h3>회원 탈퇴 사유 <em>(중복 선택 가능)</em></h3>
                       <div class="inbox wrap_reason-tb">
                            <table cellpadding="0" cellspacing="" border="0" class="reason-tb">
                                <tr>
                                    <td><input type="checkbox" id="rs1"><label for="rs1">재 가입을 위해서</label></td>
                                    <td><input type="checkbox" id="rs2"><label for="rs2">시스템 장애 (속도저하, 잦은 에러 등)</label></td>
                                    <td><input type="checkbox" id="rs3"><label for="rs3">개인정보 (통신 및 신용정보)의 노출 우려</label></td>
                                    <td><input type="checkbox" id="rs4"><label for="rs4">시스템 장애 (속도저하, 잦은 에러 등)</label></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" id="rs5"><label for="rs5">콘텐츠 부족 등 이용할 만한 서비스 부족</label></td>
                                    <td><input type="checkbox" id="rs6"><label for="rs6">장기간 부재 (군 입대, 유학 등)</label></td>
                                    <td><input type="checkbox" id="rs7"><label for="rs7">재 가입을 위해서</label></td>
                                    <td><input type="checkbox" id="rs8"><label for="rs8">장기간 부재 (군 입대, 유학 등)</label></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" id="rs9"><label for="rs9">기타</label></td>
                                </tr>
                            </table>
                       </div>
                       <h3>회원 탈퇴 안내사항</h3>
                       
                       
                     <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#tab_1" data-toggle="tab">안내사항 1</a></li>
                          <li><a href="#tab_2" data-toggle="tab">안내사항 2</a></li>
                          <li><a href="#tab_3" data-toggle="tab">안내사항 3</a></li>
                          <li><a href="#tab_4" data-toggle="tab">안내사항 4</a></li>
                          <li><a href="#tab_5" data-toggle="tab">안내사항 5</a></li>
                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane active" id="tab_1">
                              <div class="tab_cnt">
                                    <div class="scroll"><div><br>우리나라는 현재 20개 국가 및 지역과 워킹홀리데이 협정 및 1개 국가와 청년교류제도(YMS) 협정을 체결하고 있습니다.<br>
            우리 청년들은 호주, 캐나다, 뉴질랜드, 일본, 프랑스, 독일, 아일랜드, 스웨덴, 덴마크, 홍콩, 대만, 체코, 오스트리아, 헝가리, 포르투갈, 네덜란드, 이탈리아, 이스라엘, 벨기에(발효 예정), 칠레 워킹홀리데이와 영국 청년교류제도(YMS)에 참여할 수 있습니다. 또한 이들 국가 청년들도 우리 워킹홀리데이 제도에 참여할 수 있습니다.<br>
            외교부는 우리 청년들이 많은 나라로 진출하여 글로벌 인재로 성장해 갈 수 있도록 워킹홀리데이 제도를 확대해 나갈 예정입니다.<br><br><br>

            워킹홀리데이 비자<br><br>

            워킹홀리데이에 참가하기 위해서는 해당 대사관 · 영사관 또는 이민성에서 워킹홀리데이 비자를 신청하셔야 합니다.<br>
            이 비자는 해당 국가 및 지역에 체류하는 동안 여행과 일을 할 수 있는 "관광취업비자" 로서 현지에서 관광 경비 조달을 위해 합법적으로 임시 취업을 할 수 있도록 허용하는 비자입니다.<br>
            체결 국가 및 지역별로 요구하는 비자발급 조건, 구비서류, 신청기간 등이 상이하기 때문에 국가 및 지역을 선택하신 후 해당 국가 및 지역에 대한 비자정보를 꼼꼼히 살펴 보시기 바랍니다.<br>
            국가 및 지역	모집시기	모집인원	어학연수	취업제한기간<br>
            네덜란드	수시접수	100명	12개월	협정상 규정 없음<br>
            뉴질랜드	뉴질랜드 이민성 공지 참조	3,000명	6개월	협정상 규정 없음<br>
            대만	수시접수	600명	12개월	협정상 규정 없음<br>
            덴마크	수시접수	제한없음	6개월	9개월<br>
            독일	수시접수	제한없음	12개월	협정상 규정 없음<br>
            스웨덴	수시접수	제한없음	12개월	협정상 규정 없음<br>
            아일랜드	연 2회 (상/하반기)	400명	6개월	협정상 규정 없음<br>
            영국 (YMS)	인포센터 홈페이지 공지 참조	1000명	24개월	협정상 규정 없음<br>
            오스트리아	수시접수	300명	6개월	협정상 규정 없음<br>
            이탈리아	수시접수	500명	12개월	한 고용주 하 6개월<br>
            일본	연 4회 (1월, 4월, 7월, 10월)	10,000명	12개월	협정상 규정 없음<br>
            체코	수시접수	300명	12개월	협정상 규정 없음<br>
            캐나다	캐나다 이민성 공지 참조	4,000명	6개월	협정상 규정 없음<br>
            포르투갈	수시접수	200명	12개월	협정상 규정 없음<br>
            프랑스	수시접수	2,000명	12개월	협정상 규정 없음<br>
            헝가리	수시접수	100명	12개월	협정상 규정 없음<br>
            홍콩	수시접수	1,000명	6개월	협정상 규정 없음(한 고용주 하 6개월)<br>
            호주	수시접수	제한없음	4개월	협정상 규정 없음(한 고용주 하 6개월)<br>
            벨기에	발효 예정	200명	6개월	6개월<br>
            이스라엘	수시접수	200명	6개월	한 고용주 하 3개월<br>
            칠레	수시접수	제한없음	 	 <br><br>
            * 워킹홀리데이 비자 체류기간은 일반적으로 최대 1년임. 단, 오스트리아는 최대 6개월임.<br>
            * 호주(1년) 및 뉴질랜드(3개월)는 워킹홀리데이 비자 연장 신청이 가능함. (특정조건 만족 시)<br>
            * 영국은 YMS(청년교류제도) 비자로 최대 2년동안 체류가 가능함.<br>
            * 협정상 규정이 없는 경우에도 해당 국가 및 지역 법령에 따라 제한이 있을 수 있음. </div>
                                 </div>
                              </div>
                          </div><!-- /.tab-pane -->
                          <div class="tab-pane" id="tab_2">
                            <div class="tab_cnt">
                                    <div class="scroll"><div><br>우리나라는 현재 20개 국가 및 지역과 워킹홀리데이 협정 및 1개 국가와 청년교류제도(YMS) 협정을 체결하고 있습니다.<br>
            우리 청년들은 호주, 캐나다, 뉴질랜드, 일본, 프랑스, 독일, 아일랜드, 스웨덴, 덴마크, 홍콩, 대만, 체코, 오스트리아, 헝가리, 포르투갈, 네덜란드, 이탈리아, 이스라엘, 벨기에(발효 예정), 칠레 워킹홀리데이와 영국 청년교류제도(YMS)에 참여할 수 있습니다. 또한 이들 국가 청년들도 우리 워킹홀리데이 제도에 참여할 수 있습니다.<br>
            외교부는 우리 청년들이 많은 나라로 진출하여 글로벌 인재로 성장해 갈 수 있도록 워킹홀리데이 제도를 확대해 나갈 예정입니다.<br><br><br>

            워킹홀리데이 비자<br><br>

            워킹홀리데이에 참가하기 위해서는 해당 대사관 · 영사관 또는 이민성에서 워킹홀리데이 비자를 신청하셔야 합니다.<br>
            이 비자는 해당 국가 및 지역에 체류하는 동안 여행과 일을 할 수 있는 "관광취업비자" 로서 현지에서 관광 경비 조달을 위해 합법적으로 임시 취업을 할 수 있도록 허용하는 비자입니다.<br>
            체결 국가 및 지역별로 요구하는 비자발급 조건, 구비서류, 신청기간 등이 상이하기 때문에 국가 및 지역을 선택하신 후 해당 국가 및 지역에 대한 비자정보를 꼼꼼히 살펴 보시기 바랍니다.<br>
            국가 및 지역	모집시기	모집인원	어학연수	취업제한기간<br>
            네덜란드	수시접수	100명	12개월	협정상 규정 없음<br>
            뉴질랜드	뉴질랜드 이민성 공지 참조	3,000명	6개월	협정상 규정 없음<br>
            대만	수시접수	600명	12개월	협정상 규정 없음<br>
            덴마크	수시접수	제한없음	6개월	9개월<br>
            독일	수시접수	제한없음	12개월	협정상 규정 없음<br>
            스웨덴	수시접수	제한없음	12개월	협정상 규정 없음<br>
            아일랜드	연 2회 (상/하반기)	400명	6개월	협정상 규정 없음<br>
            영국 (YMS)	인포센터 홈페이지 공지 참조	1000명	24개월	협정상 규정 없음<br>
            오스트리아	수시접수	300명	6개월	협정상 규정 없음<br>
            이탈리아	수시접수	500명	12개월	한 고용주 하 6개월<br>
            일본	연 4회 (1월, 4월, 7월, 10월)	10,000명	12개월	협정상 규정 없음<br>
            체코	수시접수	300명	12개월	협정상 규정 없음<br>
            캐나다	캐나다 이민성 공지 참조	4,000명	6개월	협정상 규정 없음<br>
            포르투갈	수시접수	200명	12개월	협정상 규정 없음<br>
            프랑스	수시접수	2,000명	12개월	협정상 규정 없음<br>
            헝가리	수시접수	100명	12개월	협정상 규정 없음<br>
            홍콩	수시접수	1,000명	6개월	협정상 규정 없음(한 고용주 하 6개월)<br>
            호주	수시접수	제한없음	4개월	협정상 규정 없음(한 고용주 하 6개월)<br>
            벨기에	발효 예정	200명	6개월	6개월<br>
            이스라엘	수시접수	200명	6개월	한 고용주 하 3개월<br>
            칠레	수시접수	제한없음	 	 <br><br>
            * 워킹홀리데이 비자 체류기간은 일반적으로 최대 1년임. 단, 오스트리아는 최대 6개월임.<br>
            * 호주(1년) 및 뉴질랜드(3개월)는 워킹홀리데이 비자 연장 신청이 가능함. (특정조건 만족 시)<br>
            * 영국은 YMS(청년교류제도) 비자로 최대 2년동안 체류가 가능함.<br>
            * 협정상 규정이 없는 경우에도 해당 국가 및 지역 법령에 따라 제한이 있을 수 있음. </div>
                                 </div>
                              </div>
                          </div><!-- /.tab-pane -->
                          <div class="tab-pane" id="tab_3">
                            <div class="tab_cnt">
                                    <div class="scroll"><div><br>우리나라는 현재 20개 국가 및 지역과 워킹홀리데이 협정 및 1개 국가와 청년교류제도(YMS) 협정을 체결하고 있습니다.<br>
            우리 청년들은 호주, 캐나다, 뉴질랜드, 일본, 프랑스, 독일, 아일랜드, 스웨덴, 덴마크, 홍콩, 대만, 체코, 오스트리아, 헝가리, 포르투갈, 네덜란드, 이탈리아, 이스라엘, 벨기에(발효 예정), 칠레 워킹홀리데이와 영국 청년교류제도(YMS)에 참여할 수 있습니다. 또한 이들 국가 청년들도 우리 워킹홀리데이 제도에 참여할 수 있습니다.<br>
            외교부는 우리 청년들이 많은 나라로 진출하여 글로벌 인재로 성장해 갈 수 있도록 워킹홀리데이 제도를 확대해 나갈 예정입니다.<br><br><br>

            워킹홀리데이 비자<br><br>

            워킹홀리데이에 참가하기 위해서는 해당 대사관 · 영사관 또는 이민성에서 워킹홀리데이 비자를 신청하셔야 합니다.<br>
            이 비자는 해당 국가 및 지역에 체류하는 동안 여행과 일을 할 수 있는 "관광취업비자" 로서 현지에서 관광 경비 조달을 위해 합법적으로 임시 취업을 할 수 있도록 허용하는 비자입니다.<br>
            체결 국가 및 지역별로 요구하는 비자발급 조건, 구비서류, 신청기간 등이 상이하기 때문에 국가 및 지역을 선택하신 후 해당 국가 및 지역에 대한 비자정보를 꼼꼼히 살펴 보시기 바랍니다.<br>
            국가 및 지역	모집시기	모집인원	어학연수	취업제한기간<br>
            네덜란드	수시접수	100명	12개월	협정상 규정 없음<br>
            뉴질랜드	뉴질랜드 이민성 공지 참조	3,000명	6개월	협정상 규정 없음<br>
            대만	수시접수	600명	12개월	협정상 규정 없음<br>
            덴마크	수시접수	제한없음	6개월	9개월<br>
            독일	수시접수	제한없음	12개월	협정상 규정 없음<br>
            스웨덴	수시접수	제한없음	12개월	협정상 규정 없음<br>
            아일랜드	연 2회 (상/하반기)	400명	6개월	협정상 규정 없음<br>
            영국 (YMS)	인포센터 홈페이지 공지 참조	1000명	24개월	협정상 규정 없음<br>
            오스트리아	수시접수	300명	6개월	협정상 규정 없음<br>
            이탈리아	수시접수	500명	12개월	한 고용주 하 6개월<br>
            일본	연 4회 (1월, 4월, 7월, 10월)	10,000명	12개월	협정상 규정 없음<br>
            체코	수시접수	300명	12개월	협정상 규정 없음<br>
            캐나다	캐나다 이민성 공지 참조	4,000명	6개월	협정상 규정 없음<br>
            포르투갈	수시접수	200명	12개월	협정상 규정 없음<br>
            프랑스	수시접수	2,000명	12개월	협정상 규정 없음<br>
            헝가리	수시접수	100명	12개월	협정상 규정 없음<br>
            홍콩	수시접수	1,000명	6개월	협정상 규정 없음(한 고용주 하 6개월)<br>
            호주	수시접수	제한없음	4개월	협정상 규정 없음(한 고용주 하 6개월)<br>
            벨기에	발효 예정	200명	6개월	6개월<br>
            이스라엘	수시접수	200명	6개월	한 고용주 하 3개월<br>
            칠레	수시접수	제한없음	 	 <br><br>
            * 워킹홀리데이 비자 체류기간은 일반적으로 최대 1년임. 단, 오스트리아는 최대 6개월임.<br>
            * 호주(1년) 및 뉴질랜드(3개월)는 워킹홀리데이 비자 연장 신청이 가능함. (특정조건 만족 시)<br>
            * 영국은 YMS(청년교류제도) 비자로 최대 2년동안 체류가 가능함.<br>
            * 협정상 규정이 없는 경우에도 해당 국가 및 지역 법령에 따라 제한이 있을 수 있음. </div>
                                 </div>
                              </div>
                          </div><!-- /.tab-pane -->
                          <div class="tab-pane" id="tab_4">
                            <div class="tab_cnt">
                                    <div class="scroll"><div><br>우리나라는 현재 20개 국가 및 지역과 워킹홀리데이 협정 및 1개 국가와 청년교류제도(YMS) 협정을 체결하고 있습니다.<br>
            우리 청년들은 호주, 캐나다, 뉴질랜드, 일본, 프랑스, 독일, 아일랜드, 스웨덴, 덴마크, 홍콩, 대만, 체코, 오스트리아, 헝가리, 포르투갈, 네덜란드, 이탈리아, 이스라엘, 벨기에(발효 예정), 칠레 워킹홀리데이와 영국 청년교류제도(YMS)에 참여할 수 있습니다. 또한 이들 국가 청년들도 우리 워킹홀리데이 제도에 참여할 수 있습니다.<br>
            외교부는 우리 청년들이 많은 나라로 진출하여 글로벌 인재로 성장해 갈 수 있도록 워킹홀리데이 제도를 확대해 나갈 예정입니다.<br><br><br>

            워킹홀리데이 비자<br><br>

            워킹홀리데이에 참가하기 위해서는 해당 대사관 · 영사관 또는 이민성에서 워킹홀리데이 비자를 신청하셔야 합니다.<br>
            이 비자는 해당 국가 및 지역에 체류하는 동안 여행과 일을 할 수 있는 "관광취업비자" 로서 현지에서 관광 경비 조달을 위해 합법적으로 임시 취업을 할 수 있도록 허용하는 비자입니다.<br>
            체결 국가 및 지역별로 요구하는 비자발급 조건, 구비서류, 신청기간 등이 상이하기 때문에 국가 및 지역을 선택하신 후 해당 국가 및 지역에 대한 비자정보를 꼼꼼히 살펴 보시기 바랍니다.<br>
            국가 및 지역	모집시기	모집인원	어학연수	취업제한기간<br>
            네덜란드	수시접수	100명	12개월	협정상 규정 없음<br>
            뉴질랜드	뉴질랜드 이민성 공지 참조	3,000명	6개월	협정상 규정 없음<br>
            대만	수시접수	600명	12개월	협정상 규정 없음<br>
            덴마크	수시접수	제한없음	6개월	9개월<br>
            독일	수시접수	제한없음	12개월	협정상 규정 없음<br>
            스웨덴	수시접수	제한없음	12개월	협정상 규정 없음<br>
            아일랜드	연 2회 (상/하반기)	400명	6개월	협정상 규정 없음<br>
            영국 (YMS)	인포센터 홈페이지 공지 참조	1000명	24개월	협정상 규정 없음<br>
            오스트리아	수시접수	300명	6개월	협정상 규정 없음<br>
            이탈리아	수시접수	500명	12개월	한 고용주 하 6개월<br>
            일본	연 4회 (1월, 4월, 7월, 10월)	10,000명	12개월	협정상 규정 없음<br>
            체코	수시접수	300명	12개월	협정상 규정 없음<br>
            캐나다	캐나다 이민성 공지 참조	4,000명	6개월	협정상 규정 없음<br>
            포르투갈	수시접수	200명	12개월	협정상 규정 없음<br>
            프랑스	수시접수	2,000명	12개월	협정상 규정 없음<br>
            헝가리	수시접수	100명	12개월	협정상 규정 없음<br>
            홍콩	수시접수	1,000명	6개월	협정상 규정 없음(한 고용주 하 6개월)<br>
            호주	수시접수	제한없음	4개월	협정상 규정 없음(한 고용주 하 6개월)<br>
            벨기에	발효 예정	200명	6개월	6개월<br>
            이스라엘	수시접수	200명	6개월	한 고용주 하 3개월<br>
            칠레	수시접수	제한없음	 	 <br><br>
            * 워킹홀리데이 비자 체류기간은 일반적으로 최대 1년임. 단, 오스트리아는 최대 6개월임.<br>
            * 호주(1년) 및 뉴질랜드(3개월)는 워킹홀리데이 비자 연장 신청이 가능함. (특정조건 만족 시)<br>
            * 영국은 YMS(청년교류제도) 비자로 최대 2년동안 체류가 가능함.<br>
            * 협정상 규정이 없는 경우에도 해당 국가 및 지역 법령에 따라 제한이 있을 수 있음. </div>
                                 </div>
                              </div>
                          </div><!-- /.tab-pane -->
                          <div class="tab-pane" id="tab_5">
                            <div class="tab_cnt">
                                    <div class="scroll"><div><br>우리나라는 현재 20개 국가 및 지역과 워킹홀리데이 협정 및 1개 국가와 청년교류제도(YMS) 협정을 체결하고 있습니다.<br>
            우리 청년들은 호주, 캐나다, 뉴질랜드, 일본, 프랑스, 독일, 아일랜드, 스웨덴, 덴마크, 홍콩, 대만, 체코, 오스트리아, 헝가리, 포르투갈, 네덜란드, 이탈리아, 이스라엘, 벨기에(발효 예정), 칠레 워킹홀리데이와 영국 청년교류제도(YMS)에 참여할 수 있습니다. 또한 이들 국가 청년들도 우리 워킹홀리데이 제도에 참여할 수 있습니다.<br>
            외교부는 우리 청년들이 많은 나라로 진출하여 글로벌 인재로 성장해 갈 수 있도록 워킹홀리데이 제도를 확대해 나갈 예정입니다.<br><br><br>

            워킹홀리데이 비자<br><br>

            워킹홀리데이에 참가하기 위해서는 해당 대사관 · 영사관 또는 이민성에서 워킹홀리데이 비자를 신청하셔야 합니다.<br>
            이 비자는 해당 국가 및 지역에 체류하는 동안 여행과 일을 할 수 있는 "관광취업비자" 로서 현지에서 관광 경비 조달을 위해 합법적으로 임시 취업을 할 수 있도록 허용하는 비자입니다.<br>
            체결 국가 및 지역별로 요구하는 비자발급 조건, 구비서류, 신청기간 등이 상이하기 때문에 국가 및 지역을 선택하신 후 해당 국가 및 지역에 대한 비자정보를 꼼꼼히 살펴 보시기 바랍니다.<br>
            국가 및 지역	모집시기	모집인원	어학연수	취업제한기간<br>
            네덜란드	수시접수	100명	12개월	협정상 규정 없음<br>
            뉴질랜드	뉴질랜드 이민성 공지 참조	3,000명	6개월	협정상 규정 없음<br>
            대만	수시접수	600명	12개월	협정상 규정 없음<br>
            덴마크	수시접수	제한없음	6개월	9개월<br>
            독일	수시접수	제한없음	12개월	협정상 규정 없음<br>
            스웨덴	수시접수	제한없음	12개월	협정상 규정 없음<br>
            아일랜드	연 2회 (상/하반기)	400명	6개월	협정상 규정 없음<br>
            영국 (YMS)	인포센터 홈페이지 공지 참조	1000명	24개월	협정상 규정 없음<br>
            오스트리아	수시접수	300명	6개월	협정상 규정 없음<br>
            이탈리아	수시접수	500명	12개월	한 고용주 하 6개월<br>
            일본	연 4회 (1월, 4월, 7월, 10월)	10,000명	12개월	협정상 규정 없음<br>
            체코	수시접수	300명	12개월	협정상 규정 없음<br>
            캐나다	캐나다 이민성 공지 참조	4,000명	6개월	협정상 규정 없음<br>
            포르투갈	수시접수	200명	12개월	협정상 규정 없음<br>
            프랑스	수시접수	2,000명	12개월	협정상 규정 없음<br>
            헝가리	수시접수	100명	12개월	협정상 규정 없음<br>
            홍콩	수시접수	1,000명	6개월	협정상 규정 없음(한 고용주 하 6개월)<br>
            호주	수시접수	제한없음	4개월	협정상 규정 없음(한 고용주 하 6개월)<br>
            벨기에	발효 예정	200명	6개월	6개월<br>
            이스라엘	수시접수	200명	6개월	한 고용주 하 3개월<br>
            칠레	수시접수	제한없음	 	 <br><br>
            * 워킹홀리데이 비자 체류기간은 일반적으로 최대 1년임. 단, 오스트리아는 최대 6개월임.<br>
            * 호주(1년) 및 뉴질랜드(3개월)는 워킹홀리데이 비자 연장 신청이 가능함. (특정조건 만족 시)<br>
            * 영국은 YMS(청년교류제도) 비자로 최대 2년동안 체류가 가능함.<br>
            * 협정상 규정이 없는 경우에도 해당 국가 및 지역 법령에 따라 제한이 있을 수 있음. </div>
                                 </div>
                              </div>
                          </div><!-- /.tab-pane -->
                        </div><!-- /.tab-content -->
                      </div><!-- nav-tabs-custom -->
                       
                       <div class="agree"><input type="checkbox" id="agree"><label for="agree">위 안내사항을 모두 확인하였으며, 해당 내용에 동의합니다.</label></div>
                       
                   </div>
               </div>
               <div class="myinfo_btn_area">
                    <button type="button" class="btn btn-confirm" data-toggle="modal" data-target="#info-modify">탈퇴 신청</button>
               </div>
                
            </div><!-- nav-tabs-custom -->
            <!--//[D] list view -->
        </div>       
        <!-- /.content-wrapper -->

       <?php include("../../pages/tpl/footer.tpl");?>
       
    </div><!-- ./wrapper -->
    
    <!-- Modal : 회원탈퇴 신청 실패 -->
    <div class="modal fade" id="econfirm" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content" style="width:371px">
          <div class="modal-header">
            <h4 class="modal-title">회원탈퇴 신청 실패</h4>
          </div>
          <div class="modal-body">
            Data 서비스 이용 중이기 때문에 탈퇴 신청이 불가능합니다.<br>회원 탈퇴 안내사항을 다시 한번 확인하시거나,<br>머스트노우 고객센터 <em class="blue">00-0000-0000</em>로 문의해주세요.
          </div>
          <div class="modal-footer" style="text-align:center">
            <button type="button" class="btn btn-confirm" data-dismiss="modal">확인</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal : 회원탈퇴를 계속 진행하시겠습니까? -->
    <div class="modal fade" id="info-modify" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">회원탈퇴를 계속 진행하시겠습니까?</h4>
          </div>
          <div class="modal-body">
            회원 탈퇴에 관련된 안내사항을 모두 확인하셨습니까?<br>탈퇴를 진행하시고 나면 복구할 수 없습니다.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-black" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-confirm">확인</button>
          </div>
        </div>
      </div>
    </div>
            
    <!-- Slimscroll -->
    <script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <script>
    $(function () {
        //dropdown menu
        $("._nav-mypage dl:eq(5) dt").addClass("on mn2");
        /* scroll */
        $(window).on("load resize",function(e){
            if($('.scroll > div').height() > 207){
                    $('.scroll').css('padding-right',14);
                    $('.slimScrollRail').show();
                }else{
                    $('.scroll').css('padding-right',0);
                    $('.slimScrollRail').hide();
             }
        });
        $('.scroll').slimScroll({
            size: '6px',
            height: '207px',
            distance: '0',
            alwaysVisible: true,
            railVisible: true,
            color:'#c6cad1',
            railColor: '#f1f1f1',
            opacity: 1,
            railOpacity: 1
        });
    });
    </script>
  </body>
</html>