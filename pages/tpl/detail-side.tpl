                <?
                $array = array(
                    array(
                        "section"=>"사례해설 - 협상",
                        "title"=>"상대방의 껄끄러운 질문에 답변하는 법",
                        "date"=>"2016-05-30",
                        "impt"=>"3"
                    ),
                    array(
                        "section"=>"동영상강의 - 채권회수",
                        "title"=>"계약 해제조항 작성시 반드시 알아두어야 할 5가...",
                        "date"=>"2016-05-29",
                        "impt"=>"10"
                    ),
                    array(
                        "section"=>"체크앤팁 - 형사고소",
                        "title"=>"SV들의 컴플라이언스 SV들의 컴플라이언스",
                        "date"=>"2016-05-28",
                        "impt"=>"7"
                    ),
                    array(
                        "section"=>"카드인포 - IT분쟁",
                        "title"=>"임차한 사무실에 위치한 인테리어 비용은 보상 받...",
                        "date"=>"2016-05-27",
                        "impt"=>"7"
                    ),
                    array(
                        "section"=>"칼럼 - 채권회수",
                        "title"=>"상호계약관계에 있는 업 체에 제 3의 업체로부터 계...",
                        "date"=>"2016-05-26",
                        "impt"=>"10"
                    )
                );
            ?>
           <div class="detail-side">
               <h3>관련 콘텐츠</h3>
               <ul class="relatelist">
                  <?                     
                    $count = -1;
                    while(++$count <= 4){
                    ?>
                   <li>
                       <em><? echo $array[$count]['section'] ?></em>
                       <strong><a href=""><? echo $array[$count]['title'] ?></a></strong>
                       <span class="date"><? echo $array[$count]['date'] ?></span>
                       <span class="imp"> | 중요도 <? echo $array[$count]['impt'] ?></span>
                   </li>
                   <? } ?>
               </ul>
           </div>