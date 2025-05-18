@extends('site.layouts.header')
@section('title','Login to Microgels Dashboard')
@section('body')

<section class="bg-white min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <!-- Carte de connexion -->
        <div class="bg-white rounded-xl shadow-2xl overflow-hidden transition-all duration-500 hover:shadow-lg">
            <!-- En-tête -->
            <div class="bg-dark p-6 text-center">
                <h1 class="text-3xl font-bold text-white">Connexion</h1>
                <p class="text-lightpurple mt-2">Accédez à votre espace sécurisé</p>
            </div>

            <!-- Formulaire -->
            <form class="p-6 space-y-6" method="POST" action="{{ route('authenticate') }}">
                @csrf
                <!-- Champ Email -->
                <div class="space-y-2">
                    <label for="email" class="block text-sm font-medium text-grayish">Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-grayish"></i>
                        </div>
                        <input 
                            type="email" 
                            id="email" 
                            value="{{ old('email') }}"
                            name="email"
                            placeholder="votre@email.com" 
                            class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-lightpurple focus:border-lightpurple transition-all"
                            required
                        >
                        @error('email')
                            <small class=" text-[crimson]">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>

                <!-- Champ Mot de passe -->
                <div class="space-y-2">
                    <label for="password" class="block text-sm font-medium text-grayish">Mot de passe</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-grayish"></i>
                        </div>
                        <input 
                            type="password" 
                            id="password" 
                            name="password"
                            value="{{ old('password') }}"
                            placeholder="••••••••" 
                            class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-lightpurple focus:border-transparent transition-all"
                            required
                        >
                        <!-- Bouton pour afficher/masquer le mot de passe -->
                        <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center" onclick="togglePassword()">
                            <i id="eye-icon" class="fas fa-eye-slash text-grayish hover:text-lightpurple"></i>
                        </button>
                    </div>
                </div>

                <!-- Lien "Mot de passe oublié" -->
                <div class="flex justify-end">
                    <a href="{{ route('forgot-password') }}" class="text-sm text-lightpurple hover:underline">Mot de passe oublié ?</a>
                </div>

                <!-- Bouton de soumission -->
                <button 
                    type="submit" 
                    class=" cursor-pointer w-full bg-dark text-white py-3 px-4 rounded-lg font-semibold hover:bg-opacity-90 transition-all duration-300 shadow-md hover:shadow-lg"
                >
                    Se connecter
                </button>
            </form>

            <!-- Séparateur -->
            <div class="px-6">
                <div class="border-t border-gray-200"></div>
            </div>

            <!-- Boutons de connexion sociale -->
            <div class="p-6 grid grid-cols-2 gap-4">
                <button class="flex items-center justify-center space-x-2 bg-gray-50 text-grayish py-2 px-4 rounded-lg hover:bg-gray-100 transition">
                    <i class="fab fa-google text-lightpurple"></i>
                    <span>Google</span>
                </button>
                <button class="flex items-center justify-center space-x-2 bg-gray-50 text-grayish py-2 px-4 rounded-lg hover:bg-gray-100 transition">
                    <i class="fab fa-github text-lightpurple"></i>
                    <span>Github</span>
                </button>
            </div>
        </div>
    </div>
    
</section>
<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eye-icon');
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.classList.replace('fa-eye-slash', 'fa-eye');
        } else {
            passwordInput.type = 'password';
            eyeIcon.classList.replace('fa-eye', 'fa-eye-slash');
        }
    }
</script>
@endsection