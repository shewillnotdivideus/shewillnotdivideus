<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="I have a dream that my four little children will one day live in a nation where they will not be judged by the color of their skin but by the content of their character.">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<title>SHE WILL NOT DIVIDE US</title>
		
		<link rel="shortcut icon" href="caaarl.ico" type="image/x-icon">

		<style>
			#cult_members {
				position: absolute;
				z-index: 1;
				top: 300px;
				left: 300px;
			}
			#cult_members .img {
				position: absolute;
			}

			#celebrities {
				position: absolute;
				display: inline-block;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
			}

		</style>
	</head>
	<body>

		<div id="cult_members">
			<iframe src="http://livestream.com/accounts/23093026/events/6897778/player?width=0&height=0&enableInfoAndActivity=true&autoPlay=true&mute=false" width="500" height="281" frameborder="0" scrolling="no" allowfullscreen=""></iframe>
		</div>

		<iframe id="celebrities" src="https://br3ntor.github.io/" noresize="noresize"></iframe>

		<script type="text/javascript">
			
			(function(cult){

				function shuffle(array) {
					var i = array.length, tv, ri;
					while (0 !== i) {
						ri = Math.floor(Math.random() * i);
						i -= 1;
						tv = array[i];
						array[i] = array[ri];
						array[ri] = tv;
					}
					return array;
				}

				var speed = 1;
				var dx = 2;
				var dy = 2;
				var items = shuffle([
					['https://cdn.meme.am/cache/instances/folder400/500x/60945400.jpg','right:100%;bottom:100%;'],
					['http://i3.kym-cdn.com/photos/images/facebook/000/678/818/40c.jpg', 'right:100%;top:0;'],
					['http://i2.kym-cdn.com/photos/images/facebook/000/511/678/26e.jpg', 'right:100%;top:150px;'],
					
					['https://i.ytimg.com/vi/XWnOes3wQiM/maxresdefault.jpg', 'left:0;top:100%;'],
					['https://pbs.twimg.com/media/CUsi7kTUsAApfSn.jpg', 'left:200px;top:100%;'],
					['https://i.ytimg.com/vi/JgEn9cwrVTY/hqdefault.jpg', 'left:400px;top:100%;'],

					['https://i.ytimg.com/vi/vivXub_LM70/maxresdefault.jpg', 'left:100%;top:200px;'],
					['https://v.cdn.vine.co/r/avatars/A0FF147B721221621317930233856_pic-r-1434231430109977e12bed1.jpg.jpg', 'left:100%;top:0;'],

					['https://i.imgflip.com/y7owh.jpg', 'left:100%;bottom:100%;z-index:1;'],


					['https://i0.wp.com/theralphretort.com/wp-content/uploads/O8PdnAh.jpg?resize=720%2C340', 'left:0;bottom:100%;'],
					['http://s.quickmeme.com/img/2f/2f24d901b7c748d1c20ecf5719ea9c326bac5d8b43116e953cc290658191ab02.jpg', 'left:200px;bottom:100%;'],
					['http://i2.kym-cdn.com/photos/images/original/000/999/687/5e1.png', 'left:400px;bottom:100%;'],
				]);

				function nxt(){

					if(!items.length) return false;

					var item = items.pop();
					var img = new Image();
					img.onload = function(){
						img.setAttribute('class', 'img');
						cult.appendChild(img);
					};
					img.width = 200;
					img.style = item[1];
					img.src = item[0];
					return true;
				}

				nxt();

				(function f(){
					requestAnimationFrame(f);

					var r = cult.getBoundingClientRect();

					if(r.left <= 0){
						dx = speed;
						nxt();
					}
					else if(r.right >= window.innerWidth){
						dx = -speed;
						nxt();
					}

					if(r.top <= 0){
						dy = speed;
						nxt();
					}
					else if(r.bottom >= window.innerHeight){
						dy = -speed;
						nxt();
					}

					cult.style.left = '' + (r.left + dx) + 'px';
					cult.style.top = '' + (r.top + dy) + 'px';
				})();

			})(document.getElementById('cult_members'));

		</script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-90996289-1', 'auto');
			ga('send', 'pageview');
		</script>
	</body>
</html>