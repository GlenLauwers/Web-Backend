function valideren(){
    	//alert('start met valideren');
    	
    	//Naam is leeg
    		if( document.formulier.brouwernaam.value=="" )
    		{
    			document.formulier.brouwernaam.focus();
    			document.getElementById("error").style.display = "block";
    			document.getElementById("error").innerHTML="Naam is leeg.";
    			return false;
    		}

    	//adres is leeg
    		if( document.formulier.adres.value=="" )
    		{
    			document.formulier.adres.focus();
    			document.getElementById("error").style.display = "block";
    			document.getElementById("error").innerHTML="Adres is leeg.";
    			return false;
    		}

        //Postcode is leeg
            if( document.formulier.postcode.value=="" )
            {
                document.formulier.postcode.focus();
                document.getElementById("error").style.display = "block";
                document.getElementById("error").innerHTML="Postcode is leeg.";
                return false;
            }

    	//Postcode is niet gelijk aan 4 karakters
    		if( document.formulier.postcode.value.length!= 4 )
    		{
    			document.formulier.postcode.focus();
    			document.getElementById("error").style.display = "block";
    			document.getElementById("error").innerHTML="Postcode is niet correct.";
    			return false;
    		}

   		//Er staat een letter in
    		if ( isNaN ( document.formulier.postcode.value ))
    		{
    			document.formulier.postcode.focus();
    			document.getElementById("error").style.display = "block";
    			document.getElementById("error").innerHTML="Postcode is niet correct.";
    			return false;
    		}

    	//Gemeente is leeg
    		if( document.formulier.gemeente.value=="" )
    		{
    			document.formulier.gemeente.focus();
    			document.getElementById("error").style.display = "block";
    			document.getElementById("error").innerHTML="Gemeente is leeg.";
    			return false;
    		}

    	//Omzet is leeg
    		if( document.formulier.omzet.value=="" )
    		{
    			document.formulier.omzet.focus();
    			document.getElementById("error").style.display = "block";
    			document.getElementById("error").innerHTML="Omzet is leeg.";
    			return false;
    		}

            //Er staat een letter in
            if ( isNaN ( document.formulier.omzet.value ))
            {
                document.formulier.omzet.focus();
                document.getElementById("error").style.display = "block";
                document.getElementById("error").innerHTML="Omzet is niet correct.";
                return false;
            }
        }