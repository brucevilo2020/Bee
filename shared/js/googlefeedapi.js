
google.load("feeds", "1");  
function initialize()
{  
 //RSSフィードの取得
 var feed = new google.feeds.Feed("http://feedblog.ameba.jp/rss/ameblo/hytnh0708/rss20.xml");  
 
 //取得するフィード数
 feed.setNumEntries(2)
 
 //実際に読む込む
 feed.load(function(result)
 {  
 
  //読み込めたか判別
  if (!result.error)
  {
   //表示部分を選択
   var container = document.getElementById("feed");
  
   //変数の初期化
   var list = "";
  
   //Feedの処理
   for (var i = 0; i < result.feed.entries.length; i++)
   {  
    //Feedを一つ抽出
    var entry = result.feed.entries[i];
 if(entry.title.match(/^PR:/)) {
 //「PR:」から始まるものがあれば何もしない
 }
 else{
    var div = document.createElement("li");  
    var a = document.createElement("a");
    var strdate = createDateString(entry.publishedDate);
    a.href = entry.link;  
          var list = entry.title + " (" + strdate + ")" ;  
          a.appendChild(document.createTextNode(list));  
          div.appendChild(a);  
          container.appendChild(div);  
        }
  
  }  
     }  
   });  
}

//日付の表示方法を変更
function createDateString(publishedDate)
{
 var pdate = new Date(publishedDate);
 var pday = pdate.getDate();
 var pmonth = pdate.getMonth() + 1;
 var pyear = pdate.getFullYear();
 var phour = pdate.getHours();
 var pminute = pdate.getMinutes();
 var psecond = pdate.getSeconds();
 //var strdate = pyear + "年" + pmonth + "月" + pday + "日" + phour + "時" + pminute + "分" + psecond + "秒";
 var strdate = pyear + "." + pmonth + "." + pday ;
 return strdate;
}

google.setOnLoadCallback(initialize);  

  