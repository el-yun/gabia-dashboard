<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>gashboard Panels</title>
<link rel="shortcut icon" type="image/x-icon" href="https://static.gabia.com/www/common/img/favicon.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="css/layout.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php $page = 'table'; ?>
	<div id="wrap">
		<header>
			<?php include("include/header.php") ?>
		</header>
		<div class="panel-body" id="table">
		</div>
		<div class="panel-body" id="table2">
		</div>
		<section id="container">
			<?php include("include/sidebar.php") ?>
			
			<article id="contents">
				<h1>Tables</h1>

				<div class="panel">
					<div class="panel-heading">gashboard Table Classes</div>
					<div class="panel-body">
						<table class="w3-table-all">
						<tbody>
						<tr>
						<th>Class</th>
						<th>Defines</th>
						</tr>
						<tr>
						<td>w3-table</td>
						<td>Container for an HTML table</td>
						</tr>
						<tr>
						<td>w3-striped</td>
						<td>Striped table</td>
						</tr>
						<tr>
						<td>w3-border</td>
						<td>Bordered table</td>
						</tr>
						<tr>
						<td>w3-bordered</td>
						<td>Bordered lines</td>
						</tr>
						<tr>
						<td>w3-centered</td>
						<td>Centered table content</td>
						</tr>
						<tr>
						<td>w3-hoverable</td>
						<td>Hoverable table</td>
						</tr>
						<tr>
						<td>w3-table-all</td>
						<td>All properties set</td>
						</tr>
						</tbody>
						</table>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Basic Table</div>
					<div class="panel-body">
						<table class="w3-table">
						<colgroup>
						<col><col><col><col>
						</colgroup>
						<thead>
						<tr>
						<th>이름</th>
						<th>정당</th>
						<th>득표율</th>
						<th>득표수</th>
						</tr>
						</thead>
						<tbody>
						<tr>
						<td>문재인</td>
						<td>민주당</td>
						<td>41.1%</td>
						<td>13,423,800</td>
						</tr>
						<tr>
						<td>홍준표</td>
						<td>한국당</td>
						<td>24.0%</td>
						<td>7,852,849</td>
						</tr>
						<tr>
						<td>안철수</td>
						<td>국민의당</td>
						<td>21.4%</td>
						<td>6,998,342</td>
						</tr>
						<tr>
						<td>유승민</td>
						<td>바른정당</td>
						<td>6.8%</td>
						<td>2,208,771</td>
						</tr>
						<tr>
						<td>심상정</td>
						<td>정의당</td>
						<td>6.2%</td>
						<td>2,017,458</td>
						</tr>
						</tbody>
					</table>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Striped Table</div>
					<div class="panel-body">
						<table class="w3-table w3-striped">
						<colgroup>
						<col><col><col><col>
						</colgroup>
						<thead>
						<tr>
						<th>이름</th>
						<th>정당</th>
						<th>득표율</th>
						<th>득표수</th>
						</tr>
						</thead>
						<tbody>
						<tr>
						<td>문재인</td>
						<td>민주당</td>
						<td>41.1%</td>
						<td>13,423,800</td>
						</tr>
						<tr>
						<td>홍준표</td>
						<td>한국당</td>
						<td>24.0%</td>
						<td>7,852,849</td>
						</tr>
						<tr>
						<td>안철수</td>
						<td>국민의당</td>
						<td>21.4%</td>
						<td>6,998,342</td>
						</tr>
						<tr>
						<td>유승민</td>
						<td>바른정당</td>
						<td>6.8%</td>
						<td>2,208,771</td>
						</tr>
						<tr>
						<td>심상정</td>
						<td>정의당</td>
						<td>6.2%</td>
						<td>2,017,458</td>
						</tr>
						</tbody>
					</table>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Bordered Table</div>
					<div class="panel-body">
						<table class="w3-table w3-bordered">
						<colgroup>
						<col><col><col><col>
						</colgroup>
						<thead>
						<tr>
						<th>이름</th>
						<th>정당</th>
						<th>득표율</th>
						<th>득표수</th>
						</tr>
						</thead>
						<tbody>
						<tr>
						<td>문재인</td>
						<td>민주당</td>
						<td>41.1%</td>
						<td>13,423,800</td>
						</tr>
						<tr>
						<td>홍준표</td>
						<td>한국당</td>
						<td>24.0%</td>
						<td>7,852,849</td>
						</tr>
						<tr>
						<td>안철수</td>
						<td>국민의당</td>
						<td>21.4%</td>
						<td>6,998,342</td>
						</tr>
						<tr>
						<td>유승민</td>
						<td>바른정당</td>
						<td>6.8%</td>
						<td>2,208,771</td>
						</tr>
						<tr>
						<td>심상정</td>
						<td>정의당</td>
						<td>6.2%</td>
						<td>2,017,458</td>
						</tr>
						</tbody>
					</table>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Striped Bordered Table</div>
					<div class="panel-body">
						<table class="w3-table w3-striped w3-bordered">
						<colgroup>
						<col><col><col><col>
						</colgroup>
						<thead>
						<tr>
						<th>이름</th>
						<th>정당</th>
						<th>득표율</th>
						<th>득표수</th>
						</tr>
						</thead>
						<tbody>
						<tr>
						<td>문재인</td>
						<td>민주당</td>
						<td>41.1%</td>
						<td>13,423,800</td>
						</tr>
						<tr>
						<td>홍준표</td>
						<td>한국당</td>
						<td>24.0%</td>
						<td>7,852,849</td>
						</tr>
						<tr>
						<td>안철수</td>
						<td>국민의당</td>
						<td>21.4%</td>
						<td>6,998,342</td>
						</tr>
						<tr>
						<td>유승민</td>
						<td>바른정당</td>
						<td>6.8%</td>
						<td>2,208,771</td>
						</tr>
						<tr>
						<td>심상정</td>
						<td>정의당</td>
						<td>6.2%</td>
						<td>2,017,458</td>
						</tr>
						</tbody>
					</table>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Border Around a Table</div>
					<div class="panel-body">
						<table class="w3-table w3-striped w3-border">
						<colgroup>
						<col><col><col><col>
						</colgroup>
						<thead>
						<tr>
						<th>이름</th>
						<th>정당</th>
						<th>득표율</th>
						<th>득표수</th>
						</tr>
						</thead>
						<tbody>
						<tr>
						<td>문재인</td>
						<td>민주당</td>
						<td>41.1%</td>
						<td>13,423,800</td>
						</tr>
						<tr>
						<td>홍준표</td>
						<td>한국당</td>
						<td>24.0%</td>
						<td>7,852,849</td>
						</tr>
						<tr>
						<td>안철수</td>
						<td>국민의당</td>
						<td>21.4%</td>
						<td>6,998,342</td>
						</tr>
						<tr>
						<td>유승민</td>
						<td>바른정당</td>
						<td>6.8%</td>
						<td>2,208,771</td>
						</tr>
						<tr>
						<td>심상정</td>
						<td>정의당</td>
						<td>6.2%</td>
						<td>2,017,458</td>
						</tr>
						</tbody>
					</table>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Displaying it All</div>
					<div class="panel-body">
						<table class="w3-table-all">
						<thead>
						<tr class="w3-light-grey">
						<th>이름</th>
						<th>정당</th>
						<th>득표율</th>
						<th>득표수</th>
						</tr>
						</thead>
						<tbody>
						<tr>
						<td>문재인</td>
						<td>민주당</td>
						<td>41.1%</td>
						<td>13,423,800</td>
						</tr>
						<tr>
						<td>홍준표</td>
						<td>한국당</td>
						<td>24.0%</td>
						<td>7,852,849</td>
						</tr>
						<tr>
						<td>안철수</td>
						<td>국민의당</td>
						<td>21.4%</td>
						<td>6,998,342</td>
						</tr>
						<tr>
						<td>유승민</td>
						<td>바른정당</td>
						<td>6.8%</td>
						<td>2,208,771</td>
						</tr>
						<tr>
						<td>심상정</td>
						<td>정의당</td>
						<td>6.2%</td>
						<td>2,017,458</td>
						</tr>
						</tbody>
						</table>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Centering Content</div>
					<div class="panel-body">
						<table class="w3-table-all w3-centered">
						<thead>
						<tr class="w3-light-grey">
						<th>이름</th>
						<th>정당</th>
						<th>득표율</th>
						<th>득표수</th>
						</tr>
						</thead>
						<tbody>
						<tr>
						<td>문재인</td>
						<td>민주당</td>
						<td>41.1%</td>
						<td>13,423,800</td>
						</tr>
						<tr>
						<td>홍준표</td>
						<td>한국당</td>
						<td>24.0%</td>
						<td>7,852,849</td>
						</tr>
						<tr>
						<td>안철수</td>
						<td>국민의당</td>
						<td>21.4%</td>
						<td>6,998,342</td>
						</tr>
						<tr>
						<td>유승민</td>
						<td>바른정당</td>
						<td>6.8%</td>
						<td>2,208,771</td>
						</tr>
						<tr>
						<td>심상정</td>
						<td>정의당</td>
						<td>6.2%</td>
						<td>2,017,458</td>
						</tr>
						</tbody>
						</table>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">Hoverable Table</div>
					<div class="panel-body">
						<table class="w3-table-all w3-hoverable">
						<thead>
						<tr class="w3-light-grey">
						<th>이름</th>
						<th>정당</th>
						<th>득표율</th>
						<th>득표수</th>
						</tr>
						</thead>
						<tbody>
						<tr>
						<td><strong>문재인</strong></td>
						<td><strong>민주당</strong></td>
						<td><strong>41.1%</strong></td>
						<td><strong>13,423,800</strong></td>
						</tr>
						<tr>
						<td>홍준표</td>
						<td>한국당</td>
						<td>24.0%</td>
						<td>7,852,849</td>
						</tr>
						<tr>
						<td>안철수</td>
						<td>국민의당</td>
						<td>21.4%</td>
						<td>6,998,342</td>
						</tr>
						<tr>
						<td>유승민</td>
						<td>바른정당</td>
						<td>6.8%</td>
						<td>2,208,771</td>
						</tr>
						<tr>
						<td>심상정</td>
						<td>정의당</td>
						<td>6.2%</td>
						<td>2,017,458</td>
						</tr>
						</tbody>
						</table>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">제19대 대통령선거 지역별 개표결과</div>
					<div class="panel-body">
						<table class="w3-table-all w3-centered w3-hoverable">
						<colgroup>
						<col width="16%"><col><col><col><col><col>
						</colgroup>
						<thead>
						<tr class="w3-light-gray">
						<th></th>
						<th>
							<div><img src="http://t1.daumcdn.net/media/news/election2017/retina/thumb_survey_candidate1.png" class="w3-circle w3-blue"></div>
							<div>문재인</div>
						</th>
						<th>
							<div><img src="http://t1.daumcdn.net/media/news/election2017/retina/thumb_survey_candidate2.png" class="w3-circle w3-red"></div>
							<div>홍준표</div>
						</th>
						<th>
							<div><img src="http://t1.daumcdn.net/media/news/election2017/retina/thumb_survey_candidate3.png" class="w3-circle w3-green"></div>
							<div>안철수</div>
						</th>
						<th>
							<div><img src="http://t1.daumcdn.net/media/news/election2017/retina/thumb_survey_candidate4.png" class="w3-circle w3-cyan"></div>
							<div>유승민</div>
						</th>
						<th>
							<div><img src="http://t1.daumcdn.net/media/news/election2017/retina/thumb_survey_candidate5.png" class="w3-circle w3-yellow"></div>
							<div>심상정</div>
						</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<th>서울</th>
							<td class="w3-blue">42.3%</td>
							<td>20.8%</td>
							<td>00.0%</td>
							<td>00.0%</td>
							<td>00.0%</td>
						</tr>
						<tr>
							<th>부산</th>
							<td class="w3-blue">38.7%</td>
							<td>32.0%</td>
							<td>00.0%</td>
							<td>00.0%</td>
							<td>00.0%</td>
						</tr>
						<tr>
							<th>대구</th>
							<td>21.8%</td>
							<td class="w3-red">45.4%</td>
							<td>00.0%</td>
							<td>00.0%</td>
							<td>00.0%</td>
						</tr>
						<tr>
							<th>인천</th>
							<td class="w3-blue">41.2%</td>
							<td>20.9%</td>
							<td>00.0%</td>
							<td>00.0%</td>
							<td>00.0%</td>
						</tr>
						<tr>
							<th>광주</th>
							<td class="w3-blue">61.1%</td>
							<td>1.6%</td>
							<td>00.0%</td>
							<td>00.0%</td>
							<td>00.0%</td>
						</tr>
						<tr>
							<th>대전</th>
							<td class="w3-blue">42.9%</td>
							<td>20.3%</td>
							<td>00.0%</td>
							<td>00.0%</td>
							<td>00.0%</td>
						</tr>
						<tr>
							<th>울산</th>
							<td class="w3-blue">38.1%</td>
							<td>27.5%</td>
							<td>00.0%</td>
							<td>00.0%</td>
							<td>00.0%</td>
						</tr>
						<tr>
							<th>세종</th>
							<td class="w3-blue">51.1%</td>
							<td>15.2%</td>
							<td>00.0%</td>
							<td>00.0%</td>
							<td>00.0%</td>
						</tr>
						<tr>
							<th>경기</th>
							<td class="w3-blue">42.1%</td>
							<td>20.8%</td>
							<td>00.0%</td>
							<td>00.0%</td>
							<td>00.0%</td>
						</tr>
						<tr>
							<th>강원</th>
							<td class="w3-blue">34.2%</td>
							<td>30.0%</td>
							<td>00.0%</td>
							<td>00.0%</td>
							<td>00.0%</td>
						</tr>
						<tr>
							<th>충북</th>
							<td class="w3-blue">38.6%</td>
							<td>26.3%</td>
							<td>00.0%</td>
							<td>00.0%</td>
							<td>00.0%</td>
						</tr>
						<tr>
							<th>충남</th>
							<td class="w3-blue">38.6%</td>
							<td>24.8%</td>
							<td>00.0%</td>
							<td>00.0%</td>
							<td>00.0%</td>
						</tr>
						<tr>
							<th>전북</th>
							<td class="w3-blue">64.8%</td>
							<td>3.3%</td>
							<td>00.0%</td>
							<td>00.0%</td>
							<td>00.0%</td>
						</tr>
						<tr>
							<th>전남</th>
							<td class="w3-blue">59.9%</td>
							<td>2.5%</td>
							<td>00.0%</td>
							<td>00.0%</td>
							<td>00.0%</td>
						</tr>
						<tr>
							<th>경북</th>
							<td>21.7%</td>
							<td class="w3-red">48.6%</td>
							<td>00.0%</td>
							<td>00.0%</td>
							<td>00.0%</td>
						</tr>
						<tr>
							<th>경남</th>
							<td>36.7%</td>
							<td class="w3-red">37.2%</td>
							<td>00.0%</td>
							<td>00.0%</td>
							<td>00.0%</td>
						</tr>
						<tr>
							<th>제주</th>
							<td class="w3-blue">45.5%</td>
							<td>18.3%</td>
							<td>00.0%</td>
							<td>00.0%</td>
							<td>00.0%</td>
						</tr>
						</tbody>
						</table>
					</div>
				</div>
			</article>
		</section>
	</div>
</body>
</html>




<!-- 
<table class="w3-table-all w3-centered w3-hoverable">
						<colgroup>
						<col width="16%"><col><col><col><col><col>
						</colgroup>
						<thead>
						<tr class="w3-light-gray">
						<th></th>
						<th>
							<div><img src="http://t1.daumcdn.net/media/news/election2017/retina/thumb_survey_candidate1.png" class="w3-circle w3-blue"></div>
							<div>문재인</div>
						</th>
						<th>
							<div><img src="http://t1.daumcdn.net/media/news/election2017/retina/thumb_survey_candidate2.png" class="w3-circle w3-red"></div>
							<div class="tit_thumb">홍준표</div>
						</th>
						<th>
							<div><img src="http://t1.daumcdn.net/media/news/election2017/retina/thumb_survey_candidate3.png" class="w3-circle w3-green"></div>
							<div class="tit_thumb">안철수</div>
						</th>
						<th>
							<div><img src="http://t1.daumcdn.net/media/news/election2017/retina/thumb_survey_candidate4.png" class="w3-circle w3-cyan"></div>
							<div class="tit_thumb">유승민</div>
						</th>
						<th>
							<div><img src="http://t1.daumcdn.net/media/news/election2017/retina/thumb_survey_candidate5.png" class="w3-circle w3-yellow"></div>
							<div class="tit_thumb">심상정</div>
						</th>
						</tr>
						</thead>

						<tbody>
						<tr>
							<th>서울</th>
							<td>43.9%</td>
							<td>18.9</td>
							<td>22.8</td>
							<td>8.1</td>
							<td>5.9</td>
						</tr>

						<tr>
							<th>부산</th>
							<td>38.3%</td>
							<td>31.8</td>
							<td>17.8</td>
							<td>7.5</td>
							<td>4.0</td>
						</tr>

						<tr>
							<th>대구</th>
							<td>21.4%</td>
							<td>44.3</td>
							<td>15.9</td>
							<td>13.4</td>
							<td>4.4</td>
						</tr>

						<tr>
							<th>인천</th>
							<td>42.7%</td>
							<td>18.5</td>
							<td>24.6</td>
							<td>7.0</td>
							<td>6.7</td>
						</tr>

						<tr>
							<th>광주</th>
							<td>59.8%</td>
							<td>1.2</td>
							<td>30.8</td>
							<td>3.3</td>
							<td>4.6</td>
						</tr>

						<tr>
							<th>대전</th>
							<td>42.7%</td>
							<td>20.4</td>
							<td>24.1</td>
							<td>6.5</td>
							<td>6.0</td>
						</tr>

						<tr>
							<th>울산</th>
							<td>37.1%</td>
							<td>25.5</td>
							<td>17.2</td>
							<td>9.3</td>
							<td>10.3</td>
						</tr>

						<tr>
							<th>경기</th>
							<td>42.7%</td>
							<td>19.9</td>
							<td>23.3</td>
							<td>7.0</td>
							<td>6.6</td>
						</tr>

						<tr>
							<th>강원</th>
							<td>32.4%</td>
							<td>30.4</td>
							<td>22.2</td>
							<td>7.5</td>
							<td>7.0</td>
						</tr>

						<tr>
							<th>충북</th>
							<td>38.9%</td>
							<td>24.9</td>
							<td>22.4</td>
							<td>5.9</td>
							<td>7.2</td>
						</tr>

						<tr>
							<th>충남</th>
							<td>40.2%</td>
							<td>22.7</td>
							<td>23.7</td>
							<td>5.0</td>
							<td>7.5</td>
						</tr>

						<tr>
							<th>전북</th>
							<td>65.0%</td>
							<td>3.1</td>
							<td>23.3</td>
							<td>2.8</td>
							<td>5.4</td>
						</tr>
						<tr>
							<th>전남</th>
							<td>62.6%</td>
							<td>2.3</td>
							<td>29.0</td>
							<td>1.9</td>
							<td>3.9</td>
						</tr>
						<tr>
							<th>경북</th>
							<td>20.0%</td>
							<td>51.6</td>
							<td>14.9</td>
							<td>8.9</td>
							<td>4.1</td>
						</tr>
						<tr>
							<th>경남</th>
							<td>34.9%</td>
							<td>39.1</td>
							<td>14.1</td>
							<td>6.9</td>
							<td>4.6</td>
						</tr>
						<tr>
							<th>제주</th>
							<td>48.1%</td>
							<td>16.4</td>
							<td>21.5</td>
							<td>6.1</td>
							<td>7.5</td>
						</tr>
						</tbody>
						</table>
 -->

<script>
var d = [{"id":"63","artifactId":"www","groupId":"com.gabia.deploytest","name":"\ubc30\ud3ec\uc11c\ube44\uc2a42","repositoryPath":"deploy\/trunk","repositoryType":"SVN","repositoryURL":"svn:\/\/svn.gabia.com","description":"\ud504\ub85c\uc81d\ud2b8\ub97c \ubc30\ud3ec\ud558\ub294 \uc11c\ube44\uc2a4 \uc785\ub2c8\ub2e4.!!","uploadVersionId":"215","uploadRevision":"172","repositoryId":"jhyoon","repositoryPassword":"dbswlghks5","createDate":"2014-12-03 16:13:08","modifyDate":"2017-01-19 14:20:25","encrypt":"N","encryptPatterns":"php|test","excludePatterns":"*.svn|*.test","old":"N","status":"I"},{"id":"77","artifactId":"jym_hosting","groupId":"jym_hosting","name":"\ud638\uc2a4\ud305 \ub370\ubaa8 \ud14c\uc2a4\ud2b8","repositoryPath":"hosting\/trunk","repositoryType":"SVN","repositoryURL":"svn:\/\/svn.gabia.com","description":"\uad6c \ud638\uc2a4\ud305 \ud14c\uc2a4\ud2b8","uploadVersionId":"174","uploadRevision":"3670","repositoryId":"leejw","repositoryPassword":"gkdldnjrtm777","createDate":"2014-12-03 16:13:11","modifyDate":"2014-12-23 21:03:34","encrypt":"S","encryptPatterns":"php|html|htm","excludePatterns":"*.svn","old":"N","status":"I"},{"id":"78","artifactId":"newsms","groupId":"newsms","name":"sms_real","repositoryPath":"sms\/new_sms","repositoryType":"SVN","repositoryURL":"svn:\/\/soldev.gabia.com","description":"sms_real","uploadVersionId":"176","uploadRevision":"1346","repositoryId":"leejw","repositoryPassword":"gkdldnjrtm777","createDate":"2014-12-03 16:13:13","modifyDate":"2015-01-06 11:03:38","encrypt":"S","encryptPatterns":"php|html|inc","excludePatterns":"*.svn","old":"N","status":"I"},{"id":"80","artifactId":"lhh_hosting","groupId":"lhh_hosting","name":"\ud638\uc2a4\ud305 \ud14c\uc2a4\ud2b8_\uc774\ud658\ud76c","repositoryPath":"hosting\/trunk","repositoryType":"SVN","repositoryURL":"svn:\/\/svn.gabia.com","description":"","uploadVersionId":"182","uploadRevision":"3682","repositoryId":"lhh","repositoryPassword":"3811","createDate":"2014-12-03 16:13:16","modifyDate":"2014-12-23 20:28:55","encrypt":"S","encryptPatterns":"php|html","excludePatterns":"*.svn","old":"N","status":"I"},{"id":"81","artifactId":"hosting","groupId":"hosting","name":"hosting.gabia.com","repositoryPath":"hosting\/trunk","repositoryType":"SVN","repositoryURL":"svn:\/\/svn.gabia.com","description":"hosting.gabia.com","uploadVersionId":"191","uploadRevision":"3711","repositoryId":"leejw","repositoryPassword":"gkdldnjrtm777","createDate":"2014-12-03 16:13:19","modifyDate":"2015-01-12 09:47:41","encrypt":"S","encryptPatterns":"php|inc|class","excludePatterns":"*.svn","old":"N","status":"I"},{"id":"83","artifactId":"test","groupId":"test","name":"smstest","repositoryPath":"sms\/new_sms","repositoryType":"SVN","repositoryURL":"svn:\/\/soldev.gabia.com","description":"smstest","uploadVersionId":"189","uploadRevision":"1343","repositoryId":"leejw","repositoryPassword":"gkdldnjrtm777","createDate":"2014-12-03 16:13:21","modifyDate":"2015-01-09 16:20:20","encrypt":"S","encryptPatterns":"php|php*","excludePatterns":"*.svn","old":"N","status":"I"},{"id":"89","artifactId":"hiworkstest","groupId":"hiworks","name":"hiworks","repositoryPath":"hiworks\/trunk\/groupware","repositoryType":"SVN","repositoryURL":"svn:\/\/soldev.gabia.com","description":"\ud558\uc774\uc6cd\uc2a4","uploadVersionId":"212","uploadRevision":"18889","repositoryId":"lhh","repositoryPassword":"3811","createDate":"2015-02-02 17:22:24","modifyDate":"2015-07-28 13:36:19","encrypt":"S","encryptPatterns":"php|php[1-9]|htm|html","excludePatterns":"*.svn","old":"Y","status":"I"},{"id":"95","artifactId":"smarthd-utube","groupId":"smarthd-utube","name":"smarthd-utube","repositoryPath":"smarthd\/trunk\/web_bw\/google-api-php-client","repositoryType":"SVN","repositoryURL":"svn:\/\/svn.gabia.com","description":"smarthd-utube","uploadVersionId":"","uploadRevision":"0","repositoryId":"leejw","repositoryPassword":"gkdldnjrtm777","createDate":"2015-08-04 14:04:02","modifyDate":"2015-08-04 14:04:02","encrypt":"N","encryptPatterns":"php|php[1-9]|htm|html","excludePatterns":"*.svn","old":"N","status":"I"}];
var cols = ['id', 'artifactId', 'name'];
var colname = ['ID', 'ArtifactID', '이름'];
new Dashboard.table('w3-table','table', d, cols,  colname);
new Dashboard.table('w3-table-all w3-hoverable','table2', d);
</script>


