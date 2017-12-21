# CPBL_WEB_FIX
群眾外包修正壘包狀況網頁
架設環境
一.	IIS
使用Windows 10 如何設定IIS， 


(1)	首先我們在桌面點擊左下角的【開始】  
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/11.jpg)


(2)	點擊【設定】 
 ![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/12.jpg)
 
 
(3)	點擊【系統】 
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/13.jpg)


(4)	點擊【應用程式與功能】 
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/14.jpg)


(5)	然後點擊右邊程式名單的最下方【程式與功能】 
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/15.jpg)


(6)	點擊【開啟或關閉Windows功能】 
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/16.jpg)


(7)	在開啟或關閉Windows功能裡就可以看到【Internet Information Server】這個選項。依照個人的需求看要取消方塊來關閉IIS，或者開啟IIS。
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/17.jpg)


(8)	最後就是等套用變更完成囉。 
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/18.jpg)


(9)	虛擬目錄設定：點開始旁邊的【搜尋】輸入IIS開啟 
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/19.jpg)


(10)	點選ASP進入設定 
 ![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/110.jpg)
 
 
(11)	通常把上層目錄開啟 
 ![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/111.jpg)
 
 
(12)	然後點選左邊主機名稱底下的預設網頁，右邊欄位找到【新增虛擬目錄】 
 ![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/112.jpg)
 
 
別名的話，會出現在你將來的網址上，例如：http://[你的IP]/別名/子資料夾/檔名.xxx
 
 
(13)	不想讓別人更改我的主機內部資料，所以只開放讀取：
 ![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/113.jpg)
 

二.	Notepad++


(1)	到Notepad++官網(https://notepad-plus-plus.org/zh/)，點選下載。
 ![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/21.jpg)
 
 
(2)	選擇目前電腦適當的作業系統來安裝。
 ![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/22.jpg)
 
 
(3)	持續按下一步，直到安裝完成。
 
三.	SQLite


(1)	到SQLite官網(https://www.sqlite.org/)，點選Download。 
 ![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/31.jpg)
 

(2)	選擇目前電腦適當的作業系統來安裝。(紅框框是我目前適當的選擇) 
 ![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/32.jpg)
 

(3)	再載完後解壓縮，就OK了。
 
 
四.	程式碼 如內容(使用Notepad++開啟)


(1)	signin.php   
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/41.jpg)
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/42.jpg)
  
  
(2)	index.php   
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/43.jpg)
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/44.jpg)
 
 
(3)	Instructions.php    
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/45.jpg)
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/46.jpg)


(4)	num_logfile.php    
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/47.jpg)
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/48.jpg)
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/49.jpg)
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/410.jpg)
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/411.jpg)
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/412.jpg)
 
 
(5)	fix_datebase2016.php         
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/413.jpg)
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/414.jpg)
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/415.jpg)
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/416.jpg)
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/417.jpg)
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/418.jpg)
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/419.jpg)
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/420.jpg)
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/421.jpg)
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/422.jpg)
 
 
(6)	update.php   
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/423.jpg)
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/424.jpg)
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/425.jpg)


上圖CPBL跟改失敗原因為資料已經到盡頭無法抓取資料，所以要跳轉到刪除使用者紀錄，好方便讓下一次使用者從頭看起。


(7)	delect_user.php 
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/426.jpg)

(8)	goback.php 
![Aaron Swartz](https://raw.githubusercontent.com/fcu-d0495157/CPBL_WEB_FIX/master/my_img/427.jpg)


網頁操作方式：https://youtu.be/SREaWZKkrq0

