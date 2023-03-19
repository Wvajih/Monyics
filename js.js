
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.querySelector(".menu_bar").style.top = "0";
  } else {
    document.querySelector(".menu_bar").style.top = "-700px";
  }
  prevScrollpos = currentScrollPos;
}
  function myFunction(x) {
    console.log(x.substr((x.length)-1,x.length)+'hi');
    if (x.substr((x.length)-1,x.length)=='a'){
      document.getElementById(x).style.cssText = 'background-color: transparent; color: rgba(220, 53, 69,1); ';
      document.getElementById(x).id=x.substr(0,(x.length)-1);
    }
    else{
      document.getElementById(x).style.cssText = 'background-color: rgba(220, 53, 69,.9); color: white; ';
      document.getElementById(x).id=x+'a';
    }
}
function Menubar(x) {
    console.log(x.substr((x.length)-1,x.length)+'hi2');
    console.log(window.innerWidth)
  if (window.innerWidth<700){
    if (x.substr((x.length)-1,x.length)=='a'){
      document.getElementById('menu_bar').style.left ='-200px';
      document.getElementById(x).id=x.substr(0,(x.length)-1);
    }
    else{
      document.getElementById('menu_bar').style.left='0px';
      document.getElementById(x).id=x+'a';
    }
  }
}
function OpenImg(id){
console.log(id);
let scrollPos = window.pageYOffset
console.log(scrollPos);
document.getElementById("imgSec2").src = id;
document.getElementById("imgSec1").style.cssText="position:absolute;top:"+scrollPos+"px;height:120vh ;width:100vw;backdrop-filter: blur(5px);";
}
function CloseImg(){
document.getElementById("imgSec1").style.display=("none");
}
function ShowHOT(){
  var x=`<div class="box">
      <?php
              $res=mysql_query("SELECT *FROM post where IdPost ='2'");
              $res0=mysql_query("SELECT COUNT(*) as number FROM post");
              $x=ceil(mysql_result($res0 ,0)/3);
              $s=floor(mysql_result($res0,0)/3);
              $p=0;
              $div=1;
              echo("<div class='dream'>");
              while($row =mysql_fetch_array($res)){
                  $res2=mysql_query("SELECT  ProfileImgPath FROM appuser WHERE  IdUser  = $row[1]");
                  $row2=mysql_fetch_array($res2);
                  
                  if ($x==$p){
                    echo("</div>");
                    echo("<div class='dream'>");
                    $x=$x*2;
                    $div++;
                    if ($div==3){
                        $x=$s;
                    }
                    

                  }
                  $p++;
                  echo('<div class="dream-item"><button style="background-color:transparent;border:none;width:100%";"type="button" id="'.$row[6].'" onclick="OpenImg(id)"><img src="'.$row[6].'" style="width:100%;" alt=""></button><div class="imgdetaille"><button type="button" id="Like1'.$row[0].'"class="btn-outline-danger" onclick="myFunction(id)">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart"  viewBox="0 0 16 16">
    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
  </svg>
                                  </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="Com1'.$row[0].'">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
    <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
  </svg>
               
                </button><button type="button" class="btn-outline-danger" onclick="myFunction(id)"  id="trans1'.$row[0].'">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"></path>
  </svg>
                 
                </button><button type="button" class="outline-danger" style="padding: 0px ; padding-top: 0px; width: 60px !important; height: 40px !important; float: right; border: none; margin-right: 30px;" onclick="myFunction(id)"  id="trans">
                  <a href="Profile.html"> <img src="'.$row2[0].'" alt="p" style="width: 60px; height: 40px; margin: 0px; border-radius: 5px;margin-top: -5px;"></a>
                 
                </button></div></div>');
              }
              echo("</div>");
          ?>
      </div>`;
  console.log("clicked");
  document.getElementById("bod").innerHTML=x;
}
function ShowPhotographers(){
  document.getElementById("HOT").classList.remove("ip1");
  document.getElementById("INSPIRATION").classList.remove("ip1");
  document.getElementById("NEWEST").classList.remove("ip1");
  document.getElementById("PHOTOGRAPHERS").classList.add("ip1");
  document.getElementById("MODELS").classList.remove("ip1");
  document.getElementById("STORIES").classList.remove("ip1");
  var x=`<div class="box"style='flex-direction:column'>
      <?php
              echo("<div class='s' style='width:80VW;display:block;height:100px;'>");
              echo"<p style='text-align:center'><input style='width:500px;margin:0;margin-bottom:30px' type='search' placeholder='Search For Photographers'/></p>";
              echo("</div>");
              $res=mysql_query("SELECT *FROM appuser where TYPE like'photographer'");
              echo("<div class='Profiles'>");
              while($row =mysql_fetch_array($res)){
                echo"<div class='PMD' style='height:70px;border-bottom:1px solid rgba(122,122,122,.5);margin-bottom:30px'>";
                  echo"<div class='PotoD' style='width:70px;display:block;float:left'>";
                    echo"<img style='width:50px;height:50px;border-radius:50%' src='$row[8]'/alt='$row[4]'>";
                  echo"</div>";
                  echo"<div class='PotoD' style='width:70VW;float:right;display:block;'>";
                    echo "<p style='color:white;'>$row[4]</p>" ;
                  echo"</div>";
                echo"</div>";
              }
              echo("</div>");
          ?>
      </div>`;
  document.getElementById("bod").innerHTML=x;
}