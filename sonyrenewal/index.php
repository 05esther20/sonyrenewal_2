<?php include_once("./top.php"); ?>
        <section id="banner">
            <div class="inner mx-auto  d-flex justify-content-between">
                <div class="swiper br20 col me-3 d-flex flex-column justify-content-start align-items-start ps-5 pt-5">
                           <div class="text-white mt-5">
                            <img src="./img/sonyAlphalogo.png" >                               
                            <p class="title_big mt-3 mb-3">THE <strong>POWER</strong> OF <strong>ONE FRAME</strong></p>
                            <p>새로운 세계를 보는시야<br>
                                세계 최초 풀프레임 글로벌 셔터 카메라</p>
                            </div>
                                <div class="readMorebox mb-5 bg-white">
                                    <p class="mb-1">
                                        <a href="#" class="text-dark">자세히보기</a>
                                    </p>
                                </div>                          
                </div>
                <div class="rightBananer d-flex flex-column justify-content-between ">
                    <div class="position-relative mb-3">
                        <div class="position-absolute ps-5 pt-5">
                                <p class="text-white"><strong>세계 최경량</strong> 300mm F2.8렌즈 <br>
                                    <strong>SEL300F28GM</strong></p>
                            <div class="readMorebox mb-5 bg-white">
                                <p class="mb-1">
                                    <a href="#" class="text-dark">자세히보기</a>
                                </p>
                            </div>
                        </div>
                        <img src="./img/submain1.png" >
                    </div>
 
                    <div class="position-relative">
                        <div class="position-absolute ps-5 pt-5">
                                <p class="text-white">몰입의 <strong>즐거움</strong> <br>
                                    <strong>WH-1000XM5</strong></p>
                            <div class="readMorebox mb-5 bg-white">
                                <p class="mb-1">
                                    <a href="#" class="text-dark">자세히보기</a>
                                </p>
                            </div>

                        </div>
                        <img src="./img/submain2.png" >
                    </div>
                </div>

            </div>
        </section>


        <!-- 제품메뉴 -->

        <section class="inner mx-auto" id="product">
            <ul class="d-flex justify-content-between py-4">
                
                
                    <li class="overflow-hidden col video_camera gradient-box mx-2">
                        <a href="#" class="d-block">
                            <strong class="d-block mx-4 mt-5 product_title">VIDEO CAMERA</strong>
                            <span class="d-block mx-4 product_ex">디지털 영상 쵤영의 새로운 지평을 연 소니</span>
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

        <section id="video">
            <div class="ps5bg ">
                <div class="text-center container">
                            
                        <div class="section_title pt-5 pb-2 ">
                            <img src="./img/svg/PS5logo.svg" alt="ps5로고" class="py-1 pb-3">
                                <p class="text-white pb-3">우리의 도착지에 한계란 없습니다. 우리는 모두 탐험가입니다.</p>
                               
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
        </section>

        
        
        <!-- ps5 게임콘솔 -->
        <div class="text-center mt-5 pt-5">
            <p class="mb-5">한번도 경험해보지 못한 플레이™ </p>
            <img src="./img/ps5Controller.png">
            <p class="mb-0 mt-5">초고속 SSD가 선사하는 빛처럼 빠른 로딩 속도와 햅틱 피드백, 적응형 트리거, 3D오디오가 선사하는 </p>
            <p class="mb-5">더욱 심도 있는 몰입감을 경험하면서 환상적인 차세대 PlayStation 게임을 마음껏 즐겨보세요.</p>
        </div>

           <!-- 자세히보기버튼  -->
           <div class="readMorebox mx-auto mb-5">
            <p class="mb-1">
                <a href="#" class="text-white">자세히보기</a>
            </p>
        </div>



        <!-- 이벤트 -->
        
        
        <div class="event inner mx-auto mb-5">
            <strong class="d-block mb-4 beforebar">Event</strong>
            <ul class="row mx-0">
               
                <li class="text-center col-3">
                    <a href="#"><img src="./img/event1.jpg" alt="" class="img-fluid rounded-4 mb-2"></a>
                        <strong class="d-block">풀프레임 NO.1</strong>
                        <p>1위 고객감사 이벤트. 제품 구매 후 정품 등록하면 특별한 선물 증정!</p>
                </li>

                <li class="text-center col-3">
                    <a href="#"><img src="./img/event2.jpg" alt=""  class="img-fluid rounded-4 mb-2"></a>
                        <strong class="d-block">일상을 담아 봄</strong>
                        <p>ZV 구매 후 정품등록 및 사은품 신청 시 특별한 선물을 드립니다.</p>
                </li>

                <li class="text-center col-3">
                    <a href="#"><img src="./img/event3.jpg" alt="" class="img-fluid rounded-4 mb-2"></a>
                        <strong class="d-block">봄에는 더 가볍게</strong>
                        <p>소니APS-C 카메라로, 다시 오지 않을 이 봄을 담아 보세요!</p>
                </li>
                
                <li class="text-center col-3">
                    <a href="#"><img src="./img/event4.jpg" alt="" class="img-fluid rounded-4 mb-2"></a>
                        <strong class="d-block">소니 피크닉을 부탁해!</strong>
                        <p>소니가 준비한 피크닉 필수품과 봄소풍을 떠나자!</p>
                </li>
            
            </ul>
        </div> 
        

        <!-- 소니아카데미 -->

        <div class="academy container mb-5">
            <strong class="d-block mb-4 beforebar">SONY Academy</strong>
            <ul class="row">
               
                 <li class="text-center col-4">
                    <ul class="">
                        <li class="position-relative mb-2">
                            <a href="#"><img src="./img/sonyAcademy1.jpg" alt="" class="img-fluid rounded-4  academy_pic1">
                               
                                <div class="position-absolute start-0 top-0 w-100 h-100 text-white d-flex flex-column justify-content-center align-items-center">
                                    <div class="text-start">
                                        <strong class="d-block">사진이론:[사진이론초급]</strong>
                                        <p class="mb-0">상황별 카메라 설정 팁</p>
                                    </div>
                                </div>
                            </a>
                        </li>   

                        <li class="position-relative">
                            <a href="#"><img src="./img/sonyAcademy2.jpg" alt="" class="img-fluid rounded-4 academy_pic1">
                                
                                <div class="position-absolute start-0 top-0 w-100 h-100 text-white d-flex flex-column justify-content-center align-items-center">
                                    <div class="text-start">
                                        <strong class="d-block">사진실습:[사진실습중급]</strong>
                                        <p class="mb-0">스튜디오 인물 실루엣 촬영</p>
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
                                        <strong class="d-block">사진실습:[사진실습중급]</strong>
                                        <p class="mb-0">흑백 인물 거리 출사</p>
                                    </div>
                                </div>
                        </a>        
                </li>

                <li class="text-center col-4 position-relative">
                        <a href="#"><img src="./img/sonyAcademy4.jpg" alt="" class="img-fluid rounded-4 academy_pic2">
                            <div class="position-absolute start-0 top-0 w-100 h-100 text-white d-flex flex-column justify-content-center align-items-center">
                                <div class="text-start">
                                    <strong class="d-block">사진실습:[사진실습고급]</strong>
                                    <p class="mb-0">α7C2 STARRY NIGHTS <br>
                                    은하수 사진의 정석
                                    </p>
                                </div>
                            </div>
                        </a>
                </li>
            
            </ul>
        </div> 


        <!-- 문의사항 -->   
        <section id="fnq"> 
            <div class="inner d-flex justify-content-between justify-content-center mx-auto lign-items-center ">
                <div class="text-start d-flex">
                    <span class="beforebar"></span>
                    <strong class="d-block mb-4 mb-0 ">무엇을 <br> 도와드릴까요? </strong>
                </div>
                
                <ul class="d-flex">
                        <li class="start-0 top-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center me-5">
                           <a href="#"><img src="./img/svg/Faq.svg" alt="공지사항 아이콘" class="fnpicon"></a>
                            <p class="fnqtxt">FAQ&공지사항</p>
                        </li>
                        <li class="start-0 top-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center me-5">
                            <a href="#"><img src="./img/svg/store.svg" alt="매장안내 아이콘" class="fnpicon"></a>
                            <p class="fnqtxt">매장안내</p>
                        </li>
                        <li class="start-0 top-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center me-5">
                            <a href="#"><img src="./img/svg/supportagent.svg" alt="고객상담 아이콘" class="fnpicon"></a>
                            <p class="fnqtxt">고객상담</p>
                        </li>
                        <li class="start-0 top-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center ">
                            <a href="#"><img src="./img/svg/settings.svg" alt="제품지원 아이콘" class="fnpicon"></a>
                            <p class="fnqtxt">제품지원</p>
                        </li>
                    </ul>
            </div>
        </section>   
 <?php include_once("./bottom.php"); ?>       


