function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function MM_showHideLayers() { //v9.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) 
  with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}


// -------------------------------- SCRIPTS ULRICK --------------------------------
jQuery(document).ready(function($)
{
	// affiche une cible et cache toutes les autres (bouton afficher)
	$('.jq_toggle').click(function()
	{
		// récupère la cible
		var cible = '#'+$(this).attr('data-jq_cible');
		// alert('ok'+cible);

		// cache toutes les classes 'jq_hide' sauf la cible, permet de ne pas la cacher si déjà ouverte
		$('.jq_hide').not(cible).hide();

		// affiche la cible si elle n'est pas déjà ouverte
		if (!$(cible).is(":visible"))
		{
			$(cible).show('fast', 'linear');
		}
	});		

	// cache tous les '.jq_hide' (bouton fermer)
	$('.jq_hide').click(function()
	{
		$('.jq_hide').hide();
	});		
});


// verifie les champs obligatoires des formulaires
// caracteres interdits : ['(IE-Moz)][au moins 2 chiffres suivis d'un caractere special(IE-Moz)]
// caracteres autorises : - #~*;
function valider_formulaire(liste_champs,nom_formulaire)
{
	var liste="";
	var erreurs="";
	var valeur="";
	var reg=new RegExp("[,]+", "g");
	var reg2=new RegExp("[_]+", "g");
	var tableau=liste_champs.split(reg);
	for (var i=0; i<tableau.length; i++) {
		liste = tableau[i];

		valeur = document.forms[nom_formulaire].elements[liste].value;
		valeur = valeur.replace(/(^\s*)|(\s*$)/g,'');

		// detection si checkbox conditions generales à verifier
		if (liste=="validation_conditions") {
			valeur = document.forms[nom_formulaire].elements[liste].checked;
		}

		if(valeur=="")	{
			erreurs = erreurs + '\n\t- ' + liste.replace(reg2," ");
		}
	}

	if(erreurs!="")	{
		alert('Veuillez entrer au moins un caractere dans le(s) champ(s) :\n'+erreurs);
		return false ;
	} else {
		return true ;
	}

}

// script pour le mode switch des listes deroulantes
// ajouter dans le <select> côte HTML : onchange="javascript:select_fiche('id du checkbox cible',this.id)"
function select_fiche(cible,depart) {
  if (document.getElementById(depart).value != "") { document.getElementById(cible).checked=true; } else { document.getElementById(cible).checked=false; }
}

// impression
function myprint() {
	window.print();
}
