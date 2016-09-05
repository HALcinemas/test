/*
【メインビジュアル背景色は配列 colors[] にいれておこう】

WOMEN −＞ #f9e7e5
MEN   −＞ #a9b6d7
KIDS  −＞ #f9f9a7
BAG   −＞ #e5f9c4
HOME  −＞ #eeeeee

*/
sa1=new Array();
//カラーコードを配列に代入する
bgc = new Array();
bgc[0] = "#f9e7e5";
bgc[1] = "#a9b6d7";
bgc[2] = "#f9f9a7";
bgc[3] = "#e5f9c4";
bgc[4] = "#eeeeee";


//ページが表示されたときに実行する関数
window.onload = function(){
  var r = Math.floor(Math.random()*5)+1;
  document.getElementById("visual").style.backgroundImage = "url(./img/main"+r+".png)";

  n = Math.floor(Math.random()*bgc.length);
  document.getElementById("mainVisual").style.backgroundColor = bgc[n];

  var navi = document.getElementsByTagName('li');
   navi[0].addEventListener('click',function(){
     document.getElementById("visual").style.backgroundImage = "url(./img/main1.png)";
   });
   var navi = document.getElementsByTagName('li');
    navi[1].addEventListener('click',function(){
      document.getElementById("visual").style.backgroundImage = "url(./img/main2.png)";
    });
   var navi = document.getElementsByTagName('li');
     navi[2].addEventListener('click',function(){
       document.getElementById("visual").style.backgroundImage = "url(./img/main3.png)";
     });
     var navi = document.getElementsByTagName('li');
      navi[3].addEventListener('click',function(){
        document.getElementById("visual").style.backgroundImage = "url(./img/main4.png)";
      });
      var navi = document.getElementsByTagName('li');
       navi[4].addEventListener('click',function(){
         document.getElementById("visual").style.backgroundImage = "url(./img/main5.png)";
       });

   var sub = document.getElementsByTagName('a');
   sub[0].addEventListener('mouseover',function(){
     document.getElementById("category1").style.display = "block";
   });
   sub[0].addEventListener('mouseout',function(){
     document.getElementById("category1").style.display = "none";
   });
   sub[1].addEventListener('mouseover',function(){
     document.getElementById("category2").style.display = "block";
   });
   sub[1].addEventListener('mouseout',function(){
     document.getElementById("category2").style.display = "none";
   });
   sub[2].addEventListener('mouseover',function(){
     document.getElementById("category3").style.display = "block";
   });
   sub[2].addEventListener('mouseout',function(){
     document.getElementById("category3").style.display = "none";
   });
   sub[3].addEventListener('mouseover',function(){
     document.getElementById("category4").style.display = "block";
   });
   sub[3].addEventListener('mouseout',function(){
     document.getElementById("category4").style.display = "none";
   });
   sub[4].addEventListener('mouseover',function(){
     document.getElementById("category5").style.display = "block";
   });
   sub[4].addEventListener('mouseout',function(){
     document.getElementById("category5").style.display = "none";
   });
   sub[5].addEventListener('mouseover',function(){
     document.getElementById("category6").style.display = "block";
   });
   sub[5].addEventListener('mouseout',function(){
     document.getElementById("category6").style.display = "none";
   });

   var togle = document.getElementsByTagName('p');
   var flag = false;
   togle[0].addEventListener('click',function(){
     flag = !flag;
     if (flag == true) {
       document.getElementById("buttons1").style.display = "block";
     }else {
       document.getElementById("buttons1").style.display = "none";
     }
   });
   togle[1].addEventListener('click',function(){
     flag = !flag;
     if (flag == true) {
       document.getElementById("buttons1").style.display = "block";
     }else {
       document.getElementById("buttons1").style.display = "none";
     }
   });
   togle[2].addEventListener('click',function(){
     flag = !flag;
     if (flag == true) {
       document.getElementById("buttons2").style.display = "block";
     }else {
       document.getElementById("buttons2").style.display = "none";
     }
   });
   togle[3].addEventListener('click',function(){
     flag = !flag;
     if (flag == true) {
       document.getElementById("buttons2").style.display = "block";
     }else {
       document.getElementById("buttons2").style.display = "none";
     }
   });
   togle[4].addEventListener('click',function(){
     flag = !flag;
     if (flag == true) {
       document.getElementById("buttons3").style.display = "block";
     }else {
       document.getElementById("buttons3").style.display = "none";
     }
   });
   togle[5].addEventListener('click',function(){
     flag = !flag;
     if (flag == true) {
       document.getElementById("buttons3").style.display = "block";
     }else {
       document.getElementById("buttons3").style.display = "none";
     }
   });
   togle[6].addEventListener('click',function(){
     flag = !flag;
     if (flag == true) {
       document.getElementById("buttons4").style.display = "block";
     }else {
       document.getElementById("buttons4").style.display = "none";
     }
   });
   togle[7].addEventListener('click',function(){
     flag = !flag;
     if (flag == true) {
       document.getElementById("buttons4").style.display = "block";
     }else {
       document.getElementById("buttons4").style.display = "none";
     }
   });
   togle[8].addEventListener('click',function(){
     flag = !flag;
     if (flag == true) {
       document.getElementById("buttons5").style.display = "block";
     }else {
       document.getElementById("buttons5").style.display = "none";
     }
   });
   togle[9].addEventListener('click',function(){
     flag = !flag;
     if (flag == true) {
       document.getElementById("buttons5").style.display = "block";
     }else {
       document.getElementById("buttons5").style.display = "none";
     }
   });
   togle[10].addEventListener('click',function(){
     flag = !flag;
     if (flag == true) {
       document.getElementById("buttons6").style.display = "block";
     }else {
       document.getElementById("buttons6").style.display = "none";
     }
   });
   togle[11].addEventListener('click',function(){
     flag = !flag;
     if (flag == true) {
       document.getElementById("buttons6").style.display = "block";
     }else {
       document.getElementById("buttons6").style.display = "none";
     }
   });
   togle[12].addEventListener('click',function(){
     flag = !flag;
     if (flag == true) {
       document.getElementById("buttons7").style.display = "block";
     }else {
       document.getElementById("buttons7").style.display = "none";
     }
   });
   togle[13].addEventListener('click',function(){
     flag = !flag;
     if (flag == true) {
       document.getElementById("buttons7").style.display = "block";
     }else {
       document.getElementById("buttons7").style.display = "none";
     }
   });
   togle[14].addEventListener('click',function(){
     flag = !flag;
     if (flag == true) {
       document.getElementById("buttons8").style.display = "block";
     }else {
       document.getElementById("buttons8").style.display = "none";
     }
   });
   togle[15].addEventListener('click',function(){
     flag = !flag;
     if (flag == true) {
       document.getElementById("buttons8").style.display = "block";
     }else {
       document.getElementById("buttons8").style.display = "none";
     }
   });


   var check = document.getElementsByTagName('li');

   var check01 = document.getElementById("fav1");
   var check02 = document.getElementById("fav2");
   var check03 = document.getElementById("fav3");
   var check04 = document.getElementById("fav4");
   var check05 = document.getElementById("fav5");
   var check06 = document.getElementById("fav6");
   var check07 = document.getElementById("fav7");
   var check08 = document.getElementById("fav8");
//1
   check[60].addEventListener('click',function(){
       document.getElementById("fav1").style.display = "block";
       check[60].style.display = "none";
   });
   check01.addEventListener('click',function(){
     document.getElementById("fav1").style.display = "none";
     check[60].style.display = "block";
   });
//2
   check[62].addEventListener('click',function(){
       document.getElementById("fav2").style.display = "block";
       check[62].style.display = "none";
   });
   check02.addEventListener('click',function(){
     document.getElementById("fav2").style.display = "none";
     check[62].style.display = "block";
   });
//3
check[64].addEventListener('click',function(){
    document.getElementById("fav3").style.display = "block";
    check[64].style.display = "none";
});
check03.addEventListener('click',function(){
  document.getElementById("fav3").style.display = "none";
  check[64].style.display = "block";
});
//4
check[66].addEventListener('click',function(){
    document.getElementById("fav4").style.display = "block";
    check[66].style.display = "none";
});
check04.addEventListener('click',function(){
  document.getElementById("fav4").style.display = "none";
  check[66].style.display = "block";
});
//5
check[68].addEventListener('click',function(){
    document.getElementById("fav5").style.display = "block";
    check[68].style.display = "none";
});
check05.addEventListener('click',function(){
  document.getElementById("fav5").style.display = "none";
  check[68].style.display = "block";
});
//6
check[70].addEventListener('click',function(){
    document.getElementById("fav6").style.display = "block";
    check[70].style.display = "none";
});
check06.addEventListener('click',function(){
  document.getElementById("fav6").style.display = "none";
  check[70].style.display = "block";
});
//7
check[72].addEventListener('click',function(){
    document.getElementById("fav7").style.display = "block";
    check[72].style.display = "none";
});
check07.addEventListener('click',function(){
  document.getElementById("fav7").style.display = "none";
  check[72].style.display = "block";
});
//8
check[74].addEventListener('click',function(){
    document.getElementById("fav8").style.display = "block";
    check[74].style.display = "none";
});
check08.addEventListener('click',function(){
  document.getElementById("fav8").style.display = "none";
  check[74].style.display = "block";
});
}




/*あとは自分で関数を追加していく*/
