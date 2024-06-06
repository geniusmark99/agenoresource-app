<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true', sidebarOpen: false }" :class="{ 'dark': darkMode }">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            .pattern {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 304 304' width='304' height='304'%3E%3Cpath fill='%23a0aec0' fill-opacity='0.1' d='M44.1 224a5 5 0 1 1 0 2H0v-2h44.1zm160 48a5 5 0 1 1 0 2H82v-2h122.1zm57.8-46a5 5 0 1 1 0-2H304v2h-42.1zm0 16a5 5 0 1 1 0-2H304v2h-42.1zm6.2-114a5 5 0 1 1 0 2h-86.2a5 5 0 1 1 0-2h86.2zm-256-48a5 5 0 1 1 0 2H0v-2h12.1zm185.8 34a5 5 0 1 1 0-2h86.2a5 5 0 1 1 0 2h-86.2zM258 12.1a5 5 0 1 1-2 0V0h2v12.1zm-64 208a5 5 0 1 1-2 0v-54.2a5 5 0 1 1 2 0v54.2zm48-198.2V80h62v2h-64V21.9a5 5 0 1 1 2 0zm16 16V64h46v2h-48V37.9a5 5 0 1 1 2 0zm-128 96V208h16v12.1a5 5 0 1 1-2 0V210h-16v-76.1a5 5 0 1 1 2 0zm-5.9-21.9a5 5 0 1 1 0 2H114v48H85.9a5 5 0 1 1 0-2H112v-48h12.1zm-6.2 130a5 5 0 1 1 0-2H176v-74.1a5 5 0 1 1 2 0V242h-60.1zm-16-64a5 5 0 1 1 0-2H114v48h10.1a5 5 0 1 1 0 2H112v-48h-10.1zM66 284.1a5 5 0 1 1-2 0V274H50v30h-2v-32h18v12.1zM236.1 176a5 5 0 1 1 0 2H226v94h48v32h-2v-30h-48v-98h12.1zm25.8-30a5 5 0 1 1 0-2H274v44.1a5 5 0 1 1-2 0V146h-10.1zm-64 96a5 5 0 1 1 0-2H208v-80h16v-14h-42.1a5 5 0 1 1 0-2H226v18h-16v80h-12.1zm86.2-210a5 5 0 1 1 0 2H272V0h2v32h10.1zM98 101.9V146H53.9a5 5 0 1 1 0-2H96v-42.1a5 5 0 1 1 2 0zM53.9 34a5 5 0 1 1 0-2H80V0h2v34H53.9zm60.1 3.9V66H82v64H69.9a5 5 0 1 1 0-2H80V64h32V37.9a5 5 0 1 1 2 0zM101.9 82a5 5 0 1 1 0-2H128V37.9a5 5 0 1 1 2 0V82h-28.1zm16-64a5 5 0 1 1 0-2H146v44.1a5 5 0 1 1-2 0V18h-26.1zm102.2 270a5 5 0 1 1 0 2H98v14h-2v-16h124.1zM242 149.9V160h16v34h-16v62h48v48h-2v-46h-48v-66h16v-30h-16v-12.1a5 5 0 1 1 2 0zM53.9 18a5 5 0 1 1 0-2H64V2H48V0h18v18H53.9zm112 32a5 5 0 1 1 0-2H192V0h50v2h-48v48h-28.1zm-48-48a5 5 0 0 1-9.8-2h2.07a3 3 0 1 0 5.66 0H178v34h-18V21.9a5 5 0 1 1 2 0V32h14V2h-58.1zm0 96a5 5 0 1 1 0-2H137l32-32h39V21.9a5 5 0 1 1 2 0V66h-40.17l-32 32H117.9zm28.1 90.1a5 5 0 1 1-2 0v-76.51L175.59 80H224V21.9a5 5 0 1 1 2 0V82h-49.59L146 112.41v75.69zm16 32a5 5 0 1 1-2 0v-99.51L184.59 96H300.1a5 5 0 0 1 3.9-3.9v2.07a3 3 0 0 0 0 5.66v2.07a5 5 0 0 1-3.9-3.9H185.41L162 121.41v98.69zm-144-64a5 5 0 1 1-2 0v-3.51l48-48V48h32V0h2v50H66v55.41l-48 48v2.69zM50 53.9v43.51l-48 48V208h26.1a5 5 0 1 1 0 2H0v-65.41l48-48V53.9a5 5 0 1 1 2 0zm-16 16V89.41l-34 34v-2.82l32-32V69.9a5 5 0 1 1 2 0zM12.1 32a5 5 0 1 1 0 2H9.41L0 43.41V40.6L8.59 32h3.51zm265.8 18a5 5 0 1 1 0-2h18.69l7.41-7.41v2.82L297.41 50H277.9zm-16 160a5 5 0 1 1 0-2H288v-71.41l16-16v2.82l-14 14V210h-28.1zm-208 32a5 5 0 1 1 0-2H64v-22.59L40.59 194H21.9a5 5 0 1 1 0-2H41.41L66 216.59V242H53.9zm150.2 14a5 5 0 1 1 0 2H96v-56.6L56.6 162H37.9a5 5 0 1 1 0-2h19.5L98 200.6V256h106.1zm-150.2 2a5 5 0 1 1 0-2H80v-46.59L48.59 178H21.9a5 5 0 1 1 0-2H49.41L82 208.59V258H53.9zM34 39.8v1.61L9.41 66H0v-2h8.59L32 40.59V0h2v39.8zM2 300.1a5 5 0 0 1 3.9 3.9H3.83A3 3 0 0 0 0 302.17V256h18v48h-2v-46H2v42.1zM34 241v63h-2v-62H0v-2h34v1zM17 18H0v-2h16V0h2v18h-1zm273-2h14v2h-16V0h2v16zm-32 273v15h-2v-14h-14v14h-2v-16h18v1zM0 92.1A5.02 5.02 0 0 1 6 97a5 5 0 0 1-6 4.9v-2.07a3 3 0 1 0 0-5.66V92.1zM80 272h2v32h-2v-32zm37.9 32h-2.07a3 3 0 0 0-5.66 0h-2.07a5 5 0 0 1 9.8 0zM5.9 0A5.02 5.02 0 0 1 0 5.9V3.83A3 3 0 0 0 3.83 0H5.9zm294.2 0h2.07A3 3 0 0 0 304 3.83V5.9a5 5 0 0 1-3.9-5.9zm3.9 300.1v2.07a3 3 0 0 0-1.83 1.83h-2.07a5 5 0 0 1 3.9-3.9zM97 100a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-48 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 96a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-144a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-96 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm96 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-32 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM49 36a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-32 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM33 68a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 240a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm80-176a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm112 176a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM17 180a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM17 84a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'%3E%3C/path%3E%3C/svg%3E");
    }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen pattern flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="/" class="flex flex-col text-center justify-center items-center">
                    <x-application-logo class="size-32" />
                </a>    
            </div>

            {{-- <div class="sm:max-w-sm mt-6 mb-5 px-6 py-4 bg-white border border-ageno/30 dark:bg-gray-800 shadow-sm overflow-y-auto rounded-lg">
            </div> --}}
            {{ $slot }}

        </div>


  <script src="{{ asset('js/libphonenumber-min.js') }}"></script>
  <script>
  function phoneInput() {
      return {
        countries: [
        //   { name: 'Nigeria', code: 'NG', dialCode: '+234' },
          { name: 'Afghanistan', code: 'AF', dialCode: '+93' },
          { name: 'Albania', code: 'AL', dialCode: '+355' },
          { name: 'Algeria', code: 'DZ', dialCode: '+213' },
          { name: 'Andorra', code: 'AD', dialCode: '+376' },
          { name: 'Angola', code: 'AO', dialCode: '+244' },
          { name: 'Argentina', code: 'AR', dialCode: '+54' },
          { name: 'Armenia', code: 'AM', dialCode: '+374' },
          { name: 'Australia', code: 'AU', dialCode: '+61' },
          { name: 'Austria', code: 'AT', dialCode: '+43' },
          { name: 'Azerbaijan', code: 'AZ', dialCode: '+994' },
          { name: 'Bahamas', code: 'BS', dialCode: '+1-242' },
          { name: 'Bahrain', code: 'BH', dialCode: '+973' },
          { name: 'Bangladesh', code: 'BD', dialCode: '+880' },
          { name: 'Barbados', code: 'BB', dialCode: '+1-246' },
          { name: 'Belarus', code: 'BY', dialCode: '+375' },
          { name: 'Belgium', code: 'BE', dialCode: '+32' },
          { name: 'Belize', code: 'BZ', dialCode: '+501' },
          { name: 'Benin', code: 'BJ', dialCode: '+229' },
          { name: 'Bhutan', code: 'BT', dialCode: '+975' },
          { name: 'Bolivia', code: 'BO', dialCode: '+591' },
          { name: 'Bosnia and Herzegovina', code: 'BA', dialCode: '+387' },
          { name: 'Botswana', code: 'BW', dialCode: '+267' },
          { name: 'Brazil', code: 'BR', dialCode: '+55' },
          { name: 'Brunei Darussalam', code: 'BN', dialCode: '+673' },
          { name: 'Bulgaria', code: 'BG', dialCode: '+359' },
          { name: 'Burkina Faso', code: 'BF', dialCode: '+226' },
          { name: 'Burundi', code: 'BI', dialCode: '+257' },
          { name: 'Cambodia', code: 'KH', dialCode: '+855' },
          { name: 'Cameroon', code: 'CM', dialCode: '+237' },
          { name: 'Canada', code: 'CA', dialCode: '+1' },
          { name: 'Cape Verde', code: 'CV', dialCode: '+238' },
          { name: 'Central African Republic', code: 'CF', dialCode: '+236' },
          { name: 'Chad', code: 'TD', dialCode: '+235' },
          { name: 'Chile', code: 'CL', dialCode: '+56' },
          { name: 'China', code: 'CN', dialCode: '+86' },
          { name: 'Colombia', code: 'CO', dialCode: '+57' },
          { name: 'Comoros', code: 'KM', dialCode: '+269' },
          { name: 'Congo', code: 'CG', dialCode: '+242' },
          { name: 'Congo, Democratic Republic of the Congo', code: 'CD', dialCode: '+243' },
          { name: 'Costa Rica', code: 'CR', dialCode: '+506' },
          { name: "Cote d'Ivoire", code: 'CI', dialCode: '+225' },
          { name: 'Croatia', code: 'HR', dialCode: '+385' },
          { name: 'Cuba', code: 'CU', dialCode: '+53' },
          { name: 'Cyprus', code: 'CY', dialCode: '+357' },
          { name: 'Czech Republic', code: 'CZ', dialCode: '+420' },
          { name: 'Denmark', code: 'DK', dialCode: '+45' },
          { name: 'Djibouti', code: 'DJ', dialCode: '+253' },
          { name: 'Dominica', code: 'DM', dialCode: '+1-767' },
          { name: 'Dominican Republic', code: 'DO', dialCode: '+1-809' },
          { name: 'Ecuador', code: 'EC', dialCode: '+593' },
          { name: 'Egypt', code: 'EG', dialCode: '+20' },
          { name: 'El Salvador', code: 'SV', dialCode: '+503' },
          { name: 'Equatorial Guinea', code: 'GQ', dialCode: '+240' },
          { name: 'Eritrea', code: 'ER', dialCode: '+291' },
          { name: 'Estonia', code: 'EE', dialCode: '+372' },
          { name: 'Eswatini', code: 'SZ', dialCode: '+268' },
          { name: 'Ethiopia', code: 'ET', dialCode: '+251' },
          { name: 'Fiji', code: 'FJ', dialCode: '+679' },
          { name: 'Finland', code: 'FI', dialCode: '+358' },
          { name: 'France', code: 'FR', dialCode: '+33' },
          { name: 'Gabon', code: 'GA', dialCode: '+241' },
          { name: 'Gambia', code: 'GM', dialCode: '+220' },
          { name: 'Georgia', code: 'GE', dialCode: '+995' },
          { name: 'Germany', code: 'DE', dialCode: '+49' },
          { name: 'Ghana', code: 'GH', dialCode: '+233' },
          { name: 'Greece', code: 'GR', dialCode: '+30' },
          { name: 'Grenada', code: 'GD', dialCode: '+1-473' },
          { name: 'Guatemala', code: 'GT', dialCode: '+502' },
          { name: 'Guinea', code: 'GN', dialCode: '+224' },
          { name: 'Guinea-Bissau', code: 'GW', dialCode: '+245' },
          { name: 'Guyana', code: 'GY', dialCode: '+592' },
          { name: 'Haiti', code: 'HT', dialCode: '+509' },
          { name: 'Honduras', code: 'HN', dialCode: '+504' },
          { name: 'Hungary', code: 'HU', dialCode: '+36' },
          { name: 'Iceland', code: 'IS', dialCode: '+354' },
          { name: 'India', code: 'IN', dialCode: '+91' },
          { name: 'Indonesia', code: 'ID', dialCode: '+62' },
          { name: 'Iran', code: 'IR', dialCode: '+98' },
          { name: 'Iraq', code: 'IQ', dialCode: '+964' },
          { name: 'Ireland', code: 'IE', dialCode: '+353' },
          { name: 'Israel', code: 'IL', dialCode: '+972' },
          { name: 'Italy', code: 'IT', dialCode: '+39' },
          { name: 'Jamaica', code: 'JM', dialCode: '+1-876' },
          { name: 'Japan', code: 'JP', dialCode: '+81' },
          { name: 'Jordan', code: 'JO', dialCode: '+962' },
          { name: 'Kazakhstan', code: 'KZ', dialCode: '+7' },
          { name: 'Kenya', code: 'KE', dialCode: '+254' },
          { name: 'Kiribati', code: 'KI', dialCode: '+686' },
          { name: 'Kuwait', code: 'KW', dialCode: '+965' },
          { name: 'Kyrgyzstan', code: 'KG', dialCode: '+996' },
          { name: 'Laos', code: 'LA', dialCode: '+856' },
          { name: 'Latvia', code: 'LV', dialCode: '+371' },
          { name: 'Lebanon', code: 'LB', dialCode: '+961' },
          { name: 'Lesotho', code: 'LS', dialCode: '+266' },
          { name: 'Liberia', code: 'LR', dialCode: '+231' },
          { name: 'Libya', code: 'LY', dialCode: '+218' },
          { name: 'Liechtenstein', code: 'LI', dialCode: '+423' },
          { name: 'Lithuania', code: 'LT', dialCode: '+370' },
          { name: 'Luxembourg', code: 'LU', dialCode: '+352' },
          { name: 'Madagascar', code: 'MG', dialCode: '+261' },
          { name: 'Malawi', code: 'MW', dialCode: '+265' },
          { name: 'Malaysia', code: 'MY', dialCode: '+60' },
          { name: 'Maldives', code: 'MV', dialCode: '+960' },
          { name: 'Mali', code: 'ML', dialCode: '+223' },
          { name: 'Malta', code: 'MT', dialCode: '+356' },
          { name: 'Marshall Islands', code: 'MH', dialCode: '+692' },
          { name: 'Mauritania', code: 'MR', dialCode: '+222' },
          { name: 'Mauritius', code: 'MU', dialCode: '+230' },
          { name: 'Mexico', code: 'MX', dialCode: '+52' },
          { name: 'Micronesia', code: 'FM', dialCode: '+691' },
          { name: 'Moldova', code: 'MD', dialCode: '+373' },
          { name: 'Monaco', code: 'MC', dialCode: '+377' },
          { name: 'Mongolia', code: 'MN', dialCode: '+976' },
          { name: 'Montenegro', code: 'ME', dialCode: '+382' },
          { name: 'Morocco', code: 'MA', dialCode: '+212' },
          { name: 'Mozambique', code: 'MZ', dialCode: '+258' },
          { name: 'Myanmar', code: 'MM', dialCode: '+95' },
          { name: 'Namibia', code: 'NA', dialCode: '+264' },
          { name: 'Nauru', code: 'NR', dialCode: '+674' },
          { name: 'Nepal', code: 'NP', dialCode: '+977' },
          { name: 'Netherlands', code: 'NL', dialCode: '+31' },
          { name: 'New Zealand', code: 'NZ', dialCode: '+64' },
          { name: 'Nicaragua', code: 'NI', dialCode: '+505' },
          { name: 'Niger', code: 'NE', dialCode: '+227' },
          { name: 'Nigeria', code: 'NG', dialCode: '+234' },
          { name: 'North Korea', code: 'KP', dialCode: '+850' },
          { name: 'North Macedonia', code: 'MK', dialCode: '+389' },
          { name: 'Norway', code: 'NO', dialCode: '+47' },
          { name: 'Oman', code: 'OM', dialCode: '+968' },
          { name: 'Pakistan', code: 'PK', dialCode: '+92' },
          { name: 'Palau', code: 'PW', dialCode: '+680' },
          { name: 'Palestine', code: 'PS', dialCode: '+970' },
          { name: 'Panama', code: 'PA', dialCode: '+507' },
          { name: 'Papua New Guinea', code: 'PG', dialCode: '+675' },
          { name: 'Paraguay', code: 'PY', dialCode: '+595' },
          { name: 'Peru', code: 'PE', dialCode: '+51' },
          { name: 'Philippines', code: 'PH', dialCode: '+63' },
          { name: 'Poland', code: 'PL', dialCode: '+48' },
          { name: 'Portugal', code: 'PT', dialCode: '+351' },
          { name: 'Qatar', code: 'QA', dialCode: '+974' },
          { name: 'Romania', code: 'RO', dialCode: '+40' },
          { name: 'Russia', code: 'RU', dialCode: '+7' },
          { name: 'Rwanda', code: 'RW', dialCode: '+250' },
          { name: 'Saint Kitts and Nevis', code: 'KN', dialCode: '+1-869' },
          { name: 'Saint Lucia', code: 'LC', dialCode: '+1-758' },
          { name: 'Saint Vincent and the Grenadines', code: 'VC', dialCode: '+1-784' },
          { name: 'Samoa', code: 'WS', dialCode: '+685' },
          { name: 'San Marino', code: 'SM', dialCode: '+378' },
          { name: 'Sao Tome and Principe', code: 'ST', dialCode: '+239' },
          { name: 'Saudi Arabia', code: 'SA', dialCode: '+966' },
          { name: 'Senegal', code: 'SN', dialCode: '+221' },
          { name: 'Serbia', code: 'RS', dialCode: '+381' },
          { name: 'Seychelles', code: 'SC', dialCode: '+248' },
          { name: 'Sierra Leone', code: 'SL', dialCode: '+232' },
          { name: 'Singapore', code: 'SG', dialCode: '+65' },
          { name: 'Slovakia', code: 'SK', dialCode: '+421' },
          { name: 'Slovenia', code: 'SI', dialCode: '+386' },
          { name: 'Solomon Islands', code: 'SB', dialCode: '+677' },
          { name: 'Somalia', code: 'SO', dialCode: '+252' },
          { name: 'South Africa', code: 'ZA', dialCode: '+27' },
          { name: 'South Korea', code: 'KR', dialCode: '+82' },
          { name: 'South Sudan', code: 'SS', dialCode: '+211' },
          { name: 'Spain', code: 'ES', dialCode: '+34' },
          { name: 'Sri Lanka', code: 'LK', dialCode: '+94' },
          { name: 'Sudan', code: 'SD', dialCode: '+249' },
          { name: 'Suriname', code: 'SR', dialCode: '+597' },
          { name: 'Sweden', code: 'SE', dialCode: '+46' },
          { name: 'Switzerland', code: 'CH', dialCode: '+41' },
          { name: 'Syria', code: 'SY', dialCode: '+963' },
          { name: 'Taiwan', code: 'TW', dialCode: '+886' },
          { name: 'Tajikistan', code: 'TJ', dialCode: '+992' },
          { name: 'Tanzania', code: 'TZ', dialCode: '+255' },
          { name: 'Thailand', code: 'TH', dialCode: '+66' },
          { name: 'Timor-Leste', code: 'TL', dialCode: '+670' },
          { name: 'Togo', code: 'TG', dialCode: '+228' },
          { name: 'Tonga', code: 'TO', dialCode: '+676' },
          { name: 'Trinidad and Tobago', code: 'TT', dialCode: '+1-868' },
          { name: 'Tunisia', code: 'TN', dialCode: '+216' },
          { name: 'Turkey', code: 'TR', dialCode: '+90' },
          { name: 'Turkmenistan', code: 'TM', dialCode: '+993' },
          { name: 'Tuvalu', code: 'TV', dialCode: '+688' },
          { name: 'Uganda', code: 'UG', dialCode: '+256' },
          { name: 'Ukraine', code: 'UA', dialCode: '+380' },
          { name: 'United Arab Emirates', code: 'AE', dialCode: '+971' },
          { name: 'United Kingdom', code: 'GB', dialCode: '+44' },
          { name: 'United States', code: 'US', dialCode: '+1' },
          { name: 'Uruguay', code: 'UY', dialCode: '+598' },
          { name: 'Uzbekistan', code: 'UZ', dialCode: '+998' },
          { name: 'Vanuatu', code: 'VU', dialCode: '+678' },
          { name: 'Vatican City', code: 'VA', dialCode: '+379' },
          { name: 'Venezuela', code: 'VE', dialCode: '+58' },
          { name: 'Vietnam', code: 'VN', dialCode: '+84' },
          { name: 'Yemen', code: 'YE', dialCode: '+967' },
          { name: 'Zambia', code: 'ZM', dialCode: '+260' },
          { name: 'Zimbabwe', code: 'ZW', dialCode: '+263' },
        ],
        selectedCountry: 'NG',
        phoneNumber: '',
        showError: false,
        updatePhoneCode() {
          const selectedCountryObj = this.countries.find(country => country.code === this.selectedCountry);
          this.phoneNumber = selectedCountryObj.dialCode + ' ';
        },
        formatPhoneNumber() {
          try {
            const phoneNumber = libphonenumber.parsePhoneNumber(this.phoneNumber, this.selectedCountry);
            if (phoneNumber.isValid()) {
              this.phoneNumber = phoneNumber.formatInternational();
            }
          } catch (e) {
            // Handle errors like invalid phone number format
          }
        },

        filterNonNumeric() {
        if (!/^\d+$/.test(this.phoneNumber)) {
          this.showError = true;
        } else {
          this.showError = false;
        }
        this.phoneNumber = this.phoneNumber.replace(/\D/g, '');
      },


      }
    }
  </script>
    </body>
</html>
