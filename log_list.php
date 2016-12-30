<?php 
/**
 * 站点首页模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<?php doAction('index_loglist_top'); ?>
	<div class="g-bd">
		<div class="g-bdc box">	
			<div class="m-postlst">
<?php 
if (!empty($logs)):
foreach($logs as $value): 
?>
<?php
	if(pic_thumb_excerpt($value['excerpt'])){
		$imgsrc = pic_thumb_excerpt($value['excerpt']);
	}elseif(pic_thumb1($value['content'])){
		$imgsrc = pic_thumb1($value['content']);
	}else{
		$imgsrc = "no";
	}
?>
			<div class="m-post  m-post-txt m-post-leftimg  ">
					<div class="postinner">
						<div class="ct">
							<div class="ctc box">
								<h2 class="ttl"><a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a></h2>
								<?php if($imgsrc !== "no"):?>
								<!-- 有缩略图时 -->
								<a class="img thumbnail" href="<?php echo $value['log_url']; ?>"><img src="<?php echo $imgsrc; ?>"/></a>
								<?php endif;?>
								<div class="txtcont">
									<p><?php echo $value['log_description']; ?></p> 
<p><br /></p>	
								</div>
							</div>
						</div>
						<div class="info box">
							<div class="tags box">
								<?php blog_tag($value['logid']); ?>
							</div>
							<div class="info0 box">
								<a class="date" href="<?php echo $value['log_url']; ?>"><?php echo gmdate('Y-n-j', $value['date']); ?></a>
							</div>
						</div>
					</div>
				</div>
<?php 
endforeach;
else:
?>
	<h2>未找到</h2>
	<p>抱歉，没有符合您查询条件的结果。</p>
<?php endif;?>

<div id="pagenavi">
	<?php echo $page_url;?>
</div>

<?php
 include View::getView('footer');
?>