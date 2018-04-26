<?php
	//获取用户发送的数据
	$message = $_POST['message'];
	switch ($message) {
		case '在吗':
			// 准备一些随机数据
			$hiArr = array(
				'在的',
				'不在',
				'在的呀',
				'嗯哼',
				'想我了啊 找我',
				'啥事噢',
				'本菇凉在此！'
			);
			//从数组中获取一个随机数值
			$arrayKey = array_rand($hiArr,1);
			echo $hiArr[$arrayKey];
			break;
		case '在不在':
			// 准备一些随机数据
			$hiArr = array(
				'在的',
				'不在',
				'在的呀',
				'嗯哼',
				'想我了啊 找我',
				'啥事噢',
				'本菇凉在此！'
			);
			//从数组中获取一个随机数值
			$arrayKey = array_rand($hiArr,1);
			echo $hiArr[$arrayKey];
			break;
		case '在哪呢':
			// 准备一些随机数据
			$whereArr = array(
				'在家呢',
				'不告诉你',
				'在外面玩啊',
				'哈 你要来找我吗',
				'想我了啊 来找我',
				'我在饭堂吃饭呢',
				'本菇凉在图书馆学习呢！'
			);
			//从数组中获取一个随机数值
			$arrayKey = array_rand($whereArr,1);
			echo $whereArr[$arrayKey];
			break;
		case '吃饭了吗':
			// 准备一些随机数据
			$foodArr = array(
				'吃过了',
				'还没呢  在上班  好饿',
				'今天吃饭要晚会了',
				'嗯哼 你要请我吃大餐吗',
				'正在吃呢 你呢？',
				'在吃  今天是红烧肉',
				'我点了回锅肉、西红柿炒蛋、农家小炒肉、红烧鱼！',
				'等着你呢  快点'
			);
			//从数组中获取一个随机数值
			$arrayKey = array_rand($foodArr,1);
			echo $foodArr[$arrayKey];
			break;
		case '吃饭吃饭':
			// 准备一些随机数据
			$foodArr = array(
				'吃过了',
				'还没呢  在上班  好饿',
				'今天吃饭要晚会了',
				'嗯哼 你要请我吃大餐吗',
				'正在吃呢 你呢？',
				'在吃  今天是红烧肉',
				'我点了回锅肉、西红柿炒蛋、农家小炒肉、红烧鱼！',
				'等着你呢  快点'
			);
			//从数组中获取一个随机数值
			$arrayKey = array_rand($foodArr,1);
			echo $foodArr[$arrayKey];
			break;
		case '走吃饭去':
			// 准备一些随机数据
			$foodArr = array(
				'吃过了',
				'还在上班  好饿',
				'今天吃饭要晚会了',
				'嗯哼 你要请我吃大餐吗',
				'正在吃呢 你呢？',
				'在吃  今天是红烧肉',
				'我点了回锅肉、西红柿炒蛋、农家小炒肉、红烧鱼！',
				'等着你呢  快点',
				'就差你了'
			);
			//从数组中获取一个随机数值
			$arrayKey = array_rand($foodArr,1);
			echo $foodArr[$arrayKey];
			break;
		case '今天天气怎么样':
			// 准备一些随机数据
			$skyArr = array(
				'就那样 你自己看',
				'大晴天',
				'春暖花开阳光明媚',
				'不好  不喜欢',
				'下雨了  一点都不美',
				'刮大风了  裙子也不能穿了',
				'下雪了！走一起堆雪人去'
			);
			//从数组中获取一个随机数值
			$arrayKey = array_rand($skyArr,1);
			echo $skyArr[$arrayKey];
			break;
		case '好':
			// 准备一些随机数据
			$skyArr = array(
				'从前有座山山上有座庙 庙里有....',
				'我跟你的故事正在上演',
				'老和尚和小和尚的故事 完。',
				'啊哦  忘了怎么讲了',
				'不是你讲故事哄我睡觉的嘛',
				'你说好我就讲？不可能的',
				'看把你能的'
			);
			//从数组中获取一个随机数值
			$arrayKey = array_rand($skyArr,1);
			echo $skyArr[$arrayKey];
			break;
		case '谁最好看':
			// 准备一些随机数据
			$faceArr = array(
				'当然是我最好看',
				'是你啦 这么好看还问我干嘛',
				'镜子里的那个  你去看看',
				'是我是我 我是最可爱的',
				'我可不是魔镜 问我没用的',
				'肯定不是你 我都知道',
				'问什么问 好不好看心里没有一点B数吗'
			);
			//从数组中获取一个随机数值
			$arrayKey = array_rand($faceArr,1);
			echo $faceArr[$arrayKey];
			break;
		case '你知道我最爱谁吗':
			// 准备一些随机数据
			$loveArr = array(
				'当然是我',
				'是你女票啦 那么爱还问我干嘛',
				'小哥哥网恋吗  我是萝莉音',
				'是我是我 我是最可爱的',
				'你问我爱你有多深 ',
				'肯定不是你 我都知道',
				'是TA 想到了吗 对 就是你第一个想到的'
			);
			//从数组中获取一个随机数值
			$arrayKey = array_rand($loveArr,1);
			echo $loveArr[$arrayKey];
			break;
		
		default:
			// 准备一些随机数据
			$noArr = array(
				'你说啥啊~大点声 我听不见',
				'请讲普通话！',
				'说中文 别说其他的 布利斯',
				'我好累啊 跟你说话',
				'好了好了你别说了',
				'我可能碰上一个假的了 说的啥听不懂',
				'不想理你',
				'自己玩会  我正忙着呢  要吃鸡了',
				'死鬼 慢点说',
				'我洗澡呢 让我洗完先',
				'让我给你讲个故事好不好'
			);
			//从数组中获取一个随机数值
			$arrayKey = array_rand($noArr,1);
			echo $noArr[$arrayKey];
			break;
	}
	
?>