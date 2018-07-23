<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>开始使用layui</title>
  <link rel="stylesheet" href="{{asset('layui/css/layui.css')}}">
</head>
<body>
 


<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
  <div class="layui-header">
    <div class="layui-logo">layui 后台布局</div>
    <!-- 头部区域（可配合layui已有的水平导航） -->
    <ul class="layui-nav layui-layout-left">
      <li class="layui-nav-item"><a href="">控制台</a></li>
      <li class="layui-nav-item"><a href="">商品管理</a></li>
      <li class="layui-nav-item"><a href="">用户</a></li>
      <li class="layui-nav-item">
        <a href="javascript:;">其它系统</a>
        <dl class="layui-nav-child">
          <dd><a href="">邮件管理</a></dd>
          <dd><a href="">消息管理</a></dd>
          <dd><a href="">授权管理</a></dd>
        </dl>
      </li>
    </ul>
    <ul class="layui-nav layui-layout-right">
      <li class="layui-nav-item">
        <a href="javascript:;">
          <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
          贤心
        </a>
        <dl class="layui-nav-child">
          <dd><a href="">基本资料</a></dd>
          <dd><a href="">安全设置</a></dd>
        </dl>
      </li>
      <li class="layui-nav-item"><a href="">退了</a></li>
    </ul>
  </div>
  
  <div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      <ul class="layui-nav layui-nav-tree"  lay-filter="test">
        <li class="layui-nav-item layui-nav-itemed">
          <a class="" href="javascript:;">所有商品</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:;">列表一</a></dd>
            <dd><a href="javascript:;">列表二</a></dd>
            <dd><a href="javascript:;">列表三</a></dd>
            <dd><a href="">超链接</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;">解决方案</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:;">列表一</a></dd>
            <dd><a href="javascript:;">列表二</a></dd>
            <dd><a href="">超链接</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item"><a href="">云市场</a></li>
        <li class="layui-nav-item"><a href="">发布商品</a></li>
      </ul>
    </div>
  </div>
  
  <div class="layui-body">
    <!-- 内容主体区域 -->
    <div style="padding: 15px;">
      
<form class="layui-form" action="">
  <div class="layui-form-item">
    <label class="layui-form-label">输入框</label>
    <div class="layui-input-block">
      <input type="text" name="title" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">密码框</label>
    <div class="layui-input-inline">
      <input type="password" name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-form-mid layui-word-aux">辅助文字</div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">选择框</label>
    <div class="layui-input-block">
      <select name="city" lay-verify="required">
        <option value=""></option>
        <option value="0">北京</option>
        <option value="1">上海</option>
        <option value="2">广州</option>
        <option value="3">深圳</option>
        <option value="4">杭州</option>
      </select>
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">复选框</label>
    <div class="layui-input-block">
      <input type="checkbox" name="like[write]" title="写作">
      <input type="checkbox" name="like[read]" title="阅读" checked>
      <input type="checkbox" name="like[dai]" title="发呆">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">开关</label>
    <div class="layui-input-block">
      <input type="checkbox" name="switch" lay-skin="switch">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">单选框</label>
    <div class="layui-input-block">
      <input type="radio" name="sex" value="男" title="男">
      <input type="radio" name="sex" value="女" title="女" checked>
    </div>
  </div>
  <div class="layui-form-item layui-form-text">
    <label class="layui-form-label">文本域</label>
    <div class="layui-input-block">
      <textarea name="desc" placeholder="请输入内容" class="layui-textarea"></textarea>
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-input-block">
      <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
    </div>
  </div>
</form>


<div class="layui-collapse" lay-accordion>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">杜甫</h2>
    <div class="layui-colla-content layui-show">内容区域</div>
  </div>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">李清照</h2>
    <div class="layui-colla-content layui-show">内容区域</div>
  </div>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">鲁迅</h2>
    <div class="layui-colla-content layui-show">内容区域</div>
  </div>
</div>


<div class="demoTable">
    搜索：
    <div class="layui-inline">
        <input class="layui-input" name="keyword" id="demoReload" autocomplete="off">
    </div>
    <button class="layui-btn" data-type="reload">搜索</button>
</div>
<table id="demo" lay-filter="test"></table>
<script type="text/html" id="barDemo">
    <a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>
    <a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>
    <a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>
</script>
 <div id="page"></div>
    </div>
  </div>
  
  <div class="layui-footer">
    <!-- 底部固定区域 -->
    <div id="test"></div>


  </div>
</div>













 <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('layui/layui.js')}}"></script>
<script>
//一般直接写在一个js文件中
layui.use(['layer', 'form'], function(){
  var layer = layui.layer,form = layui.form;
  //监听提交
  form.on('submit(formDemo)', function(data){
    layer.msg(JSON.stringify(data.field));
    return false;
  });
  
  // layer.msg('Hello World');
});


layui.use('element', function(){
  var element = layui.element;
  
});

layui.use('util', function(){
  var util = layui.util;
  
  //示例
  var endTime = new Date(2099,1,1).getTime() //假设为结束日期
  ,serverTime = new Date().getTime(); //假设为当前服务器时间，这里采用的是本地时间，实际使用一般是取服务端的
   
  util.countdown(endTime, serverTime, function(date, serverTime, timer){
    var str = date[0] + '天' + date[1] + '时' +  date[2] + '分' + date[3] + '秒';
    layui.$('#test').html('距离2099年1月1日还有：'+ str);
  });
});


var page=1;
var keyword = '';
test(page,keyword);
function test(page=1,key=''){
  layui.use(['table', 'laypage'],function(){
  var table = layui.table;
  var laypage = layui.laypage;
  
  $.ajax({//异步请求返回给后台
        url:'https://office.techrare.com/memecoinsapi/public/api/activity?per_page=2&page='+page+'&key='+key,
        type:'GET',
        data:{},
        dataType:'json',
        success:function(data){
          console.log(data)
          table.render({ //其它参数在此省略
            elem: '#demo'
            ,data:data.data.data
             ,id: 'testReload'
            ,cols: [[
                {checkbox: true, fixed: true},
                {field:'id', width:80, title: 'ID', sort: true}
                ,{field:'title', width:200, title: '标题'}
                ,{field:'right', title: '操作', width:300,toolbar:"#barDemo"}
              
            ]]
            
            
          });
          if(page == 1){
            laypage.render({
            elem: 'page' //注意，这里的 test1 是 ID，不用加 # 号
            ,limit:2
            ,count: data.data.meta.pagination.total//数据总数，从服务端得到
            ,hash:true
            ,jump: function(obj, first){
              //obj包含了当前分页的所有参数，比如：
              //得到当前页，以便向服务端请求对应页的数据。
             //首次不执行
             
            if(!first){
              page = obj.curr;

              test(obj.curr,keyword)
              
            }
              // test(obj.curr)
             
            }
          });
          }
          

        }
    })


    $('.demoTable .layui-btn').on('click', function(){
        var demoReload = $('#demoReload');
        keyword = demoReload.val();
        test(page,keyword)
    });

  })
}




 

</script> 
</body>
</html>