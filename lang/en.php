<?php
$conf['l'] = array(
	'page:code' => 'en',
	'page:Home' => 'Home',
	'page:Admin' => 'Admin',
	'page:Connect' => 'Connect',
	'page:Links' => 'Links',
	'page:InCate' => 'in',
	'page:Comments' => 'Comments',
	'page:ShareTo' => 'Share to...',
	'page:More' => 'Read more',
	'page:Error' => 'Error:',
	'page:ErrorBack' => 'Return to previous page',
	'page:ErrorToHome' => 'Return to homepage',
	'page:social:WeChat' => 'WeChat',
	'page:social:Weibo' => 'Weibo',
	'page:social:Douban' => 'Douban',
	'page:social:Renren' => 'Renren',
	'page:social:WeChat' => 'WeChat',
	'page:social:Instagram' => 'Instagram',
	'page:social:Linkedin' => 'LinkedIn',
	'page:MobileRem' => 'This is my personal mobile device.',
	'page:MobileRem2' => 'Remember my login status.',
	'page:Tags' => 'Tag',

	'js:RememberFail' => 'System will not remember your login status because the browser is working in Private Browsing mode.',
	'js:AjaxFail' => 'An error occurs in Ajax communication.',

	'admin:Dashboard' => 'Dashboard',
	'admin:Settings' => 'Settings',
	'admin:Articles' => 'Articles',
	'admin:Services' => 'Services',
	'admin:Extensions' => 'Extensions',
	'admin:Logout' => 'Logout',

	'admin:sect:BasicInfo' => 'Basic Information',
	'admin:sect:Author' => 'Writer\'s Information',
	'admin:sect:Looks' => 'Looks',
	'admin:sect:Articles' => 'Manage Articles',
	'admin:sect:Categories' => 'Manage Categories',
	'admin:sect:Writer' => 'Writer',
	'admin:sect:Duoshuo' => 'Setup Duoshuo',
	'admin:sect:Qiniu' => 'Setup Qiniu',
	'admin:sect:OtherServices' => 'Other Services',
	'admin:sect:Welcome' => 'Welcome',
	'admin:sect:SysInfo' => 'System Info',

	'admin:item:SiteName' => 'Website Name',
	'admin:item:SiteURL' => 'Website Root URL',
	'admin:item:AuthorName' => 'Name',
	'admin:item:AuthorIntro' => 'Short Tagline',
	'admin:item:ResetPsw' => 'Reset Password',
	'admin:item:RepeatPsw' => 'Repeat New Password',
	'admin:item:SiteTheme' => 'Select a Theme',
	'admin:item:SiteLang' => 'Language',
	'admin:item:PerPage' => 'Number of Articles on Each Page',
	'admin:item:URLRewrite' => 'Enable URL Rewrite',
	'admin:item:ATitle' => 'Title of the Article',
	'admin:item:AID' => 'Unique ID',
	'admin:item:AContent' => 'Content',
	'admin:item:ACate' => 'Category',
	'admin:item:ATime' => 'Date &amp; Time',
	'admin:item:DuoshuoID' => 'Duoshuo Short Name',
	'admin:item:QiniuAK' => 'Access Key',
	'admin:item:QiniuSK' => 'Security Key',
	'admin:item:QiniuBucket' => 'Qiniu Bucket Name',
	'admin:item:QiniuSync' => 'Sync Articles',
	'admin:item:QiniuUpload' => 'Upload to Qiniu',
	'admin:item:QiniuDomain' => 'Bound Domain',
	'admin:item:Sync' => 'Manual Sync',
	'admin:item:Backup' => 'Backup Articles',
	'admin:item:AuthorSocial' => 'Social Links',
	'admin:item:Links' => 'Link Manager',
	'admin:item:SetTag' => 'Set Tags',
	'admin:item:TimeZone' => 'Set Timezone',

	'admin:opt:SimplifiedChinese' => 'Chinese (PRC)',
	'admin:opt:English' => 'English',
	'admin:opt:VeryFew' => 'Very Few',
	'admin:opt:AFew' => 'A Few',
	'admin:opt:Normal' => 'Normal',
	'admin:opt:Many' => 'Many',
	'admin:opt:Off' => 'Off',
	'admin:opt:On' => 'On',

	'admin:msg:SiteURL' => 'Example: http://name.com/path. Do not change unless you know what you\'re doing.',
	'admin:msg:BlankPsw' => 'Leave blank to keep the current password',
	'admin:msg:LengthPsw' => 'Must be at least 8 digits long, and contains at least 1 special character.',
	'admin:msg:URLRewrite' => 'URL rewrite needs server support, for eg. Apache Rewrite Module.',
	'admin:msg:ErrorCorrection' => 'Please correct the errors first.',
	'admin:msg:NewCate' => 'Format: ID=Name',
	'admin:msg:Categories' => 'Click a category name to edit. Only empty categories can be removed. Do not foget to save the changes.',
	'admin:msg:AID' => 'Unique identifier of the article',
	'admin:msg:AID2' => 'You cannot change the ID once saved.',
	'admin:msg:ATime' => 'Leave blank for current time.',
	'admin:msg:Delete' => 'Do you really want to delete this article?',
	'admin:msg:Duoshuo' => 'Duoshuo is a social comment service provided by <a href="http://www.duoshuo.com">duoshuo.com</a>.',
	'admin:msg:Qiniu' => 'Qiniu is a cloud storage service provided by <a href="http://www.qiniu.com">qiniu.com</a>.',
	'admin:msg:QiniuSync' => 'Articles will be synchronized with your Qiniu bucket.',
	'admin:msg:QiniuUpload' => 'Upload to Qiniu instead of local server. The bucket must be set to Public.',
	'admin:msg:QiniuDomain' => 'Leave blank for default domain like bucket.qiniudn.com. Start with http://.',
	'admin:msg:Login' => 'Please login in order to continue.',
	'admin:msg:PromptPsw' => 'Your password',
	'admin:msg:WrongPsw' => 'Your password is incorrect.',
	'admin:msg:By' => 'by',
	'admin:msg:Open' => 'Open',
	'admin:msg:Up' => 'Move Up',
	'admin:msg:Down' => 'Move Down',
	'admin:msg:Remove' => 'Remove',
	'admin:msg:Close' => 'Close',
	'admin:msg:LeaveConfirm' => 'Sure to leave? Unsaved data will be lost!',
	'admin:msg:Links' => 'One link per line. Format: URL=Name',
	'admin:msg:SetTag' => 'Separate each tag with a comma.',
	'admin:msg:TimeZone' => 'Timezone code supported by PHP. <a href="http://www.php.net/manual/zh/timezones.php" target="_blank">Click here</a> for more details.',

	'admin:btn:Save' => 'Save',
	'admin:btn:Restore' => 'Restore',
	'admin:btn:NewArticle' => 'New Article',
	'admin:btn:NewCate' => 'New',
	'admin:btn:Add' => 'Add',
	'admin:btn:AddPic' => 'Add Pictures',
	'admin:btn:Delete' => 'Delete',
	'admin:btn:Uploading' => 'Uploading...',
	'admin:btn:Sync' => 'Click to sync all articles to Qiniu Cloud Service NOW!',
	'admin:btn:Backup' => 'Click to save the backup article data NOW!',

	'admin:msg:NeedLogin' => 'You need to login first.',
	'admin:msg:ChangeSaved' => 'Changes have been saved.',
	'admin:msg:ChangeNotSaved' => 'Changes are not saved. Please check the Write permission of files in <strong>/conf/</strong> .',
	'admin:msg:NoData' => 'Some required data is missing.',
	'admin:msg:NotExist' => 'Requested item does not exist.',
	'admin:msg:Existed' => 'The new item ID already exists. Please choose a different one.',
	'admin:msg:QiniuError' => 'Qiniu Cloud Service error: ',
	'admin:msg:PclzipError' => 'Zip error: ',
	'admin:msg:DBError' => 'Database error: ',
	'admin:msg:CategoryNotEmpty' => 'You cannot delete a category that is not empty.',
	'admin:msg:NoContent' => 'This page has not been created yet.',
	'admin:msg:NoChangeID' => 'You cannot change the ID of an existing article.',

	'admin:item:AtAGlance' => 'Your website at a glance',
	'admin:item:xxArticles' => 'articles',
	'admin:item:xxArticleViews' => 'article views',
	'admin:item:xxPageViews' => 'page views',
	'admin:item:Sincexx' => 'Since',
	'admin:item:StartHere' => 'Start your journey here',
	'admin:item:WriteArticle' => 'Write an article',
	'admin:item:ChangeSetting' => 'Change your setting',
	'admin:item:BackupData' => 'Backup your data',
	'admin:item:BackHome' => 'Go to your homepage',
	'admin:item:MostPopular' => 'Most popular articles',
	'admin:item:RecentView' => 'Recently viewed pages',

	);
