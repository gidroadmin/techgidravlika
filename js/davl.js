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
            if(formName[radioName][8].checked){
            j=8
          }
      }
      
      var x;
        x= new Array(2);
          x=[[1,100000,9.81,98100,133.32,9810,98100,101325,6894.76],[0.00001,1,0.0000981,0.981,0.00133,0.0981,0.981,1.01,0.068948],[0.102,10200,1,10000,13.6,1000,10000,10330,703.26552],[0.0000102,1.02,0.0001,1,0.00136,0.1,1,1.033,0.07032655],[0.0075,750,0.0735,735.5,1,73.556,736,760,51.7107],[0.000102,10.2,0.001,10,0.0136,1,10,10.33,0.70326552],[0.0000102,1.02,0.0001,1,0.00136,0.1,1,1.033,0.07032655],[0.00001054,1.054,0.0001033,0.968,0.00132,0.0968,0.968,1,0.07267077] , [0.000145,14.504,0.00142245,14.2245,0.019337,1.4223,14.223,14.696,1]];
      
      var f;
        document.getElementById("Pa").innerHTML=' ';
          for(var i=0;i<=9;i++){
            f=document.myform.text1.value*x[i][j];
            f1=Math.round(f*100000000)/100000000
                      document.getElementById("Pa").innerHTML+=f1+'<br>';
          }
      }