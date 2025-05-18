@extends('site.layouts.header')
@section('title','Microgels | Forgot your password ?')
@section('body')
   
<section class="bg-white min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <!-- Carte -->
        <div class="bg-white rounded-xl shadow-2xl overflow-hidden transition-all duration-500 hover:shadow-lg">
            <!-- En-tête -->
            <div class="bg-dark p-6 text-center">
                <h1 class="text-3xl font-bold text-white">Mot de passe oublié ?</h1>
                <p class="text-lightpurple mt-2">Entrez votre email pour réinitialiser</p>
            </div>

            <!-- Formulaire -->
            <form class="p-6 space-y-6" method="post" action="{{ route('forgot-password-request') }}">
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
                            name="email"
                            placeholder="votre@email.com" 
                            class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-lightpurple focus:border-transparent transition-all"
                            required
                        >
                        @error('email')
                           <small class="text-[crimson]">
                            {{ $message }}
                           </small>
                        @enderror
                    </div>
                </div>

                <!-- Bouton de soumission -->
                <button 
                    type="submit" 
                    class=" cursor-pointer w-full bg-dark text-white py-3 px-4 rounded-lg font-semibold hover:bg-opacity-90 transition-all duration-300 shadow-md hover:shadow-lg"
                >
                    Envoyer le lien
                </button>

                <!-- Lien de retour -->
                <div class="text-center text-sm text-grayish">
                    <a href="{{ route('login') }}" class="text-lightpurple font-medium hover:underline">
                        <i class="fas fa-arrow-left mr-1"></i> Retour à la connexion
                    </a>
                </div>
            </form>

            <!-- Message d'aide -->
            <div class="px-6 pb-6">
                <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                    <p class="text-sm text-grayish">
                        <i class="fas fa-info-circle text-lightpurple mr-2"></i>
                        Un lien de réinitialisation vous sera envoyé par email.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection