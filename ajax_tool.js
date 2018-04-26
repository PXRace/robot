/**
 * ajax get post方法 函数封装
 * @param  {[type]} url    地址
 * @param  {[type]} data   键值对
 * @param  {[type]} method 请求方法
 * @return {[type]}        数据
 */
function ajax_tool(url,data,method,success) {
	// 异步对象
	var ajax = new XMLHttpRequest();
	// get 跟post需要设置不同的URL方法
	if (method =="get") {
		if (data) {
			url+="?";
			url+=data;
			// ajax.open(method, url);
		}
		ajax.open(method, url);   //open()中还可以添加user、password属性
		ajax.send();
	}else if (method == "post"){
		//post 请求URL不会改变
		ajax.open(method, url);
		// 设置请求报文头
		ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		// 判断data是否有值，使用send发送
		if (data) {
			ajax.send(data);
		}else{
			ajax.send();
		}
	}
	// 注册事件
	ajax.onreadystatechange = function () {
		// readyState返回一个0-4的值 0：表示open()还未执行 1：表示已发送 2：表示接收到头部 3：表示解析中 4：表示请求完成
		// status 返回HTTP状态码 当200时表示请求成功
		if (ajax.readyState==4&&ajax.status==200) {
			// console.log(ajax.responseText);
			success(ajax.responseText);
		}
	}
}
/**
 * 加强版ajax_tool封装 使用对象优化    输入数据不需要考虑顺序
 * option形参
 */
function ajax_tool_pro(option) {
	var ajax = new XMLHttpRequest();
	if (option.method=="get") {
		if (option.data) {
			option.url+="?";
			option.url+=option.data;
		}
		ajax.open(option.method, option.url);
		ajax.send();
	}else if (option.method=="post") {
		ajax.open(option.method, option.url);
		ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		if (option.data) {
			ajax.send(option.data);
		}else{
			ajax.send();
		}
		
	}
	ajax.onreadystatechange = function() {
		if (ajax.readyState==4&&ajax.status==200) {
			option.success(ajax.responseText);
		}
	}
}