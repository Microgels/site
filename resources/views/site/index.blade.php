@extends('site.layouts.header')
@section('title', 'Microgels | Automatizer les taches, faciliter le travail')
@section('style')
/* From Uiverse.io by abrahamcalsin */ 
.dot-spinner {
  --uib-size: 2.8rem;
  --uib-speed: .9s;
  --uib-color: #183153;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  height: var(--uib-size);
  width: var(--uib-size);
}

.dot-spinner__dot {
  position: absolute;
  top: 0;
  left: 0;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  height: 100%;
  width: 100%;
}

.dot-spinner__dot::before {
  content: '';
  height: 20%;
  width: 20%;
  border-radius: 50%;
  background-color: var(--uib-color);
  transform: scale(0);
  opacity: 0.5;
  animation: pulse0112 calc(var(--uib-speed) * 1.111) ease-in-out infinite;
  box-shadow: 0 0 20px rgba(18, 31, 53, 0.3);
}

.dot-spinner__dot:nth-child(2) {
  transform: rotate(45deg);
}

.dot-spinner__dot:nth-child(2)::before {
  animation-delay: calc(var(--uib-speed) * -0.875);
}

.dot-spinner__dot:nth-child(3) {
  transform: rotate(90deg);
}

.dot-spinner__dot:nth-child(3)::before {
  animation-delay: calc(var(--uib-speed) * -0.75);
}

.dot-spinner__dot:nth-child(4) {
  transform: rotate(135deg);
}

.dot-spinner__dot:nth-child(4)::before {
  animation-delay: calc(var(--uib-speed) * -0.625);
}

.dot-spinner__dot:nth-child(5) {
  transform: rotate(180deg);
}

.dot-spinner__dot:nth-child(5)::before {
  animation-delay: calc(var(--uib-speed) * -0.5);
}

.dot-spinner__dot:nth-child(6) {
  transform: rotate(225deg);
}

.dot-spinner__dot:nth-child(6)::before {
  animation-delay: calc(var(--uib-speed) * -0.375);
}

.dot-spinner__dot:nth-child(7) {
  transform: rotate(270deg);
}

.dot-spinner__dot:nth-child(7)::before {
  animation-delay: calc(var(--uib-speed) * -0.25);
}

.dot-spinner__dot:nth-child(8) {
  transform: rotate(315deg);
}

.dot-spinner__dot:nth-child(8)::before {
  animation-delay: calc(var(--uib-speed) * -0.125);
}

@keyframes pulse0112 {
  0%,
  100% {
    transform: scale(0);
    opacity: 0.5;
  }

  50% {
    transform: scale(1);
    opacity: 1;
  }
}
@endsection
@section('body')
<div
id="acceuil"
class="relative bg-white dark:bg-dark pt-[20px] pb-[110px] lg:pt-[150px]"
>
<div class="container mx-auto px-6">
  <div class="flex flex-wrap -mx-4 items-center">
    <div class="w-full px-4 lg:w-5/12">
      <div class="hero-content flex flex-col items-center md:block">
        <h1
          data-translate="Solving daily problems through digital solutions"
          class="mb-3 text-4xl font-bold leading-snug text-[#1f2039] text-center md:text-start sm:text-[42px] lg:text-[40px] xl:text-[42px]"
        >
          Résoudre les problèmes quotidiens grâce aux solutions numériques
        </h1>
        <p
          data-translate="Microgels specializes in providing digital solutions for small and medium-sized businesses. Our services include application/website development, IT network administration, graphic design, and digital skills training support, making us the ideal IT partner to boost your business growth."
          class="mb-8 max-w-[480px] text-gray-500 text-center md:text-start"
        >
          Microgels est une entreprise spécialisée dans la fourniture des
          solutions numériques pour les petites et moyenes entreprises.
          Nos Services incluent le développement d'applications/sites web,
          l'administration des réseaux informatiques, le graphisme et
          l'accompagnement dans l'apprentissage des competences
          numériques; ce qui fait de nous le partenaire informatique idéal
          pour stimuler la croissance de votre entreprise
        </p>
        <ul class="flex flex-wrap items-center">
          <a
            data-translate="Explore Microgels Services"
            href="{{ route('home') }}#services"
            class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-center text-white rounded-md bg-[#1f2039] hover:bg-blue-dark lg:px-7"
          >
            Explorer les services Microgels
          </a>
        </ul>
      </div>
    </div>
    <div class="hidden px-4 lg:block lg:w-1/12"></div>
    <div class="w-full px-4 lg:w-6/12">
      <div class="lg:ml-auto lg:text-right">
        <div class="relative z-10 inline-block pt-11 lg:pt-0">
          <img
            src="{{ asset('img/hero.svg') }}"
            alt="hero"
            class="max-w-full lg:ml-auto"
          />
          <span class="absolute -left-8 -bottom-8 z-[-1]">
            <svg
              width="93"
              height="93"
              viewBox="0 0 93 93"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <div
                class="w-32 h-32"
                style="
                  background-image: radial-gradient(
                    #a5b4fc 3px,
                    transparent 3px
                  );
                  background-size: 18px 18px;
                "
              ></div>
            </svg>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- services section -->

<section
id="services"
class="pt-20 pb-12 lg:pt-[120px] dark:bg-dark lg:pb-[90px]"
>
<div class="container mx-auto">
  <div class="flex flex-wrap -mx-4">
    <div class="w-full px-6">
      <div class="mx-auto mb-[60px] max-w-[510px] text-center">
        <span
          data-translate="What we serve"
          class="block mb-2 text-lg font-semibold text-[#a5b4fc]"
        >
          Ce que nous servons
        </span>
        <h2
          data-translate="Our Best services"
          class="text-[#1f2039] mb-3 text-3xl leading-[1.2] font-bold sm:text-4xl md:text-[40px]"
        >
          Nos meilleurs services
        </h2>
        <p
          data-translate="Use our services and boost your business growth"
          class="text-gray-500"
        >
          Se procurer de nos services et stimuler la croissance de votre
          entreprise
        </p>
      </div>
    </div>
  </div>
  <div class="flex flex-wrap justify-center -mx-4 px-6">
    <div class="w-full px-4 sm:w-4/5 md:w-1/2 lg:w-1/3">
      <div
        class="group relative mb-8 rounded-xl hover:shadow-sm hover:shadow-[#a5b4fc] duration-300 border border-gray-200 bg-white p-10 text-center md:px-8 lg:py-9 lg:px-6 xl:py-[45px] xl:px-[43px]"
      >
        <div
          class="relative z-10 inline-flex items-center mx-auto mb-10 h-11"
        >
          <span
            class="bg-[#a5b4fc] absolute -right-3 top-0 z-[-1] h-[34px] w-[34px] rounded-full opacity-10"
          ></span>
          <svg
            width="51"
            height="50"
            viewBox="0 0 51 50"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M48.2129 27.75H46.3848C45.7676 27.75 45.2441 27.0312 45.2441 26.1875V14.375C45.2441 13.5078 45.8066 12.75 46.4473 12.75H48.2129C48.6273 12.75 49.0247 12.5853 49.3177 12.2923C49.6108 11.9993 49.7754 11.6019 49.7754 11.1875C49.7754 10.7731 49.6108 10.3756 49.3177 10.0826C49.0247 9.78958 48.6273 9.62496 48.2129 9.62496H46.4473C45.6834 9.63491 44.9363 9.85058 44.2846 10.2493C43.6329 10.648 43.1008 11.215 42.7441 11.8906H32.5176L31.0254 10.5859C29.6979 9.3961 28.1019 8.54574 26.3739 8.10763C24.6459 7.66951 22.8375 7.65669 21.1035 8.07027C16.7285 9.17964 13.8379 12.7031 12.8301 14.1562H11.2676C11.2851 12.9959 10.8506 11.8743 10.056 11.0287C9.26132 10.183 8.1689 9.6796 7.00977 9.62496H2.90039C2.48599 9.62496 2.08856 9.78958 1.79554 10.0826C1.50251 10.3756 1.33789 10.7731 1.33789 11.1875C1.33789 11.6019 1.50251 11.9993 1.79554 12.2923C2.08856 12.5853 2.48599 12.75 2.90039 12.75H6.99414C7.61133 12.75 8.13477 13.4609 8.13477 14.3125V26.1171C8.13477 26.9843 7.57227 27.75 6.93164 27.75H2.90039C2.48599 27.75 2.08856 27.9146 1.79554 28.2076C1.50251 28.5006 1.33789 28.8981 1.33789 29.3125C1.33789 29.7269 1.50251 30.1243 1.79554 30.4173C2.08856 30.7103 2.48599 30.875 2.90039 30.875H6.93164C7.69117 30.8592 8.4327 30.6409 9.07961 30.2426C9.72651 29.8443 10.2553 29.2804 10.6113 28.6093H11.1582C11.7521 28.6105 12.3357 28.7638 12.8535 29.0546C12.8139 29.2662 12.8185 29.4837 12.8669 29.6934C12.9153 29.9031 13.0065 30.1006 13.1348 30.2734L14.9395 32.6875C15.1519 32.9635 15.4479 33.1635 15.7832 33.2578L18.1738 33.8984L19.2441 36.1796C19.3399 36.3842 19.4789 36.5656 19.6516 36.7112C19.8242 36.8569 20.0264 36.9634 20.2441 37.0234L22.7598 37.7109L24.3926 40.3046C24.5986 40.6321 24.9187 40.8715 25.291 40.9765L29.6426 42.1875C29.7797 42.2275 29.9216 42.2485 30.0645 42.25C30.3204 42.2503 30.5725 42.1879 30.7986 42.068C31.0248 41.9481 31.218 41.7745 31.3613 41.5625L39.5254 29.4375C39.5971 29.3314 39.6937 29.2446 39.8067 29.1847C39.9198 29.1248 40.0459 29.0935 40.1738 29.0937H43.041C43.4169 29.6348 43.9162 30.0786 44.4977 30.3883C45.0791 30.6981 45.726 30.8649 46.3848 30.875H48.2129C48.6273 30.875 49.0247 30.7103 49.3177 30.4173C49.6108 30.1243 49.7754 29.7269 49.7754 29.3125C49.7754 28.8981 49.6108 28.5006 49.3177 28.2076C49.0247 27.9146 48.6273 27.75 48.2129 27.75ZM15.3535 15.9687C16.1895 14.789 18.4785 11.9531 21.8691 11.0937C23.1138 10.8063 24.4095 10.8238 25.646 11.1448C26.8824 11.4659 28.023 12.0808 28.9707 12.9375L32.166 15.7187C32.5549 16.0161 32.8127 16.4532 32.8848 16.9375C32.8908 17.0594 32.8718 17.1812 32.8288 17.2955C32.7857 17.4097 32.7197 17.5139 32.6348 17.6015L31.3066 19.0234C30.9691 19.3887 30.5075 19.615 30.0121 19.6584C29.5166 19.7017 29.0228 19.5589 28.627 19.2578L28.3145 19.0234C27.3474 18.2923 26.1483 17.9361 24.939 18.0209C23.7297 18.1056 22.5919 18.6255 21.7363 19.4843L14.8379 26.6171C13.7811 25.8988 12.5374 25.5051 11.2598 25.4843V17.2812H12.8223C13.318 17.2789 13.8062 17.1587 14.2463 16.9305C14.6864 16.7023 15.066 16.3726 15.3535 15.9687ZM36.9395 27.6875L29.4004 38.875L26.7129 38.0937L25.0801 35.5C24.8722 35.171 24.549 34.9314 24.1738 34.8281L21.7676 34.1718L20.6895 31.8828C20.5937 31.6782 20.4547 31.4968 20.282 31.3512C20.1094 31.2055 19.9072 31.099 19.6895 31.039L17.1191 30.3515L16.4316 29.4375L23.9473 21.625C24.2729 21.3043 24.703 21.1114 25.159 21.0813C25.615 21.0512 26.0666 21.1859 26.4316 21.4609L26.7441 21.6953C27.7581 22.4607 29.02 22.8229 30.2856 22.7118C31.5512 22.6007 32.7306 22.0241 33.5957 21.0937L34.9316 19.7343C35.3031 19.3396 35.5908 18.8738 35.7775 18.3649C35.9641 17.8561 36.0458 17.3147 36.0176 16.7734C35.9849 16.1594 35.8197 15.5597 35.5332 15.0156H42.1191V25.9531H40.1738C39.5339 25.9551 38.9042 26.1144 38.3403 26.4168C37.7763 26.7192 37.2953 27.1555 36.9395 27.6875Z"
              fill="#a5b4fc"
            />
          </svg>
        </div>
        <h4
          data-translate="Development and Application Creation"
          class="text-[#1f2039] mb-[14px] text-2xl font-bold"
        >
          Développement et Création d’Applications
        </h4>
        <p
          data-translate="We design websites, web applications, mobile apps and desktop apps on demand"
          class="text-gray-500"
        >
          Nous concevons des Sites web, applications web, mobiles et
          desktops sur mesure
        </p>

        <span
          class="bg-primary absolute -bottom-2 left-0 right-0 z-[-1] mx-auto h-12 w-3/4 opacity-0 blur-[12px] transition group-hover:opacity-[14%]"
        ></span>
      </div>
    </div>
    <div class="w-full px-4 sm:w-4/5 md:w-1/2 lg:w-1/3">
      <div
        class="group relative mb-8 rounded-xl border border-stroke hover:shadow-sm hover:shadow-[#a5b4fc] duration-300 border-gray-200 bg-white p-10 text-center md:px-8 lg:py-9 lg:px-6 xl:py-[45px] xl:px-[43px]"
      >
        <div
          class="relative z-10 inline-flex items-center mx-auto mb-10 h-11"
        >
          <span
            class="bg-[#a5b4fc] absolute -right-3 top-0 z-[-1] h-[34px] w-[34px] rounded-full opacity-10"
          ></span>
          <svg
            width="51"
            height="50"
            viewBox="0 0 51 50"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M48.1348 34.7656C47.1191 31.4062 43.7598 29.5312 40.5566 30.4687C37.9004 31.25 34.2285 32.3437 31.3379 33.2031C31.5723 32.2656 31.416 31.4844 31.1816 30.8594C30.4004 28.9844 28.3691 28.125 26.5723 28.125H18.6816C18.0566 28.125 17.3535 27.8125 16.6504 27.1875C15.791 26.4062 14.6191 25.9375 13.4473 25.9375H7.11914C4.30664 25.9375 1.96289 28.3594 1.96289 31.3281V41.4844C1.96289 44.5312 4.30664 46.9531 7.19727 46.9531H14.9316C15.8691 46.9531 16.8848 46.6406 17.7441 46.0938C20.0098 47.3438 22.5879 47.9688 25.166 47.9688C26.7285 47.9688 28.291 47.7344 29.6973 47.2656L43.916 42.9688H43.9941C48.291 41.3281 48.916 37.5781 48.1348 34.7656ZM7.19727 43.4375C6.25977 43.4375 5.47852 42.5781 5.47852 41.4844V31.3281C5.47852 30.3125 6.18164 29.4531 7.11914 29.4531H13.5254C13.916 29.4531 14.2285 29.6094 14.3848 29.7656C14.6191 30 14.8535 30.1562 15.0879 30.3125V43.3594C15.0098 43.3594 15.0098 43.3594 14.9316 43.3594H7.19727V43.4375ZM42.8223 39.6094L28.5254 43.9844C27.4316 44.2969 26.2598 44.5313 25.0098 44.5313C22.9785 44.5313 21.0254 43.9844 19.3066 43.0469L18.5254 42.6562V31.7187C18.6035 31.7187 18.6035 31.7187 18.6816 31.7187H26.6504C27.3535 31.7187 27.9004 32.0312 27.9785 32.2656C28.0566 32.5 27.9004 33.3594 26.2598 34.9219L25.2441 35.8594L25.9473 37.0313C26.6504 38.2813 27.3535 38.0469 30.0879 37.2656C31.3379 36.875 33.0566 36.4063 34.7754 35.9375C38.1348 34.9219 41.5723 33.9063 41.5723 33.9063C42.9004 33.5156 44.3066 34.375 44.7754 35.8594C45.166 37.1094 45.0879 38.75 42.8223 39.6094Z"
              fill="#a5b4fc"
            />
            <path
              d="M47.4316 17.6563H45.4785V3.75C45.4785 2.8125 44.6973 1.95312 43.6816 1.95312C42.666 1.95312 41.9629 2.8125 41.9629 3.75V17.6563H37.666V6.09375C37.666 5.15625 36.8848 4.29688 35.8691 4.29688C34.8535 4.29688 34.1504 5.15625 34.1504 6.09375V17.6563H29.8535V10C29.8535 9.0625 29.0723 8.20313 28.0566 8.20313C27.041 8.20313 26.2598 8.98438 26.2598 10V17.6563H25.0879C24.1504 17.6563 23.291 18.4375 23.291 19.4531C23.291 20.4688 24.0723 21.25 25.0879 21.25H47.4316C48.3691 21.25 49.2285 20.4688 49.2285 19.4531C49.2285 18.4375 48.3691 17.6563 47.4316 17.6563Z"
              fill="#a5b4fc"
            />
          </svg>
        </div>
        <h4
          data-translate="IT Infrastructure, Security and Maintenance"
          class="text-[#1f2039] mb-[14px] text-2xl font-bold"
        >
          Infrastructure, Sécurité et Maintenance IT
        </h4>
        <p
          data-translate="We set up local networks, video surveillance, IT maintenance and IT consulting"
          class="text-gray-500"
        >
          Nous mettons en place les Réseaux locaux, vidéosurveillance,
          maintenance informatique et IT consulting
        </p>
        <span
          class="bg-primary absolute -bottom-2 left-0 right-0 z-[-1] mx-auto h-12 w-3/4 opacity-0 blur-[12px] transition group-hover:opacity-[14%]"
        ></span>
      </div>
    </div>
    <div class="w-full px-4 sm:w-4/5 md:w-1/2 lg:w-1/3">
      <div
        class="group relative mb-8 rounded-xl hover:shadow-sm hover:shadow-[#a5b4fc] duration-300 border border-gray-200 bg-white p-10 text-center md:px-8 lg:py-9 lg:px-6 xl:py-[45px] xl:px-[43px]"
      >
        <div
          class="relative z-10 inline-flex items-center mx-auto mb-10 h-11"
        >
          <span
            class="bg-[#a5b4fc] absolute -right-3 top-0 z-[-1] h-[34px] w-[34px] rounded-full opacity-10"
          ></span>
          <svg
            width="51"
            height="50"
            viewBox="0 0 51 50"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M45.9473 17.2656H41.2598V8.125C41.2598 5.46875 39.1504 3.35938 36.4941 3.35938H10.7129C8.05664 3.35938 5.94727 5.46875 5.94727 8.125V21.7969C5.47852 22.1875 5.08789 22.7344 4.85352 23.4375L1.96289 37.5C1.80664 38.2813 2.04102 39.1406 2.58789 39.7656C3.05664 40.3906 3.83789 40.7031 4.61914 40.7031H29.7754V43.4375C29.7754 45.2344 31.2598 46.7188 33.0566 46.7188H45.9473C47.7441 46.7188 49.2285 45.2344 49.2285 43.4375V20.5469C49.2285 18.75 47.7441 17.2656 45.9473 17.2656ZM5.63477 37.1875L8.21289 24.7656H8.60352H29.8535V37.1875H5.63477ZM29.7754 20.5469V21.25H9.46289V8.125C9.46289 7.42187 10.0098 6.875 10.7129 6.875H36.4941C37.1973 6.875 37.7441 7.42187 37.7441 8.125V17.2656H33.0566C31.2598 17.2656 29.7754 18.75 29.7754 20.5469ZM45.7129 43.125H33.291V20.7812H45.7129V43.125Z"
              fill="#a5b4fc"
            />
            <path
              d="M37.7441 26.7969H41.6504C42.5879 26.7969 43.4473 26.0156 43.4473 25C43.4473 24.0625 42.666 23.2031 41.6504 23.2031H37.7441C36.8066 23.2031 35.9473 23.9844 35.9473 25C35.9473 25.9375 36.7285 26.7969 37.7441 26.7969Z"
              fill="#3758F9"
            />
            <path
              d="M39.541 38.9063C39.4629 38.9063 39.3066 38.9844 39.2285 38.9844C39.1504 39.0625 38.9941 39.0625 38.916 39.1406C38.8379 39.2188 38.7598 39.2969 38.6816 39.375C38.3691 39.6875 38.1348 40.1563 38.1348 40.625C38.1348 41.0938 38.291 41.5625 38.6816 41.875C38.7598 41.9531 38.8379 42.0313 38.916 42.1094C38.9941 42.1875 39.1504 42.2656 39.2285 42.2656C39.3066 42.3438 39.4629 42.3438 39.541 42.3438C39.6191 42.3438 39.7754 42.3438 39.8535 42.3438C40.3223 42.3438 40.791 42.1875 41.1035 41.7969C41.416 41.4844 41.6504 41.0156 41.6504 40.5469C41.6504 40.0781 41.4941 39.6094 41.1035 39.2969C40.7129 38.9844 40.0879 38.8281 39.541 38.9063Z"
              fill="#a5b4fc"
            />
          </svg>
        </div>
        <h4
          data-translate="Training in Computer Science and Technology"
          class="text-[#1f2039] mb-[14px] text-2xl font-bold"
        >
          Formations en Informatique et Technologies
        </h4>
        <p
          data-translate="From initiation to cybersecurity through programming and office automation, certified training."
          class="text-gray-500"
        >
          De l’initiation à la cybersécurité en passant par la
          programmation et la bureautique, de formation certifiantes.
        </p>

        <span
          class="bg-primary absolute -bottom-2 left-0 right-0 z-[-1] mx-auto h-12 w-3/4 opacity-0 blur-[12px] transition group-hover:opacity-[14%]"
        ></span>
      </div>
    </div>
  </div>
</div>
</section>

<!-- Team Members -->

<section
id="team"
class="overflow-hidden bg-[#f7f8fa] pt-20 pb-20 lg:pt-[120px] lg:pb-[120px]"
>
<div class="container mx-auto">
  <div class="flex flex-wrap -mx-4">
    <div class="w-full px-4">
      <div class="mx-auto mb-[60px] max-w-[510px] text-center">
        <span
          data-translate="Our Team"
          class="block mb-2 text-lg font-semibold text-[#a5b4fc]"
        >
          Notre équipe
        </span>
        <h2
          data-translate="Our Team Members"
          class="text-[#1f2039] mb-3 text-3xl leading-[1.2] font-bold sm:text-4xl md:text-[40px]"
        >
          Les membres de notre équipe
        </h2>
        <p
          data-translate="Experts at your service for tailor-made solutions. Collaboration, attentiveness, and transparency are at the heart of our commitment to meeting your needs with excellence."
          class="text-gray-500"
        >
          Des experts à votre service pour des solutions sur mesure.
          Collaboration, écoute et transparence sont au cœur de notre
          engagement pour répondre à vos besoins avec excellence.
        </p>
      </div>
    </div>
  </div>

  <div class="flex flex-wrap justify-center -mx-4">
    <div
      class="w-full flex flex-col gap-10 items-center justify-content-center px-4 xl:w-10/12 2xl:w-9/12"
    >
      <div
        class="relative block md:flex rounded-[10px] bg-white px-6 pt-10 shadow-md justify-content-center w-full items-center"
      >
        @foreach ($members as $member)
        <div class="w-full px-4 sm:w-1/2 lg:w-1/4">
          <div class="mx-auto mb-10 max-w-[200px]">
            <div class="mb-4 overflow-hidden rounded-[5px]">
              <img src="/storage/{{$member->avatar}}" alt="member image" class="w-full h-72 object-fit-contain object-cover" />
            </div>
            <div class="text-center">
              <h4 class="mb-1 font-semibold"> {{ $member->name}}  {{ $member->lastname}}</h4>
              <p
                {{-- data-translate="HEAD OF HUMAN RESOURCES" --}}
                class="text-gray-500 mb-5 leading-[16px] text-[10px] uppercase"
              >
                {{ $member->function }}
              </p>
              <div class="flex items-center justify-center gap-5">
                <a
                  href=" {{ $member->facebook_link}} "
                  class="hover:text-primary text-dark-8"
                >
                  <i class="bi bi-facebook text-[#a5b4fc]"></i>
                </a>
                <a
                  href=" {{ $member->github_link }} "
                  class="hover:text-primary text-dark-8"
                >
                  <i class="bi bi-github text-[#a5b4fc]"></i>
                </a>
                <a href=" {{ $member->instagram_link }} " class="hover:text-primary text-dark-8">
                  <i class="bi bi-linkedin text-[#a5b4fc]"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        {{-- <div class="w-full px-4 sm:w-1/2 lg:w-1/4">
          <div class="mx-auto mb-10 max-w-[200px]">
            <div class="mb-4 overflow-hidden rounded-[5px]">
              <img src="{{ asset('img/3.jpeg') }}" alt="image" class="w-full" />
            </div>
            <div class="text-center">
              <h4 class="mb-1 font-semibold">Tulia Oscar Tutyonic</h4>
              <p
                data-translate="SPOKESPERSON"
                class="text-gray-500 mb-5 leading-[16px] text-[10px] uppercase"
              >
                PORTE PAROLE
              </p>
              <div class="flex items-center justify-center gap-5">
                <a href="" class="hover:text-primary text-dark-8">
                  <i class="bi bi-facebook text-[#a5b4fc]"></i>
                </a>
                <a href="" class="hover:text-primary text-dark-8">
                  <i class="bi bi-twitter-x text-[#a5b4fc]"></i>
                </a>
                <a href="" class="hover:text-primary text-dark-8">
                  <i class="bi bi-instagram text-[#a5b4fc]"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full px-4 sm:w-1/2 lg:w-1/4">
          <div class="mx-auto mb-10 max-w-[200px]">
            <div class="mb-4 overflow-hidden rounded-[5px]">
              <img src="{{ asset('img/bb.jpeg') }}" alt="image" class="w-full" />
            </div>
            <div class="text-center">
              <h4 class="mb-1 font-semibold">Doxane Aylf</h4>
              <p
                data-translate="QUALITY ASSURANCE"
                class="text-gray-500 mb-5 leading-[16px] text-[10px] uppercase"
              >
                ASSURANCE QUALITE
              </p>
              <div class="flex items-center justify-center gap-5">
                <a href="" class="hover:text-primary text-dark-8">
                  <i class="bi bi-facebook text-[#a5b4fc]"></i>
                </a>
                <a href="" class="hover:text-primary text-dark-8">
                  <i class="bi bi-twitter-x text-[#a5b4fc]"></i>
                </a>
                <a href="" class="hover:text-primary text-dark-8">
                  <i class="bi bi-instagram text-[#a5b4fc]"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full px-4 sm:w-1/2 lg:w-1/4">
          <div class="mx-auto mb-10 max-w-[200px]">
            <div class="mb-4 overflow-hidden rounded-[5px]">
              <img src="{{ asset('img/3.jpeg') }}" alt="image" class="w-full" />
            </div>
            <div class="text-center">
              <h4 class="mb-1 font-semibold">Charles Basilwango</h4>
              <p
                data-translate="EXECUTIVE CHEF"
                class="text-gray-500 mb-5 leading-[16px] text-[10px] uppercase"
              >
                CHEF EXECUTIF
              </p>
              <div class="flex items-center justify-center gap-5">
                <a href="" class="hover:text-primary text-dark-8">
                  <i class="bi bi-facebook text-[#a5b4fc]"></i>
                </a>
                <a href="" class="hover:text-primary text-dark-8">
                  <i class="bi bi-twitter-x text-[#a5b4fc]"></i>
                </a>
                <a href="" class="hover:text-primary text-dark-8">
                  <i class="bi bi-instagram text-[#a5b4fc]"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full px-4 sm:w-1/2 lg:w-1/4">
          <div class="mx-auto mb-10 max-w-[200px]">
            <div class="mb-4 overflow-hidden rounded-[5px]">
              <img src="{{ asset('img/1.jpeg') }}" alt="image" class="w-full" />
            </div>
            <div class="text-center">
              <h4 class="mb-1 font-semibold">Pungu Alimasi Severin</h4>
              <p
                data-translate="SECRETARY"
                class="text-gray-500 mb-5 leading-[16px] text-[10px] uppercase"
              >
                SECRETAIRE
              </p>
              <div class="flex items-center justify-center gap-5">
                <a href="" class="hover:text-primary text-dark-8">
                  <i class="bi bi-facebook text-[#a5b4fc]"></i>
                </a>
                <a href="" class="hover:text-primary text-dark-8">
                  <i class="bi bi-twitter-x text-[#a5b4fc]"></i>
                </a>
                <a href="" class="hover:text-primary text-dark-8">
                  <i class="bi bi-instagram text-[#a5b4fc]"></i>
                </a>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
      <a
        href="#"
        class="flex justify-center gap-3 items-center text-[1f2039] px-6 py-2 bg-[#1f2039] rounded-xl"
      >
        <p data-translate="View All" class="text-white">Tout voir</p>
        <i class="bi bi-arrow-right text-white"></i>
      </a>
    </div>
  </div>
</div>
</section>

<!-- Testimonial -->

<section class="pt-20 pb-7 lg:pt-[120px] lg:pb-14 px-4">
<div class="container mx-auto">
  <div class="flex flex-wrap justify-center -mx-4">
    <div class="w-full px-4">
      <div class="mb-[60px] max-w-[510px] lg:mb-[70px]">
        <span
          data-translate="Testimonials"
          class="block mb-2 text-lg font-semibold text-[#a5b4fc]"
        >
          Témoignages
        </span>
        <h2
          data-translate="What our Clients Says"
          class="text-[#1f2039] mb-3 text-3xl leading-[1.2] font-bold sm:text-4xl md:text-[40px]"
        >
          Ce que disent nos clients
        </h2>
        <p
          data-translate="Your satisfaction motivates us every day. Find out what our customers say about us!"
          class="text-base text-body-color dark:text-dark-6"
        >
          Votre satisfaction nous motive chaque jour. Découvrez ce que nos
          clients disent de nous !
        </p>
      </div>
    </div>
  </div>

  <div class="flex flex-wrap justify-center -mx-4">
    @forelse ($testimonials as $testimonial)
    <div class="w-full px-4 md:w-1/2">
      <div
        class="shadow-md border border-gray-200 relative mb-10 overflow-hidden rounded-[10px] bg-white p-8 sm:p-10 md:py-10 md:px-6 lg:p-10"
      >
        <div class="flex items-center mb-10">
          <div
            class="mr-5 h-20 w-full max-w-[80px] overflow-hidden rounded md:h-[60px] md:max-w-[60px] lg:h-20 lg:max-w-[80px]"
          >
            <img src="/storage/{{ $testimonial->avatar }}" alt="image" class="w-full" loading="lazy" />
          </div>
          <div class="w-full">
            <h5 class="mb-1 text-lg font-semibold text-[#a5b4fc]">
              {{ $testimonial->name }}
            </h5>
            <p class="text-xs text-body-color dark:text-dark-6">
              {{ $testimonial->function }}
            </p>
          </div>
        </div>

        <p
          class="text-base text-body-color dark:text-dark-6"
        >
          {{$testimonial->message}}
        </p>

        <div>
          <span class="absolute top-0 right-0">
            <svg
              width="104"
              height="102"
              viewBox="0 0 104 102"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                opacity="0.6"
                d="M28.707 23.8032C31.0493 22.4301 33.9507 22.4301 36.293 23.8032L56.4389 35.6133C58.7351 36.9594 60.1458 39.4218 60.1458 42.0835V65.9165C60.1458 68.5782 58.7351 71.0406 56.4388 72.3867L36.293 84.1968C33.9507 85.5699 31.0493 85.5699 28.707 84.1968L8.56115 72.3867C6.26492 71.0406 4.85417 68.5782 4.85417 65.9165V42.0835C4.85417 39.4218 6.26492 36.9594 8.56115 35.6133L28.707 23.8032Z"
                stroke="#3758F9"
              />
              <path
                opacity="0.6"
                d="M105.25 12.7424C107.571 11.4027 110.429 11.4027 112.75 12.7424L144.587 31.1236C146.908 32.4634 148.337 34.9393 148.337 37.6188V74.3812C148.337 77.0607 146.908 79.5366 144.587 80.8764L112.75 99.2576C110.429 100.597 107.571 100.597 105.25 99.2576L73.4128 80.8764C71.0923 79.5366 69.6628 77.0607 69.6628 74.3812V37.6188C69.6628 34.9393 71.0923 32.4634 73.4128 31.1236L105.25 12.7424Z"
                stroke="#13C296"
              />
              <path
                opacity="0.6"
                d="M59.25 -23.2576C61.5705 -24.5973 64.4295 -24.5973 66.75 -23.2576L82.1327 -14.3764C84.4532 -13.0366 85.8827 -10.5607 85.8827 -7.8812V9.8812C85.8827 12.5607 84.4532 15.0366 82.1327 16.3764L66.75 25.2576C64.4295 26.5973 61.5705 26.5973 59.25 25.2576L43.8673 16.3764C41.5468 15.0366 40.1173 12.5607 40.1173 9.8812V-7.8812C40.1173 -10.5607 41.5468 -13.0366 43.8673 -14.3764L59.25 -23.2576Z"
                stroke="#F98B69"
              />
            </svg>
          </span>
        </div>
      </div>
    </div>
    @empty
      No testimonials yet  
    @endforelse
  </div>
</div>
</section>

<!-- blog section -->

<section
id="blog"
class="pt-[110px] pb-[60px] flex flex-col justify-content-center items-center"
>
<div class="container">
  <div
    class="wow fadeInUp mx-auto mb-14 max-w-[690px] text-center lg:mb-[70px]"
    data-wow-delay=".2s"
  >
    <h2
      data-translate="Latest News & Blogs"
      class="mb-4 text-3xl font-bold text-black sm:text-4xl md:text-[44px] md:leading-tight"
    >
      Dernières nouvelles et blogs
    </h2>
    <p
      data-translate="Discover our articles, advice, and analyses on development, networks, cybersecurity, and much more."
      class="text-base text-body"
    >
      Découvrez nos articles, conseils et analyses sur le développement,
      les réseaux, la cybersécurité et bien plus encore.
    </p>
  </div>
</div>

<div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0">
  <div
    class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-11 gap-x-7.5"
  >
    <!-- blog item -->
    @forelse ($latest_posts as $post)

    <div class="group">
            <div
              class="mb-6 overflow-hidden rounded-[10px] transition-all group-hover:scale-105"
            >
              <a href="{{ route('blog.details',['slug'=>$post->slug]) }}">
                <img
                  src="/storage/{{$post->avatar}}"
                  alt="post image"
                  class="w-full"
                  loading="lazy"
                />
              </a>
            </div>

            <h4>
              <a
                href="{{ route('blog.details',['slug'=>$post->slug]) }}"
                class="block text-dark font-bold text-xl mb-3.5"
              >
                <span
                  class="bg-linear-to-r htitle from-primary/50 to-primary/40 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]"
                >
                  {{ $post->title }}
                </span>
              </a>
            </h4>
            <p class="paragraphs">
              {{ $post->content }}
            </p>
            <div
              class="flex flex-wrap gap-3 items-center justify-between mt-4.5"
            >
              <div class="flex items-center gap-2.5">
                <a href="{{ route('blog.details',['slug'=>$post->slug]) }}" class="flex items-center gap-3">
                  <div class="flex w-6 h-6 rounded-full overflow-hidden">
                    <img src="/storage/{{$post->user->avatar}}" alt="user" loading="lazy"/>
                  </div>
                  <p class="text-sm">{{$post->user->name}}</p>
                </a>

                <span
                  class="flex w-[3px] h-[3px] rounded-full bg-dark-2"
                ></span>

                <p class="text-sm">{{ $post->created_at->format('M, d-Y') }} </p>
              </div>
              <a
                href="#"
                class="inline-flex text-[#a5b4fc] bg-[#3758f90d] font-medium text-sm py-1 px-3 rounded-full"
                >{{ $post->category->name }}</a
              >
            </div>
      </div>

    {{-- <div class="group">
      <div
        class="mb-6 overflow-hidden rounded-[10px] transition-all group-hover:scale-105"
      >
        <a href="{{ route('blog.details',['slug'=>$post->slug]) }}">
          <img
            src="/storage/{{$post->avatar}}"
            alt="post image"
            class="w-full"
            loading="lazy"
          />
        </a>
      </div>

      <h4>
        <a
          href="{{ route('blog.details',['slug'=>$post->slug]) }}"
          class="block text-dark font-bold text-xl mb-3.5"
        >
          <span
            class="bg-linear-to-r from-primary/50 to-primary/40 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]"
          >
            {{ $post->title }}
          </span>
        </a>
      </h4>
      <div
        class="flex flex-wrap gap-3 items-center justify-between mt-4.5"
      >
        <div class="flex items-center gap-2.5">
          <a href="{{ route('blog.details',['slug'=>$post->slug]) }}" 
            class="flex items-center gap-3"
          >
            <div class="flex w-6 h-6 rounded-full overflow-hidden">
              <img src="/storage/{{$post->user->avatar}}" alt="user" loading="lazy"/>
            </div>
            <p class="text-sm">{{$post->user->name}}</p>
          </a>

          <span
            class="flex w-[3px] h-[3px] rounded-full bg-dark-2"
          ></span>

          <p class="text-sm"> {{ $post->created_at->format('M, d-Y') }} </p>
        </div>
        <a
          href="#"
          class="inline-flex text-[#a5b4fc] bg-[#3758f90d] font-medium text-sm py-1 px-3 rounded-full"
          > {{ $post->category->name }} </a
        >
      </div>
    </div> --}}
    
    @empty
        <h1>Aucun blog récement publié; retrouvez-nous prochainement !</h1>
    @endforelse

  </div>
  <div class="text-center">
        <button>
          <a href="{{ route('blogs') }}"
          class="flex justify-center cursor-pointer font-medium text-gray-900 border border-gray-900 rounded-md py-3 px-7.5 hover:bg-gray-900 hover:text-white ease-in duration-200 mx-auto mt-12.5 lg:mt-17.5"
        >
          Browse all posts
        </a>
        </button>
    </divc>
</div>
</section>

<!-- Getintouch section -->

<section
id="contact"
class="relative z-10 overflow-hidden bg-white dark:bg-dark py-20 px-4"
>
<div class="container mx-auto ">
  <div class="flex flex-wrap -mx-4 lg:justify-between">
    <div class="w-full px-4 lg:w-1/2 xl:w-6/12">
      <div class="mb-12 max-w-[570px] lg:mb-0">
        <span
          data-translate="Contact Us"
          class="block mb-4 text-base font-semibold text-[#a5b4fc]"
        >
          Contactez-nous
        </span>
        <h2
          data-translate="GET IN TOUCH WITH US"
          class="text-[#1f2039] mb-6 text-[32px] font-bold uppercase sm:text-[40px] lg:text-[36px] xl:text-[40px]"
        >
          ENTRER EN CONTACT AVEC NOUS
        </h2>
        <p
          data-translate="Need a service, advice, or training? Our team is here to help."
          class="text-base leading-relaxed text-body-color dark:text-dark-6 mb-9"
        >
          Besoin d’un service, d’un conseil ou d’une formation ? Notre
          équipe est à votre écoute pour vous accompagner.
        </p>

        <div class="mb-8 flex w-full max-w-[370px]">
          <div
            class="bg-[#3758f90d] mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded sm:h-[70px] sm:max-w-[70px]"
          >
            <svg
              width="32"
              height="32"
              viewBox="0 0 32 32"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="text-[#a5b4fc]"
            >
              <path
                d="M30.6 11.8002L17.7 3.5002C16.65 2.8502 15.3 2.8502 14.3 3.5002L1.39998 11.8002C0.899983 12.1502 0.749983 12.8502 1.04998 13.3502C1.39998 13.8502 2.09998 14.0002 2.59998 13.7002L3.44998 13.1502V25.8002C3.44998 27.5502 4.84998 28.9502 6.59998 28.9502H25.4C27.15 28.9502 28.55 27.5502 28.55 25.8002V13.1502L29.4 13.7002C29.6 13.8002 29.8 13.9002 30 13.9002C30.35 13.9002 30.75 13.7002 30.95 13.4002C31.3 12.8502 31.15 12.1502 30.6 11.8002ZM13.35 26.7502V18.5002C13.35 18.0002 13.75 17.6002 14.25 17.6002H17.75C18.25 17.6002 18.65 18.0002 18.65 18.5002V26.7502H13.35ZM26.3 25.8002C26.3 26.3002 25.9 26.7002 25.4 26.7002H20.9V18.5002C20.9 16.8002 19.5 15.4002 17.8 15.4002H14.3C12.6 15.4002 11.2 16.8002 11.2 18.5002V26.7502H6.69998C6.19998 26.7502 5.79998 26.3502 5.79998 25.8502V11.7002L15.5 5.4002C15.8 5.2002 16.2 5.2002 16.5 5.4002L26.3 11.7002V25.8002Z"
                fill="currentColor"
              />
            </svg>
          </div>
          <div class="w-full">
            <h4
              data-translate="Our Location"
              class="mb-1 text-xl font-bold text-[#a5b4fc]"
            >
              Notre Addresse
            </h4>
            <p class="text-gray-500">
              Burundi, Bujumbura/ Kinama-Gitega 9eme Av. NO. 24.
            </p>
          </div>
        </div>

        <div class="mb-8 flex w-full max-w-[370px]">
          <div
            class="bg-[#3758f90d] mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded sm:h-[70px] sm:max-w-[70px]"
          >
            <svg
              width="32"
              height="32"
              viewBox="0 0 32 32"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="text-[#a5b4fc]"
            >
              <g clip-path="url(#clip0_941_17577)">
                <path
                  d="M24.3 31.1499C22.95 31.1499 21.4 30.7999 19.7 30.1499C16.3 28.7999 12.55 26.1999 9.19997 22.8499C5.84997 19.4999 3.24997 15.7499 1.89997 12.2999C0.39997 8.59994 0.54997 5.54994 2.29997 3.84994C2.34997 3.79994 2.44997 3.74994 2.49997 3.69994L6.69997 1.19994C7.74997 0.599942 9.09997 0.899942 9.79997 1.89994L12.75 6.29994C13.45 7.34994 13.15 8.74994 12.15 9.44994L10.35 10.6999C11.65 12.7999 15.35 17.9499 21.25 21.6499L22.35 20.0499C23.2 18.8499 24.55 18.4999 25.65 19.2499L30.05 22.1999C31.05 22.8999 31.35 24.2499 30.75 25.2999L28.25 29.4999C28.2 29.5999 28.15 29.6499 28.1 29.6999C27.2 30.6499 25.9 31.1499 24.3 31.1499ZM3.79997 5.54994C2.84997 6.59994 2.89997 8.74994 3.99997 11.4999C5.24997 14.6499 7.64997 18.0999 10.8 21.2499C13.9 24.3499 17.4 26.7499 20.5 27.9999C23.2 29.0999 25.35 29.1499 26.45 28.1999L28.85 24.0999C28.85 24.0499 28.85 24.0499 28.85 23.9999L24.45 21.0499C24.45 21.0499 24.35 21.0999 24.25 21.2499L23.15 22.8499C22.45 23.8499 21.1 24.1499 20.1 23.4999C13.8 19.5999 9.89997 14.1499 8.49997 11.9499C7.84997 10.8999 8.09997 9.54994 9.09997 8.84994L10.9 7.59994V7.54994L7.94997 3.14994C7.94997 3.09994 7.89997 3.09994 7.84997 3.14994L3.79997 5.54994Z"
                  fill="currentColor"
                />
                <path
                  d="M29.3 14.25C28.7 14.25 28.25 13.8 28.2 13.2C27.8 8.15003 23.65 4.10003 18.55 3.75003C17.95 3.70003 17.45 3.20003 17.5 2.55003C17.55 1.95003 18.05 1.45003 18.7 1.50003C24.9 1.90003 29.95 6.80003 30.45 13C30.5 13.6 30.05 14.15 29.4 14.2C29.4 14.25 29.35 14.25 29.3 14.25Z"
                  fill="currentColor"
                />
                <path
                  d="M24.35 14.7002C23.8 14.7002 23.3 14.3002 23.25 13.7002C22.95 11.0002 20.85 8.90018 18.15 8.55018C17.55 8.50018 17.1 7.90018 17.15 7.30018C17.2 6.70018 17.8 6.25018 18.4 6.30018C22.15 6.75018 25.05 9.65018 25.5 13.4002C25.55 14.0002 25.15 14.5502 24.5 14.6502C24.4 14.7002 24.35 14.7002 24.35 14.7002Z"
                  fill="currentColor"
                />
              </g>
              <defs>
                <clipPath id="clip0_941_17577">
                  <rect width="32" height="32" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>
          <div class="w-full">
            <h4
              data-translate="Phone Number"
              class="mb-1 text-xl text-[#a5b4fc] font-bold"
            >
              Numéro de téléphone
            </h4>
            <p class="text-gray-500">+257 62 87 04 55</p>
          </div>
        </div>

        <div class="mb-8 flex w-full max-w-[370px]">
          <div
            class="bg-[#3758f90d] mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded sm:h-[70px] sm:max-w-[70px]"
          >
            <svg
              width="32"
              height="32"
              viewBox="0 0 32 32"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="text-[#a5b4fc]"
            >
              <path
                d="M28 4.7998H3.99998C2.29998 4.7998 0.849976 6.1998 0.849976 7.9498V24.1498C0.849976 25.8498 2.24998 27.2998 3.99998 27.2998H28C29.7 27.2998 31.15 25.8998 31.15 24.1498V7.8998C31.15 6.1998 29.7 4.7998 28 4.7998ZM28 7.0498C28.05 7.0498 28.1 7.0498 28.15 7.0498L16 14.8498L3.84998 7.0498C3.89998 7.0498 3.94998 7.0498 3.99998 7.0498H28ZM28 24.9498H3.99998C3.49998 24.9498 3.09998 24.5498 3.09998 24.0498V9.2498L14.8 16.7498C15.15 16.9998 15.55 17.0998 15.95 17.0998C16.35 17.0998 16.75 16.9998 17.1 16.7498L28.8 9.2498V24.0998C28.9 24.5998 28.5 24.9498 28 24.9498Z"
                fill="currentColor"
              />
            </svg>
          </div>
          <div class="w-full">
            <h4
              data-translate="Email Address"
              class="mb-1 text-xl font-bold text-[#a5b4fc]"
            >
              Adresse e-mail
            </h4>
            <p class="text-gray-500">info@microgells.com</p>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
      @livewire('get-in-tach')
    </div>
  </div>
</div>
</section>
<script src="{{ asset('js/index.js') }}"></script>
@livewireScripts
@endsection