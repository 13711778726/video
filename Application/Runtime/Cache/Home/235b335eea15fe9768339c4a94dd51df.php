<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maxmum-scale=1.0,minimum-scale=1.0,user-scalable=no">
<link rel="stylesheet" type="text/css" href="/thinkphp/Public/static/Home/css/wap.css">
<title>移动端</title>
</head>
<body>
<header id="header">
<div class="header-center">
	<nav class="header-link">
		<h2 class="none">网站导航</h2>
		<ul>
			<li><a href="<?php echo U('wap');?>">首页</a></li>
			<li><a href="<?php echo U('news');?>">资讯</a></li>
			<li class="active"><a href="<?php echo U('tour');?>">票务</a></li>
			<li><a href="<?php echo U('comper');?>">关于</a></li>
		</ul>
	</nav>
</div>	
</header>
<div id="headline">
	<img src="/thinkphp/Public/static/Home/img/ban.jpg" />
	<hgroup>
		<h2>速度闪躲实打实</h2>
		<h3>带个单反复旦复大幅度地方地方地方都督府</h3>
	</hgroup>
</div>
<div class="list news">
	<h2>机票预订</h2>
	<form>
		<div class="type">
			<p>航班类型<mark>单程</mark>往返</p>
		</div>
		<div class="left">
			<p>
				<label>出发城市</label>
				<input type="text" />
			</p>
			<p>
				<label>返回城市</label>
				<input type="text" />
			</p>
		</div>
		<div class="right">
			<p>
				<label>出发时间</label>
				<input type="text" />
			</p>
			<p>
				<label>返回时间</label>
				<input type="text" />
			</p>
		</div>
		<div class="but">
			<button>立即订票</button>
		</div>
	</form>	
	<div class="list t_list">
		<h2>最新机票</h2>
		<div class="type">
			<p>热门城市
				<mark>北京</mark>
				<span>深圳</span>
				<span>广州</span>
				<span>上海</span>
				<span>南宁</span>
				<span>南京</span>
				<span>武汉</span>
			</p>
		</div>
		<div class="tab">
			<table>
				<thead>
				<tr>
					<th>路线</th>
					<th>日期</th>
					<th class="min">价格</th>
					<th class="min">餐食</th>
					<th>航班</th>
					<th>预定</th>
				</tr>
				</thead>
				<tbody>
					<tr>
						<td>北京-上海</td>
						<td>2016-7-12</td>
						<td class="min">￥271</td>
						<td class="min">￥34</td>
						<td>T201</td>
						<td><mark>预定</mark></td>
					</tr>
					<tr>
						<td>北京-上海</td>
						<td>2016-7-12</td>
						<td class="min">￥271</td>
						<td class="min">￥34</td>
						<td>T201</td>
						<td><mark>预定</mark></td>
					</tr>
					<tr>
						<td>北京-上海</td>
						<td>2016-7-12</td>
						<td class="min">￥271</td>
						<td class="min">￥34</td>
						<td>T201</td>
						<td><mark>预定</mark></td>
					</tr>
					<tr>
						<td>北京-上海</td>
						<td>2016-7-12</td>
						<td class="min">￥271</td>
						<td class="min">￥34</td>
						<td>T201</td>
						<td><mark>预定</mark></td>
					</tr>
					<tr>
						<td>北京-上海</td>
						<td>2016-7-12</td>
						<td class="min">￥271</td>
						<td class="min">￥34</td>
						<td>T201</td>
						<td><mark>预定</mark></td>
					</tr>
					<tr>
						<td>北京-上海</td>
						<td>2016-7-12</td>
						<td class="min">￥271</td>
						<td class="min">￥34</td>
						<td>T201</td>
						<td><mark>预定</mark></td>
					</tr>
					<tr>
						<td>北京-上海</td>
						<td>2016-7-12</td>
						<td class="min">￥271</td>
						<td class="min">￥34</td>
						<td>T201</td>
						<td><mark>预定</mark></td>
					</tr>
					<tr>
						<td colspan="6"><em>加载更多航班...</em></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<footer id="footer">
	<div class="top">
		客户端 |触屏版|电脑版
	</div>
	<div class="bottom">
		Copyright $YCKU商定是大|沙发打实|说四是
	</div>
</footer>
</body>
</html>