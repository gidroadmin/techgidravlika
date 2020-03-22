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
  }
  
  var x;
    x= new Array(2);
      x=[[1,1000,10000,0.001,1.163,41868],[0.001,1,10,0.000001,0.001163,41.868],[0.0001,0.1,1,0.0000001,0.0001163,4.1868],[1000,1000000,10000000,1,116300,41869000],[0.8598,859.8,8598,0.0008598,1,3600],[0.00002389,0.02389,0.2389,0.0000000239,0.00002778,1]];
  
  var f;
    document.getElementById("Pa").innerHTML=' ';
      for(var i=0;i<=5;i++){
        f=document.myform.text1.value*x[i][j];
        f1=Math.round(f*100000000)/100000000
          document.getElementById("Pa").innerHTML+=f1+'<br>';
      }
  }