<header class="main-header">
<!-- Logo -->
    <a href="./index.php" class="logo">
      <img src="/mustknow-admin/dist/img/mustknow_logo.png" class="logo-lg" height="41" alt="mustknow">
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <div class="navbar-menu">
          <ul class="top-menu">
              <li><a href="#" class="enterprise">기업통계</a></li>
              <li><a href="/mustknow-admin/management/data-status.php" class="management">서비스 관리</a></li>
              <li class="on"><a href="#" class="setting">기본환경</a></li>
          </ul>
      </div>
<!--
      <div class="navbar-notice">
          <div class="limit"><em><? echo $uname; ?></em>님의 이용가능한 서비스 기간이 <em>24일</em> 남았습니다. <a href="" class="goto">서비스 신청하기</a></div>
          <div class=""></div>
      </div>
-->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <? if (isset($_SESSION['uid']) || isset($_SESSION['uname'])) : ?>
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="icon-bell"></i>
              <span class="new"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="notice-lnk">
                <h3>총 <strong>999</strong> 개의 알림 메시지가 있습니다</h3>
                <a href="#" class="btn btn-default btn-flat">알림내역 전체 더 보기</a>
              </li>
              <li class="notice-list">
                <h3>알림내역 <strong>999</strong></h3>
                <ul>
                    <li><a href="">[Q&A] Q&A에 답변이 등록되었습니다</a><em>09:48</em></li>
                    <li><a href="">[고객문의] 고객문의에 답변이 등록되었습니다</a><em>2016-01-20</em></li>
                    <li><a href="">[Q&A] Q&A에 답변이 등록되었습니다</a><em>2016-01-20</em></li>
                    <li><a href="">[Q&A] Q&A에 답변이 등록되었습니다</a><em>2016-01-20</em></li>
                    <li><a href="">[고객문의] 고객문의에 답변이 등록되었습니다</a><em>2016-01-12</em></li>
                    <li><a href="">[고객문의] 고객문의에 답변이 등록되었습니다</a><em>2016-01-12</em></li>
                    <li><a href="">[콘텐츠요청] 콘텐츠 요청에 채택 되었습니다</a><em>2016-01-12</em></li>
                    <li><a href="">[Q&A] Q&A에 답변이 등록되었습니다</a><em>2016-01-12</em></li>
                </ul>
              </li>
            </ul>
          </li>
          <? endif ?>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="icon-person"></i>
            </a>
            <? if (isset($_SESSION['uid']) && isset($_SESSION['uname'])) : ?>
               <!--[D] 로그인 -->
               <div class="dropdown-menu">
                    <div class="user-hello">
                        <h3>안녕하세요. <em><? echo $uname; ?></em> 님 환영합니다.</h3>
                        <a href="/mypage/myservice/index.php" class="btn btn-gray">마이페이지</a>
                        <a href="/logout.php" class="btn btn-black">로그아웃</a>
                    </div>
                    <div class="user-status">
                        <h3 class="sb">서비스 이용 현황</h3>
                        <ol class="h_list">
                            <li>이용중인 서비스 <strong>Data 서비스 ( 3개월 )</strong></li>
                            <li>서비스 이용기간 <strong>2016-02-03 ~ 2016-05-03</strong></li>
                            <li>이번 달 사용가능한 Q&A <strong>3개 (2016-03-01 ~ 2016-03-31)</strong></li>
                        </ol>
                    </div>
                    <div class="user-apply">
                        <h3 class="sb">서비스 신청하기</h3> 
                        <p>서비스 기간을 연장하고 싶은신가요?</p>
                        <a href="/login.php" class="btn btn-blue">로그인</a>
                    </div>
                </div>
            <? else: ?>
                <!--[D] 비로그인 -->
                <ul class="dropdown-menu" style="padding: 28px 0;">
                  <li class="user-false">
                    <h3>머스트노우 서비스에 아직 가입하시지 않으셨나요?</h3> 
                    <p>전문 법률 콘텐츠 서비스 이용을 원하신다면, 회원가입을 해주세요.</p>
                    <a href="#" class="btn btn-default btn-flat">가입하기</a>
                  </li>
                  <li class="user-true">
                    <h3>이미 서비스에 가입한 회원이신가요?</h3> 
                    <p>회원가입을 이미 완료한 회원이시라면 로그인을 해주세요.</p>
                    <a href="/login.php" class="btn btn-default btn-flat">로그인</a>
                    <a href="#" class="find">아이디 / 비밀번호를 잃어버리셨나요?</a>
                  </li>
                </ul>
            <? endif ?>
          </li>
          <? if (isset($_SESSION['ucorp'])) : ?>
          <li class="management-menu">
            <a href="#"><i class="icon-gears"></i></a>
          </li>
          <? endif ?>
        </ul>
      </div>
    </nav>
</header>