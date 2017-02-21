<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="/thinkphp/Public/static/Home/css/basic.css">
<link rel="stylesheet" type="text/css" href="/thinkphp/Public/static/Home/css/information.css">
<title>Insert title here</title>
</head>
<body>
<header id="header">
<div class="header-center">
	<h1 class="header-logo">瓢城旅行社</h1>
	<nav class="header-link">
		<h2 class="none">网站导航</h2>
		<ul>
			<li><a href="<?php echo U('one');?>">首页</a></li>
			<li><a href="<?php echo U('information');?>">旅行资讯</a></li>
			<li class="active"><a href="<?php echo U('pay');?>">机票订购</a></li>
			<li><a href="<?php echo U('sec');?>">风景欣赏</a></li>
			<li><a href="<?php echo U('about');?>">公司简介</a></li>
		</ul>
	</nav>
</div>	
</header>
<div id="headline">
	<div class="center">
		<hgroup>
			<h2>啊沙发上</h2>
			<h3>阿萨斯阿萨斯，案发时奥斯达，安达市阿萨啊沙发上飒飒</h3>
		</hgroup>
	</div>
</div>
<div id="container">
	<aside class="sidebar">
		<div class="sidebox recommend">
			<h2>旅游景点</h2>
			<div class="tag">
				<ul>
					<li><a href="#">送达方</a></li>
					<li><a href="#">送达方</a></li>
					<li><a href="#">送达方</a></li>
					<li><a href="#">送达方</a></li>
					<li><a href="#">送达方</a></li>
					<li><a href="#">送达方</a></li>
				</ul>
			</div>
		</div>
		<div class="sidebox hot">
			<h2>经典介绍</h2>
			<div class="figure">
				<figure>
					<img src="/thinkphp/Public/static/Home/img/bbb.jpg" width="150" height="120"/>
					<figcaption>双方商定法术丹</figcaption>
				</figure>
				<figure>
					<img src="/thinkphp/Public/static/Home/img/bbb.jpg" width="150" height="120" />
					<figcaption>双方商定法术丹</figcaption>
				</figure>
				<figure>
					<img src="/thinkphp/Public/static/Home/img/bbb.jpg" width="150" height="120"/>
					<figcaption>双方商定法术丹</figcaption>
				</figure>
				<figure>
					<img src="/thinkphp/Public/static/Home/img/bbb.jpg" width="150" height="120" />
					<figcaption>双方商定法术丹</figcaption>
				</figure>
				<figure>
					<img src="/thinkphp/Public/static/Home/img/bbb.jpg" width="150" height="120"/>
					<figcaption>双方商定法术丹</figcaption>
				</figure>
				<figure>
					<img src="/thinkphp/Public/static/Home/img/bbb.jpg" width="150" height="120" />
					<figcaption>双方商定法术丹</figcaption>
				</figure>
			</div>
		</div>
		<div class="sidebox trea">
			<h2>旅游宝箱</h2>
			<div class="box">
				<a href="#">火车票查询</a>
				<a href="#">地铁线路查询</a>
				<a href="#">酒店查询</a>
				<a href="#">美食街</a>
			</div>
		</div>
	</aside>
	<div class="list pay">
	<form>
		<h2>最新航班</h2>
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
		<p>
			<button>立即订票</button>
		</p>	
		</div>
	</form>	
	</div>
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
					<th>价格</th>
					<th>餐食</th>
					<th>航班</th>
					<th>预定</th>
				</tr>
				</thead>
				<tbody>
					<tr>
						<td>北京-上海</td>
						<td>2016-7-12</td>
						<td>￥271</td>
						<td>￥34</td>
						<td>T201</td>
						<td><mark>预定</mark></td>
					</tr>
					<tr>
						<td>北京-上海</td>
						<td>2016-7-12</td>
						<td>￥271</td>
						<td>￥34</td>
						<td>T201</td>
						<td><mark>预定</mark></td>
					</tr>
					<tr>
						<td>北京-上海</td>
						<td>2016-7-12</td>
						<td>￥271</td>
						<td>￥34</td>
						<td>T201</td>
						<td><mark>预定</mark></td>
					</tr>
					<tr>
						<td>北京-上海</td>
						<td>2016-7-12</td>
						<td>￥271</td>
						<td>￥34</td>
						<td>T201</td>
						<td><mark>预定</mark></td>
					</tr>
					<tr>
						<td>北京-上海</td>
						<td>2016-7-12</td>
						<td>￥271</td>
						<td>￥34</td>
						<td>T201</td>
						<td><mark>预定</mark></td>
					</tr>
					<tr>
						<td>北京-上海</td>
						<td>2016-7-12</td>
						<td>￥271</td>
						<td>￥34</td>
						<td>T201</td>
						<td><mark>预定</mark></td>
					</tr>
					<tr>
						<td>北京-上海</td>
						<td>2016-7-12</td>
						<td>￥271</td>
						<td>￥34</td>
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
		<div class="block left">
			<h2>速度闪躲撒旦发生的</h2>
			<hr></hr>
			<ul>
				<li>是否是多受到损失</li>
				<li>是否史蒂芬森颠三倒四</li>
				<li>是否双方商定</li>
				<li>是否是多数是当时的</li>
				<li>是否是多数是当时的</li>
			</ul>
		</div>
		<div class="block center">
			<h2>速度闪躲撒旦发生的</h2>
			<hr></hr>
			<ul>
				<li>是否是多受到损失</li>
				<li>是否史蒂芬森颠三倒四</li>
				<li>是否双方商定</li>
				<li>是否是多数是当时的</li>
				<li>是否是多数是当时的</li>
			</ul>
		</div>
		<div class="block right">
			<h2>速度闪躲撒旦发生的</h2>
			<hr></hr>
			<ul>
				<li>是否是多受到损失</li>
				<li>是否史蒂芬森颠三倒四</li>
				<li>是否双方商定</li>
				<li>是否是多数是当时的</li>
				<li>是否是多数是当时的</li>
			</ul>
		</div>
	</div>	
	<div class="bottom">
		使法术丹方撒旦发生的撒旦发生的速度闪躲，收费电视爽肤水搜索速度舒适的速度闪躲实打实
	</div>
</footer>
</body>
</html>