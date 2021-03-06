<!doctype html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"/>
    <meta name="renderer" content="webkit"/>
    <meta name="force-rendering" content="webkit"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <!-- MDUI CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/mdui@1.0.1/dist/css/mdui.min.css"
      integrity="sha384-cLRrMq39HOZdvE0j6yBojO4+1PrHfB7a9l5qLcmRm/fiWXYY+CndJPmyu5FV/9Tw"
      crossorigin="anonymous"
    />
    <title>回声洞</title>
    <!-- BrowserHappy -->
  <script>
    var browsehappy_config = {
      ie: 12,
      type: 'box',
      debug: false,
      tip: "站点目前不支持 IE。请 ",
      show: ['firefox', 'chrome']
    };
  </script>
  <script src="https://cdn.jsdelivr.net/gh/a632079/browserhappy@0.0.1/browserhappy.min.js"></script>
  </head>
  <body class="mdui-appbar-with-tab-larger">
<div class="mdui-appbar mdui-appbar-fixed">
  <div class="mdui-toolbar mdui-color-blue">
    <a href="javascript:;" class="mdui-typo-title">回声洞</a>
    <div class="mdui-toolbar-spacer"></div>
    <a href="https://github.com/echo-cave" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">code</i></a>
  </div>
  <div class="mdui-tab mdui-color-blue" mdui-tab>
    <a href="#h" class="mdui-ripple mdui-ripple-white">
      <i class="mdui-icon material-icons">record_voice_over</i>
      <label>回声洞</label>
    </a>
  </div>
</div>
    <div class="mdui-container mdui-appbar-with-tab-larger">
    <center id="h">
    <h1 style="color: #3c5675;" id="cave"></h1>
    </center>
      
      <script>
        function loveEchoCove() {
    // Love Echo-Cove!
    fetch('http://frp.rdpstudio.top:31000/caveapi.php?encode=json')
    .then(function (res){
      return res.json();
    })
    .then(function (data) {
      var cave = document.getElementById('cave');
      cave.innerText = data.cave; 
    })
    .catch(function (err) {
      console.error(err);
    })
        }
        window.setTimeout(loveEchoCove, 10000);
        loveEchoCove();
      </script>

    <!-- MDUI JavaScript -->
    <script
      src="https://cdn.jsdelivr.net/npm/mdui@1.0.1/dist/js/mdui.min.js"
      integrity="sha384-gCMZcshYKOGRX9r6wbDrvF+TcCCswSHFucUzUPwka+Gr+uHgjlYvkABr95TCOz3A"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
  
