let nav = document.getElementById("nav");

window.addEventListener("scroll", () => {
  if (window.scrollY > 50) {
    nav.classList.add("scrolled");
    nav.classList.add("nav-blur");
  } else {
    nav.classList.remove("scrolled");
    nav.classList.remove("nav-blur");
  }
});

document.addEventListener('DOMContentLoaded', function() {
  const menuToggle = document.getElementById('menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu');
  const menuIcon = document.getElementById('menu-icon');
  
 
  function closeMenu() {
    mobileMenu.classList.add('hidden');
    menuIcon.classList.remove('bi-x');
    menuIcon.classList.add('bi-list');
  }
  
  
  function toggleMenu() {
    const isHidden = mobileMenu.classList.contains('hidden');
    
    if(isHidden) {
      mobileMenu.classList.remove('hidden');
      menuIcon.classList.remove('bi-list');
      menuIcon.classList.add('bi-x');
    } else {
      closeMenu();
    }
  }
  
  

  menuToggle.addEventListener('click', function(e) {
    e.stopPropagation();
    toggleMenu();
  });
  
 
  const menuItems = mobileMenu.querySelectorAll('a');
  menuItems.forEach(item => {
    item.addEventListener('click', function() {
      closeMenu();
    });
  });
  

  document.addEventListener('click', function(e) {
    if (!mobileMenu.classList.contains('hidden') && 
        !mobileMenu.contains(e.target) && 
        e.target !== menuToggle) {
      closeMenu();
    }
  });
});

// document.addEventListener("DOMContentLoaded", function () {
//     const paragraphs = document.querySelectorAll(".paragraphs");

//     paragraphs.forEach(p => {
//       let text = p.textContent.trim();

//       if (text.length > 12) {
//         p.textContent = text.substring(0, 90) + "...";
//       }
//     });
//   });

//   document.addEventListener("DOMContentLoaded", function () {
//     const title = document.querySelectorAll(".title");

//     title.forEach(h => {
//       let t = h.textContent.trim();

//       if (t.length > 9) {
//         h.textContent = t.substring(0, 30) + "...";
//       }
//     });
//   });

window.addEventListener("load", function () {
  // Pour les descriptions
  document.querySelectorAll(".paragraphs").forEach(p => {
    const text = p.textContent.trim();
    if (text.length > 80) {
      p.textContent = text.substring(0, 80) + "…";
    }
  });

  // Pour les titres
  document.querySelectorAll(".title").forEach(h => {
    const t = h.textContent.trim();
    if (t.length > 20) {
      h.textContent = t.substring(0, 20) + "…";
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {

  const langToggle = document.getElementById("lang-toggle");
  const langToggl = document.getElementById("lang-toggl");


  const translations = {
    // Navigation
    Home: "Accueil",
    Services: "Services",
    About: "À propos",
    Teams: "Équipe",
    Contact: "Contact",
   

    // Hero section
    "Solving daily problems through digital solutions":
      "Résoudre les problèmes quotidiens grâce aux solutions numériques",
    "Microgels specializes in providing digital solutions for small and medium-sized businesses. Our services include application/website development, IT network administration, graphic design, and digital skills training support, making us the ideal IT partner to boost your business growth.":
      "Microgels est une entreprise spécialisée dans la fourniture des solutions numériques pour les petites et moyenes entreprises. Nos Services incluent le développement d'applications/sites web, l'administration des réseaux informatiques, le graphisme et l'accompagnement dans l'apprentissage des competences numériques; ce qui fait de nous le partenaire informatique idéal pour stimuler la croissance de votre entreprise",
    "Explore Microgels Services": " Explorer les services Microgels",

    // Services section
    "What we serve": "Ce que nous servons",
    "Our Best services": "Nos meilleurs services",
    "Use our services and boost your business growth":
      "Se procurer de nos services et stimuler la croissance de votre entreprise",
    "Development and Application Creation":
      "Développement et Création d'Applications",
    "We design websites, web applications, mobile apps and desktop apps on demand":
      "Nous concevons des Sites web, applications web, mobiles et desktops sur mesure",
    "IT Infrastructure, Security and Maintenance":
      "Infrastructure, Sécurité et Maintenance IT",
    "We set up local networks, video surveillance, IT maintenance and IT consulting":
      "Nous mettons en place les Réseaux locaux, vidéosurveillance, maintenance informatique et IT consulting",
    "Training in Computer Science and Technology":
      "Formations en Informatique et Technologies",
    "From initiation to cybersecurity through programming and office automation, certified training.":
      "De l'initiation à la cybersécurité en passant par la programmation et la bureautique, de formation certifiantes.",

    // Team section
    "Our Team": "Notre équipe",
    "Our Team Members": "Membres de notre équipe",
    "Experts at your service for tailor-made solutions. Collaboration, attentiveness, and transparency are at the heart of our commitment to meeting your needs with excellence.":
      " Des experts à votre service pour des solutions sur mesure. Collaboration, écoute et transparence sont au cœur de notre engagement pour répondre à vos besoins avec excellence. ",
    "View all": "Voir tout",
    "HEAD OF HUMAN RESOURCES": "CHEF DE RESSOURCES HUMAINES",
    "SPOKESPERSON": "PORTE PAROLE",
    "QUALITY ASSURANCE": "ASSURANCE QUALITE",
    "EXECUTIVE CHEF": "CHEF EXECUTIF",
    "SECRETARY": "SECRETAIRE",

    // Testimonials
    "Testimonials": "Témoignages",
    "What our Clients Says": "Ce que disent nos clients",
    "Your satisfaction motivates us every day. Find out what our customers say about us!":
      "Votre satisfaction nous motive chaque jour. Découvrez ce que nos clients disent de nous ! ",
    "Thanks to Microgels, I was able to master office automation in record time. Competent trainers":
      "Grâce à Microgels, j’ai pu maîtriser la bureautique en un temps record. Des formateurs compétents",
    "Microgels exceeded our expectations! Their expertise in application development allowed us to launch our project faster than expected. A responsive and competent team! 👏":
      "Microgels a dépassé nos attentes ! Leur expertise en développement d’applications nous a permis de lancer notre projet plus rapidement que prévu. Une équipe réactive et compétente ! 👏",
    "Clear and practical training! I learned a lot in a short time. Thanks to Microgels, I'm now comfortable with office tools and network management. Thank you! 🙏":
      "Une formation claire et pratique ! J’ai beaucoup appris en peu de temps. Grâce à Microgels, je suis maintenant à l’aise avec les outils bureautiques et la gestion réseau. Merci ! 🙏",
    "Their maintenance service is fast and efficient. My business couldn't be better supported. Thank you! 🙌":
      "Leur service de maintenance est rapide et efficace. Mon entreprise ne pourrait pas mieux être accompagnée. Merci ! 🙌",



    // Blog section
    "Latest News & Blogs": "Dernières nouvelles et blogs",
    "Discover our articles, advice, and analyses on development, networks, cybersecurity, and much more.":
      "Découvrez nos articles, conseils et analyses sur le développement, les réseaux, la cybersécurité et bien plus encore.",
    "Technology": "Technologie",
    "Share this post": "Partager cet article",
    "Related Posts": "Articles simulaires",
    "Popular Category": "Catégories populaires",
    "Popular Tags": "Tags populaires",
    // "comments": "commentaires",
    "Name": "Nom",
    "Email adress": "Email",
    "Your Comment": "Votre commentaire",
    "Post Comment": "Poster un commentaire",
    "Your comment has been posted successfully and is awaiting moderation.":
      "Votre commentaire a été posté avec succès et est en attente de modération.",
    "Share this post": "Partager cet article",
    "Copy": "Copier",
    "Link copied !": "Lien copié !",

    // Contact section
    "Contact Us": "Contactez-nous",
    "GET IN TOUCH WITH US": "ENTRER EN CONTACT AVEC NOUS",
    "Need a service, advice, or training? Our team is here to help.":
      "Besoin d’un service, d’un conseil ou d’une formation ? Notre équipe est à votre écoute pour vous accompagner. ",
    "Our Location": " Notre Addresse",
    "Phone Number": "Numéro de téléphone",
    "Email Address": "Adresse e-mail",
    "Send Message": "Envoyer",

    // Footer
    "Company": "Entreprise",
    "Links": "Liens",
    "About Us": "À propos de nous",
    "Contacts": "Contacts",
    "Team": "Équipe",
    "Our Services": "Nos services",
    "Web/Application Design": "Conception d'applications/sites",
    "IT Network Administration": "Administration des réseaux informatiques",
    "Management Application Development": "Création d'applications de gestion",
    "Support in Learning Digital Skills":
      "Accompagnement dans l'apprentissage des métiers numériques",
    "Graphic Design": "Graphisme",
    "Write to us or order a service": "Nous écrire ou commander un service",
    "We handle communication with customers via email, WhatsApp or online chat":
      "Nous prenons en charge la communication avec les clients via email, WhatsApp ou un chat en ligne",
    "Message": "Message",
    "Send": "Envoyer",
    "empty message!": "message vide !",
  };

  // Fonction de traduction
  function translatePage(targetLang) {
    const elements = document.querySelectorAll("[data-translate]");

    elements.forEach((element) => {
      const key = element.getAttribute("data-translate");
      if (translations[key]) {
        element.textContent = targetLang === "fr" ? translations[key] : key;
      }
    });

    // Mettre à jour le texte du bouton de langue
    if (langToggle) langToggle.textContent = targetLang === "fr" ? "FR" : "EN";
    if (langToggl) langToggl.textContent = targetLang === "fr" ? "FR" : "EN";
  }

  // Gestionnaire d'événements pour le bouton de langue
  function handleLanguageToggle() {
    const currentLang = document.documentElement.lang || "fr";
    const newLang = currentLang === "fr" ? "en" : "fr";

    document.documentElement.lang = newLang;
    translatePage(newLang);

    // Stocker la préférence de langue
    localStorage.setItem("preferredLang", newLang);
  }

  // Ajouter les écouteurs d'événements
  if (langToggle) langToggle.addEventListener("click", handleLanguageToggle);
  if (langToggl) langToggl.addEventListener("click", handleLanguageToggle);

  // Vérifier la langue préférée stockée
  const preferredLang = localStorage.getItem("preferredLang") || "fr";
  if (preferredLang !== "fr") {
    document.documentElement.lang = preferredLang;
    translatePage(preferredLang);
  }


  function initTranslationAttributes() {
   
  }

  initTranslationAttributes();
});


 const modal = document.getElementById('shareModal');
  const openBtn = document.getElementById('openShareModal');
  const closeBtn = document.getElementById('closeShareModal');
  const copyBtn = document.getElementById('copyLinkBtn');
  const copyMsg = document.getElementById('copyMsg');
  const postLink = document.getElementById('postLink');

  openBtn.addEventListener('click', () => modal.classList.remove('hidden'));
  closeBtn.addEventListener('click', () => modal.classList.add('hidden'));

  modal.addEventListener('click', (e) => {
    if (e.target === modal) modal.classList.add('hidden');
  });

  copyBtn.addEventListener('click', () => {
    navigator.clipboard.writeText(postLink.value)
      .then(() => {
        copyMsg.classList.remove('hidden');
        setTimeout(() => copyMsg.classList.add('hidden'), 2000);
      });
  });


