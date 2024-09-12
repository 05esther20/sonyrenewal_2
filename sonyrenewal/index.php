<?php
   define('_INDEX_', true);
   include_once("./top.php"); 

?>

        <section id="banner">
            <div class="inner mx-auto  d-xxl-flex justify-content-between">
                <?php include_once("./main/mainSwiper.php"); ?>
                <?php echo latest('rightBanner','mainRightbanner',2, 100); ?>
                <!-- 게시판으로 관리 가능하다 - latest 폴더 안에 'rightBanner'-> 스킨이름 'mainRightbanner' -> 게시판이름 -->
            </div>
        </section>


        <!-- 제품메뉴 -->

        <section class="inner mx-auto swiper" id="product">
                <!-- mainproduct_swiper -->
                <?php echo latest('mainpro','mainproduct_swiper',5, 100); ?>           
        </section>

        


        <!-- ps5 홍보비디오 -->

        <section id="video" class="overflow-hidden">
            <div class="ps5bg px-0">
                <div class="text-center container-xl px-0 px-xl-3">
                            
                        <div class="section_title pt-5 pb-2 ">
                           <a href="https://www.playstation.com/ko-kr/ps5/games/?smcid=pdc%3Ako-kr%3Aaccessories%3Aprimary%20nav%3Amsg-games%3Aps5"> 
                                <img src="./img/svg/PS5logo.svg" alt="ps5로고" class="py-1 pb-3"> 
                            </a>                            
                            <a href="https://www.playstation.com/ko-kr/ps5/games/?smcid=pdc%3Ako-kr%3Aaccessories%3Aprimary%20nav%3Amsg-games%3Aps5">     
                                <p class="text-white pb-3 ps5title">우리의 도착지에 한계란 없습니다. 우리는 모두 탐험가입니다.</p>
                            </a>                               
                        </div>
                        <?php echo latest('video','video_management',1, 100); ?> 
                 
                </div>
            </div>
         
            <?php echo latest('mainpro2','ps_swiper',11, 100); ?>      

        </section>

        
        
        <!-- ps5 게임콘솔 -->
        <div class="text-center mt-5 pt-5">
            <p class="mb-5 consoletitle">한번도 경험해보지 못한 플레이™ </p>
            <a href="https://www.playstation.com/ko-kr/accessories/"> <img src="./img/ps5Controller.png" class="controllerimg"> </a>
            <p class="mb-0 mt-5 mb-5 consoleex">초고속 SSD가 선사하는 빛처럼 빠른 로딩 속도와 햅틱 피드백, 적응형 트리거, 3D오디오가 선사하는 <br class='d-none d-sm-block'>
            더욱 심도 있는 몰입감을 경험하면서 환상적인 차세대 PlayStation 게임을 마음껏 즐겨보세요.</p>
        </div>

           <!-- 자세히보기버튼  -->
           
        <section class="cosoleblank">
           <div class="readMorebox mx-auto mb-5">
                <p class="mb-1">
                    <a href="https://www.playstation.com/ko-kr/accessories/dualsense-wireless-controller/" class="text-white ">
                        자세히보기
                    </a>
                </p>
            </div>
        </section>



        <!-- 이벤트 -->
        
  
            <div class="event inner mx-auto swiper">
                <strong class="d-block mb-4 beforebar ps-1"><span class="eventtitle">Event</span></strong>
                
                <?php echo latest('mainpro3', 'event', 4, 100); ?>
            </div> 
            <script>

                </script>


        <!-- 소니아카데미 -->

        <div class="academy container">

            <strong class="d-block mb-4 beforebar"><span class="academymaintitle">SONY Academy</span></strong>
            <ul class="row">
               
                 <li class="text-center col-lg-4 mb-2 mb-lg-0">
                    <ul class="">
                        <li class="position-relative mb-2">
                            <a href="#"><img src="./img/sonyAcademy1.jpg" alt="" class="img-fluid rounded-4  academy_pic1">
                               
                                <div class="position-absolute start-0 top-0 w-100 h-100 text-white d-flex flex-column justify-content-center align-items-center">
                                    <div class="text-start">
                                        <p class="d-block mb-0">사진이론:[사진이론초급]</p>
                                        <p class="mb-0 phototitle"><strong>상황별 카메라 설정 팁</strong></p>
                                    </div>
                                </div>
                            </a>
                        </li>   

                        <li class="position-relative">
                            <a href="#"><img src="./img/sonyAcademy2.jpg" alt="" class="img-fluid rounded-4 academy_pic1">
                                
                                <div class="position-absolute start-0 top-0 w-100 h-100 text-white d-flex flex-column justify-content-center align-items-center">
                                    <div class="text-start">
                                        <p class="d-block mb-0">영상실습:[영상실습중급]</p>
                                        <p class="mb-0 phototitle"><strong>스튜디오 인물 실루엣 영상 촬영</strong></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                    </ul>
                </li>


                <li class="text-center col-lg-4 position-relative mb-2 mb-lg-0">
                        <a href="#">
                            <img src="./img/sonyAcademy3.jpg" alt=""  class="img-fluid rounded-4 academy_pic2 d-none d-lg-block">
                            <img src="./img/sonyAcademy3m.jpg" alt=""  class="img-fluid rounded-4 academy_hidden d-lg-none">
                                <div class="position-absolute start-0 top-0 w-100 h-100 text-white d-flex flex-column justify-content-center align-items-center">
                                    <div class="text-start">
                                        <p class="d-block mb-0">사진실습:[사진실습중급]</p>
                                        <p class="mb-0  phototitle"><strong>흑백 인물 거리 출사</strong></p>
                                    </div>
                                </div>
                        </a>        
                </li>

                <li class="text-center col-lg-4 position-relative">
                        <a href="#"><img src="./img/sonyAcademy4.jpg" alt="" class="img-fluid rounded-4 academy_pic2 d-none d-lg-block">
                        <img src="./img/sonyAcademy4m.jpg" alt=""  class="img-fluid rounded-4 academy_hidden d-lg-none">
                            <div class="position-absolute start-0 top-0 w-100 h-100 text-white d-flex flex-column justify-content-center align-items-center">
                                <div class="text-start">
                                    <p class="d-block mb-0">사진실습:[사진실습고급]</p>
                                    <p class="mb-0 phototitle"><strong>α7C2 STARRY NIGHTS <br>은하수 사진의 정석</strong></p>
                                </div>
                            </div>
                        </a>
                </li>
            
            </ul>
        </div> 


        <!-- 문의사항 -->   
        <section id="fnq"> 
            <div class="inner d-lg-flex justify-content-between justify-content-center mx-auto lign-items-center ">
                <div class="text-start d-flex ps-1">
                    <span class="beforebar mt-3"></span>
                    <strong class="d-block mb-4 mb-0 fnqtitle">무엇을 <br> 도와드릴까요? </strong>
                </div>
                
                <ul class="d-flex mt-5 ">
                        <li class="fnqblank start-0 top-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center">
                           <a href="#"><img src="./img/svg/Faq.svg" alt="공지사항 아이콘" class="noticeicon"></a>
                            <p class="fnqtxt"><strong>FAQ&공지사항</strong></p>
                        </li>
                        <li class="fnqblank start-0 top-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center">
                            <a href="#"><img src="./img/svg/store.svg" alt="매장안내 아이콘" class="shopicon"></a>
                            <p class="fnqtxt"><strong>매장안내</strong></p>
                        </li>
                        <li class="fnqblank start-0 top-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center">
                            <a href="#"><img src="./img/svg/supportagent.svg" alt="고객상담 아이콘" class="coustomericon"></a>
                            <p class="fnqtxt"><strong>고객상담</strong></p>
                        </li>
                        <li class="start-0 top-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center ">
                            <a href="#"><img src="./img/svg/settings.svg" alt="제품지원 아이콘" class="supporticon"></a>
                            <p class="fnqtxt"><strong>제품지원</strong></p>
                        </li>
                </ul>
            </div>
        </section>
 
 <?php include_once("./bottom.php"); ?>       
 </div>

