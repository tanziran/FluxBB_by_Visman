<?php

// 常用字符串的语言定义
$lang_common = array(

// 文字方向和编码
'lang_direction'                => 'ltr', // ltr (从左到右) 或 rtl (从右到左)
'lang_identifier'               => 'zh_CN',

// 数字格式
'lang_decimal_point'            => '.',
'lang_thousands_sep'            => ',',

// 通知
'Bad request'                   => '错误的请求。你访问的链接不正确或已过期。',
'No view'                       => '你没有权限查看这些版块。',
'No permission'                 => '你没有权限访问此页面。',
'Bad referrer'                  => 'CSRF 校验失败。你是从未授权的来源访问此页面。',
'Bad csrf hash'                 => 'CSRF 校验失败。你是从未授权的来源访问此页面。',
'No cookie'                     => '你已成功登录，但未设置 Cookie。请检查设置并确保已启用 Cookie。',
'Pun include extension'         => '无法处理模板 %2$s 的用户包含 %1$s。不允许 "%3$s" 文件。',
'Pun include directory'         => '无法处理模板 %2$s 的用户包含 %1$s。不允许目录遍历。',
'Pun include error'             => '无法处理模板 %2$s 的用户包含 %1$s。模板目录和用户包含目录中均无此文件。',

'Hidden text' => '隐藏内容',
'Show' => '显示',
'Hide' => '隐藏',

// 其他
'Announcement'                  => '公告',
'Options'                       => '选项',
'Submit'                        => '提交', // 提交按钮的"名称"
'Ban message'                   => '你已被禁止访问此论坛。',
'Ban message ip'                => '你的IP地址在此论坛被禁止。',
'Ban message 2'                 => '禁止将在以下时间到期：',
'Ban message 3'                 => '禁止你的管理员或版主留下以下信息：',
'Ban message 4'                 => '如有疑问请联系论坛管理员：',
'Never'                         => '永不',
'Today'                         => '今天',
'Yesterday'                     => '昨天',
'Info'                          => '信息', // 通用表格标题
'Go back'                       => '返回',
'Maintenance'                   => '维护',
'Redirecting'                   => '正在跳转',
'Click redirect'                => '如果不想等待或浏览器未自动跳转，请点击这里',
'on'                            => '开启', // 如"BBCode 开启"
'off'                           => '关闭',
'Invalid email'                 => '你输入的邮箱地址无效。',
'Required'                      => '(必填)',
'required field'                => '是此表单的必填字段。', // 用于 JavaScript 表单验证
'Last post'                     => '最后帖子',
'by'                            => '由', // 如最后由某用户
'New posts'                     => '新帖子', // 指向第一个新帖子的链接
'New posts info'                => '跳转到此主题的第一个新帖子。', // 新帖子链接的弹出文本
'Username'                      => '用户名',
'Password'                      => '密码',
'Email'                         => '邮箱',
'Send email'                    => '发送邮件',
'Moderated by'                  => '版主：',
'Registered'                    => '注册',
'Subject'                       => '主题',
'Message'                       => '内容',
'Topic'                         => '主题',
'Forum'                         => '版块',
'Posts'                         => '帖子',
'Replies'                       => '回复',
'Pages'                         => '页数：',
'Page'                          => '第 %s 页',
'BBCode'                        => 'BBCode：', // 你可能不应该更改这个
'url tag'                       => '[url] 标签：',
'img tag'                       => '[img] 标签：',
'Smilies'                       => '表情：',
'and'                           => '和',
'Image link'                    => '图片', // 当个人资料中禁用"显示图片"时显示（即 <图片>）而不是图片
'wrote'                         => '写道：', // 用于 [quote]
'Mailer'                        => '%s', // 如外发邮件签名中的"MyForums Mailer"
'Important information'         => '重要信息',
'Write message legend'          => '写下你的信息并提交',
'Previous'                      => '上一页',
'Next'                          => '下一页',
'Spacer'                        => '…', // 分页的省略号

// 标题
'Title'                         => '头衔',
'Member'                        => '会员', // 默认头衔
'Moderator'                     => '版主',
'Administrator'                 => '管理员',
'Banned'                        => '被禁止',
'Guest'                         => '游客',

// include/parser.php 相关
'BBCode error no opening tag'   => '找到 [/%1$s] 但没有匹配的 [%1$s]',
'BBCode error invalid nesting'  => '[%1$s] 在 [%2$s] 内打开，这是不允许的',
'BBCode error invalid self-nesting' => '[%s] 在自身内打开，这是不允许的',
'BBCode error no closing tag'   => '找到 [%1$s] 但没有匹配的 [/%1$s]',
'BBCode error empty attribute'  => '[%s] 标签有空的属性部分',
'BBCode error tag not allowed'  => '你不被允许使用 [%s] 标签',
'BBCode error tag url not allowed' => '你不被允许发布链接',
'BBCode list size error'        => '你的列表太长无法解析，请缩短！',

// 导航器相关（每页顶部）
'Index'                         => '首页',
'User list'                     => '用户列表',
'Rules'                         => '规则',
'Search'                        => '搜索',
'Register'                      => '注册',
'Login'                         => '登录',
'Not logged in'                 => '你未登录。',
'Profile'                       => '个人资料',
'Logout'                        => '注销',
'Logged in as'                  => '登录为',
'Admin'                         => '管理',
'Last visit'                    => '最后访问：%s',
'Topic searches'                => '主题：',
'New posts header'              => '新',
'Active topics'                 => '活跃',
'Unanswered topics'             => '未回复',
'Posted topics'                 => '已发',
'Show new posts'                => '查找自上次访问以来的新帖子。',
'Show active topics'            => '查找最近有帖子的主题。',
'Show unanswered topics'        => '查找没有回复的主题。',
'Show posted topics'            => '查找你发过帖子的主题。',
'Mark all as read'              => '将所有主题标记为已读',
'Mark forum read'               => '将此版块标记为已读',
'Title separator'               => ' / ',
'PM' => '私信',
'PMsend' => '发送私信',
'PMnew' => '新私信',
'PMmess' => '你有新的私信（%s 条）。',

'Warn' => '警告',
'WarnMess' => '你有新的警告！',

// 页面底部相关
'Board footer'                  => '论坛底部',
'Jump to'                       => '跳转到',
'Go'                            => ' 跳转 ', // 版块跳转中的提交按钮
'Moderate topic'                => '管理主题',
'All'                           => '全部',
'Move topic'                    => '移动主题',
'Open topic'                    => '打开主题',
'Close topic'                   => '关闭主题',
'Unstick topic'                 => '取消置顶',
'Stick topic'                   => '置顶主题',
'Moderate forum'                => '管理版块',
'Powered by' => '由 %s 驱动<br />由 &#x56;&#x69;&#x73;&#x6D;&#x61;&#x6E; 修改',

// 调试信息
'Debug table'                   => '调试信息',
'Querytime'                     => '生成用时 %1$s 秒，执行了 %2$s 个查询',
'Memory usage'                  => '内存使用：%1$s',
'Peak usage'                    => '(峰值：%1$s)',
'Query times'                   => '时间 (秒)',
'Query'                         => '查询',
'Total query time'              => '总查询时间：%s',

// extern.php RSS 订阅
'RSS description'               => '%s 的最新主题。',
'RSS description topic'         => '%s 的最新帖子。',
'RSS reply'                     => '回复： ', // 主题标题将附加到此字符串（表示回复）
'RSS active topics feed'        => 'RSS 活跃主题订阅',
'Atom active topics feed'       => 'Atom 活跃主题订阅',
'RSS forum feed'                => 'RSS 版块订阅',
'Atom forum feed'               => 'Atom 版块订阅',
'RSS topic feed'                => 'RSS 主题订阅',
'Atom topic feed'               => 'Atom 主题订阅',

'After time'    =>   '稍后添加',
'After time s'  =>   ' 秒',
'After time i'  =>   ' 分钟',
'After time H'  =>   ' 小时',
'After time d'  =>   ' 天',

// 头部相关的管理内容
'New reports'                   => '有新的举报',
'Maintenance mode enabled'      => '维护模式已启用！',

// 文件大小单位
'Size unit B'                   => '%s B',
'Size unit KiB'                 => '%s KiB',
'Size unit MiB'                 => '%s MiB',
'Size unit GiB'                 => '%s GiB',
'Size unit TiB'                 => '%s TiB',
'Size unit PiB'                 => '%s PiB',
'Size unit EiB'                 => '%s EiB',

);
