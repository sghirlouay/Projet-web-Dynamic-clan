function verif() {
    id=document.getElementById("id").value.length;
num=document.getElementById("num").value.length;
    nom=document.getElementById("nom").value;
    prenom=document.getElementById('prenom').value.length;
    if(id!=8)
    {
        alert("le champs cin doit etre une chaine de 8 carac");
        return false;
    }
if(num!=8)
    {
        alert("le numero doit etre une chaine de 8 chiffre");
        return false;
    }
    if (/[A-Z]/.test( nom[0]))
    {

    }
    else
    {
        alert('1er lettre nom doit etre maj');
        return false;
    }
    if(prenom<2)
    {
        alert("prenom au moin 2 carc");
        return false;
    }

}