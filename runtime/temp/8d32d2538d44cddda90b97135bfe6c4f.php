<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:48:"F:\wamp\www\tp5/apps/index\view\index\index.html";i:1462783947;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
</head>
<body>

</body>
<script src="/public/static/js/jquery.min.js" ></script>
<script type="application/javascript">
    (function ($) {
        $.fn.H = function () {
            console.log(arguments)
        }
    })(jQuery)


    $(function () {
        $("body").H({
            'width':"100px",
            "height":"100px",
            "background":"red"
        });
    })
</script>
</html>