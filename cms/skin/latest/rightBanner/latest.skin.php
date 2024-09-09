<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 210;
$thumb_height = 150;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


<div class="rightBananer d-none  d-xxl-flex flex-xxl-column justify-content-between mt-4 mt-xxl-0 ">


<?php
    for ($i=0; $i<$list_count; $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['ori'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="rightthumbimg">';
    $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    ?>
                            <div class="position-relative rightBannerlist<?php echo $i; ?> col <?php if($i === 0) echo 'me-3 me-xl-0'; ?>">
                                <div class="position-absolute ps-5 pt-5">
                                        <!-- <p class="text-white submtitle"><strong>세계 최경량</strong> 300mm F2.8렌즈 <br>
                                            <strong>SEL300F28GM</strong></p> -->
                                    <?php echo $list[$i]['wr_content']; ?>       
                                    <div class="readMorebox mb-5 bg-white">
                                        <p class="mb-1">
                                            <a href="<?php echo $list[$i]['wr_link1']; ?>" class="text-dark">자세히보기</a>
                                        </p>
                                    </div>
                                </div>
                               <?php echo  $img_content; ?>
                            </div>
        
                            <!-- <div class="position-relative">
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
                            </div> -->



          
   
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
   게시물이 없습니다.
    <?php }  ?>
  
 

</div>
