
<?php 
include_once('./_common.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
// 팝업, 상단연동, 메인 최근게시연동

?>

<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" href="http://esthersony.dothome.co.kr/sonyrenewal/img/favicon.ico">
    <link rel="shortcut icon" href="http://esthersony.dothome.co.kr/sonyrenewal/img/favicon.ico">
    <title>고객은 가능성을 보고 소니는 솔루션을 상상합니다 - SONY</title>

    <!-- seo -->
    <meta name="description" content="" /> 
    <meta property="og:locale" content="ko_KR" /> 
    <meta property="og:site_name" content="" /> 
    <meta property="og:url" content=""/> 
    <meta property="og:type" content="website" /> 
    <meta property="og:titlte" content="" /> 
    <meta property="og:description" content="" /> 
    <meta property="og:image" content="http://esthersony.dothome.co.kr/sonyrenewal/img/sonySeo.jpg">

    <!-- 파비콘 바로가기 -->
    <link rel="shortcut icon" type="image/x-icon" href="" />
    <link rel="apple-touch-icon" href="" />
    <link rel="apple-touch-icon-precomposed" href="">
    <meta name="msapplication-TileImage" content="" size="270x270" />

    <!-- 텍스트 폰트 -->
    <link rel="preconnect" href="//fonts.googleapis.com">
    <link rel="preconnect" href="//fonts.gstatic.com" crossorigin>
    <link href="//fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/sonyrenewal/css/fonts.css">
                                        
    <!-- font icon -->
    <link rel="stylesheet" href="/sonyrenewal/lib/bootstrap/bootstrap-icons.min.css">

    <!-- 초기화 -->
    <link href="//cdn.jsdelivr.net/npm/reset-css@5.0.2/reset.min.css" rel="stylesheet">
    <!-- 그리드 시스템 -->
    <link href="/sonyrenewal/lib/bootstrap/bootstrap.min.css" rel="stylesheet" >
    <script src='/sonyrenewal/lib/bootstrap/bootstrap.bundle.js'></script>
    
    <!-- 플러그인 -->
    <link rel="stylesheet" href="/sonyrenewal/lib/swiper/swiper-bundle.min.css"/>
    <script src="/sonyrenewal/lib/swiper/swiper-bundle.min.js"></script>

    <link href="/sonyrenewal/lib/aos/aos.css" rel="stylesheet">
    <script src="/sonyrenewal/lib/aos/aos.js"></script>

    <!-- 커스터마이징 -->
    <link rel="stylesheet" href="/sonyrenewal/css/common.min.css">
    <link rel="stylesheet" href="/sonyrenewal/css/est.min.css">

    <link rel="stylesheet" href="/sonyrenewal/css/rwd.min.css">
</head>
<body>
   <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>

    <!-- 헤더 -->
        <header id="hd" class="position-relative zup bg-white  "> 
            <div class="inner py-4 navbar navbar-expand-lg align-items-center justify-content-between mx-auto">
                <h1 class="mainlogo order-2 order-lg-1"><a href="/sonyrenewal" class="d-block"><img src="/sonyrenewal/img/svg/sonyMainlogo.svg" alt="" class="d-block"></a></h1>
               
                <button class="navbar-toggler order-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- ul.gnb>li*5>a{대메뉴$} -->
                <div class="collapse navbar-collapse order-lg-2" id="navbarSupportedContent">

                <ul class="gnb ps-0 mb-0 mx-auto d-lg-flex  mt-2">   

               
                               
                <?php
				$menu_datas = get_menu_db(0, true);
				$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                $i = 0;
                foreach( $menu_datas as $row ){
                    if( empty($row) ) continue;
                    $add_class = (isset($row['sub']) && $row['sub']) ? 'gnb_al_li_plus' : '';
                ?>
                <li class="px-5 position-relative d1">
                    <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_d1_a pb-3 d-block"><?php echo $row['me_name'] ?></a>
                    <?php
                    $k = 0;
                    foreach( (array) $row['sub'] as $row2 ){

                        if( empty($row2) ) continue; 

                        if($k == 0)
                            echo '<ul class="position-absolute border p-4 bg-white mt-0">'.PHP_EOL;
                    ?>
                        <li ><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" ><?php echo $row2['me_name'] ?></a></li>
                    <?php
                    $k++;
                    }   //end foreach $row2

                    if($k > 0)
                        echo '</ul>'.PHP_EOL;
                    ?>
                </li>
                <?php
                $i++;
                }   //end foreach $row

                if ($i == 0) {  ?>
                    <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                <?php } ?>
            </ul>
                    <!-- <ul class="gnb ps-0 mb-0 mx-auto d-lg-flex  mt-2">
                        <li class="px-5 position-relative d1">
                            <a href="#none" class="gnb_d1_a pb-3 d-block">스토어추천제품</a>
                            <ul class="position-absolute border p-4 bg-white mt-0">
                                <li><a href="/cms/bbs/board.php?bo_table=store&sca=추천제품" class=" ">추천제품</a></li>
                                <li><a href="/cms/bbs/board.php?bo_table=store&sca=선물제안" class=" ">선물제안</a></li>
                                <li><a href="/cms/bbs/board.php?bo_table=store&sca=교육할인" class="">교육할인</a></li>
                            </ul>
                        </li>
                        <li class="px-5 position-relative d1">
                                <a href="#none" class="gnb_d1_a pb-3 d-block">제품</a>
                                <ul class="position-absolute border p-4 bg-white mt-0">
                                    <li><a href="/cms/bbs/board.php?bo_table=gallery&sca=카메라" class="">카메라</a></li>
                                    <li><a href="/cms/bbs/board.php?bo_table=gallery&sca=비디오카메라" class="">비디오 카메라</a></li>
                                    <li><a href="/cms/bbs/board.php?bo_table=gallery&sca=오디오" class="">오디오</a></li>
                                    <li><a href="/cms/bbs/board.php?bo_table=gallery&sca=악세사리" class="">액세서리</a></li>
                                </ul>
                        </li>
                        <li class="px-5 position-relative d1">
                                    <a href="#none" class="gnb_d1_a pb-3 d-block">기획전</a>
                                    <ul class="position-absolute border p-4 bg-white mt-0">
                                        <li><a href="/cms/bbs/board.php?bo_table=promotion&sca=%EC%86%8C%EB%8B%88%EC%8A%A4%ED%86%A0%EC%96%B4+%EB%8B%A8%EB%8F%85" class=" ">소니스토어 단독</a></li>
                                        <li><a href="/cms/bbs/board.php?bo_table=promotion&sca=혜택존" class=" ">혜택존</a></li>
                                        <li><a href="/cms/bbs/board.php?bo_table=promotion&sca=예약판매" class=" ">예약판매</a></li>
                                        <li><a href="/cms/bbs/board.php?bo_table=promotion&sca=정품등록이벤트" class=" ">정품등록이벤트</a></li>
                                        <li><a href="/cms/bbs/board.php?bo_table=promotion&sca=LIVE+ON" class=" ">LIVE ON</a></li>
                                    </ul>
                                </li>
                        
                                    <li class="px-5 position-relative d1">
                                        <a href="#none" class="gnb_d1_a pb-3 d-block">멤버십</a>
                                        <ul class="position-absolute border p-0 bg-white mt-0">
                                            <li><a href="" class="">등급&혜택안내</a></li>
                                        </ul>
                                    </li>

                                    <li class="px-5 position-relative d1 ">
                                        <a href="#none" class="gnb_d1_a pb-3 d-block">고객서비스</a>
                                        <ul class="position-absolute border p-4 bg-white mt-0">
                                            <li><a href="/cms/bbs/board.php?bo_table=free" class=" ">FAQ&공지사항</a></li>
                                            <li><a href="/cms/bbs/board.php?bo_table=support" class=" ">정품등록 안내</a></li>
                                            <li><a href="/cms/bbs/board.php?bo_table=product" class=" ">제품지원</a></li>
                                            <li><a href="/cms/bbs/board.php?bo_table=qna" class=" ">구매 상담</a></li>
                                            <li><a href="/cms/bbs/board.php?bo_table=information" class=" ">직영점 안내</a></li>
                                            <li><a href="/cms/bbs/board.php?bo_table=movie" class=" ">동영상 강좌</a></li>
                                        </ul>
                                    </li>

                    </ul>                    -->
                </div>

                <ul class="iconMenu  mt-0 d-flex order-3">
                        <li class="searchicon d-none d-lg-block"><i class="ms-3"><img src="/sonyrenewal/img/svg/search.svg" alt=""></i><span class="sr_only">검색</span></li>
                        <li class="mypageicon position-relative">
                            <a href="#none"><i class="ms-3"><img src="/sonyrenewal/img/svg/person.svg" alt=""></i><span class="sr_only">마이페이지</span></a>
                            <div class='position-absolute top-100 start-0' id="loginbox">

                                <ul class='mt-0 bg-white'>
                                <?php if ($is_member) {  ?>
                                    <li><span class="Personal_line">환영합니다.</span></li>
                                        <li class="personal_mt"><a href="<?php echo G5_BBS_URL ?>/logout.php?url=/sonyrenewal " class="Personal_info">로그아웃<a></li>
                                        <li><a href="#none" class="Personal_info">정보수정</a></li>
                                    <?php } else {  ?>
                                    <li><a href="<?php echo G5_BBS_URL ?>/login.php?url=/sonyrenewal"  class="Personal_info">로그인</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/register.php?url=/sonyrenewal" class="Personal_info">회원가입</a></li>
                                <?php } ?>
                                </ul>
                            </div>
                        </li>
                    <li class="carticon  d-none d-lg-block"><i class="ms-3"><img src="/sonyrenewal/img/svg/shoppingbag.svg" alt=""></i><span class="sr_only">장바구니</span></li>
                </ul>
            </div>
        </header>
        <script>
          function toggleShowClass() {
          
                const innerDivElement = document.querySelector('.mypageicon div');
                
                innerDivElement.classList.toggle('d-block');
          }

          document.querySelector('.mypageicon a').addEventListener('click', toggleShowClass);

          const gnblias = document.querySelectorAll('.gnb_d1_a');

          

          gnblias.forEach((element, idx) => {
            
            // Example: Adding a click event listener
            element.addEventListener('click', function(){
               //for문으로 처리
             
            gnblias.forEach(el => el.classList.remove('on'));
            this.classList.add('on');
            console.log(this);

            });
        });

        </script>
        <div class="<?php echo $bo_table ? 'inner mx-auto minheight' : ''; ?>">