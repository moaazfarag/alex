var radioCount = 0;
var scoreRes = 0;
var sid = Math.random();
var xmlHttp
var ResCountry = '';
var countryCalled = false;
var countryID = '';

function gsv(this_input){
    var thisVal = false;
    for (i=0; i<this_input.length && !thisVal; i++){
        if (this_input[i].checked){
            thisVal = this_input[i].value;
        }
    }
	return thisVal;
}


function ct() {
	var score;
	score = 0;
	var error = new Array();
	for (var i=0;i<radioCount;i++) {
		var q = eval("document.qf.q" + i);
		var val = 0;
		for (var j=0; j<q.length; j++){
			if (q[j].checked){
				val++;
			}
		}

		if(val>0)
			score = score + parseFloat(gsv(q));
		else
			error[error.length] = i;
	}
	if((error.length > 0) || (document.qf.country.value == 0) || (document.qf.sex.value == 0) || (document.qf.age.value == 0)) {
		var msg = '';
		if (document.qf.country.value == 0)
		{
			msg += "«·—Ã«¡ «Œ Ì«— «·œÊ·…\n";
		}
		if (document.qf.sex.value == 0)
		{
			msg += "«·—Ã«¡ «Œ Ì«— «·Ã‰”\n";
		}
		if (document.qf.age.value == 0)
		{
			msg += "«·—Ã«¡ «Œ Ì«— «·⁄„—\n";
		}
		for (var i=0;i<error.length;i++)
		{
			msg += "«·—Ã«¡ «Œ Ì«— ÃÊ«» ··”ƒ«· —ﬁ„ "+(error[i]+1)+"\n";
		}
		if(msg!=""){
			alert(msg);
		}
	}
	else {
		if(sid != 0)
		{
		document.getElementById('ts').innerHTML=score;
		document.getElementById("txtRes").innerHTML='<img src="/themes/newarabic/images/loading.gif" width="48" height="48" alt="Ã«—Ì «· Õ„Ì·..." border="0">';
		scoreRes = score;
		insertData();
		setTimeout('retrieveData()',1000);
		sid = 0;
		}
		else
		{
		alert('Ì„ﬂ‰ﬂ «·ﬁÌ«„ »«·«” »Ì«‰ ·„—… Ê«Õœ… ›ﬁÿ');
		return false;
		}
	}
}

function insertData()
{
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Your browser does not support AJAX!");
  return;
  } 
var url="surveys_save.php";
url=url+"?id="+document.qf.surveyid.value;
url=url+"&score="+scoreRes;
url=url+"&country="+document.qf.country.value;
url=url+"&sex="+document.qf.sex.value;
url=url+"&age="+document.qf.age.value;
url=url+"&sid="+sid;
xmlHttp.onreadystatechange=stateChanged;
xmlHttp.open("GET",url,true);
xmlHttp.send(null);
}

function retrieveData()
{ 
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Your browser does not support AJAX!");
  return;
  } 
var url="surveys_key.php";
url=url+"?id="+document.qf.surveyid.value;
if(arguments[0] > 0)
{
url=url+"&country="+arguments[0];
countryID = arguments[0];
document.getElementById('cLoading').innerHTML='<img src="/themes/newarabic/images/loading_small.gif" width="35" height="35" alt="loading" border="0">';
countryCalled = true;
}
url=url+"&score="+scoreRes;
xmlHttp.onreadystatechange=stateChanged2;
xmlHttp.open("GET",url,true);
xmlHttp.send(null);
}


function stateChanged2()
{
if (xmlHttp.readyState==4)
{ 
// remove loading gif from country span
if(countryCalled)
{
document.getElementById('cLoading').innerHTML='';
document.getElementById("txtResCountry").innerHTML=xmlHttp.responseText;
}
else
{
document.getElementById("txtRes").innerHTML=ResCountry=xmlHttp.responseText;
retrieveData(document.qf.country.value);
if(document.getElementById(document.qf.country.value)) document.getElementById(document.qf.country.value).selected = true;
}
}
}

function stateChanged() 
{ 
if (xmlHttp.readyState==4)
{ 
document.getElementById("txtRes").innerHTML=xmlHttp.responseText;
}
}

function GetXmlHttpObject()
{
var xmlHttp=null;
try
  {
  // Firefox, Opera 8.0+, Safari
  xmlHttp=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
  try
    {
    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
    }
  catch (e)
    {
    xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
  }
return xmlHttp;
}