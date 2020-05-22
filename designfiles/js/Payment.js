function removeElement(parentDiv, childDiv){
if (childDiv == parentDiv){
alert("The parent div cannot be removed.");
}
else if (document.getElementById(childDiv)){
var child = document.getElementById(childDiv);
var parent = document.getElementById(parentDiv);
parent.removeChild(child);
}
else{
alert("Child div has already been removed or does not exist.");
return false;
}
}

function Credit(){
	
	
var r = document.createElement('span');
var a = document.createElement("INPUT");
var b = document.createElement("INPUT");
var c = document.createElement("INPUT");
var d = document.createElement("INPUT");

a.setAttribute("type", "text");
a.setAttribute("placeholder", "CARD OWNER NAME");
b.setAttribute("type", "number");
b.setAttribute("placeholder", "CREDIT CARD NUMBER");
c.setAttribute("type", "number");
c.setAttribute("placeholder", "CVV")
d.setAttribute("type", "");
d.setAttribute("placeholder", "EXPIRATION DATE");

r.appendChild(a);
r.appendChild(b);
r.appendChild(c);
r.appendChild(d);

document.getElementById("myForm").appendChild(r);
}

function Debit(){
	
	
var r = document.createElement('span');
var a = document.createElement("INPUT");
var b = document.createElement("INPUT");
var c = document.createElement("INPUT");
var d = document.createElement("INPUT");

a.setAttribute("type", "text");
a.setAttribute("placeholder", "CARD OWNER NAME");
b.setAttribute("type", "number");
b.setAttribute("placeholder", "DEBIT CARD NUMBER");
c.setAttribute("type", "number");
c.setAttribute("placeholder", "CVV")
d.setAttribute("type", "");
d.setAttribute("placeholder", "EXPIRATION DATE");

r.appendChild(a);
r.appendChild(b);
r.appendChild(c);
r.appendChild(d);

document.getElementById("myForm").appendChild(r);
}

function PayPal(){
	
	
var r = document.createElement('span');
var a = document.createElement("INPUT");
var b = document.createElement("INPUT");


a.setAttribute("type", "text");
a.setAttribute("placeholder", "Enter Login ID");
b.setAttribute("type", "number");
b.setAttribute("placeholder", "Password");

r.appendChild(a);
r.appendChild(b);


document.getElementById("myForm").appendChild(r);
}

function Check(){
	
	
var r = document.createElement('span');
var a = document.createElement("INPUT");
var b = document.createElement("INPUT");
var c = document.createElement("INPUT");

a.setAttribute("type", "text");
a.setAttribute("placeholder", "Pay To the Order of");
b.setAttribute("type", "number");
b.setAttribute("placeholder", "Amount");
c.setAttribute("type", "number");
c.setAttribute("placeholder", "Check Number");


r.appendChild(a);
r.appendChild(b);
r.appendChild(c);


document.getElementById("myForm").appendChild(r);
}