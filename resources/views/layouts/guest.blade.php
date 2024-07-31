<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true', sidebarOpen: false }" :class="{ 'dark': darkMode }">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Agenoresource') }}</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Nanum+Gothic&display=swap" rel="stylesheet">

@vite(['resources/css/app.css', 'resources/js/app.js'])
<style>
.pattern {
background-image: url("data:image/svg+xml,%3Csvg width='180' height='180' viewBox='0 0 180 180' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M81.28 88H68.413l19.298 19.298L81.28 88zm2.107 0h13.226L90 107.838 83.387 88zm15.334 0h12.866l-19.298 19.298L98.72 88zm-32.927-2.207L73.586 78h32.827l.5.5 7.294 7.293L115.414 87l-24.707 24.707-.707.707L64.586 87l1.207-1.207zm2.62.207L74 80.414 79.586 86H68.414zm16 0L90 80.414 95.586 86H84.414zm16 0L106 80.414 111.586 86h-11.172zm-8-6h11.173L98 85.586 92.414 80zM82 85.586L87.586 80H76.414L82 85.586zM17.414 0L.707 16.707 0 17.414V0h17.414zM4.28 0L0 12.838V0h4.28zm10.306 0L2.288 12.298 6.388 0h8.198zM180 17.414L162.586 0H180v17.414zM165.414 0l12.298 12.298L173.612 0h-8.198zM180 12.838L175.72 0H180v12.838zM0 163h16.413l.5.5 7.294 7.293L25.414 172l-8 8H0v-17zm0 10h6.613l-2.334 7H0v-7zm14.586 7l7-7H8.72l-2.333 7h8.2zM0 165.414L5.586 171H0v-5.586zM10.414 171L16 165.414 21.586 171H10.414zm-8-6h11.172L8 170.586 2.414 165zM180 163h-16.413l-7.794 7.793-1.207 1.207 8 8H180v-17zm-14.586 17l-7-7h12.865l2.333 7h-8.2zM180 173h-6.613l2.334 7H180v-7zm-21.586-2l5.586-5.586 5.586 5.586h-11.172zM180 165.414L174.414 171H180v-5.586zm-8 5.172l5.586-5.586h-11.172l5.586 5.586zM152.933 25.653l1.414 1.414-33.94 33.942-1.416-1.416 33.943-33.94zm1.414 127.28l-1.414 1.414-33.942-33.94 1.416-1.416 33.94 33.943zm-127.28 1.414l-1.414-1.414 33.94-33.942 1.416 1.416-33.943 33.94zm-1.414-127.28l1.414-1.414 33.942 33.94-1.416 1.416-33.94-33.943zM0 85c2.21 0 4 1.79 4 4s-1.79 4-4 4v-8zm180 0c-2.21 0-4 1.79-4 4s1.79 4 4 4v-8zM94 0c0 2.21-1.79 4-4 4s-4-1.79-4-4h8zm0 180c0-2.21-1.79-4-4-4s-4 1.79-4 4h8z' fill='%239C92AC' fill-opacity='0.21' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.nanum-gothic-regular {
font-family: "Nanum Gothic", sans-serif;
font-weight: 400;
font-style: normal;
}

.nanum-gothic-bold {
font-family: "Nanum Gothic", sans-serif;
font-weight: 700;
font-style: normal;
}


.nanum-gothic-extrabold {
font-family: "Nanum Gothic", sans-serif;
font-weight: 800;
font-style: normal;
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
