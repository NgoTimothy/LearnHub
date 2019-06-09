var menu1 = false;
	function menu()	{
	var elements = document.getElementsByClassName('link');
	if (menu1 == false)	{
		for (var i = 0; i < elements.length; i++)
		{
			elements[i].style.display = 'block';
		}
		menu1 = true;
		}
		else	{
		for (var i = 0; i < elements.length; i++)
		{
			elements[i].style.display = 'none';
		}
		menu1 = false;
		}
	}
	
	function resize()	{
		var h = window.innerWidth;
		if (h >= 1000)
		{
			menu1 = false;
			menu();
		}
		else	{
			menu1 = true;
			menu();
		}
	}
	
	function login()	{
	var x = document.getElementById("loginscreen")
	var y = document.getElementById("closelogin")
	if (x.style.display == '' || x.style.display === 'none')	{
	x.style.display = 'block';
	y.style.display = 'block';
	}
	else	{
	x.style.display = 'none';
	y.style.display = 'none';
	}}