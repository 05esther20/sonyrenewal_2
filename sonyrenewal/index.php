<?php include_once('./_common.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

?>




<?php include_once("./top.php"); ?>
        <section id="banner">
            <div class="inner mx-auto  d-xl-flex justify-content-between">
                <?php include_once("./main/mainSwiper.php"); ?>

                <?php echo latest('rightBanner','mainRightbanner',2, 100); ?>
<!--                 
                <div class="rightBananer d-flex flex-column justify-content-between ">
                            <div class="position-relative mb-3">
                                <div class="position-absolute ps-5 pt-5">
                                        <p class="text-white submtitle"><strong>세계 최경량</strong> 300mm F2.8렌즈 <br>
                                            <strong>SEL300F28GM</strong></p>
                                    <div class="readMorebox mb-5 bg-white">
                                        <p class="mb-1">
                                            <a href="#" class="text-dark">자세히보기</a>
                                        </p>
                                    </div>
                                </div>
                                <img src="/sonyrenewal/img/submain1.png" >
                            </div>
        
                            <div class="position-relative">
                                <div class="position-absolute ps-5 pt-5">
                                        <p class="text-white submtitle">몰입의 <strong>즐거움</strong> <br>
                                            <strong>WH-1000XM5</strong></p>
                                    <div class="readMorebox mb-5 bg-white">
                                        <p class="mb-1">
                                            <a href="#" class="text-dark">자세히보기</a>
                                        </p>
                                    </div>

                                </div>
                                <img src="/sonyrenewal/img/submain2.png" >
                            </div>
                </div> -->
            </div>
        </section>


        <!-- 제품메뉴 -->

        <section class="inner mx-auto" id="product">
            <ul class="d-flex justify-content-between py-4">
                
                
                    <li class="overflow-hidden col video_camera gradient-box mx-2">
                        <a href="#" class="d-block">
                            <strong class="d-block mx-4 mt-5 product_title">VIDEO CAMERA</strong>
                            <span class="d-block mx-4 product_ex">디지털 영상 촬영의 새로운 지평을 연 소니</span>
                            <img src="./img/videoCamera.png" class="d-flex " >
                        </a>
                    </li>
              
                    
                
                    <li class="col gradient-box mx-2 product_camera">
                        <a href="#">
                            <strong class="d-block mx-4 mt-5 product_title">CAMERA</strong>
                            <span class="d-block mx-4 product_ex">눈으로 볼 수 없던 세계로 가는 문</span>
                            <img src="./img/menuCamera.png">
                        </a>
                    </li>
                 


              
                    <li  class="col gradient-box mx-2 product_audio">
                        <a href="#">
                            <strong class="d-block mx-4 mt-5 product_title">AUIDO</strong>
                            <span class="d-block mx-4 product_ex">놀랍도록 사실적이고 몰입적인 사운드</span>
                            <img src="./img/audio.png">
                        </a>
                    </li>
            


             
                    <li  class="col  gradient-box  mx-2 product_ps5">
                        <a href="#">
                            <strong class="d-block mx-4 mt-5 product_title">PlayStation®</strong>
                            <span class="d-block mx-4 product_ex">경계 너머의 새로운 세상을 탐험하다</span>
                            <img src="./img/menuPs5.png">
                        </a>
                    </li>
               
                    <li  class="col  gradient-box  mx-2 product_acc">
                        <a href="#">
                            <strong class="d-block mx-4 mt-5 product_title">ACCESSORY</strong>
                            <span class="d-block mx-4 product_ex">배터리, 자가수리키트, 가방 등</span>
                            <img src="./img/accessory.png" >
                        </a>
                    </li>
               
            </ul>
        </section>


        <!-- ps5 홍보비디오 -->

        <section id="video" class="overflow-hidden">
            <div class="ps5bg">
                <div class="text-center container">
                            
                        <div class="section_title pt-5 pb-2 ">
                           <a href="https://www.playstation.com/ko-kr/ps5/games/?smcid=pdc%3Ako-kr%3Aaccessories%3Aprimary%20nav%3Amsg-games%3Aps5"> 
                                <img src="./img/svg/PS5logo.svg" alt="ps5로고" class="py-1 pb-3"> 
                            </a>
                            
                            <a href="https://www.playstation.com/ko-kr/ps5/games/?smcid=pdc%3Ako-kr%3Aaccessories%3Aprimary%20nav%3Amsg-games%3Aps5">     
                                <p class="text-white pb-3 ps5title">우리의 도착지에 한계란 없습니다. 우리는 모두 탐험가입니다.</p>
                            </a>
                               
                        </div>
                        <div class="video-container position-relative " onclick="playVideo()">
                                    <div class="position-absolute start-0 top-0 w-100 h-100 text-white d-flex flex-column justify-content-center align-items-center">
                                        <img src="./img/svg/playButton.svg" class="playButton"> 
                                    </div>    
                                        
                                    <img src="./img/ps5Video.png" alt="Video Thumbnail" class="thumbnail">
                                        <div class="iframe-container" id="iframeContainer">
                                            <iframe id="youtubeIframe" width="1296" height="550" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        </div>
                        </div>
                </div>
            </div>
            <div class='ps5black py-4'>
                     <div class="container">
                        <div class="swiper mt-5">
                            <div class="swiper-wrapper">                               
                                <div class="swiper-slide text-center">
                                    <a href=""> <img src="/sonyrenewal/img/game1.jpg"> </a>
                                    <a href="" class="text-white mt-3 d-block">
                                        갓 오브 워 라그나로크
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a href=""> <img src="/sonyrenewal/img/game2.jpg"> </a>
                                    <a href="" class="text-white mt-3 d-block">
                                        더 라스트 오브 어스
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a href=""> <img src="/sonyrenewal/img/game3.jpg"> </a>
                                    <a href="" class="text-white mt-3 d-block">
                                        호라이즌 포비든 웨스트
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a href=""> <img src="/sonyrenewal/img/game4.jpg"> </a>
                                    <a href="" class="text-white mt-3 d-block">
                                        데몬즈 소울
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a href=""> <img src="/sonyrenewal/img/game5.jpg"> </a>
                                    <a href="" class="text-white mt-3 d-block">
                                        데스 스트랜딩
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a href=""> <img src="/sonyrenewal/img/game6.jpg"> </a>
                                    <a href="" class="text-white mt-3 d-block">
                                        용과 같이 8
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a href=""> <img src="/sonyrenewal/img/game7.jpg"> </a>
                                    <a href="" class="text-white mt-3 d-block">
                                        Returnal
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a href=""> <img src="/sonyrenewal/img/game8.jpg"> </a>
                                    <a href="" class="text-white mt-3 d-block">
                                        EA SPORTS FC 24  
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a href=""> <img src="/sonyrenewal/img/game9.jpg"> </a>
                                    <a href="" class="text-white mt-3 d-block">
                                        그란 투리스모 7
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a href=""> <img src="/sonyrenewal/img/game10.jpg"> </a>
                                    <a href="" class="text-white mt-3 d-block">
                                        마블 스파이더맨
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a href=""> <img src="/sonyrenewal/img/game11.jpg"> </a>
                                    <a href="" class="text-white mt-3 d-block">
                                        철권 8
                                    </a>
                                </div>                               
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <script>       
                            const videoswiper = new Swiper('#video .swiper', {
                            spaceBetween: 16,
                            loop: true,
                            slidesPerView: "auto",  
                            loopAdditionalSlides : 3,                         

                            autoplay: {
                                    delay: 3000,
                                    disableOnInteraction: false,
                            },

                            // Navigation arrows
                            navigation: {
                                nextEl: '#video .swiper-button-next',
                                prevEl: '#video .swiper-button-prev',
                            },

                            
                            });
                            </script>
                     </div>
            </div>

        </section>

        
        
        <!-- ps5 게임콘솔 -->
        <div class="text-center mt-5 pt-5">
            <p class="mb-5 consoletitle">한번도 경험해보지 못한 플레이™ </p>
            <a href="https://www.playstation.com/ko-kr/accessories/"> <img src="./img/ps5Controller.png" class="controllerimg"> </a>
            <p class="mb-0 mt-5 consoleex">초고속 SSD가 선사하는 빛처럼 빠른 로딩 속도와 햅틱 피드백, 적응형 트리거, 3D오디오가 선사하는 </p>
            <p class="mb-5 consoleex">더욱 심도 있는 몰입감을 경험하면서 환상적인 차세대 PlayStation 게임을 마음껏 즐겨보세요.</p>
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
        
  
            <div class="event inner mx-auto">
                <strong class="d-block mb-4 beforebar ps-1"><span class="eventtitle">Event</span></strong>
                <ul class="row mx-0">
                
                    <li class="text-center col-3">
                        <a href="#"><img src="./img/event1.jpg" alt="" class="img-fluid rounded-4 mb-2"></a>
                        <a href="#"><strong class="d-block eventmaintxt">풀프레임 NO.1</strong></a>
                        <a href="#"><p>1위 고객감사 이벤트. 제품 구매 후 정품 등록하면 특별한 선물 증정!</p></a>
                    </li>

                    <li class="text-center col-3">
                        <a href="#"><img src="./img/event2.jpg" alt=""  class="img-fluid rounded-4 mb-2"></a>
                        <a href="#"><strong class="d-block eventmaintxt">일상을 담아 봄</strong></a>
                        <a href="#"><p>ZV 구매 후 정품등록 및 사은품 신청 시 특별한 선물을 드립니다.</p></a>
                    </li>

                    <li class="text-center col-3">
                        <a href="#"><img src="./img/event3.jpg" alt="" class="img-fluid rounded-4 mb-2"></a>
                        <a href="#"><strong class="d-block eventmaintxt">봄에는 더 가볍게</strong></a>
                        <a href="#"><p>소니APS-C 카메라로, 다시 오지 않을 이 봄을 담아 보세요!</p></a>
                    </li>
                    
                    <li class="text-center col-3">
                        <a href="#"><img src="./img/event4.jpg" alt="" class="img-fluid rounded-4 mb-2"></a>
                        <a href="#"><strong class="d-block eventmaintxt">소니 피크닉을 부탁해!</strong></a>
                        <a href="#"><p>소니가 준비한 피크닉 필수품과 봄소풍을 떠나자!</p></a>
                    </li>
                
                </ul>
            </div> 


        <!-- 소니아카데미 -->

        <div class="academy container ">

            <strong class="d-block mb-4 beforebar"><span class="academymaintitle">SONY Academy</span></strong>
            <ul class="row">
               
                 <li class="text-center col-4">
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


                <li class="text-center col-4 position-relative">
                        <a href="#">
                            <img src="./img/sonyAcademy3.jpg" alt=""  class="img-fluid rounded-4 academy_pic2">
                                <div class="position-absolute start-0 top-0 w-100 h-100 text-white d-flex flex-column justify-content-center align-items-center">
                                    <div class="text-start">
                                        <p class="d-block mb-0">사진실습:[사진실습중급]</p>
                                        <p class="mb-0  phototitle"><strong>흑백 인물 거리 출사</strong></p>
                                    </div>
                                </div>
                        </a>        
                </li>

                <li class="text-center col-4 position-relative">
                        <a href="#"><img src="./img/sonyAcademy4.jpg" alt="" class="img-fluid rounded-4 academy_pic2">
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
            <div class="inner d-flex justify-content-between justify-content-center mx-auto lign-items-center ">
                <div class="text-start d-flex ps-1">
                    <span class="beforebar mt-3"></span>
                    <strong class="d-block mb-4 mb-0 fnqtitle">무엇을 <br> 도와드릴까요? </strong>
                </div>
                
                <ul class="d-flex mt-5">
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

