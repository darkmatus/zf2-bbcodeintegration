zf2-bbcodeintegration
=====================

Integration of Decoda bbcode parser as ViewHelper in ZF2

Installation:

Copy/move the 'emoticons' folder from 'vendor/mjohnson/decoda' to 'public/images/'.
Add 'ZF2Bbcode' to your 'application.config.php'.

Using:

In your view use it like every other viewHelper:

echo $this->bbcode('[b]I'm a BBCode[/b]');
or
echo $this->escapeHtml($this->bbcode('[b]I'm a BBCode[/b]');
