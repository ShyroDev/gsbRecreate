e=true;
    function changer()
    {
        if(e) 
        {
            document.getElementById("password").setAttribute("type", "text");
            document.getElementById("eye").src="../images/greenEye.png";
            e=false;
        }
        else 
        {
            document.getElementById("password").setAttribute("type", "password");
            document.getElementById("eye").src="../images/redEye.png";
            e=true;
        }
    }