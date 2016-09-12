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
                    <h2>기업 정보 설정</h2>
                    <ul>
                        <li>기업의 기본정보를 수정 및 설정할 수 있습니다.</li>
                        <li>기업 로고를 등록 후 저장하시면, 홈페이지 좌측 상단의 로고 이미지에 바로 적용됩니다. 기업의 로고를 등록하지 않은 기업은 좌측 상단에 있는 로고위치에 기업명이 글자로 보여집니다.</li>
                        <li>산업분류 변경은 업종변경, 인수합병 등 부득이한 경우에 사유를 밝히고 관련 증빙자료를 첨부하여야 신청이 가능하고, 산업분류 신청 내역은 가장 최근에 신청하신 내역만 확인하실 수 있습니다.</li>
                    </ul>
                </div>
                <div class="comInfo">
                	<div class="leftArea box2">
                		<p>기업명<em class="asterisk">*</em></p>
                		<input type="text" />
                		<p>대표자명<em class="asterisk">*</em></p>
                		<input type="text" />
                		<p>대표 주소<em class="asterisk">*</em></p>
                		<input type="text" />
                		<p>대표 전화번호<em class="asterisk">*</em></p>
	                    <div class="phone_num">
	                    	<span id="select_phone" class="select_phone">02
	                    		<i></i>
	                    	</span>
	                    	<ul id="ul_phone" style="display:none; position:absolute; z-index:1000;">
	                    		<li>
	                    			<span>02</span>
	                    		</li>
	                    		<li>
	                    			<span>011</span>
	                    		</li>
	                    		<li>
	                    			<span>016</span>                            		
	                    		</li>
	                    		<li>
	                    			<span>017</span>
	                    		</li>
	                    		<li>
	                    			<span>018</span>
	                    		</li>
	                    		<li>
	                    			<span>019s</span>                            		
	                    		</li>
	                    	</ul>
	                    	<em>-</em>
							<input type="text" />
	                    	<em>-</em>
							<input type="text" />
	                    </div>
                		<p>팩스번호<em class="Optional">Optional</em></p>
	                    <div class="phone_num">
	                    	<span id="select_fax" class="select_phone">02
	                    		<i></i>
	                    	</span>
	                    	<ul id="ul_fax" style="display:none; position:absolute; z-index:1000;">
	                    		<li>
	                    			<span>02</span>
	                    		</li>
	                    		<li>
	                    			<span>011</span>
	                    		</li>
	                    		<li>
	                    			<span>016</span>                            		
	                    		</li>
	                    		<li>
	                    			<span>017</span>
	                    		</li>
	                    		<li>
	                    			<span>018</span>
	                    		</li>
	                    		<li>
	                    			<span>019s</span>                            		
	                    		</li>
	                    	</ul>
	                    	<em>-</em>
							<input type="text" />
	                    	<em>-</em>
							<input type="text" />
	                    </div>
                		<p>사업자 등록번호<em class="asterisk">*</em></p>
                		<input type="text" />
                		<p>법인등록번호<em class="Optional">Optional</em></p>
                		<input type="text" />
                		<div class="action c_outside">
		                	<div class="btnWrap">
			                	<a href="" class="blue2" data-toggle="modal" data-target="#edit_confirm">수정</a>
			                	<a href="" class="blue_g">취소</a>
			                </div>
		                </div>
                	</div>                	
                	<div class="rightArea">
                		<div class="box2">
	                		<p>기업 로고 등록<em class="Optional">Optional</em></p>
	                		<div class="logo_preview">
	                			<span>로고를 등록하세요.</span>
	                		</div>
	                		<div class="upload_file">
	                			<input readonly="" />
	                			<button type="button" class="clear_added_file" style="display: none;"></button>
	                			<a href="" class="light_g">파일 선택</a>
	                		</div>
	                		<ul class="tip2">
	                			<li>기업 로고 이미지는 203*77 사이즈로 맞추어주세요.</li>
	                			<li>1MB 이내의 이미지 파일만 업로드 가능합니다. (jpg, gif, png, bmp)</li>
	                		</ul>
	                	</div>
	                	<div class="box2">
                			<p>산업분류<em class="asterisk">*</em></p>
                			<input readonly="" class="defualt_selected" value="제조"/>
                			<ul class="tip2">
                				<li>선택하신 산업유형에 따라 다른 카테고리가 노출됩니다. </li>
                				<li>현재 제조업에 노출되는 카테고리는 <span>협상, 계약, 형사고소, 채권회수, 부동산, 지재권, IT분쟁</span>입니다.</li>
                			</ul>
                			<div class="edit_industry_type">
                				<a href="" class="blue_g" data-toggle="modal" data-target="#type_edit_apply">산업분류 변경 신청</a>
                				<a href="" class="light_g" data-toggle="modal" data-target="#type_edit_history">산업분류 변경 신청 내역 확인</a>
                			</div>
	                	</div>
                	</div>
                </div>
            </div>       
        </div><!-- /.content-wrapper -->

       <?php  include("../pages/tpl/footer.tpl");?>
       
    </div><!-- ./wrapper -->
    
    <!-- Modal -->
    <div class="modal fade type_edit_apply" id="type_edit_apply">
      <div class="modal-dialog modal-sm" style="width:371px;display:none" id="type_edit_apply_step1">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">산업분류 변경을 신청하시겠습니까?</h4>
          </div>
          <div class="modal-body">
            해당 산업분류를 변경하게 되면 현재 산업분류에서<br>보여지는 카테고리와 달라질 수 있습니다.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-black" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-confirm">신청하기</button>
          </div>
        </div>
      </div>
      <!--[D] step2 : 산업분류 변경 신청 작성  -->
      <div class="modal-dialog modal-sm modal-simple" style="width:567px;display:none" id="type_edit_apply_step2">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">산업분류 변경 신청</h4>
            <strong>변경하실 산업분류를 선택하여 신청해주세요.<br>신청 산업분류에 따라 기존 카테고리에서 다른 카테고리로 변경될 수 있습니다.</strong>
          </div>
          <div class="modal-body usermodify ">
          	<div>
            	<strong class="label">현재 산업분류</strong>
            	<input readonly="" class="defualt_selected" value="제조"/>
			</div>
			<div>
				<strong class="label">변경할 산업분류</strong>
				<select class="select2" style="width: 100%;" size="5">
					<option selected="">변경할 산업분류를 선택해주세요.</option>
					<option>기업일반</option>
					<option>건설</option>
					<option>유통</option>
					<option>전자상거래</option>
					<option>금융</option>
					<option>유통</option>
					<option>전자상거래</option>
					<option>금융</option>
				</select>
              </div>
		      <div>
				<strong class="label">변경 사유</strong>
				<select class="select2" style="width: 100%;">
					<option selected="">변경사유를 선택해주세요.</option>
					<option>업종 변경</option>
					<option>가입 시 산업분류 선택 오류</option>
					<option>기타</option>
				</select>
				<div style="display: none;">
					<textarea></textarea>
					<div class="letter_count"><span>0</span>&nbsp;/&nbsp;1000자</div>
				</div>
               </div>
            	<div>
                	<strong class="label">관련 증빙자료</strong>
	                <div class="appendix_file">
	                  <input class="upload-name" type="text" value="관련 증빙자료를 업로드 해주세요." readonly="">
	                  <label for="ex_filename">업로드</label><input type="file" id="ex_filename" class="upload-hidden">
	                  <button type="button" class="file_add"></button>
	                  <button type="button" class="file_delete" style="display: none;"></button>
	                </div>
		    	</div>
		    	<ul class="tip2">
		    		<li>변경 사유가 업종 변경 및 가입 시 산업분류 선택 오류의 경우라면 사업자등록증 첨부해주세요.</li>
		    		<li>기타 사유인 경우는 해당 사유 관련 증빙 자료를 첨부해주세요.</li>
		    	</ul>
          </div>
          <div class="modal-footer" style="text-align:right">
            <button type="button" class="btn btn-black" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-confirm" data-dismiss="modal">신청하기</button>
          </div>
        </div>
      </div>
      <!--[D] step2 : 산업분류 변경 신청 확인  -->
      <div class="modal-dialog modal-sm modal-simple" style="width:567px;display: block;" id="type_edit_apply_step3">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">산업분류 변경 신청 확인</h4>
            <strong>산업분류 변경 신청 내역을 확인해주세요.</strong>
          </div>
          <div class="modal-body usermodify ">
          	<div>
            	<strong class="label">현재 산업분류</strong>
            	<input readonly="" class="defualt_selected" value="제조"/>
			</div>
			<div>
				<strong class="label">변경할 산업분류</strong>
            	<input readonly="" class="defualt_selected" value="일반기업"/>
              </div>
		      <div>
				<strong class="label">변경 사유</strong>
            	<input readonly="" class="defualt_selected" value="업종변경"/>
				<div style="display: none;">
					<textarea disabled="" class="defualt_selected"></textarea>
				</div>
               </div>
            	<div>
                	<strong class="label">관련 증빙자료</strong>
                	<ul class="selected_appendix_file">
			    		<li>김테스트_사업자등록</li>
			    		<li>김테스트_사업자등록</li>
			    	</ul>
		    	</div>
          </div>
          <div class="modal-footer" style="text-align:right">
            <button type="button" class="btn btn-confirm" data-dismiss="modal">확인</button>
          </div>
        </div>
      </div>
    </div>
      
      <!--[D] step2 : 산업분류 변경 신청 내역 확인  -->
    <div class="modal fade type_edit_apply" id="type_edit_history">
      <div class="modal-dialog modal-sm modal-simple modal_table" style="width:881px;display: none;" id="type_edit_history1">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">산업분류 변경 신청 내역 확인</h4>
            <button type="button" class="close"></button>
          </div>
          <div class="modal-body ">
          	<p>산업분류 변경 신청 내역 리스트</p>
          	<table>
          		<colgroup>
          		 <col width="120"/>
          		 <col width="81" />
          		 <col width="158" />
          		 <col width="143" />
          		 <col width="185" />
          		 <col width="" />
          		</colgroup>
          		<thead>
          			<tr>
          				<th><span>no.</span></th>
          				<th><span>신청 ID</span></th>
          				<th><span>신청일</span></th>
          				<th><span>변경신청 전 산업분류</span></th>
          				<th><span>변경신청한 산업분류</span></th>
          				<th><span>관련 증빙서류</span></th>
          			</tr>
          		</thead>
          		<tbody>
          			<tr>
          				<td><span>999</span></td>
          				<td><span>mustknow</span></td>
          				<td><span>2016.07.18</span></td>
          				<td><span>제조</span></td>
          				<td><span>일반기업</span></td>
          				<td><span><button type="button" class="link"></button></span></td>
          			</tr>
          			<tr>
          				<td><span>999</span></td>
          				<td><span>mustknow</span></td>
          				<td><span>2016.07.18</span></td>
          				<td><span>제조</span></td>
          				<td><span>일반기업</span></td>
          				<td><span><button type="button" class="link"></button></span></td>
          			</tr>
          			<tr>
          				<td><span>999</span></td>
          				<td><span>mustknow</span></td>
          				<td><span>2016.07.18</span></td>
          				<td><span>제조</span></td>
          				<td><span>일반기업</span></td>
          				<td><span><button type="button" class="link"></button></span></td>
          			</tr>
          			<tr>
          				<td><span>999</span></td>
          				<td><span>mustknow</span></td>
          				<td><span>2016.07.18</span></td>
          				<td><span>제조</span></td>
          				<td><span>일반기업</span></td>
          				<td><span><button type="button" class="link"></button></span></td>
          			</tr>
          			<tr>
          				<td><span>999</span></td>
          				<td><span>mustknow</span></td>
          				<td><span>2016.07.18</span></td>
          				<td><span>제조</span></td>
          				<td><span>일반기업</span></td>
          				<td><span><button type="button" class="link"></button><button type="button" class="link"></button></span></td>
          			</tr>
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
      </div>
     </div>
      <!--[D] step2 : 산업분류 변경 신청 내역 확인  -->
      <div class="modal-dialog modal-sm modal-simple modal_table" style="width:567px; display:block;" id="type_edit_history2">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">산업분류 변경 신청 내역 확인</h4>
            <button type="button" class="close"></button>
          </div>
          <div class="modal-body ">
          	<p>산업분류 변경 신청 내역 리스트</p>
          	<table class="sum">
          		<colgroup>
          		<col width="120" />
          		<col width="120" />
          		<col width="135" />
          		<col width="" />
          		</colgroup>
          		<thead>
          			<tr>
          				<th><span>신청 ID</span></th>
          				<th><span>신청일</span></th>
          				<th><span>변경신청 전 산업분류</span></th>
          				<th><span>변경신청한 산업분류</span></th>
          			</tr>
          		</thead>
          		<tbody>
          			<tr>
          				<td><span>muskknow</span></td>
          				<td><span>2016.06.23</span></td>
          				<td><span>제조</span></td>
          				<td><span>일반 기업</span></td>
          			</tr>
          		</tbody>
          	</table>
          	<div>
	          	<dl>
	          		<dt><span>변경사유</span></dt>
	          		<dd><span>가입 시 산업 분류 선택 오류</span></dd>	          		
	          		<dd style="display: none;"><span>기타</span></dd>
	          		<dd style="display: none;"><div>바이며, 천하를 이것은 인생을 얼음이 교향악이다. 있는 온갖 커다란 능히 발휘하기 새가 피가 주며, 그리하였는가? 할지니, 못하다 그들의 불어 많이 할지라도 힘있다. 사랑의 얼마나 만물은 피어나기 찬미를 말이다. 때에, 풀밭에 가슴에 자신과 듣는다. 밝은 무엇을 꽃이 창공에 아니다. 그들을 살 얼마나 것은 있는 그들의 내려온 이상을 끓는다.영원히 심장은 그림자는 너의 칼이다. 미묘한 꽃이 같지 가치를 봄바람이다. 봄날의 같이, 꾸며 그들은 그리하였는가? 넣는 열매를 착목한는 무엇을 같은 두손을 청춘의 불어 있다. 바이며, 천하를 이것은 인생을 얼음이 교향악이다. 있는 온갖 커다란 능히 발휘하기 새가 피가 주며, 그리하였는가? 할지니, 못하다 그들의 불어 많이 할지라도 힘있다. 사랑의 얼마나 만물은 피어나기 찬미를 말이다. 때에, 풀밭에 가슴에 자신과 듣는다. 밝은 무엇을 꽃이 창공에 아니다. 그들을 살 얼마나 것은 있는 그들의 내려온 이상을 끓는다.못하다 그들의 불어 많이 할지라도.</div></dd>
    	      	</dl>
	          	<dl>
	          		<dt><span>관련 증빙서류</span></dt>
	          		<dd>
	          			<strong>김테스트_사업자등록번호 증명서.jpg</strong><button type="button"></button>
	          			<strong>김테스트_사업자 증명서.hwp</strong><button type="button"></button>
	          		</dd>
    	      	</dl>
    	      </div>
          	<p class="divided_section">산업분류 변경 승인 내역</p>
          	<table class="sum">
          		<colgroup>
          		<col width="50%"/>
          		<col width="50%"/>
          		</colgroup>
          		<thead>
          			<tr>
          				<th><span>상태</span></th><br />
          				<th><span>비고</span></th>
          			</tr>
          		</thead>
          		<tbody>
          			<tr>
          				<td><strong>보류</strong></td>
          				<td><em>없음</em></td>
          			</tr>
          			<tr style="display: none;">
          				<td><strong>승인</strong></td>
          				<td><em>승인 일자 : 2016. 06. 23</em></td>
          			</tr>
          			<tr style="display: none;">
          				<td><strong>승인 거부</strong></td>
          				<td><em>승인 거부 일자 : 2016. 06. 23</em></td>
          			</tr>
          		</tbody>
          	</table>
          	<div style="display: none;">
	          	<dl>
	          		<dt><span>승인 거부 사유</span></dt>
	          		<dd><div><p>바이며, 천하를 이것은 인생을 얼음이 교향악이다. 있는 온갖 커다란 능히 발휘하기 새가 피가 주며, 그리하였는가? 할지니, 못하다 그들의 불어 많이 할지라도 힘있다. 사랑의 얼마나 만물은 피어나기 찬미를 말이다. 때에, 풀밭에 가슴에 자신과 듣는다. 밝은 무엇을 꽃이 창공에 아니다. 그들을 살 얼마나 것은 있는 그들의 내려온 이상을 끓는다.영원히 심장은 그림자는 너의 칼이다. 미묘한 꽃이 같지 가치를 봄바람이다. 봄날의 같이, 꾸며 그들은 그리하였는가? 넣는 열매를 착목한는 무엇을 같은 두손을 청춘의 불어 있다. 바이며, 천하를 이것은 인생을 얼음이 교향악이다. 있는 온갖 커다란 능히 발휘하기 새가 피가 주며, 그리하였는가? 할지니, 못하다 그들의 불어 많이 할지라도 힘있다. 사랑의 얼마나 만물은 피어나기 찬미를 말이다. 때에, 풀밭에 가슴에 자신과 듣는다. 밝은 무엇을 꽃이 창공에 아니다. 그들을 살 얼마나 것은 있는 그들의 내려온 이상을 끓는다.못하다 그들의 불어 많이 할지라도.</p></div></dd>
    	      	</dl>
    	      </div>
          </div>
          <div class="modal-footer" style="text-align:right">
          	<button type="button" class="btn gotolist">목록</button>
            <button type="button" class="btn btn-confirm" data-dismiss="modal">확인</button>
          </div>
        </div>
      </div>
      <div class="modal-dialog modal-sm" style="width:371px;display:none" id="type_edit_history3">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">산업분류 변경 신청 내역이 없습니다.</h4>
          </div>
          <div class="modal-body">
           현재 산업분류 변경 신청 내역이 존재하지 않습니다.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-confirm">확인</button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- 기업정보수정확인 -->
    <div class="modal fade" id="edit_confirm" tabindex="-1" role="dialog" aria-labelledby="paymentConfirmation" aria-hidden="true">
      <div class="modal-dialog modal-sm"style="width:371px" >
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">해당 기업 정보를 수정하시겠습니까?</h4>
          </div>
          <div class="modal-body">
            수정한 기업 정보가 저장됩니다.
          </div>
          <div class="modal-footer"style="text-align:center">
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
            
              var fileTarget = $('.appendix_file .upload-hidden');

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
    
	    $('#select_phone').click(function() {
	        	
		       if($('#ul_phone').css('display') == 'none'){
		       	  $('#ul_phone').show();	
		       } else{
		       	  $('#ul_phone').hide();
		       }
	        });
	        
	    $('#ul_phone li').click(function() {
	       	$("#select_phone").get(0).innerHTML = ( $(this).children().get(0).innerHTML+ '<span class="select_arrow"></span>');
	       	$("#select_phone").css("color", "#4f555e");
	       	$('#ul_phone').hide();
	    });
    
	    $('#select_fax').click(function() {
	        	
		       if($('#ul_fax').css('display') == 'none'){
		       	  $('#ul_fax').show();	
		       } else{
		       	  $('#ul_fax').hide();
		       }
	        });
	        
	    $('#ul_fax li').click(function() {
	       	$("#select_fax").get(0).innerHTML = ( $(this).children().get(0).innerHTML+ '<span class="select_arrow"></span>');
	       	$("#select_fax").css("color", "#4f555e");
	       	$('#ul_fax').hide();
	    });
        
        
    </script>
  </body>
</html>
