易班PHP SDK1.0
--
> 完成初始化后，通过YBOpenApi::getInstance()->request($url, $param, $isPOST, $applyToken)来调用易班api
参数说明：
$url			String	具体调用的接口名称,例如user/me
$param			Array	接口请求参数数组
$isPOST  		Boolean	是否使用POST方式请求,默认使用GET方式
$applyToken		Boolean	请求参数中是否需要添加access_token，设置为true时自动添加之前绑定的token到参数数组中(如果为true请先通过bind()将token绑定至实例中)

> 以 获取当前用户信息 为例：（接口说明  https://o.yiban.cn/wiki/index.php?page=user/me ）
$url 		= 'user/me';
$param 		= array();
$isPOST		= false;
$applyToken = true;
$result = YBOpenApi::getInstance()->request($url, $param, $isPOST, $applyToken);//获取接口返回信息