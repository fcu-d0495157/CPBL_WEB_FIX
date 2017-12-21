# CPBL_WEB_FIX
群眾外包修正壘包狀況網頁
架設環境
一.	IIS
使用Windows 10 如何設定IIS， 
(1)	首先我們在桌面點擊左下角的【開始】  
![Aaron Swartz](https://github.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/11.jpg)
(2)	點擊【設定】 
 
(3)	點擊【系統】 
(4)	點擊【應用程式與功能】 
(5)	然後點擊右邊程式名單的最下方【程式與功能】 
(6)	點擊【開啟或關閉Windows功能】 
(7)	在開啟或關閉Windows功能裡就可以看到【Internet Information Server】這個選項。依照個人的需求看要取消方塊來關閉IIS，或者開啟IIS。 
(8)	最後就是等套用變更完成囉。 
(9)	虛擬目錄設定：點開始旁邊的【搜尋】輸入IIS開啟 
(10)	點選ASP進入設定 
 
(11)	通常把上層目錄開啟 
(12)	然後點選左邊主機名稱底下的預設網頁，右邊欄位找到【新增虛擬目錄】 
別名的話，會出現在你將來的網址上，例如：http://[你的IP]/別名/子資料夾/檔名.xxx
 
(13)	不想讓別人更改我的主機內部資料，所以只開放讀取：  

二.	Notepad++
(1)	到Notepad++官網(https://notepad-plus-plus.org/zh/)，點選下載。
(2)	選擇目前電腦適當的作業系統來安裝。
(3)	持續按下一步，直到安裝完成。
 
三.	SQLite
(1)	到SQLite官網(https://www.sqlite.org/)，點選Download。 
(2)	選擇目前電腦適當的作業系統來安裝。(紅框框是我目前適當的選擇) 
(3)	再載完後解壓縮，就OK了。
 
四.	程式碼 如內容(使用Notepad++開啟)
(1)	signin.php   
 
(2)	index.php   
 
(3)	Instructions.php    
(4)	num_logfile.php    
 
(5)	fix_datebase2016.php         

 
(6)	update.php   
上圖CPBL跟改失敗原因為資料已經到盡頭無法抓取資料，所以要跳轉到刪除使用者紀錄，好方便讓下一次使用者從頭看起。
(7)	delect_user.php 
(8)	goback.php 
網頁操作方式：https://youtu.be/SREaWZKkrq0

