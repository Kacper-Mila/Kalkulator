
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <link href="css/fontello.css" rel="stylesheet" type="text/css">

</head>

<body>

<div id="container">
        <div id="logo">
           <div class="logoL"> 
               <img src="obrazy/logoNowe.png" width="150" height="150">
            </div>
            
            <div class="logoR">
                <p></p>
                Zespół Szkół Technicznych
                <p>Bytom</p>
            </div>
            
            <div style="clear: both;"></div>
        </div>

        <div class="menu">
            <ol>
                <li><a href="index.html">Strona główna</a></li>
                <li><a href="kalkulator.html">Kalkulator</a>
                
                    <ul>

                        <li><a href="infMech.php">Informatyk</a></li>
                        <li><a href="nonInfMech.php">Geodeta</a></li>
                        <li><a href="nonInfMech.php">Ekonomista</a></li>
                        <li><a href="nonInfMech.php">UiSEO</a></li>
                        <li><a href="infMech.php">Mechatronik</a></li>
                        
                    </ul>

                </li>
            </ol>
        </div>

        <div id="topbar">

        </div>

        <div id="sidebar">
            <div class="optionSidebar">
                <a href="informatyk.html">Technik Informatyk</a>
            </div>
            
            <div class="optionSidebar">
                <a href="geodeta.html">Technik Geodeta</a>
            </div>
            
            <div class="optionSidebar">
                <a href="ekonomista.html">Technik Ekonomista</a>
            </div>

            <div class="optionSidebar">
                <a href="uiseo.html">Technik UiSEO</a>
            </div>

            <div class="optionSidebar">
                <a href="mechatronik.html">Technik Mechatronik</a>
            </div>

            <div class="optionSidebar">
                <a href="loremipsum.html">Lorem Ipsum</a>
            </div>

            <div style="clear: both;"></div>
        </div>

        <div id="content">
            <span class="bigtitle">Kierunki kształcenia w roku szkolnym 2020/2021</span>
            
            <div class="linia"></div>
            
            <table>
	<form  action="InfMech.php" method="post">
		<thead>
			<tr>
     			<th scope="col">Oceny</th>
      			<th scope="col">Procenty z egzaminów</th>
			</tr>
		</thead>
		<tr>
            <td>
                J.Polski 
                <select name="polski" id="polski" size="liczba wyświetlanych pozycji">
				    <option value="18"> Celujący</option>
				    <option value="17"> Bardzo Dobry</option>
				    <option value="14"> Dobry</option>
				    <option value="8"> Dostateczny</option>
				    <option value="2"> Dopuszczający</option>
		        </select><br>
            
                Matematyka 
                <select name="matematyka" id="matematyka" size="liczba wyświetlanych pozycji">
				    <option value="18"> Celujący</option>
				    <option value="17"> Bardzo Dobry</option>
				    <option value="14"> Dobry</option>
				    <option value="8"> Dostateczny</option>
				    <option value="2"> Dopuszczający</option>
				</select><br>
            
                Język Obcy Wiodący 
                <select name="jezykObcy" id="jezykObcy" size="liczba wyświetlanych pozycji">
				    <option value="18"> Celujący</option>
				    <option value="17"> Bardzo Dobry</option>
				    <option value="14"> Dobry</option>
				    <option value="8"> Dostateczny</option>
				    <option value="2"> Dopuszczający</option>
				</select><br>
            
                Fizyka
                <select name="fizyka" id="fizyka" size="liczba wyświetlanych pozycji">
				    <option value="18"> Celujący</option>
				    <option value="17"> Bardzo Dobry</option>
				    <option value="14"> Dobry</option>
				    <option value="8"> Dostateczny</option>
				    <option value="2"> Dopuszczający</option>
				</select><br>
			</td>
        
            <td>
                Język Polski
                <input type="number" id="egzaminPolski" name="egzaminPolski" size="3" min="0" max="100"><br>
                
                Matematyka 
                <input type="number" id="egzaminMatematyka" name="egzaminMatematyka" size="3" min="0" max="100"><br>
                
                Język Obcy Wiodący
                <input type="number" id="egzaminJezykObcy" name="egzaminJezykObcy" size="3" min="0" max="100">
		    </td>
        </tr>
        
        <tr>
			<td colspan="2">
                Świadectwo z wyróżnieniem 
                <input type="checkbox" id="swiadectwo" name="swiadectwo" value="7" ><br>
            </td>
		</tr>
        
        <tr>
			<td colspan="2">
                Wolontariat 
                <input type="checkbox" id="wolontariat" name="wolontariat" value="3"><br>
            </td>
		</tr>
        
        <tr>
     		<td scope="col" colspan="2"><b>Jesteś posiadaczem:</b></td>
		</tr>
        
        <tr>
		    <td>
		        <label>
		            <input type="checkbox" id="t1" name="t1" value="10">
                    Tytułu finalisty konkursu przedmiotowego
                </label>
		        <p>
            
                <label>
		            <input type="checkbox" id="t2" name="t2" value="7">
                    Tytułu laureata konkursu tematycznego lub interdyscyplinarnego
                </label>
		        <p>
            
                <label>
		            <input type="checkbox" id="t3" name="t3" value="5">
                    Tytułu finalisty konkursu tematycznego lub interdyscyplinarnego
                </label>
		        <br>
            
                <label>
		            <input type="checkbox" name="t4" value="10" id="t4">
                    Tytułu finalisty konkursu z przedmiotu lub przedmiotów artystycznych objętych ramowym planem nauczania szkoły artystycznej 
                </label>
		        <br>
            
                <label>
		            <input type="checkbox" name="t5" value="4" id="t5">
                    Tytułu laureata turnieju z przedmiotu lub przedmiotów artystycznych nieobjętych ramowym planem nauczania szkoły artystycznej
                </label>
		        <br>
            
                <label>
		            <input type="checkbox" name="t6" value="3" id="t6">
                    Tytułu finalisty turnieju z przedmiotu lub przedmiotów artystycznych nieobjętych ramowym planem nauczania szkoły artystycznej  
                </label>
		        <br>
            
                <label>
		            <input type="checkbox" name="t7" value="10" id="t7">
                    Dwóch lub więcej tytułów finalisty konkursu przedmiotowego 
                </label>
		        <br>
            
                <label>
		            <input type="checkbox" name="t8" value="7" id="t8">
                    Dwóch lub więcej tytułów laureata konkursu tematycznego lub interdyscyplinarnego 
                </label>
		        <br>
            
                <label>
		            <input type="checkbox" name="t9" value="5" id="t9">
                    Dwóch lub więcej tytułów finalisty konkursu tematycznego lub interdyscyplinarnego 
                </label>
		        <br>
            
                <label>
		            <input type="checkbox" name="t10" value="7" id="t10">
                    Tytułu finalisty konkursu przedmiotowego 
                </label>
		        <br>
            
                <label>
		            <input type="checkbox" name="t11" value="5" id="t11">
                    Tytułu laureata konkursu tematycznego lub interdyscyplinarnego 
                </label>
                <br>
            
                <label>
		            <input type="checkbox" name="t12" value="3" id="t12">
                    Tytułu finalisty konkursu tematycznego lub interdyscyplinarnego 
                </label>
		        <br>
            
                <label>
		            <input type="checkbox" name="t13" value="10" id="t13">
                    Dwóch lub więcej tytułów finalisty konkursu z przedmiotu lub przedmiotów artystycznych objętych ramowym planem nauczania szkoły artystycznej 
                </label>
                <br>
            
                <label>
		            <input type="checkbox" name="t14" value="7" id="t14">
                    Dwóch lub więcej tytułów laureata turnieju z przedmiotu lub przedmiotów artystycznych nieobjętych ramowym planem nauczania szkoły artystycznej 
                </label>
		        <br>
            
                <label>
		            <input type="checkbox" name="t15" value="5" id="t15">
                    Dwóch lub więcej tytułów finalisty turnieju z przedmiotu lub przedmiotów artystycznych nieobjętych ramowym planem nauczania szkoły artystycznej 
                </label>
		        <br>
            
                <label>
		            <input type="checkbox" name="t16" value="7" id="t16">
                    Tytułu finalisty konkursu z przedmiotu lub przedmiotów artystycznych objętych ramowym planem nauczania szkoły artystycznej 
                </label>
                <br>
            
                <label>
		            <input type="checkbox" name="t17" value="3" id="t17">
                    Tytułu laureata turnieju z przedmiotu lub przedmiotów artystycznych nieobjętych ramowym planem nauczania szkoły artystycznej 
                </label>
		        <br>
            
                <label>
		            <input type="checkbox" name="t18" value="2" id="t18">
                    Tytułu finalisty turnieju z przedmiotu lub przedmiotów artystycznych nieobjętych ramowym planem nauczania szkoły artystycznej 
                </label>
		        <br>
            
                <b>Dodatkowo uzyskałeś wysokie miejsce w zawodach wiedzy innej niż wymienione wyżej</b>
                <br>
          
                <label>
			        <input type="checkbox" name="z1" value="4" id="z1">
                    Międzynarodowy
                    </label>
                <br>
                
			    <label>
			        <input type="checkbox" name="z2" value="3" id="z2">
                    Krajowy
                    </label>
			    <br>
            
                <label>
			        <input type="checkbox" name="z3" value="2" id="z3">
                    Wojewódzki
                </label>
			    <br>
            
                <label>
			        <input type="checkbox" name="z4" value="1" id="z4">
                    Powiatowy
                </label>
			    <br>
			
           </td>

    <div calss=inputSubmit>
        <input type="submit">
    </div>
        
    <div style="clear: both"></div>
    
    </form>	
		<?php include("test.php");?>
</table>
            
            <div style="clear: both;"></div>
        </div>

        <div id="footer">
            
            Made by: Kacper Mila &copy;

            <div class="fb"><a href="https://www.facebook.com/profile.php?id=100009794734723"><i class="icon-facebook-squared"></i></a></div>

            <div class="ig"><a href="https://www.instagram.com/kacper._.mila/"><i class="icon-instagram"></i></a></div>
            
            <div style="clear: both;"></div>
        </div>
    </div>

    <script src="jquery-3.5.1.min.js"></script>

    <script>

        $(document).ready(function() {
        var menuY = $('menu').offset().top;
         
        var stickyMenu = function(){
        var ScrollY = $(window).scrollTop();
              
        if (ScrollY > menuY) { 
            $('.menu').addClass('sticky');
        } else {
            $('.menu').removeClass('sticky'); 
        }
        };
         
        stickyMenu();
         
        $(window).scroll(function() {
            stickyMenu();
        });
        });
    
    </script>



</body>

</html>
