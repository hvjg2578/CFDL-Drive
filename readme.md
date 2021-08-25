# Chuanrui File Directory List System 即Chuanrui 文件目录列表系统 简称 CFDL

Chuanrui 文件目录列表系统 简称 CFDL

### DEMO

http://demo.cfdl.1314.cool/

#### 注意事项：


### 联系作者

作者邮箱：admin@1314.cool

作者博客：https://blog.1314.cool

### 项目Git仓库

GitHub仓库：https://github.com/hvjg2578/CFDL-Drive


### 这是一个非常简洁的说明



### 特性

1.支持给文件夹设置密码

方法：在你要设置密码的文件夹内放置一个密码文件，文件名默认为：ChuanruiDirPassword.txt，此文件名称可以在config.php中更改（强烈建议你更改此文件名称！）

然后编辑密码文件，在里面输入文件夹密码

2. 支持在线预览xlsx，pptx，docx，等多种Office办公文件。

3. 支持在线预览视频、音频和图片文件（具体支持哪些视频和音频，取决于你的浏览器）

4. 支持在线预览XML文件

4. txt，pdf等文件预览，将在后续更新中加入
### 安装教程

1. 下载并解压源码到你的站点根目录

2. 配置config.php文件内的内容

3.如果要开启伪静态，请填写如下伪静态规则(请2021年8月25日下载之前的朋友更新伪静态规则，之前的规则有点问题)：

Nginx：

```
if (!-f $request_filename)
{
     rewrite '^(.*)$' /index.php?f=$1;
}

if (-f $request_filename)
{

}

```

然后更改config.php的rewrite选项为true

### 注意

下载大文件请更改php超时时间，否则超时会断流。


### 开源许可证

本项目采用**GNU General Public License (GPL) V3**许可证开源

如果**不同意**此许可证，**请勿**使用本程序

本项目在编写过程中参考的项目：

1. 未知下载站：项目地址：https://gitee.com/mr-wu-code/download-station/

2. Parsedown：项目地址：https://gitee.com/JonahXie/parsedown

3. 其他项目，例如404页面，我是从百度上看的，没有找到原作者，如果作者看见了，可以给我发邮件，我会把你的项目添上
