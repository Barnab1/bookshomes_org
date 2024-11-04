let toggleMenu = document.getElementById('toggleMenu');
let toggleButton = document.getElementById('toggleButton');


    toggleButton.addEventListener("click",(e)=>{
        toggleButton.classList.toggle("on");
        toggleMenu.classList.toggle("on");
        
        
    });


let audioEntrepreneursData = [
    {
        id:"entrepreneur_1",
        title:"Comment se faire des amis",
        img:"comment-se-faire-des-amis-2.jpg",
        audio:"how_to_win_friends.mp3",
        desc:" Cultivez des relations authentiques pour réussir dans la vie. L'empathie, la sincérité et l'écoute active sont vos meilleurs alliés"
    
    },
    {
        id:"entrepreneur_2",
        title:"Lean Startup",
        img:"",
        audio:"lean_startup.mp3",
        desc:"Testez, apprenez, adaptez. Réduisez les risques et accélérez la croissance de votre startup grâce à une approche itérative et axée sur le client."
    },
    {
        id:"entrepreneur_3",
        title:"Die empty",
        img:"",
        audio:"die_empty.mp3",
        desc:"Ne partez pas de ce monde avec des regrets. Vivez pleinement, suivez vos passions et laissez votre marque"
    },
    {
        id:"entrepreneur_4",
        title:"L'Alchimiste",
        img:"alchimiste.jpg",
        audio:"alchimiste.mp3",
        desc:"Suivez votre cœur et votre intuition pour réaliser votre <i>légende personnelle</i>. Les obstacles sont des opportunités de grandir"
    },
    {
        id:"entrepreneur_5",
        title:"Parler en public",
        img:"parler_en_public.jpeg",
        audio:"parler_en_public.mp3",
        desc:"Communiquez efficacement avec des publics variés pour promouvoir votre entreprise et influencer le changement.Maîtrisez l'art de la communication pour inspirer et convaincre. Une bonne préparation et une attitude confiante font toute la différence"
    },
    {
        id:"entrepreneur_6",
        title:"Père riche, Père pauvre",
        img:"kiyosaki.jpg",
        audio:"pere_riche_pere_pauvre.mp3",
        desc:"L'argent ne fait pas le bonheur, mais il vous offre la liberté. Apprenez à investir, à créer des revenus passifs et à sortir de la course aux rats"
    },
    /*
    {
        id:"entrepreneur_7",
        title:"",
        img:"",
        audio:"",
        desc:""
    }
        */


];

