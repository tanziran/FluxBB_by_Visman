<?php

// post.php 和 edit.php 使用的语言定义
$lang_post = array(

// 发帖验证（许多与 edit.php 中的类似）
'No subject'         => '主题必须包含标题。',
'No subject after censoring' => '主题必须包含标题。应用屏蔽过滤器后，你的标题为空。',
'Too long subject'   => '标题不能超过70个字符。',
'No message'         => '你必须输入内容。',
'No message after censoring' => '你必须输入内容。应用屏蔽过滤器后，你的内容为空。',
'Too long message'   => '帖子不能超过 %s 个字符。',
'All caps subject'   => '标题不能只包含大写字母。',
'All caps message'   => '帖子不能只包含大写字母。',
'Empty after strip'  => '看起来你的帖子只包含空的 BBCode。这可能是因为例如最内层的引用由于最大引用深度级别而被丢弃。',
'Too many censored words' => '许多词语被屏蔽。',

// 发帖
'Post errors'        => '发帖错误',
'Post errors info'   => '在发布消息之前需要修正以下错误：',
'Post preview'       => '帖子预览',
'Guest name'         => '姓名', // 游客（代替用户名）
'Post redirect'      => '帖子已发布。正在跳转……',
'Post a reply'       => '发表回复',
'Post new topic'     => '发布新主题',
'Hide smilies'       => '此帖子永不显示表情图标',
'Subscribe'          => '订阅此主题',
'Stay subscribed'    => '保持订阅此主题',
'Topic review'       => '主题回顾（最新的在前）',
'Flood start'        => '发帖之间至少需要间隔 %s 秒。请等待 %s 秒后重试。',
'Preview'            => '预览', // 预览消息的提交按钮

'EditPost edit' => '允许无限制编辑给定消息',
'Stick first post' => '将第一帖在所有主题页面置顶',

// 编辑帖子
'Edit post legend'   => '编辑帖子并提交更改',
'Silent edit'        => '静默编辑（不在主题视图中显示"由...编辑"）',
'Edit post'          => '编辑帖子',
'Merge posts'        => '如果是你的帖子则与前一帖合并',
'Edit redirect'      => '帖子已更新。正在跳转……'

);
