<?php 
/**
 * 自建页面模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div class="g-bd">
	<div class="g-bdc box">
		<div class="m-postdtl">
			<div class="m-post m-post-txt m-post-leftimg ">
				<div class="postinner">
					<div class="ct">
						<div class="ctc box">
							<h2 class="ttl"><?php echo $log_title; ?></h2>
							<div class="txtcont">
							<?php echo $log_content; ?>
							</div>
						</div>
					</div>
					<div class="info box">
						<div class="info0 box">
							<a class="date" href="#"><?php echo gmdate('Y-n-j', $date); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
 include View::getView('footer');
?>