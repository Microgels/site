<div
class="relative p-8 bg-white rounded-lg shadow-lg dark:bg-dark-2 sm:p-12"
>
<form method="post" wire:submit.prevent="contact">
    @csrf
    <!-- loader --> 
    <div wire:loading> 
        <div class="dot-spinner">
            <div class="dot-spinner__dot"></div>
            <div class="dot-spinner__dot"></div>
            <div class="dot-spinner__dot"></div>
            <div class="dot-spinner__dot"></div>
            <div class="dot-spinner__dot"></div>
            <div class="dot-spinner__dot"></div>
            <div class="dot-spinner__dot"></div>
            <div class="dot-spinner__dot"></div>
        </div>
    </div>
    
  <div class="mb-6">
    <input
      type="text"
      name="contact_name"
      wire:model.defer ="contact_name"
      value="{{ old('contact_name') }}"
      placeholder="Your Name"
      class="border-stroke dark:border-dark-3 dark:text-dark-6 dark:bg-dark text-body-color focus:border-primary w-full rounded border py-3 px-[14px] text-base outline-none"
    />
    @error('contact_name')
        <small class="text-[crimson]">
          {{ $message }}
        </small>
    @enderror
  </div>
  <div class="mb-6">
    <input
      type="email"
      name="contact_email"
       wire:model.defer ="contact_email"
      value="{{ old('contact_email') }}"
      placeholder="Your Email"
      class="border-stroke dark:border-dark-3 dark:text-dark-6 dark:bg-dark text-body-color focus:border-primary w-full rounded border py-3 px-[14px] text-base outline-none"
    />
    @error('contact_email')
        <small class="text-[crimson]">
          {{ $message }}
        </small>
    @enderror
  </div>
  <div class="mb-6">
    <textarea
      rows="6"
      name="contact_message"
       wire:model.defer ="contact_message"
      placeholder="Your Message"
      class="border-stroke dark:border-dark-3 dark:text-dark-6 dark:bg-dark text-body-color focus:border-primary w-full resize-none rounded border py-3 px-[14px] text-base outline-none"
    ></textarea>
    @error('contact_message')
      <small class="text-[crimson]">
        {{ $message }}
      </small>
    @enderror
  </div>
  <div>
    <button
      data-translate="Send Message"
      type="submit"
      class="w-full cursor-pointer p-3 text-white transition border rounded border-primary bg-[#1f2039] hover:bg-opacity-90"
    >
      Envoyer
    </button>
  </div>
  <div wire:loading> 
    Sending message...
</div>
</form>
<div>
  <span class="absolute -top-10 -right-9 z-[-1]">
    <svg
      width="100"
      height="100"
      viewBox="0 0 100 100"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        fill-rule="evenodd"
        clip-rule="evenodd"
        d="M0 100C0 44.7715 0 0 0 0C55.2285 0 100 44.7715 100 100C100 100 100 100 0 100Z"
        fill="#a5b4fc"
      />
    </svg>
  </span>
  <span class="absolute -right-10 top-[90px] z-[-1]">
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
  </span>
  <span class="absolute -left-7 -bottom-7 z-[-1]">
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
  </span>
</div>
</div>
