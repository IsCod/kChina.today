<div class="home_inner_right">
		<?php if(!$this->uid) :?>
		<div class="kc_login">
			<span>kc是一个分享图书，旅行，爱情的社区，所谓读万卷书，不如行万里路。读书与旅行是人生不可缺失的部分。</span>
			<div class="kc_login_other">
				<div class="kc_login_weix">使用微信登陆</div>
				<div class="kc_login_web">使用微博登陆</div>
			</div>
		</div>
		<?php endif; ?>

	<div class="home_focus">
		<a href="/people/<?php echo ($user_info['user_login']) ? $user_info['user_login'] : $user_login['uid']?>/on_focus">关注者<span class="focus_num"><?php echo (is_array($user_follwers)) ? count($user_follwers) : 0 ; ?></span>人</a>
		<a href="/people/<?php echo ($user_info['user_login']) ? $user_info['user_login'] : $user_login['uid']?>/be_focus">被关注<span class="focus_num"><?php echo (is_array($user_follwing)) ? count($user_follwing) : 0;?>人</span></a>
	</div>
	<div class="home_focus_book focus_inner">推荐了<span class="focus_num">10</span>本书</div>
	<div class="home_focus_shoot focus_inner">推荐了<span class="focus_num">10</span>旅行</div>
	<div class="focus_kc">
		<div onclick="focus_kc_weibo()">@kchina</div>
		<div onclick="focus_kc()">关注kc</div>
	</div>
</div>