# DBMS_Final_Project-托嬰小幫手
- 簡述
網頁的架構是使用html、CSS、java script所寫的，CRUD的功能則是使用PHP(內含SQL)所寫的
資料庫和網頁主要是使用xampp來連結兩者，資料庫是使用MariaDB
托嬰小幫手理念: 於網站中整理托嬰機構以及生育補助的資訊，讓使用者可以查詢以及收藏，也可以在評論區寫下對托嬰中心的評價，讓其他使用者可以參考，並將生育資料視覺化、展示一些對於生育率的分析，更有與生育相關的問答小遊戲增加趣味性。

- 如何安裝托嬰小幫手
1.安裝xampp和vscode
2.下載repository中的所有檔案
3.將所有檔案放入電腦中xampp資料夾下的hotdocs中
4.開啟xampp，點選apache、MySQL旁的start
5.打開phpMyAdmin，下載的檔案中有一個"new_insertion.sql"，將這個檔案import到資料庫裡

- 怎麼使用托嬰小幫手
1.每次使用前都要開啟xampp，點選apache、MySQL旁的start
2.打開瀏覽器輸入localhost/schedulingsystem/，即可出現登入的頁面，註冊帳號後登入即可使用網頁
更詳細解說可參考以下影片:
demo影片:https://drive.google.com/file/d/1GNvwJd-CzjReUIeKqU0iN0nyAL9GWpcx/view?usp=sharing

- 托嬰小幫手功能
1. 生育率小補帖：視覺化的圖表以及分析生育率高低的原因
2. 評論：使用者可以在評論區留下對托嬰中心的評價，使用者們可以分享、交流意見
3. 托嬰中心：列出該縣市所有托嬰中心的相關資訊，並附有地圖供使用者查看托嬰中心的地理位置
4. 我的最愛：被加入我的最愛的托嬰中心會顯示在我的最愛的列表當中
5. 小遊戲：有關生育率知識的問答小遊戲

參考來源:https://code-projects.org/simple-scheduling-system-in-php-with-source-code/
