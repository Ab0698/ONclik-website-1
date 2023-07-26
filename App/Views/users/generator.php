<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../../assets/css/cv copy.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Document</title>
</head>

<style>
    .but{
        width: 12%;
        margin-left: 88.5%;
        margin-top: -11.7%;
        color:#13ea8da0;
        border-radius: 7px;
    }
    .forma{
        background-color:whitesmoke;
        border:3px solid rgb(13, 189, 36);
        height: 100%;
        border-radius: 11px;
    }
    .ara{
        background-color: #8b8d8b4f;
    }
    .mam{
        display:inline;
    }
    
    .row{}
    
    </style>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
           
               <!-- entrer le nom
                <input type="text"  id="nom">
                entrer l'email
                <input type="text"  id="email">
                enter <input type="text"  id="one"> -->

                
                <div class=" row form-group ara">
                    <h3>Formulaire</h3>
                    <button type="submit" class="but" onclick="myFunction()">+</button>
                
                </div>
                   
        <p>Click the button pour add la photo.</p>
    <!--<div class="row image justify-contend-left">-->
    <input type="file" name="fileUpload" id="fileUpload">

     <!--</div>-->   
                <div class="col-12" id="formContainer">
                </div>    

             
            </div>
        
        
        <div class="col-12 col-md-6">
            <div class="container template ">
                <div class="row justify-contend-left">
                <div class="col-12 col-md-5 form1">
                    <form action="">
                <div class="form-group ">
                    <!--<img src="" id="uploadedImage" alt="" width="150" height="150" class="photo">-->
                    <div id="uploadedImage"style="width: 150px;height: 150px; border-radius: 50%;margin-left: 0%;margin-top: 5%;"> </div>

                </div>
        
                <div class="form-group"> 
                <h3 class="un">Contact</h3>
                <div class="row">
                <label class="deux">Phone</h5>
                </div>
                <div class="row">
                <span type="number" name="" id="setnumber" placeholder="002376xxxxxxxx"></span>
                </div>
                <label class="deux">Email</label>
                <div class="row">
                <span type="email" name="" id="setemail" placeholder="group2@gmail.com"></span>
                </div>
                <label class="deux">Adresse</label>
                <div class="row">
                <span type="text" name="" id="setadresse" placeholder="Akwa,Mtn dubai"></span>
                </div>
                </div>
                <div class="form-group">
                        <h3 class="un">Education</h3>
                        
                <label class="deux"> Année</label>
                       <span type="date"  id="setannee"></span>
                            <div class="row">
                                <label class="deux"> degree</label>
                            <span type="text" name="" id="setdegree" placeholder="Enter your degree"> </span>
                        </div>
                        <div class="row">
                            <label class="deux"> university</label>
                            <span type="text" name="" id="setuniversity" placeholder="university/college"></span>
                        </div>
                       <!-- <div class="row">-->
                            <label class="deux">Année</label>
                            <span type="date"  id="setannee2"></span>
                        <!--</div>-->
                        <div class="row">
                            <label class="deux" > degree</label>
                            <span type="text" name="" id="setdegree2" placeholder="Enter your degree"> </span>
                        </div>
                        <div class="row">
                            <label class="deux"> university</label>
                            <span type="text" name="" id="setuniversity2" placeholder="university/college"> </span>
                        </div>
                        </div>
                        <div class="form-group">
                            <h3 class="un">Expertise</h3>
                            <ul>
                                <li type="text" id="setexpertise1"> Ui/Ux</li>
                                <li id="setexpertise2">Design</li>
                                <li id="setexpertise3">Wireframes</li>
                                <li id="setexpertise4">>Storyboards</li>
                                <li id="setexpertise5">User flows</li>
                                <li id="setexpertise6">Process flows</li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <h3 class="un">Language</h3> 
                            <div class="row">
                            <label class="deux" id="setlangue">French</label>
                        </div>
                        <div class="row">
                            <label class="deux" id="setlangue2">English</label> 
                        </div>
                        </div>
                </form>
                </div>
        
                <div class="col-12 col-md-7 form2">
                    <form action="">
                    <div class="form-group">
                     <h3 id="setname">Mariana Anderson</h3>
                     <h5 id="setprofil">Marketing Manager</h5>
                     <p id="setapropos">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere esse, quibusdam vel laudantium laboriosam placeat deserunt beatae excepturi neque optio! Nihil voluptates magnam repudiandae molestiae commodi veniam culpa architecto quod.</p>
                    </div>
                    <div class="form-group justify-contend-left">
                        <h3 class="trois">Experience</h3>
                        <div class="row ma"> 
                            <ul style="list-style-type: none;">
                                <li style="display: inline-block;"><h4 id="setanneedebut" class="mam"> 2019</h4></li>
                                <li style="display: inline-block;"><h4>/</h4></li>
                                <li style="display: inline-block;"><h4 id="setanneefin" class="mam">2020</h4></li>
                            </ul>
                        
                    </div>
                            <div class="row">
                           <small id="setcompany" class="ma"> Company Name I 123 Anywhere St.. Any city</small>
                        </div>
                        <h4 id="setposition" class="so">Job position here</h4>
                            <div class="row">
                            <p id="setlo" class="ma">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quasi nostrum nulla nobis eaque? Nemo fugiat quis repellat architecto omnis, sint voluptates similique mollitia praesentium autem reprehenderit nisi ipsum reiciendis?</p>
                        </div>
                        <div class="row ma">
                        <ul style="list-style-type: none;">
                        <li style="display: inline-block;"><h4 class="ma" id="setanneedebut2">2017</h4></li> 
                        <li style="display: inline-block;"><h4>/</h4></li>
                        <li style="display: inline-block;"><h4 class="ma" id="setanneefin2">2019</h4></li>
                        </ul> 
                    </div> 
                        <div class="row">
                           <small class="ma" id="setcompany2"> Company Name I 123 Anywhere St.. Any city</small>
                        </div>
                        <h4 class="so" id="setposition2">Job position here</h4>
                            <div class="row">
                            <p class="ma" id="setlo2" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quasi nostrum nulla nobis eaque? Nemo fugiat quis repellat architecto omnis, sint voluptates similique mollitia praesentium autem reprehenderit nisi ipsum reiciendis?</p>
                        </div>
                        <div class="row ma">
                        <ul style="list-style-type: none;">
                        <li style="display: inline-block;"><h4 class="ma" id="setanneedebut3">2015</h4></li> 
                        <li style="display: inline-block;"><h4>/</h4></li>
                        <li style="display: inline-block;"><h4 class="ma" id="setanneefin3">2017</h4></li>
                        </ul> 
                    </div>   
                        <div class="row">
                           <small class="ma" id="setcompany3"> Company Name I 123 Anywhere St.. Any city</small>
                        </div>
                        <h4 class="so" id="setposition3">Job position here</h4>
                            <div class="row">
                            <p class="ma" id="setlo3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quasi nostrum nulla nobis eaque? Nemo fugiat quis repellat architecto omnis, sint voluptates similique mollitia praesentium autem reprehenderit nisi ipsum reiciendis?</p>
                        </div>
                        </div>
                        <div class="form-group justify-contend-left">
                            <h3 class="trois">Reference</h3> 
                            <div class="row">
                            <div class="col-12 col-md-6">
                               
                                    <h5 class="so" id="setsurname1">Name Surname</h5>
                                    <small class="ma" id="setentreprise1"> Company Name I 123 Anywhere St.. Any city</small>
                                    <div class="row">
                                        <label>Phone</h5>
                                        <span type="number" name="" id="setnumber1" placeholder="002376xxxxxxxx"></span>
                                    </div>
                                        <label>Email</label>
                                        <span type="email" name="" id="setemail1" placeholder="group2@gmail.com"></span>
                                 
        
                                </div> 
                            <div class="col-12 col-md-6 ">
                              
        
                                <h5 class="so" id="setsurname2">Name Surname</h5>
                                <small class="ma" id="setentreprise2"> Company Name I 123 Anywhere St.. Any city</small>
                                <div class="row">
                                    <label>Phone</h5>
                                    <span type="number" name="" id="setnumber2" placeholder="002376xxxxxxxx"></span>
                                </div>
                                   
                                    <label >Email</label>
                                    <span type="email" name="" id="setemail2" placeholder="group2@gmail.com"></span>
                                
        
                                </div>
                        </div>
                        </div>
                </form>
                </div>
                <input type="button" id="buttontelecharger" value="Télécharger" ></input>
                <!--<div class="bloc13">
                    <p id="para">bien vouloir vous inscrire avant de telecharger votre cv</p>
                    <button class="templates" type="btn-cv" id="btn-cv">
                        <a href="./floating-login-signup/index.html">inscription</a>
                    </button>
                </div>-->
                
                <!--ici c'est le style de mon paragraphe et du bouton-->
                <style>
                    #para{
                        position: relative;
                        top: 9px;
                        color: #1559A4;
                        font-size: 2rem;

                    }

                    #btn-cv{
                        background-color: white;
                        position: relative;
                        top: 35px;
                        height: 78px;
                        width: 200px;
                        cursor: pointer;
                        font-size: 1.1rem;
                        border-radius: 4px;
                        margin-bottom: 31px;
                        color: #1459a4;
                        border: 3px solid #1459a4;
                       
                     
                      
                    }
                    #btn-cv a{
                        text-decoration: none;
                        color:  #1459a4;
                        font-size: 1.7rem;
                    }

                    #btn-cv a:hover{
                        text-decoration: none;
                        color:  white;
                        
                    }

                    #btn-cv:hover{
                        background-color: #1459a4;
                        color: white;
                        transition: 1s all ease-in-out;
                    }
                </style>

                </div>
                    </div>
                </div>
        </div>
    </div>
</div>
</div>

 <script type="text/javascript">
  

    //const inputemail=document.querySelector('#email');
    //const ouputemail=document.querySelector('#setemail');
    //inputemail.addEventListener('input',(event)=>{
      //  const email=event.target.value;
        //document.querySelector('#setemail').textContent=email;
    //});

    //const inputone=document.querySelector('#one');
    //const ouputone=document.querySelector('#setone');
    //inputone.addEventListener('input',(event)=>{
      //  const one =event.target.value;
        //document.querySelector('#setone').textContent=one;
    //});

   

var EducCpter=0;
var EperCpter=0;
var  LangCpter=0;
var EperieCpter=0;
var ReferCpter=0;
cp=0;
function myFunction(){

    var Contact = document.createElement('div');
    var formContainer = document.getElementById('formContainer');

var label = document.createElement("label");
label.innerHTML = "Contact";
label.style.marginBottom="15px"
Contact.appendChild(label);

var br=document.createElement("br");
Contact.appendChild(br);
        var input1 = document.createElement("input");
        input1.type = "number";
        input1.id="telformulaire";
        input1.style.width="425px";
        input1.placeholder="entrer number";
        input1.style.marginBottom="12px"
        Contact.appendChild(input1);

        var input2 = document.createElement("input");
        input2.type = "emailformulaire";
        input2.id="emailformulaire";
        input2.style.width="425px";
        input2.placeholder="entrer email";
        input2.style.marginBottom="12px" 
        Contact.appendChild(input2);

var input3 = document.createElement("input");
        input3.type = "text";
        input3.id="adresseformulaire";
        input3.style.width="425px";
        input3.placeholder="entrer adresse";
        input3.style.marginBottom="12px"
        Contact.appendChild(input3);

        formContainer.appendChild(Contact);
        var br=document.createElement("br");
    Contact.appendChild(br);


    var addBtn = document.createElement('button');
    addBtn.innerHTML = "+";
    var delBtn = document.createElement('button');
    delBtn.innerHTML = "x";

    //var formContainer = document.getElementById('formContainer');

    var Educ = document.createElement('div');
    Educ.id="Bloc-Education";

    var EducText = document.createTextNode("Education");
    var EducTitle = document.createElement('h2');
    addBtn.type="submit";
    addBtn.style.color="#06f88f";
    addBtn.style.width="39px";
    addBtn.style.height="39px";
    addBtn.style.marginLeft="45px"
    addBtn.style.borderRadius="7px";
    delBtn.style.marginLeft="3px";
    delBtn.style.width="39px";
    delBtn.style.height="39px";
    delBtn.style.borderRadius="7px";

//pour ajoutrt les champs education
    addBtn.addEventListener('click', function() {
        addEducElmnt(Educ);
    });
    //
    //pour supprimer education
    delBtn.addEventListener('click', function() {   
        Educ.remove();
    });
    //
    delBtn.style.color="#cb5151";
    EducTitle.appendChild(EducText);
    EducTitle.appendChild(addBtn);
    EducTitle.appendChild(delBtn);

    Educ.appendChild(EducTitle);
    formContainer.appendChild(Educ);
    var br=document.createElement("br");
    Educ.appendChild(br);


var addtn = document.createElement('button');
    addtn.innerHTML = "+";
    var deltn = document.createElement('button');
    deltn.innerHTML = "x";
    

var Eper = document.createElement('div');
Eper.id="Bloc-Expertise";
//Eper.style.border="1px solid blue";

    var EperText = document.createTextNode("Expertise");
    var EperTitle = document.createElement('h2');
    addtn.type="submit";
    addtn.style.color="#06f88f";
    addtn.style.borderRadius="7px";
    addtn.style.width="39px";
    addtn.style.height="39px";
    addtn.style.marginLeft="57px"
    deltn.style.marginLeft="3px";
    deltn.style.width="39px";
    deltn.style.height="39px";
    deltn.style.color="#cb5151";
    deltn.style.borderRadius="7px";

    //pour ajouter les expertises
    addtn.addEventListener('click', function() {
        addEperElmnt(Eper);
    });
    //pour supprimer expertise
    
    deltn.addEventListener('click', function() {   
        Eper.remove();
    })
    EperTitle.appendChild(EperText);
    EperTitle.appendChild(addtn);
    EperTitle.appendChild(deltn);

    Eper.appendChild(EperTitle);
    formContainer.appendChild(Eper);
    var br=document.createElement("br");
    Eper.appendChild(br);

    
    
var addbt = document.createElement('button');
    addbt.innerHTML = "+";
    addbt.style.color="#06f88f";
    var delbt = document.createElement('button');
    delbt.innerHTML = "x";
    delbt.style.marginLeft="3px";
    delbt.style.width="39px";
    delbt.style.height="39px";
    delbt.style.color="#cb5151";


var Lang = document.createElement('div');
Lang.id="Bloc-Langue";
// Lang.style.border="1px solid green";

    var LangText = document.createTextNode("Langue");
    var LangTitle = document.createElement('h2');
    addbt.type="submit";
    addbt.style.width="39px";
 addbt.style.height="39px";
 addbt.style.borderRadius="7px";
 addbt.style.marginLeft="83px";

    //pour ajouter les langues
 addbt.addEventListener('click', function() {
        addLangElmnt(Lang);
   });
    //pour supprimer l'espace langues
    delbt.style.borderRadius="7px";
    delbt.addEventListener('click', function() {   
Lang.remove();
    });

    LangTitle.appendChild(LangText);
    LangTitle.appendChild(addbt);
    LangTitle.appendChild(delbt);

    Lang.appendChild(LangTitle);
    formContainer.appendChild(Lang);

    var br=document.createElement("br");
    Lang.appendChild(br);
    //pour gerer le profil
    var Profil = document.createElement('div');
var inputName = document.createElement("input");
inputName.type="text";
inputName.id="nameformulaire"
inputName.placeholder="ton nom";
inputName.style.width="425px";

Profil.appendChild(inputName);
inputName.style.marginBottom="15px ";



var inputMetier = document.createElement("input");
inputMetier.type="text";
inputMetier.id="metierformulaire"

inputMetier.placeholder="ta profession";
inputMetier.style.width="425px";

Profil.appendChild(inputMetier);
inputMetier.style.marginBottom="15px ";

var inputDescription = document.createElement("input");
inputDescription.type="textarea";
inputDescription.id="aproposformulaire";
inputDescription.placeholder="description";
inputDescription.style.width="425px";

Profil.appendChild(inputDescription);
inputDescription.style.marginBottom="15px ";

formContainer.appendChild(Profil);
var br=document.createElement("br");
    Profil.appendChild(br);
//pour gerer les experiences
var addboutton = document.createElement('button');
 addboutton.innerHTML = "+";
 addboutton.style.color="#06f88f";
 addboutton.style.width="40px";
 addboutton.style.height="40px";
 addboutton.style.marginLeft="33px";
 addboutton.style.borderRadius="7px";
    var delboutton = document.createElement('button');
    delboutton.innerHTML = "x";
    delboutton.style.marginLeft="3px";
    delboutton.style.width="40px";
    delboutton.style.height="40px";
    delboutton.style.borderRadius="7px";
    delboutton.style.color="#cb5151";


var Eperie = document.createElement('div');
Eperie.id="Bloc-Experience";
// Eperie.style.border="1px solid red";

    var EperieText = document.createTextNode("Experience");
    var EperieTitle = document.createElement('h2');
    addboutton.type="submit";
    //pour ajouter les experiences
    addboutton.addEventListener('click', function() {
        addEperieElmnt(Eperie);
    });
    //pour supprimer experiences
    delboutton.addEventListener('click', function() {   
        Eperie.remove();
    })
    EperieTitle.appendChild(EperieText);
    EperieTitle.appendChild(addboutton);
    EperieTitle.appendChild(delboutton);

    Eperie.appendChild(EperieTitle);
    formContainer.appendChild(Eperie);
    var br=document.createElement("br");
    Eperie.appendChild(br);

//pour gerer les references

var addbtton = document.createElement('button');
 addbtton.innerHTML = "+";
 addbtton.style.color="#06f88f";
 addbtton.style.width="40px";
 addbtton.style.height="40px";
 addbtton.style.marginLeft="45px";
 addbtton.style.borderRadius="7px";

    var delbtton = document.createElement('button');
    delbtton.innerHTML = "x";
    delbtton.style.marginLeft="3px";
    delbtton.style.width="40px";
    delbtton.style.height="40px";
    delbtton.style.color="#cb5151";
    delbtton.style.borderRadius="7px";


var Refer = document.createElement('div');
Refer.id="Bloc-Reference";
//Refer.style.border="1px solid blue";

    var ReferText = document.createTextNode("Reference");
    var ReferTitle = document.createElement('h2');
    addbtton.type="submit";
    //pour ajouter les experiences
    addbtton.addEventListener('click', function() {
        addReferElmnt(Refer);
    });
    //pour supprimer experiences
    delbtton.addEventListener('click', function() {   
        Refer.remove();
    })
    ReferTitle.appendChild(ReferText);
    ReferTitle.appendChild(addbtton);
    ReferTitle.appendChild(delbtton);

    Refer.appendChild(ReferTitle);
    formContainer.style.border="2.5px solid green";
    formContainer.style.marginBottom="15px ";
    formContainer.style.paddingTop="15px ";
    formContainer.style.paddingLeft="9px "
    formContainer.style.marginBottom="15px ";

    formContainer.appendChild(Refer);

//pour previsualiser le phone
    const inputnumber=document.querySelector('#telformulaire');
        const ouputnumber=document.querySelector('#setnumber');
        inputnumber.addEventListener('input',(event)=>{
            const num =event.target.value;
            setnumber.style.color="white";
        document.querySelector('#setnumber').textContent=num;
    });
//pour previsualiser l email
    const inputemail=document.querySelector('#emailformulaire');
        const ouputemail=document.querySelector('#setemail');
        inputemail.addEventListener('input',(event)=>{
            const mail =event.target.value;
            setemail.style.color="white";
        document.querySelector('#setemail').textContent=mail;
    });
//pour previsualiser l adresse
    const inputadresse=document.querySelector('#adresseformulaire');
        const ouputadresse=document.querySelector('#setadresse');
        inputadresse.addEventListener('input',(event)=>{
            const adres =event.target.value;
            setadresse.style.color="white";
        document.querySelector('#setadresse').textContent=adres;
    });

    const inputnom=document.querySelector('#nameformulaire');
        const ouputnom=document.querySelector('#setname');
        inputnom.addEventListener('input',(event)=>{
            const nom =event.target.value;
            setname.style.color="black";
        document.querySelector('#setname').textContent=nom;
    });

    const inputmeti=document.querySelector('#metierformulaire');
        const ouputmeti=document.querySelector('#setprofil');
        inputmeti.addEventListener('input',(event)=>{
            const meti =event.target.value;
            setprofil.style.color="black";
        document.querySelector('#setprofil').textContent=meti;
    });

    const inputdesc=document.querySelector('#aproposformulaire');
        const ouputdesc=document.querySelector('#setapropos');
        inputdesc.addEventListener('input',(event)=>{
            const apr =event.target.value;
            setapropos.style.color="black";
        document.querySelector('#setapropos').textContent=apr;
    });

   
}


//fonction pour ajouter Reference
cpte=0;
function  addReferElmnt(Refer){
    ReferCpter++;
    cpte++;
    var addbtton = document.createElement('button');
    addbtton.innerHTML = "+";
    var delbtton = document.createElement('button');
    delbtton.innerHTML = "x";
    delbtton.style.color="red";
    var elamnt = document.createElement('div');
    elamnt.id = "Reference"+ReferCpter;
  
    var inputrefer = document.createElement("input");
inputrefer.type="text";
inputrefer.id="surname"+cpte;
inputrefer.placeholder="name surname";
inputrefer.style.width="495px";
inputrefer.style.marginBottom="12px";
elamnt.appendChild(inputrefer);

   
   
   

        var inputnameCmpany = document.createElement("input");
        inputnameCmpany.type="text";
        inputnameCmpany.id="entreprise"+cpte;
        inputnameCmpany.style.width="495px";

        inputnameCmpany.placeholder="Company name & localisation";
elamnt.appendChild( inputnameCmpany);

var labelname=document.createElement("label");
labelname.innerHTML="phone";
elamnt.appendChild(labelname);

var inputphoneentreprise = document.createElement("input");
inputphoneentreprise.type="text";
inputphoneentreprise.id="phone"+cpte;
inputphoneentreprise.style.width="495px";

inputphoneentreprise.placeholder="enter number";
elamnt.appendChild( inputphoneentreprise);

var labelemailentreprise=document.createElement("label");
labelemailentreprise.innerHTML="Email";
elamnt.appendChild(labelemailentreprise);

var inputemailentreprise = document.createElement("input");
inputemailentreprise.type="text";
inputemailentreprise.id="email"+cpte;
inputemailentreprise.style.width="495px";

delbtton.style.marginLeft="465px";

inputemailentreprise.placeholder="enter email";

inputemailentreprise.style.marginBottom="15px ";

elamnt.style.border="2.5px solid green";
elamnt.style.marginBottom="15px ";
elamnt.style.paddingTop="15px ";
elamnt.style.paddingLeft="9px "
delbtton.style.marginBottom="15px ";

elamnt.appendChild( inputemailentreprise);
elamnt.appendChild(delbtton);

Refer.appendChild(elamnt);
delbtton.addEventListener('click', ()=>{
        elamnt.remove();
    });

    //pour previsualiser le nom de l'entreprise
    const inputsurname=document.querySelector('#surname1');
        const ouputsurname=document.querySelector('#setsurname1');
        inputsurname.addEventListener('input',(event)=>{
            const surn =event.target.value;
            setsurname1.style.color="dark";
        document.querySelector('#setsurname1').textContent=surn;
    });
     //pour previsualiser le nom de   l'entreprise
     const inputentreprse=document.querySelector('#entreprise1');
        const ouputentreprse=document.querySelector('#setentreprise1');
        inputentreprse.addEventListener('input',(event)=>{
            const entrep =event.target.value;
            setentreprise1.style.color="dark";
        document.querySelector('#setentreprise1').textContent=entrep;
    });
    //pour previsualiser le numero de telephone de   l'entreprise
    const inputnum=document.querySelector('#phone1');
        const ouputnum=document.querySelector('#setnumber1');
        inputnum.addEventListener('input',(event)=>{
            const num =event.target.value;
            setnumber1.style.color="dark";
        document.querySelector('#setnumber1').textContent=num;
    });
  //pour previsualiser l email de telephone de   l'entreprise
  const inputmail=document.querySelector('#email1');
        const ouputmail=document.querySelector('#setemail1');
        inputmail.addEventListener('input',(event)=>{
            const mail =event.target.value;
            setemail1.style.color="dark";
        document.querySelector('#setemail1').textContent=mail;
    });
    ////////////////////////////////////////

    
    //pour previsualiser le nom de l'entreprise
    const inputsurnme=document.querySelector('#surname2');
        const ouputsurnme=document.querySelector('#setsurname2');
        inputsurnme.addEventListener('input',(event)=>{
            const surnm =event.target.value;
            setsurname2.style.color="dark";
        document.querySelector('#setsurname2').textContent=surnm;
    });
     //pour previsualiser le nom de   l'entreprise
     const inputentrepr=document.querySelector('#entreprise2');
        const ouputentrepr=document.querySelector('#setentreprise2');
        inputentrepr.addEventListener('input',(event)=>{
            const entrepr =event.target.value;
            setentreprise2.style.color="dark";
        document.querySelector('#setentreprise2').textContent=entrepr;
    });
    //pour previsualiser le numero de telephone de   l'entreprise
    const inputnumb=document.querySelector('#phone2');
        const ouputnumb=document.querySelector('#setnumber2');
        inputnumb.addEventListener('input',(event)=>{
            const numb =event.target.value;
            setnumber2.style.color="dark";
        document.querySelector('#setnumber2').textContent=numb;
    });
  //pour previsualiser l email de telephone de   l'entreprise
  const inputeml=document.querySelector('#email2');
        const ouputeml=document.querySelector('#setemail2');
        inputeml.addEventListener('input',(event)=>{
            const eml =event.target.value;
            setemail2.style.color="dark";
        document.querySelector('#setemail2').textContent=eml;
    });


}

//fonction pour ajouter education
function addEducElmnt(Educ){
    EducCpter++;
    cp++;
    var addBtn = document.createElement('button');
    addBtn.innerHTML = "+";
    var delBtn = document.createElement('button');
    delBtn.textContent = "supprimer";
    delBtn.style.color="#cb5151";

    var elment = document.createElement('div');
    elment.id = "Education"+EducCpter;

    var date = document.createElement("input");
    date.type="date";
    date.id="dateformulaire"+cp;

    date.style.width="495px";
    date.style.height="40px";
    date.style.marginBottom="12px";
    var diplome = document.createElement("input");
    diplome.type="text";
    diplome.id="diplomeformulaire"+cp;
    diplome.placeholder="diplome";
    diplome.style.width="495px";
    diplome.style.height="40px";
    diplome.style.marginBottom="12px";
    var institut = document.createElement("input");
    institut.type="text";
    institut.id="institutformulaire"+cp;
    institut.placeholder="institut";
    institut.style.width="495px";
    institut.style.height="40px";
    institut.style.marginBottom="12px"

    elment.style.border="2.5px solid green";
    elment.style.marginBottom="15px ";
    elment.style.paddingTop="15px ";
    elment.style.paddingLeft="9px ";
    elment.appendChild(date);
    elment.appendChild(diplome);
    elment.appendChild(institut);
    elment.appendChild(delBtn);

    Educ.appendChild(elment);
    delBtn.style.marginLeft="420px";
    delBtn.style.borderRadius="5px";
    delBtn.style.width="81px";
    delBtn.style.height="32px";
   delBtn.style.marginBottom="15px";
    delBtn.addEventListener('click', ()=>{
        elment.remove();
    });
//pour previsualiser l annee
    const inputannee=document.querySelector('#dateformulaire1');
        const ouputannee=document.querySelector('#setannee');
        inputannee.addEventListener('input',(event)=>{
            const anne =event.target.value;
            setannee.style.color="white";
        document.querySelector('#setannee').textContent=anne;
    });
//pour previsualiser le diplome
    const inputdiplome=document.querySelector('#diplomeformulaire1');
        const ouputdiplome=document.querySelector('#setdegree');
        inputdiplome.addEventListener('input',(event)=>{
            const dipl =event.target.value;
            setdegree.style.color="white";
        document.querySelector('#setdegree').textContent=dipl;
    });
//pour previsualiser l institut
    const inputinstitut=document.querySelector('#institutformulaire1');
        const ouputinstitut=document.querySelector('#setuniversity');
        inputinstitut.addEventListener('input',(event)=>{
            const inst =event.target.value;
            setuniversity.style.color="white";
        document.querySelector('#setuniversity').textContent=inst;
    });
    
//pour previsualiser la deuxieme annee
const inputannee2=document.querySelector('#dateformulaire2');
        const ouputannee2=document.querySelector('#setannee2');
        inputannee2.addEventListener('input',(event)=>{
            const ann =event.target.value;
            setannee2.style.color="white";
        document.querySelector('#setannee2').textContent=ann;
    });
    //pour previsualiser le deuxieme diplome
    const inputdegree2=document.querySelector('#diplomeformulaire2');
        const ouputdegree2=document.querySelector('#setdegree2');
        inputdegree2.addEventListener('input',(event)=>{
            const deg2=event.target.value;
            setdegree2.style.color="white";
        document.querySelector('#setdegree2').textContent=deg2;
    });
    //pour previsualiser le deuxieme university
    const inputuniversity2=document.querySelector('#institutformulaire2');
        const ouputuniversity2=document.querySelector('#setuniversity2');
        inputuniversity2.addEventListener('input',(event)=>{
            const inst2 =event.target.value;
            setuniversity2.style.color="white";
        document.querySelector('#setuniversity2').textContent=inst2;
    });
}

//fonction pour ajouter experience
cpt=0;
function  addEperieElmnt(Eperie){
    EperieCpter++;
    cpt++;
    var addboutton = document.createElement('button');
    addboutton.innerHTML = "+";
    var delboutton = document.createElement('button');
    delboutton.innerHTML = "x";
    delboutton.style.marginLeft="465px ";
    delboutton.style.color="red";
    var elam = document.createElement('div');
    elam.id = "Experience"+EperieCpter;
   // var experient = document.createElement("input");
    //experient.type="text";
    var inputAnnee3 = document.createElement("input");
    var inputAnneefin = document.createElement("input");
    var labelanneedebut=document.createElement("label");
    var labelanneefin=document.createElement("label")
    labelanneedebut.innerHTML="date de debut";
    labelanneefin.innerHTML="date de fin";
inputAnnee3.type="date";
inputAnnee3.id="anneedebut"+cpt;
inputAnnee3.placeholder="annee";
inputAnnee3.style.width="142px";
inputAnnee3.style.marginBottom="12px";
labelanneefin.style.marginLeft="10px";

inputAnneefin.type="date";
inputAnneefin.id="anneefin"+cpt;
inputAnneefin.placeholder="annee";
inputAnneefin.style.width="142px";
inputAnneefin.style.marginBottom="12px";

elam.appendChild(labelanneedebut);
elam.appendChild(inputAnnee3);
elam.appendChild(labelanneefin);
elam.appendChild(inputAnneefin);

elam.style.border="2.5px solid green";
elam.style.marginBottom="15px ";
elam.style.paddingTop="15px ";
elam.style.paddingLeft="9px ";   
    Eperie.appendChild(elam);
        var inputnameCompany3 = document.createElement("input");
inputnameCompany3.type="text";
inputnameCompany3.style.width="495px";
inputnameCompany3.style.marginBottom="12px";

inputnameCompany3.placeholder="Company name & localisation";
inputnameCompany3.id="company"+cpt;
elam.appendChild(inputnameCompany3);

var inputJob3 = document.createElement("input");
inputJob3.type="text";
inputJob3.style.width="495px";

inputJob3.placeholder="Job position here";
inputJob3.id="position"+cpt;
inputJob3.style.marginBottom="12px";

elam.appendChild(inputJob3);

var inputDesciptionJob3 = document.createElement("input");
inputDesciptionJob3.type="textarea";
inputDesciptionJob3.id="lo"+cpt;
inputDesciptionJob3.style.width="495px";
inputDesciptionJob3.style.height="60px";
inputDesciptionJob3.style.marginBottom="12px";

delboutton.style.marginBottom="15px";


inputDesciptionJob3.placeholder="description des taches dans l'entreprise";
elam.appendChild(inputDesciptionJob3);
elam.appendChild(delboutton);

delboutton.addEventListener('click', ()=>{
        elam.remove();
    });

     //pour gerer la date de debut de l'experience
    
     const inputanneedebut=document.querySelector('#anneedebut1');
        const ouputanneedebut=document.querySelector('#setanneedebut');
        inputanneedebut.addEventListener('input',(event)=>{
            const anne =event.target.value;
            setanneedebut.style.color="black";
        document.querySelector('#setanneedebut').textContent=anne;
    });
       //pour gerer la date de fin de l'experience
    
       const inputanneefin=document.querySelector('#anneefin1');
        const ouputanneefin=document.querySelector('#setanneefin');
        inputanneefin.addEventListener('input',(event)=>{
            const anne =event.target.value;
            setanneefin.style.color="black";
        document.querySelector('#setanneefin').textContent=anne;
    });
    
       //pour gerer ta position quand tu travailais dans l'entreprise au niveau de l'experience
       const inputposition=document.querySelector('#position1');
        const ouputposition=document.querySelector('#setposition');
        inputposition.addEventListener('input',(event)=>{
            const pos=event.target.value;
            setposition.style.color="dark";
        document.querySelector('#setposition').textContent=pos;
    });

 //pour gerer la description des taches effectués dans l'entreprise au niveau de l'experience
 const inputlo=document.querySelector('#lo1');
        const ouputlo=document.querySelector('#setlo');
        inputlo.addEventListener('input',(event)=>{
            const los=event.target.value;
            setlo.style.color="dark";
        document.querySelector('#setlo').textContent=los;
    });

    
 //pour gerer la description des taches effectués dans l'entreprise au niveau de l'experience
 const inputcompany=document.querySelector('#company1');
        const ouputcompany=document.querySelector('#setcompany');
        inputcompany.addEventListener('input',(event)=>{
            const com=event.target.value;
            setcompany.style.color="dark";
        document.querySelector('#setcompany').textContent=com;
    });


       //pour gerer la 2ième date de debut de l'experience
    
       const inputanneedebut2=document.querySelector('#anneedebut2');
        const ouputanneedebut2=document.querySelector('#setanneedebut2');
        inputanneedebut2.addEventListener('input',(event)=>{
            const anne =event.target.value;
            setanneedebut2.style.color="black";
        document.querySelector('#setanneedebut2').textContent=anne;
    });
       //pour gerer la date de fin de l'experience
    
       const inputanneefin2=document.querySelector('#anneefin2');
        const ouputanneefin2=document.querySelector('#setanneefin2');
        inputanneefin2.addEventListener('input',(event)=>{
            const anne =event.target.value;
            setanneefin2.style.color="black";
        document.querySelector('#setanneefin2').textContent=anne;
    });
    
       //pour gerer ta position quand tu travailais dans l'entreprise au niveau de l'experience
       const inputposition2=document.querySelector('#position2');
        const ouputposition2=document.querySelector('#setposition2');
        inputposition2.addEventListener('input',(event)=>{
            const pos=event.target.value;
            setposition2.style.color="dark";
        document.querySelector('#setposition2').textContent=pos;
    });

 //pour gerer la description des taches effectués dans l'entreprise au niveau de l'experience
 const inputlo2=document.querySelector('#lo2');
        const ouputlo2=document.querySelector('#setlo2');
        inputlo2.addEventListener('input',(event)=>{
            const los=event.target.value;
            setlo2.style.color="dark";
        document.querySelector('#setlo2').textContent=los;
    });

    
 //pour gerer la description des taches effectués dans l'entreprise au niveau de l'experience
 const inputcompany2=document.querySelector('#company2');
        const ouputcompany2=document.querySelector('#setcompany2');
        inputcompany2.addEventListener('input',(event)=>{
            const com=event.target.value;
            setcompany2.style.color="dark";
        document.querySelector('#setcompany2').textContent=com;
    });
///////////////////////////////////



       //pour gerer la 3ième date de debut de l'experience
    
       const inputanneedebut3=document.querySelector('#anneedebut3');
        const ouputanneedebut3=document.querySelector('#setanneedebut3');
        inputanneedebut3.addEventListener('input',(event)=>{
            const anne =event.target.value;
            setanneedebut3.style.color="black";
        document.querySelector('#setanneedebut3').textContent=anne;
    });
       //pour gerer la date de fin de l'experience
    
       const inputanneefin3=document.querySelector('#anneefin3');
        const ouputanneefin3=document.querySelector('#setanneefin3');
        inputanneefin3.addEventListener('input',(event)=>{
            const anne =event.target.value;
            setanneefin3.style.color="black";
        document.querySelector('#setanneefin3').textContent=anne;
    });
    
       //pour gerer ta position quand tu travailais dans l'entreprise au niveau de l'experience
       const inputposition3=document.querySelector('#position3');
        const ouputposition3=document.querySelector('#setposition3');
        inputposition3.addEventListener('input',(event)=>{
            const pos=event.target.value;
            setposition3.style.color="dark";
        document.querySelector('#setposition3').textContent=pos;
    });

 //pour gerer la description des taches effectués dans l'entreprise au niveau de l'experience
 const inputlo3=document.querySelector('#lo3');
        const ouputlo3=document.querySelector('#setlo3');
        inputlo3.addEventListener('input',(event)=>{
            const los=event.target.value;
            setlo3.style.color="dark";
        document.querySelector('#setlo3').textContent=los;
    });

    
 //pour gerer la description des taches effectués dans l'entreprise au niveau de l'experience
 const inputcompany3=document.querySelector('#company3');
        const ouputcompany3=document.querySelector('#setcompany3');
        inputcompany3.addEventListener('input',(event)=>{
            const com=event.target.value;
            setcompany3.style.color="dark";
        document.querySelector('#setcompany3').textContent=com;
    });













}

//fonction pour ajouter expertise
function  addEperElmnt(Eper){
    EperCpter++;
    var addtn = document.createElement('button');
    addtn.innerHTML = "+";
    var deltn = document.createElement('button');
    deltn.innerHTML = "x";
    deltn.style.color="#cb5151";
    deltn.style.marginBottom="15px";
    var elmnt = document.createElement('div');
    elmnt.id = "Expertise"+EperCpter;
    var expert = document.createElement("input");
    expert.type="text";
    expert.id="expertformulaire";
    expert.style.width="495px";
    elmnt.style.border="2.5px solid green";
    elmnt.style.marginBottom="15px ";
    elmnt.style.paddingTop="15px ";
    elmnt.style.paddingLeft="9px ";

    elmnt.appendChild(expert);
    elmnt.appendChild(deltn);
    Eper.appendChild(elmnt);
    deltn.addEventListener('click', ()=>{
        elmnt.remove();
    });
//pour gerer la première expertise
    const inputexpertise=document.querySelector('#expertformulaire');
        const ouputexpertise=document.querySelector('#setexpertise1');
        inputexpertise.addEventListener('input',(event)=>{
            const expe =event.target.value;
            setexpertise1.style.color="white";
        document.querySelector('#setexpertise1').textContent=expe;
    });

    //pour gerer la seconde expertise
    const inputexpertisea=document.querySelector('#Expertise2');
        const ouputexpertisea=document.querySelector('#setexpertise2');
        inputexpertisea.addEventListener('input',(event)=>{
            const expe =event.target.value;  
            setexpertise2.style.color="white";
        document.querySelector('#setexpertise2').textContent=expe;
   });
// pour gerer la troisieme expertise
const inputexpertiseb=document.querySelector('#Expertise3');
        const ouputexpertiseb=document.querySelector('#setexpertise3');
        inputexpertiseb.addEventListener('input',(event)=>{
            const expe =event.target.value;  
            setexpertise3.style.color="white";
        document.querySelector('#setexpertise3').textContent=expe;
   });
   //pour gerer la quatrieme expertise
   const inputexpertisec=document.querySelector('#Expertise4');
        const ouputexpertisec=document.querySelector('#setexpertise4');
        inputexpertisec.addEventListener('input',(event)=>{
            const expe =event.target.value;  
            setexpertise4.style.color="white";
        document.querySelector('#setexpertise4').textContent=expe;
   });
   //pour gerer la cinquieme expertise
   const inputexpertised=document.querySelector('#Expertise5');
        const ouputexpertised=document.querySelector('#setexpertise5');
        inputexpertised.addEventListener('input',(event)=>{
            const expe =event.target.value;  
            setexpertise5.style.color="white";
        document.querySelector('#setexpertise5').textContent=expe;
    });
   //pour gerer la sixieme expertise
   const inputexpertisef=document.querySelector('#Expertise6');
        const ouputexpertisef=document.querySelector('#setexpertise6');
        inputexpertisef.addEventListener('input',(event)=>{
            const expe =event.target.value;  
            setexpertise6.style.color="white";
        document.querySelector('#setexpertise6').textContent=expe;
    });

}

//la fonction pour l'evenement click à langue
function  addLangElmnt(Lang){
    LangCpter++;
    var addbt = document.createElement('button');
    addbt.innerHTML = "+";
    var delbt = document.createElement('button');
    delbt.innerHTML = "x";

    var elt = document.createElement('div');
    elt.id = "Langue"+LangCpter;
    var langue = document.createElement("input");
    langue.type="text";
    langue.id="langueformulaire";
    //langue.id="langueformulaire2";
    langue.style.width="495px";
    delbt.style.color="red";
    delbt.style.marginBottom="15px";

    elt.style.border="2.5px solid green";
    elt.style.marginBottom="15px ";
    elt.style.paddingTop="15px ";
    elt.style.paddingLeft="9px ";

    elt.appendChild(langue);
    elt.appendChild(delbt);
  
    Lang.appendChild(elt);
    
    
    delbt.addEventListener('click', ()=>{
        elt.remove();
    });
    
   //pour prévisualiser la première langue
    const inputlangue=document.querySelector('#langueformulaire');
        const ouputlangue=document.querySelector('#setlangue');
        inputlangue.addEventListener('input',(event)=>{
            const lan =event.target.value;
            setlangue.style.color="white";   
        document.querySelector('#setlangue').textContent=lan;
    });
//pour prévisualiser la seconde langue
    const inputlangue2=document.querySelector('#Langue2');
        const ouputlangue2=document.querySelector('#setlangue2');
        inputlangue2.addEventListener('input',(event)=>{
            const lan =event.target.value;
            setlangue2.style.color="white";   
        document.querySelector('#setlangue2').textContent=lan;
    });

}







       
    
 







</script>



<script type="text/javascript" src="../../../assets/js/importer.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>