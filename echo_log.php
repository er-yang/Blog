<?php 
/**
 * 阅读文章页面
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
						<div class="tags box">
							<?php blog_tag(logid); ?>
						</div>
						<div class="info0 box">
							<a class="date" href="#"><?php echo gmdate('Y-n-j', $date); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Pager -->
		<div class="m-pager m-pager-dtl box">
			<?php neighbor_log($neighborLog); ?>
		</div>
		<!-- 内页评论和热度 -->
		<div class="m-cmthot">
			<div class="cmthotc">
				<div class="m-cmt">
					<div class="box">
						<div class="nctitle" style="">
							评论
						</div>
<!-- 多说评论框 start -->
	<div class="ds-thread" data-thread-key="<?php echo $logData['logid'] ; ?>" data-title="<?php echo $log_title; ?>" data-url="<?php echo $log_url; ?>"></div>
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"wwwnmbk"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<!-- 多说公共JS代码 end -->
					</div>
				</div>
			</div>
		</div>
<?php
 include View::getView('footer');
?>