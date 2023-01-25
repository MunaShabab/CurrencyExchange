var xmlhttp = createRequestObject();

function createRequestObject() {
    var ro;
    var browser = navigator.appName;
    if(browser == "Microsoft Internet Explorer"){
        ro = new ActiveXObject("Microsoft.XMLHTTP");
    }else{
        ro = new XMLHttpRequest();
    }
    return ro;
}
function ValidateForm(){
						document.getElementById("pound").innerHTML="";
						isValid=true;
						strErrors="";
						var x=document.getElementById("txtDollar").value;
						if (x ==""){
							isValid=false;
							strErrors="You must enter the amount in Dollars";
							
						}
						else if(isNaN(x) || parseInt(x)<=0){
							isValid=false;
							strErrors="Dollar amount must be a number graeter than zero";
						}
						
						
						
						document.getElementById("errors").innerHTML=strErrors;
						return isValid;
		
			}
function CalculateInPound() {
	if(ValidateForm()){
	
	url="pound.php?";
	
	url=url+"dollar"+"="+document.getElementById("txtDollar").value;
		
	
   xmlhttp.open('get', url);
    xmlhttp.onreadystatechange = handleResponse;
    xmlhttp.send(null);}
	
}
function handleResponse() {
    if(xmlhttp.readyState == 4){
	 results=xmlhttp.responseText.split( ",");
	 document.getElementById("pound").innerHTML="is equals to " +results[0]+" Pounds";
	}
    
}