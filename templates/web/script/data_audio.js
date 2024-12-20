
let entrepreneur_categorie = 
    {
        "fieldName":["production","marketing","vente"],
        "category function":["fieldBusiness"]
    }
;

let audioBusinessData = [
//catg = catégorie
            {
                id:"entrepreneur_1",
                title:"Comment se faire des amis",
                img:"comment-se-faire-des-amis-2.jpg",
                audio:"how_to_win_friends_def.mp3",
                catg:3,
                desc:" Cultivez des relations authentiques pour réussir dans la vie. L'empathie, la sincérité et l'écoute active sont vos meilleurs alliés",
                author:'Dale Carnegie',
                duration:"01:30"
            },
            {
                id:"entrepreneur_2",
                title:"Lean Startup",
                img:"lean_startup.jpg",
                audio:"lean_startup_def.mp3",
                catg:1,
                desc:"Testez, apprenez, adaptez. Réduisez les risques et accélérez la croissance de votre startup grâce à une approche itérative et axée sur le client.",
                author:'Eric Ries',
                duration:"01:30"
            },
            {
                id:"entrepreneur_3",
                title:"Die empty",
                img:"die_empty.jpg",
                audio:"die_empty_def.mp3",
                catg:"",
                desc:"Ne partez pas de ce monde avec des regrets. Vivez pleinement, suivez vos passions et laissez votre marque",
                author:'Todd Henri',
                duration:"01:30"
            }

       ,
        {
                id:"entrepreneur_4",
                title:"L'Alchimiste",
                img:"alchimiste.jpg",
                audio:"alchimiste_def.mp3",
                catg:"",
                desc:"Suivez votre cœur et votre intuition pour réaliser votre <i>légende personnelle</i>. Les obstacles sont des opportunités de grandir",
                author:'Paulo Coelho',
                duration:"01:30"
        },
        {
            id:"entrepreneur_5",
            title:"Parler en public",
            img:"parler_en_public.jpeg",
            audio:"parler_en_public_def.mp3",
            catg:3,
            desc:"Communiquez efficacement avec des publics variés pour promouvoir votre entreprise et influencer le changement.Maîtrisez l'art de la communication pour inspirer et convaincre. Une bonne préparation et une attitude confiante font toute la différence",
             author:'Dale Carnegie',
            duration:"01:30"
        }

       ,
   
        {
                id:"entrepreneur_6",
                title:"Startup Owner",
                img:"startup_owner.jpg",
                audio:"startup_owner_def.mp3",
                catg:1,
                desc:"Comment construire une entreprise qui grandit rapidement ? Blank entrepreneur chevronné de la Sillicon Valley dévoile le secret des grandes entreprises technologiques",
                author:'Steve Blank',
                duration:"01:30"
        },
        {
            id:"entrepreneur_7",
            title:"La Vache Pourpre de Seth Godin",
            img:"vache_pourpre.jpg",
            audio:"vache_pourpre_def.mp3",
            catg:2,
            desc:"Comment se démarquer dans un monde sursaturé d'informations et de produits ? Godin invite les entreprises à devenir remarquables en créant des produits ou des services qui sortent de l'ordinaire et qui suscitent l'intérêt",
             author:'Seth Godin',
            duration:"01:30"
    }
   ,
   {
    id:"entrepreneur_8",
    title:"Influence et Manipulation de Robert Cialdini",
    img:"influence_et_manipulation.jpg",
    audio:"influence_et_manipulation_def.mp3",
    catg:2,
    desc:"Quels sont les mécanismes psychologiques qui nous poussent à dire oui ?Cialdini explore les différentes techniques de persuasion et d'influence sociale que nous utilisons au quotidien, souvent sans nous en rendre compte.",
    author:'Robert Cialdini',
    duration:"01:30"
}
,
{
    id:"entrepreneur_9",
    title:"Marketing 4.0 : Produits, clients, facteur humain d'Hermawan Kartajaya",
    img:"marketing_4_0.jpg",
    audio:"marketing_4_0_def.mp3",
    catg:2,
    desc:"Comment le marketing doit-il évoluer à l'ère du numérique et de la mondialisation ? <i>Kartajaya propose une vision holistique du marketing, en mettant l'accent sur l'importance de l'expérience client, de la culture et de la technologie</i>",
    author:'Hermawan Kartajaya',
    duration:"01:30"
},
{
    id:"entrepreneur_10",
    title:"Why things Catch On de Jonah Berger",
    img:"why_things_catch_on.jpg",
    audio:"why_things_catch_def.mp3",
    catg:2,
    desc:"Pourquoi certaines idées se répandent comme une traînée de poudre alors que d'autres meurent dans l'œuf ?",
    author:'Jonah Berger',
    duration:"01:30"
},
{
    id:"entrepreneur_11",
    title:"Zero to One",
    img:"zero_to_one.jpg",
    audio:"zero_to_one_def.mp3",
    catg:1,
    desc:"<i>Zero to One</i> est un chef d'oeuvre écrit par Peter Thiel, un investisseur à Facebook et une des figures éminentes de la technologie. ",
    author:'Peter Thiel',
    duration:"01:30"
}


       

];



let profession_categorie = 
    {
        "fieldName":["Comptable","recrutement","salaire"],
        "category function":["fieldProfession"]
    }
;
let audioProfessionData = [
    //catg = catégorie
                {
                    id:"profession_1",
                    title:"Etre un comptable",
                    img:"comment-se-faire-des-amis-2.jpg",
                    audio:"how_to_win_friends.mp3",
                    catg:3,
                    desc:" Cultivez des relations authentiques pour réussir dans la vie. L'empathie, la sincérité et l'écoute active sont vos meilleurs alliés"
                    
                },
                {
                    id:"profession_2",
                    title:"Lean Startup",
                    img:"",
                    audio:"lean_startup.mp3",
                    catg:1,
                    desc:"Testez, apprenez, adaptez. Réduisez les risques et accélérez la croissance de votre startup grâce à une approche itérative et axée sur le client."
                },
                {
                    id:"profession_3",
                    title:"Die empty",
                    img:"",
                    audio:"die_empty.mp3",
                    catg:1,
                    desc:"Ne partez pas de ce monde avec des regrets. Vivez pleinement, suivez vos passions et laissez votre marque"
                }
    
           ,
            {
                    id:"profession_4",
                    title:"L'Alchimiste",
                    img:"alchimiste.jpg",
                    audio:"alchimiste.mp3",
                    catg:2,
                    desc:"Suivez votre cœur et votre intuition pour réaliser votre <i>légende personnelle</i>. Les obstacles sont des opportunités de grandir"
            },
            {
                id:"profession_5",
                title:"Parler en public",
                img:"parler_en_public.jpeg",
                audio:"parler_en_public.mp3",
                catg:4,
                desc:"Communiquez efficacement avec des publics variés pour promouvoir votre entreprise et influencer le changement.Maîtrisez l'art de la communication pour inspirer et convaincre. Une bonne préparation et une attitude confiante font toute la différence"
            }
    
           ,
       
            {
                    id:"entrepreneur_6",
                    title:"Père riche, Père pauvre",
                    img:"kiyosaki.jpg",
                    audio:"pere_riche_pere_pauvre.mp3",
                    catg:3,
                    desc:"L'argent ne fait pas le bonheur, mais il vous offre la liberté. Apprenez à investir, à créer des revenus passifs et à sortir de la course aux rats"
            }
           
    
    ];

    let family_categorie = 
    {
        "fieldName":["enfance","education","couple"],
        "category function":["fieldFamily"]
    }
;
let audioFamilyData = [
    //catg = catégorie
                {
                    id:"family_1",
                    title:"Parler pour que les enfants écoutent, écouter pour que les enfants parlent" ,
                    img:"comment-se-faire-des-amis-2.jpg",
                    audio:"how_to_win_friends.mp3",
                    catg:3,
                    desc:"Un enfant a passé des heures à construire une tour de Lego. Un petit frère, plein d'enthousiasme, la renverse accidentellement. Le premier enfant est furieux. Comment gérer cette situation ? "
                    
                },
                {
                    id:"family_2",
                    title:"Au cœur des émotions de l'enfant",
                    img:"",
                    audio:"lean_startup.mp3",
                    catg:1,
                    desc:"Un enfant jette son jouet par terre et crie. Comment réagir face à cette explosion de colère ?"
                },
                {
                    id:"family_3",
                    title:"La discipline positive",
                    img:"",
                    audio:"die_empty.mp3",
                    catg:1,
                    desc:"Un enfant ne veut pas ranger sa chambre. La punition est-elle la solution ?"
                }
    
           ,
                {
                    id:"family_4",
                    title:"Pour une enfance heureuse",
                    img:"alchimiste.jpg",
                    audio:"alchimiste.mp3",
                    catg:2,
                    desc:"Comment aider un enfant qui a peur du noir ?"
            },
            {
                id:"family_5",
                title:"Tout se joue avant 6 ans",
                img:"parler_en_public.jpeg",
                audio:"parler_en_public.mp3",
                catg:4,
                desc:"Le cerveau d'un enfant se développe de manière exponentielle pendant les premières années de vie. Comment stimuler ce développement ?"
            }
    
          
    
    ];




