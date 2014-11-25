// Funkcia na vypisovanie copyrightu v pate stranky. Nepouzita nahradena php.
function Copy()
{
	datum = new Date();
	with (datum) {
	r = getYear();
	}
	r += 1900;
	document.write("Copyright &copy 2010 - "+r+" by <a href='mailto: janko.salva@gmail.com'>Jan Salva</a>");
}

// Funkcia na zobrzovanie menu meni style.
function Display(id)
{
	if(id.style.display=="none") id.style.display="";
	else id.style.display="none";
}

// Funkcia vypisujuca hodiny na stranke.
function Tick() 
{
	var clock = new Date;

	var d = clock.getDate(); 
	if (d < 10) d = "0" + d;
	
	var m = clock.getMonth(); 
	m = m + 1; 
	if (m < 10) m = "0" + m;
	
	var y = clock.getYear(); 
	if (y < 1000) y = 1900 + y;
	
	var h = clock.getHours(); 
	if (h < 10) h = "0" + h;
	
	var min = clock.getMinutes(); 
	if (min < 10) min = "0" + min;
	
	var s = clock.getSeconds(); 
	if (s < 10) s = "0" + s;

	var TimeStr = d + "." + m + "." + y + " " + h + ":" + min + ":" + s;
	document.all['MyClock'].innerHTML = TimeStr; // Vkladanie textu alebo HTML do dokumentu s id MyClock sa vlozi retayec.

	setTimeout("Tick()", 250); // Kazdych 250 milisekund sa zavola funkcia Tick()
}

// Zakodovanie mailovej adresy
function codeMail(str) {
	var mail = str + "@gmail.com";

	document.all['mail'].innerHTML = mail;
}

// Testovacie funkcie.
function Test(id) {
	if (id.style.color=="none") {
		id.style.color="blue";
	}
	else {
		id.style.color="red";
	}
}

function Over()
{
	var x = document.getElementById("Foto");

	x.style.border = "2px solid red";
}

function Out()
{
	var x = document.getElementById("Foto")

	x.style.border = "2px solid black";
}

// Zistenie rozlisenia a nasledne centrovanie stranky
function resolution()
{
	var vonkajsi = document.getElementById("vonkajsi");
	var width = window.screen.width;
	var height = window.screen.height;

	//document.all['test'].innerHTML = width + " x " + height;
	vonkajsi.style.marginLeft = width / 2 - 400;
}

// Riadiace funkcie admin menu.
// Nepouzivaju sa
// Klikacie  menu
function testClick1()
{
	var menu1 = document.getElementById("adminMenu1");
	var menu2 = document.getElementById("adminMenu2");
	var menu3 = document.getElementById("adminMenu3");

	if (menu1.style.display=="none")
	{
		menu1.style.display="";
		menu2.style.display="none";
		menu3.style.display="none";
	}
	else
	{
		menu1.style.display="none";
		menu2.style.display="none";
		menu3.style.display="none";
	}
}

function testClick2()
{
	var menu1 = document.getElementById("adminMenu1");
	var menu2 = document.getElementById("adminMenu2");
	var menu3 = document.getElementById("adminMenu3");

	if (menu2.style.display=="none")
	{
		menu1.style.display="none";
		menu2.style.display="";
		menu3.style.display="none";
	}
	else
	{
		menu1.style.display="none";
		menu2.style.display="none";
		menu3.style.display="none";
	}
}

function testClick3()
{
	var menu1 = document.getElementById("adminMenu1");
	var menu2 = document.getElementById("adminMenu2");
	var menu3 = document.getElementById("adminMenu3");

	if (menu3.style.display=="none")
	{
		menu1.style.display="none";
		menu2.style.display="none";
		menu3.style.display="";
	}
	else
	{
		menu1.style.display="none";
		menu2.style.display="none";
		menu3.style.display="none";
	}
}

// Function jquery fadeOut
function showJumpWindow()
{
	var infoTable = document.getElementById("infoTable");
	var infoBackground = document.getElementById("infoBackground");

	if (infoTable.style.display=="block") {
		$(document).ready(function() {
			$("#infoTable").fadeOut(700);
		});
	}
	else { 
		infoTable.style.display="block";
	}

	if (infoBackground.style.display=="block") {
		$(document).ready(function() {
			$("#infoBackground").fadeOut(700);
		});
	}
	else {
		infoBackground.style.display="block";
	}
}