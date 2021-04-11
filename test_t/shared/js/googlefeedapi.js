
google.load("feeds", "1");  
function initialize()
{  
 //RSS�t�B�[�h�̎擾
 var feed = new google.feeds.Feed("http://feedblog.ameba.jp/rss/ameblo/hytnh0708/rss20.xml");  
 
 //�擾����t�B�[�h��
 feed.setNumEntries(2)
 
 //���ۂɓǂލ���
 feed.load(function(result)
 {  
 
  //�ǂݍ��߂�������
  if (!result.error)
  {
   //�\��������I��
   var container = document.getElementById("feed");
  
   //�ϐ��̏�����
   var list = "";
  
   //Feed�̏���
   for (var i = 0; i < result.feed.entries.length; i++)
   {  
    //Feed������o
    var entry = result.feed.entries[i];
 if(entry.title.match(/^PR:/)) {
 //�uPR:�v����n�܂���̂�����Ή������Ȃ�
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

//���t�̕\�����@��ύX
function createDateString(publishedDate)
{
 var pdate = new Date(publishedDate);
 var pday = pdate.getDate();
 var pmonth = pdate.getMonth() + 1;
 var pyear = pdate.getFullYear();
 var phour = pdate.getHours();
 var pminute = pdate.getMinutes();
 var psecond = pdate.getSeconds();
 //var strdate = pyear + "�N" + pmonth + "��" + pday + "��" + phour + "��" + pminute + "��" + psecond + "�b";
 var strdate = pyear + "." + pmonth + "." + pday ;
 return strdate;
}

google.setOnLoadCallback(initialize);  

  