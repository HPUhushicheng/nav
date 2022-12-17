<?php
// 天气接口 https://api.aa1.cn/doc/api-tianqi-4.html
// 根据城市ID（上面的接口文档有ID说明下载）替换下方 101070101
$api_url = 'https://api.help.bj.cn/apis/weather/?id=101070101';
$data = file_get_contents($api_url);
$arr = json_decode($data, true);    // 将获取到的 JSON 数据解析成数组
$temp = $arr['temp']; // 实时温度
$city = $arr['city']; // 城市
?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>免费导航 - 夏柔导航</title>
    <meta name="keywords" content="夏柔导航,起始页">
    <meta name="description" content="一个简洁无广告的搜索引擎起始页">
    <!-- jQuery -->
    <script src="https://lf26-cdn-tos.bytecdntp.com/cdn/expire-1-y/jquery/3.6.0/jquery.min.js"></script>
    <!-- 引入样式 -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/font.css">
    <link rel="stylesheet" type="text/css" href="./css/loading.css">
    <link rel="stylesheet" type="text/css" href="./css/mobile.css">
    <link rel="stylesheet" type="text/css" href="./css/animation.css">
    <!-- Izitoast -->
    <link rel="stylesheet" href="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-y/izitoast/1.4.0/css/iziToast.min.css">
    <script type="text/javascript"
        src="https://lf26-cdn-tos.bytecdntp.com/cdn/expire-1-y/izitoast/1.4.0/js/iziToast.min.js">
    </script>
    <!-- IE Out -->
    <link rel="icon" href="./favicon.webp">
</head>

<body>
    <!--加载动画-->
    <div id="loading-box">
        <div class="loading-left-bg"></div>
        <div class="loading-right-bg"></div>
        <div class="spinner-box">
            <div class="loader">
                <div class="inner one"></div>
                <div class="inner two"></div>
                <div class="inner three"></div>
            </div>
            <div class="loading-word">
                <p class="loading-title">请稍等</p>
                <span id="loading-text">正在玩命加载中</span>
            </div>
        </div>
    </div>
    <!-- 背景图片 -->
    <div class="bg-all">
        <img id="bg" onerror="this.classList.add('error');"></img>
        <div class="cover"></div>
    </div>
    <!-- 主体内容 -->
    <section id="section" class="section">
        <div id="content">
            <div class="con">
                <!-- 时间天气 -->
                <div class="tool-all">
                    <div class="time">
                        <span id="time_text">00<span id="point">:</span>00</span>
                        <span id="day">0&nbsp;月&nbsp;00&nbsp;日&nbsp;周一</span>
                    </div>
                    <div class="weather">
                        <span>城市:<?php echo $city. ' 温度:'.$temp;?></span>°C
                    </div>
                </div>
                <!-- 搜索框 -->
                <div class="close_sou"></div>
                <div class="sou">
                    <form class="search" action="https://www.baidu.com/s" target="_Blank">
                        <div class="all-search">
                            <div class="se" title="点击切换搜索引擎">
                                <i id="icon-se" class="iconfont icon-baidu"></i>
                            </div>
                            <input class="wd" type="text" name="wd" placeholder="想要搜点什么" autocomplete="off">
                            <div class="sou-button">
                                <div class="s" id="s-button">
                                    <i id="icon-sou" class="iconfont icon-sousuo"></i>
                                </div>
                            </div>
                        </div>
                        <input type="submit" id="search-submit" style="display: none;">
                    </form>
                    <div id="keywords" style="display: none;"></div>
                    <div class="search-engine" style="display: none;">
                        <div class="search-engine-list">
                            <div class="se-li">
                                <a class="se-li-text" data-url="https://www.baidu.com/s" data-name="wd"
                                    data-icon="iconfont icon-baidu">
                                    <i id="icon-sou-list" class="iconfont icon-sousuo"></i>
                                    <span>百度</span>
                                </a>
                            </div>
                            <div class="se-li" data-url="https://cn.bing.com/search" data-name="q"
                                data-icon="iconfont icon-bing">
                                <a class="se-li-text">
                                    <i id="icon-sou-list" class="iconfont icon-bing"></i>
                                    <span>必应</span>
                                </a>
                            </div>
                            <div class="se-li" data-url="https://www.google.com/search" data-name="q"
                                data-icon="iconfont icon-google">
                                <a class="se-li-text">
                                    <i id="icon-sou-list" class="iconfont icon-google"></i>
                                    <span>谷歌</span>
                                </a>
                            </div>
                            <div class="se-li" data-url="https://www.sogou.com/web" data-name="query"
                                data-icon="iconfont icon-bing">
                                <a class="se-li-text">
                                    <i id="icon-sou-list" class="iconfont icon-sougousousuo"></i>
                                    <span>搜狗</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 书签页 -->
                <div class="mark" style="display: none;">
                    <div class="tab">
                        <div class="tab-item active">常用</div>
                        <div class="tab-item">工具</div>
                        <div class="tab-item">开发</div>
                        <div class="tab-item">娱乐</div>
                        <div class="tab-item">学习</div>
                        <div class="tab-item">设计</div>
                    </div>
                    <div class="content products">
                        <!-- 常用 -->
                        <div class="mainCont selected">
                            <div class="quick-all">
                                <div class="quick">
                                    <a href="https://github.com/" target="_blank">
                                        GitHub
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- 开发 -->
                        <div class="mainCont">
                            <div class="quick-alls">
                                <div class="quicks">
                                    <a href="https://tool.chinaz.com/" target="_blank">
                                        站长之家
                                    </a>
                                </div>
                                <div class="quicks">
                                    <a href="https://www.toolnb.com/" target="_blank">
                                        爱资料工具
                                    </a>
                                </div>
                                <div class="quicks">
                                    <a href="https://www.aconvert.com/cn/" target="_blank">
                                        Aconvert
                                    </a>
                                </div>
                                <div class="quicks">
                                    <a href="https://next.itellyou.cn/" target="_blank">
                                        MSDN
                                    </a>
                                </div>
                                <div class="quicks">
                                    <a href="https://www.bejson.com/" target="_blank">
                                        BEJSON
                                    </a>
                                </div>
                                <div class="quicks">
                                    <a href="https://zh.z-lib.org/" target="_blank">
                                        Z-Library
                                    </a>
                                </div>
                                <div class="quicks">
                                    <a href="https://ebook.huzerui.com/" target="_blank">
                                        熊猫搜书
                                    </a>
                                </div>
                                <div class="quicks">
                                    <a href="https://vocalremover.org/ch/" target="_blank">
                                        VocalreMover
                                    </a>
                                </div>
                                <div class="quicks">
                                    <a href="https://tiomg.org/" target="_blank">
                                        太美工具
                                    </a>
                                </div>
                                <div class="quicks">
                                    <a href="https://s.threatbook.cn/" target="_blank">
                                        微步云沙箱
                                    </a>
                                </div>
                                <div class="quicks">
                                    <a href="https://www.tablesgenerator.com/" target="_blank">
                                        表格生成
                                    </a>
                                </div>
                                <div class="quicks">
                                    <a href="https://write.imsyy.top/" target="_blank">
                                        MD 编辑器
                                    </a>
                                </div>
                                <div class="quicks">
                                    <a href="https://vocalremover.org/ch/" target="_blank">
                                        VocalreMover
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- 工具 -->
                        <div class="mainCont">
                            <div class="quick-alls">
                                <div class="quicks" data-s="bilibili" title="哔哩哔哩 (゜-゜)つロ 干杯~">
                                    <a href="https://www.bilibili.com/" target="_blank">
                                        哔哩哔哩
                                    </a>
                                </div>
                                <div class="quicks" data-s="github" title="GitHub">
                                    <a href="https://github.com/" target="_blank">
                                        GitHub
                                    </a>
                                </div>
                                <div class="quicks" data-s="v2ex" title="V2EX">
                                    <a href="https://www.v2ex.com/" target="_blank">
                                        V2EX
                                    </a>
                                </div>
                                <div class="quicks" data-s="steam" title="Steam">
                                    <a href="https://store.steampowered.com/" target="_blank">
                                        Steam
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- 娱乐 -->
                        <div class="mainCont">
                            <div class="quick-alls">
                                <div class="quicks" data-s="bilibili" title="哔哩哔哩 (゜-゜)つロ 干杯~">
                                    <a href="https://www.bilibili.com/" target="_blank">
                                        哔哩哔哩
                                    </a>
                                </div>
                                <div class="quicks" data-s="github" title="GitHub">
                                    <a href="https://github.com/" target="_blank">
                                        GitHub
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- 学习 -->
                        <div class="mainCont">
                            <div class="quick-alls">
                                <div class="quicks" data-s="bilibili" title="哔哩哔哩 (゜-゜)つロ 干杯~">
                                    <a href="https://www.bilibili.com/" target="_blank">
                                        哔哩哔哩
                                    </a>
                                </div>
                                <div class="quicks" data-s="github" title="GitHub">
                                    <a href="https://github.com/" target="_blank">
                                        GitHub
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- 设计 -->
                        <div class="mainCont">
                            <div class="quick-alls">
                                <div class="quicks" data-s="bilibili" title="哔哩哔哩 (゜-゜)つロ 干杯~">
                                    <a href="https://www.bilibili.com/" target="_blank">
                                        哔哩哔哩
                                    </a>
                                </div>
                                <div class="quicks" data-s="github" title="GitHub">
                                    <a href="https://github.com/" target="_blank">
                                        GitHub
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 设置图标 -->
                <div id="menu">
                    <i id="icon-menu" class="iconfont icon-shezhi"></i>
                </div>
                <!-- 设置页 -->
                <div class="set" style="display: none;">
                    <div class="tabs">
                        <div class="tab-items actives">搜索引擎</div>
                        <div class="tab-items" id="set-quick-menu">快捷方式</div>
                        <div class="tab-items">背景图片</div>
                        <div class="tab-items">数据备份</div>
                    </div>
                    <div class="contents productss">
                        <!-- 搜索引擎设置 -->
                        <div class="mainConts selected">
                            <div class="set_blocks">
                                <div class="set_blocks_content">
                                    <div class="se_list">
                                        <div class="se_list_table">
                                            <div class="se_list_div">
                                                <div class="se_list_num">
                                                    <i class="iconfont icon-home"></i>
                                                </div>
                                                <div class="se_list_name">百度</div>
                                                <div class="se_list_button">
                                                    <button class="set_se_default" value="baidu"
                                                        style="border-radius: 8px 0px 0px 8px;">
                                                        <span class="iconfont icon-home"></span>
                                                    </button>
                                                    <button class="edit_se" value="baidu">
                                                        <span class="iconfont icon-xiugai"></span>
                                                    </button>
                                                    <button class="delete_se" value="baidu"
                                                        style="border-radius: 0px 8px 8px 0px;">
                                                        <span class="iconfont icon-delete"></span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="se_list_div">
                                                <div class="se_list_num">2</div>
                                                <div class="se_list_name">谷歌</div>
                                                <div class="se_list_button">
                                                    <button class="set_se_default" value="google"><span
                                                            class="iconfont icon-home"></span></button>
                                                    <button class="edit_se" value="google"><span
                                                            class="iconfont icon-xiugai"></span></button>
                                                    <button class="delete_se" value="google"><span
                                                            class="iconfont icon-delete"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="se_add_preinstall">
                                        <div class="set_se_list_add">
                                            <span class="set_quick_text">新增</span>
                                        </div>
                                        <div class="set_se_list_preinstall">
                                            <span class="set_quick_text">重置</span>
                                        </div>
                                    </div>
                                    <div class="add_content se_add_content" style="display:none;">
                                        <div class="froms">
                                            <div class="from_items">
                                                <div class="from_text">顺序</div>
                                                <input type="hidden" name="key_inhere">
                                                <input type="number" name="key" placeholder="请填入小于 20 的正整数"
                                                    autocomplete="off"
                                                    oninput="if(value>20)value=20;if(value<0)value=0">
                                            </div>
                                            <div class="from_items">
                                                <div class="from_text">名称</div>
                                                <input type="text" name="title" placeholder="搜索引擎名称" autocomplete="off">
                                            </div>
                                            <div class="from_items">
                                                <div class="from_text">网址</div>
                                                <input type="url" name="url" placeholder="以 https 或 http 开头的 URL"
                                                    autocomplete="off">
                                            </div>
                                            <div class="from_items">
                                                <div class="from_text">字段名</div>
                                                <input type="text" name="name" placeholder="URL 中 ? 后面的字段"
                                                    autocomplete="off">
                                            </div>
                                            <div class="from_items" style="display: none;">
                                                <input type="text" name="icon" placeholder="iconfont icon-Earth"
                                                    value="iconfont icon-Earth" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="from_items button">
                                            <div class="se_add_save">保存</div>
                                            <div class="se_add_cancel">取消</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 快捷方式设置 -->
                        <div class="mainConts">
                            <div class="set_blocks">
                                <div class="set_blocks_content">
                                    <div class="quick_list">
                                        <div class="quick_list_table">
                                            <div class="quick_list_div">
                                                <div class="quick_list_div_num">1</div>
                                                <div class="quick_list_div_name">哔哩哔哩</div>
                                                <div class="quick_list_div_button">
                                                    <div class="edit_quick" value="1">
                                                        <span class="iconfont iconbook-edit"></span>
                                                    </div>
                                                    <div class="delete_quick" value="1">
                                                        <span class="iconfont icondelete"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quick_list_div">
                                                <div class="quick_list_div_num">2</div>
                                                <div class="quick_list_div_name">知乎</div>
                                                <div class="quick_list_div_button">
                                                    <button class="edit_quick" value="2"
                                                        style="border-radius: 8px 0px 0px 8px;">
                                                        <span class="iconfont iconbook-edit"></span>
                                                    </button>
                                                    <button class="delete_quick" value="2"
                                                        style="border-radius: 0px 8px 8px 0px;">
                                                        <span class="iconfont icondelete"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="se_add_preinstalls">
                                        <div class="set_quick_list_add">
                                            <span class="set_quick_text">新增</span>
                                        </div>
                                        <div class="set_quick_list_preinstall">
                                            <span class="set_quick_text">重置</span>
                                        </div>
                                    </div>
                                    <div class="add_content quick_add_content" style="display:none;">
                                        <div class="froms">
                                            <div class="from_items">
                                                <div class="from_text">顺序</div>
                                                <input type="hidden" name="key_inhere">
                                                <input type="number" name="key" placeholder="请填入小于 100 的正整数"
                                                    autocomplete="off"
                                                    oninput="if(value>99)value=99;if(value<0)value=0">
                                            </div>
                                            <div class="from_items">
                                                <div class="from_text">名称</div>
                                                <input type="text" name="title" placeholder="网站名称" autocomplete="off">
                                            </div>
                                            <div class="from_items">
                                                <div class="from_text">网址</div>
                                                <input type="url" name="url" placeholder="以 https 或 http 开头的 URL"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="from_items button">
                                            <div class="quick_add_save">保存</div>
                                            <div class="quick_add_cancel">取消</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 背景图片设置 -->
                        <div class="mainConts">
                            <div class="set_blocks">
                                <div class="set_tip">
                                    <span class="set_text mobile">点击下方选项以切换壁纸，使用除默认壁纸以外的选项可能会导致页面载入缓慢</span>
                                    <span class="set_text mobile">不建议使用以主色调为白色的壁纸，会导致本站部分元素无法辨认</span>
                                    <span class="set_text" id="wallpaper_text">请点击选项以查看各项说明，高亮项为选中，选中后刷新页面以生效</span>
                                    <span class="set_text" id="wallpaper_text">4K风景接口感谢来自夏柔API（<a href="">api.aa1.cn</a>)</span>
                                </div>
                                <div class="set_blocks_content">
                                    <div class="from_container">
                                        <div class="froms">
                                            <div class="from_row">
                                                <div class="from_row_content">
                                                    <div id="wallpaper">
                                                        <div class="form-radio">
                                                            <input type="radio" id="radio1" class="set-wallpaper"
                                                                name="wallpaper-type" value="1" style="display: none;">
                                                            <label class="form-radio-label" for="radio1">
                                                                默认壁纸
                                                            </label>
                                                        </div>
                                                        <div class="form-radio">
                                                            <input type="radio" id="radio2" class="set-wallpaper"
                                                                name="wallpaper-type" value="2" style="display: none;">
                                                            <label class="form-radio-label" for="radio2">
                                                                随机风景（4K）
                                                            </label>
                                                        </div>
                                                        <div class="form-radio">
                                                            <input type="radio" id="radio3" class="set-wallpaper"
                                                                name="wallpaper-type" value="3" style="display: none;">
                                                            <label class="form-radio-label" for="radio3">
                                                                每日必应
                                                            </label>
                                                        </div>
                                                        <div class="form-radio">
                                                            <input type="radio" id="radio4" class="set-wallpaper"
                                                                name="wallpaper-type" value="4" style="display: none;">
                                                            <label class="form-radio-label" for="radio4">
                                                                随机二次元
                                                            </label>
                                                        </div>
                                                        <div class="form-radio mobile">
                                                            <input type="radio" id="radio5"
                                                                class="set-wallpaper wallpaper-custom"
                                                                name="wallpaper-type" value="5" style="display: none;">
                                                            <label class="form-radio-label" for="radio5">
                                                                自定义壁纸
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div id="wallpaper_url" style="display: none;">
                                                <div class="from_row">
                                                    <div class="from_items">
                                                        <input type="text" name="wallpaper-url" id="wallpaper-url"
                                                            placeholder="以 https 或 http 开头的 URL" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="from_items button" id="wallpaper-button" style="display: none;">
                                        <div class="wallpaper_save">保存</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 数据备份设置 -->
                        <div class="mainConts">
                            <div class="set_blocks">
                                <div class="set_tip">
                                    <span class="set_text">点击导出会将本站文件导出至下载目录</span>
                                    <span class="set_text">点击导入可选择已备份文件进行恢复</span>
                                    <span class="set_text">本功能尚未完善，若遇到问题可在设置进行重置</span>
                                </div>
                                <div class="set_button">
                                    <div class="but-ordinary" id="my_data_in">导入</div>
                                    <div class="but-ordinary" id="my_data_out">导出</div>
                                    <input type="file" id="my_data_file" name="file" style="display: none">
                                </div>
                                <div class="set_version">
                                    <span class="set_version-text">MADE&nbsp;BY&nbsp;夏柔</span>
                                    <span class="set_version-text2">©&nbsp;Snavigation&nbsp;v&nbsp;1.2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 版权信息 -->
        <div class="foot">
            <div class="power">Copyright&nbsp;&copy;&nbsp;2005
                <script>
                    document.write(' - ' + (new Date()).getFullYear())
                </script>&nbsp;<a href="https://nav.aa1.cn">夏柔</a>&nbsp;
                <!-- 以下信息请不要修改哦 -->
            </div>
        </div>
    </section>
    <!-- 主体内容结束 -->
    <!-- noscript -->
    <noscript>
        <div class="noscript fixed-top">请开启 JavaScript</div>
    </noscript>
    <!-- JS -->
    <script type="text/javascript" src="./js/xr-main.js"></script>
    <script type="text/javascript" src="./js/xiarou-set1.js"></script>
    <script type="text/javascript" src="./js/js.cookie.js"></script>
</body>

</html>