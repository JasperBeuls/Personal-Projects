function next_question(){var f=parseInt(document.getElementById("from").value);var e=parseInt(document.getElementById("to").value);var d=Math.floor(Math.random()*(e-f+1))+f;var c=16*d;if(Math.floor(Math.random()*2+1)==2){var a="<b>What is the value of 16 * "+d+"?</b>";var b=c}else{var a="<b>16 times what number is equal to "+c+"?</b>";var b=d}document.getElementById("question").innerHTML=a;document.getElementById("answer").innerHTML=b;document.getElementById("answer").style.display="none";document.getElementById("answeris").style.display="none";document.getElementById("answeris").innerHTML="The correct answer is:";document.getElementById("input").value=""}next_question();function check_answer(){var a=document.getElementById("input").value;var b=document.getElementById("answer").innerHTML;a=a.replace(/^\s+|\s+$/g,"");b=b.replace(/^\s+|\s+$/g,"");if(a==b){document.getElementById("answeris").innerHTML="<b>Yes!</b> The correct answer is:";document.getElementById("answeris").style.display="block";document.getElementById("answer").style.display="block"}else{document.getElementById("answeris").innerHTML="<b>That is not correct.</b>";document.getElementById("answeris").style.display="block"}}function show_answer(){document.getElementById("answeris").innerHTML="The correct answer is:";document.getElementById("answeris").style.display="block";document.getElementById("answer").style.display="block"};