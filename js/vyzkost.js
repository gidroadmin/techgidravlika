
function chkRads(){

  if (window.document.myform.text1.value=="")
  return alert("Заполните поле");
  
  var stroka=document.myform.text1.value
      for (var j=0;j<=stroka.length - 1;j=j+1)
    {
     var s=stroka.charAt (j)
     if (s==","){
                       document.myform.text1.select()
           return alert("Введите значение через точку!")
                       break
           }
    }
  
  formName = document.forms["myform"]
  
  radioName="rad"
  var j;
    for(var i=0; i<formName[radioName].length; i++){
  
      if(formName[radioName][0].checked){
        j=0
      }
      if(formName[radioName][1].checked){
        j=1
      }
      if(formName[radioName][2].checked){
        j=2
      }
      if(formName[radioName][3].checked){
        j=3
      }
    if(formName[radioName][4].checked){
        j=4
      }
    if(formName[radioName][5].checked){
        j=5
      }
    if(formName[radioName][6].checked){
        j=6
      }
    if(formName[radioName][7].checked){
        j=7
      }
  }
  
  var x;
    x= new Array(2);
      x=[[1,10000, 1000000, 10000000,2780, 98100000, 14880000, 4130],[0.0001, 1, 100, 1000, 0.278, 9810, 1488, 0.413],[0.000001, 0.01, 1, 10, 0.00278,98.1,14.88,0.00413],[0.0000001, 0.001, 0.1,1,0.000278, 9.81,1.488,0.000413],[0.00036,3.6,360,3600,1,35300,5360,1.488],[0.0000000102,0.000102,0.0102,0.102,0.0000283,1, 0.152,0.0000422],[0.0000000672, 0.000672,0.0672,0.672,0.0001867,6.592,1, 0.000278],[0.000242,2.42,242,2420,0.672, 23730, 3600,1]];
  
  var f;
    document.getElementById("Pa").innerHTML=' ';
      for(var i=0;i<=7;i++){
        f=document.myform.text1.value*x[i][j];
        f1=Math.round(f*100000000)/100000000
          document.getElementById("Pa").innerHTML+=f1+'<br>';
      }
  }