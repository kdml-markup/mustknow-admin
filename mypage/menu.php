            <div class="box">
               <div class="nav-mypage-bg"></div>
                <div class="box-header">
                    <div class="nav-mypage _nav-mypage">
                       <dl>
                           <dt><a href="../../mypage/myservice">나의 서비스</a></dt>
                           <dd><a href="../../mypage/myservice">서비스 현황 / 이력</a></dd>
                       </dl>
                       <dl>
                           <dt><a href="../../mypage/mydesk/recent.php">나의 데스크</a></dt>
                           <dd><a href="../../mypage/mydesk/recent.php">최근 본 콘텐츠</a></dd>
                           <dd><a href="../../mypage/mydesk/favorites.php">즐겨찾기 콘텐츠</a></dd>
                           <? if (isset($_SESSION['ucorp'])) : ?>
                           <dd><a href="">Q&A</a></dd>
                           <? endif; ?>
                           <dd><a href="../../mypage/mydesk/evaluation.php">Evaluation 결과</a></dd>
                           <dd><a href="../../mypage/mydesk/form.php">Form 보관함</a></dd>
                       </dl>
                       <dl>
                           <dt><a href="../../mypage/notice/notice.php">나의 알림함</a></dt>
                           <dd><a href="../../mypage/notice/notice.php">알림내역</a></dd>
                           <dd><a href="../../mypage/notice/request.php">콘텐츠 요청</a></dd>
                           <dd><a href="../../mypage/notice/request-mail.php">문의메일함</a></dd>
                       </dl>
                       <dl>
                           <dt><a href="">나의 메시지함</a></dt>
                           <dd><a href="">받은 메시지함</a></dd>
                           <dd><a href="">보낸 메시지함</a></dd>
                       </dl>
                       <? if (isset($_SESSION['uuser'])) : ?>
                       <dl>
                           <dt><a href="">나의 결제정보</a></dt>
                           <dd><a href="">서비스 결제하기</a></dd>
                           <dd><a href="">서비스 결제내역</a></dd>
                       </dl>
                       <? endif; ?>
                       <dl>
                           <dt><a href="../../mypage/myinfo/confirm.php">나의 정보</a></dt>
                           <dd><a href="../../mypage/myinfo/confirm.php">회원정보 수정</a></dd>
                           <? if (isset($_SESSION['uuser'])) : ?>
                           <dd><a href="../../mypage/myinfo/withdraw.php">회원 탈퇴</a></dd>
                           <? endif; ?>
                       </dl>
                   </div>
                    <button type="button" class="close" data-widget="collapse" data-original-title="Collapse">메뉴 닫기</button>
                </div>
                <div class="box-body"></div>
              </div>