function ReloadButton()
       {
              window.document.Rashod.Q.value="";
              window.document.Vyzkost.Nu.value="";
              window.document.Diametr.D.value="";
              window.document.Diametr.D.value="";
              window.document.Dlina.L.value="";
              window.document.Plotnost.Ro.value="";
                    
              document.getElementById('Rez_Rezhim').innerHTML="&nbsp"
              document.getElementById('Rez_V').innerHTML = "&nbsp";
              document.getElementById(id='Rez_Re').innerHTML ="&nbsp";
              document.getElementById(id='Rez_Lam').innerHTML ="&nbsp";
              document.getElementById(id='Rez_ksi').innerHTML ="&nbsp";
              document.getElementById(id='Rez_dP').innerHTML="&nbsp";
       }
                    
function Re() {
                    
              if (window.document.Rashod.Q.value=="" || window.document.Vyzkost.Nu.value=="" || window.document.Diametr.D.value=="" || window.document.Dlina.L.value=="" || window.document.Plotnost.Ro.value=="" || window.document.Sherohovatost.delta.value=="")
              return alert("Заполните поля");
                    
                    for (var i=0;i<=7;i=i+1)
                    {
                    var stroka=document.forms[i].elements[0].value
                        for (var j=0;j<=stroka.length - 1;j=j+1)
                        {
                         var s=stroka.charAt (j)
                         if (s==","){
                                         document.forms[i].elements[0].select()
                                 return alert("Введите значение через точку!")
                                         break
                                 }
                        }
                    }
                    
                    
                     var Q1=parseFloat (window.document.Rashod.Q.value)
                     var Nu=parseFloat (window.document.Vyzkost.Nu.value)
                     var D=parseFloat (window.document.Diametr.D.value)
                     var L=parseFloat (window.document.Dlina.L.value)
                     var Ro=parseFloat (window.document.Plotnost.Ro.value)
                    
                     var F;
                     var Q;
                     var V;
                     var Re;
                     var x;
                    
                     F=(3.14*D*D)/4
                     Q=(Q1*0.001)/60
                     V=Q/F
                     Re=V*D/Nu

                     if (Re<2000)
                            document.getElementById('Rez_Rezhim').innerHTML = 'Ламинарный';
                           else if (Re>=2000 && Re<=4000 )
                            document.getElementById('Rez_Rezhim').innerHTML ='Переходной'
                           else
                            document.getElementById('Rez_Rezhim').innerHTML ='Турбулентный'
                    
                             aa=parseFloat(window.document.Sherohovatost.delta.value)
                       
                             x=0.11*Math.pow((aa/D+68/Re),0.25)
                            
                            //document.writeln("x = "+parseFloat(x));document.writeln("aa = "+parseFloat(aa))  ;document.writeln("D = "+parseFloat(D))  ;document.writeln("Re = "+parseFloat(Re))
                          
                    if (Re>=(15*D/aa)) {Lam=x}
                    else {
                        if (Re<2000){Lam=64/Re}
                        else {
                            if (Re<=4000){Lam=0.3164/Math.pow(Re,0.25)}
                            else {Lam=1/Math.pow((1.8*(Math.log(Re)/Math.log(10))-1.64),2)}}}
                                      
                            ksi=Lam*L/D
                            dp=(ksi*Ro*(V*V))/2
                            
                            <!--заполнение полей-->
                     document.getElementById('Rez_V').innerHTML =V.toFixed(2);
                     document.getElementById(id='Rez_Re').innerHTML =Re.toFixed(2);
                     document.getElementById(id='Rez_Lam').innerHTML =Lam.toFixed(3);
                     document.getElementById(id='Rez_ksi').innerHTML =ksi.toFixed(2);
                     document.getElementById(id='Rez_dP').innerHTML=dp.toFixed(3);
              }                         
                    
                                                        
function Sherohov() {
                                      
                     a=parseFloat(Tip.Tip_trub.selectedIndex)
                          
                     if (a==0)
                          (document.Sherohovatost.delta.value="")
                     else if (a==1)
                           (document.Sherohovatost.delta.value=0.000009)
                           //(alert("warning"))
                     else if  (a==2)
                           (document.Sherohovatost.delta.value=0.00004) 
                     else if  (a==3)
                           (document.Sherohovatost.delta.value=0.0002) 
                     else if  (a==4)
                           (document.Sherohovatost.delta.value=0.00008) 
                     else if  (a==5)
                           (document.Sherohovatost.delta.value=0.0005) 
                     else if  (a==6)
                           (document.Sherohovatost.delta.value=0.00004) 
                     else if  (a==7)
                           (document.Sherohovatost.delta.value=0.0001) 
                     else if  (a==8)
                           (document.Sherohovatost.delta.value=0.001) 
                     else if  (a==9)
                           (document.Sherohovatost.delta.value=0.0014) 
                     else if  (a==10)
                           (document.Sherohovatost.delta.value=0.0003) 
                     else if  (a==11)
                           (document.Sherohovatost.delta.value=0.0001)
                     else if  (a==12)
                           (document.Sherohovatost.delta.value=0.00001)
                     else if  (a==13)
                           (document.Sherohovatost.delta.value=0.00001)
            }

