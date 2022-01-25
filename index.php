<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/common.css">
    <title>MEET PLAY SHARE, 메가박스</title>
</head>
<body>
    <header class="main_bg">
        <?php include("./header.php"); ?>
    </header>
    <section id="main">
        <div id="bg">
            <div id="bg_pattern"></div>
            <img src="/img/main/bg_img.jpg" alt="">
        </div>
        <div class="wrap">
            <section id="boxoffice">
                <div id="boxoffice_title">
                    <a href="" title="박스오피스">박스오피스</a>
                    <a href="" title="더 많은 영화보기">더 많은 영화보기</a>
                </div>
                <article id="boxoffice_list">
                    <ul>
                    <?php
                        $con = mysqli_connect("localhost", "user1", "12345", "megabox") or die ("Can't access DB");
                        $query = "SELECT * FROM movie ORDER BY reservation_rate DESC LIMIT 4;";
                        $result = mysqli_query($con, $query);
                        $rank = 1;
                        while($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <li>
                                <div class="boxoffice_poster">
                                    <div class="boxoffice_rank"><?=$rank?></div>
                                    <img src="<?=$row["img_src"]?>" alt="">
                                    <a href="" class="metadata">
                                        <div class="summary"><?=$row["summary"]?></div>
                                        <div class="evaluation">
                                            <p>관람평</p>
                                            <p><?=$row["like_rate"]?></p>
                                        </div>
                                    </a>
                                </div>
                                <div class="btn_util">
                                    <a href="/"><?=$row["like_num"]?></a>
                                    <a href="" title="영화 예매하기">예매</a>
                                </div>
                            </li>
                        <?php $rank++; } ?>
                    </ul>
                </article>
                <ul id="search-link">
                    <li>
                        <form action="" method="post">
                            <input type="text" placeholder="영화명을 입력해 주세요">
                            <button type="submit"></button>
                        </form>
                    </li>
                    <li>
                        <a href="" title="상영시간표 보기">상영시간표</a>
                    </li>
                    <li>
                        <a href="" title="박스오피스 보기">박스오피스</a>
                    </li>
                    <li>
                        <a href="" title="빠른예매 보기">빠른예매</a>
                    </li>
                </ul>
            </section>
            <div id="moving_mouse">
                <img src="/img/main/ico_mouse.png" alt="">
            </div>
        </div>
    </section>
    <section id="benefits">
        <div class="wrap">
            <div class="section_title">
                <h2>혜택</h2>
                <a href=""></a>
            </div>
            <article id="benefits_ad">
                <div id="benefits_slider">
                    <div id="slider_left">
                        <ul id="slider_bottom-to-top">
                            <li><img src="/img/main/slider_btt_1.jpg" alt=""></li>
                            <li><img src="/img/main/slider_btt_2.jpg" alt=""></li>
                            <li><img src="/img/main/slider_btt_3.jpg" alt=""></li>
                            <li><img src="/img/main/slider_btt_4.jpg" alt=""></li>
                            <li><img src="/img/main/slider_btt_5.jpg" alt=""></li>
                            <li><img src="/img/main/slider_btt_6.jpg" alt=""></li>
                        </ul>
                    </div>
                    <div id="slider_right">
                        <ul id="slider_right-to-left">
                            <li><img src="/img/main/slider_rtl_1.jpg" alt=""></li>
                            <li><img src="/img/main/slider_rtl_2.jpg" alt=""></li>
                            <li><img src="/img/main/slider_rtl_3.jpg" alt=""></li>
                            <li><img src="/img/main/slider_rtl_4.jpg" alt=""></li>
                            <li><img src="/img/main/slider_rtl_5.jpg" alt=""></li>
                            <li><img src="/img/main/slider_rtl_6.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div id="benefits_banner">
                    <img src="/img/main/benefits_banner_1.jpg" alt="">
                    <img src="/img/main/benefits_banner_2.jpg" alt="">
                </div>
                <img src="/img/main/benefits_banner_3.jpg" alt="">
            </article>
            <ul id="menu_links">
                <li><a href="" title="VIP LOUNGE 페이지로 이동">VIP LOUNGE</a></li>
                <li><a href="" title="멤버십 페이지로 이동">멤버십</a></li>
                <li><a href="" title="할인카드안내 페이지로 이동">할인카드안내</a></li>
                <li><a href="" title="이벤트 페이지로 이동">이벤트</a></li>
                <li><a href="" title="스토어 페이지로 이동">스토어</a></li>
            </ul>
        </div>
    </section>
    <section id="curation">
        <div class="wrap">
            <div class="section_title">
                <h2>큐레이션</h2>
                <a href="">큐레이션 더보기</a>
            </div>
            <article id="curation_container">
                <div id="curr_curation">
                    <div id="curation_img">
                        <a href=""><img src="/img/main/curation_img.jpg" alt=""></a>
                        <div>
                            <a href="">상세정보</a>
                            <a href="">예매</a>
                        </div>
                    </div>
                    <div id="curation_info">
                        <div id="curation_tag">#클래식소사이어티</div>
                        <div id="curation_title">[오페라] 신데렐라 @The Met</div>
                        <div id="curation_summary">
                            믿고 보는 연출가 로랑 펠리의 천재적인 희극성.<br /></br />
                            강단 있고 개성 넘치는 저음의 신데렐라가 보여주는 매력!!<br/><br />
                            [상영 정보]<br />
                            상영지점 : 센트럴 / 코엑스 / 상암월드컵경기장 / 성수 / 분당 / 킨텍스 / 대전신세계 아트앤사이언스<br />
                            상영일정 : 2022년 4월 5일(화) ~ 5월 14일(토) / 화 19:00, 토 10:00<br />
                            러닝타임 : 111분*인터미션 없음
                        </div>
                    </div>
                </div>
                <ul id="curation_list">
                <?php
                    $list = array("복지식당", "중경삼림", "우연과 상상", "파리의 피아니스트: 후지...");
                    for($i = 0; $i < 4; $i++) {
                        $img_src = $i + 1;
                        echo "<li>";
                            echo "<div>";
                                echo "<a href=''><img src='/img/main/curation_list_{$img_src}.jpg' alt=''></a>";
                            echo "</div>";
                            echo "<p>{$list[$i]}</p>";
                        echo "</li>";
                    }
                ?>
                </ul>
            </article>
        </div>
    </section>
    <section id="information">
        <div class="wrap">
            <div class="section_title">
                <h2>메가박스 안내</h2>
            </div>
            <ul id="info-special_list">
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
            </ul>
        </div>
        <div id="info_notice">
            <div class="wrap">
                <dl>
                    <dt>지점</dt>
                    <dd>
                        <span>[남양주현대아울렛 스페이스원] 영화 관람요금 기준 변경 안내</span>
                        <span>2022.04.28</span>
                    </dd>
                    <a href="" title="전체공지 더보기">더보기</a>
                </dl>
            </div>
        </div>
        <div class="wrap">
            <ul id="info_links">
                <li><a href="">고객센터</a></li>
                <li><a href="">자주 묻는 질문</a></li>
                <li><a href="">1:1 문의</a></li>
                <li><a href="">단체/대관문의</a></li>
                <li><a href="">분실물 문의/접수</a></li>
                <li><a href="">더 부티크 프라이빗 대관예매</a></li>
            </ul>
        </div>
    </section>
    <section id="banner">
        <div class="wrap">
            <img src="/img/main/footer_banner.jpg" alt="">
        </div>
    </section>
    <footer>
        <div class="wrap">
            <?php include("./footer.php"); ?>
        </div>
    </footer>
</body>
</html>