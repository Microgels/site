@extends('site.layouts.header')
@section('title','Microgels | Reset your password')
@section('body')
 
<section class="bg-white min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <!-- Carte -->
        <div class="bg-white rounded-xl shadow-2xl overflow-hidden transition-all duration-500 hover:shadow-lg">
            <!-- En-tête -->
            <div class="bg-dark p-6 text-center">
                <h1 class="text-3xl font-bold text-white">Nouveau mot de passe</h1>
                <p class="text-lightpurple mt-2">Définissez votre nouveau mot de passe</p>
            </div>

            <!-- Formulaire -->
            <form class="p-6 space-y-6" method="post" action="{{ route('reset-password',['token'=>$token]) }}">
                @csrf
                <!-- Champ Nouveau mot de passe -->
                <div class="space-y-2">
                    <label for="password" class="block text-sm font-medium text-grayish">Nouveau mot de passe</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-grayish"></i>
                        </div>
                        <input 
                            type="password" 
                            id="password" 
                            placeholder="••••••••" 
                            name="password"
                            class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-lightpurple focus:border-transparent transition-all"
                            required
                        >
                        <!-- Bouton pour afficher/masquer le mot de passe -->
                        <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center" onclick="togglePassword('password')">
                            <i id="eye-icon-password" class="fas fa-eye-slash text-grayish hover:text-lightpurple"></i>
                        </button>
                        @error('password')
                            <small class="text-[crimson]">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                    <p class="text-xs text-grayish">Minimum 8 caractères avec chiffres et symboles</p>
                </div>

                <!-- Champ Confirmation -->
                <div class="space-y-2">
                    <label for="password_confirmation" class="block text-sm font-medium text-grayish">Confirmez le mot de passe</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-grayish"></i>
                        </div>
                        <input 
                            type="password" 
                            id="password_confirmation" 
                            placeholder="••••••••" 
                            name="password_confirmation"
                            class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-lightpurple focus:border-transparent transition-all"
                            required
                        >
                        <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center" onclick="togglePassword('password_confirmation')">
                            <i id="eye-icon-confirmation" class="fas fa-eye-slash text-grayish hover:text-lightpurple"></i>
                        </button>
                        @error('password2')
                            <small class="text-[crimson]">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                    <div class=" hidden">
                        <input type="hidden" name="token" value="{{ $token }}">
                    </div>
                    <div class=" hidden">
                        <input type="hidden" name="email" value="{{$email}}">
                    </div>
                </div>

                <!-- Bouton de soumission -->
                <button 
                    type="submit" 
                    class="w-full bg-dark text-white py-3 px-4 rounded-lg font-semibold hover:bg-opacity-90 transition-all duration-300 shadow-md hover:shadow-lg"
                >
                    Réinitialiser
                </button>

                <!-- Lien de retour -->
                <div class="text-center text-sm text-grayish">
                    <a href="{{ route('login') }}" class="text-lightpurple font-medium hover:underline">
                        <i class="fas fa-arrow-left mr-1"></i> Retour à la connexion
                    </a>
                </div>
            </form>
        </div>
    </div>

</section>
 <!-- Script pour afficher/masquer les mots de passe -->
 <script>
    function togglePassword(fieldId) {
        const input = document.getElementById(fieldId);
        const eyeIcon = document.getElementById(`eye-icon-${fieldId}`);
        
        if (input.type === 'password') {
            input.type = 'text';
            eyeIcon.classList.replace('fa-eye-slash', 'fa-eye');
        } else {
            input.type = 'password';
            eyeIcon.classList.replace('fa-eye', 'fa-eye-slash');
        }
    }
</script>
@endsection