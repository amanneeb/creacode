
var stepLeft={
    refFormulaire:null,

    noStep:1,

    tErreurs:[],
    tValide:[],
    secValide:false,

    btnSuivant : document.getElementById('btnSuiv'),
    btnPrecedent:  document.getElementById('btnPrec'),
    btnConfirmer : document.getElementById('btnConf'),

    initialiser:function(){
        document.body.className = "js";
        this.refFormulaire = document.querySelector(".form");

        this.btnSuivant.addEventListener('click', this.validerSection.bind(this));
        this.btnPrecedent.addEventListener('click', this.changementEtape.bind(this));
        this.btnConfirmer.addEventListener('submit', this.validerSection.bind(this));


        this.refFormulaire.querySelector("#prenom").addEventListener("blur", this.validerChampTexte.bind(this));
        this.refFormulaire.querySelector("#nom").addEventListener("blur", this.validerChampTexte.bind(this));
        this.refFormulaire.querySelector("#mail").addEventListener("blur", this.validerChampTexte.bind(this));
        this.refFormulaire.querySelector("#ville").addEventListener("blur", this.validerChampTexte.bind(this));
        this.refFormulaire.querySelector("#adresse").addEventListener("blur", this.validerChampTexte.bind(this));
        this.refFormulaire.querySelector("#codePost").addEventListener("blur", this.validerChampTexte.bind(this));
        this.refFormulaire.querySelector("#numCarte").addEventListener("blur", this.validerChampTexte.bind(this));
        this.refFormulaire.querySelector("#expCarte").addEventListener("blur", this.validerChampTexte.bind(this));
        this.refFormulaire.querySelector("#cvv").addEventListener("blur", this.validerChampTexte.bind(this));

        this.tValide["prenom"]=false;
        this.tValide["nom"]=false;
        this.tValide["mail"]=false;
        this.tValide["ville"]=false;
        this.tValide["adresse"]=false;
        this.tValide["codePost"]=false;
        this.tValide["pays"]=false;
        this.tValide["province"]=false;

        this.tValide["numCarte"]=false;
        this.tValide["expCarte"]=false;
        this.tValide["cvv"]=false;


    },

    chargeJSON: function(objJSON){
        console.log('json')
        //fonction fetch (chargement asynchrone du JSON)
        fetch(objJSON)
            .then(response => response.json()) //la prommesse retourne une réponse de type JSON
            .then(monJSON => this.tErreurs=monJSON); // une fois reçu, on stock le JSON dans la variable
    },

    validerChampTexte:function(evenement){
        var valide=false;
        console.log("validerChampTexte "+  this.tErreurs);
        var objCible=evenement.currentTarget;
        var strChaineExp=new RegExp(objCible.getAttribute('pattern'));
        //valide si pas vide
        if(this.validerSiVide(objCible)===true){
            //si vide, afficher le message d'erreur
            this.afficherChampErreur(objCible, this.tErreurs[objCible.getAttribute("name")]["vide"]);
        }else {
            if (objCible.hasAttribute("pattern")) {
                //si pas vide, tester le pattern
                if (strChaineExp.test(objCible.value)) {
                    //si pattern ok
                    valide = true;
                    //effacer le champ d'erreur
                    this.effacerChampErreur(objCible);
                } else {
                    //si pattern invalide afficher message détaillé
                    this.afficherChampErreur(objCible, this.tErreurs[objCible.getAttribute("name")]["pattern"]);
                }
            } else {
                this.effacerChampErreur(objCible);
                valide = true;
            }
        }
        //modifier le tableau des validitées
        this.modifierTableauValidation(objCible.getAttribute("name"),valide);
    },

        validerFormulaire: function(evenement){
            //Par defaut, le formulaire est considé comme valide
            var valide = true;
            //Pour chacun des champs présent dans le tableau de validation
            for(var champ in this.tValide ){
                //Si un champ est invalide
                if (this.tValide[champ] === false) {
                    //cible l'objet du DOM fautif
                    var objCible=this.refFormulaire.querySelector("#"+champ);
                    //ici deux possibilité de message, vide ou pattern
                    if(this.validerSiVide(objCible)===true){
                        console.log(this.tErreurs[objCible.getAttribute("name")]);
                        console.log(objCible.getAttribute("name"));
                        this.afficherChampErreur(objCible, this.tErreurs[objCible.getAttribute("name")]["vide"]);
                    }else{
                        if(objCible.hasAttribute("pattern")){
                            var strChaineExp=new RegExp(objCible.getAttribute('pattern'));
                            if(strChaineExp.test(objCible.value) ){
                                //affiche que l'entrée n'est pas du bon format
                                this.afficherChampErreur(objCible, this.tErreurs[objCible.getAttribute("name")]["pattern"]);
                            }
                        } else {
                            //effacer le champ d'erreur
                            this.effacerChampErreur(objCible);
                        }
                    }
                    //Le formulaire contient des champs invalide, et n'est donc pas prêt à l'envoi
                    valide=false;
                }
            }

            // si le formulaire n'est pas valide, on annule la soumission du formulaire de l'événement submit
        },

    validerSiVide: function(objCible){
        var valide = false; //false = champ vide
        if(objCible.value === ""){
            valide = true; //si false, champ contient quelque chose
        }
        return valide;
    },

    validerSelectPays: function(){
        var valide = false; //false = champ vide
        const errPays = document.getElementById("err_pays");
        const select = document.getElementById("pays");
        console.log('rentrer')
        if(select.value !== "select"){
            valide = true; //si false, champ contient quelque chose
            errPays.innerHTML=""
        }else{
            valide=false;
            errPaysinnerHTML="Veuillez choisir un pays."
        }
        return valide;
    },

    validerSelectProv: function(){
        var valide = false; //false = champ vide
        const errProv = document.getElementById("err_province");
        const select = document.getElementById("province");

        if(select.value !== "select"){
            valide = true; //si false, champ contient quelque chose
            errProv.innerHTML="";
        }else{
            valide=false;
            errProv.innerHTML="Veuillez choisir une province."
            console.log(errProv.innerText);
        }
        return valide;
    },

    /**
     * Méthode d'affichage des messages d'erreur
     * @param objCible
     * @param message
     */
    afficherChampErreur: function (objCible,message){
        var nom = "err_"+objCible.getAttribute("id");
        document.getElementById(nom).innerHTML=message;
        objCible.parentNode.classList.add("input__erreur");
    },

    /**
     * Méthode d'effacement des messages d'erreur
     * @param objCible
     */
    effacerChampErreur: function(objCible) {

        var nom = "err_"+objCible.getAttribute("id");
        document.getElementById(nom).innerHTML="";

        objCible.parentNode.classList.remove("input__erreur");
    },

    /**
     * Méthode de d'inscription de l'état des champs dans le tableau de validation
     * @param nomChamp
     * @param valide
     */
    modifierTableauValidation:function(nomChamp,valide){
        this.tValide[nomChamp]=valide;
    },

    /**
     * Méthode d'effacement des message d'erreur et de remise à zéro des champs du formulaire
     */
    effacerFormulaire: function(){
        var liste=document.querySelectorAll(".formulaire__erreur")
        liste.forEach(function(objetCible){
            objetCible.innerHTML="";
            objetCible.parentNode.classList.remove("input__erreur");
        });
        this.tValide["prenom"]=false;
        this.tValide["nom"]=false;
        this.tValide["mail"]=false;
        this.tValide["ville"]=false;
        this.tValide["codePost"]=false;
    },



    validerSection:function(){
        if(this.noStep===1){
            this.validerSelectPays();
            this.validerSelectProv()
            if(this.tValide["prenom"]===true &&this.tValide["nom"]===true &&this.tValide["adresse"]===true &&this.tValide["ville"]===true &&this.tValide["codePost"]===true && this.validerSelectProv()===true && this.validerSelectPays()===true){
                this.changementEtape(this.btnSuivant);


            }else{
                console.log(this.tValide)
                this.validerFormulaire();
                this.secValide =false;
            }
        }else if(this.noStep===3) {
            if (this.tValide["numCarte"] === true && this.tValide["expCarte"] === true && this.tValide["cvv"] === true) {
                this.changementEtape(this.btnSuivant);


            }else{
                this.validerFormulaire();
                this.secValide =false;
            }
        }
    },


    changementEtape:function(evenement){
        let objCible = evenement.currentTarget;
        console.log(this.refFormulaire)
        if(objCible.id === 'btnSuiv'){
            this.noStep++;
            if(this.noStep >= 1){
                this.btnPrecedent.classList.remove('inactive');
                this.refFormulaire.querySelector('.step'+(this.noStep-1)).classList.add('inactive');
                this.refFormulaire.querySelector('.step'+(this.noStep)).classList.remove('inactive');

                document.querySelector('.path'+(this.noStep-1)).classList.add('pathStatus');
                document.querySelector('.path'+(this.noStep)).classList.remove('pathStatus');
            }
            if(this.noStep >= 3){
                this.btnSuivant.classList.add('inactive');
                this.btnConfirmer.classList.remove('inactive');
            }
        }else{
            this.noStep--;
            this.refFormulaire.querySelector('.step'+(this.noStep)).classList.remove('inactive');
            this.refFormulaire.querySelector('.step'+(this.noStep+1)).classList.add('inactive');

            document.querySelector('.path'+(this.noStep+1)).classList.add('pathStatus');
            document.querySelector('.path'+(this.noStep)).classList.remove('pathStatus');
            if(this.noStep <= 1){
                this.btnPrecedent.classList.add('inactive');
            }
            if(this.noStep < 3){
                this.btnSuivant.classList.remove('inactive');
                this.btnConfirmer.classList.add('inactive');
            }
        }
        
        
    }
}

window.addEventListener('load', stepLeft.initialiser.bind(stepLeft));